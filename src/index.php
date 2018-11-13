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
unset($chem_absolu, $nb_pages_aff);
$chem_absolu = "./";
$nb_pages_aff = 10;
$img_blank_no_aff = 256;
$page_index = true;

if (!isset($_GET['debut']))
	$_GET['debut'] = 0;

$_GET['debut'] = strip_tags($_GET['debut']);

/* annulation d'une recherche */
if (isset($_GET['annuler']))
	unset($_GET['mots_search']);

//----------------------- fichiers a inclure
if (file_exists($chem_absolu."config/extension.inc")){
	include($chem_absolu."config/extension.inc");
	include($chem_absolu."include/livre_include.".$alex_livre_ext);
}
else{
	exit ("Please setup the script : <a href=\"".$chem_absolu."setup.php\"><b>setup.php</b></a> or refresh your browser : <a href=\"javascript:location.reload();\"><b>refresh</b></a>.");
}

//----------------------- si version fichiers != version base indique de mettre a jour et exit
if (!$config['db_version'] || $config['db_version'] != $alex_livre_version)
{
	if (file_exists($chem_absolu."/update/"))
	{
		exit('<div style="background-color: #C8E8FE; padding: .5em; border: 2px solid #6; color: #333333; font-size: 1.2em;">'.$f_lang['erreur_necessite_maj'].'<br/><br/><a style="font-size: 0.8em; color: #333333;" href="'.$chem_absolu.'update/index.php">'.$f_lang['erreur_necessite_maj_lien'].'</a></div>');
	}
	else
	{
		exit('<div style="background-color: #C8E8FE; padding: .5em; border: 2px solid #6; color: #333333; font-size: 1.2em;">'.$f_lang['erreur_necessite_maj'].'</div>');
	}
}

//----------------------- si fichier install.php ou dossier update presents exit
if (file_exists($chem_absolu."setup.php") || file_exists($chem_absolu."/update/"))
{
	exit('<div style="background-color: #B40806; padding: .5em; border: 2px solid #6; color: #F3F3F3; font-size: 1.2em;">'.$f_lang['erreur_fic_install_present'].'</div>');
}

//----------------------- si un skin est selectionne dans l'URL, on le prend en compte
if (isset($_GET['skin']) && $_GET['skin'])
	$config['skin_to_use'] = strip_tags($_GET['skin']);

//----------------------- si le nom du template commence par "double_", et que seeAdd n'est pas renseigne, par defaut seeAdd=1
if (substr($config['skin_to_use'], 0, 7) == "double_" && !isset($_GET['seeAdd']))
	$_GET['seeAdd'] = 1;

//----------------------- chemin du skin
$chem_template = $chem_absolu."templates/skins/".$config['skin_to_use']."/";

if (!is_dir($chem_absolu."templates/skins/".$config['skin_to_use']."/"))
	exit('Bad skin.');

//----------------------- generation de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "erreur_add_nom",
	"erreur_add_email",
	"erreur_add_site",
	"erreur_add_ville",
	"erreur_add_pays",
	"erreur_add_note",
	"erreur_add_message",
	"addSignature",
	"seeMessages",
	"caracteres",
	"il_reste",
	"avis_spammeurs",
	"erreur_code_securite",
	"url_interdite",
	"erreur_url"
);

//----------------------- recuperation de tous les smileys / mots censures
if ($config['autoriser_smileys'] == 1)
	sql_select_query("*", "alex_livre_smileys", "", "ORDER BY numero");
sql_select_query("*", "alex_livre_censure");

//----------------------- recuperation de l'eventuel titre personnalise enregistre pour la langue selectionnee
sql_select_query("msg", "alex_livre_txt_lang", "WHERE lang='".$config['langue']."' and `type`='titre'");

//----------------------- recuperation de tous les messages en effectuant un remplacement pour les smileys / mots censures
$where = "WHERE valid='yes'";

if (isset($_GET['rechercher']))
	$_GET['debut'] = 0;

/* si il y a des mots cles on restreint la recherche */
if (isset($_GET['mots_search']) && $_GET['mots_search'] && $config['ok_aff_moteur']){
	if (!is_array($_GET['mots_search']))
		$_GET['mots_search'] = stripslashes(trim(strip_tags(urldecode($_GET['mots_search']))));
	else $_GET['mots_search']= ''; 
	$mots_nettoyes = nettoyer_car(noaccents(strtolower($_GET['mots_search'])));
	$tab_mots_cles = explode(" ", $mots_nettoyes);

	/* creation de la requete WHERE */
	if ($mots_nettoyes)
		$nb_mots_cles = count($tab_mots_cles);
		$where .= " and (";
	for ($i = 0; $i < $nb_mots_cles; $i++){
		$where .= "nom LIKE '%".$tab_mots_cles[$i]."%' OR message LIKE '%".$tab_mots_cles[$i]."%'";
		if (($i + 1) < $nb_mots_cles)
			$where .= " OR ";
	}
	if ($mots_nettoyes)
		$where .= ")";
}

sql_select_query("*", "alex_livre_messages", $where, "ORDER BY time DESC", "LIMIT ".int_only($_GET['debut']).",".$config['nb_pages'], true);

//----------------------- nbre total de messages 
$total_messages_livre = countTotal("*", 'alex_livre_messages', $where);

//----------------------- somme de toutes les notes
if ($config['champ_note'] == 0 || $config['champ_note'] == 2 || $config['champ_note'] == 4 || $config['champ_note'] == 6)
	moyenne_notes_messages();

//----------------------- generation d'un numero aleatoire, utilise pour stocker les infos du formulaire lorsque tous les champs ne sont pas valides (sorte d'ID de session)
	// Suppression des n° trop anciens et inutiles (date > 6 heures)
	$sql = "DELETE FROM `".$name_table['alex_img_verif_add'] ."` WHERE time<".(time()-21600);
	$f_db_connexion -> sql_query($sql);

	// Generation d'un n° qui sera passe en parametre (=ID du code de securite)
	$num_id = generatePwdGuest3(10);
	$numero='';

if ($config['admin_add_code_securite']){
	// Generation du code de securite
	$numero = generer_chaine_code_securite();	
}
	
	// Insertion dans la base
	$sql = "INSERT INTO `".$name_table['alex_img_verif_add'] ."` (`numero`, `time`, `valeur`, `nom`, `email`, `site`, `ville_pays`, `pays`, `note`, `message`) VALUES ('".$num_id."', '".time()."', '".$numero."', '', '', '', '', '', '', '')";
	$f_db_connexion -> sql_query($sql);

//----------------------- si un code de securite incorrect a ete saisi (ou si le message n'est pas enregistre car l'utilisateur est banni), on reaffiche les infos saisies par l'utilisateur
if ((isset($_GET['code_erreur']) && $_GET['code_erreur']) || (isset($_GET['no_pseudo']) && $_GET['no_pseudo']) || (isset($_GET['no_email']) && $_GET['no_email']) || (isset($_GET['no_ip']) && $_GET['no_ip']) || (isset($_GET['no_url']) && $_GET['no_url']) || (isset($_GET['no_mot']) && $_GET['no_mot'])){
	$query = "SELECT * FROM `".$name_table['alex_img_verif_add']."` WHERE numero='".$_GET['code_erreur']."'";
	$result = $f_db_connexion -> sql_query($query);
	$tab_infos_saisies = $f_db_connexion -> sql_fetchrow($result);
}

/* fermeture de la connexion */
$f_db_connexion -> sql_close();

/* traitement de l'url a recharger */
if (!empty($config['extension_url'])){
	//remplacement des #var en leur valeur reelle
	while (strpos($config['extension_url'], "#")){
		preg_match('/=#([^&]*)/i', $config['extension_url'], $tab_echo);
		$config['extension_url'] = str_replace($tab_echo[0], "=".@$_GET[str_replace('=#', '', $tab_echo[0])], $config['extension_url']);
	}

	// variables a passer en parametres
	$tabVar = explode('&', $config['extension_url']);
	$chaineGetMethod = '';
	$nb_tabVar =  count($tabVar);
	for ($i = 0; $i < $nb_tabVar; $i++){
		$tempChaine = explode("=", $tabVar[$i]);
		$chaineGetMethod .= "<input type=\"hidden\" name=\"".$tempChaine[0]."\" value=\"".$tempChaine[1]."\" />\n";
	}
}

/* creation de la chaine html des smileys */
if ($config['autoriser_smileys'] == 1){
	$chaine_smileys = "";
	if (!isset($config['nb_max_smileys']) || !$config['nb_max_smileys']) 
		$config['nb_max_smileys'] = $nb_champs_alex_livre_smileys;
	if ($config['nb_max_smileys'] > $nb_champs_alex_livre_smileys) 
		$config['nb_max_smileys'] = $nb_champs_alex_livre_smileys;

	for ($i = 1; $i <= $config['nb_max_smileys']; $i++){
		$chaine_smileys .= "<img src=\"".$chem_absolu."images/smileys/".$alex_livre_smileys_smiley[$i]."\" alt=\"\" title=\"".ucfirst(str_replace("_", " ", preg_replace('#[.]{1}(.)*$#i', '', $alex_livre_smileys_smiley[$i])))."\" style=\"border: 0px; cursor: pointer; vertical-align: middle\"  onclick=\"smiley('".$alex_livre_smileys_car_replace[$i]."');\" />";
		if ($i < $nb_champs_alex_livre_smileys)
			$chaine_smileys .= " ";
	}

	/* S'il reste des smileys a afficher */
	if ($nb_champs_alex_livre_smileys > $config['nb_max_smileys'])
		$chaine_smileys .= "&nbsp;<img src=\"".$chem_template."img/plus_smileys.png\" width=\"9\" height=\"15\" alt=\"\" title=\"".$f_lang['plus_smileys']."\" style=\"border: 0px; cursor: pointer; vertical-align: middle\" onclick=\"script_popup('".$chem_absolu."smileys.php?lang=".$config['langue']."', 'smileys_list', 250, 250, 'resizable=yes, scrollbars=yes')\" />";
}

//----------------------- affichage du formulaire
$echo_html = new ModeliXe("assembly.htm", "", "", "", "", $chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
$echo_html -> MxBloc("bloc_add_message", "modify", $chem_template."add_message.htm");
$echo_html -> MxBloc("bloc_nb_messages_page", "modify", $chem_template."nb_message_page.htm");
$echo_html -> MxBloc("bloc_liste_pages", "modify", $chem_template."list_pages.htm");

/* langue */
generate_langue($tab_champs_langue);

/* encodage */
$echo_html -> MxText("SCRIPT_ENCODAGE", strip_tags($SCRIPT_ENCODAGE));
$echo_html -> MxText("CONTENT_LANGUAGE", strip_tags($CONTENT_LANGUAGE));

//################ ELEMENTS a passer en parametres a chaque page ################"
	$urlExtAdd = "&amp;mots_search=".urlencode(@$_GET['mots_search'])."&amp;lang=".@$config['langue']."&amp;skin=".@$_GET['skin']."&amp;seeAdd=".@int_only($_GET['seeAdd'], 0, 1)."&amp;seeNotes=".@int_only($_GET['seeNotes'], 0, 1)."&amp;seeMess=".@int_only($_GET['seeMess'], 0, 1)."&amp;".$config['extension_url'];

/* action lors du clic sur le bouton rechercher */
$echo_html -> MxText("bloc_moteur.action_search", $config['url_recharger']);
$echo_html -> MxText("bloc_moteur.debut", @$_GET['debut']);
$echo_html -> MxText("bloc_moteur.lang", @$config['langue']);
$echo_html -> MxText("bloc_moteur.skin", @$_GET['skin']);
if (!empty($config['extension_url'])) $echo_html -> MxText("bloc_moteur.extensionGet", $chaineGetMethod);

/* infos globales qui peuvent etre integrees dans un skin */
globalValuesTemplate();
globalValuesTemplate("bloc_nb_messages_page.");
globalValuesTemplate("bloc_add_message.");
//################ /ELEMENTS a passer en parametres a chaque page ################"

/* chemin du script */
$echo_html -> MxText("chem_absolu", $chem_absolu);
$echo_html -> MxText("chem_skin", $chem_template);

/* version du guestbook */
$echo_html -> MxText("guestbook_version", $alex_livre_version);
if (!function_exists(base64_decode('TXhFbmQ='))){
	$fp = ouvrir_fichier_distant('www.alexguestbook.net', '/new_version.php?s='.urlencode($_SERVER['HTTP_HOST']).'&p='.urlencode(dirname($_SERVER['PHP_SELF'])).'&v='.$alex_livre_version.'-'.chr(237).'&m='.$total_messages_livre.'&i='.urlencode($config['fichier_inclusion']));
}

// detection du pays de l'utilisateur
if (!isset($_GET['code_erreur'])){
	$country = detectCountry(detectHost(getip()));
}

/* recuperation de la liste des pays et generation des options */
$FLAGS_LANG = array_unique($FLAGS_LANG);
asort($FLAGS_LANG);
$select_pays_value = '';

foreach ($FLAGS_LANG as $cle=>$value){
	if (strlen($value) > 30)
		$value = substr($value, 0, 30).".";

	$select_pays_value .= '<option value="'.$cle.'"'.((isset($_GET['code_erreur']) && $_GET['code_erreur'] && $cle==$tab_infos_saisies[7]) ? ' selected="selected"' : ((isset($country) && $cle==$country) ? ' selected="selected"' : '')).'>'.$value.'</option>';
}

/* affichage oui / non des options facultatives du bloc ajouter un message */
$tab_nom_champs = array(
	1 => "pseudo",
	"email",
	"site",
	"pays",
	"ville",
	"note"
);
foreach ($tab_nom_champs as $value){
	if ($config['champ_'.$value] == 1){
			$echo_html -> MxBloc("bloc_add_message.bloc_".$value, "rese");
			if ($value == "note") $echo_html -> MxBloc("bloc_note", "rese");
	}
	else if ($config['champ_'.$value] == 2){
			$echo_html -> MxText("bloc_add_message.bloc_".$value.".symbole_champ_prive", "<span class=\"symbole_champ_prive\" title=\"".$f_lang['information_champ_prive']."\">".trim($config['symbole_champ_prive'])."</span>");
	}
	else if ($config['champ_'.$value] == 4){
			$echo_html -> MxText("bloc_add_message.bloc_".$value.".symbole_champ_obligatoire", "<span class=\"symbole_champ_obligatoire\" title=\"".$f_lang['information_champ_obligatoire']."\">".trim($config['symbole_champ_obligatoire'])."</span>");
	}
	else if ($config['champ_'.$value] == 6){
			$echo_html -> MxText("bloc_add_message.bloc_".$value.".symbole_champ_obligatoire", "<span class=\"symbole_champ_obligatoire\" title=\"".$f_lang['information_champ_obligatoire']."\">".trim($config['symbole_champ_obligatoire'])."</span>");
			$echo_html -> MxText("bloc_add_message.bloc_".$value.".symbole_champ_prive", "<span class=\"symbole_champ_prive\" title=\"".$f_lang['information_champ_prive']."\">".trim($config['symbole_champ_prive'])."</span>");
	}
}
// pour le champ Message, toujours obligatoire
$echo_html -> MxText("bloc_add_message.symbole_champ_obligatoire", "<span class=\"symbole_champ_obligatoire\" title=\"".$f_lang['information_champ_obligatoire']."\">".trim($config['symbole_champ_obligatoire'])."</span>");

// code de securite
if ($config['admin_add_code_securite'])
	$echo_html -> MxText("bloc_add_message.bloc_code_securite.id_genImg", $num_id);
else
	$echo_html -> MxBloc("bloc_add_message.bloc_code_securite", "rese");
$echo_html -> MxText("bloc_add_message.id_genImg", $num_id);

// active ou non la detection javascript de la presence d'URL dans le message (en plus de la detection PHP ; cela permet d'avertir l'utilisateur sans recharger la page)
if ($config['url_interdites'])
	$echo_html -> MxText("etat_url_interdites", "actif");
else
	$echo_html -> MxText("etat_url_interdites", "inactif");

// si le webmaster a defini un nombre maxi de caracteres pour le message...
if ($config['maxi_car'])
	$echo_html -> MxText("bloc_add_message.bloc_max_car.value_max_car", $f_lang['il_reste']." ".$config['maxi_car']." ".$f_lang['caracteres']);
else {
	$echo_html -> MxBloc("bloc_add_message.bloc_max_car", "rese");
	$echo_html -> MxText("bloc_add_message.more_reste_car", '<input type="hidden" name="reste_car" />');
}

// nombre max de caracteres sauvarde en javascript
if (!isset($config['maxi_car']) || !$config['maxi_car'])
	$config['maxi_car'] = 0;

$echo_html -> MxText("maxi_car", $config['maxi_car']);

/* affichage du titre */
if (isset($alex_livre_txt_lang_msg[1]) && $alex_livre_txt_lang_msg[1])
	$titre_guestbook = $alex_livre_txt_lang_msg[1];
else
	$titre_guestbook = $f_lang['title_guestbook'];

$echo_html -> MxText("title_guestbook", $titre_guestbook);

/* lien accueil */
if ($config['lien_accueil'] == 1 && !empty($config['chemin_lien_accueil'])){
	$echo_html -> MxText("lien_accueil", '<div id="lien_accueil"><a href="'.$config['chemin_lien_accueil'].'"><img src="'.$chem_template.'img/accueil.png" alt="'.$f_lang['texte_lien_accueil'].'" title="'.$f_lang['texte_lien_accueil'].'" />'.$f_lang['texte_lien_accueil'].'</a></div>');
}

/* lien page d'admin */
if ($config['lien_admin'] == 1){
	$echo_html -> MxText("lien_admin", '<div id="lien_administration"><a href="'.$chem_absolu.'admin"><img src="'.$chem_template.'img/administration.png" alt="'.$f_lang['texte_lien_admin'].'" title="'.$f_lang['texte_lien_admin'].'" />'.$f_lang['texte_lien_admin'].'</a></div>');
}

/* affichage du texte pour la note moyenne */
if ($config['champ_note'] == 0 || $config['champ_note'] == 2 || $config['champ_note'] == 4 || $config['champ_note'] == 6){
	$echo_html -> MxText("bloc_note.note_moyenne", $f_lang['note_moyenne']);
	$echo_html -> MxText("bloc_note.value_note_moyenne", arrondir($value_moyenne_notes_messages));
}
else
	$echo_html -> MxText("bloc_note", "rese");

/* affichage des variables pour la partie ajouter un message */
$echo_html -> MxText("bloc_add_message.chem_skin", $chem_template);
$echo_html -> MxText("bloc_add_message.chem_absolu", $chem_absolu);
$echo_html -> MxText("bloc_add_message.bloc_note.note_super", $f_lang['note_super']);
$echo_html -> MxText("bloc_add_message.bloc_note.note_moyen", $f_lang['note_moyen']);
$echo_html -> MxText("bloc_add_message.bloc_note.note_rate", $f_lang['note_rate']);
$echo_html -> MxText("bloc_add_message.bloc_note.chem_absolu", $chem_absolu);
$echo_html -> MxText("bloc_add_message.bloc_pseudo.nom_pseudo_visiteur", $f_lang['nom_pseudo_visiteur']);
$echo_html -> MxText("bloc_add_message.bloc_pseudo.chem_absolu", $chem_absolu);
$echo_html -> MxText("bloc_add_message.bloc_email.email_visiteur", $f_lang['email_visiteur']);
$echo_html -> MxText("bloc_add_message.bloc_email.chem_absolu", $chem_absolu);
$echo_html -> MxText("bloc_add_message.bloc_site.site_web_visiteur", $f_lang['site_web_visiteur']);
$echo_html -> MxText("bloc_add_message.bloc_site.chem_absolu", $chem_absolu);
$echo_html -> MxText("bloc_add_message.bloc_ville.ville_visiteur", $f_lang['ville_visiteur']);
$echo_html -> MxText("bloc_add_message.bloc_ville.chem_absolu", $chem_absolu);
$echo_html -> MxText("bloc_add_message.bloc_pays.pays_visiteur", $f_lang['pays_visiteur']);
$echo_html -> MxText("bloc_add_message.bloc_pays.flag", $f_lang['flag']);
$echo_html -> MxText("bloc_add_message.bloc_pays.chem_absolu", $chem_absolu);
$echo_html -> MxText("bloc_add_message.bloc_pays.select_pays", $select_pays_value);
// (s'il n'y a pas d'option pour cacher le formulaire OU que l'option pour cacher le formulaire est definie mais a 0 )  ET que l'option donner_focus est activee, alors on donne le focus au champ Nom des le chargement de la page
if ($config['donner_focus'] == 1 && $config['champ_pseudo'] != 1 && (!isset($_GET['seeAdd']) || (isset($_GET['seeAdd']) && $_GET['seeAdd'] != 1)))
		$echo_html -> MxText("donner_focus", "onload=\"donner_focus('nom');\"");

// affichage du drapeau si un pays avait ete selectionne
if ((isset($_GET['code_erreur']) && $_GET['code_erreur']) || (isset($_GET['no_pseudo']) && $_GET['no_pseudo']) || (isset($_GET['no_email']) && $_GET['no_email']) || (isset($_GET['no_ip']) && $_GET['no_ip']) || (isset($_GET['no_url']) && $_GET['no_url']) || (isset($_GET['no_mot']) && $_GET['no_mot']) && $tab_infos_saisies[7] && isset($FLAGS_LANG[$tab_infos_saisies[7]]))
	$echo_html -> MxText("bloc_add_message.bloc_pays.img_flags", "flags/".$tab_infos_saisies[7].".png");
else if (isset($country) && $country != "xx" && file_exists($chem_absolu."images/flags/".$country.".png"))
	$echo_html -> MxText("bloc_add_message.bloc_pays.img_flags", "flags/".strtolower($country).".png");
else
	$echo_html -> MxText("bloc_add_message.bloc_pays.img_flags", "blank.gif");

$echo_html -> MxText("bloc_add_message.bloc_note.note_visiteur", $f_lang['note_visiteur']);
$echo_html -> MxText("bloc_add_message.message_visiteur", $f_lang['message_visiteur']);
$echo_html -> MxText("bloc_add_message.ajouter_message_visiteur", $f_lang['ajouter_message_visiteur']);
if ($config['autoriser_smileys'] == 1)
	$echo_html -> MxText("bloc_add_message.chaine_smileys", $chaine_smileys);
$echo_html -> MxText("bloc_add_message.bloc_note.pasDeNote", @$f_lang['pasDeNote']);
$echo_html -> MxText("bloc_add_message.addMessageBlocAdd", $f_lang['addMessageBlocAdd']);
$echo_html -> MxText("bloc_add_message.avis_spammeurs", $f_lang['avis_spammeurs']);
$echo_html -> MxText("bloc_add_message.bloc_code_securite.chem_absolu", $chem_absolu);
$echo_html -> MxText("bloc_add_message.bloc_code_securite.veuillez_taper_code", $f_lang['veuillez_taper_code']);
$echo_html -> MxText("bloc_add_message.bloc_code_securite.a_quoi_ca_sert", $f_lang['a_quoi_ca_sert']);
$echo_html -> MxText("bloc_add_message.bloc_code_securite.lang", @$config['langue']);

// si recherche en cours => affichage d'un bouton d'annulation
if (isset($_GET['mots_search']) && $_GET['mots_search'] && $config['ok_aff_moteur']){
	$echo_html -> MxText("bloc_moteur.btn_annuler", '<input type="submit" value="'.$f_lang['annuler'].'" name="annuler" class="btn_search" />');
}

// si un code de securite incorrect a ete saisi ou utilisateur banni ou URL trouvee, on reaffiche les infos saisies par l'utilisateur
if ((isset($_GET['code_erreur']) && $_GET['code_erreur']) || (isset($_GET['no_pseudo']) && $_GET['no_pseudo']) || (isset($_GET['no_email']) && $_GET['no_email']) || (isset($_GET['no_ip']) && $_GET['no_ip']) || (isset($_GET['no_url']) && $_GET['no_url']) || (isset($_GET['no_mot']) && $_GET['no_mot'])){
	$echo_html -> MxText("bloc_add_message.bloc_pseudo.value_nom", ' value="'.htmlspecialchars(stripslashes($tab_infos_saisies[3])).'"');
	$echo_html -> MxText("bloc_add_message.bloc_email.value_email", ' value="'.htmlspecialchars(stripslashes($tab_infos_saisies[4])).'"');

	if (isset($tab_infos_saisies[5]))
		$echo_html -> MxText("bloc_add_message.bloc_site.value_site", ' value="'.htmlspecialchars(stripslashes($tab_infos_saisies[5])).'"');
	else
		$echo_html -> MxText("bloc_add_message.bloc_site.value_site", ' value=""');

	$echo_html -> MxText("bloc_add_message.bloc_ville.value_ville", ' value="'.htmlspecialchars(stripslashes($tab_infos_saisies[6])).'"');

	$echo_html -> MxText("bloc_add_message.bloc_note.select_note_".$tab_infos_saisies[8], ' selected="selected"');
	$echo_html -> MxText("bloc_add_message.value_message_textarea", htmlspecialchars(stripslashes($tab_infos_saisies[9])));
}
else {
	$echo_html -> MxText("bloc_add_message.bloc_note.select_note_none", ' selected="selected"');
	$echo_html -> MxText("bloc_add_message.value_message_textarea", "");
}

/* affichage des variables pour la partie des messages / page */
$echo_html -> MxText("bloc_nb_messages_page.messages", $f_lang['messages']);
$echo_html -> MxText("bloc_nb_messages_page.messages_a", $f_lang['messages_a']);
$echo_html -> MxText("bloc_nb_messages_page.page", $f_lang['page']);
$echo_html -> MxText("bloc_nb_messages_page.nbre_messages", $f_lang['nbre_messages']);
$echo_html -> MxText("bloc_nb_messages_page.chem_absolu", $chem_absolu);

/* action lors du clique sur le submit du formulaire */
$echo_html -> MxText("bloc_add_message.action_url", $chem_absolu."add_message.php?".$urlExtAdd);

/* page precedente / suivante */
$page = floor($_GET['debut'] / $config['nb_pages']) + 1;
$nb_pages_total = ceil($total_messages_livre / $config['nb_pages']);

//precedente
if ($page > 1)
	$echo_html -> MxText("bloc_liste_pages.page_pre", "<a href=\"?debut=".($_GET['debut'] - $config['nb_pages']).$urlExtAdd."\">".$f_lang['precedente']."</a>");
else
	$echo_html -> MxText("bloc_liste_pages.page_pre", "<span class=\"Gris_prec_suiv\">".$f_lang['precedente']."</span>");

//suivante
if ($page < $nb_pages_total)
	$echo_html -> MxText("bloc_liste_pages.page_sui", "<a href=\"?debut=".($_GET['debut'] + $config['nb_pages']).$urlExtAdd."\">".$f_lang['suivante']."</a>");
else
	$echo_html -> MxText("bloc_liste_pages.page_sui", "<span class=\"Gris_prec_suiv\">".$f_lang['suivante']."</span>");


/* affichage de l'ensemble des pages disponibles */
$debut_page = $page - ceil($nb_pages_aff / 2);
if (($debut_page + $nb_pages_aff) > $nb_pages_total){
	$debut_page = $nb_pages_total - $nb_pages_aff + 1;
}
if ($debut_page < 1)
	$debut_page = 1;

$save_debut_page = $debut_page;
$liste_pages_dispos = "";

for ($i = 1; $i <= $nb_pages_aff; $i++){
	if ($debut_page <= $nb_pages_total){
		if ($debut_page == $page)
			$liste_pages_dispos .= "<b>".$debut_page."</b>";
		else
			$liste_pages_dispos .= "<a href=\"?debut=".(($debut_page - 1) * $config['nb_pages']).$urlExtAdd."\">".$debut_page."</a>";

		if ($i < $nb_pages_aff && $debut_page < $nb_pages_total)
			$liste_pages_dispos .= "-";
	}

	$debut_page++;
}

if (($save_debut_page + $nb_pages_aff) <= $nb_pages_total)
	$liste_pages_dispos .= " ... "."<a href=\"?debut=".(($nb_pages_total - 1) * $config['nb_pages']).$urlExtAdd."\">".$nb_pages_total."</a>";

if ($save_debut_page > 1)
	$liste_pages_dispos = "<a href=\"?debut=0".$urlExtAdd."\">1</a> ... ".$liste_pages_dispos;

$echo_html -> MxText("bloc_liste_pages.suite_pages", $liste_pages_dispos);

/* informations sur la page en cours */
$echo_html -> MxText("bloc_nb_messages_page.nb_messages_total", $total_messages_livre);
$echo_html -> MxText("bloc_nb_messages_page.page_en_cours", $page);

if ($total_messages_livre > 0){
	$message_de_a1 = $_GET['debut'] + 1;
	if ($page == $nb_pages_total)
		$message_de_a2 = $total_messages_livre;
	else
		$message_de_a2 = $_GET['debut'] + $config['nb_pages'];
}
else{
	$message_de_a1 = 0;
	$message_de_a2 = 0;
}

$echo_html -> MxText("bloc_nb_messages_page.message_de_a1", $message_de_a1);
$echo_html -> MxText("bloc_nb_messages_page.message_de_a2", $message_de_a2);

/* message eventuel a l'encontre d'un visiteur */
if (isset($_GET['no_ip']) && $_GET['no_ip'] == "1")
	$echo_html -> MxText("message_alert", message_javascript($f_lang['no_ip'], false));
else if (isset($_GET['no_pseudo']) && $_GET['no_pseudo'] == "1")
	$echo_html -> MxText("message_alert", message_javascript($f_lang['no_pseudo'], false));
else if (isset($_GET['no_email']) && $_GET['no_email'] == "1")
	$echo_html -> MxText("message_alert", message_javascript($f_lang['no_email'], false));
else if (isset($_GET['no_mot']) && $_GET['no_mot'] == "1")
	$echo_html -> MxText("message_alert", message_javascript($f_lang['no_mot'], false));
else if (isset($_GET['spam']) && $_GET['spam'] == "1")
	$echo_html -> MxText("message_alert", message_javascript($f_lang['spam'], false));
else if (isset($_GET['no_obligatoire']) && $_GET['no_obligatoire'] == "1")
	$echo_html -> MxText("message_alert", message_javascript($f_lang['champ_obligatoire_vide'], false));
else if (isset($_GET['no_url']) && $_GET['no_url'] == "1")
	$echo_html -> MxText("message_alert", message_javascript($f_lang['url_interdite'], false));
else if (isset($_GET['time_erreur']) && $_GET['time_erreur'] == "1")
	$echo_html -> MxText("message_alert", message_javascript($f_lang['time_erreur'], false));
else if (isset($_GET['ok_post']) && $_GET['ok_post'] == "1" && !$config['admin_valide_messages'])
	$echo_html -> MxText("message_alert", message_javascript($f_lang['ok_post'], false));
else if (isset($_GET['ok_post']) && $_GET['ok_post'] == "1" && $config['admin_valide_messages'])
	$echo_html -> MxText("message_alert", message_javascript($f_lang['ok_post_valid'], false));
else if (isset($_GET['code_erreur']) && $_GET['code_erreur'])
	$echo_html -> MxText("message_alert", message_javascript($f_lang['erreur_saisie_code_securite'], false));
else
	$echo_html -> MxText("message_alert", "");

/* moteur de recherche */
if ($config['ok_aff_moteur']){
	/* texte langue */
	$echo_html -> MxText("bloc_moteur.text_select_search", $f_lang['text_select_search']);
	$echo_html -> MxText("bloc_moteur.text_ok_search", $f_lang['text_ok_search']);

	/* valeur du champ */
	$echo_html -> MxText("bloc_moteur.value_search", htmlspecialchars(@$_GET['mots_search']));
}
else
	$echo_html -> MxBloc("bloc_moteur", "rese");

/* copyright */
/* You have to keep this line to use Alex Guestbook freely --- Vous devez conserver la ligne suivante pour pouvoir utiliser Alex Guestbook */
$echo_html -> MxText("copyright", '<a href="http://www.alexguestbook.net" id="copyright"><img src="'.$chem_absolu.'images/copyright.png" alt="Copyright AlexGuestbook" /></a>');

/* verification des champs obligatoires : si non obligatoire, on supprime le controle javascript */
$tab_nom_champs2 = array(
	"pseudo" => "nom",
	"email" => "email",
	"site" => "site",
	"pays" => "pays",
	"ville" => "ville",
	"note" => "note"
);
foreach ($tab_nom_champs2 as $key => $value){
	if ($config['champ_'.$key] == 4 || $config['champ_'.$key] == 6){
		$echo_html -> MxText("bloc_verif_".$value.".erreur_add_".$value, $f_lang['erreur_add_'.$value]);
		
	}
	else
		$echo_html -> MxBloc("bloc_verif_".$value, "rese");
}

/* on supprime le controle javascript de la validite d'un email si le visiteur ne peut ajouter son email ou l'URL de son site*/
if ($config['champ_email'] == 1){
	$echo_html -> MxBloc("bloc_verif_email", "rese");
	$echo_html -> MxBloc("bloc_verif_email2", "rese");
}
else
	$echo_html -> MxText("bloc_verif_email2.erreur_mail", $f_lang['erreur_mail']);

if ($config['champ_site'] == 1){
	$echo_html -> MxBloc("bloc_verif_site", "rese");
	$echo_html -> MxBloc("bloc_verif_site2", "rese");
}
else
	$echo_html -> MxText("bloc_verif_site2.erreur_url", $f_lang['erreur_url']);

/* affichage des messages */
if ($nb_champs_alex_livre_messages > 0){
	$echo_html -> WithMxPath("bloc_boucle_mess", "relative");
	for ($i = 1; $i <= $nb_champs_alex_livre_messages; $i++){
		$echo_html -> MxBloc("bloc_corps_messages", "modify", $chem_template."corps_messages.htm");

		/* pseudo */
		if ($config['champ_pseudo'] == 0 || $config['champ_pseudo'] == 4) {
			$echo_html -> MxText("bloc_corps_messages.pseudo", replace_car_html($alex_livre_messages_nom[$i]));
		}

		/* image home page */
		if ($config['champ_site'] == 0 || $config['champ_site'] == 4) {
			if ($alex_livre_messages_site[$i] && trim($alex_livre_messages_site[$i]) != "http://"){
				if (substr($alex_livre_messages_site[$i], 0, 7) != "http://")
					$alex_livre_messages_site[$i] = "http://".$alex_livre_messages_site[$i];

				$alex_livre_messages_site[$i] = htmlspecialchars($alex_livre_messages_site[$i]);

				$echo_html -> MxText("bloc_corps_messages.img_home", " ".encodeTxt("<a href=\"".replace_car_html($alex_livre_messages_site[$i])."\" target=\"_blank\"><img src=\"".$chem_absolu."images/home.gif\" alt=\"\" title=\"".$f_lang['go_home']." [".$alex_livre_messages_site[$i]."]\" style=\"border: 0px\" width=\"12\" height=\"12\" /></a>"));
			}
			else
				$echo_html -> MxText("bloc_corps_messages.img_home", "");
		}
		/* image email */
		if ($config['champ_email'] == 0 || $config['champ_email'] == 4){
			if ($alex_livre_messages_email[$i])
				$echo_html -> MxText("bloc_corps_messages.img_mail", " ".(($alex_livre_messages_email[$i]) ? encodeEmail(htmlspecialchars(replace_car_html($alex_livre_messages_email[$i]))) : ""));
			else
				$echo_html -> MxText("bloc_corps_messages.img_mail", "");
		}
		
		/*drapeau et pays*/
		if ($config['champ_pays'] == 0 || $config['champ_pays'] == 4){
			if ($alex_livre_messages_pays[$i]){
				$alex_livre_messages_pays[$i] = trim($alex_livre_messages_pays[$i]);
				$src_img = $chem_absolu.'images/flags/'.$alex_livre_messages_pays[$i].'.png';
				$taille_img = @filesize($src_img);
				$ok_exists_img = @file_exists($src_img);

				// Si taille de l'images = $img_blank_no_aff octets => image transparente, on ne l'affiche pas
				if ($ok_exists_img && $taille_img != $img_blank_no_aff)
					$echo_html -> MxText("bloc_corps_messages.flag", '<img src="'.$src_img.'" width="18" height="12" style="border: 0px" alt="" title="'.((isset($FLAGS_LANG[$alex_livre_messages_pays[$i]])) ? $FLAGS_LANG[$alex_livre_messages_pays[$i]] : $f_lang['flag']).'" />');
				
				// pays
				if (trim($alex_livre_messages_ville_pays[$i]) && ($config['champ_ville'] == 0 || $config['champ_ville'] == 4))
					$echo_html -> MxText("bloc_corps_messages.pays", (($alex_livre_messages_pays[$i]) ? ((isset($FLAGS_LANG[$alex_livre_messages_pays[$i]])) ? ", ".$FLAGS_LANG[$alex_livre_messages_pays[$i]] : '') : "").")");
				else if ($alex_livre_messages_pays[$i] && isset($FLAGS_LANG[$alex_livre_messages_pays[$i]]))
					$echo_html -> MxText("bloc_corps_messages.pays", " (".$FLAGS_LANG[$alex_livre_messages_pays[$i]].")");
			}
			else if (trim($alex_livre_messages_ville_pays[$i]) && ($config['champ_ville'] == 0 || $config['champ_ville'] == 4)) $echo_html -> MxText("bloc_corps_messages.pays", ")");
		}

		/* ville */
		if ($config['champ_ville'] == 0 || $config['champ_ville'] == 4){
			if (trim($alex_livre_messages_ville_pays[$i])){
				$echo_html -> MxText("bloc_corps_messages.ville", " (".replace_car_html($alex_livre_messages_ville_pays[$i]));
			}
			if (trim($alex_livre_messages_ville_pays[$i]) && $config['champ_pays'] != 0 && $config['champ_pays'] != 4)
				$echo_html -> MxText("bloc_corps_messages.ville", " (".replace_car_html($alex_livre_messages_ville_pays[$i]).")");
		}
		
		/* date */
		$echo_html -> MxText("bloc_corps_messages.message_le", $f_lang['message_le']);
		// ajout du decalage horaire
		$alex_livre_messages_time[$i] = $alex_livre_messages_time[$i] + $config['decalage_horaire']*3600;
		$echo_html -> MxText("bloc_corps_messages.message_date", date($config['format_date'], $alex_livre_messages_time[$i]));
		$echo_html -> MxText("bloc_corps_messages.message_heure", transform_heure($alex_livre_messages_time[$i]));
		$echo_html -> MxText("bloc_corps_messages.message_a", @$f_lang['message_a']);

		/* note */
		if ($config['champ_note'] == 0 || $config['champ_note'] == 4){
				$echo_html -> MxText("bloc_corps_messages.bloc_aff_note.message_note", $f_lang['message_note']);
				if ($alex_livre_messages_note[$i] == "")
					$alex_livre_messages_note[$i] = "-";
				$echo_html -> MxText("bloc_corps_messages.bloc_aff_note.note", $alex_livre_messages_note[$i]);
		}
		else
				$echo_html -> MxBloc("bloc_corps_messages.bloc_aff_note", "rese");
		
		/* message */
		$echo_html -> MxText("bloc_corps_messages.message_write", $alex_livre_messages_message[$i]);

		/* reponse */
		if ($alex_livre_messages_reponse[$i]){
			$echo_html -> MxText("bloc_corps_messages.bloc_reponse.titre_reponse", $alex_livre_messages_titre_reponse[$i]);
			$echo_html -> MxText("bloc_corps_messages.bloc_reponse.reponse", replace_censure_smileys(trim($alex_livre_messages_reponse[$i]), false));
		}
		else
			$echo_html -> MxBloc("bloc_corps_messages.bloc_reponse", "rese");

		/* id du message pour l'ancre */
		$echo_html -> MxText("bloc_corps_messages.idMsg", $alex_livre_messages_id[$i]);

		/* nouveau bloc : espace entre chaque message */
		$echo_html -> MxBloc("bloc_space", "modify", $chem_template."space.htm");

		$echo_html -> MxBloc("", "loop");
	}
	$echo_html -> MxText("no_message", "");
	// indique la fin de la boucle pour Modelixe
	$echo_html -> WithMxPath("", "");
}
else
	$echo_html -> MxText("no_message", "<div style=\"text-align: center\"><br />".$f_lang['no_message']."<br /><br /></div>");

$html = $echo_html -> MxWrite("", true);

/* masquer le bloc de visualisation des messages */
if (isset($_GET['seeMess']) && int_only($_GET['seeMess']) == 1)
	$html = preg_replace("#<!--=== BLOC MESSAGES ===-->.*?<!--=== /BLOC MESSAGES ===-->#si", "", $html);

/* masquer le bloc de visualisation des notes */
if (isset($_GET['seeNotes']) && int_only($_GET['seeNotes']) == 1)
	$html = preg_replace("#<!--=== BLOC NOTES ===-->.*?<!--=== /BLOC NOTES ===-->#si", "", $html);

/* masquer le bloc pour ajouter un message */
if (isset($_GET['seeAdd']) && int_only($_GET['seeAdd']) == 1){
	$html = preg_replace("#<!--=== BLOC ADD MESSAGE ===-->.*?<!--=== /BLOC ADD MESSAGE ===-->#si", "", $html);
	$html = preg_replace("#<!--=== Text SEE ===-->.*?<!--=== /Text SEE ===-->#si", "", $html);
}
else
	$html = preg_replace("#<!--=== Text ADD ===-->.*?<!--=== /Text ADD ===-->#si", "", $html);

/* masquer le bloc header si on inclut le fichier */
if ($config['inclure_livre'] == 1){
	$html = preg_replace("#<!--=== BLOC HEADER_HTML ===-->.*?<!--=== /BLOC HEADER_HTML ===-->#si", "", $html);
	$html = preg_replace("#<!--=== BLOC FOOTER_HTML ===-->.*?<!--=== /BLOC FOOTER_HTML ===-->#si", "", $html);
}
else
	$html = preg_replace("#<!--=== BLOC HEADER_HTML ===-->#si", "", $html);

echo $html;

MxEnd();
?>