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

if (!isset($_GET['debut']))
	$_GET['debut'] = 0;

//----------------------- fichiers à inclure
include($chem_absolu."config/extension.inc");
include($chem_absolu."include/admin_include.".$alex_livre_ext);

//----------------------- on controle si le visiteur est ou non autorisé à visiter cette page
verif_page("gestion_messages");

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "gestion_mess",
	"selectionner_pages",
	"messages_gest",
	"page_gest",
	"aller_en_page",
	"supprimer_gest",
	"auteur_gest",
	"modifier_gest",
	"supprimer_mess_selected",
	"valider_mess",
	"verif_sup_mess",
	"valide",
	"action"
);

//----------------------- enregistrement du nbre de messages affichés par page
if (isset($_POST['selectionner'])){
	$query = "UPDATE ".$name_table['alex_livre_users']." SET nb_mess_page='".$_POST['select_nb_page']."' WHERE id_user='$id_user'";
	$result = $f_db_connexion -> sql_query($query);
	$nb_messages_page = $_POST['select_nb_page'];
}

/* toujours un message affiché au minimum */
if ($nb_messages_page < 1)
	$nb_messages_page = 1;

//----------------------- suppression de messages
if (isset($_POST['supprimer'])){
	for($i = 1; $i <= $nb_messages_page; $i++){
		$chaine_mot = "sup_".$i;
		if (isset($_POST[$chaine_mot])){
			$query = "DELETE FROM ".$name_table['alex_livre_messages']." WHERE id='".$_POST[$chaine_mot]."'";
			$result = $f_db_connexion -> sql_query($query);
		}
	}
}

//----------------------- validation de messages
if (isset($_POST['valider'])){
	for($i = 1; $i <= $nb_messages_page; $i++){
		$chaine_mot = "f_valide_".$i;
		$chaine_mot2 = "id_mess_".$i;
		if (isset($_POST[$chaine_mot])){
			$query = "UPDATE ".$name_table['alex_livre_messages']." SET valid='"."yes"."' WHERE id='".$_POST[$chaine_mot2]."'";
			$result = $f_db_connexion -> sql_query($query);
		}
		else {
			$query = "UPDATE ".$name_table['alex_livre_messages']." SET valid='"."no"."' WHERE id='".$_POST[$chaine_mot2]."'";
			$result = $f_db_connexion -> sql_query($query);
		}
	}
	message_javascript($f_lang['ok_validation']);
}


//----------------------- on récupère les messages
sql_select_query("id, nom, message, ip, valid", "alex_livre_messages", "", "ORDER BY time DESC", "LIMIT ".$_GET['debut'].",".$nb_messages_page);

//----------------------- nbre total de messages 
$total_messages_livre = countTotal("*", 'alex_livre_messages');

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

//----------------------- affichage du template
$echo_html = new ModeliXe("gestion_mess.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
template_type($f_lang['title gestion mess']);

/* langue */
generate_langue($tab_champs_langue);

/* nbre de message par page */
$echo_html -> MxText("select_nb_page", $nb_messages_page);
$echo_html -> MxText("debut", $_GET['debut']);

/* page suivante / précédente */
$page = floor($_GET['debut'] / $nb_messages_page) + 1;
$nb_pages_total = ceil($total_messages_livre / $nb_messages_page);

//précédente
if ($page > 1)
	$echo_html -> MxText("precedente", "<a href=\"gestion_mess.php?f_sid=".$_GET['f_sid']."&debut=".($_GET['debut'] - $nb_messages_page)."\">".$f_lang['precedente']."</a>");
else
	$echo_html -> MxText("precedente", "<font class=\"Verdana_Gris\">".$f_lang['precedente']."</font>");

//suivante
if ($page < $nb_pages_total)
	$echo_html -> MxText("suivante", "<a href=\"gestion_mess.php?f_sid=".$_GET['f_sid']."&debut=".($_GET['debut'] + $nb_messages_page)."\">".$f_lang['suivante']."</a>");
else
	$echo_html -> MxText("suivante", "<font class=\"Verdana_Gris\">".$f_lang['suivante']."</font>");

/* nbre total de pages */
$echo_html -> MxText("nb_total_pages", $nb_pages_total);

/* liste des pages */
$liste_pages = "";
for ($i = 1; $i <= $nb_pages_total; $i++){
	if ($page == $i)
		$select = "selected";
	else
		$select = "";
	$liste_pages .= "<option $select value=\"gestion_mess.php?f_sid=".$_GET['f_sid']."&debut=".(($i - 1) * $nb_messages_page)."\">".$i."</option>";
}

$echo_html -> MxText("liste_pages", $liste_pages);

/* sélectionner/désélectionner tous les messages*/
$echo_html -> MxText("selectionner_tous_messages", $f_lang['selectionner_tous_messages']);

/* urls */
$echo_html -> MxText("f_sid", $_GET['f_sid']);

/* boucle pour afficher les messages */
if ($nb_champs_alex_livre_messages > 0){
	$echo_html -> WithMxPath("bloc5", "relative");
	for ($i = 1; $i <= $nb_champs_alex_livre_messages; $i++){
		
		//n° de la boucle en cours
		$echo_html -> MxText("nb_boucles", $i);

		//id du message
		$echo_html -> MxText("b_id", $alex_livre_messages_id[$i]);

		//auteur
		$echo_html -> MxText("b_auteur", $alex_livre_messages_nom[$i]."<br>[ip : ".$alex_livre_messages_ip[$i]."]");
		
		//message
		$config['cut_mots'] = 35;

		if (strlen($alex_livre_messages_message[$i]) > 400)
			$alex_livre_messages_message[$i] = substr($alex_livre_messages_message[$i], 0, 400)." [...]";

		$echo_html -> MxText("b_mess", cut($alex_livre_messages_message[$i]));
		
		// id de la session
		$echo_html -> MxText("f_sid", $_GET['f_sid']);
		
		// debut
		$echo_html -> MxText("debut", $_GET['debut']);
		
		//txt modifier & répondre
		$echo_html -> MxText("modifier", ucfirst($f_lang['modif_admin']));
		$echo_html -> MxText("repondre", ucfirst($f_lang['repondre']));

		// img valide ou non
		if ($alex_livre_messages_valid[$i] == "no"){
			$echo_html -> MxText("b_valide", '<img src="../images/en_cours.gif" border="0" width="9" height="12" title="'.addslashes($f_lang['mess_invalide']).'">');
			
			
			//case valider désélectionnée ?
			$echo_html -> MxText("b_value_f_valide", "");
			// couleur de fond de la cellule
			$echo_html -> MxText("color", "#FDD9D9");
		}
		else{
			$echo_html -> MxText("b_valide", '<img src="../images/valide.gif" border="0" width="13" height="10" alt="'.addslashes($f_lang['mess_valide']).'">');
			
			
			//case valider sélectionnée ?
			$echo_html -> MxText("b_value_f_valide", " checked");
			
			// couleur de fond de la cellule
			$echo_html -> MxText("color", "#F5F5F5");
		}
		
		$echo_html -> MxBloc("", "loop");
	}
}
else
	$echo_html -> MxBloc("bloc5", "rese");
	 
$html = $echo_html -> MxWrite("", true);
echo $html;
?>