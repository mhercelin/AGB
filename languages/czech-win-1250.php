<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2011    //
//         Hercelin Maxime (c) 2005 - 2011   //
//         http://www.alexguestbook.net/     //
//              all right reserved           //
//         Czech translation by Carlos       //
//                www.stachsw.cz             //
///////////////////////////////////////////////

/* Encodage utilisé dans le script */
$SCRIPT_ENCODAGE = "windows-1250";
$CONTENT_LANGUAGE = "cs";

/* setup */
$f_lang['install_auto'] = "Automatická instalace";
$f_lang['identi_base'] = "Database ID";
$f_lang['type_base'] = "Typ databáze";
$f_lang['user_base'] = "Uživatelské jméno";
$f_lang['pass_base'] = "Heslo";
$f_lang['nom_base'] = "Jméno databáze";
$f_lang['nom_table'] = "Jména tabulek";
$f_lang['name_table_sessions'] = "Sessions tabulka";
$f_lang['name_table_users'] = "Tabulka uživatelù";
$f_lang['name_table_messages'] = "Tabulka pro ukládání zpráv";
$f_lang['name_table_censure'] = "Tabulka zakázaných slov";
$f_lang['name_table_ip'] = "Tabulka blokovaných IP adres";
$f_lang['name_table_smileys'] = "Tabulka smajlíkù";
$f_lang['extension_script'] = "Pøípona skriptù";
$f_lang['choose_extension'] = "Vyberte pøíponu pro skripty<br>(doporuèujeme \"php\", jinak budete muset pøejmenovat všechny soubory na vámi zvolenou pøíponu)";
$f_lang['identi_acces_admin'] = "Vaše pøihlašovací údaje do administrátorského panelu";
$f_lang['login_admin'] = "Uživatelské jméno";
$f_lang['pass_admin'] = "Heslo";
$f_lang['verif_pass_admin'] = "Zopakujte heslo";
$f_lang['email_admin_setup'] = "Váš email";
$f_lang['installer'] = "Instalovat";
$f_lang['erreur_host'] = "Není vyplnìn údaj o databázovém serveru";
$f_lang['erreur_user'] = "Není vyplnìno uživatelské jméno k databázi";
$f_lang['erreur_nom_base'] = "Není vyplnìno jméno databáze";
$f_lang['erreur_log_admin'] = "Není vyplnìno Vaše uživatelské jméno pro pøístup do administrátorského rozhraní";
$f_lang['erreur_pass_admin'] = "Není vyplnìno Vaše heslo pro pøístup do administrátorského rozhraní";
$f_lang['erreur_pass_differents'] = "POZOR, zadaná hesla nejsou shodná.";
$f_lang['erreur_first_connexion'] = "<b>CHYBA, nezdaøilo se pøipojení k databázi.</b><br><br>zkontrolujte prosím pøihlašovací údaje : <a href=\"javascript:history.go(-1);\"><b>zpìt</b></a>.";
$f_lang['erreur_install'] = "Instalace se nezdaøila.";
$f_lang['ok_install'] = "Instalace byla úspìšná";
$f_lang['text_ok_install'] = "<b>Díky ! Instalace byla úspìšná.</b><br><br>Z bezpeènostních dùvodù dùraznì doporuèujeme smazat instalaèní právì použitý skript (\"setup.php\"), pokud tak neuèiníte, kdokoliv jej mùže použít k modifikaci/znièení vašich konfiguraèních souborù.<br><br>Nyní mùžete spravovat  Vaši návštìvní knihu kliknutím <a href=\"".$chem_absolu."admin/\" target=\"_blank0\"><b>zde</b></a> nebo<br> ji shlédnout pohledem návštìvníka <a href=\"".$chem_absolu."\" target=\"_blank1\"><b>zde</b></a>. Odkazy se otevírají v novém oknì.";

/* administration */
$f_lang['page protect'] = "Chránìná stránka";
$f_lang['login'] = "Uživ.jméno";
$f_lang['pass'] = "Heslo";
$f_lang['value identif'] = "Pøihlásit";

 /* menu */
$f_lang['options'] = "Možnosti";
$f_lang['script'] = "Globální nastavení";
$f_lang['graphismes'] = "Vzhled návš.knihy";
$f_lang['messages'] = "Zprávy";
$f_lang['gestion'] = "Úpravy";
$f_lang['censure_mots'] = "Cenzura slov";
$f_lang['smileys'] = "Smajlíci";
$f_lang['utilisateurs'] = "Administrátoøi";
$f_lang['ajouter'] = "Pøidat";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "O produktu...";
$f_lang['donner_avis'] = "Váš názor";
$f_lang['deconnexion'] = "odhlásit";

 /* options */
 $f_lang['options_livre'] = "Možnosti návštìvní knihy";
$f_lang['options_generales'] = "Souhrnné parametry";
$f_lang['langue'] = "Jazyk";
$f_lang['send_mail'] = "Chcete, aby administrátor e-mailem obdržel novì vložené zprávy ?";
$f_lang['avert_mail'] = "<br>(<b>pozor</b> : funkce mail() na vašem serveru je vypnuta, takže ani pøi zaškrtnuté volbì \"ano\" nemùžete dostávat e-mailová upozornìní)";
$f_lang['oui'] = "ano";
$f_lang['non'] = "ne";
$f_lang['options_modules'] = "Jednotlivá pole návštìvní knihy";
$f_lang['admin_champ_email'] = "Návštìvník mùže zadat e-mailovou adresu";
$f_lang['admin_champ_site'] = "Návštìvník mùže zadat adresu jeho www stránek";
$f_lang['admin_champ_pays'] = "Návštìvník mùže zadat mìsto a zemi";
$f_lang['admin_champ_note'] = "Návštìvník mùže hodnotit vaše stránky";
$f_lang['admin_ok_aff_moteur'] = "Zpøístupnit vyhledávaèùm";
$f_lang['options_tech'] = "Technické parametry";
$f_lang['url_recharger'] = "Stránka pro aktualizace návštìvní knihy";
$f_lang['url_variables'] = "Promìnná používaná jako parametr (zadejte # místo $ v názvu promìnné)";
$f_lang['temps_session'] = "Doba platnosti session pro administrátorské rozhraní (v sekundách)";
$f_lang['skin_to_use'] = "Použít vzhled";
$f_lang['enregistrer'] = "Uložit";
$f_lang['nb_pages'] = "Poèet zpráv zobrazených na jedné stránce návšt.knihy";
$f_lang['merci_options'] = "Díky, parametry byly aktualizovány";
$f_lang['erreur_options'] = "CHYBA\\nParametry se nepodaøilo uložit, nebylo možno zapisovat do souboru \\\"config.".$alex_livre_ext."\\\", pro zmìnu nastavení editujte tento soubor pomocí textového editoru.";
$f_lang['temps_ip_post'] = "Poèet minut, po kterých mùže návštìvník vložit další zprávu";
$f_lang['minutes'] = "minut";
$f_lang['cut_mots'] = "Max.délka slova - delší slova budou rozdìlena";
$f_lang['format_date'] = "Formát data";

/* skins */
$f_lang['ok_ajouter'] = "Díky, vzhled byl úspìšnì vytvoøen";
$f_lang['erreur_ajouter'] = "CHYBA\\nVzhled se nepodaøilo vytvoøit, vytvoøte jej ruènì";
$f_lang['text1_2'] = "Vzhled byl uložen do složky &quot;templates/skins/&quot;. Toto rozhraní vám umožòuje jej jednoduše mìnit, ale mùžete tak èinit i ruènì editací html souborù.";
$f_lang['text2'] = "<b>Pokud chcete také zmìnit vhled masky administrátorského rozhraní</b> modifikujte prosím ruènì soubory ve složce &quot;templates/admin/&quot;.";
$f_lang['text_aj_skin'] = "Pøidat vzhled";
$f_lang['ajouter'] = "Pøidat";
$f_lang['gestion_skins'] = "Správa vzhledu";
$f_lang['vous_editez'] = "Právì modifikujete tento vzhled :";
$f_lang['style'] = "soubor stylù";
$f_lang['ajouter_message'] = "sekce: pøidat zprávu";
$f_lang['nbre_messages_page'] = "sekce: poèet zpráv/stran";
$f_lang['pages_dispos'] = "sekce: seznam stránek / další strana - pøedchozí strana";
$f_lang['texte_corps_messages'] = "tìlo zprávy";
$f_lang['espacement'] = "mezera mezi 2 zprávami";
$f_lang['text_assembly'] = "soubor skládající pøedchozí sekce";
$f_lang['ok_edit_skin'] = "Díky, vzhled byl aktualizován";
$f_lang['erreur_edit_skin'] = "CHYBA\\nJeden nebo více souborù vzhledu nebylo možno aktualizovat. Upravte prosím tyto soubory ruènì.";
$f_lang['ajouter'] = "Pøidat";
$f_lang['supprimer'] = "Smazat";
$f_lang['text_sup_skin'] = "Smazat vzhled";
$f_lang['ok_supprimer'] = "Díky, vzhled byl smazán.";
$f_lang['erreur_supprimer'] = "CHYBA\\nJeden nebo více souborù vzhledu se nepodaøilo smazat, musíte je smazat ruènì.";

/* page des mots censurés */
$f_lang['aj_mot'] = "Pøidat slovo "; 
$f_lang['mot_interdit'] = "Zakázané slovo :";
$f_lang['remplacer_par'] = "Náhradit slovem :";
$f_lang['gestion_censure'] = "Správa zakázaných slov";
$f_lang['mot'] = "slovo";
$f_lang['remplace_by'] = "nahrazeno slovem";
$f_lang['liste_jour'] = "Aktualizovat seznam";
$f_lang['sup_mots'] = "Smazat vybraná slova";
$f_lang['erreur_aj_censure1'] = "Zadejte prosím slovo, které se má cenzurovat";
$f_lang['erreur_aj_censure2'] = "Zadejte prosím slovo, které má být použito jako náhrada";
$f_lang['ok_aj_mot'] = "Díky, zakázané slovo bylo pøidáno.";
$f_lang['verif_sup'] = "Chcete opravdu definitivnì smazat vybraná slova ?";
$f_lang['merci_modif'] = "Díky, zmìny byly uloženy";

/* bannir des ip */
$f_lang['bannir_ip'] = "Zakázané IP";
$f_lang['text_ip1'] = "Každý návštìvník má pøidìlenu specifickou èíselnou IP adresu (napø. 201.10.25.14). Tato adrese je pøidìlována poskytovatelem internetu pøi pøipojení a mìní se, teoreticky, kdykoliv se návštìvník znovu pøipojí k internetu.";
$f_lang['text_ip2'] = "Pokud chcete <b>zakázat návštìvníkovi vkládat zprávu do vaší návštìvní knihy</b>, mùžete sem zadat jeho IP adreseu. Mùžete také zakázat rozsah IP adres použitím zástupného symbolu * (napø. 201.15.55.*, nebo tøeba 158.*.*.*).";
$f_lang['ajouter_ip'] = "Pøidat zakázanou IP adresu";
$f_lang['gestion_ip'] = "Správa IP adres";
$f_lang['sup_ip'] = "Odebrat vyprané IP adresy";
$f_lang['ok_aj_ip'] = "Díky, tato IP adresa je nyní zakázána";
$f_lang['verif_sup_ip'] = "Opravdu chcete smazat vyprané IP adresy ?";

/* smileys */
$f_lang['gestion_smileys'] = "Správa smajlíkù";
$f_lang['text_smileys'] = "<b>Smajlíci dovolují vyjádøit návštìvníkovi jeho emoce</b> pøi zápisu. V tomto rozhraní mùžete jednoduše pøidávat èi mazat smajlíky tak, aby mìl návštìvník z èeho vybírat :o)<br><br>Smajlíci z této stránky jsou uloženy ve složce \"images/smileys\".";
$f_lang['ajouter_smiley'] = "Pøidat smajlíka";
$f_lang['image_smiley'] = "Obrázek";
$f_lang['car_replace'] = "Odpovídající kód";
$f_lang['gestion_smileys'] = "Správa smajlíkù";
$f_lang['sup_smileys'] = "Smazat vybrané smajlíky";
$f_lang['erreur_image'] = "Vyberte prosím smajlíka";
$f_lang['erreur_car'] = "Vyberte prosím odpovídající kód pro smajlíka";
$f_lang['ok_aj_smiley'] = "Díky, smajlík byl úspìšnì pøidán";
$f_lang['no_smiley'] = "Smajlíci mohou být pouze ve formátu GIF nebo JPEG";
$f_lang['copy_impossible'] = "CHYBA\\nSmajlíka se nepodaøilo nahrát do složky \\\"images/smileys\\\".";
$f_lang['car_replace_exist'] = "CHYBA\\nTento kód již v databázi existuje.";
$f_lang['modif_smileys'] = "Aktualizovat všechny smajlíky";
$f_lang['verif_sup_smileys'] = "Skuteènì chcete smazat vybrané smajlíky ?";
$f_lang['merci_modif_smileys'] = "Díky, smajlíci byli upraveni.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Pøidat administrátora návštìvní knihy";
	$f_lang['add_admin_2'] = "Pøidat administrátora";
	$f_lang['ajouter_admin'] = "Pøidat";
	$f_lang['name_ajouter_admin'] = "pøidat";
}
else{
	$f_lang['add_admin_texte'] = "Úprava administrátora návšt.knihy";
	$f_lang['add_admin_2'] = "Upravit administrátora";
	$f_lang['ajouter_admin'] = "Uložit";
	$f_lang['name_ajouter_admin'] = "upravit";
}

$f_lang['identif_connexion'] = "Pøihlašovací jméno";
$f_lang['passe_admin'] = "Heslo";
$f_lang['email_admin'] = "E-mail (dùležité v pøípadì, kdy admin má dostávat e-maily po vložení zprávy)";
$f_lang['admin_receive_email'] = "Chcete, aby admin dostábval e-mail po každé vložené zprávì ?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;mùže mìnit parametry skriptù ?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;mùže mìnit vzhled ?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravovat vložené zprávy ?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravovat zakázaná slova ?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravovat smajlíky ?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravovat úèty dalších administrátorù ?";
$f_lang['erreur_name'] = "Zadejte prosím uživatelské jméno";
$f_lang['erreur_passe'] = "Zadejte prosím heslo";
$f_lang['erreur_email'] = "Zadejte prosím e-mail";
$f_lang['ok_aj_admin'] = "Díky, úèet byl úspìšnì vytvoøen";
$f_lang['ok_modif_admin'] = "Díky, úèet byl aktualizován";
$f_lang['erreur_aj_admin'] = "CHYBA\\nToto uživatelské jméno již existuje";
$f_lang['revenir'] = "Zpìt na pøedchozí stránku";

/* gestion des admins */
$f_lang['gest_admin'] = "Správa administrátorù";
$f_lang['sup_admin'] = "odebrat";
$f_lang['login_admin'] = "pøihlašovací jméno";
$f_lang['email_admin'] = "E-mail";
$f_lang['modif_admin'] = "zmìnit";
$f_lang['value_sup_admin'] = "Odebrat vybrané administrátory";
$f_lang['verif_sup_admin'] = "Skuteènì chcete odebrat vybrané administrátory ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "STRÁNKA NENÍ DOSTUPNÁ";
$f_lang['erreur_auth'] = "Chyba pøi pøihlášení";
$f_lang['erreur_droits'] = "Nemáte odpovídající práva pro pøístup na tuto stránku.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Prùmìrná známka udìlená návštìvníky tìmto stránkám :";
$f_lang['title_guestbook'] = "Naše návštìvní kniha";
$f_lang['note_super'] = " : super !";
$f_lang['note_moyen'] = " : prùmìr";
$f_lang['note_rate'] = " : propadák";
$f_lang['nom_pseudo_visiteur'] = "Jméno nebo pøezdívka :";
$f_lang['email_visiteur'] = "E-mail :";
$f_lang['site_web_visiteur'] = "WWW adresa";
$f_lang['ville_pays_visiteur'] = "Mìsto / Zemì :";
$f_lang['note_visiteur'] = "Vaše hodnocení :";
$f_lang['message_visiteur'] = "Vaše zpráva :";
$f_lang['ajouter_message_visiteur'] = "Vložit tuto zprávu";
$f_lang['erreur_add_nom'] = "Zadejte prosím Vaše jméno";
$f_lang['erreur_add_message'] = "Zadejte prosím Vaši zprávu";
$f_lang['erreur_mail'] = "Vaše e-mailová adresa není správná";
$f_lang['messages'] = "Zprávy";
$f_lang['messages_a'] = "až";
$f_lang['page'] = "Stránka";
$f_lang['nbre_messages'] = "Poèet zpráv";
$f_lang['message_le'] = "dne";
$f_lang['message_note'] = "Hodnocení";
$f_lang['send_mail_to'] = "Poslat e-mail";
$f_lang['go_home'] = "Navštivte stránky";
$f_lang['precedente'] = "&lt;&lt; pøedchozí";
$f_lang['suivante'] = "další &gt;&gt;";
$f_lang['no_message'] = "Nejsou tu žádné zprávy.";
$f_lang['no_ip'] = "POZOR\\nVaše IP adresa je zakázána, nemáte právo vkládat zprávy do této návštìvní knihy.";
$f_lang['ok_post'] = "Díky !  Vaše zpráva byla úspìšnì vložena.";
$f_lang['time_erreur'] = "POZOR\\nVaše zpráva nemohla být vložena, vkládal/a jste zprávu pøed chvilkou.";
$f_lang['text_select_search'] = "Ukázat jenom zprávy obsahující následující slova";
$f_lang['text_ok_search'] = "Ok";

/* mail envoyé */
$f_lang['mail_object'] = "[INFO] - Nova zprava ve vasi navstevni knize - ";
$f_lang['mail_message'] = "Dobrý den,\n\ndo Vaší návštìvní knihy byla vložena nová zpráva ";

/* gestion des messages */
$f_lang['gestion_mess'] = "Správa zpráv :)";
$f_lang['selectionner_pages'] = "Vybrat";
$f_lang['messages_gest'] = "zpráva";
$f_lang['page_gest'] = "stránka";
$f_lang['aller_en_page'] = "Jdi na stranu";
$f_lang['supprimer_gest'] = "smazat";
$f_lang['auteur_gest'] = "author";
$f_lang['modifier_gest'] = "opravit";
$f_lang['supprimer_mess_selected'] = "Smazat vybrané zprávy";
$f_lang['verif_sup_mess'] = "Skuteènì chcete smazat vybrané zprávy ?";

/* modifier un message */
$f_lang['modif_mess'] = "Opravit zprávu";
$f_lang['message_modif'] = "Zpráva";
$f_lang['nom_modif'] = "Jméno";
$f_lang['email_modif'] = "E-mail";
$f_lang['site_web_modif'] = "WWW stránky";
$f_lang['note_modif'] = "Hodnocení Vašich stránek";
$f_lang['ville_pays_modif'] = "Mìsto / Zemì";
$f_lang['date_modif'] = "Datum vložení";
$f_lang['ip_modif'] = "IP adresa";
$f_lang['ok_modif_mess'] = "Díky, zmìny byly uloženy";

/* titre des pages */
$f_lang['title identification'] = "identifikace";
$f_lang['title administration'] = "administrace";
$f_lang['title frame gauche'] = "levý rám";
$f_lang['title options'] = "volby";
$f_lang['title skins'] = "vzhled";
$f_lang['title censure'] = "zakázaných slov";
$f_lang['title censure'] = "správa zakázaných IP";
$f_lang['title smileys'] = "správa smajlíkù";
$f_lang['title add admin'] = "pøidání administrátora";
$f_lang['title gest admin'] = "správa administrátorù";
$f_lang['title erreur'] = "chyba";
$f_lang['title gestion mess'] = "správa zpráv";
$f_lang['title modif mess'] = "modifikace zprávy";
$f_lang['title setup'] = "instalace";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Selhalo pøipojení k databázi";
$f_lang['erreur_connexion'] = "Vaše pøihlašovací údaje nejsou správné";
$f_lang['manque login'] = "Zadejte prosím Vaše pøihlašovací jméno";
$f_lang['manque pass'] = "Zadejte prosím Vaše heslo";
$f_lang['end session'] = "Vaše relace byla ukonèena";

/* add version 3.11 */
$f_lang['addSignature'] = "Vložit novou zprávu";
$f_lang['seeMessages'] = "Èíst zprávy";
$f_lang['addMessageBlocAdd'] = "Pøidat zprávu do návštìvní knihy";

/* add version 3.2 */
$f_lang['version'] = "Verze";
$f_lang['new_version_dispo'] = "Je k dispozici nová verze Návštìvní knihy";
$f_lang['version_courrante'] = "Stávající verze skriptù";
$f_lang['info_version'] = "Informace o Vaší verzi";
$f_lang['version_txt_ok'] = "Vaše verze je ".$alex_livre_version.",<br>tato verze je nejnovìjší, netøeba aktualizovat.";
$f_lang['version_txt_update'] = "Vaše verze je ".$alex_livre_version.", <b>k dispozici je novìjší verze</b>";
$f_lang['version_down'] = "Stáhnout novou verzi";
$f_lang['help_update'] = "Pomoc pøi aktualizaci";
$f_lang['spam'] = "USER AGENT Vašeho prohlížeèe nebyl identifikován, vypadá to, jako by se nìjaký robot pokoušel automatizovanì vložit zprávu. Pokud tomu tak není, zkuste to prosím z jiného prohlížeèe.";
$f_lang['avis_spammeurs'] = "Poznámka pro spammery";
$f_lang['txt_spammeurs'] = "<b>Tato návštìvní kniha je chránìna pøed spammery</b>, E-mailové a www adresy jsou ve zdrojovém kódu stránek zašifrovány, proto je naprostosto zbyteèné vkládat komerèní odkazy, nebudou vidìt ve vyhledávaèích (navíc vaše zpráva bude stejnì vymazána...)";
$f_lang['fermer'] = "Zavøít toto okno";
$f_lang['valider_messages'] = "Chcete nejprve prohlédnout vložené zprávy pøed jejich zveøejnìním ?";
$f_lang['valide'] = "Schváleno ?";
$f_lang['mess_valide'] = "Tato zpráva byla schválena";
$f_lang['mess_invalide'] = "Tato zpráva èeká na schválení";
$f_lang['info_mess_valide'] = "Schválená zpráva ?";
$f_lang['ok_post_valid'] = "Díky ! Vaše zpráva byla úspìšnì vložena, bude zveøejnìna, jakmile ji webnmaster schválí.";
$f_lang['see_skin'] = "Zobrazit návštìvní knihu v tomto vzhledu";
$f_lang['maxi_car'] = "Maximálnì povolený poèet znakù ve zprávì (0 = bez omezení)";
$f_lang['il_reste'] = "Do Vaší zprávy mùžete napsat ještì";
$f_lang['caracteres'] = "znakù";
$f_lang['sup_copyright'] = "Smazat copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Jméno tabulky bezpeènostních kódù";
$f_lang['add_code_securite'] = "Chcete, aby uživatel musel pøed odesláním zprávy zapsat bezpeènostní kód?";
$f_lang['t_chem_dossier_fonts'] = "Kompletní cesta (URL) ke složce s fonty";
$f_lang['t_color_txt_code'] = "Hexadecimální kód barvy textu";
$f_lang['t_color_background_code'] = "Hexadecimální kód barvy pozadí";
$f_lang['veuillez_taper_code'] = "Opištì prosím tento bezpeènostní kód do políèka vpravo";
$f_lang['a_quoi_ca_sert'] = "A proèpak?";
$f_lang['why_code'] = "Proè \"bezpeènostní kód\" ?";
$f_lang['txt_why_code'] = "Umožòuje zkontrolovat, zda zpráva byla vložena skuteèným živým návštìvníkem a ne automaticky pracujícím softwarem.<br><br><b>Komerèní zprávy a spamm jsou zde zakázány!</b>";
$f_lang['erreur_code_securite'] = "Zadejte prosím bezpeènostní kód";
$f_lang['erreur_saisie_code_securite'] = "Vámi zadaný bezpeènostní kód není správný, zkuste to, prosím, znovu";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Automatická odpovìï";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;správa automatické odpovìdi?";
$f_lang['text_reponse_auto'] = "<b>Zde mùžete zadat text automatické odpovìdi</b> odesílané návštìvníkovi, jenž vloží zprávu do Vaší návštìvní knihy. Tato zpráva bude odeslána, pokud tuto funkci aktuvujete v parametrech.<br><br>Každý jazyk má svou vlastní odpovìï a kód [PSEUDO] bude nahrazen jménem nebo pøezdívkou návštìvníka, která zprávu vložil.";
$f_lang['name_table_rep_auto'] = "Jméno tabulky, která obsahuje automatické odpovìdi";
$f_lang['gestion_reponses'] = "Správa zpráv";
$f_lang['msg_remerciement'] = "Díky za zprávu";
$f_lang['txt_remerciement'] = "Dobrý den, [PSEUDO],\n\ndìkujeme za zprávu v naší návštìvní knize!";
$f_lang['ok_save_msg_rem'] = "Díky, automatická odpovìï byla uložena.";
$f_lang['envoyer_remerciement'] = "Chcete, aby bylo automaticky odesláno podìkování?";
$f_lang['remerciement'] = "Díky";
$f_lang['titre_guestbook'] = "Titulek návštìvní knihy";
$f_lang['text_titre_guestbook'] = "<b>Mùžete zmìnit titulek návštìvní knihy</b> a napsat svùj vlastní pro každý z jazykù.";
$f_lang['titre'] = "Titulek";
$f_lang['parametrage'] = "Nastavení";
$f_lang['ok_save_titre'] = "Díky, titulek byl uložen.";
$f_lang['ville_visiteur'] = "Mìsto :";
$f_lang['pays_visiteur'] = "Zemì :";
$f_lang['flag'] = "Vlajka";
$f_lang['ville_modif'] = "Mìsto";
$f_lang['pays_modif'] = "Zemì";
$f_lang['action'] = "Akce";
$f_lang['repondre'] = "Odpovìï";
$f_lang['votre_reponse'] = "Vaše odpovìï";
$f_lang['ok_reponse_mess'] = "Díky, Vaše odpovìï byla uložena";
$f_lang['defaut_titre_rep'] = "Odpovìï správce";
$f_lang['annuler'] = "Zruš";
$f_lang['num_appari'] = "Poèet instalovaných smajlíkù";
$f_lang['nb_max_smileys'] = "Maximální poèet zobrazovaných smajlíkù";
$f_lang['plus_smileys'] = "Ukaž další smajlíky";
$f_lang['liste_all_smilies'] = "Seznam všech smajlíkù";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>Tato funkce Vám umožòuje zobrazit poslední zprávy vložené do Vaší návštìvní knihy</b> na stránce dle Vaší volby.";
$f_lang['parametrage_modele'] = "Nastavení masky";
$f_lang['ok_save_boite'] = "Díky, Vaše nastavení bylo uloženo";
$f_lang['format_date_boite'] = "Formát data (odpovídá <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>funkci date()</b></a> jazyka PHP)";
$f_lang['nbre_maxi_pseudo_boite'] = "Maximální poèet znakù zobrazujících se ze jména nebo pøezdívky";
$f_lang['nbre_maxi_message_boite'] = "Maximální poèet znakù zobrazovaných ze zprávy";
$f_lang['modele_affichage_donnees'] = "Maska";
$f_lang['url_dossier_livre_boite'] = "Doplòte adresu URL ke složce s návštìvní knihou";
$f_lang['url_livre_boite'] = "Doplòte adresu URL úvodní stránky návštìvní knihy";
$f_lang['generation_code'] = "Vytvoøení javascriptu";
$f_lang['nom_msg_afficher'] = "Poèet zobrazovaných zpráv";
$f_lang['generer_code'] = "Vytvoøit javascriptový kód";
$f_lang['code_a_copier'] = "HTML kód, který musí být zkopírován do vybrané stránky";
$f_lang['erreur_boite_java'] = "Zadejte prosím platnýý poèet zobrazovaných zpráv";
$f_lang['erreur_par_boite'] = "Chyba v konfiguraci, nemohu ve vaší masce najít sekci [BOUCLE] ... [/BOUCLE].";
$f_lang['saut_ligne_msg_boite'] = "Zachovat øádkování ve zprávách";
$f_lang['message_a'] = "v";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;manage databázi ?";
$f_lang['bdd'] = "Database";
$f_lang['optimisation'] = "Optimalizace";
$f_lang['sauvegarde'] = "Zálohování";
$f_lang['restauration'] = "Obnovení";
$f_lang['optimisation_txt'] = "<b>Po zápisech a mazání zùstalo v tabulkách databáze nevyužité místo.</b> To není vhodné z pohledu rychlosti odezvy a výkonu databáze a tím i Vašich stránek. Tato funkce umožòuje øešit problém optimalizací tabulek.";
$f_lang['liste_tables'] = "Seznam tabulek ve Vaší databázi";
$f_lang['lancer_optimisation'] = "Spouštím optimalizaci";
$f_lang['tables'] = "TABULKY";
$f_lang['pertes'] = "NAVÍC";
$f_lang['octets'] = "bytù";
$f_lang['ok_optimise'] = "Díky, optimalizace tabulek byla provedena";
$f_lang['txt_sauvegarde'] = "<b>Pokud chcete archivovat zprávy delší èas, dùraznì doporuèujeme pravidelné zálohování dat.</b> Problém s hardwarem problém mùže zlikvidovat všechna Vaše data. Záloha mùže být také užiteèná pøi pøechodu na jiný server.";
$f_lang['lancer_sauvegarde'] = "Spustit zálohování";
$f_lang['lancer_restauration'] = "Spustit obnovu";
$f_lang['txt_restauration'] = "<b>Pokud máte k dispozici zálohu, mùžete kompletnì obnovit data Vaší návštìvní knihy</b> Prostì jenom na Vašem disku vyberte odpovídající soubor se zálohou .<br><br><b><u>POZOR</u></b>, pokud je tento soubor pøíliš veliký (nìkolik megabytù), mùže pøi obnovì dojít k problému díky nastavení Vašeho serveru (èasový limit bìhu skriptu nebo maximálnì povolená velikost nahrávaného souboru).";
$f_lang['select_file'] = "Vyberte soubor se zálohou na Vašem disku (.ZIP nebo .SQL)";
$f_lang['confirm_restauration'] = "Potvrzujete spuštìní obnovy dat ? Aktuální data budou smazána!";
$f_lang['select_file_restau'] = "Vyberte prosím soubor na Vašem disku";
$f_lang['erreur_ext_restau'] = "Vybraný soubor nemá pøíponu .ZIP nebo .SQL, obnova dat nemùže být spuštìna.";
$f_lang['conseil_zip'] = "(Rozbalte ZIP soubor na Váš pevný disk k získání souboru SQL)";
$f_lang['erreur_ext_zip'] = "Extension PHP_ZIP není na serveru dostupná, obnova dat ze ZIP souboru není možná. Vyberte prosím .SQL soubor na Vašem disku".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Chyba pøi ètení Vašeho ZIP archivu, nelze spustit obnovu dat.  Zkuste to prostøednictvím .SQL souboru ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Vybraný soubor SQL neobsahuje odpovídající pøíkazy pro obnovu dat návštìvní knihy \"@lex Guestbook\".  Obnova nemùže být spuštìna.";
$f_lang['restauration_terminee'] = "Díky ! Obnova dat byla úspìšnì provedena !";

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
?>