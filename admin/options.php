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

//----------------------- on controle si le visiteur est ou non autorisé à visiter cette page
verif_page("modif_options");

//----------------------- génération de la liste des champs de cases à cocher oui / non
$tab_champs_options = array(
	1 => "send_mail",
	"ok_aff_moteur",
	"url_cliquables",
	"url_interdites",
	"admin_valide_messages",
	"admin_add_code_securite",
	"admin_envoyer_remerciement",
	"admin_bannir_mot",
	"inclure_livre",
	"donner_focus",
	"lien_admin",
	"lien_accueil"
);

//----------------------- génération de la liste des champs "Afficher les champs xxx"
$tab_champs_affichage = array(
	1 => "champ_pseudo",
	"champ_email",
	"champ_site",
	"champ_pays",
	"champ_ville",
	"champ_note"
);

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "options_livre",
	"options_generales",
	"langue",
	"oui",
	"non",
	"options_modules",
	"options_tech",
	"url_recharger",
	"url_variables",
	"temps_session",
	"nb_pages",
	"skin_to_use",
	"enregistrer",
	"temps_ip_post",
	"minutes",
	"cut_mots",
	"format_date_boite",
	"valider_messages",
	"see_skin",
	"maxi_car",
	"add_code_securite",
	"t_color_txt_code",
	"t_color_background_code",
	"envoyer_remerciement",
	"nb_max_smileys",
	"bannir_mot",
	"admin_send_mail",
	"admin_decalage_horaire",
	"admin_inclure_livre",
	"admin_inclure_livre_code",
	"admin_fichier_inclusion",
	"admin_fichier_inclusion_erreur",
	"heures",
	"secondes",
	"admin_champ_propose",
	"admin_champ_obligatoire",
	"admin_champ_prive",
	"admin_champ_pseudo",
	"admin_champ_email",
	"admin_champ_site",
	"admin_champ_pays",
	"admin_champ_site",
	"admin_champ_note",
	"admin_champ_ville",
	"admin_ok_aff_moteur",
	"url_cliquables",
	"url_interdites",
	"admin_valide_messages",
	"admin_add_code_securite",
	"admin_envoyer_remerciement",
	"admin_bannir_mot",
	"inclure_livre",
	"admin_erreur_decalage_horaire",
	"admin_donner_focus",
	"admin_gd_non_activee",
	"admin_lien_admin",
	"admin_lien_accueil",
	"admin_chemin_lien_accueil"
);

//----------------------- affichage du template
$echo_html = new ModeliXe("options.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

//----------------------- teste si le serveur autorise l'envoi d'email
/*if (!get_cfg_var("SMTP") && !get_cfg_var("sendmail_path"))
	$erreur_mail = $f_lang['avert_mail'];
else*/
	$erreur_mail = "";
	
//----------------------- teste si la librairie GD est présente et complète
$gd = gdEnabled();

//----------------------- enregistrement des données
if (isset($_POST['enregistrer'])){	
	$_POST['temps_session'] = (int)$_POST['temps_session'];
	$_POST['temps_ip_post'] = (int)$_POST['temps_ip_post'];
	$_POST['maxi_car'] = (int)$_POST['maxi_car'];
	$_POST['cut_mots'] = (int)$_POST['cut_mots'];
	$_POST['nb_pages'] = (int)$_POST['nb_pages'];
	$_POST['nb_max_smileys'] = (int)$_POST['nb_max_smileys'];
	
	//si le champ est vide ou si le chemin n'est pas absolu ou si l'extension n'est pas .php, on affiche une erreur et on désactive l'inclusion
	if ($_POST['inclure_livre'] == 1 && (empty($_POST['fichier_inclusion']) || strpos($_POST['fichier_inclusion'], '/') !== 0 || substr($_POST['fichier_inclusion'],-4) != ".php")){
		message_javascript($f_lang['admin_fichier_inclusion_erreur']);
		$_POST['fichier_inclusion'] = '';
		$_POST['inclure_livre'] = 0;
	}
	else{
		$_POST['fichier_inclusion'] = stripslashes($_POST['fichier_inclusion']);
	}
	
	if (empty($_POST['decalage_horaire']) || !is_numeric($_POST['decalage_horaire']) || $_POST['decalage_horaire'] < -12 || intval($_POST['decalage_horaire']) > 12) $_POST['decalage_horaire'] = 0;
	if (empty($_POST['temps_session']) || $_POST['temps_session'] < 300){
		$_POST['temps_session'] = 300; message_javascript($f_lang['admin_temps_session_min']);
	}
	// si le lien vers la page est activé mais qu'aucun lien n'est défini, on renvoit vers la racine du site
	if ($_POST['lien_accueil'] == 1 && empty($_POST['chemin_lien_accueil'])){
		$_POST['chemin_lien_accueil'] = '/';
	}
	// si le chemin est défini mais incorrect, on désactive le lien
	else if ($_POST['lien_accueil'] == 1 && strpos($_POST['chemin_lien_accueil'], '/') !== 0){
		message_javascript($f_lang['admin_chemin_lien_accueil_erreur']);
		$_POST['lien_accueil'] = 0;
		$_POST['chemin_lien_accueil'] = '';
	}
	else {
		$_POST['chemin_lien_accueil'] = stripslashes($_POST['chemin_lien_accueil']);
	}
	
	foreach($tab_champs_affichage as $tab_champ_affichage){
		if (isset($_POST[$tab_champ_affichage])){
			$_POST[$tab_champ_affichage] = array_sum($_POST[$tab_champ_affichage]);
			//normalement javascript interdit les autres valeurs que celles-ci dessous mais possibilité de le désactiver donc si valeur inconnue on remplace par 1 (=champ non affiché)
			if ($_POST[$tab_champ_affichage] != "0" && $_POST[$tab_champ_affichage] != '1' && $_POST[$tab_champ_affichage] != '2' && $_POST[$tab_champ_affichage] != "4" && $_POST[$tab_champ_affichage] != '6'){
				$_POST[$tab_champ_affichage] = '1';
			}
		}
		//si la variable n'est pas définie c'est que rien n'est coché donc on affiche le champ
		else{ 
			$_POST[$tab_champ_affichage] = '0';
		}
	}

	// vérifie si la librairie GD2 et ses options sont présentes : si non, on n'active pas le code de sécurité
	if ($gd == 0) {
		$_POST['admin_add_code_securite'] = 0;
		$_POST['color_txt_code'] = '#000000';
		$_POST['color_background_code'] = '#FFFFFF';
	}

	$liste_options = array ('langue','skin_to_use','temps_session','send_mail','temps_ip_post','format_date','admin_valide_messages','admin_envoyer_remerciement','admin_add_code_securite','admin_bannir_mot','url_interdites','url_cliquables','color_txt_code','color_background_code','champ_pseudo','champ_email','champ_site','champ_pays','champ_ville','champ_note','ok_aff_moteur','nb_pages','cut_mots','maxi_car','nb_max_smileys','url_recharger','extension_url','decalage_horaire', 'inclure_livre', 'fichier_inclusion','donner_focus','lien_admin','lien_accueil','chemin_lien_accueil');
	foreach ($liste_options as $option){
		ecrire_config($option, $_POST[$option]);
		$config[$option] = $_POST[$option];
	}
	$echo_html -> MxText("message_javascript", message_javascript($f_lang['merci_options'], false));
}

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

//----------------------- on récupère toutes les langues disponibles
$liste_langues = read_rep($chem_absolu."languages/");
$option_langues = generate_options($liste_langues, $config['langue']);

//----------------------- on récupère tous les skins disponibles
$liste_rep = read_rep($chem_absolu."templates/skins/", "rep");
$option_rep = generate_options($liste_rep, $config['skin_to_use']);

/* instanciation des blocs */
template_type($f_lang['title options']);

/* langue */
generate_langue($tab_champs_langue);

$echo_html -> MxText("avert_mail", $erreur_mail);
$echo_html -> MxText("liste_langues", $option_langues);
$echo_html -> MxText("liste_skin_to_use", $option_rep);

/* valeur des champs */
$echo_html -> MxText("value_temps_session", $config['temps_session']);
$echo_html -> MxText("value_decalage_horaire", $config['decalage_horaire']);
$echo_html -> MxText("value_color_txt_code", $config['color_txt_code']);
$echo_html -> MxText("value_color_background_code", $config['color_background_code']);
$echo_html -> MxText("value_temps_ip_post", $config['temps_ip_post']);
$echo_html -> MxText("value_nb_pages", $config['nb_pages']);
$echo_html -> MxText("value_url_recharger", $config['url_recharger']);
$echo_html -> MxText("value_variables_url", $config['extension_url']);
$echo_html -> MxText("value_cut_mots", $config['cut_mots']);
$echo_html -> MxText("value_maxi_car", $config['maxi_car']);
$echo_html -> MxText("value_nb_max_smileys", $config['nb_max_smileys']);
$echo_html -> MxText("value_format_date", $config['format_date']);
$echo_html -> MxText("value_fichier_inclusion", $config['fichier_inclusion']);
$echo_html -> MxText("value_inclure_livre", $config['inclure_livre']);
$echo_html -> MxText("value_chemin_lien_accueil", $config['chemin_lien_accueil']);

if (!empty($config['fichier_inclusion'])){
	$fichier_inclusion = pathinfo($config['fichier_inclusion'], PATHINFO_DIRNAME);
	$dossier_livre = substr($_SERVER['SCRIPT_NAME'], 1, strpos($_SERVER['SCRIPT_NAME'], 'admin/')-1);
	$chemin = explode ('/', $fichier_inclusion);
	$nb_dossiers = count($chemin);
	$rep_parent = '../';
	$chem='';
	if ($fichier_inclusion=='\\' || $fichier_inclusion=='/'){
		$chem = './';
	}
	else {
		for ($i=1; $i<$nb_dossiers; $i++)
			$chem .= '../';
	}
	
	$inclure_livre_code = $chem.$dossier_livre.'index.php';
	$echo_html -> MxText("value_inclure_livre_code", '$chem_absolu = \''.$chem.$dossier_livre."';\ninclude '".$inclure_livre_code."';");
}

generate_radio($tab_champs_options);

foreach ($tab_champs_affichage as $tab_champ_affichage){
	switch ($config[$tab_champ_affichage]){
		case 1:
			$echo_html -> MxText("value_".$tab_champ_affichage."1", "checked=checked");
			break;
		case 2:
			$echo_html -> MxText("value_".$tab_champ_affichage."2", "checked=checked");
			break;
		case 4:
			$echo_html -> MxText("value_".$tab_champ_affichage."3", "checked=checked");
			break;
		case 6:
			$echo_html -> MxText("value_".$tab_champ_affichage."2", "checked=checked");
			$echo_html -> MxText("value_".$tab_champ_affichage."3", "checked=checked");
			break;
		default:
	}
}

/* urls */
$echo_html -> MxText("f_sid", $_GET['f_sid']);

/* apercu du skin */
if (!empty($config['fichier_inclusion']))
	$echo_html -> MxText("skin_apercu", $config['fichier_inclusion']);
else 
	$echo_html -> MxText("skin_apercu", '../index.php');

/* body options */
if (!$gd)
	$echo_html -> MxText("bloc1.body options", 'onload="update_see_url_cliquables(); update_see_inclure_livre();  update_see_lien_accueil();"');
else
	$echo_html -> MxText("bloc1.body options", 'onload="update_see_code_securite(); update_see_url_cliquables(); update_see_inclure_livre(); update_see_lien_accueil();"');

$html = $echo_html -> MxWrite("", true);

// si la librairie GD n'est pas complète, on ne peut pas utiliser le code de sécurité
if ($gd < 2){
	$html = preg_replace("#<!--=== BLOC ADMIN_CODE_SECURITE ===-->.*?<!--=== /BLOC ADMIN_CODE_SECURITE ===-->#si", $f_lang['admin_gd_non_activee'], $html);
}

echo $html;
?>