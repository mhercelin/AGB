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

//----------------------- fichiers à inclure
include($chem_absolu."config/extension.inc");
include($chem_absolu."include/admin_include.".$alex_livre_ext);

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "options",
	"script",
	"graphismes",
	"messages",
	"gestion",
	"bannissement",
	"smileys",
	"utilisateurs",
	"ajouter",
	"a_propos_de",
	"donner_avis",
	"deconnexion",
	"censure_mots",
	"login_admin",
	"aide_guestbook",
	"version",
	"sup_copyright",
	"reponse_auto",
	"titre_guestbook",
	"boite_java",
	"bdd",
	"optimisation",
	"sauvegarde",
	"restauration",
	"admin_retour_livre"
);

$where = "WHERE valid='yes'";
$total_messages_livre = countTotal("*", 'alex_livre_messages', $where);

/* fermeture de la connexion */
$f_db_connexion -> sql_close();

//----------------------- affichage du template
$echo_html = new ModeliXe("gauche.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
template_type($f_lang['title frame gauche'], false);
$echo_html -> MxText("rep_skins", $chem_absolu.$chem_template);
$echo_html -> MxText("bloc1.body color", "class=\"bleu_body\"");
$echo_html -> MxText("bloc1.body options", "LEFTMARGIN=7 TOPMARGIN=7 MARGINWIDTH=0 MARGINHEIGHT=0");

/* langue */
generate_langue($tab_champs_langue);
$echo_html -> MxText("login_admin", $login_user);
$echo_html -> MxText("language_guestbook", $config['langue']);

if (file_exists("../documentation/doc_".$config['langue'].".htm"))
	$echo_html -> MxText("language_doc", $config['langue']);
else
	$echo_html -> MxText("language_doc", "english");

/* urls */
$echo_html -> MxUrl("script", "options.".$alex_livre_ext);
$echo_html -> MxUrl("graphismes", "skins.".$alex_livre_ext);
$echo_html -> MxUrl("gestion_mess", "gestion_mess.".$alex_livre_ext);
$echo_html -> MxUrl("censure_mots", "censure.".$alex_livre_ext);
$echo_html -> MxUrl("bannissement", "bannissement.".$alex_livre_ext);
$echo_html -> MxUrl("gestion_smileys", "smileys.".$alex_livre_ext);
$echo_html -> MxUrl("aj_user", "add_admin.".$alex_livre_ext);
$echo_html -> MxUrl("gest_users", "gest_admin.".$alex_livre_ext);
$echo_html -> MxUrl("url_version", "version.".$alex_livre_ext);
$echo_html -> MxUrl("reponse_auto", "rep_auto.".$alex_livre_ext);
$echo_html -> MxUrl("titre", "titre.".$alex_livre_ext);
$echo_html -> MxUrl("boite_java", "boite_java.".$alex_livre_ext);
$echo_html -> MxUrl("m_optimisation", "optimisation.".$alex_livre_ext);
$echo_html -> MxUrl("m_sauvegarde", "sauvegarde.".$alex_livre_ext);
$echo_html -> MxUrl("m_restauration", "restauration.".$alex_livre_ext);
$echo_html -> MxUrl("deconnexion", "index.".$alex_livre_ext, "close_sess=1");

/* nouvelle version dispo ? */
$newest_version = trim(ouvrir_fichier_distant('www.alexguestbook.net', '/new_version.php?s='.urlencode($_SERVER['HTTP_HOST']).'&v='.$alex_livre_version.'&m='.$total_messages_livre));
if (!empty($newest_version) && preg_match('`\d(?:\.\d{1,2}){1,2}(?:-.){0,1}`', $newest_version)){
	$newest_version = explode("\n", trim($newest_version));
	$newest_version = explode('-', trim($newest_version[1]));
}
else
	$newest_version = 'Error';

if ($newest_version != 'Error' & trim($newest_version[0]) != $alex_livre_version){
		$echo_html -> MxText("new_version", '<img src="../images/update.gif" width="36" height="10" border="0" alt="'.$f_lang['new_version_dispo'].'">');
}

$html = $echo_html -> MxWrite("", true);
echo $html;
?>