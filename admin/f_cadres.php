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

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

//----------------------- affichage du template
$echo_html = new ModeliXe("cadres.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
$echo_html -> MxText("title", "Alex Guestbook ".$alex_livre_version." - ".$f_lang['title administration']);

/* urls */
$echo_html -> MxText("f_sid", $_GET['f_sid']);

/* encodage */
$echo_html -> MxText("SCRIPT_ENCODAGE", $SCRIPT_ENCODAGE);

$html = $echo_html -> MxWrite("", true);
echo $html;
?>