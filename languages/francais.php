<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2012    //
//         Hercelin Maxime (c) 2005 - 2012   //
//         http://www.alexguestbook.net/     //
//             all right reserved            //
///////////////////////////////////////////////

/* Encodage utilisé dans le script */
$SCRIPT_ENCODAGE = "iso-8859-1";
$CONTENT_LANGUAGE = "fr";

/* setup */
$f_lang['install_auto'] = "Installation automatique";
$f_lang['identi_base'] = "Identifiants Base de données";
$f_lang['type_base'] = "Type de base utilisée";
$f_lang['user_base'] = "Utilisateur";
$f_lang['pass_base'] = "Mot de passe";
$f_lang['nom_base'] = "Nom de la base de données";
$f_lang['nom_table'] = "Nom des tables";
$f_lang['name_table_sessions'] = "Nom de la table des sessions";
$f_lang['name_table_users'] = "Nom de la table des utilisateurs";
$f_lang['name_table_messages'] = "Nom de la table des messages";
$f_lang['name_table_censure'] = "Nom de la table des mots censurés";
$f_lang['name_table_smileys'] = "Nom de la table des smileys";
$f_lang['extension_script'] = "Extension du script";
$f_lang['choose_extension'] = "Choisissez une extension pour le script<br>(php conseillé, dans le cas contraire vous devrez renommer l'ensemble des fichiers du script avec l'extension choisie)";
$f_lang['identi_acces_admin'] = "Identifiants d'accès à la partie administration";
$f_lang['login_admin'] = "Login";
$f_lang['pass_admin'] = "Mot de passe";
$f_lang['verif_pass_admin'] = "Retapez votre mot de passe";
$f_lang['email_admin_setup'] = "Votre adresse électronique";
$f_lang['installer'] = "Installer";
$f_lang['erreur_host'] = "Veuillez indiquer le serveur de la base de données";
$f_lang['erreur_user'] = "Veuillez indiquer votre identifiant de connexion à la base de données";
$f_lang['erreur_nom_base'] = "Veuillez indiquer le nom de votre base de données";
$f_lang['erreur_log_admin'] = "Veuillez indiquer votre login pour la partie administration";
$f_lang['erreur_pass_admin'] = "Veuillez indiquer votre mot de passe pour la partie administration";
$f_lang['erreur_pass_differents'] = "ATTENTION, vos mots de passe sont différents.";
$f_lang['erreur_first_connexion'] = "<b>ERREUR, connexion impossible à la base de données.</b><br><br>Veuillez vérifier vos identifiants d'accès : <a href=\"javascript:history.go(-1);\"><b>retour</b></a>.";
$f_lang['erreur_install'] = "Echec de l'installation";
$f_lang['ok_install'] = "Installation réussie";
$f_lang['text_ok_install'] = "<b>Merci, l'installation s'est déroulée avec succès.</b><br><br>Pour des raisons de sécurité vous devez supprimer le fichier d'installation que vous venez d'exécuter (\"setup.php\"). Tant que vous ne l'aurez pas supprimé vous ne pourrez pas avoir accès au livre d'or.<br><br>Vous pouvez désormais administrer votre livre d'or en cliquant <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>ici</b></a> ou bien<br> consulter l'affichage de ce dernier <a href=\"".$chem_absolu."\" target=\"_blank\"><b>ici</b></a>.";

/* administration */
$f_lang['page protect'] = "Page protégée";
$f_lang['login'] = "Login";
$f_lang['pass'] = "Pass";
$f_lang['value identif'] = "Identification";
$f_lang['texte_lien_retour_livre'] = "Revenir sur le livre d'or";

 /* menu */
$f_lang['options'] = "Options";
$f_lang['script'] = "Options générales";
$f_lang['graphismes'] = "Skins";
$f_lang['messages'] = "Messages";
$f_lang['gestion'] = "Gestion";
$f_lang['censure_mots'] = "Censurer des mots";
$f_lang['smileys'] = "Smileys";
$f_lang['utilisateurs'] = "Administrateurs";
$f_lang['ajouter'] = "Ajouter";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "A propos de...";
$f_lang['donner_avis'] = "Donnez votre avis";
$f_lang['deconnexion'] = "déconnexion";

 /* options */

$f_lang['options_generales'] = "Options générales";
$f_lang['langue'] = "Langue";
$f_lang['avert_mail'] = "<br>(<b>information</b> : la fonction mail() de votre hébergeur est désactivée, en conséquence même si vous cochez oui vous ne pourrez être averti par email)";
$f_lang['oui'] = "oui";
$f_lang['non'] = "non";
$f_lang['options_modules'] = "Options des modules du livre d'or";
$f_lang['admin_champ_email'] = "Les visiteurs peuvent inscrire leur email";
$f_lang['admin_champ_site'] = "Les visiteurs peuvent inscrire leur site web";
$f_lang['admin_champ_pays'] = "Les visiteurs peuvent sélectionner leur pays";
$f_lang['admin_champ_note'] = "Les visiteurs peuvent noter votre site";
$f_lang['admin_ok_aff_moteur'] = "Afficher le moteur de recherche";
$f_lang['options_tech'] = "Options techniques";
$f_lang['url_recharger'] = "Page à recharger pour le livre d'or";
$f_lang['url_variables'] = "Variables passées en paramètre (mettez # pour représenter le $ d'une variable)";
$f_lang['temps_session'] = "Temps de validité en secondes de la session pour la partie admin";
$f_lang['skin_to_use'] = "Skin utilisé";
$f_lang['enregistrer'] = "Enregistrer";
$f_lang['nb_pages'] = "Nombre de messages sur une page du<br>livre d'or";
$f_lang['merci_options'] = "Merci, les informations ont été mises à jour";
$f_lang['erreur_options'] = "ERREUR\\nLes informations n'ont pas pu être enregistrées, impossible d'écrire dans le fichier \\\"config.".$alex_livre_ext."\\\", veuillez éditer ce fichier à la main pour modifier les options du livre d'or.";
$f_lang['temps_ip_post'] = "Nombre de minutes avant qu'un visiteur puisse re-poster un message dans le livre";
$f_lang['minutes'] = "minutes";
$f_lang['cut_mots'] = "Nombre de caractères avant qu'un mot trop long soit coupé en plusieurs parties";
$f_lang['format_date'] = "Format de la date";

/* skins */
$f_lang['ok_ajouter'] = "Merci, le skin a été créé avec succès";
$f_lang['erreur_ajouter'] = "ERREUR\\nLe skin n'a pas pu être créé, veuillez le créer manuellement";
$f_lang['text1_2'] = "Les skins qui vont suivre sont enregistrés dans le répertoire &quot;templates/skins/&quot; de l'arborescence du livre d'or. Cette interface vous permet de les modifier facilement mais vous pouvez également éditer manuellement les fichiers html qui les composent.";
$f_lang['text2'] = "<b>Si vous souhaitez également modifier les templates de la partie administration</b> veuillez éditer manuellement les fichiers du répertoire &quot;templates/admin/&quot;.";
$f_lang['text_aj_skin'] = "Ajouter un skin";
$f_lang['ajouter'] = "Ajouter";
$f_lang['gestion_skins'] = "Gestion des skins";
$f_lang['vous_editez'] = "Vous éditez actuellement le skin";
$f_lang['style'] = "feuille de style";
$f_lang['ajouter_message'] = "partie ajouter un message";
$f_lang['nbre_messages_page'] = "partie nombre de messages / pages";
$f_lang['pages_dispos'] = "partie liste des pages disponibles / page suivante - précédente";
$f_lang['texte_corps_messages'] = "corps des messages";
$f_lang['espacement'] = "espacement entre 2 messages";
$f_lang['text_assembly'] = "fichier assemblant les différentes parties précédentes";
$f_lang['ok_edit_skin'] = "Merci, le skin a été mis à jour";
$f_lang['erreur_edit_skin'] = "ERREUR\\nUn ou des fichier(s) du skin n'a pas pu être mis à jour. Veuillez éditer manuellement ces fichiers.";
$f_lang['ajouter'] = "Ajouter";
$f_lang['supprimer'] = "Supprimer";
$f_lang['text_sup_skin'] = "Supprimer un skin";
$f_lang['ok_supprimer'] = "Merci, le skin a été entièrement supprimé avec succès.";
$f_lang['erreur_supprimer'] = "ERREUR\\nUn ou des fichiers(s) du skin n'ont pas pu être supprimés, vous devez le(s) supprimer à la main.";

/* page des mots censurés */
$f_lang['aj_mot'] = "Ajouter un nouveau mot "; 
$f_lang['mot_interdit'] = "Mot interdit :";
$f_lang['remplacer_par'] = "Le remplacer par :";
$f_lang['gestion_censure'] = "Gestion des mots interdits";
$f_lang['mot'] = "mot";
$f_lang['remplace_by'] = "remplacé par";
$f_lang['liste_jour'] = "Mettre la liste à jour";
$f_lang['sup_mots'] = "Supprimer les mots sélectionnés";
$f_lang['erreur_aj_censure1'] = "Veuillez indiquer un mot à censurer";
$f_lang['erreur_aj_censure2'] = "Veuillez indiquer un mot qui remplacera le mot censuré";
$f_lang['ok_aj_mot'] = "Merci, le mot à censurer à été ajouté.";
$f_lang['verif_sup'] = "Voulez-vous supprimer définitivement les mots sélectionnés ?";
$f_lang['merci_modif'] = "Merci, les modifications ont été effectuées";

/* bannissement */
$f_lang['bannir_ip'] = "Bannir des ip";
$f_lang['text_ip1'] = "Chaque internaute naviguant sur le web possède une adresse propre à 4 chiffres (201.10.25.14 par exemple). Cette adresse est attribuée par le fournisseur d'accès et change, en théorie, à chaque re-connexion.";
$f_lang['text_ip2'] = "Si vous souhaitez qu'un utilisateur <b>ne puisse pas poster de message sur votre livre d'or</b>, vous pouvez indiquer son adresse ip ici. Vous pouvez également interdire une plage d'adresse ip en utilisant le caractère d'échappement * (par exemple 201.15.55.*, ou encore 158.*.*.*).";
$f_lang['ajouter_ip'] = "Ajouter une nouvelle ip à bannir";
$f_lang['gestion_ip'] = "Gestion des ip";
$f_lang['sup_ip'] = "Supprimer les ip sélectionnées";
$f_lang['ok_aj_ip'] = "Merci, l'ip est désormais bannie";
$f_lang['verif_sup_ip'] = "Voulez-vous vraiment supprimer toutes les ip sélectionnées ?";

/* smileys */
$f_lang['gestion_smileys'] = "Gestion des smileys";
$f_lang['text_smileys'] = "<b>Les smileys permettent de traduire l'humeur d'une personne</b> au moment ou elle écrit un message. A partir de cette interface vous allez pouvoir en ajouter ou en retirer très facilement pour offrir le plus grand choix possible à vos visiteurs :o)<br><br>Les smileys disponibles sur cette page sont enregistrés dans le répertoire \"images/smileys\".";
$f_lang['ajouter_smiley'] = "Ajouter un smiley";
$f_lang['image_smiley'] = "Image";
$f_lang['car_replace'] = "Caractère de remplacement";
$f_lang['gestion_smileys'] = "Gestion des smileys";
$f_lang['sup_smileys'] = "Supprimer les smileys sélectionnés";
$f_lang['erreur_image'] = "Veuillez choisir un smiley";
$f_lang['erreur_car'] = "Veuillez choisir un caractère de remplacement pour le smiley sélectionné";
$f_lang['ok_aj_smiley'] = "Merci, le smiley a été ajouté avec succès";
$f_lang['no_smiley'] = "Le smiley doit être une image GIF OU JPEG";
$f_lang['copy_impossible'] = "ERREUR\\nCopie impossible du smiley dans le répertoire \\\"images/smileys\\\".";
$f_lang['car_replace_exist'] = "ERREUR\\nLe caractère de remplacement existe déjà dans la base.";
$f_lang['modif_smileys'] = "Modifier tous les smileys";
$f_lang['verif_sup_smileys'] = "Voulez vous vraiment supprimer tous les smileys sélectionnés ?";
$f_lang['merci_modif_smileys'] = "Merci, les smileys ont été modifiés.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Ajouter un administrateur du livre d'or";
	$f_lang['add_admin_2'] = "Ajouter un admin";
	$f_lang['ajouter_admin'] = "Ajouter";
	$f_lang['name_ajouter_admin'] = "ajouter";
}
else{
	$f_lang['add_admin_texte'] = "Modifier un administrateur du livre d'or";
	$f_lang['add_admin_2'] = "Modifier un admin";
	$f_lang['ajouter_admin'] = "Enregistrer";
	$f_lang['name_ajouter_admin'] = "modifier";
}

$f_lang['identif_connexion'] = "Identifiant de connexion";
$f_lang['passe_admin'] = "Mot de passe";
$f_lang['email_admin'] = "Email (important si l'admin doit être prévenu lorsqu'un message est posté)";
$f_lang['admin_receive_email'] = "L'administrateur doit-il être prévenu lorsqu'un message est posté ?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;peut-il modifier les options du script ?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;modifier les skins ?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gérer les messages ?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gérer les mots censurés ?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gérer les smileys ?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gérer les comptes des autres administrateurs ?";
$f_lang['erreur_name'] = "Veuillez indiquer un identifiant de connexion";
$f_lang['erreur_passe'] = "Veuillez indiquer un mot de passe";
$f_lang['erreur_email'] = "Veuillez indiquer un email";
$f_lang['ok_aj_admin'] = "Merci, le compte a été créé avec succès";
$f_lang['ok_modif_admin'] = "Merci, le compte a été modifié";
$f_lang['erreur_aj_admin'] = "ERREUR\\nCe login existe déjà";
$f_lang['revenir'] = "Revenir à la page précédente";

/* gestion des admins */
$f_lang['gest_admin'] = "Gestion des administrateurs";
$f_lang['sup_admin'] = "supprimer";
$f_lang['login_admin'] = "login";
$f_lang['email_admin'] = "email";
$f_lang['modif_admin'] = "modifier";
$f_lang['value_sup_admin'] = "Supprimer tous les admins sélectionnés";
$f_lang['verif_sup_admin'] = "Voulez vous vraiment supprimer tous les administrateurs sélectionnés ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "PAGE INACCESSIBLE";
$f_lang['erreur_auth'] = "Echec d'authentification";
$f_lang['erreur_droits'] = "Vous n'avez pas les droits requis pour afficher cette page.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Note moyenne attribuée par les visiteurs à ce site :";
$f_lang['title_guestbook'] = "Livre d'Or";
$f_lang['note_super'] = " : Fantastique !";
$f_lang['note_moyen'] = " : Moyen";
$f_lang['note_rate'] = " : Complètement raté";
$f_lang['nom_pseudo_visiteur'] = "Nom ou pseudo :";
$f_lang['email_visiteur'] = "E-mail :";
$f_lang['site_web_visiteur'] = "URL de votre site web :";
$f_lang['ville_pays_visiteur'] = "Ville / pays :";
$f_lang['note_visiteur'] = "Votre note pour ce site :";
$f_lang['message_visiteur'] = "Message :";
$f_lang['ajouter_message_visiteur'] = "Ajouter ce message";
$f_lang['messages'] = "Messages";
$f_lang['messages_a'] = "à";
$f_lang['page'] = "Page";
$f_lang['nbre_messages'] = "Nombre de messages";
$f_lang['message_le'] = "le";
$f_lang['message_note'] = "Note";
$f_lang['send_mail_to'] = "Envoyer un courriel à";
$f_lang['go_home'] = "Visiter le site";
$f_lang['precedente'] = "&lt;&lt; précédente";
$f_lang['suivante'] = "suivante &gt;&gt;";
$f_lang['no_message'] = "Aucun message à afficher.";
$f_lang['no_ip'] = "ATTENTION\\nVotre ip a été bannie, vous n'êtes pas autorisé à poster un message sur ce livre d'or.";
$f_lang['ok_post'] = "Merci !  Votre message a été enregistré avec succès.";
$f_lang['time_erreur'] = "ATTENTION\\nVotre message n'a pu être enregistré, vous en avez déjà posté un trop récemment.";
$f_lang['text_select_search'] = "Afficher uniquement les messages comportant le(s) mot(s) suivant(s)";
$f_lang['text_ok_search'] = "Ok";


/* gestion des messages */
$f_lang['gestion_mess'] = "Gestion des messages";
$f_lang['selectionner_pages'] = "Sélectionner";
$f_lang['messages_gest'] = "message";
$f_lang['page_gest'] = "page";
$f_lang['aller_en_page'] = "Aller en page";
$f_lang['supprimer_gest'] = "supprimer";
$f_lang['auteur_gest'] = "auteur";
$f_lang['modifier_gest'] = "modifier";
$f_lang['supprimer_mess_selected'] = "Supprimer les messages sélectionnés";
$f_lang['verif_sup_mess'] = "Voulez vous vraiment supprimer tous les messages sélectionnés ?";

/* modifier un message */
$f_lang['modif_mess'] = "Modifier un message";
$f_lang['message_modif'] = "Message";
$f_lang['nom_modif'] = "Nom";
$f_lang['email_modif'] = "Email";
$f_lang['site_web_modif'] = "Site web";
$f_lang['note_modif'] = "Note attribuée à votre site";
$f_lang['ville_pays_modif'] = "Ville / Pays";
$f_lang['date_modif'] = "Date d'ajout";
$f_lang['ip_modif'] = "Adresse ip";
$f_lang['ok_modif_mess'] = "Merci, les informations ont été modifiées";

/* titre des pages */
$f_lang['title identification'] = "identification";
$f_lang['title administration'] = "administration";
$f_lang['title frame gauche'] = "frame gauche";
$f_lang['title options'] = "options";
$f_lang['title skins'] = "skins";
$f_lang['title censure'] = "mots à censurer";
$f_lang['title censure'] = "gestion des ips à bannir";
$f_lang['title smileys'] = "gestion smileys";
$f_lang['title add admin'] = "ajouter un administrateur du livre d'or";
$f_lang['title gest admin'] = "gestion des administrateurs du livre d'or";
$f_lang['title erreur'] = "erreur";
$f_lang['title gestion mess'] = "gestion des messages";
$f_lang['title modif mess'] = "modifier un message";
$f_lang['title setup'] = "installation";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Impossible de se connecter à la base de données";
$f_lang['erreur_connexion'] = "Vos identifiants sont incorrects";
$f_lang['manque login'] = "Veuillez taper votre login";
$f_lang['manque pass'] = "Veuillez taper votre mot de passe";
$f_lang['end session'] = "Votre session est terminée";

/* add version 3.11 */
$f_lang['addSignature'] = "Ecrire un message";
$f_lang['seeMessages'] = "Voir les messages";
$f_lang['addMessageBlocAdd'] = "Ajouter un message dans le livre d'or";

/* add version 3.2 */
$f_lang['version'] = "Version";
$f_lang['new_version_dispo'] = "Une nouvelle version du livre d'or est disponible";
$f_lang['version_courrante'] = "Version actuelle du script";
$f_lang['info_version'] = "Information sur votre version";
$f_lang['version_txt_ok'] = "Vous disposez de la version ".$alex_livre_version.",<br/>cette version est la dernière version, aucune mise à jour n'est nécessaire.";
$f_lang['version_txt_erreur'] = "Vous disposez de la version ".$alex_livre_version.".<br/><b>Une erreur s'est produite lors de la recherche de nouvelle version.</b> Nous vous invitons à consulter le site http://www.alexguestbook.net";
$f_lang['version_txt_update'] = "Vous disposez de la version ".$alex_livre_version.", <b>une nouvelle version est disponible</b>";
$f_lang['version_down'] = "Télécharger la nouvelle version";
$f_lang['help_update'] = "Aide pour la mise à jour";
$f_lang['spam'] = "Le USER AGENT de votre navigateur n'a pas pu être déterminé, visiblement un robot a tenté de poster automatiquement un message. Si ce n'est pas le cas, veuillez changer de navigateur puis renouvellez l'opération.";
$f_lang['avis_spammeurs'] = "Avis aux spammeurs";
$f_lang['txt_spammeurs'] = "<b>Ce livre d'or est protégé contre le spam</b>.<br>Les adresses emails et les urls sont encodées dans le code source des pages générées, par conséquent il est inutile de l'inonder de messages publicitaires : ils n'auront aucune utilité puisque votre url ne sera pas prise en compte par les moteurs de recherche.  Votre site ne sera pas mieux référencé, le message sera effacé, et nous serons fâchés...";
$f_lang['fermer'] = "Fermer cette fenêtre";
$f_lang['valider_messages'] = "Souhaitez vous valider les messages avant leur intégration dans le livre d'or ?";
$f_lang['valide'] = "Validé ?";
$f_lang['mess_valide'] = "Ce message est validé";
$f_lang['mess_invalide'] = "Ce message est en attente de validation";
$f_lang['info_mess_valide'] = "Message validé ?";
$f_lang['ok_post_valid'] = "Merci ! Votre message a été enregistré avec succès, il sera visible sur le livre d'or dès que le webmestre du site l'aura validé.";
$f_lang['see_skin'] = "Visualiser le livre d'or en utilisant ce skin";
$f_lang['maxi_car'] = "Nombre maxi de caractères dans un message (0 = illimité)";
$f_lang['il_reste'] = "";
$f_lang['caracteres'] = "caractère(s) encore disponible(s)";
$f_lang['sup_copyright'] = "Supprimer le copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Nom de la table pour le code de sécurité";
$f_lang['t_chem_dossier_fonts'] = "Chemin d'accès complet vers le dossier des polices de caractères";
$f_lang['t_color_txt_code'] = "Couleur du texte du code, en hexa";
$f_lang['t_color_background_code'] = "Couleur du fond de l'image, en hexa";
$f_lang['a_quoi_ca_sert'] = "à quoi ca sert ?";
$f_lang['why_code'] = "Pourquoi un \"code de sécurité\" ?";
$f_lang['txt_why_code'] = "Cette saisie nous permet de vérifier que le message va être posté par une personne réelle et non par un programme automatisé.<br><br><b>Les messages publicitaires sont proscrits sur ce livre d'or !</b>";
$f_lang['erreur_code_securite'] = "Veuillez saisir le code de sécurité";
$f_lang['erreur_saisie_code_securite'] = "Le code de sécurité saisi était incorrect, vous pouvez renouveler l'opération";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Réponse automatique";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gérer les réponses automatiques ?";
$f_lang['text_reponse_auto'] = "<b>Vous pouvez définir sur cette page le texte de remerciement automatique</b> qui sera envoyé aux personnes ayant posté un message sur votre livre d'or. Ce message sera envoyé si vous activez la fonctionnalité dans les options du script.<br><br>Chaque langue peut disposer d'un message personnalisé et la chaine de caractères [PSEUDO] est remplacée par le pseudo de l'utilisateur ayant posté le message.";
$f_lang['name_table_rep_auto'] = "Nom de la table pour les messages de réponse automatique";
$f_lang['gestion_reponses'] = "Gestion des messages";
$f_lang['msg_remerciement'] = "Message de remerciement";
$f_lang['txt_remerciement'] = "Bonjour [PSEUDO],\n\nMerci d'avoir laissé un message sur notre livre d'or !";
$f_lang['ok_save_msg_rem'] = "Merci, le texte de remerciement a été enregistré.";
$f_lang['remerciement'] = "Remerciements";
$f_lang['titre_guestbook'] = "Titre du livre d'or";
$f_lang['text_titre_guestbook'] = "<b>Vous pouvez modifier le titre du livre d'or</b> et le définir pour chacune des langues disponibles.";
$f_lang['titre'] = "Titre";
$f_lang['parametrage'] = "Paramétrage";
$f_lang['ok_save_titre'] = "Merci, le titre a été enregistré.";
$f_lang['ville_visiteur'] = "Ville :";
$f_lang['pays_visiteur'] = "Pays :";
$f_lang['flag'] = "Drapeau";
$f_lang['ville_modif'] = "Ville";
$f_lang['pays_modif'] = "Pays";
$f_lang['action'] = "Action";
$f_lang['repondre'] = "Répondre";
$f_lang['votre_reponse'] = "Votre réponse";
$f_lang['ok_reponse_mess'] = "Merci, votre réponse a été enregistrée";
$f_lang['defaut_titre_rep'] = "Réponse du Webmestre";
$f_lang['annuler'] = "Annuler";
$f_lang['num_appari'] = "Numéro d'apparition";
$f_lang['plus_smileys'] = "Afficher plus de smilies";
$f_lang['liste_all_smilies'] = "Liste de tous les smilies";
$f_lang['boite_java'] = "Boîte Javascript";
$f_lang['text_boite_java'] = "<b>Cette fonctionnalité vous permet d'afficher les derniers messages publiés dans votre livre d'or</b> sur la page de votre choix.";
$f_lang['parametrage_modele'] = "Paramétrage du modèle";
$f_lang['ok_save_boite'] = "Merci, votre paramétrage a été enregistré";
$f_lang['format_date_boite'] = "Format de la date (identique à la fonction <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> de PHP)";
$f_lang['nbre_maxi_pseudo_boite'] = "Nombre de caractères maxi affichés pour le pseudo";
$f_lang['nbre_maxi_message_boite'] = "Nombre de caractères maxi affichés pour le message";
$f_lang['modele_affichage_donnees'] = "Modèle d'affichage des données";
$f_lang['url_dossier_livre_boite'] = "URL complète vers le dossier de votre livre d'or";
$f_lang['url_livre_boite'] = "URL complète vers la page d'affichage de votre livre d'or";
$f_lang['generation_code'] = "Génération du code Javascript";
$f_lang['nom_msg_afficher'] = "Nombre de messages à afficher";
$f_lang['generer_code'] = "Générer le code d'appel Javascript";
$f_lang['code_a_copier'] = "Code HTML à copier/coller sur la ou les pages de votre choix";
$f_lang['erreur_boite_java'] = "Veuillez indiquer un nombre de messages affichés valide";
$f_lang['erreur_par_boite'] = "Erreur de paramétrage, impossible d'isoler la chaîne [BOUCLE] ... [/BOUCLE] dans votre modèle.";
$f_lang['saut_ligne_msg_boite'] = "Afficher les sauts de ligne dans les messages";
$f_lang['message_a'] = "à";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gérer la base de données ?";
$f_lang['bdd'] = "Base de données";
$f_lang['optimisation'] = "Optimisation";
$f_lang['sauvegarde'] = "Sauvegarde";
$f_lang['restauration'] = "Restauration";
$f_lang['optimisation_txt'] = "<b>Au fil des enregistrements et suppressions, les tables de votre base de données accumulent des espaces inutilisés et vides.</b> Ces derniers nuisent à la performance de votre BDD, cette page vous permet de remédier à ce problème en optimisant les tables.";
$f_lang['liste_tables'] = "Liste des tables de votre base de données";
$f_lang['lancer_optimisation'] = "Lancement de l'optimisation";
$f_lang['tables'] = "TABLES";
$f_lang['pertes'] = "PERTES";
$f_lang['octets'] = "octets";
$f_lang['ok_optimise'] = "Merci, les tables qui avaient des pertes ont été optimisées";
$f_lang['txt_sauvegarde'] = "<b>Si vous souhaitez conserver longtemps les messages écrits dans votre livre d'or, une sauvegarde périodique est grandement conseillée.</b> Un plantage disque pourrait en effet détruire toutes vos données. Une sauvegarde pourra également vous être utile si vous souhaitez transférer vos messages sur un autre serveur.";
$f_lang['lancer_sauvegarde'] = "Lancer la sauvegarde";
$f_lang['lancer_restauration'] = "Lancer la restauration";
$f_lang['txt_restauration'] = "<b>Si vous avez effectué une sauvegarde, vous pouvez effecuer une restauration complète de la base de données de votre livre d'or.</b> Sélectionnez simplement le fichier correspondant sur votre disque dur.<br><br><b><u>ATTENTION</u></b>, si votre fichier est très volumineux (plusieurs mégas), la restauration pourrait poser problème selon la configuration du serveur de votre hébergeur (activation ou non de la commande set_time_limit() et taille maxi autorisée en upload).";
$f_lang['select_file'] = "Sélectionnez un fichier de sauvegarde sur votre disque dur (.ZIP ou .SQL)";
$f_lang['confirm_restauration'] = "Confirmez-vous le lancement d'une restauration et l'écrasement définitif de toutes les données actuelles ?";
$f_lang['select_file_restau'] = "Veuillez sélectionner un fichier sur votre disque dur";
$f_lang['erreur_ext_restau'] = "L'extension du fichier sélectionné n'est pas .ZIP ou .SQL, la restauration n'a pas pu être effectuée";
$f_lang['conseil_zip'] = "(décompressez l'archive ZIP sur votre disque dur pour récupérer le fichier SQL)";
$f_lang['erreur_ext_zip'] = "L'extension PHP_ZIP n'est pas disponible sur votre serveur, la restauration via un fichier ZIP n'est pas possible. Veuillez sélectionner un fichier .SQL sur votre disque ".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Une erreur est survenue pendant la lecture de votre archive ZIP, impossible d'effectuer la restauration. Vous pouvez essayer avec un fichier .SQL ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Le fichier SQL à traiter ne correspond pas à un fichier de sauvegarde du script @lex Guestbook. Impossible d'effectuer la restauration.";
$f_lang['restauration_terminee'] = "Merci, la restauration s'est terminée avec succès.";

							/* V5 */
$f_lang['name_table_ban'] = "Nom de la table des ip, pseudos et emails bannis";
$f_lang['ok_validation'] = "Merci, la validation a été effectuée";
$f_lang['selectionner_tous_messages'] = "Tout cocher / Tout décocher";
$f_lang['admin_send_mail'] = "Souhaitez vous que les admins recoivent un courriel lorsqu'un nouveau message est posté ?";

//ajout bannissement
$f_lang['bannissement'] = "Bannissement";
$f_lang['admin_gestion_bannissement'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gérer le bannissement ?";
$f_lang['interdit_de_message'] = "Votre message n'a pas été enregistré. Pour que la raison de ce refus (mot interdit, champ obligatoire non rempli...) s'affiche, Javascript doit être activé dans votre navigateur internet.";
$f_lang['valider_mess'] = "Appliquer les choix de validation ci dessus";
$f_lang['erreur_ip'] = "Adresse IP invalide";
$f_lang['erreur_ip1'] = "Veuillez renseigner la partie 1 de l'ip avec un nombre de 0 à 255 ou une *";
$f_lang['erreur_ip2'] = "Veuillez renseigner la partie 2 de l'ip avec un nombre de 0 à 255 ou une *";
$f_lang['erreur_ip3'] = "Veuillez renseigner la partie 3 de l'ip avec un nombre de 0 à 255 ou une *";
$f_lang['erreur_ip4'] = "Veuillez renseigner la partie 4 de l'ip avec un nombre de 0 à 255 ou une *";
$f_lang['explication_bannir_mot'] = "Vous avez deux possibilités pour interdire des mots dans les messages. Soit vous les censurez (remplacement du mot par celui que vous avez indiqué), soit le message est refusé.";
$f_lang['bannir_mot'] = "Souhaitez vous refuser les messages contenant des mots que vous avez censurés (voir \"Censurer des mots\" dans le menu) ?<br/>Si vous choisissez \"non\", les mots seront remplacés par celui que vous aurez choisi.";

/* bannir des pseudos */
$f_lang['bannir_pseudo'] = "Bannir des pseudos";
$f_lang['admin_text_pseudo'] = "Si vous souhaitez qu'un utilisateur <b>ne puisse pas poster de message sur votre livre d'or</b>, vous pouvez indiquer son pseudo ici. Vous pouvez également interdire un pseudo de façon générique avec des * qui signifient n'importe quel caractère.";
$f_lang['ajouter_pseudo'] = "Ajouter un nouveau pseudo à bannir";
$f_lang['gestion_pseudo'] = "Gestion des pseudos";
$f_lang['sup_pseudo'] = "Supprimer les pseudos sélectionnés";
$f_lang['erreur_pseudo'] = "Veuillez renseigner le pseudo à ajouter";
$f_lang['ok_aj_pseudo'] = "Merci, le pseudo est désormais banni";
$f_lang['verif_sup_pseudo'] = "Voulez-vous vraiment supprimer toutes les pseudos sélectionnés ?";

/* bannir des emails */
$f_lang['bannir_emails'] = "Bannir des adresses courriels";
$f_lang['admin_text_email'] = "Si vous souhaitez qu'un utilisateur <b>ne puisse pas poster de message sur votre livre d'or</b>, vous pouvez indiquer son adresse courriel ici. Vous pouvez également interdire des noms de domaines avec une * comme ceci *@ledomaine.com.";
$f_lang['ajouter_email'] = "Ajouter une nouvelle adresse courriel à bannir";
$f_lang['gestion_email'] = "Gestion des adresses courriel";
$f_lang['sup_email'] = "Supprimer les adresses courriel sélectionnées";
$f_lang['erreur_email'] = "Veuillez renseigner l'adresse courriel à ajouter";
$f_lang['ok_aj_email'] = "Merci, l'adresse courriel est désormais bannie";
$f_lang['verif_sup_email'] = "Voulez-vous vraiment supprimer toutes les adresses courriel sélectionnées ?";

$f_lang['no_pseudo'] = "ATTENTION\\nVotre pseudo a été banni, vous n'êtes pas autorisé à poster un message sur ce livre d'or.";
$f_lang['no_email'] = "ATTENTION\\nVotre adresse courriel a été bannie, vous n'êtes pas autorisé à poster un message sur ce livre d'or.";
$f_lang['no_mot'] = "ATTENTION\\nVous avez saisi un mot qui est interdit, vous n'êtes pas autorisé à poster un message sur ce livre d'or.\\nVeuillez corriger votre message !";

// interdiction des URL
$f_lang['url_interdite'] = "ATTENTION\\nLes URL sont interdites dans le corps du message";
$f_lang['url_interdites'] = "Souhaitez-vous interdire les messages contenant des URL ?";
$f_lang['url_cliquables'] = "Souhaitez-vous rendre les URL cliquables dans les messages ?";

//remplacement du fichier /config/config.php par une table dans la BDD
$f_lang['name_table_config'] = "Nom de la table des paramètres de configuration";

// decalage horaire
$f_lang['admin_decalage_horaire'] = "Vous pouvez ajuster le décalage horaire entre le serveur et l'heure de votre pays. Laissez 0 pour ne pas modifier l'heure.";
$f_lang['heures'] = "heures";
$f_lang['secondes'] = "secondes";
$f_lang['admin_erreur_decalage_horaire'] = "Vous devez indiquer un décalage horaire compris entre -12 et +12";

// interdit la suppression du dernier admin
$f_lang['admin_suppr_dernier_admin'] = "Vous ne pouvez pas supprimer le dernier administrateur";

// désactivation des smileys en un clic
$f_lang['admin_autoriser_smileys'] = "Souhaitez-vous autoriser les smileys ?";

// pour empêcher que le temps de session de la partie admin ne soit trop court
$f_lang['admin_temps_session_min'] = "ATTENTION\\nVous avez saisi une valeur de validité de la session de la partie admin trop petite !\\nVous devez indiquer une valeur supérieure à 300 secondes";

// inclure le livre dans une page PHP
$f_lang['admin_inclure_livre'] = "Souhaitez-vous inclure le livre dans un fichier PHP ?";
$f_lang['admin_inclure_livre_code'] = "Voici le code PHP que vous devez insérer dans votre fichier PHP entre les balises &lt;?php et ?&gt;.\n\nIl vous reste à modifier la variable \$chem_absolu dans le fichier /index.php du livre et à ajouter la feuille de style du livre dans la page appelante (pour plus de détails, voir la FAQ)";
$f_lang['admin_fichier_inclusion'] = "Indiquer ici le chemin absolu du fichier dans lequel vous souhaitez inclure le livre d'or (sous la forme /dossier1/dossier2/fichier_ou_a_lieu_linclusion.php). Vous devez cliquer sur le bouton \"Enregistrer\" pour que le chemin indiqué soit pris en compte dans le code";
$f_lang['admin_fichier_inclusion_erreur'] = "ATTENTION\\nVous n'avez pas indiqué un chemin valide pour le fichier à inclure\\nLe chemin doit être de la forme /dossier1/dossier2/fichier_ou_a_lieu_l_inclusion.php";

// gestion des champs
$f_lang['admin_champ_propose'] = "Ne pas proposer";
$f_lang['admin_champ_obligatoire'] = "Obligatoire";
$f_lang['admin_champ_prive'] = "Privé";
$f_lang['admin_champ_pseudo'] = "Les visiteurs peuvent inscrire leur pseudo";
$f_lang['admin_champ_ville'] = "Les visiteurs peuvent inscrire leur ville";
$f_lang['admin_donner_focus'] = "Souhaitez-vous que le champ 'Pseudo' soit sélectionné (qu'il ait le focus) au chargement de la page ?";
$f_lang['champ_obligatoire_vide'] = "Au moins un champ obligatoire (repéré par une *) est vide. Veuillez le remplir.";
$f_lang['erreur_add_nom'] = "Veuillez indiquer votre nom";
$f_lang['erreur_add_email'] = "Veuillez indiquer votre adresse de courriel";
$f_lang['erreur_add_site'] = "Veuillez indiquer l'adresse de votre site";
$f_lang['erreur_add_ville'] = "Veuillez indiquer votre ville";
$f_lang['erreur_add_pays'] = "Veuillez sélectionner votre pays";
$f_lang['erreur_add_note'] = "Veuillez sélectionner une note";
$f_lang['erreur_add_message'] = "Veuillez écrire votre message";
$f_lang['erreur_url'] = "L'adresse de votre site ne semble pas valide";

// code de sécurité : vérification de la présence de la librairie GD2
$f_lang['admin_gd_non_activee'] = "<span class=\"texte_alerte\">Vous ne pouvez pas utiliser le code de sécurité !!!<br/>\n Votre serveur n'inclut pas la librairie GD2 et/ou les options nécessaires au bon fonctionnement du code de sécurité</span>";

// lien vers l'admin et vers la page d'accueil
$f_lang['admin_lien_admin'] = "Souhaitez-vous afficher un lien en bas de page vers l'interface d'administration&nbsp;?";
$f_lang['admin_lien_accueil'] = "Souhaitez-vous afficher un lien de retour vers l'accueil ou vers une page de votre site&nbsp;?";
$f_lang['admin_chemin_lien_accueil'] = "Si vous laissez le champ suivant libre, le lien redirigera le visiteur vers la page d'accueil du site. Vous pouvez également indiquer le chemin absolu vers une page de votre choix (par exemple /dossier1/page1.htm).";
$f_lang['admin_chemin_lien_accueil_erreur'] = "Le chemin donné pour le lien vers la page d'accueil est incorrect ! Veuillez utiliser un chemin absolu (par exemple /mapage.php).";
$f_lang['texte_lien_accueil'] = "Retour à l'accueil du site";
$f_lang['texte_lien_admin'] = "Administration du livre d'or";

$f_lang['admin_retour_livre'] = "Voir le livre d'or";

// symboles champs privés/obligatoires sur le formulaire
// /!\ Attention, maximum 90 caractères
$f_lang['information_champ_prive'] = "La valeur de ce champ ne sera visible que par l'administrateur du livre d'or.";
$f_lang['information_champ_obligatoire'] = "Ce champ est obligatoire pour poster un message";

/* Bas de page partie admin */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

$f_lang['host_base'] = "Serveur (généralement localhost)";

$f_lang['name_table_txt_lang'] = "Nom de la table contenant les messages personnalisés";

$f_lang['erreur_ecriture'] = "<b>ERREUR</b>, impossible d'écrire dans le répertoire \"config/\".<br><br>Veuillez modifier les droits unix du répertoire \"config\" (chmod 777), puis re-tentez l'installation : <a href=\"./setup.php\"><b>retour</b></a>.";

$f_lang['options_livre'] = "Options du livre d'or";

$f_lang['text1'] = "<b>Les mots censurés seront automatiquement remplacés</b> dans les messages postés par les visiteurs. Vous pouvez par exemple remplacer tous les mots \"grossiers\" par une chaine de caractères du type \"**mot censuré**\".<br/>Si vous avez choisi de refuser les messages qui contiennent des mots \"interdits\", <u>vous devez tout de même ajouter un texte de remplacement</u>. Cette mesure vous permet de passer d'un mode à l'autre (remplacement du mot ou refus du message).";

$f_lang['erreur_mail'] = "Il doit y avoir une erreur dans votre adresse de courriel ?";

$f_lang['add_code_securite'] = "Souhaitez vous imposer la saisie d'un code de sécurité (\"captcha\") aux visiteurs lors de l'ajout de message ?";

$f_lang['veuillez_taper_code'] = "Veuillez copier ce code de 4 lettres dans la case de droite";

$f_lang['envoyer_remerciement'] = "Souhaitez vous qu'un courriel de remerciement automatique soit envoyé ? (attention, l'adresse électronique de l'administrateur sera utilisée pour l'envoi des courriels)";

$f_lang['nb_max_smileys'] = "Nombre max. de smilies affichés sur le formulaire (les autres seront visibles en cliquant sur le sigle \"+\")";

/* mail envoyé */
$f_lang['mail_object'] = "[info] - Nouveau message posté sur votre livre d'or - ";
$f_lang['mail_message'] = "Nouveau message dans le livre d'or ";

/* Erreur si fichier install present */
$f_lang['erreur_fic_install_present'] = "Pour utiliser le livre d'or et pour des raisons de sécurité, vous devez supprimer le fichier setup.php et le dossier update/ dans le répertoire Alex Guestbook"; 

?>
