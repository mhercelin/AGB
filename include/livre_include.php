<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2008    //
//         Hercelin Maxime (c) 2005 - 2008   //
//         http://www.alexguestbook.net/     //
//             all right reserved            //
///////////////////////////////////////////////

/**
 * NE PAS MODIFIER CE PARAMÉTRAGE, le script ne fonctionnerait pas correctement.
 */
error_reporting(E_ALL ^ E_NOTICE);

if (version_compare(PHP_VERSION, '5.3.0', '<')) {
	if (get_magic_quotes_runtime()) set_magic_quotes_runtime(0);
	if (@ini_get('register_globals') == '1' || strtolower(@ini_get('register_globals')) == 'on' || !function_exists('ini_get')) {
		deregister_globals();
	}
		define('STRIP', (get_magic_quotes_gpc()) ? true : false);
}

if (!defined('AGUEST'))
	exit("Safety error.");

if (phpversion() < "4.1.0"){
	$_GET   =& $HTTP_GET_VARS;
	$_POST  =& $HTTP_POST_VARS;
	$_SERVER =& $HTTP_SERVER_VARS;
}

if (isset($_POST['no_connect']) || isset($_GET['no_connect']) || isset($_COOKIE['no_connect']))
	exit("Safety error.");

include($chem_absolu."include/version.inc.".$alex_livre_ext);
include($chem_absolu."include/funct_utiles.".$alex_livre_ext);
include($chem_absolu."include/funct_sql_admin.".$alex_livre_ext);

if (file_exists($chem_absolu."config/extension.inc")){
	include($chem_absolu."config/config_base.".$alex_livre_ext);
	if (!isset($config['langue'])){
		$config['langue'] = 'english';
		include($chem_absolu."languages/".$config['langue'].".".$alex_livre_ext);;
	}
	if (!isset($no_connect))
	include($chem_absolu."db/".$database_type.".".$alex_livre_ext);
	/* connexion à la base de données */
	if (!isset($no_connect)){
		$f_db_connexion = new alex_livre_sql($f_mysql_host, $f_mysql_user, $f_mysql_pass, $f_mysql_base, false);

		if (!$f_db_connexion -> db_connect_id){
			exit($f_lang['erreur_mysql_connect']);
		}
	}
	sql_select_query("*", "alex_livre_config");
	
	
}

if (!isset($no_connect)){
	if (isset($_GET['lang']) && $_GET['lang'] && file_exists($chem_absolu."languages/".$_GET['lang'].".".$alex_livre_ext)){
		if (!alphanum_only($_GET['lang'], 5, 20, true))
			exit('Bad lang.');
		$config['langue'] = $_GET['lang'];
		
	}
	else if (!$config['langue'])
		$config['langue'] = 'english';

	include($chem_absolu."languages/".$config['langue'].".".$alex_livre_ext);
	if (file_exists($chem_absolu."languages/flags/".$config['langue'].".".$alex_livre_ext))
		include($chem_absolu."languages/flags/".$config['langue'].".".$alex_livre_ext);
	else
		include($chem_absolu."languages/flags/english.".$alex_livre_ext);
}
else if (isset($_GET['language_setup'])){
	if (!alphanum_only($_GET['language_setup'], 5, 20, true))
			exit('Bad lang.');
	$liste_langues = read_rep($chem_absolu."languages/");
	if(!in_array($_GET['language_setup'], $liste_langues)) $_GET['language_setup'] = 'english';
	include($chem_absolu."languages/".$_GET['language_setup'].".".$alex_livre_ext);
}
else include($chem_absolu."languages/english.".$alex_livre_ext);
set_options();
include($chem_modelixe."ModeliXe.".$alex_livre_ext);

// gestion de magic_quotes_gpc
nettoyer_var_post();
?>