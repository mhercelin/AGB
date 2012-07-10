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
if (file_exists($chem_absolu."config/extension.inc")){
	include($chem_absolu."config/extension.inc");
	include($chem_absolu."include/admin_include.".$alex_livre_ext);
}
else{
	exit ("Please setup the script : <a href=\"".$chem_absolu."setup.php\"><b>setup.php</b></a> or refresh your browser : <a href=\"javascript:location.reload();\"><b>refresh</b></a>.");
}


//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "options_livre",
	"infos",
	"infos_",
	"page protect",
	"login",
	"pass",
	"value identif",
	"manque login",
	"manque pass"
);

//----------------------- destruction des sessions trop anciennes
f_destroy_session();

//----------------------- on vérifie si le user peut ou non se connecter
if (isset($_POST['f_identif']) && $_POST['f_login'] && $_POST['f_pass']){
	$_POST['f_login'] = strip_tags($_POST['f_login']);
	if ($login_user = f_verif_identif()){
		$f_sid = alex_livre_sid();
		f_insert_session($f_sid, "insert", $id_user, $login_user);
		header("Location: f_cadres.php?f_sid=".$f_sid);
	}
	else
		$connect_error = $f_lang['erreur_connexion'];
}

if (isset($_GET['close_sess'])) {
	$connect_error = $f_lang['end session'];
	if (isset($_GET['f_sid'])){
		f_destroy_session(alphanum_only($_GET['f_sid'], 32, 32));
	}
}

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

//----------------------- affichage du formulaire
$echo_html = new ModeliXe("identif.htm", "", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs types */
template_type($f_lang['title identification']);

/* langue */
generate_langue($tab_champs_langue);

/* erreurs */
if (isset($connect_error) && $connect_error){
	$echo_html -> MxText("erreur", $connect_error);
	$echo_html -> MxText("value f_login", "Value=\"".@$_POST['f_login']."\"");
}

/* Lien retour livre d or */
if ($config['inclure_livre'] == 1)
	$chem_livre = $config['fichier_inclusion'];
else
	$chem_livre = $chem_absolu;
$echo_html -> MxText('lien_accueil_livre', '<div id="lien_retour_livre"><a href="'.$chem_livre.'"><img src="'.$chem_absolu.$chem_template.'images/retour.png" alt="'.$f_lang['texte_lien_retour_livre'].'" title="'.$f_lang['texte_lien_retour_livre'].'" />'.$f_lang['texte_lien_retour_livre'].'</a></div>');

$html = $echo_html -> MxWrite("", true);
echo $html;
?>