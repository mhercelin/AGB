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
$chem_absolu = "./";

//----------------------- fichiers à inclure
include($chem_absolu."config/extension.inc");
include($chem_absolu."include/livre_include.".$alex_livre_ext);
sql_select_query("*", "alex_livre_config");
error_reporting(0);

//----------------------- remplacement dans le query_string
$tab_var_replace = array(
	1 => "no_ip",
	"no_pseudo",
	"no_email",
	"no_mot",
	"time_erreur",
	"url_interdite",
	"ok_post",
	"seeMess",
	"seeNotes",
	"seeAdd"
);

for ($i = 1; $i <= count($tab_var_replace); $i++){
	$_SERVER['QUERY_STRING'] = eregi_replace($tab_var_replace[$i]."([^&]*)", "", $_SERVER['QUERY_STRING']);
}

while (strpos($_SERVER['QUERY_STRING'], "&&")){
	$_SERVER['QUERY_STRING'] = str_replace("&&", "&", $_SERVER['QUERY_STRING']);
}

// pas de html autorisé dans le message
$messagePost = strip_tags($_POST['message_textarea']);

// si un nombre maxi de caractères a été défini dans les options
if ($config['maxi_car'] > 0)
	$messagePost = substr($messagePost, 0, $config['maxi_car']-1);

//----------------------- url de la page à re-charger
$pageToGoAfterPost = $config['url_recharger']."?".$_SERVER['QUERY_STRING'];

//----------------------- on s'assure de la validité de la note
if ($_POST['note_site'])
	$_POST['note_site'] = (int)trim($_POST['note_site']);

if (isset($_POST['note_site']) && $_POST['note_site'] > 10)
	$_POST['note_site'] = 10;
else if (isset($_POST['note_site']) && $_POST['note_site'] < 0)
	$_POST['note_site'] = 0;

//-----------------------BANISSEMENT
$ip_visiteur = $_SERVER['REMOTE_ADDR'];
sql_select_query("*", "alex_livre_ban");
sql_select_query("texte_censure", "alex_livre_censure");

$pseudo_banni = $email_banni = $ip_bannie = $mot_banni = false;
//----------------------- on vérifie que les pseudo, email et ip ne soient pas bannis
for ($i = 1; $i <= $nb_champs_alex_livre_ban; $i++){
	if (!empty($alex_livre_ban_pseudo[$i]) && pseudo_banni($alex_livre_ban_pseudo[$i], $_POST['nom'])){
		$pseudo_banni = true;
		break;
	}
	else if (!empty($alex_livre_ban_email[$i]) && email_banni($alex_livre_ban_email[$i], $_POST['email'])){
		$email_banni = true;
		break;
	}
	else if (!empty($alex_livre_ban_ip[$i]) && ip_bannie($alex_livre_ban_ip[$i], $ip_visiteur)){
		$ip_bannie = true;
		break;
	}
}

//----------------------- on vérifie si le message contient un mot interdit
if ($config['admin_bannir_mot']){
	for ($i = 1; $i <= $nb_champs_alex_livre_censure; $i++){
		if(mot_banni($alex_livre_censure_texte_censure[$i], $messagePost)){
			$mot_banni = true;
			break;
		}
	}
}
//-----------------------/BANISSEMENT

//----------------------- on vérifie la présence d'URL dans le message
$presence_url = false;
if ($config['url_interdites']){
	if (valider_url($_POST['message_textarea'])){
		$presence_url = true;
	}
}

//----------------------- vérification des champs obligatoires */
$tab_nom_champs = array(
	"pseudo" => "nom",
	"email" => "email",
	"site" => "site",
	"pays" => "pays",
	"ville" => "ville",
	"note" => "note_site"
);
foreach ($tab_nom_champs as $key => $value){
	if ((($value != 'note_site') && empty($_POST[$value]) && ($config['champ_'.$key] == 4 || $config['champ_'.$key] == 6)) || ($value == 'note_site' && (!isset($_POST['note_site']) || !int_only($_POST['note_site'], '', '', true)) && ($config['champ_'.$key] == 4 || $config['champ_'.$key] == 6))) {
			$champ_obligatoire = 1;
			break;
	}
} 

//----------------------- on vérifie si l'utilisateur n'a pas déjà posté un message trop récemment
$message_trop_recent = false;

if (countTotal("*", 'alex_livre_messages', "WHERE ip='".$ip_visiteur."' and time>='".(time() - ($config['temps_ip_post'] * 60))."'")){
	$message_trop_recent = true;
	$f_db_connexion -> sql_close();
	header("Location: ".$pageToGoAfterPost."&time_erreur=1");
	exit();
}

//----------------------- on vérifie, si nécessaire, le code de sécurité
if ($config['admin_add_code_securite']){
	$sql = "SELECT valeur FROM `".$name_table['alex_img_verif_add'] ."` WHERE numero='".$_POST['num_id']."'";
	$result = $f_db_connexion -> sql_query($sql);
	$num_valeur = $f_db_connexion -> sql_fetchrow($result);
}

// si le code de sécurité est incorrect OU si le visiteur est banni (pseudo, adèl, ip) OU si le message contient des URL OU  si un mot est interdit  OU si un champ obligatoire n'est pas rempli => retour à la zone de saisie 
if (($config['admin_add_code_securite'] && (!isset($num_valeur[0]) || !$num_valeur[0] || $num_valeur[0] != strtoupper($_POST['code_securite']))) || $pseudo_banni || $email_banni || $ip_bannie || $presence_url || $mot_banni || $champ_obligatoire){
	// sauvegarde des infos saisies par l'utilisateur
	$sql = "UPDATE `".$name_table['alex_img_verif_add'] ."` SET `nom`='".ucfirst(strip_tags($_POST['nom']))."', `email`='".strip_tags(@$_POST['email'])."', `site`='".strip_tags(@$_POST['site'])."', `ville_pays`='".ucfirst(strip_tags($_POST['ville']))."', `pays`='".strip_tags($_POST['pays'])."', `note`='".@$_POST['note_site']."', `message`='".$messagePost."' WHERE numero='".$_POST['num_id']."'";
	$f_db_connexion -> sql_query($sql);

	// redirection vers la page du formulaire
	if ($config['admin_add_code_securite'] && (!isset($num_valeur[0]) || !$num_valeur[0] || $num_valeur[0] != strtoupper($_POST['code_securite']))) header("Location: ".$pageToGoAfterPost."&seeMess=1&seeNotes=1&seeAdd=0&code_erreur=".$_POST['num_id']);
	else if ($pseudo_banni) header("Location: ".$pageToGoAfterPost."&seeMess=1&seeNotes=1&seeAdd=0&no_pseudo=1&code_erreur=".$_POST['num_id']);
	else if ($email_banni) header("Location: ".$pageToGoAfterPost."&seeMess=1&seeNotes=1&seeAdd=0&no_email=1&code_erreur=".$_POST['num_id']);
	else if ($ip_bannie) header("Location: ".$pageToGoAfterPost."&seeMess=1&seeNotes=1&seeAdd=0&no_ip=1&code_erreur=".$_POST['num_id']);
	else if ($presence_url) header("Location: ".$pageToGoAfterPost."&seeMess=1&seeNotes=1&seeAdd=0&no_url=1&code_erreur=".$_POST['num_id']);
	else if ($mot_banni) header("Location: ".$pageToGoAfterPost."&seeMess=1&seeNotes=1&seeAdd=0&no_mot=1&code_erreur=".$_POST['num_id']);
	else if ($champ_obligatoire) header("Location: ".$pageToGoAfterPost."&seeMess=1&seeNotes=1&seeAdd=0&no_obligatoire=1&code_erreur=".$_POST['num_id']);
	exit();
}

//----------------------- l'utilisateur est autorisé à poster, on enregistre le message
if (trim($_POST['message_textarea']) && !$ip_bannie && !$pseudo_banni && !$email_banni && !$presence_url && !$mot_banni && !$message_trop_recent && !$champ_obligatoire){
	// le livre nécessite-t-il une validation avant le post définitif ?
	if ($config['admin_valide_messages'])
		$valid = "no";
	else
		$valid = "yes";

	// si l'url ne commence pas par http://, on les rajoute.
	if ($_POST['site'] && substr($_POST['site'], 0, 7) != "http://"){
		$_POST['site'] = 'http://'.$_POST['site'];
	}
	// vérifie la forme de l'URL
	if (!valider_url($_POST['site'])) $_POST['site'] = '';
	
	$query = "INSERT INTO ".$name_table['alex_livre_messages']." (`nom`, `email`, `site`, `ville_pays`, `pays`, `note`, `message`, `titre_reponse`, `reponse`, `time`, `ip`, `valid`) VALUES ('".ucfirst(strip_tags($_POST['nom']))."', '".strip_tags(@$_POST['email'])."', '".strip_tags(@$_POST['site'])."', '".ucfirst(strip_tags($_POST['ville']))."', '".strip_tags($_POST['pays'])."', '".strip_tags(@$_POST['note_site'])."', '".$messagePost."', '', '', '".time()."', '".$ip_visiteur."', '".$valid."')";
	$result = $f_db_connexion -> sql_query($query);

	//----------------------- on recherche tous les admins qui doivent être prévenus
	sql_select_query("id_user, email", "alex_livre_users", "WHERE receive_email='1'");

	/* contenu du message */
	$chaine_message .= "IP : ".$_SERVER['REMOTE_ADDR']." (".gethostbyaddr($_SERVER['REMOTE_ADDR']).")\n".$f_lang['nom_pseudo_visiteur']." ".strip_tags(stripslashes($_POST['nom']))."\n";
	if ($config['ok_mail']) $chaine_message .= $f_lang['email_visiteur']." ".strip_tags(stripslashes($_POST['email']))."\n";
	if ($config['ok_url'])  $chaine_message .= $f_lang['site_web_visiteur']." ".strip_tags(stripslashes($_POST['site']))."\n";
	if ($config['ok_pays']) $chaine_message .= $f_lang['ville_visiteur']." ".strip_tags(stripslashes($_POST['ville']))."\n";
	if ($config['ok_pays']) $chaine_message .= $f_lang['pays_visiteur']." ".((isset($_POST['pays']) && $_POST['pays']) ? $FLAGS_LANG[strip_tags(stripslashes($_POST['pays']))] : "")."\n";
	if ($config['ok_note']) $chaine_message .= $f_lang['note_visiteur']." ".strip_tags(stripslashes($_POST['note_site']))."\n";
	$chaine_message .= "\n".$f_lang['message_visiteur']."\n".stripslashes($messagePost)."\n";

	/* envoi d'un message aux admin */
	if ($config['send_mail']){
		for ($i = 1; $i <= $nb_champs_alex_livre_users; $i++){
			if (isset($_POST['email']) && verifMailSyntaxe($_POST['email']))
				$from_email  = $_POST['email'];
			else
				$from_email  = $alex_livre_users_email[$i];

			$entetedate  = date("D, j M Y H:i:s");
			$entetemail  = "From: $from_email \r\n";
			$entetemail .= "Reply-To: $from_email \r\n";
			$entetemail .= "MIME-Version: 1.0\r\n";
			$entetemail .= "Content-type: text/plain; charset=iso-8859-1\r\n";
			$entetemail .= "X-Mailer: PHP\r\n";
			$entetemail .= "X-Priority: 1\r\n";

			envoyer_mail($alex_livre_users_email[$i], $f_lang['mail_object'].$_SERVER["SERVER_NAME"], $f_lang['mail_message'].'http://'.$_SERVER['HTTP_HOST'].dirname($config['fichier_inclusion'])." :\r\n\r\n-------------------------------------------\r\n".trim($chaine_message)."\r\n-------------------------------------------\r\n\r\nPowered by @lex Guestbook ".$alex_livre_version." - http://www.alexguestbook.net/", $entetemail);
		}
	}

	/* envoi d'un message de remerciement */
	if (isset($config['admin_envoyer_remerciement']) && $config['admin_envoyer_remerciement'] && $_POST['email']){
		// Récupération de l'email de l'admin n°1 (administrateur du site)
		$alex_livre_users_email = '';
		sql_select_query("email", "alex_livre_users", "", "ORDER BY id_user", "LIMIT 1");

		if (isset($alex_livre_users_email[1]) && $alex_livre_users_email[1])
			$from_email  = $alex_livre_users_email[1];
		else
			$from_email  = trim($_POST['email']);

		$entetedate  = date("D, j M Y H:i:s");
		$entetemail  = "From: $from_email \r\n";
		$entetemail .= "Reply-To: $from_email \r\n";
		$entetemail .= "MIME-Version: 1.0\r\n";
		$entetemail .= "Content-type: text/plain; charset=iso-8859-1\r\n";
		$entetemail .= "X-Mailer: PHP\r\n";
		$entetemail .= "X-Priority: 1\r\n";

		// récupération de l'éventuel message personnalisé enregistré pour la langue sélectionnée
		sql_select_query("msg", "alex_livre_txt_lang", "WHERE lang='".$config['langue']."' and `type`='rep_auto'");

		if (isset($alex_livre_txt_lang_msg[1]))
			$msg_send = $alex_livre_txt_lang_msg[1];
		else 
			$msg_send = $f_lang['txt_remerciement'];

		// envoi du message
		envoyer_mail(trim($_POST['email']), stripslashes($f_lang['remerciement']), str_replace("[PSEUDO]", trim(strip_tags(stripslashes($_POST['nom']))), stripslashes($msg_send)), $entetemail);
	}
}
else {
	echo $f_lang['interdit_de_message'];
	header("Location: ".$pageToGoAfterPost);
	exit();
}

/* fermeture de la connexion */
$f_db_connexion -> sql_close();

/* redirection */
header("Location: ".$pageToGoAfterPost."&ok_post=1");
exit();
?>