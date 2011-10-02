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

if (isset($_GET['close_sess']))
	$connect_error = $f_lang['end session'];

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

$html = $echo_html -> MxWrite("", true);
echo $html;
?>