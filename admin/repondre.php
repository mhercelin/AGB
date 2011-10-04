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
$img_blank_no_aff = 256;

//----------------------- fichiers à inclure
include($chem_absolu."config/extension.inc");
include($chem_absolu."include/admin_include.".$alex_livre_ext);

if (file_exists($chem_absolu."languages/flags/".$config['langue'].".".$alex_livre_ext))
	include($chem_absolu."languages/flags/".$config['langue'].".".$alex_livre_ext);
else
	include($chem_absolu."languages/flags/english.".$alex_livre_ext);

//----------------------- on controle si le visiteur est ou non autorisé à visiter cette page
verif_page("gestion_messages");

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "revenir",
	"enregistrer",
	"repondre",
	"message_modif",
	"votre_reponse"
);

//----------------------- enregistrement des modifications
if (isset($_POST['modifier'])){
	$query = "UPDATE ".$name_table['alex_livre_messages']." SET reponse='".$_POST['reponse']."', titre_reponse='".$_POST['titre_reponse']."' WHERE id='".$_GET['id_mess']."'";
	$result = $f_db_connexion -> sql_query($query);

	$nbTest = countTotal("*", "alex_livre_txt_lang", "WHERE `type`='rep'");

	if (!$nbTest){
		$query = "INSERT INTO ".$name_table['alex_livre_txt_lang']." (`lang`, `type`, `msg`) VALUES ('', 'rep', '".$_POST['titre_reponse']."')";
		$result = $f_db_connexion -> sql_query($query);
	}
	else {
		$query = "UPDATE ".$name_table['alex_livre_txt_lang']." SET `msg`='".$_POST['titre_reponse']."' WHERE `type`='rep'";
		$result = $f_db_connexion -> sql_query($query);
	}

	message_javascript($f_lang['ok_reponse_mess']);
	redirection_aguest3("gestion_mess.php?f_sid=".$_GET['f_sid']."&debut=".$_GET['debut']);
	exit();
}

// on récupère tous les smileys / mots censurés
sql_select_query("*", "alex_livre_smileys", "", "ORDER BY numero");
sql_select_query("*", "alex_livre_censure");

// on récupère les infos sur le message en cours
sql_select_query("*", "alex_livre_messages", "WHERE id=".$_GET['id_mess'], "", "", true);

// une réponse a-t-elle déjà été postée dernièrement ?
// si oui on s'en sert comme modèle
sql_select_query("msg", "alex_livre_txt_lang", "WHERE `type`='rep'");

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

//----------------------- affichage du template
$echo_html = new ModeliXe("repondre.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
template_type($f_lang['repondre']);

/* langue */
generate_langue($tab_champs_langue);

/* urls */
$echo_html -> MxText("f_sid", $_GET['f_sid']);
$echo_html -> MxText("debut", $_GET['debut']);
$echo_html -> MxText("id_mess", $_GET['id_mess']);

/* création de la chaine html des smileys */
$chaine_smileys = "";

if (!isset($config['nb_max_smileys']) || !$config['nb_max_smileys']) $config['nb_max_smileys'] = $nb_champs_alex_livre_smileys;
if ($config['nb_max_smileys'] > $nb_champs_alex_livre_smileys) $config['nb_max_smileys'] = $nb_champs_alex_livre_smileys;

for ($i = 1; $i <= $config['nb_max_smileys']; $i++){
	$chaine_smileys .= "<img src=\"".$chem_absolu."images/smileys/".$alex_livre_smileys_smiley[$i]."\" alt=\"\" title=\"".ucfirst(str_replace("_", " ", preg_replace('/[.]{1}(.)*$/i', "", $alex_livre_smileys_smiley[$i])))."\" style=\"border: 0px; cursor: pointer; vertical-align: middle\"  onclick=\"smiley('".$alex_livre_smileys_car_replace[$i]."');\" />";

	if ($i < $nb_champs_alex_livre_smileys)
		$chaine_smileys .= " ";
}

/* S'il reste des smileys à afficher */
if ($nb_champs_alex_livre_smileys > $config['nb_max_smileys'])
	$chaine_smileys .= "&nbsp;<img src=\"".$chem_absolu."templates/admin/images/plus_smileys.png\" width=\"9\" height=\"15\" alt=\"\" title=\"".$f_lang['plus_smileys']."\" style=\"border: 0px; cursor: pointer; vertical-align: middle\" onclick=\"script_popup('".$chem_absolu."smileys.php', 'smileys_list', 250, 250, 'resizable=yes, scrollbars=yes')\" />";

$echo_html -> MxText("liste_smileys", $chaine_smileys);

/* formatage du message */
$i = 1;
$auteur = "";

if ($alex_livre_messages_pays[1] && $config['ok_pays']){
	$alex_livre_messages_pays[1] = trim($alex_livre_messages_pays[1]);
	$src_img = $chem_absolu.'images/flags/'.$alex_livre_messages_pays[1].'.png';
	$taille_img = @filesize($src_img);
	$ok_exists_img = @file_exists($src_img);

	// Si taille de l'images = $img_blank_no_aff octets => image transparente, on ne l'affiche pas
	if ($ok_exists_img && $taille_img != $img_blank_no_aff)
		$auteur .= '<img src="'.$src_img.'" width="20" height="13" style="border: 0px" title="'.((isset($FLAGS_LANG[$alex_livre_messages_pays[1]])) ? $FLAGS_LANG[$alex_livre_messages_pays[1]] : $f_lang['flag']).'" /> ';
}

$auteur .= "<b>".$alex_livre_messages_nom[1]."</b>";

/* ville */
if (trim($alex_livre_messages_ville_pays[1]) && $config['ok_pays'])
	$auteur .= " (".$alex_livre_messages_ville_pays[1].(($alex_livre_messages_pays[1]) ? ((isset($FLAGS_LANG[$alex_livre_messages_pays[1]])) ? ", ".$FLAGS_LANG[$alex_livre_messages_pays[1]] : '') : "").")";
else if ($config['ok_pays'] && $alex_livre_messages_pays[1] && isset($FLAGS_LANG[$alex_livre_messages_pays[1]]))
	$auteur .= " (".$FLAGS_LANG[$alex_livre_messages_pays[1]].")";

/* image home page */
if ($alex_livre_messages_site[1] && trim($alex_livre_messages_site[1]) != "http://" && $config['ok_url']){
	if (substr($alex_livre_messages_site[1], 0, 7) != "http://")
		$alex_livre_messages_site[1] = "http://".$alex_livre_messages_site[1];

	$auteur .= " ".encodeTxt("<a href=\"".$alex_livre_messages_site[1]."\" target=\"_blank\"><img src=\"".$chem_absolu."images/home.gif\" alt=\"".$f_lang['go_home']." [".$alex_livre_messages_site[1]."]\" border=\"0\" width=\"12\" height=\"12\"></a>");
}

/* image email */
if ($alex_livre_messages_email[1] && $config['ok_mail'])
	$auteur .= " ".(($alex_livre_messages_email[1]) ? encodeEmail($alex_livre_messages_email[1]) : "");

$auteur .= "<br /><span style=\"color: #656565\">Note : ".(($alex_livre_messages_note[1]) ? $alex_livre_messages_note[1] : "-")."/10</span>";

$auteur .= "<br /><br />";

/* valeurs des champs */
$echo_html -> MxText("value_auteur", $auteur);
$echo_html -> MxText("value_message", $alex_livre_messages_message[1]);
$echo_html -> MxText("value_titre_reponse", ((trim($alex_livre_messages_titre_reponse[1])) ? htmlspecialchars($alex_livre_messages_titre_reponse[1]) : ((isset($alex_livre_txt_lang_msg[1])) ? htmlspecialchars($alex_livre_txt_lang_msg[1]) : htmlspecialchars($f_lang['defaut_titre_rep']))));
$echo_html -> MxText("value_reponse", htmlspecialchars($alex_livre_messages_reponse[1]));

$html = $echo_html -> MxWrite("", true);
echo $html;
?>