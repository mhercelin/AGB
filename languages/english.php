<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2011    //
//         Hercelin Maxime (c) 2005 - 2011   //
//         http://www.alexguestbook.net/     //
//              all right reserved           //
//   English translation by Pierre Gieling   //
//          http://www.chez-pierre.net/      //
///////////////////////////////////////////////

/* Encodage utilisé dans le script */
$SCRIPT_ENCODAGE = "iso-8859-1";
$CONTENT_LANGUAGE = "en";

/* Bas de page partie admin */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

/* setup */
$f_lang['install_auto'] = "Automatic installation";
$f_lang['identi_base'] = "Database ID";
$f_lang['type_base'] = "Database type";
$f_lang['host_base'] = "Host";
$f_lang['user_base'] = "User";
$f_lang['pass_base'] = "Password";
$f_lang['nom_base'] = "Database name";
$f_lang['nom_table'] = "Name of the tables";
$f_lang['name_table_sessions'] = "Name of the sessions table";
$f_lang['name_table_users'] = "Name of the users table";
$f_lang['name_table_messages'] = "Name of the messages table";
$f_lang['name_table_censure'] = "Name of the censored words table";
$f_lang['name_table_ip'] = "Name of the banned IP table";
$f_lang['name_table_smileys'] = "Name of the smileys table";
$f_lang['extension_script'] = "Script extension";
$f_lang['choose_extension'] = "Choose an extension for the script<br>(we advise \"php\", otherwise you will have to rename all files with the chosen extension)";
$f_lang['identi_acces_admin'] = "Your ID to access the administration panel";
$f_lang['login_admin'] = "Login";
$f_lang['pass_admin'] = "Password";
$f_lang['verif_pass_admin'] = "Type your password again";
$f_lang['email_admin_setup'] = "Your Email";
$f_lang['installer'] = "Install";
$f_lang['erreur_host'] = "You forgot to give your database server host";
$f_lang['erreur_user'] = "You forgot to give your ID to connect to the database";
$f_lang['erreur_nom_base'] = "You forgot to give the name of your database";
$f_lang['erreur_log_admin'] = "You forgot to give your login name to the administration panel";
$f_lang['erreur_pass_admin'] = "You forgot to give your password to connect to the administration panel";
$f_lang['erreur_pass_differents'] = "ATTENTION, your passwords are different.";
$f_lang['erreur_first_connexion'] = "<b>ERROR, connection to the database was impossible.</b><br><br>please check your connection ID : <a href=\"javascript:history.go(-1);\"><b>back</b></a>.";
$f_lang['erreur_install'] = "Installation failed";
$f_lang['ok_install'] = "Installation successful";
$f_lang['text_ok_install'] = "<b>Thank you ! Installation was successful.</b><br><br>For security reasons we strongly advise you to delete the installation file you just used (\"setup.php\"), if you don't, other people will be able to use it to corrupt your configuration files.<br><br>You can now administer your guestbook by clicking <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>here</b></a> or<br> see it like visitors do <a href=\"".$chem_absolu."\" target=\"_blank\"><b>here</b></a>.";
$f_lang['erreur_ecriture'] = "<b>ERROR</b>, impossible to write in the directory \"config/\".<br><br>Please change the Unix rights of the  \"config\" folder (chmod 777), then try the installation again : <a href=\"javascript:history.go(-1)\"><b>back</b></a>.";

/* administration */
$f_lang['page protect'] = "Protected page";
$f_lang['login'] = "Login";
$f_lang['pass'] = "Pass";
$f_lang['value identif'] = "Identification";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "Options";
$f_lang['script'] = "Script";
$f_lang['graphismes'] = "Guestbook skins";
$f_lang['messages'] = "Messages";
$f_lang['gestion'] = "Management";
$f_lang['censure_mots'] = "Censoring words";
$f_lang['bannir_ip'] = "Banning ip's";
$f_lang['smileys'] = "Smileys";
$f_lang['utilisateurs'] = "Administrators";
$f_lang['ajouter'] = "Add";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "About...";
$f_lang['donner_avis'] = "Give us your opinion";
$f_lang['deconnexion'] = "disconnect";

 /* options */
 $f_lang['options_livre'] = "Guestbook options";
$f_lang['ok_write'] = "You can write from within this interface.";
$f_lang['no_write'] = "<u>You cannot write from within this interface</u>. The script will try to change the Unix rights upon save (chmod 777), if it doesn't succeed you will be alerted and you will have to edit the informations of this file with a text editor.";
$f_lang['infos'] = "Information about the \"config.".$alex_livre_ext."\" file :";
$f_lang['infos_'] = "Informations given, on this page are saved in the  \"config.".$alex_livre_ext."\" file, stored in the \"include\" folder. If you wish, you can directly edit this file with a text editor.";
$f_lang['options_generales'] = "Overall options";
$f_lang['langue'] = "Language";
$f_lang['send_mail'] = "Do you wish the administrators to receive an Email when a new message is posted ?";
$f_lang['avert_mail'] = "<br>(<b>information</b> : the mail() function of your host is turned off, therefore even if you check \"yes\" you will not receive Email notification)";
$f_lang['oui'] = "yes";
$f_lang['non'] = "no";
$f_lang['options_modules'] = "Guestbook fields options";
$f_lang['admin_champ_email'] = "Visitors can enter their E-mail address";
$f_lang['admin_champ_site'] = "Visitors can enter their website address";
$f_lang['admin_champ_pays'] = "Visitors can select their country";
$f_lang['admin_champ_note'] = "Visitors can give a score to your site";
$f_lang['admin_ok_aff_moteur'] = "Show the search engine";
$f_lang['options_tech'] = "Technical options";
$f_lang['url_recharger'] = "Page to reload for the Guestbook";
$f_lang['url_variables'] = "Variable instructions sent as parameters (type # instead of $ in a variable)";
$f_lang['temps_session'] = "Session duration in seconds for the adminnistration panel";
$f_lang['skin_to_use'] = "Skin to be used";
$f_lang['enregistrer'] = "Save";
$f_lang['nb_pages'] = "Number of messages to be shown on each Guestbook page";
$f_lang['merci_options'] = "Thank you, informations have been updated";
$f_lang['erreur_options'] = "ERROR\\nThe informations could not be saved, it was impossible to write in the \\\"config.".$alex_livre_ext."\\\" file, please edit this file with a text editor to change your settings.";
$f_lang['temps_ip_post'] = "Number of minutes before a visitor can post again";
$f_lang['minutes'] = "minutes";
$f_lang['cut_mots'] = "Number of letters before a long word is cut";
$f_lang['format_date'] = "Date format";

/* skins */
$f_lang['ok_ajouter'] = "Thank you, the skin has been successfully created";
$f_lang['erreur_ajouter'] = "ERROR\\nThe skin could not be created, please create it manually";
$f_lang['text1_2'] = "The following skins will be saved in the &quot;templates/skins/&quot; folder. This interface allows you to easily modify them but you can also manually edit the html files.";
$f_lang['text2'] = "<b>If you also wish to modify the templates of the administration panel</b> please edit manually the files in the &quot;templates/admin/&quot; folder.";
$f_lang['text_aj_skin'] = "Add a skin";
$f_lang['ajouter'] = "Add";
$f_lang['gestion_skins'] = "Skins management";
$f_lang['vous_editez'] = "You now edit this skin :";
$f_lang['style'] = "stylesheet";
$f_lang['ajouter_message'] = "add a message part";
$f_lang['nbre_messages_page'] = "number of messages / pages part";
$f_lang['pages_dispos'] = "list of available pages / next page - previous page part";
$f_lang['texte_corps_messages'] = "messages body";
$f_lang['espacement'] = "space between 2 messages";
$f_lang['text_assembly'] = "file assembling the previous parts";
$f_lang['ok_edit_skin'] = "Thank you, the skin has been updated";
$f_lang['erreur_edit_skin'] = "ERROR\\nOne or several file(s) of the skin could not be updated. Please edit these files manually.";
$f_lang['ajouter'] = "Add";
$f_lang['supprimer'] = "Delete";
$f_lang['text_sup_skin'] = "Delete a skin";
$f_lang['ok_supprimer'] = "Thank you, the skin has been successfully deleted.";
$f_lang['erreur_supprimer'] = "ERROR\\nOne or several file(s) of the skin could not be deleted, you should delete them manually.";

/* page des mots censurés */
$f_lang['aj_mot'] = "Add a new word "; 
$f_lang['mot_interdit'] = "Forbidden word :";
$f_lang['remplacer_par'] = "Replace with :";
$f_lang['gestion_censure'] = "Forbidden words management";
$f_lang['mot'] = "word";
$f_lang['remplace_by'] = "replaced with";
$f_lang['liste_jour'] = "Update the list";
$f_lang['sup_mots'] = "Remove the selected words";
$f_lang['erreur_aj_censure1'] = "Please give a word to censor";
$f_lang['erreur_aj_censure2'] = "Please give a word to replace the censored words";
$f_lang['ok_aj_mot'] = "Thank you, the censored word has been added.";
$f_lang['verif_sup'] = "Do you wish to permanently remove the selected words ?";
$f_lang['merci_modif'] = "Thank you, changes have beeen saved";

/* bannir des ip */
$f_lang['bannir_ip'] = "Ban ip's";
$f_lang['text_ip1'] = "Each surfer on the web has a specific 4 numbers ID (i.e. 201.10.25.14). This ID is given by the access provider and changes, theoratically, each time he/she reconnects.";
$f_lang['text_ip2'] = "If you want to <b>prevent a user to post messages on your Guestbook</b>, you can copy his IP address here. You can also ban a range of IP addresses by using the escape symbol * (i.e. 201.15.55.*, or even 158.*.*.*).";
$f_lang['ajouter_ip'] = "Add a new banned IP";
$f_lang['gestion_ip'] = "Managing the IP's";
$f_lang['sup_ip'] = "Remove the selected banned IP's";
$f_lang['erreur_ip1'] = "Please give part 1 of the IP";
$f_lang['erreur_ip2'] = "Please give part 2 of the IP";
$f_lang['erreur_ip3'] = "Please give part 3 of the IP";
$f_lang['erreur_ip4'] = "Please give part 4 of the IP";
$f_lang['ok_aj_ip'] = "Thank you, this IP is now banned";
$f_lang['verif_sup_ip'] = "Do you really wish to delete the selected IP's ?";

/* smileys */
$f_lang['gestion_smileys'] = "Smileys management";
$f_lang['text_smileys'] = "<b>Smileys allow the visitor to show feelings</b> when posting. From this interface you can easily add or remove smileys so that your visitors have the widest choice of them :o)<br><br>Smileys available on this page are stored in the \"images/smileys\" folder.";
$f_lang['ajouter_smiley'] = "Add a smiley";
$f_lang['image_smiley'] = "Image";
$f_lang['car_replace'] = "Corresponding code";
$f_lang['gestion_smileys'] = "Smileys management";
$f_lang['sup_smileys'] = "Delete the selected smileys";
$f_lang['erreur_image'] = "Please choose a smiley";
$f_lang['erreur_car'] = "Please choose a corresponding code for the selected smiley";
$f_lang['ok_aj_smiley'] = "Thank you, the smiley has been successfully added";
$f_lang['no_smiley'] = "The smiley must be a GIF or JPEG image";
$f_lang['copy_impossible'] = "ERROR\\nIt was impossible to copy the smiley in the \\\"images/smileys\\\" folder.";
$f_lang['car_replace_exist'] = "ERROR\\nThe corresponding code already exists in the database.";
$f_lang['modif_smileys'] = "Update all smileys";
$f_lang['verif_sup_smileys'] = "Do you really wish to delete the selected smileys ?";
$f_lang['merci_modif_smileys'] = "Thank you, the smileys have been modified.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Add a Guestbook administrator";
	$f_lang['add_admin_2'] = "Add an admin";
	$f_lang['ajouter_admin'] = "Add";
	$f_lang['name_ajouter_admin'] = "add";
}
else{
	$f_lang['add_admin_texte'] = "Modify a Guestbook admin";
	$f_lang['add_admin_2'] = "Modify an admin";
	$f_lang['ajouter_admin'] = "Save";
	$f_lang['name_ajouter_admin'] = "modify";
}

$f_lang['identif_connexion'] = "Connection ID";
$f_lang['passe_admin'] = "Password";
$f_lang['email_admin'] = "Email (important if the admin has to receive an Email when a message is posted)";
$f_lang['admin_receive_email'] = "Do you wish the administrator to receive an Email when a message is posted ?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;is he allowed to modify script options ?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;to change the skins ?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;to manage messages ?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;to manage censored words ?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;to manage smileys ?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;to manage other administrators' accounts ?";
$f_lang['erreur_name'] = "Please give a connection ID";
$f_lang['erreur_passe'] = "Please give a password";
$f_lang['erreur_email'] = "Please give an Email";
$f_lang['ok_aj_admin'] = "Thank you, the account has been successfully created";
$f_lang['ok_modif_admin'] = "Thank you, the account has been updated";
$f_lang['erreur_aj_admin'] = "ERROR\\nThis login already exists";
$f_lang['revenir'] = "Back to the previous page";

/* gestion des admins */
$f_lang['gest_admin'] = "Managing the administrators";
$f_lang['sup_admin'] = "remove";
$f_lang['login_admin'] = "login";
$f_lang['email_admin'] = "Email";
$f_lang['modif_admin'] = "modify";
$f_lang['value_sup_admin'] = "Remove all the selected admins";
$f_lang['verif_sup_admin'] = "Do you really wish to remove all the selected admins ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "PAGE UNAVAILABLE";
$f_lang['erreur_auth'] = "Authentification failure";
$f_lang['erreur_droits'] = "You do not have the required rights to access this page.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Average score given by the visitors to this site :";
$f_lang['title_guestbook'] = "My Guestbook";
$f_lang['note_super'] = " : fantastic !";
$f_lang['note_moyen'] = " : average";
$f_lang['note_rate'] = " : a big failure";
$f_lang['nom_pseudo_visiteur'] = "Name or Nickname :";
$f_lang['email_visiteur'] = "Email address :";
$f_lang['site_web_visiteur'] = "Website URL :";
$f_lang['ville_pays_visiteur'] = "City / Country :";
$f_lang['note_visiteur'] = "Your score :";
$f_lang['message_visiteur'] = "Your message :";
$f_lang['ajouter_message_visiteur'] = "Add this message";
$f_lang['erreur_add_nom'] = "Please mention your name";
$f_lang['erreur_add_message'] = "Please add your message";
$f_lang['erreur_mail'] = "Your E-mail address doesn't seem valid ?";
$f_lang['messages'] = "Messages";
$f_lang['messages_a'] = "to";
$f_lang['page'] = "Page";
$f_lang['nbre_messages'] = "Number of messages";
$f_lang['message_le'] = "on";
$f_lang['message_note'] = "Score";
$f_lang['send_mail_to'] = "Send an Email to";
$f_lang['go_home'] = "Visit the site";
$f_lang['precedente'] = "&lt;&lt; previous";
$f_lang['suivante'] = "next &gt;&gt;";
$f_lang['no_message'] = "No message to show.";
$f_lang['no_ip'] = "ATTENTION\\nYour IP has been banned, you are not authorized to post messages on this Guestbook.";
$f_lang['ok_post'] = "Thank you !  Your message has been successfully posted.";
$f_lang['time_erreur'] = "ATTENTION\\nYour message could not be posted, you already posted one too recently.";
$f_lang['text_select_search'] = "Show only the messages containing the following words";
$f_lang['text_ok_search'] = "Ok";

/* mail envoyé */
$f_lang['mail_object'] = "[info] - New message in your Guestbook - ";
$f_lang['mail_message'] = "Hi,\n\nWe inform you that a new message was posted in your Guestbook ";

/* gestion des messages */
$f_lang['gestion_mess'] = "Managing messages";
$f_lang['selectionner_pages'] = "Select";
$f_lang['messages_gest'] = "message";
$f_lang['page_gest'] = "page";
$f_lang['aller_en_page'] = "Go to page";
$f_lang['supprimer_gest'] = "delete";
$f_lang['auteur_gest'] = "author";
$f_lang['modifier_gest'] = "edit";
$f_lang['supprimer_mess_selected'] = "Delete the selected messages";
$f_lang['verif_sup_mess'] = "Do you really wish to delete the selected messages ?";

/* modifier un message */
$f_lang['modif_mess'] = "Edit a message";
$f_lang['message_modif'] = "Message";
$f_lang['nom_modif'] = "Name";
$f_lang['email_modif'] = "Email";
$f_lang['site_web_modif'] = "Website URL";
$f_lang['note_modif'] = "Score given to your site";
$f_lang['ville_pays_modif'] = "City / Country";
$f_lang['date_modif'] = "Date added";
$f_lang['ip_modif'] = "IP address";
$f_lang['ok_modif_mess'] = "Thank you, the changes have been saved";

/* titre des pages */
$f_lang['title identification'] = "identification";
$f_lang['title administration'] = "administration";
$f_lang['title frame gauche'] = "left frame";
$f_lang['title options'] = "options";
$f_lang['title skins'] = "skins";
$f_lang['title censure'] = "words to censor";
$f_lang['title censure'] = "managing the banned IPs";
$f_lang['title smileys'] = "managing the smileys";
$f_lang['title add admin'] = "add a guestbook administrator";
$f_lang['title gest admin'] = "managing the guestbook administrators";
$f_lang['title erreur'] = "error";
$f_lang['title gestion mess'] = "managing the messages";
$f_lang['title modif mess'] = "editing un message";
$f_lang['title setup'] = "installation";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Impossible to connect to the database";
$f_lang['erreur_connexion'] = "Your ID infos are incorrect";
$f_lang['manque login'] = "Please type in your login";
$f_lang['manque pass'] = "Please type in your password";
$f_lang['end session'] = "Your session ended";

/* add version 3.11 */
$f_lang['addSignature'] = "Write a message";
$f_lang['seeMessages'] = "Read posted messages";
$f_lang['addMessageBlocAdd'] = "Add a message in the guestbook";

/* add version 3.2 */
$f_lang['version'] = "Version";
$f_lang['new_version_dispo'] = "An updated version of the Guestbook is available";
$f_lang['version_courrante'] = "Current version of the script";
$f_lang['info_version'] = "Information about the version you have";
$f_lang['version_txt_ok'] = "The version you have is ".$alex_livre_version.",<br>this version is the latest, no upgrade is necessary.";
$f_lang['version_txt_erreur'] = "The version you have is ".$alex_livre_version.".<br/><b>An error occured during update verification.</b> You can verify new version on our website htt://www.alexguestbook.net"
$f_lang['version_txt_update'] = "The version you have is ".$alex_livre_version.", <b>a new version is available</b>";
$f_lang['version_down'] = "Download the upgraded version";
$f_lang['help_update'] = "Help for the upgrade";
$f_lang['spam'] = "The USER AGENT of your browser could not be determined, it seems that a robot tried to automatically post a message. If this is untrue, please try again with another browser.";
$f_lang['avis_spammeurs'] = "Note to spammers";
$f_lang['txt_spammeurs'] = "<b>This Guestbook is protected against spamming</b>, Email adresses and URLs are encoded in the source code of the generated pages, therefore it's absolutely useless to post commercials links, they will not be seen by search engines (furthermore your message will be deleted anyway...)";
$f_lang['fermer'] = "Close this window";
$f_lang['valider_messages'] = "Do you wish to review posted messages before they are publicly visible in the Guestbook ?";
$f_lang['valide'] = "Validated ?";
$f_lang['mess_valide'] = "This message has been validated";
$f_lang['mess_invalide'] = "This message is awaiting validation";
$f_lang['info_mess_valide'] = "Validated message ?";
$f_lang['ok_post_valid'] = "Thank you ! Your message has been successfully saved, it will be posted upon the webmaster's approval.";
$f_lang['see_skin'] = "Preview the Guestbook with this skin";
$f_lang['maxi_car'] = "Maximum number of signs/letters allowed in a message (0 = unlimited)";
$f_lang['il_reste'] = "You can type up to";
$f_lang['caracteres'] = "more letters/signs in your message";
$f_lang['sup_copyright'] = "Delete copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Name of the security codes table";
$f_lang['add_code_securite'] = "Do you wish to ask the visitors to enter a security code (\"captcha\") when posting a message ?";
$f_lang['t_chem_dossier_fonts'] = "Full URL to the fonts directory";
$f_lang['t_color_txt_code'] = "Hexadecimal code of the code text";
$f_lang['t_color_background_code'] = "Hexadecimal background color code";
$f_lang['veuillez_taper_code'] = "Please copy this 4 letters code into the box on the right";
$f_lang['a_quoi_ca_sert'] = "Why this?";
$f_lang['why_code'] = "Why a \"security code\" ?";
$f_lang['txt_why_code'] = "This procedure allows us to check that the message is posted by a real person and not by an automated software.<br><br><b>Commercials and referencing spam are forbidden on this Guestbook!</b>";
$f_lang['erreur_code_securite'] = "Please enter the security code";
$f_lang['erreur_saisie_code_securite'] = "The security code you typed in is not valid, please renew the operation";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Automated answer";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;manage the automated answers?";
$f_lang['text_reponse_auto'] = "<b>On this page you can write the automated answer's text</b> that will be sent to visitors who will have posted a message on your Guestbook.  This message will be sent if you activate this function in the script options.<br><br>Each language can have its own personnalized answer and the [PSEUDO] code will be replaced by the name or nickname of the visitor who posted the message.";
$f_lang['name_table_rep_auto'] = "Name for the MySQL table that will contain the automated answers messages";
$f_lang['gestion_reponses'] = "Managing messages";
$f_lang['msg_remerciement'] = "Thank you message";
$f_lang['txt_remerciement'] = "Hi [PSEUDO],\n\nThank you for leaving your message on our guestbook!";
$f_lang['ok_save_msg_rem'] = "Thanks, the automated Thank you answer has been saved.";
$f_lang['envoyer_remerciement'] = "Would you like the visitors to receive a \"thank you\" E-mail ? (warning : the E-mail address of the admin will be used to send these E-mails)";
$f_lang['remerciement'] = "Thanks";
$f_lang['titre_guestbook'] = "Guestbook title";
$f_lang['text_titre_guestbook'] = "<b>You can change the guestbook title</b> and write a different one for each available language.";
$f_lang['titre'] = "Title";
$f_lang['parametrage'] = "Settings";
$f_lang['ok_save_titre'] = "Thanks, the title has been saved.";
$f_lang['ville_visiteur'] = "City :";
$f_lang['pays_visiteur'] = "Country :";
$f_lang['flag'] = "Flag";
$f_lang['ville_modif'] = "City";
$f_lang['pays_modif'] = "Country";
$f_lang['action'] = "Action";
$f_lang['repondre'] = "Answering";
$f_lang['votre_reponse'] = "Your answer";
$f_lang['ok_reponse_mess'] = "Thanks, your answer has been saved";
$f_lang['defaut_titre_rep'] = "Webmaster's reply";
$f_lang['annuler'] = "Cancel";
$f_lang['num_appari'] = "Showing number";
$f_lang['nb_max_smileys'] = "Maximum number of smilies shown on the form (the others will still be viewable by clicking on the \"+\" sign)";
$f_lang['plus_smileys'] = "Show more smileys";
$f_lang['liste_all_smilies'] = "List of all smileys";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>This function allows you to show the latest messages posted in your Guestbook</b> on another page of your choice.";
$f_lang['parametrage_modele'] = "Template settings";
$f_lang['ok_save_boite'] = "Thanks, your settings have been saved";
$f_lang['format_date_boite'] = "Date format (identical to the <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> PHP function)";
$f_lang['nbre_maxi_pseudo_boite'] = "Maximum number of signs shown for the name or nickname";
$f_lang['nbre_maxi_message_boite'] = "Maximum number of signs shown for the message";
$f_lang['modele_affichage_donnees'] = "Data posting template";
$f_lang['url_dossier_livre_boite'] = "Complete URL to your guestbook folder";
$f_lang['url_livre_boite'] = "Complete URL to your guestbook index page";
$f_lang['generation_code'] = "Javascript code creation";
$f_lang['nom_msg_afficher'] = "Number of messages to show";
$f_lang['generer_code'] = "Create the Javascript call code";
$f_lang['code_a_copier'] = "HTML Code to be copied on the page(s) of your choice";
$f_lang['erreur_boite_java'] = "Please set a valid number of messages to show";
$f_lang['erreur_par_boite'] = "Settings error, cannot isolate the [BOUCLE] ... [/BOUCLE] chain in your template.";
$f_lang['saut_ligne_msg_boite'] = "Keep the line jumps in the messages";
$f_lang['message_a'] = "at";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;manage the database ?";
$f_lang['bdd'] = "Database";
$f_lang['optimisation'] = "Optimisation";
$f_lang['sauvegarde'] = "Saving";
$f_lang['restauration'] = "Restoration";
$f_lang['optimisation_txt'] = "<b>Upon recording and deleting, tables of your database pile unused, empty space up.</b> These are bad for the overal performance of your databse and thus of your website, this page allows you solve this problem by optimizing the tables.";
$f_lang['liste_tables'] = "List of the tables of your database";
$f_lang['lancer_optimisation'] = "Launching optimization";
$f_lang['tables'] = "TABLES";
$f_lang['pertes'] = "LOSSES";
$f_lang['octets'] = "bytes";
$f_lang['ok_optimise'] = "Thanks, the tables having losses have been optimized";
$f_lang['txt_sauvegarde'] = "<b>If you want to keep the posted messages for a long time, a regular and periodical backup is highly advised.</b> A harddisk failure could indeed destroy all your data.  A backup could also be very useful if you wish to transfer your messages on another server.";
$f_lang['lancer_sauvegarde'] = "Start the backup";
$f_lang['lancer_restauration'] = "Start restoring";
$f_lang['txt_restauration'] = "<b>If you've performed a backup, you can completely restore your guestbook's database</b> Just select the corresponding file on your hard disk.<br><br><b><u>ATTENTION</u></b>, if this file is very big (several megabytes), the restoration process could cause problem upon your website host server settings (set_time_limit() and  maximum size allowed on upload settings).";
$f_lang['select_file'] = "Sélect a backup file on your hard disk or server (.ZIP or .SQL)";
$f_lang['confirm_restauration'] = "Do you confirm that you wish to lauch the restoration and thus erase all actual data?";
$f_lang['select_file_restau'] = "Please select a file on your hard disk";
$f_lang['erreur_ext_restau'] = "The selected file extension is not .ZIP ou .SQL, restoration could not be performed.";
$f_lang['conseil_zip'] = "(Uncompress the ZIP file on your hard disk to get the SQL file)";
$f_lang['erreur_ext_zip'] = "The PHP_ZIP extension is not available on your server, the restoration via a ZIP file is thus not possible. Please select a .SQL file on your hard disk".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Error reading your ZIP archive, cannot perform restoration.  You may try with a .SQL file ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "The selected SQL file doesn't seem to be an @lex Guestbook script file.  Cannot perform the restoration.";
$f_lang['restauration_terminee'] = "Thanks ! Restoration could be succesfully performed !";

							/* V5 */
$f_lang['name_table_ban'] = "Name of the banished IP, nicknames and E-mails table";
$f_lang['ok_validation'] = "Thanks, the validation has been performed";
$f_lang['selectionner_tous_messages'] = "Check/uncheck all";
$f_lang['admin_send_mail'] = "Do you wish the admins to receive an E-mail when a new message is posted ?";

//ajout bannissement
$f_lang['bannissement'] = "Banishment";
$f_lang['admin_gestion_bannissement'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;manage the banishment ?";
$f_lang['interdit_de_message'] = "Your message hasn't been saved. To see the reason of this refusal (forbidden word, required field not filled in...) Javascript must be activated in your Internet navigator. You may want to try to modify your message.";
$f_lang['valider_mess'] = "Apply the above validation choices";
$f_lang['erreur_ip'] = "IP address is not valid";
$f_lang['erreur_ip1'] = "Please enter part 1 of the ip with a number between 0 and 255 or a *";
$f_lang['erreur_ip2'] = "Please enter part 2 of the ip with a number between 0 and 255 or a *";
$f_lang['erreur_ip3'] = "Please enter part 3 of the ip with a number between 0 and 255 or a *";
$f_lang['erreur_ip4'] = "Please enter part 4 of the ip with a number between 0 and 255 or a *";
$f_lang['explication_bannir_mot'] = "You have two options to ban words in the messages. Either you censor them (these words will be replaced by the text or symbols you choose), or the message is refused.";
$f_lang['bannir_mot'] = "Would you like the messages containing words you have censored (see \"Censoring words\" in the menu) to be refused ?<br/>If you check \"no\", these words will just be replaced by the text or symbols you have chosen.";

/* bannir des pseudos */
$f_lang['bannir_pseudo'] = "Banishing (nick)names";
$f_lang['admin_text_pseudo'] = "If you wish a user <b>not to be able to post a message on your guestbook</b>, you can enter his/her name/nickname here. You can also use the wildcard *, which will take any letter or number into account.";
$f_lang['ajouter_pseudo'] = "Add a new banished (nick)name";
$f_lang['gestion_pseudo'] = "Nicknames management";
$f_lang['sup_pseudo'] = "Delete the selected nicknames";
$f_lang['erreur_pseudo'] = "Please enter the nickname to add";
$f_lang['ok_aj_pseudo'] = "Thanks, the nickname is  banished from now on";
$f_lang['verif_sup_pseudo'] = "Do you really wish to delete all the selected nicknames ?";

/* bannir des emails */
$f_lang['bannir_emails'] = "Banishing E-mail addresses";
$f_lang['admin_text_email'] = "If you wish a user <b>not to be able to post a message on your guestbook</b>, you can enter his/her E-mail address here. You can also use the wildcard *, i.e. to banish a whole domain name, like this : *@spamdomain.com.";
$f_lang['ajouter_email'] = "Add a new banished E-mail address";
$f_lang['gestion_email'] = "E-mail addresses management";
$f_lang['sup_email'] = "Delete the selected E-mail addresses";
$f_lang['erreur_email'] = "Please enter the E-mail address to add";
$f_lang['ok_aj_email'] = "Thanks, the E-mail address is  banished from now on";
$f_lang['verif_sup_email'] = "Do you really wish to delete all the selected E-mail addresses ?";

$f_lang['no_pseudo'] = "ATTENTION\\nYour (nick)name has been banished, you are not allowed to post a message on this guestbook.";
$f_lang['no_email'] = "ATTENTION\\nYour E-mail address has been banished, you are not allowed to post a message on this guestbook.";
$f_lang['no_ville'] = "ATTENTION\\nThe city you entered isn't correct, you are not allowed to post a message on this guestbook.";
$f_lang['no_mot'] = "ATTENTION\\nYou have entered a censored word, you are not allowed to post this message on the guestbook.\\nPlease edit your message !";

// interdiction des URL
$f_lang['url_interdite'] = "ATTENTION\\nURL are forbidden in messages";
$f_lang['url_interdites'] = "Would you like the messages containing URL to be refused ?";
$f_lang['url_cliquables'] = "Would you like the URL in the messages to be clickable (active) ?";

//remplacement du fichier /config/config.php par une table dans la BDD
$f_lang['name_table_config'] = "Name of the config parameters table";

// decalage horaire
$f_lang['admin_decalage_horaire'] = "You can adjust the time difference between the server and your country's time. Leave 0 if you do not need to adjust the time.";
$f_lang['heures'] = "hours";
$f_lang['secondes'] = "seconds";
$f_lang['admin_erreur_decalage_horaire'] = "You must enter a time difference value between -12 and +12";

// interdit la suppression du dernier admin
$f_lang['admin_suppr_dernier_admin'] = "You may not delete the last administrator";

// désactivation des smileys en un clic
$f_lang['admin_autoriser_smileys'] = "Would you like to allow the smileys ?";

// pour empêcher que le temps de session de la partie admin ne soit trop court
$f_lang['admin_temps_session_min'] = "ATTENTION\\nThe session validity value you entered is too short !\\nYou must enter a value above 300 seconds";

// inclure le livre dans une page PHP
$f_lang['admin_inclure_livre'] = "Do you wish to include the guestbook into a PHP file ?";
$f_lang['admin_inclure_livre_code'] = "Here is the PHP code that you will need to insert into your PHP file between the &lt;?php and ?&gt; tags.\n\nYou'll also need to change the \$chem_absolu array in the /index.php file of the guestbook and to add the stylesheet in the calling page (check the FAQ for further explanation)";
$f_lang['admin_fichier_inclusion'] = "Enter here the absolute path to the file in which you want to include the guestbook (this way : /folder1/folder2/file_where_the_include_takes_place.php). You must click on the \"Save\" button in order to see the entered path taken into account in the code";
$f_lang['admin_fichier_inclusion_erreur'] = "ATTENTION\\nYou haven't entered a valid path to the include file\\nThe path must be entered i.e. as /folder1/folder2/file_where_the_include_takes_place.php";

// gestion des champs
$f_lang['admin_champ_propose'] = "Do not propose";
$f_lang['admin_champ_obligatoire'] = "Mandatory";
$f_lang['admin_champ_prive'] = "Private";
$f_lang['admin_champ_pseudo'] = "Visitors can enter their (nick)name";
$f_lang['admin_champ_ville'] = "Visitors can enter their city";
$f_lang['admin_donner_focus'] = "Would you like the 'Nickname' field to be selected (to have the focus) when the page is loaded ?";
$f_lang['champ_obligatoire_vide'] = "At least one required field (identified by a *) is empty. Please fill it in.";
$f_lang['erreur_add_nom'] = "Please enter your name";
$f_lang['erreur_add_email'] = "Please enter your E-mail address";
$f_lang['erreur_add_site'] = "Please enter your website address";
$f_lang['erreur_add_ville'] = "Please enter your city";
$f_lang['erreur_add_pays'] = "Please select your country";
$f_lang['erreur_add_note'] = "Please select a score";
$f_lang['erreur_add_message'] = "Please enter your message";
$f_lang['erreur_url'] = "The address of your website doesn't seem to be valid";

// code de sécurité : vérification de la présence de la librairie GD2
$f_lang['admin_gd_non_activee'] = "<span class=\"texte_alerte\">You cannot use the security code option !<br/>\n Your server does not include the GD2 library and/or the options necessary for the security code to work</span>";

// lien vers l'admin et vers la page d'accueil
$f_lang['admin_lien_admin'] = "Would you like to post a link to the administration part at the bottom of the guestbook ?";
$f_lang['admin_lien_accueil'] = "Would you like to post a link back to your website homepage or to another one&nbsp;?";
$f_lang['admin_chemin_lien_accueil'] = "If you leave this field empty, the link will lead to this site homepage. You could alternatively enter the absolute path to the page of your choice (i.e. /folder1/page1.htm).";
$f_lang['admin_chemin_lien_accueil_erreur'] = "The path you entered isn't valid. Please use an absolute path (i.e. /mypage.php).";
$f_lang['texte_lien_accueil'] = "Back to the homepage";
$f_lang['texte_lien_admin'] = "Guestbook administration";

$f_lang['admin_retour_livre'] = "See the guestbook";

// symboles champs privés/obligatoires sur le formulaire
// /!\ Attention, maximum 90 caractères
$f_lang['information_champ_prive'] = "This field content will be viewable by the guestbook administrator only.";
$f_lang['information_champ_obligatoire'] = "This field is required to post a message.";

/* Bas de page partie admin */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

$f_lang['host_base'] = "Server (usually : localhost)";

$f_lang['name_table_txt_lang'] = "Name of the table containing the customized texts (i.e. guestbook title)";

$f_lang['erreur_ecriture'] = "<b>ERROR</b>, unable to write in the \"config/\" folder.<br><br>Please modify the Unix rights of the \"config\" folder (chmod 777), then try again the installation : <a href=\"./setup.php\"><b>back</b></a>.";

$f_lang['options_livre'] = "Guestbook options";

$f_lang['text1'] = "<b>Censored words will be automatically replaced</b> in the messages posted by the visitors. You can i.e. replace all \"bad words\" by a text like \"**censored word**\".<br/>If you have chosen to refuse messages containing \"censored words\", <u>you still need to enter a replacement text</u>. This measure allows you to switch mode (word replacement or message refusal).";
?>
