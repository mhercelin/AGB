<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2012    //
//         Hercelin Maxime (c) 2005 - 2012   //
//         http://www.alexguestbook.net/     //
//              all right reserved           //
//        Русский перевод: Сергей Невский    //
//               several@mail.ru             //
///////////////////////////////////////////////

/* Encodage utilisй dans le script */
$SCRIPT_ENCODAGE = "windows-1251";
$CONTENT_LANGUAGE = "ru";

/* setup */
$f_lang['install_auto'] = "Автоматическая установка";
$f_lang['identi_base'] = "Информация о БД";
$f_lang['type_base'] = "Тип БД";
$f_lang['user_base'] = "Логин";
$f_lang['pass_base'] = "Пароль";
$f_lang['nom_base'] = "Имя БД";
$f_lang['nom_table'] = "Названия таблиц";
$f_lang['name_table_sessions'] = "Название таблицы сессии";
$f_lang['name_table_users'] = "Название таблицы пользователей";
$f_lang['name_table_messages'] = "Название таблицы сообщений";
$f_lang['name_table_censure'] = "Название таблицы запрещенных слов";
$f_lang['name_table_ip'] = "Название таблицы забаненых IP";
$f_lang['name_table_smileys'] = "Название таблицы для смайликов";
$f_lang['extension_script'] = "Расширение для исполняемых файлов";
$f_lang['choose_extension'] = "Выберите расширение для исполняемых файлов<br>(по умолчанию \"php\", иначе Вам придется переименовать все файлы на выбранное расширение)";
$f_lang['identi_acces_admin'] = "Ваш ID для доступа в раздел администрирования";
$f_lang['login_admin'] = "Логин";
$f_lang['pass_admin'] = "Пароль";
$f_lang['verif_pass_admin'] = "Наберите пароль еще раз";
$f_lang['email_admin_setup'] = "Ваш Email";
$f_lang['installer'] = "Установка";
$f_lang['erreur_host'] = "Вы забыли ввести имя сервера БД";
$f_lang['erreur_user'] = "Вы забыли ввести Ваши данные для соединения с БД";
$f_lang['erreur_nom_base'] = "Вы забыли ввести имя БД";
$f_lang['erreur_log_admin'] = "Вы забыли ввести Ваш логин для входа в административную панель";
$f_lang['erreur_pass_admin'] = "Вы забыли ввести Ваш пароль для входа в административную панель";
$f_lang['erreur_pass_differents'] = "ВНИМАНИЕ, набранные пароли различны.";
$f_lang['erreur_first_connexion'] = "<b>ERROR, соединение с базой данных невозможна.</b><br><br>пожалуйста, проверьте введенные данные еще раз : <a href=\"javascript:history.go(-1);\"><b>back</b></a>.";
$f_lang['erreur_install'] = "Установка не выполнена";
$f_lang['ok_install'] = "Установка прошла успешно";
$f_lang['text_ok_install'] = "<b>Спасибо ! Установка прошла успешно.</b><br><br>По условиям безопасности настоятельно рекомендуем удалить установочный файл (\"setup.php\"), в противном случае любой сможет испортить установку Вашей гостевой книги.<br><br>Вы можете сейчас администрировать Вашу гостевую книгу, щелкнув <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>here</b></a> or<br> или посмотреть ее как посетитель: <a href=\"".$chem_absolu."\" target=\"_blank\"><b>here</b></a>.";

/* administration */
$f_lang['page protect'] = "Доступ на страницу ограничен";
$f_lang['login'] = "Логин";
$f_lang['pass'] = "Пароль";
$f_lang['value identif'] = "Идентификация";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "Настройки";
$f_lang['script'] = "Исполняемые файлы";
$f_lang['graphismes'] = "Скин гостевой книги";
$f_lang['messages'] = "Сообщения";
$f_lang['gestion'] = "Управление";
$f_lang['censure_mots'] = "Запрещенные слова";
$f_lang['smileys'] = "Смайлики";
$f_lang['utilisateurs'] = "Администраторы";
$f_lang['ajouter'] = "Добавить";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "About...";
$f_lang['donner_avis'] = "Пошлите нам свое мнение";
$f_lang['deconnexion'] = "выйти";

 /* options */
 $f_lang['options_livre'] = "Настройка Гостевой книги";
$f_lang['options_generales'] = "Общие настройки";
$f_lang['langue'] = "Язык";
$f_lang['send_mail'] = "Посылать администратору Email с сообщением о новой записи в гостевой книге ?";
$f_lang['avert_mail'] = "<br>(<b>информация</b> : функция mail() на Вашем сервере отключена, поэтому даже если Вы и отметили \"yes\", Вы не будете получать уведомление по Email )";
$f_lang['oui'] = "да";
$f_lang['non'] = "нет";
$f_lang['options_modules'] = "Настройка полей в гостевой книге";
$f_lang['admin_champ_email'] = "Спрашивать посетителей о Email";
$f_lang['admin_champ_site'] = "Спрашивать посетителей о URL их сайта";
$f_lang['admin_champ_pays'] = "Спрашивать посетителей о городе и стране";
$f_lang['admin_champ_note'] = "Посетители смогут принимать участие в оценке Вашего сайта";
$f_lang['admin_ok_aff_moteur'] = "Показывать строку поиска";
$f_lang['options_tech'] = "Технические настройки";
$f_lang['url_recharger'] = "Первая страница для загрузки гостевой книги";
$f_lang['url_variables'] = "Инструкции переменных, посылаемых как параметры (# вместо $ в переменной)";
$f_lang['temps_session'] = "Длительность сессии в секундах для административной панели";
$f_lang['skin_to_use'] = "Используемый скин";
$f_lang['enregistrer'] = "Сохранить";
$f_lang['nb_pages'] = "Количество сообщений на странице";
$f_lang['merci_options'] = "Спасибо, информация была обновлена";
$f_lang['erreur_options'] = "ERROR\\nИнформация не может быть сохранена, вероятно из-за недоступности записи в файл \\\"config.".$alex_livre_ext."\\\" . Пожалуйста, отредактируйте его в текстовом редакторе чтобы изменить установки.";
$f_lang['temps_ip_post'] = "Через сколько минут пользователь сможет послать повторное сообщение";
$f_lang['minutes'] = "минут";
$f_lang['cut_mots'] = "Количество букв в самом длинном слове";
$f_lang['format_date'] = "Формат даты";

/* skins */
$f_lang['ok_ajouter'] = "Спасибо, скин успешно создан";
$f_lang['erreur_ajouter'] = "ERROR\\nСкин не может быть создан. Сделайте это вручную";
$f_lang['text1_2'] = "Следующий скин будет сохранен в директории &quot;templates/skins/&quot;. Этот интерфейс поможет Вам легко модифицировать его. Но ничто не мешает Вам делать это и вручную, редактируя html-файлы.";
$f_lang['text2'] = "<b>Если Вы хотите изменить оформление административной панели,</b> пожалуйста, отредактируйте вручную файлы в папке &quot;templates/admin/&quot;.";
$f_lang['text_aj_skin'] = "Добавить скин";
$f_lang['ajouter'] = "Добавить";
$f_lang['gestion_skins'] = "Управление скинами";
$f_lang['vous_editez'] = "Сейчас Вы редактируете этот скин :";
$f_lang['style'] = "таблица стилей";
$f_lang['ajouter_message'] = "добавить раздел сообщений";
$f_lang['nbre_messages_page'] = "количество сообщений / pages part";
$f_lang['pages_dispos'] = "лист доступных страниц / next page - previous page part";
$f_lang['texte_corps_messages'] = "тело сообщения";
$f_lang['espacement'] = "помежуток между двумя сообщениями";
$f_lang['text_assembly'] = "файл, собирающий предыдущие разделы";
$f_lang['ok_edit_skin'] = "Спасибо, скин был обновлен";
$f_lang['erreur_edit_skin'] = "ERROR\\nОдин или несколько файлов скина не может быть обновлен. Пожалуйста, отредактируйте эти файлы вручную.";
$f_lang['ajouter'] = "Добавить";
$f_lang['supprimer'] = "Удалить";
$f_lang['text_sup_skin'] = "Удалить скин";
$f_lang['ok_supprimer'] = "Спасибо, скин был успешно удален.";
$f_lang['erreur_supprimer'] = "ERROR\\nОдин или несколько файлов скина не может быть удален. Сделайте это вручную.";

/* page des mots censurйs */
$f_lang['aj_mot'] = "Добавить новое слово "; 
$f_lang['mot_interdit'] = "Запрещенное слово :";
$f_lang['remplacer_par'] = "Заменить :";
$f_lang['gestion_censure'] = "Управление запрещенными словами";
$f_lang['mot'] = "слово";
$f_lang['remplace_by'] = "заменить";
$f_lang['liste_jour'] = "Обновить список";
$f_lang['sup_mots'] = "Заменить выбранные слова";
$f_lang['erreur_aj_censure1'] = "Пожалуйста, введите запрещаемое слово";
$f_lang['erreur_aj_censure2'] = "Пожалуйста, введите слово для его замены";
$f_lang['ok_aj_mot'] = "Спасибо, запрещенное слово было добавлено.";
$f_lang['verif_sup'] = "Вы хотите навсегда удалить выбранные слова ?";
$f_lang['merci_modif'] = "Спасибо, изменения сохранены";

/* bannir des ip */
$f_lang['bannir_ip'] = "Запрещенные IP";
$f_lang['text_ip1'] = "Каждый, кто находится в Интернете имеет свой уникальный четырехзначный адрес ID (т.e. 201.10.25.14). Этот идентификатор присваивается провайдером и, теоретически, меняется при каждом входе в Интернет.";
$f_lang['text_ip2'] = "Если Вы хотите <b>запретить посетителю оставлять сообщения в гостевой книге</b>, Вы можете скопировать его IP адрес здесь. Вы можете так же запретить целый диапазон адресов IP, используя символ <b>*</b> (т.e. 201.15.55.*, или, даже, 158.*.*.*).";
$f_lang['ajouter_ip'] = "Добавить новый запрещенный IP";
$f_lang['gestion_ip'] = "Управление адресами IP";
$f_lang['sup_ip'] = "Удалить выбранные IP";
$f_lang['ok_aj_ip'] = "Спасибо, этот IP теперь запрещен";
$f_lang['verif_sup_ip'] = "Вы действительно хотите удалить выбранные IP ?";

/* smileys */
$f_lang['gestion_smileys'] = "Управление смайликами";
$f_lang['text_smileys'] = "<b>Смайлики позволяют посетителям показывать их настроение</b>. С помощью этого интерфейса Вы сможете легко менять их выбор :o)<br><br>Смайлики доступные на этой странице сохранены в папке \"images/smileys\".";
$f_lang['ajouter_smiley'] = "Добавить смайлик";
$f_lang['image_smiley'] = "Картинка";
$f_lang['car_replace'] = "Заменяемый код";
$f_lang['gestion_smileys'] = "Управление смайликами";
$f_lang['sup_smileys'] = "Удалить выбранные смайлики";
$f_lang['erreur_image'] = "Пожалуйста, выберите смайлик";
$f_lang['erreur_car'] = "Пожалуйста, выберите заменяемый код для выбранного смайлика";
$f_lang['ok_aj_smiley'] = "Спасибо, смайлик был успешно добавлен";
$f_lang['no_smiley'] = "Смайли должен быть GIF или JPEG изображение";
$f_lang['copy_impossible'] = "ERROR\\nНовозможно копирование в папку \\\"images/smileys\\\". Попробуйте изменить права доступа.";
$f_lang['car_replace_exist'] = "ERROR\\nТакой заменяемый код уже существует в базе данных.";
$f_lang['modif_smileys'] = "Обновить все смайлики";
$f_lang['verif_sup_smileys'] = "Действительно удалять выбранные смайлики ?";
$f_lang['merci_modif_smileys'] = "Спасибо, смайлики изменены.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Добавить администратора гостевой книги";
	$f_lang['add_admin_2'] = "Добавить администратора";
	$f_lang['ajouter_admin'] = "Добавить администратора";
	$f_lang['name_ajouter_admin'] = "добавить";
}
else{
	$f_lang['add_admin_texte'] = "Изменить администратора гостевой книги";
	$f_lang['add_admin_2'] = "Изменить администратора";
	$f_lang['ajouter_admin'] = "Сохранить";
	$f_lang['name_ajouter_admin'] = "изменить";
}

$f_lang['identif_connexion'] = "Логин";
$f_lang['passe_admin'] = "Пароль";
$f_lang['email_admin'] = "Email (иногда важно, чтобы администратор получал почтовое уведомление по Email о произведенной записи)";
$f_lang['admin_receive_email'] = "Вы хотите, чтобы администратор получал почтовое уведомление о новой записи в гостевой книге ?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;ему разрешено изменять скрипты ?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;изменять оформление ?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;управлять сообщениями ?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;управлять запрещенными словами ?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;упралять смайликами ?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;управлять другими администраторами ?";
$f_lang['erreur_name'] = "Пожалуйста, введите логин";
$f_lang['erreur_passe'] = "Пожалуйста, введите пароль";
$f_lang['erreur_email'] = "Пожалуйста, введите Email";
$f_lang['ok_aj_admin'] = "Спасибо, новый пользователь был успешно добавлен";
$f_lang['ok_modif_admin'] = "Спасибо, данные обновлены";
$f_lang['erreur_aj_admin'] = "ERROR\\nТакой пользователь уже существует";
$f_lang['revenir'] = "вернуться на предыдущую страницу";

/* gestion des admins */
$f_lang['gest_admin'] = "Управление администраторами";
$f_lang['sup_admin'] = "удалить";
$f_lang['login_admin'] = "Логин";
$f_lang['email_admin'] = "Email";
$f_lang['modif_admin'] = "изменить";
$f_lang['value_sup_admin'] = "Удалить выбранных администраторов";
$f_lang['verif_sup_admin'] = "Действительно будем удалять выбранных администраторов ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "СТРАНИЦА НЕДОСТУПНА";
$f_lang['erreur_auth'] = "Проверка не выполнена";
$f_lang['erreur_droits'] = "Вы не имеете прав доступа на эту страницу.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Средний рейтинг сайта по опросу посетителей :";
$f_lang['title_guestbook'] = "Моя гостевая книга";
$f_lang['note_super'] = " : фантастика !";
$f_lang['note_moyen'] = " : средне";
$f_lang['note_rate'] = " : отстой";
$f_lang['nom_pseudo_visiteur'] = "Имя или ник :";
$f_lang['email_visiteur'] = "Email :";
$f_lang['site_web_visiteur'] = "URL сайта:";
$f_lang['ville_pays_visiteur'] = "Город / Страна :";
$f_lang['note_visiteur'] = "Как вы находите наш сайт ?";
$f_lang['message_visiteur'] = "Ваше сообщение :";
$f_lang['ajouter_message_visiteur'] = "Добавить это сообщение";
$f_lang['erreur_add_nom'] = "Пожалуйста, введите имя";
$f_lang['erreur_add_message'] = "Пожалуйста, добавьте сообщение";
$f_lang['erreur_mail'] = "Такого Email не бывает !";
$f_lang['messages'] = "Сообщение";
$f_lang['messages_a'] = "на";
$f_lang['page'] = "Страница";
$f_lang['nbre_messages'] = "Количество сообщений";
$f_lang['message_le'] = "on";
$f_lang['message_note'] = "Рейтинг";
$f_lang['send_mail_to'] = "Послать Email";
$f_lang['go_home'] = "Посетить сайт";
$f_lang['precedente'] = "&lt;&lt; предыдущая";
$f_lang['suivante'] = "следующая &gt;&gt;";
$f_lang['no_message'] = "Сообщений нет.";
$f_lang['no_ip'] = "ВНИМАНИЕ\\nВаш IP был забанен, доступ в эту гостевую книгу Вам запрещен.";
$f_lang['ok_post'] = "Спасибо !  Ваше сообщение успешно добавлено.";
$f_lang['time_erreur'] = "ВНИМАНИЕ\\nВаше сообщение не может быть послано. Включено ограничение по частоте посылок.";
$f_lang['text_select_search'] = "Показывать только сообщения, содержащие следующие слова";
$f_lang['text_ok_search'] = "Ok";

/* mail envoyй */
$f_lang['mail_object'] = "[info] - Новое сообщение в Вашей гостевой книге - ";
$f_lang['mail_message'] = "Привет,\n\nНовое сообщение добавлено в Вашу гостевую книгу ";

/* gestion des messages */
$f_lang['gestion_mess'] = "Управление сообщениями";
$f_lang['selectionner_pages'] = "Выбрать";
$f_lang['messages_gest'] = "сообщение";
$f_lang['page_gest'] = "страница";
$f_lang['aller_en_page'] = "На страницу";
$f_lang['supprimer_gest'] = "удалить";
$f_lang['auteur_gest'] = "автор";
$f_lang['modifier_gest'] = "править";
$f_lang['supprimer_mess_selected'] = "Удалить отмеченные сообщения";
$f_lang['verif_sup_mess'] = "Действительно будем удалять ?";

/* modifier un message */
$f_lang['modif_mess'] = "Править сообщение";
$f_lang['message_modif'] = "Сообщение";
$f_lang['nom_modif'] = "Имя";
$f_lang['email_modif'] = "Email";
$f_lang['site_web_modif'] = "URL веб-сайта";
$f_lang['note_modif'] = "Текущий рейтинг";
$f_lang['ville_pays_modif'] = "Город / Страна";
$f_lang['date_modif'] = "Дата добавления";
$f_lang['ip_modif'] = "IP адрес";
$f_lang['ok_modif_mess'] = "Спасибо, изменения сохранены";

/* titre des pages */
$f_lang['title identification'] = "идентификация";
$f_lang['title administration'] = "администрирование";
$f_lang['title frame gauche'] = "левый фрейм";
$f_lang['title options'] = "настройки";
$f_lang['title skins'] = "скин";
$f_lang['title censure'] = "запрещенные слова";
$f_lang['title censure'] = "управление забанеными IP";
$f_lang['title smileys'] = "управление смайликами";
$f_lang['title add admin'] = "добавить администратора";
$f_lang['title gest admin'] = "управление администраторами гостевой книги";
$f_lang['title erreur'] = "ошибка";
$f_lang['title gestion mess'] = "управление сообщениями";
$f_lang['title modif mess'] = "редактировать сообщение";
$f_lang['title setup'] = "установка";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Невозможно соединиться с базой данных";
$f_lang['erreur_connexion'] = "Вы ввели неверные данные";
$f_lang['manque login'] = "Пожалуйста, наберите свой логин";
$f_lang['manque pass'] = "Пожалуйста, наберите свой пароль";
$f_lang['end session'] = "Ваш сеанс закончен";

/* add version 3.11 */
$f_lang['addSignature'] = "Написать сообщение";
$f_lang['seeMessages'] = "Прочитать посланное сообщение";
$f_lang['addMessageBlocAdd'] = "Добавить сообщение в гостевую книгу";

/* add version 3.2 */
$f_lang['version'] = "Версия";
$f_lang['new_version_dispo'] = "Доступно обновление";
$f_lang['version_courrante'] = "Текущая версия";
$f_lang['info_version'] = "Информация об установленной у Вас версии";
$f_lang['version_txt_ok'] = "Установленная у Вас версия ".$alex_livre_version.",<br>эта версия последняя, обновление не требуется.";
$f_lang['version_txt_erreur'] = "The version you have is ".$alex_livre_version.".<br/><b>An error occured during update verification.</b> You can verify new version on our website http://www.alexguestbook.net";
$f_lang['version_txt_update'] = "Установленная у Вас версия ".$alex_livre_version.", <b>доступна более новая</b>";
$f_lang['version_down'] = "Загрузить обновление";
$f_lang['help_update'] = "Помощь по обновлению";
$f_lang['spam'] = "Невозможно определить тип Вашего браузера. Вероятно, что сообщение пытается отослать робот. Если это не так, попробуйте воспользоваться другим браузером (MsIe, например).";
$f_lang['avis_spammeurs'] = "Заметка для сволочей-спаммеров";
$f_lang['txt_spammeurs'] = "<b>Эта гостевая книга защищена от спама</b>, Email и URL на странице декодированы таким образом, что для поисковых машин они становятся бесполезными (кроме того, весь спам все равно будет удален...)";
$f_lang['fermer'] = "Закрыть окно";
$f_lang['valider_messages'] = "Вы хотите проверять присланные сообщения перед их публикацией в Гостевой книге?";
$f_lang['valide'] = "Утвердить?";
$f_lang['mess_valide'] = "Сообщение проверено";
$f_lang['mess_invalide'] = "Это сообщение ожидает проверки";
$f_lang['info_mess_valide'] = "Проверить сообщение?";
$f_lang['ok_post_valid'] = "Спасибо! Ваше саообщение успешно сохранено, оно будет опубликовано после одобрения администратора.";
$f_lang['see_skin'] = "Предварительный просмотр выбранного скина";
$f_lang['maxi_car'] = "Максимальное количество знаков в сообщении (0 = без ограничений)";
$f_lang['il_reste'] = "Вы можете напечатать до";
$f_lang['caracteres'] = "больше знаков в своем сообщении";
$f_lang['sup_copyright'] = "Как убрать copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Name of the security codes table";
$f_lang['add_code_securite'] = "Требовать посетителей вводить защитный код перед отправкой сообщения?";
$f_lang['t_chem_dossier_fonts'] = "Полный URL-адрес директории шрифтов";
$f_lang['t_color_txt_code'] = "Hexadecimal-код цвета текста";
$f_lang['t_color_background_code'] = "Hexadecimal-код фона";
$f_lang['veuillez_taper_code'] = "Пожалуйста, скопируйте защитный код в строку справа";
$f_lang['a_quoi_ca_sert'] = "Зачем это?";
$f_lang['why_code'] = "Почему \"защитный код\" ?";
$f_lang['txt_why_code'] = "Эта процедура позволяет нам проверять, что сообщение посылается реальным человеком, а не спам-программой.<br><br><b>Коммерческий и прочий злонамеренный спам в этой гостевой книге запрещен!</b>";
$f_lang['erreur_code_securite'] = "Пожалуйста введите защитный код";
$f_lang['erreur_saisie_code_securite'] = "Защитный код, который Вы ввели неправилен, пожалуйста, повторите";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Автоматический ответ";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;редактировать автоматические ответы?";
$f_lang['text_reponse_auto'] = "<b>Здесь Вы можете написать текст автоматических ответов,</b> которые будут посылаться посетителям, оставившим сообщения в Вашей гостевой книге. Естесственно, если Вы активизировали эту функцию в настройках скрипта.<br><br>Для каждого языка можно написать свой ответ, а код [PSEUDO] будет заменен на имя посетителя, который оставил сообщение.";
$f_lang['name_table_rep_auto'] = "Имя таблицы MySQL, где будут содержаться автоматически отсылаемые ответы";
$f_lang['gestion_reponses'] = "Управление сообщениями";
$f_lang['msg_remerciement'] = "Спасибо за сообщение";
$f_lang['txt_remerciement'] = "Привет [PSEUDO],\n\nСпасибо, что оставили сообщение в нашей гостевой книге!";
$f_lang['ok_save_msg_rem'] = "Спасибо, автоматически отсылаемый ответ-благодарность сохранен.";
$f_lang['envoyer_remerciement'] = "Вы хотите, чтобы автоматически посылалась благодарность за сообщение?";
$f_lang['remerciement'] = "Благодарим";
$f_lang['titre_guestbook'] = "Заголовок";
$f_lang['text_titre_guestbook'] = "<b>Вы можете изменить заголовок гостевой книги</b> и написать различные заголовки для всех доступных языков.";
$f_lang['titre'] = "Заголовок";
$f_lang['parametrage'] = "Установки";
$f_lang['ok_save_titre'] = "Спасибо, заголовок сохранен.";
$f_lang['ville_visiteur'] = "Город :";
$f_lang['pays_visiteur'] = "Страна :";
$f_lang['flag'] = "Флаг";
$f_lang['ville_modif'] = "Город";
$f_lang['pays_modif'] = "Страна";
$f_lang['action'] = "Действие";
$f_lang['repondre'] = "Ответ";
$f_lang['votre_reponse'] = "Ваш ответ";
$f_lang['ok_reponse_mess'] = "Спасибо, Ваш ответ сохранен";
$f_lang['defaut_titre_rep'] = "Ответ администратора";
$f_lang['annuler'] = "Отмена";
$f_lang['num_appari'] = "Показать количество";
$f_lang['nb_max_smileys'] = "Показаны все смайлики, которые есть";
$f_lang['plus_smileys'] = "Показать больше смайликов";
$f_lang['liste_all_smilies'] = "Список смайликов";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>Эта функция позволит Вам показывать последнее сообщение, оставленное в гостевой книге</b> на другой странице по Вашему выбору.";
$f_lang['parametrage_modele'] = "Настройки шаблонов";
$f_lang['ok_save_boite'] = "Спасибо, Ваши настройки сохранены";
$f_lang['format_date_boite'] = "Формат даты (как в функции PHP <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a>)";
$f_lang['nbre_maxi_pseudo_boite'] = "Максимальное количество знаков, показываемых для имени";
$f_lang['nbre_maxi_message_boite'] = "Максимальное количество знаков, показываемых для сообщения";
$f_lang['modele_affichage_donnees'] = "Данные для шаблона";
$f_lang['url_dossier_livre_boite'] = "Полный URL папки Вашей гостевой книги";
$f_lang['url_livre_boite'] = "Полный URL первой страницы гостевой книги";
$f_lang['generation_code'] = "Создать Javascript-код";
$f_lang['nom_msg_afficher'] = "Количество показываемых сообщений на страницу";
$f_lang['generer_code'] = "Создание Javascript call code";
$f_lang['code_a_copier'] = "HTML-код, который надо вставить на Ваши страницы";
$f_lang['erreur_boite_java'] = "Пожалуйста, укажите правильное количество показываемых сообщений";
$f_lang['erreur_par_boite'] = "Ошибки в настройках: невозможно определить открывающий-закрывающий теги [BOUCLE] ... [/BOUCLE] в шаблоне.";
$f_lang['saut_ligne_msg_boite'] = "Сохранить строку переходов по страницам";
$f_lang['message_a'] = "на";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;управлять базой данных ?";
$f_lang['bdd'] = "Базы данных";
$f_lang['optimisation'] = "Оптимизация";
$f_lang['sauvegarde'] = "Сохранение";
$f_lang['restauration'] = "Восстановление";
$f_lang['optimisation_txt'] = "<b>Во время записи и удаления, таблицы Ваших баз данных накапливают неиспользованное пустое место.</b> Это отрицательно сказывается на общей производительности и, следовательно, веб-сайта в целом. Эта страница поможет Вам решить проблему с оптимизацией таблиц.";
$f_lang['liste_tables'] = "Список таблиц Вашей Базы данных";
$f_lang['lancer_optimisation'] = "Начать оптимизацию";
$f_lang['tables'] = "ТАБЛИЦЫ";
$f_lang['pertes'] = "ПОТЕРИ";
$f_lang['octets'] = "байт";
$f_lang['ok_optimise'] = "Спасибо, таблицы с потерями оптимизированы";
$f_lang['txt_sauvegarde'] = "<b>Если хотите, чтобы данные сохранялись долго и ничего не терялось, делайте регулярно резервное копирование Ваших данных.</b> Дисковые ошибки могут привести к полной потере данных. Вackup может быть полезен и для переноса гостевой книги на другой сервер... Ну что Вас уговаривать? Все знают, что backup - это хорошо!";
$f_lang['lancer_sauvegarde'] = "Начать сохранение базы";
$f_lang['lancer_restauration'] = "Начать восстановление";
$f_lang['txt_restauration'] = "<b>Если Вы ранее делали резервное копирование, то можете полностью восстановить Вашу базу данных гостевой книги.</b> Только выберите файл с сохраненными данными на жестком диске - и все!.<br><br><b><u>ВНИМАНИЕ</u></b>, если этот файл слишком большой (несколько мегабайт), процесс восстановления может быть невозможен из-за установок на сервере Вашего провайдера (set_time_limit() и максимальный размер загружаемых файлов).";
$f_lang['select_file'] = "Укажите файл с данными резервного копирования (backup) на Вашем жестком диске или на сервере (.ZIP or .SQL)";
$f_lang['confirm_restauration'] = "Вы подтверждаете, что хотите начать процесс восстановления данных и, таким образом, стереть все текущие данные?";
$f_lang['select_file_restau'] = "Пожалуйста, выберите файл на жестком диске";
$f_lang['erreur_ext_restau'] = "Расширение выбранного файла не .ZIP ou .SQL, восстановление невозможно.";
$f_lang['conseil_zip'] = "(Раскройте ZIP-файл на жестком диске, чтобы получить SQL-файл)";
$f_lang['erreur_ext_zip'] = "Модуль PHP_ZIP на сервере Вашего провайдера не подключен, поэтому восстановление из ZIP-файла невозможно. Пожалуйста, укажите .SQL-файл на Вашем жестком диске".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Ошибка чтения ZIP-архива, восстановление невозможно. Вы можете попытаться восстановить данные из .SQL-файла ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Выбранный SQL-файл, похоже, того... что угодно, но не @lex Guestbook-script файл (или текущей версии).  Не могу выполнить восстановление.";
$f_lang['restauration_terminee'] = "Спасибо! Восстановление должно было пройти успешно!";

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

// dйsactivation des smileys en un clic
$f_lang['admin_autoriser_smileys'] = "Would you like to allow the smileys ?";

// pour empкcher que le temps de session de la partie admin ne soit trop court
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

// code de sйcuritй : vйrification de la prйsence de la librairie GD2
$f_lang['admin_gd_non_activee'] = "<span class=\"texte_alerte\">You cannot use the security code option !<br/>\n Your server does not include the GD2 library and/or the options necessary for the security code to work</span>";

// lien vers l'admin et vers la page d'accueil
$f_lang['admin_lien_admin'] = "Would you like to post a link to the administration part at the bottom of the guestbook ?";
$f_lang['admin_lien_accueil'] = "Would you like to post a link back to your website homepage or to another one&nbsp;?";
$f_lang['admin_chemin_lien_accueil'] = "If you leave this field empty, the link will lead to this site homepage. You could alternatively enter the absolute path to the page of your choice (i.e. /folder1/page1.htm).";
$f_lang['admin_chemin_lien_accueil_erreur'] = "The path you entered isn't valid. Please use an absolute path (i.e. /mypage.php).";
$f_lang['texte_lien_accueil'] = "Back to the homepage";
$f_lang['texte_lien_admin'] = "Guestbook administration";

$f_lang['admin_retour_livre'] = "See the guestbook";

// symboles champs privйs/obligatoires sur le formulaire
// /!\ Attention, maximum 90 caractиres
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