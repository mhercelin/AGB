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
	1 => "erreur_texte",
	"erreur_auth",
	"erreur_droits"
);

/* fermeture de la connexion */
$f_db_connexion -> sql_close();

//----------------------- affichage du formulaire
$echo_html = new ModeliXe("erreur.htm", "f_sid=".@$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
template_type($f_lang['title erreur']);

/* langue */
generate_langue($tab_champs_langue);

$html = $echo_html -> MxWrite("", true);
echo $html;
?>