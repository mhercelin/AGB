<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2008    //
//         Hercelin Maxime (c) 2005 - 2008   //
//         http://www.alexguestbook.net/     //
//             all right reserved            //
///////////////////////////////////////////////

DEFINE("AGUEST", true);
$chem_absolu = "../";

if (!isset($_GET['n']) || !(int)trim($_GET['n']))
	$_GET['n'] = 5;
else
	$_GET['n'] = (int)trim($_GET['n']);

if (file_exists($chem_absolu."config/extension.inc")){
	include($chem_absolu."config/extension.inc");
	include($chem_absolu."include/livre_include.".$alex_livre_ext);
}
else
	exit();

//----------------------- récupération des données du modèle graphique
sql_select_query("msg", "alex_livre_txt_lang", "WHERE `type`='boite'");

//----------------------- récupération de tous les smileys / mots censurés
sql_select_query("*", "alex_livre_smileys", "", "ORDER BY numero");
sql_select_query("*", "alex_livre_censure");

/* données du modèle */
if (isset($alex_livre_txt_lang_msg[1]))
	$TAB_DONNEES_BOITE = explode("	", $alex_livre_txt_lang_msg[1]);

if (isset($TAB_DONNEES_BOITE[0]))
	$value_date = htmlspecialchars($TAB_DONNEES_BOITE[0]);
else
	$value_date = "d/m/Y H:i:s";

if (isset($TAB_DONNEES_BOITE[1]))
	$value_maxi_pseudo = (int)trim($TAB_DONNEES_BOITE[1]);
else
	$value_maxi_pseudo = 30;

if (isset($TAB_DONNEES_BOITE[2]))
	$value_maxi_message = (int)trim($TAB_DONNEES_BOITE[2]);
else
	$value_maxi_message = 400;

if (isset($TAB_DONNEES_BOITE[3]))
	$value_url_dossier = $TAB_DONNEES_BOITE[3];
else
	$value_url_dossier = findHost();

if (isset($TAB_DONNEES_BOITE[4]))
	$value_url_livre = $TAB_DONNEES_BOITE[4];
else
	$value_url_livre = findHost().$url_recharger;

if (isset($TAB_DONNEES_BOITE[5]))
	$value_saut_ligne = $TAB_DONNEES_BOITE[5];
else
	$value_saut_ligne = 0;

if (isset($TAB_DONNEES_BOITE[6]))
	$value_modele_tpl = $TAB_DONNEES_BOITE[6];
else
	$value_modele_tpl = defautHtmlBoite();

/**
 * Affichage des messages
 */
$CHEM_COMPLET = $value_url_dossier;
$AJOUTER_SAUT_LIGNE = $value_saut_ligne;
$boite_java = true;
sql_select_query("id, nom, note, time, message", "alex_livre_messages", "WHERE valid='yes'", "ORDER BY time DESC", "LIMIT 0, ".$_GET['n'], true);

$CHAINE_JAVA = '';
$CHAINE_BOUCLE = '';
preg_match('`\[boucle\](.*)\[/boucle\]`i', $value_modele_tpl, $donnees_boucle);

if (isset($donnees_boucle[1])){
	$donnees_boucle[1] = addslashes($donnees_boucle[1]);

	for ($i = 1; $i <= $nb_champs_alex_livre_messages; $i++){
		if (strlen($alex_livre_messages_nom[$i]) > $value_maxi_pseudo)
			$pseudo = substr($alex_livre_messages_nom[$i], 0, $value_maxi_pseudo).".";
		else
			$pseudo = $alex_livre_messages_nom[$i];

		$CHAINE_BOUCLE .= str_replace("[URL]", $value_url_livre."#id".$alex_livre_messages_id[$i], str_replace("[MESSAGE]", trim(addslashes($alex_livre_messages_message[$i])), str_replace("[NOTE]", (($alex_livre_messages_note[$i]) ? $alex_livre_messages_note[$i] : "-"), str_replace("[PSEUDO]", trim(htmlspecialchars($pseudo)), str_replace("[DATE]", date($value_date, $alex_livre_messages_time[$i]), $donnees_boucle[1])))));
	}

	$CHAINE_JAVA = preg_replace('`\[boucle\].*\[/boucle\]`i', $CHAINE_BOUCLE, addslashes($value_modele_tpl));
}
else
	$CHAINE_JAVA = $f_lang['erreur_par_boite'];

echo 'document.write("'.str_replace(chr(13), " ", str_replace(chr(10), " ", $CHAINE_JAVA)).'");';
?> 