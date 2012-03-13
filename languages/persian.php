<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2012    //
//         Hercelin Maxime (c) 2005 - 2012   //
//         http://www.alexguestbook.net/     //
//              all right reserved           //
//   Persian translation by Ramin Noroozi    //
//          http://www.maku-online.com/      //
//           Maku OnLiNe (c) 2006-2008       //
///////////////////////////////////////////////

/* Encodage utilis頤ans le script */
$SCRIPT_ENCODAGE = "UTF-8";
$CONTENT_LANGUAGE = "fa";

/* setup */
$f_lang['install_auto'] = "نصب اتوماتیک";
$f_lang['identi_base'] = "Database ID( هویت دیتابیس)";
$f_lang['type_base'] = "Database type(نوع دیتابیس)";
$f_lang['user_base'] = "User(نام کاربری )";
$f_lang['pass_base'] = "Password(کلمه عبور)";
$f_lang['nom_base'] = "Database name(نام دیتابیس)";
$f_lang['nom_table'] = "Name of the tables(Database نام جدول های)";
$f_lang['name_table_sessions'] = "Name of the sessions table";
$f_lang['name_table_users'] = "Name of the users table";
$f_lang['name_table_messages'] = "Name of the messages table";
$f_lang['name_table_censure'] = "Name of the censored words table";
$f_lang['name_table_ip'] = "Name of the banned IP table";
$f_lang['name_table_smileys'] = "Name of the smileys table";
$f_lang['extension_script'] = "Script extension";
$f_lang['choose_extension'] = "Choose an extension for the script<br>(we advise \"php\", otherwise you will have to rename all files with the chosen extension)";
$f_lang['identi_acces_admin'] = "Your ID to access the administration panel(شناسه شما برای دسترسی به پانل مدیریت)";
$f_lang['login_admin'] = "ورود";
$f_lang['pass_admin'] = "کلمه عبور";
$f_lang['verif_pass_admin'] = "نوشتن دوباره کلمه عبور";
$f_lang['email_admin_setup'] = "ایمیل شما";
$f_lang['installer'] = "نصب";
$f_lang['erreur_host'] = "You forgot to give your database server host";
$f_lang['erreur_user'] = "You forgot to give your ID to connect to the database";
$f_lang['erreur_nom_base'] = "You forgot to give the name of your database";
$f_lang['erreur_log_admin'] = "You forgot to give your login name to the administration panel";
$f_lang['erreur_pass_admin'] = "You forgot to give your password to connect to the administration panel";
$f_lang['erreur_pass_differents'] = "ATTENTION, your passwords are different.";
$f_lang['erreur_first_connexion'] = "<b>ERROR, connection to the database was impossible.</b><br><br>please check your connection ID : <a href=\"javascript:history.go(-1);\"><b>back</b></a>.";
$f_lang['erreur_install'] = "نصب شکست خورد!";
$f_lang['ok_install'] = "نصب با موفقیت پایان پذیرفت";
$f_lang['text_ok_install'] = "<b>از انتخاب شما ممنونیم, مراحل نصب با موفقیت خاتمه یافت</b><br><br>برای امنیت بیشتر لطفا حذف کنید فایل (\"setup.php\"), اگر این کار را انجام ندهید ، کاربران عادی میتوانند فایا های پیکر بندی شما را تغییردهند <br><br>شما حالا میتوانید دفتر یادبودتان را اداره کنید با کلیک در <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>here</b></a> or<br> see it like visitors do <a href=\"".$chem_absolu."\" target=\"_blank\"><b>here</b></a>.";

/* administration */
$f_lang['page protect'] = "صفحه حفاظت شده";
$f_lang['login'] = "نام کاربری";
$f_lang['pass'] = "کلمه عبور";
$f_lang['value identif'] = "ورود";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "گزینه ها";
$f_lang['script'] = "اسکریپت";
$f_lang['graphismes'] = "پوسته های دفتر";
$f_lang['messages'] = "پیام ها";
$f_lang['gestion'] = "مدیریت";
$f_lang['censure_mots'] = "فیلتر کلمات";
$f_lang['smileys'] = "شکلک ها";
$f_lang['utilisateurs'] = "مدیران";
$f_lang['ajouter'] = "اضافه کردن";
$f_lang['aide_guestbook'] = "پاسخ پرسش ها";
$f_lang['a_propos_de'] = "درباره... ";
$f_lang['donner_avis'] = "نظر شما";
$f_lang['deconnexion'] = "خروج";

 /* options */
 $f_lang['options_livre'] = "گزینه های دفتر";
$f_lang['options_generales'] = "گزینه های کلی";
$f_lang['langue'] = "زبان";
$f_lang['send_mail'] = "آیا مدیران هنگام ارسال پیام از طریق ایمیل آگاه شوند؟ ";
$f_lang['avert_mail'] = "<br>(<b>information</b> : the mail() function of your host is turned off, therefore even if you check \"yes\" you will not receive Email notification)";
$f_lang['oui'] = "yes";
$f_lang['non'] = "no";
$f_lang['options_modules'] = "Guestbook fields options";
$f_lang['admin_champ_email'] = "Visitors are asked for their Email";
$f_lang['admin_champ_site'] = "Visitors are asked for the URL of their website";
$f_lang['admin_champ_pays'] = "Visitors are asked for their city and country";
$f_lang['admin_champ_note'] = "Visitors can give their evaluation of your site";
$f_lang['admin_ok_aff_moteur'] = "Show the search engine";
$f_lang['options_tech'] = "Technical options";
$f_lang['url_recharger'] = "Page to reload for the Guestbook";
$f_lang['url_variables'] = "Variable instructions sent as parameters (type # instead of $ in a variable)";
$f_lang['temps_session'] = "Session duration in seconds for the adminnistration panel";
$f_lang['skin_to_use'] = "پوسته ی فعلی";
$f_lang['enregistrer'] = "ذخیره";
$f_lang['nb_pages'] = "پیام های قابل مشاهده در هر صفحه";
$f_lang['merci_options'] = "متشکریم,اطلاعات شما آپدیت شد.";
$f_lang['erreur_options'] = "ERROR\\nThe informations could not be saved, it was impossible to write in the \\\"config.".$alex_livre_ext."\\\" file, please edit this file with a text editor to change your settings.";
$f_lang['temps_ip_post'] = "فاصله زمانی برای ارسال مجدد کاربر ";
$f_lang['minutes'] = "دقیقه";
$f_lang['cut_mots'] = "Number of letters before a long word is cut";
$f_lang['format_date'] = "فرمت تاریخ";

/* skins */
$f_lang['ok_ajouter'] = "پوسته ی شما با موفقیت ساخته شد";
$f_lang['erreur_ajouter'] = "ERROR\\nThe skin could not be created, please create it manually";
$f_lang['text1_2'] = "The following skins will be saved in the &quot;templates/skins/&quot; folder. This interface allows you to easily modify them but you can also manually edit the html files.";
$f_lang['text2'] = "<b>If you also wish to modify the templates of the administration panel</b> please edit manually the files in the &quot;templates/admin/&quot; folder.";
$f_lang['text_aj_skin'] = "اضافه کردن پوسته";
$f_lang['ajouter'] = "اضافه کردن";
$f_lang['gestion_skins'] = "مدیریت پوسته ها";
$f_lang['vous_editez'] = " شما حالا میتوانید این پوسته را ویرایش کنید : ";
$f_lang['style'] = "شیوه نامه";
$f_lang['ajouter_message'] = "افزودن یک بخش پیام";
$f_lang['nbre_messages_page'] = "پیام ها / صفحات";
$f_lang['pages_dispos'] = "لیست صفحه های در دسترس / صفحه ی بعدی- صفحه ی قبلی";
$f_lang['texte_corps_messages'] = "3یکره ی پیام ها";
$f_lang['espacement'] = "فاصله ی بین دو پیام";
$f_lang['text_assembly'] = "file assembling the previous parts";
$f_lang['ok_edit_skin'] = "پوسته بروز شد";
$f_lang['erreur_edit_skin'] = "ERROR\\nOne or several file(s) of the skin could not be updated. Please edit these files manually.";
$f_lang['ajouter'] = "اضافه کردن";
$f_lang['supprimer'] = "حذف کردن";
$f_lang['text_sup_skin'] = "حذف یک پوسته";
$f_lang['ok_supprimer'] = "پوسته حذف شد ";
$f_lang['erreur_supprimer'] = "ERROR\\nOne or several file(s) of the skin could not be deleted, you should delete them manually.";

/* page des mots censur鳠*/
$f_lang['aj_mot'] = "افزودن کلمه ی جدید "; 
$f_lang['mot_interdit'] = "کلمه ی غیر مجاز :";
$f_lang['remplacer_par'] = "جایگزینی با :";
$f_lang['gestion_censure'] = "مدیریت کلمات غیر مجاز";
$f_lang['mot'] = "کلمه";
$f_lang['remplace_by'] = "جایگزینی با";
$f_lang['liste_jour'] = "بروز رسانی لیست";
$f_lang['sup_mots'] = "حذف کلمات انتخاب شده";
$f_lang['erreur_aj_censure1'] = "کلمه ی مورد نظر برای فیلتر شدن";
$f_lang['erreur_aj_censure2'] = "کلمه ی جدید بجای کلمه ی فیلتر شده";
$f_lang['ok_aj_mot'] = "کلمه ی مورد نظر فیلتر شد ";
$f_lang['verif_sup'] = "آیا شما میخواهید همیشه کلملت فیلتر شده حذف شوند؟ ";
$f_lang['merci_modif'] = "تغییرات با موفقیت ذخیره شد";

/* bannir des ip */
$f_lang['bannir_ip'] = "بستن آی پی ها";
$f_lang['text_ip1'] = "به هر کاربر اینترنت چهار شماره به عنوان شناسه تعلق می گیرد(i.e. 201.10.25.14). This ID is given by the access provider and changes, theoratically, each time he/she reconnects.";
$f_lang['text_ip2'] = "If you want to <b>prevent a user to post messages on your Guestbook</b>, you can copy his IP address here. You can also ban a range of IP addresses by using the escape symbol * (i.e. 201.15.55.*, or even 158.*.*.*).";
$f_lang['ajouter_ip'] = "بستن آی پی جدید";
$f_lang['gestion_ip'] = "مدیریت آی پی ها";
$f_lang['sup_ip'] = "حذف آی پی های بسته شده انتخاب شده";
$f_lang['ok_aj_ip'] = "این آی پی بسته شد";
$f_lang['verif_sup_ip'] = "آیا واقعا می خواهید آی پی انتخاب شده را حذف کنید؟ ";

/* smileys */
$f_lang['gestion_smileys'] = "مدیریت شکلک ها";
$f_lang['text_smileys'] = "<b>Smileys allow the visitor to show feelings</b> when posting. From this interface you can easily add or remove smileys so that your visitors have the widest choice of them :o)<br><br>Smileys available on this page are stored in the \"images/smileys\" folder.";
$f_lang['ajouter_smiley'] = "افزودن شکلک";
$f_lang['image_smiley'] = "تصویر";
$f_lang['car_replace'] = "کد تصویر";
$f_lang['gestion_smileys'] = "مدیریت شکلک ها";
$f_lang['sup_smileys'] = "حذف شکلک های انتخاب شده";
$f_lang['erreur_image'] = "انتخاب شکلک";
$f_lang['erreur_car'] = "انتخاب کد برای تصویر انتخاب شده";
$f_lang['ok_aj_smiley'] = "شکلک با موفقیت افزوده شد";
$f_lang['no_smiley'] = "The smiley must be a GIF or JPEG image";
$f_lang['copy_impossible'] = "ERROR\\nIt was impossible to copy the smiley in the \\\"images/smileys\\\" folder.";
$f_lang['car_replace_exist'] = "ERROR\\nThe corresponding code already exists in the database.";
$f_lang['modif_smileys'] = "بروز رسانی شکلک ها";
$f_lang['verif_sup_smileys'] = "Do you really wish to delete the selected smileys ? ";
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
$f_lang['gest_admin'] = "مدیریت مدیران";
$f_lang['sup_admin'] = "remove";
$f_lang['login_admin'] = "کلمه کاربری";
$f_lang['email_admin'] = "ایمیل";
$f_lang['modif_admin'] = "modify";
$f_lang['value_sup_admin'] = "Remove all the selected admins";
$f_lang['verif_sup_admin'] = "Do you really wish to remove all the selected admins ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "PAGE UNAVAILABLE";
$f_lang['erreur_auth'] = "Authentification failure";
$f_lang['erreur_droits'] = "You do not have the required rights to access this page.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "میانگین امتیاز داده شده توسط کاربران به سایت : ";
$f_lang['title_guestbook'] = "دفتر یادبود";
$f_lang['note_super'] = " : عالی ! ";
$f_lang['note_moyen'] = " : معمولی ";
$f_lang['note_rate'] = " : ضعیف";
$f_lang['nom_pseudo_visiteur'] = ":نام یا نام مستعار  ";
$f_lang['email_visiteur'] = ":ایمیل شما ";
$f_lang['site_web_visiteur'] = ":وب سایت شما ";
$f_lang['ville_pays_visiteur'] = ":شهر / کشور ";
$f_lang['note_visiteur'] = ":امتیاز";
$f_lang['message_visiteur'] = ":پیام شما";
$f_lang['ajouter_message_visiteur'] = "اضافه کردن پیام";
$f_lang['erreur_add_nom'] = "لطفا نام خود را بنویسید";
$f_lang['erreur_add_message'] = "لطفا پیام خود را بنویسید";
$f_lang['erreur_mail'] = "ایمیل شما نادرست است!";
$f_lang['messages'] = "پیام ها";
$f_lang['messages_a'] = "از";
$f_lang['page'] = "صفحه";
$f_lang['nbre_messages'] = "تعداد پیام ها";
$f_lang['message_le'] = "on";
$f_lang['message_note'] = "امتیاز";
$f_lang['send_mail_to'] = "فرستادن ایمیل به";
$f_lang['go_home'] = "مشاهده سایت";
$f_lang['precedente'] = "&lt;&lt; قبلی";
$f_lang['suivante'] = "بعدی &gt;&gt;";
$f_lang['no_message'] = "هیچ پیامی برای مشاهده وجود ندارد. ";
$f_lang['no_ip'] = "توجه\\n IP شما بسته شده است، شما مجاز به فرستادن پیام نیستید! ";
$f_lang['ok_post'] = "متشکریم!  پیام شما با موفقیت ارسال شد ";
$f_lang['time_erreur'] = "توجه\\n پیام شما ارسال نشد, شما به تازگی پیام ارسال کردید";
$f_lang['text_select_search'] = "نمایش پیام هایی که شامل کلمه یا کلمات مقابل است";
$f_lang['text_ok_search'] = "نمایش";

/* mail envoyé*/
$f_lang['mail_object'] = "[info] - پیام جدید در دفتر یادبودتان - ";
$f_lang['mail_message'] = "سلام,\n\nموقعی که پیام جدیدی ارسال شد به شما خبر میدهیم ";

/* gestion des messages */
$f_lang['gestion_mess'] = "مدیریت پیام ها";
$f_lang['selectionner_pages'] = "انتخاب";
$f_lang['messages_gest'] = "پیام";
$f_lang['page_gest'] = "صفحه";
$f_lang['aller_en_page'] = "برو به صفحه";
$f_lang['supprimer_gest'] = "حذف";
$f_lang['auteur_gest'] = "نویسنده";
$f_lang['modifier_gest'] = "ویرایش";
$f_lang['supprimer_mess_selected'] = "حذف پیام های انتخاب شده";
$f_lang['verif_sup_mess'] = "آیا واقعا می خواهید نامه های انتخاب شده را حذف نمایید؟ ";

/* modifier un message */
$f_lang['modif_mess'] = "ویرایش پیام";
$f_lang['message_modif'] = "پیام";
$f_lang['nom_modif'] = "نام  ";
$f_lang['email_modif'] = " ایمیل ";
$f_lang['site_web_modif'] = " وب سایت ";
$f_lang['note_modif'] = "امتیاز داده شده به سایت";
$f_lang['ville_pays_modif'] = " شهر / کشور ";
$f_lang['date_modif'] = " تاریخ ارسال ";
$f_lang['ip_modif'] = "آدرس IP";
$f_lang['ok_modif_mess'] = " تغییرات شما با موفقیت ذخیره شد. ";

/* titre des pages */
$f_lang['title identification'] = "ورود";
$f_lang['title administration'] = "مدیریت";
$f_lang['title frame gauche'] = "قاب چپ";
$f_lang['title options'] = "گزینه ها";
$f_lang['title skins'] = " پوسته ها ";
$f_lang['title censure'] = "کلمات فیلتر شده";
$f_lang['title censure'] = "مدیریت آی پی های بسته شده";
$f_lang['title smileys'] = "مدیریت شکلک ها";
$f_lang['title add admin'] = "اضافه کردن یک مدیر به دفتر یاد بود";
$f_lang['title gest admin'] = "مدیریت مدیران دفتر یادبود";
$f_lang['title erreur'] = "خطا";
$f_lang['title gestion mess'] = "مدیریت پیام ها";
$f_lang['title modif mess'] = "editing un message";
$f_lang['title setup'] = "نصب";

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
$f_lang['version'] = "ورژن";
$f_lang['new_version_dispo'] = "An updated version of the Guestbook is available";
$f_lang['version_courrante'] = "Current version of the script";
$f_lang['info_version'] = "Information about the version you have";
$f_lang['version_txt_ok'] = "The version you have is ".$alex_livre_version.",<br>this version is the latest, no upgrade is necessary.";
$f_lang['version_txt_erreur'] = "The version you have is ".$alex_livre_version.".<br/><b>An error occured during update verification.</b> You can verify new version on our website http://www.alexguestbook.net";
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
$f_lang['sup_copyright'] = "حذف کپی رایت";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Name of the security codes table";
$f_lang['add_code_securite'] = "کد امنیتی برای ارسال پیام فعال شود؟ ";
$f_lang['t_chem_dossier_fonts'] = "آدرس URL پوشه ی فونت ها";
$f_lang['t_color_txt_code'] = "Hexadecimal code of the code text";
$f_lang['t_color_background_code'] = "Hexadecimal background color code";
$f_lang['veuillez_taper_code'] = "لطفا کد امنیتی را وارد کنید";
$f_lang['a_quoi_ca_sert'] = "Why this? ";
$f_lang['why_code'] = "Why a \"security code\" ?";
$f_lang['txt_why_code'] = "This procedure allows us to check that the message is posted by a real person and not by an automated software.<br><br><b>Commercials and referencing spam are forbidden on this Guestbook!</b>";
$f_lang['erreur_code_securite'] = "Please enter the security code";
$f_lang['erreur_saisie_code_securite'] = "The security code you typed in is not valid, please renew the operation";

/* add version 4.0 */
$f_lang['reponse_auto'] = "ماشین پاسخگو";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;manage the automated answers?";
$f_lang['text_reponse_auto'] = "<b>On this page you can write the automated answer's text</b> that will be sent to visitors who will have posted a message on your Guestbook.  This message will be sent if you activate this function in the script options.<br><br>Each language can have its own personnalized answer and the [PSEUDO] code will be replaced by the name or nickname of the visitor who posted the message.";
$f_lang['name_table_rep_auto'] = "Name for the MySQL table that will contain the automated answers messages";
$f_lang['gestion_reponses'] = "مدیریت پیام ها";
$f_lang['msg_remerciement'] = "پیام تشکر";
$f_lang['txt_remerciement'] = "سلام [PSEUDO],\n\n !متشکریم از ارسال پیامتان در دفتر یادبود ما";
$f_lang['ok_save_msg_rem'] = " پیام شما با موفقییت ذخیره شد ";
$f_lang['envoyer_remerciement'] = "آیا می خواهید پیام تشکر به صورت اتوماتیک فرستاده شود؟ ";
$f_lang['remerciement'] = "تشکرها";
$f_lang['titre_guestbook'] = "عنوان دفتر یادبود";
$f_lang['text_titre_guestbook'] = "<b>شما میتوانید عنوان دفتر را تغییر دهید</b> وبرای هر زبانی که در دسترس است یک عنوان انتخاب کنید";
$f_lang['titre'] = "عنوان";
$f_lang['parametrage'] = "تنظیمات";
$f_lang['ok_save_titre'] = "عنوان جدید دفتر یادبود ذخیره شد ";
$f_lang['ville_visiteur'] = ":شهر ";
$f_lang['pays_visiteur'] = ":کشور ";
$f_lang['flag'] = "پرچم";
$f_lang['ville_modif'] = "شهر";
$f_lang['pays_modif'] = "کشور";
$f_lang['action'] = "فعال";
$f_lang['repondre'] = "پاسخگویی";
$f_lang['votre_reponse'] = "پاسخ شما";
$f_lang['ok_reponse_mess'] = "پاسخ شما با موفقیت ذخیره شد";
$f_lang['defaut_titre_rep'] = "پاسخ مدیران";
$f_lang['annuler'] = "انصراف";
$f_lang['num_appari'] = "شماره نمایش";
$f_lang['nb_max_smileys'] = "حداکثر شکلک های نمایش داده شده";
$f_lang['plus_smileys'] = "نمایش شکلک های بیشتر";
$f_lang['liste_all_smilies'] = "همه ی شکلک ها";
$f_lang['boite_java'] = "جعبه ی جاوااسکریپت";
$f_lang['text_boite_java'] = "<b>اجازه ی نمایش آخرین پست های دفتر را</b> در صفحه ی انتخابی شما می دهد";
$f_lang['parametrage_modele'] = "تنظیمات قالب ها";
$f_lang['ok_save_boite'] = "تنظیمات شما با موفقیت ذخیره شد";
$f_lang['format_date_boite'] = "فرمت تاریخ (ورود به <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> PHP function)";
$f_lang['nbre_maxi_pseudo_boite'] = "Maximum number of signs shown for the name or nickname";
$f_lang['nbre_maxi_message_boite'] = "Maximum number of signs shown for the message";
$f_lang['modele_affichage_donnees'] = "Data posting template";
$f_lang['url_dossier_livre_boite'] = "Complete URL to your guestbook folder";
$f_lang['url_livre_boite'] = "Complete URL to your guestbook index page";
$f_lang['generation_code'] = "سازنده ی کدهای جاوا اسکریپت";
$f_lang['nom_msg_afficher'] = "تعداد پیام های نمایش داده شده";
$f_lang['generer_code'] = "ساخت کد جاوا اسکریپت";
$f_lang['code_a_copier'] = "کد HTML در صفحه یا صفحات انتخابی شما کپی شد";
$f_lang['erreur_boite_java'] = "Please set a valid number of messages to show";
$f_lang['erreur_par_boite'] = "Settings error, cannot isolate the [BOUCLE] ... [/BOUCLE] chain in your template.";
$f_lang['saut_ligne_msg_boite'] = "Keep the line jumps in the messages";
$f_lang['message_a'] = "at";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;manage the database ?";
$f_lang['bdd'] = "Database";
$f_lang['optimisation'] = "Optimisation";
$f_lang['sauvegarde'] = " ذخیره";
$f_lang['restauration'] = "بازگردانی";
$f_lang['optimisation_txt'] = "<b>Upon recording and deleting, tables of your database pile unused, empty space up.</b> These are bad for the overal performance of your databse and thus of your website, this page allows you solve this problem by optimizing the tables.";
$f_lang['liste_tables'] = "List of the tables of your database";
$f_lang['lancer_optimisation'] = "Launching optimization";
$f_lang['tables'] = "TABLES";
$f_lang['pertes'] = "LOSSES";
$f_lang['octets'] = "bytes";
$f_lang['ok_optimise'] = "Thanks, the tables having losses have been optimized";
$f_lang['txt_sauvegarde'] = "<b>If you want to keep the posted messages for a long time, a regular and periodical backup is highly advised.</b> A harddisk failure could indeed destroy all your data.  A backup could also be very useful if you wish to transfer your messages on another server.";
$f_lang['lancer_sauvegarde'] = "گرفتن پشتیبان";
$f_lang['lancer_restauration'] = "بازگردانی پشتیبان";
$f_lang['txt_restauration'] = "<b>If you've performed a backup, you can completely restore your guestbook's database</b> Just select the corresponding file on your hard disk.<br><br><b><u>ATTENTION</u></b>, if this file is very big (several megabytes), the restoration process could cause problem upon your website host server settings (set_time_limit() and  maximum size allowed on upload settings).";
$f_lang['select_file'] = "S鬥ct a backup file on your hard disk or server (.ZIP or .SQL)";
$f_lang['confirm_restauration'] = "Do you confirm that you wish to lauch the restoration and thus erase all actual data?";
$f_lang['select_file_restau'] = "فایل پشتیبان را انتخاب کنید";
$f_lang['erreur_ext_restau'] = "فایل انتخابی شما با فرمت .ZIP یا  .SQL نمی باشد ";
$f_lang['conseil_zip'] = "(Uncompress the ZIP file on your hard disk to get the SQL file)";
$f_lang['erreur_ext_zip'] = "The PHP_ZIP extension is not available on your server, the restoration via a ZIP file is thus not possible. Please select a .SQL file on your hard disk".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Error reading your ZIP archive, cannot perform restoration.  You may try with a .SQL file ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "The selected SQL file doesn't seem to be an @lex Guestbook script file.  Cannot perform the restoration.";
$f_lang['restauration_terminee'] = "بازگردانی فایل پشتیبان با موفقیت انجام پذیرفت ";

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

$f_lang['erreur_host'] = "Please enter the database server";

$f_lang['erreur_ecriture'] = "<b>ERROR</b>, unable to write in the \"config/\" folder.<br><br>Please modify the Unix rights of the \"config\" folder (chmod 777), then try again the installation : <a href=\"./setup.php\"><b>back</b></a>.";

$f_lang['options_livre'] = "Guestbook options";

$f_lang['text1'] = "<b>Censored words will be automatically replaced</b> in the messages posted by the visitors. You can i.e. replace all \"bad words\" by a text like \"**censored word**\".<br/>If you have chosen to refuse messages containing \"censored words\", <u>you still need to enter a replacement text</u>. This measure allows you to switch mode (word replacement or message refusal).";

/* Erreur si fichier install present */
$f_lang['erreur_fic_install_present'] = "For security reasons, to use your guestbook you have to delete file setup.php and folder update/";
?>