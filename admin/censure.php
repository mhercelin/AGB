<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2011    //
//         Hercelin Maxime (c) 2005 - 2011   //
//         http://www.alexguestbook.net/     //
//             all right reserved            //
///////////////////////////////////////////////

DEFINE("AGUEST", true);
$chem_absolu = "../";

//----------------------- fichiers à inclure
include($chem_absolu."config/extension.inc");
include($chem_absolu."include/admin_include.".$alex_livre_ext);

//----------------------- on controle si le visiteur est ou non autorisé à visiter cette page
verif_page("gestion_censure");

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "text1",
	"aj_mot",
	"mot_interdit",
	"remplacer_par",
	"gestion_censure",
	"ajouter",
	"liste_jour",
	"sup_mots",
	"erreur_aj_censure1",
	"erreur_aj_censure2",
	"verif_sup",
);

//----------------------- ajout de nouveaux mots
if (isset($_POST['ajouter'])){
	$query = "INSERT INTO ".$name_table['alex_livre_censure']." (texte_censure, texte_remplace) VALUES ('".$_POST['mot_interdit']."','".$_POST['remplacer_par']."')";
	$result = $f_db_connexion -> sql_query($query);
	message_javascript($f_lang['ok_aj_mot']);
}

//----------------------- suppression de mots
if (isset($_POST['supprimer'])){
	for($i = 1; $i <= $_POST['nbre_boucles']; $i++){
		$chaine_mot = "sup_".$i;
		if (isset($_POST[$chaine_mot])){
			$query = "DELETE FROM ".$name_table['alex_livre_censure']." WHERE id_mot='".$_POST[$chaine_mot]."'";
			$result = $f_db_connexion -> sql_query($query);
		}
	}
}

//----------------------- modification
if (isset($_POST['modifier'])){
	for($i = 1; $i <= $_POST['nbre_boucles']; $i++){
		$query = "UPDATE ".$name_table['alex_livre_censure']." set texte_censure='".$_POST["gestion_mots_".$i]."', texte_remplace ='".$_POST["gestion_remplace_".$i]."' WHERE id_mot='".$_POST["id_mot_".$i]."'";
		$result = $f_db_connexion -> sql_query($query);
	}
	message_javascript($f_lang['merci_modif']);
}

//----------------------- récupération de tous les mots interdits
sql_select_query("*", "alex_livre_censure", "", "ORDER BY id_mot");

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

//----------------------- affichage du template
$echo_html = new ModeliXe("censure.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
template_type($f_lang['title censure']);

/* langue */
generate_langue($tab_champs_langue);

/* urls */
$echo_html -> MxText("f_sid", $_GET['f_sid']);

/* boucle pour afficher les mots enregistrés */
//nbre de boucles
$echo_html -> MxText("nbre_boucles", $nb_champs_alex_livre_censure);

if ($nb_champs_alex_livre_censure > 0){
	$echo_html -> WithMxPath("bloc5", "relative");
	for ($i = 1; $i <= $nb_champs_alex_livre_censure; $i++){
		$echo_html -> MxText("mot", $f_lang['mot']);
		$echo_html -> MxText("remplace_by", $f_lang['remplace_by']);

		//n° de la boucle en cours
		$echo_html -> MxText("value_boucle", $i);
		//checkbox
		$echo_html -> MxText("value_check", $alex_livre_censure_id_mot[$i]);
		//mot censuré
		$echo_html -> MxText("value_mot", $alex_livre_censure_texte_censure[$i]);
		//mot remplacant
		$echo_html -> MxText("value_remplace", $alex_livre_censure_texte_remplace[$i]);

		$echo_html -> MxBloc("", "loop");
	}
}
else
	$echo_html -> MxBloc("bloc5", "rese");

$html = $echo_html -> MxWrite("", true);
echo $html;
?>