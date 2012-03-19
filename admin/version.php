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
$no_verif_session = 1;

//----------------------- fichiers à inclure
include($chem_absolu."config/extension.inc");
include($chem_absolu."include/admin_include.".$alex_livre_ext);

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "version_courrante",
	"info_version"
);

$where = "WHERE valid='yes'";
$total_messages_livre = countTotal("*", 'alex_livre_messages', $where);

/* fermeture de la connexion */
$f_db_connexion -> sql_close();

//----------------------- affichage du formulaire
$echo_html = new ModeliXe("version.htm", "f_sid=".@$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
template_type("");

/* langue */
generate_langue($tab_champs_langue);

/* nouvelle version dispo ? */
$latest_version = ouvrir_fichier_distant('www.alexguestbook.net', '/new_version.php?s='.urlencode($_SERVER['HTTP_HOST']).'&p='.urlencode($_SERVER['PHP_SELF']).'&v='.$alex_livre_version.'&m='.$total_messages_livre.'&l='.$alex_livre_tar.'&j='.urlencode($config['fichier_inclusion']));
if (!empty($latest_version) && preg_match('`\d(?:\.\d{1,2}){1,2}(?:-.){0,1}`', $latest_version)){
	$latest_version = explode("\n", trim($latest_version));
	$latest_version = explode('-', trim($latest_version[1]));
}
else
	$latest_version = 'Error';

if ($latest_version != 'Error' & trim($latest_version[0]) != $alex_livre_version)
	$echo_html -> MxText("version_txt", $f_lang['version_txt_update'].' ('.trim($latest_version[0]).')<br><br><br><input type="button" class="normal" value="'.$f_lang['version_down'].'" onclick="script_popup(\'http://www.alexguestbook.net/a_guest.php\', \'down\', 650, 500, \'resizable=yes, scrollbars=yes\')">&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="normal" value="'.$f_lang['help_update'].'" onclick="script_popup(\'http://www.alexguestbook.net/guest_help_update.php?lang='.$config['langue'].'\', \'down\', 650, 500, \'resizable=yes, scrollbars=yes\')">');
else if ($latest_version == 'Error')
	$echo_html -> MxText("version_txt", $f_lang['version_txt_erreur']);
else
	$echo_html -> MxText("version_txt", $f_lang['version_txt_ok']);

$html = $echo_html -> MxWrite("", true);
echo $html;
?>