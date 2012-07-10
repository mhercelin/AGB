<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2012    //
//         Hercelin Maxime (c) 2005 - 2012   //
//         http://www.alexguestbook.net/     //
//             all right reserved            //
///////////////////////////////////////////////

DEFINE("AGUEST", true);
$chem_absolu = "../";

//----------------------- fichiers à inclure
include($chem_absolu."config/extension.inc");
include($chem_absolu."include/admin_include.".$alex_livre_ext);

//----------------------- on controle si le visiteur est ou non autorisé à visiter cette page
verif_page("gestion_admin");

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "gest_admin",
	"sup_admin",
	"login_admin",
	"email_admin",
	"modif_admin",
	"value_sup_admin",
	"verif_sup_admin"
);

//----------------------- suppression d'admins
if (isset($_POST['supprimer'])){
	$nb_admin = countTotal("*", 'alex_livre_users');
	for($i = 1; $i <= $_POST['nbre_boucles']; $i++){
		$chaine_mot = "sup_".$i;
		if (isset($_POST[$chaine_mot]) && $nb_admin>1){
			$query = "DELETE FROM ".$name_table['alex_livre_users']." WHERE id_user='".$_POST[$chaine_mot]."'";
			$result = $f_db_connexion -> sql_query($query);
			$nb_admin--;
		}
		else if (isset($_POST[$chaine_mot]) && $nb_admin==1){
			message_javascript($f_lang['admin_suppr_dernier_admin']);
			break;
		}
	}
}

//----------------------- on récupère tous les admins
sql_select_query("id_user, login, email", "alex_livre_users", "", "ORDER BY id_user");

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

//----------------------- affichage du template
$echo_html = new ModeliXe("gest_admin.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
template_type($f_lang['title gest admin']);

/* langue */
generate_langue($tab_champs_langue);

/* urls */
$echo_html -> MxText("f_sid", $_GET['f_sid']);

/* boucle pour afficher les admins enregistrés */
//nbre de boucles
$echo_html -> MxText("nbre_boucles", $nb_champs_alex_livre_users);

if ($nb_champs_alex_livre_users > 0){
	$echo_html -> WithMxPath("bloc5", "relative");
	for ($i = 1; $i <= $nb_champs_alex_livre_users; $i++){
		//id
		$echo_html -> MxText("f_sid", $_GET['f_sid']);
		//n° de la boucle en cours
		$echo_html -> MxText("value_boucle", $i);
		//checkbox
		$echo_html -> MxText("id_admin", $alex_livre_users_id_user[$i]);
		//mot censuré
		$echo_html -> MxText("login", $alex_livre_users_login[$i]);
		//mot remplacant
		$echo_html -> MxText("email", $alex_livre_users_email[$i]);
		//txt modifier
		$echo_html -> MxText("modifier", ucfirst($f_lang['modif_admin']));

		$echo_html -> MxBloc("", "loop");
	}
}
else
	$echo_html -> MxBloc("bloc5", "rese");

$html = $echo_html -> MxWrite("", true);
echo $html;
?>