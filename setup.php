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
$chem_absolu = "./";
$no_connect = true;

//----------------------- fichiers à inclure
if (file_exists($chem_absolu."config/extension.inc")){
	include($chem_absolu."config/extension.inc");
	exit("Script is already installed !");
}
else {
	$alex_livre_ext = "php";
	$SCRIPT_ENCODAGE = "iso-8859-1";
}

include($chem_absolu."include/livre_include.".$alex_livre_ext);
include($chem_absolu."include/funct_write_files.".$alex_livre_ext);

//----------------------- chemin template
$chem_template = "templates/admin/";

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "install_auto",
	"identi_base",
	"host_base",
	"user_base",
	"pass_base",
	"nom_base",
	"nom_table",
	"name_table_config",
	"name_table_sessions",
	"name_table_users",
	"name_table_messages",
	"name_table_censure",
	"name_table_ban",
	"name_table_smileys",
	"name_table_img_verif_add",
	"name_table_txt_lang",
	"identi_acces_admin",
	"login_admin",
	"pass_admin",
	"verif_pass_admin",
	"installer",
	"erreur_host",
	"erreur_user",
	"erreur_nom_base",
	"erreur_log_admin",
	"email_admin_setup",
	"erreur_pass_admin",
	"erreur_pass_differents",
	"extension_script",
	"choose_extension"
);

//----------------------- on récupère toutes les langues disponibles ou toutes les bases de données compatibles
if (!isset($_GET['language_setup'])){
	$liste_langues = read_rep($chem_absolu."languages/");
	$options_liste = generate_options($liste_langues, "", "setup.php?language_setup=");
}

//----------------------- on effectue l'install si on a tous les éléments nécessaires
if (isset($_POST['installer'])){
	include($chem_absolu."include/read_backup.".$alex_livre_ext);

	//modif des chmods
	@chmod($chem_absolu."config/", 0777);
	
	//on tente d'enregistrer les infos de connexion à la base de données
	$write_object2 = new write_files();
	$write_object2 -> save_donnees("<?php");
	$write_object2 -> save_donnees("\$database_type = 'MySQL';\n");

	$write_object2 -> save_donnees("\$f_mysql_host = '".$_POST['host']."';");	
	$write_object2 -> save_donnees("\$f_mysql_user = '".$_POST['user']."';");
	$write_object2 -> save_donnees("\$f_mysql_pass = '".$_POST['pass']."';");
	$write_object2 -> save_donnees("\$f_mysql_base = '".$_POST['nom_base']."';\n");

	$write_object2 -> save_donnees("\$name_table['alex_livre_config'] = '".$_POST['table_config']."';");
	$write_object2 -> save_donnees("\$name_table['alex_livre_txt_lang'] = '".$_POST['table_txt_lang']."';");	
	$write_object2 -> save_donnees("\$name_table['alex_livre_sessions'] = '".$_POST['table_sessions']."';");	
	$write_object2 -> save_donnees("\$name_table['alex_livre_users'] = '".$_POST['table_users']."';");
	$write_object2 -> save_donnees("\$name_table['alex_livre_messages'] = '".$_POST['table_messages']."';");
	$write_object2 -> save_donnees("\$name_table['alex_livre_censure'] = '".$_POST['table_censure']."';");
	$write_object2 -> save_donnees("\$name_table['alex_livre_ban'] = '".$_POST['table_ban']."';");
	$write_object2 -> save_donnees("\$name_table['alex_livre_smileys'] = '".$_POST['table_smileys']."';");
	$write_object2 -> save_donnees("\$name_table['alex_img_verif_add'] = '".$_POST['table_img_verif_add']."';");

	$write_object2 -> save_donnees("?>", false);

	if (!$write_object2 -> write($chem_absolu."config/config_base.".$alex_livre_ext))
		$erreur_ecriture = $f_lang['erreur_ecriture'];

	//on tente d'enregistrer l'extension du script
	$write_object3 = new write_files();
	$write_object3 -> save_donnees("<?php");
	$write_object3 -> save_donnees("\$alex_livre_ext = '".$_POST['extension_script']."';");
	$write_object3 -> save_donnees("?>", false);

	if (!$write_object3 -> write($chem_absolu."config/extension.inc"))
		$erreur_ecriture = $f_lang['erreur_ecriture'];

	//modif des chmods
	@chmod($chem_absolu."config/", 0755);

	if (!isset($erreur_ecriture)){
		$chaine_sql = read_page($chem_absolu."db/sql/alex_livre5.sql");

		//remplacement à effectuer dans la chaine sql
		$tab_table = array(
			1 => "table_users",
			"table_censure",
			"table_ban",
			"table_messages",
			"table_sessions",
			"table_smileys",
			"table_img_verif_add",
			"table_txt_lang",
			"table_config"
		);

		/* remplacement du nom des tables */
		for ($i = 1; $i <= count($tab_table); $i++){
			$chaine_sql = str_replace("<".$tab_table[$i].">", $_POST[$tab_table[$i]], $chaine_sql);		
		}

		/* remplacement des valeurs pour les infos administrateur */
		$chaine_sql = str_replace("<login_admin>", $_POST['login_admin'], $chaine_sql);		
		$chaine_sql = str_replace("<pass_admin>", $_POST['pass_admin'], $chaine_sql);		
		$chaine_sql = str_replace("<email_admin>", $_POST['email_admin'], $chaine_sql);
		
		/* remplacement des valeurs pour les paramètres de configuration par défaut */
		$chaine_sql = str_replace("<langue>", $_GET['language_setup'], $chaine_sql);		
		
		// Lecture des données SQL à traiter
		$tab_requete = array();
		PMA_splitSqlFile($tab_requete, $chaine_sql);

		//on tente d'établir une connexion
		include($chem_absolu."db/MySQL.".$alex_livre_ext);
		
		/* connexion */
		$first_connexion = new alex_livre_sql($_POST['host'], $_POST['user'], $_POST['pass'], $_POST['nom_base'], false);

		if (!$first_connexion -> db_connect_id){
			$erreur_connexion = $f_lang['erreur_first_connexion'];

			// suppression des fichiers de config
			@unlink($chem_absolu."config/config_base.".$alex_livre_ext);
			@unlink($chem_absolu."config/extension.inc");	
		}
		else{
			// Exécution des reqêtes
			foreach ($tab_requete as $value)
				$first_connexion -> sql_query($value['query']);

			/* fermeture de la connexion sql */
			$first_connexion -> sql_close();
		}
	}
}

/* teste si on peut écrire dans le dossier /config */
if (isset($_GET['language_setup']) && !isset($_POST['installer'])){
	//modif des chmods
	@chmod($chem_absolu."config/", 0777);
	
	$try_write = new write_files();
	$try_write -> save_donnees("<?php");
	$try_write -> save_donnees("Ce fichier a été créé pour tester les droits sur le dossier /config.\n");
	$try_write -> save_donnees("Vous pouvez supprimer ce fichier.\n\n");
	$try_write -> save_donnees("This file is created to verify rights on folder /config.\n");
	$try_write -> save_donnees("You can delete this file.\n");
	$try_write -> save_donnees("?>", false);
	
	if (!$try_write -> write($chem_absolu."config/test_install"))
		$erreur_ecriture = $f_lang['erreur_ecriture'];
	else 
		@unlink($chem_absolu."config/test_install");
	
	//modif des chmods
	@chmod($chem_absolu."config/", 0755);
}

//----------------------- affichage du formulaire
if (!isset($_GET['language_setup']) && !isset($_POST['installer']))
	$echo_html = new ModeliXe("setup1.htm", "", "", "", "", $chem_absolu.$chem_template);
// on utilise le template3 si on ne peut pas écrire dans le dossier /config
else if (isset($_GET['language_setup']) && !isset($_POST['installer']) && isset($erreur_ecriture))
	$echo_html = new ModeliXe("setup3.htm", "", "", "", "", $chem_absolu.$chem_template);
else if (!isset($_POST['installer']))
	$echo_html = new ModeliXe("setup2.htm", "", "", "", "", $chem_absolu.$chem_template);
else
	$echo_html = new ModeliXe("setup3.htm", "", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();


/* instanciation des blocs types */
template_type((isset($f_lang['title setup']) ? $f_lang['title setup'] : "Setup"), true, $chem_absolu);

/* langue */
generate_langue($tab_champs_langue);

/* url */
$echo_html -> MxText("language_setup", (isset($_GET['language_setup']) ? $_GET['language_setup'] : ""));

/* gestion de l'installation */
if (isset($erreur_ecriture)){
	$echo_html -> MxText("result_install1", $f_lang['erreur_install']);
	$echo_html -> MxText("infos_result_install", $erreur_ecriture);
}
else if (isset($erreur_connexion)){
	$echo_html -> MxText("result_install1", $f_lang['erreur_install']);
	$echo_html -> MxText("infos_result_install", $erreur_connexion);
}
else if (isset($_POST['installer'])){
	$echo_html -> MxText("result_install1", $f_lang['ok_install']);
	$echo_html -> MxText("infos_result_install", $f_lang['text_ok_install']);
}

/* langues ou liste des bases de données */
if (!isset($_GET['language_setup']))
	$echo_html -> MxText("options_liste", $options_liste);

$echo_html -> MxWrite();
?>