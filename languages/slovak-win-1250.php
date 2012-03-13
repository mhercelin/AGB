<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2011    //
//         Hercelin Maxime (c) 2005 - 2011   //
//         http://www.alexguestbook.net/     //
//              all right reserved           //
///////////////////////////////////////////////

/* Encodage utilisé dans le script */
$SCRIPT_ENCODAGE = "windows-1250";
$CONTENT_LANGUAGE = "sk";

/* setup */
$f_lang['install_auto'] = "Automatická inštalácia";
$f_lang['identi_base'] = "Databáza ID";
$f_lang['type_base'] = "Typ databázy";
$f_lang['user_base'] = "Uivate¾ské meno";
$f_lang['pass_base'] = "Heslo";
$f_lang['nom_base'] = "Názov databázy";
$f_lang['nom_table'] = "Názvy tabuliek";
$f_lang['name_table_sessions'] = "Sessions tabu¾ka";
$f_lang['name_table_users'] = "Tabulka uívate¾ov";
$f_lang['name_table_messages'] = "Tabu¾ka pre ukladanie správ";
$f_lang['name_table_censure'] = "Tabu¾ka zakázanıch slov";
$f_lang['name_table_ip'] = "Tabu¾ka blokovanıch IP adres";
$f_lang['name_table_smileys'] = "Tabu¾ka smajlíkov";
$f_lang['extension_script'] = "Prípona skriptov";
$f_lang['choose_extension'] = "Vyberte príponu pre skripty<br>(odporúèame \"php\", inak budete musie premenova všetky súbory na vámi zvolenú príponu)";
$f_lang['identi_acces_admin'] = "Vaše prihlasovacie údaje do administrátorského panelu";
$f_lang['login_admin'] = "Uivate¾ské meno";
$f_lang['pass_admin'] = "Heslo";
$f_lang['verif_pass_admin'] = "Zopakujte heslo";
$f_lang['email_admin_setup'] = "Váš email";
$f_lang['installer'] = "Inštalova";
$f_lang['erreur_host'] = "Nie je vyplnenı údaj o databázovom serveri";
$f_lang['erreur_user'] = "Nie je vyplnené uivate¾ské meno k databáze";
$f_lang['erreur_nom_base'] = "Nie je vyplnené meno databázy";
$f_lang['erreur_log_admin'] = "Nie je vyplnené Vaše uivate¾ské meno pre prístup do administrátorského rozhrania";
$f_lang['erreur_pass_admin'] = "Nie je vyplnené Vaše heslo pre prístup do administrátorského rozhrania";
$f_lang['erreur_pass_differents'] = "POZOR, zadané hesla sa nezhodujú.";
$f_lang['erreur_first_connexion'] = "<b>CHYBA, nepodarilo sa pripoji k databáze.</b><br><br>skontrolujte prosím prihlasovacie údaje : <a href=\"javascript:history.go(-1);\"><b>naspä</b></a>.";
$f_lang['erreur_install'] = "Inštalácia sa nepodarila.";
$f_lang['ok_install'] = "Inštalácia bola úspešná";
$f_lang['text_ok_install'] = "<b>Vïaka ! Inštalácia bola úspešná.</b><br><br>Z bezpeènostnıch dôvodov dôrazne odporúèame zmaza inštalaènı práve pouitı skript (\"setup.php\"), keï ho neodstránite, tak ktoko¾vek ho môe poui k modifikácií/znièeniu vašich konfiguraènıch súborov.<br><br>Teraz môete spravova Vašu návštevnú knihu kliknutím <a href=\"".$chem_absolu."admin/\" target=\"_blank0\"><b>tu</b></a> alebo<br> ju pozrie poh¾adom návštevníka <a href=\"".$chem_absolu."\" target=\"_blank1\"><b>tu</b></a>. Odkazy sa otvárajú v novom okne.";

/* administration */
$f_lang['page protect'] = "Chránená stránka";
$f_lang['login'] = "Uiv. meno";
$f_lang['pass'] = "Heslo";
$f_lang['value identif'] = "Prihlási";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "Monosti";
$f_lang['script'] = "Globálne nastavenia";
$f_lang['graphismes'] = "Vzh¾ad návš. knihy";
$f_lang['messages'] = "Správy";
$f_lang['gestion'] = "Úpravy";
$f_lang['censure_mots'] = "Cenzúra slov";
$f_lang['smileys'] = "Smajlíky";
$f_lang['utilisateurs'] = "Administrátori";
$f_lang['ajouter'] = "Prida";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "O produkte...";
$f_lang['donner_avis'] = "Váš názor";
$f_lang['deconnexion'] = "odhlási";

 /* options */
 $f_lang['options_livre'] = "Nastavenia knihy hostí";
$f_lang['options_generales'] = "Súhrnné parametre";
$f_lang['langue'] = "Jazyk";
$f_lang['send_mail'] = "Chcete, aby administrátor e-mailom obdral nové vloené správy ?";
$f_lang['avert_mail'] = "<br>(<b>pozor</b> : funkcia mail() na vašom serveri je vypnutá, take ani pri zaškrtnutej vo¾be \"áno\" nemôete dostáva e-mailové upozornenia)";
$f_lang['oui'] = "áno";
$f_lang['non'] = "nie";
$f_lang['options_modules'] = "Jednotlivé polia knihy hostí";
$f_lang['admin_champ_email'] = "Návštevník môe zada e-mailovú adresu";
$f_lang['admin_champ_site'] = "Návštevník môe zada adresu jeho www stránok";
$f_lang['admin_champ_pays'] = "Návštevník môe zada mesto a krajinu";
$f_lang['admin_champ_note'] = "Návštevník môe hodnoti vaše stránky";
$f_lang['admin_ok_aff_moteur'] = "Sprístupni vyh¾adávaèom";
$f_lang['options_tech'] = "Technické parametre";
$f_lang['url_recharger'] = "Stránka pre aktualizáciu návštevnej knihy";
$f_lang['url_variables'] = "Premenná pouívaná ako parameter (zadajte # namiesto $ v názve premennej)";
$f_lang['temps_session'] = "Doba platnosti session pre administrátorské rozhranie (v sekundách)";
$f_lang['skin_to_use'] = "Pouitı vzh¾ad";
$f_lang['enregistrer'] = "Uloi";
$f_lang['nb_pages'] = "Poèet správ zobrazenıch na jednej stránke v knihe hostí";
$f_lang['merci_options'] = "Vïaka, parametre boli aktualizované";
$f_lang['erreur_options'] = "CHYBA\\nParametre sa nepodarilo uloi, nebolo moné zapisova do súboru \\\"config.".$alex_livre_ext."\\\", pre zmenu nastavení editujte tento súbor pomocou textového editora.";
$f_lang['temps_ip_post'] = "Poèet minút, po ktorıch môe návštevník vloi ïalšiu správu";
$f_lang['minutes'] = "minút";
$f_lang['cut_mots'] = "Max. dåka slova - dlhšie slová budú rozdelené";
$f_lang['format_date'] = "Formát data";

/* skins */
$f_lang['ok_ajouter'] = "Vïaka, vzh¾ad bol úspešne vytvorenı";
$f_lang['erreur_ajouter'] = "CHYBA\\nVzh¾ad sa nepodarilo vytvori, vytvorte ho ruène";
$f_lang['text1_2'] = "Vzh¾ad bol uloenı do zloky &quot;templates/skins/&quot;. Toto rozhranie vám umoòuje ho jednoducho zmeni, ale môete tak èinit aj ruène, a to editáciou html souboru.";
$f_lang['text2'] = "<b>Ak chcete zmeni aj vh¾ad masky administrátorského rozhrania</b> modifikujte prosím ruène súbory v prieèinku &quot;templates/admin/&quot;.";
$f_lang['text_aj_skin'] = "Prida vzh¾ad";
$f_lang['ajouter'] = "Prida";
$f_lang['gestion_skins'] = "Správa vzh¾adu";
$f_lang['vous_editez'] = "Práve modifikujete tento vzh¾ad :";
$f_lang['style'] = "súbor štılov";
$f_lang['ajouter_message'] = "sekcia: prida správu";
$f_lang['nbre_messages_page'] = "sekcia: poèet správ/strán";
$f_lang['pages_dispos'] = "sekcia: zoznam stránok / ïalšia strana - predcházdajúca strana";
$f_lang['texte_corps_messages'] = "telo správy";
$f_lang['espacement'] = "medzera mezi 2 správami";
$f_lang['text_assembly'] = "súbor skladajúci predchádzajúce sekcie";
$f_lang['ok_edit_skin'] = "Vïaka, vzh¾ad bol aktualizovanı";
$f_lang['erreur_edit_skin'] = "CHYBA\\nJeden alebo viac súborov vzh¾adu nebolo moné aktualizova. Upravte prosím tieto súbory ruène.";
$f_lang['ajouter'] = "Prida";
$f_lang['supprimer'] = "Zmaza";
$f_lang['text_sup_skin'] = "zmaza vzh¾ad";
$f_lang['ok_supprimer'] = "Vïaka, vzh¾ad bol vymazanı.";
$f_lang['erreur_supprimer'] = "CHYBA\\nJeden alebo viac súborov vzh¾adu se nepodarilo vymaza, musíte ich vymaza ruène.";

/* page des mots censurés */
$f_lang['aj_mot'] = "Prida slovo "; 
$f_lang['mot_interdit'] = "Zakázané slovo :";
$f_lang['remplacer_par'] = "Nahradi slovom :";
$f_lang['gestion_censure'] = "Správa zakázanıch slov";
$f_lang['mot'] = "slovo";
$f_lang['remplace_by'] = "nahradené slovom";
$f_lang['liste_jour'] = "Aktualizova zoznam";
$f_lang['sup_mots'] = "Zmaza vybrané slová";
$f_lang['erreur_aj_censure1'] = "Zadajte prosím slovo, ktoré se má cenzurova";
$f_lang['erreur_aj_censure2'] = "Zadejte prosím slovo, ktoré má by pouité ako náhrada";
$f_lang['ok_aj_mot'] = "Vïaka, zakázané slovo bolo pridané.";
$f_lang['verif_sup'] = "Chcete skutoène definitívne vymaza vybrané slová ?";
$f_lang['merci_modif'] = "Vïaka, zmeny boli uloené";

/* bannir des ip */
$f_lang['bannir_ip'] = "Zakázané IP";
$f_lang['text_ip1'] = "Kadı návštevník má pøidelenú špecifickú èíselnú IP adresu (napr. 201.10.25.14). Táto adresa je pride¾ovaná poskytovate¾om internetu pri pripojení a mení sa, teoreticky, kedyko¾vek sa návštevník znovu pripojí do internetu.";
$f_lang['text_ip2'] = "Ak chcete <b>zakáza návštevníkovi vkláda správu do vašej návštevnej knihy</b>, môete sem zada jeho IP adreseu. Môete taktie zakáza rozsah IP adries pouitím zástupného symbolu * (napr. 201.15.55.*, alebo napr. 158.*.*.*).";
$f_lang['ajouter_ip'] = "Prida zakázanú IP adresu";
$f_lang['gestion_ip'] = "Správa IP adries";
$f_lang['sup_ip'] = "Odobra vybrané IP adresy";
$f_lang['ok_aj_ip'] = "Vïaka, táto IP adresa je teraz zakázaná";
$f_lang['verif_sup_ip'] = "Skutoène chcete zmaza vybrané IP adresy ?";

/* smileys */
$f_lang['gestion_smileys'] = "Správa smajlíkov";
$f_lang['text_smileys'] = "<b>Smajlíky dovo¾ujú vyjadri návštevníkovi jeho emócie</b> pri zápisu. V tomto rozhraní môete jednoducho pridávat alebo maza smajlíky tak, aby mal navštevník z èoho vybera :o)<br><br>Smajlíky z tejto stránky sú uloené v prieèinku \"images/smileys\".";
$f_lang['ajouter_smiley'] = "Prida smajlíka";
$f_lang['image_smiley'] = "Obrázok";
$f_lang['car_replace'] = "Zodpovedajúci kód";
$f_lang['gestion_smileys'] = "Správa smajlíkov";
$f_lang['sup_smileys'] = "Zmaza vybrané smajlíky";
$f_lang['erreur_image'] = "Vyberte prosím smajlíka";
$f_lang['erreur_car'] = "Vyberte prosím zodpovedajúci kód pre smajlíka";
$f_lang['ok_aj_smiley'] = "Vïaka, smajlík bol úspešne pridanı";
$f_lang['no_smiley'] = "Smajlíky môu by iba vo formáte GIF alebo JPEG";
$f_lang['copy_impossible'] = "CHYBA\\nSmajlíka se nepodarilo nahrá do sloky \\\"images/smileys\\\".";
$f_lang['car_replace_exist'] = "CHYBA\\nTento kód u v databáze existuje.";
$f_lang['modif_smileys'] = "Aktualizova všetkıch smajlíkov";
$f_lang['verif_sup_smileys'] = "Skutoène chcete vymaza vybranıch smajlíkov ?";
$f_lang['merci_modif_smileys'] = "vïaka, smajlíky boli upravené.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Prida administrátora návštevnej knihy";
	$f_lang['add_admin_2'] = "Prida administrátora";
	$f_lang['ajouter_admin'] = "Prida";
	$f_lang['name_ajouter_admin'] = "prida";
}
else{
	$f_lang['add_admin_texte'] = "Úprava administrátora návšt.knihy";
	$f_lang['add_admin_2'] = "Upravi administrátora";
	$f_lang['ajouter_admin'] = "Uloi";
	$f_lang['name_ajouter_admin'] = "upravi";
}

$f_lang['identif_connexion'] = "Prihlasovacie meno";
$f_lang['passe_admin'] = "Heslo";
$f_lang['email_admin'] = "E-mail (dôleité v prípade, keï admin má dostáva e-maily po vloení správy)";
$f_lang['admin_receive_email'] = "Chcete, aby admin dostával e-mail po kadej vloenej správe ?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;môe meni parametre skriptov ?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;môe meni vzh¾ad ?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravova vloené správy ?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravova zakázané slová ?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravova smajlíky ?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravova úèty ïalších administrátorov ?";
$f_lang['erreur_name'] = "Zadajte prosím uivate¾ské meno";
$f_lang['erreur_passe'] = "Zadajte prosím heslo";
$f_lang['erreur_email'] = "Zadajte prosím e-mail";
$f_lang['ok_aj_admin'] = "Vïaka, úèet bol úspešne vytvorenı";
$f_lang['ok_modif_admin'] = "Vïaka, úèet bol aktualizovanı";
$f_lang['erreur_aj_admin'] = "CHYBA\\nToto uivate¾ské méno u existuje";
$f_lang['revenir'] = "Naspä na predchádzajúcu stránku";

/* gestion des admins */
$f_lang['gest_admin'] = "Správa administrátorov";
$f_lang['sup_admin'] = "odobra";
$f_lang['login_admin'] = "prihlasovacie meno";
$f_lang['email_admin'] = "E-mail";
$f_lang['modif_admin'] = "zmeni";
$f_lang['value_sup_admin'] = "Odobra vybranıch administrátorov";
$f_lang['verif_sup_admin'] = "Skutoène chcete odebra vybranıch administrátorov ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "STRÁNKA NIE JE DOSTUPNÁ";
$f_lang['erreur_auth'] = "Chyba pri prihlásení";
$f_lang['erreur_droits'] = "Nemáte zodpovedajúce práva pre prístup na túto stránku.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Priemerná známka, udelená návštevníkmi, tımto stránkam :";
$f_lang['title_guestbook'] = "Naša návštevná kniha";
$f_lang['note_super'] = " : super !";
$f_lang['note_moyen'] = " : priemer";
$f_lang['note_rate'] = " : prepadák";
$f_lang['nom_pseudo_visiteur'] = "Meno alebo prezıvka :";
$f_lang['email_visiteur'] = "E-mail :";
$f_lang['site_web_visiteur'] = "WWW adresa";
$f_lang['ville_pays_visiteur'] = "Mesto / Krajina :";
$f_lang['note_visiteur'] = "Vaše hodnotenie :";
$f_lang['message_visiteur'] = "Vaša správa :";
$f_lang['ajouter_message_visiteur'] = "Vloi túto správu";
$f_lang['erreur_add_nom'] = "Zadajte prosím Vaše meno";
$f_lang['erreur_add_message'] = "Zadajte prosím Vašu správu";
$f_lang['erreur_mail'] = "Vaša e-mailová adresa nie je správna";
$f_lang['messages'] = "Správy";
$f_lang['messages_a'] = "a";
$f_lang['page'] = "Stránka";
$f_lang['nbre_messages'] = "Poèet správ";
$f_lang['message_le'] = "dòa";
$f_lang['message_note'] = "Hodnotenie";
$f_lang['send_mail_to'] = "Posla e-mail";
$f_lang['go_home'] = "Navštívte stránky";
$f_lang['precedente'] = "&lt;&lt; predchádzajúca";
$f_lang['suivante'] = "ïalšia &gt;&gt;";
$f_lang['no_message'] = "Nie sú tu iadné správy.";
$f_lang['no_ip'] = "POZOR\\nVaša IP adresa je zakázaná, nemáte právo vkláda správy do tejto návštevnej knihy.";
$f_lang['ok_post'] = "Vïaka! Vaša správa bola úspešne vloená.";
$f_lang['time_erreur'] = "POZOR\\nVaša správa nemohla by vloena, vkládali ste ju pred chví¾kou.";
$f_lang['text_select_search'] = "Ukáza iba správy obsahujúce následujúce slová";
$f_lang['text_ok_search'] = "Ok";

/* mail envoyé */
$f_lang['mail_object'] = "[INFO] - Nová správa vo vašej návštevnej knihe - ";
$f_lang['mail_message'] = "Dobrı deò,\n\ndo Vašej návštevnej knihy bola vloena nová správa ";

/* gestion des messages */
$f_lang['gestion_mess'] = "Správa správ :)";
$f_lang['selectionner_pages'] = "Vybra";
$f_lang['messages_gest'] = "správa";
$f_lang['page_gest'] = "stránka";
$f_lang['aller_en_page'] = "Choï na stranu";
$f_lang['supprimer_gest'] = "vymaza";
$f_lang['auteur_gest'] = "author";
$f_lang['modifier_gest'] = "opravi";
$f_lang['supprimer_mess_selected'] = "Vymaza vybrané správy";
$f_lang['verif_sup_mess'] = "Skutoène chcete vymaza vybrané správy ?";

/* modifier un message */
$f_lang['modif_mess'] = "Opravi správu";
$f_lang['message_modif'] = "Správa";
$f_lang['nom_modif'] = "Meno";
$f_lang['email_modif'] = "E-mail";
$f_lang['site_web_modif'] = "WWW stránky";
$f_lang['note_modif'] = "Hodnotenie Vašich stránok";
$f_lang['ville_pays_modif'] = "Mesto / Krajina";
$f_lang['date_modif'] = "Dátum vloenia";
$f_lang['ip_modif'] = "IP adresa";
$f_lang['ok_modif_mess'] = "Vïaka, zmeny boli uloené";

/* titre des pages */
$f_lang['title identification'] = "identifikácia";
$f_lang['title administration'] = "administrácia";
$f_lang['title frame gauche'] = "¾avı rám";
$f_lang['title options'] = "vo¾by";
$f_lang['title skins'] = "vzh¾ad";
$f_lang['title censure'] = "zakázanıch slov";
$f_lang['title censure'] = "správa zakázanıch IP";
$f_lang['title smileys'] = "správa smajlíkov";
$f_lang['title add admin'] = "pridanie administrátora";
$f_lang['title gest admin'] = "správa administrátorov";
$f_lang['title erreur'] = "chyba";
$f_lang['title gestion mess'] = "správa správ";
$f_lang['title modif mess'] = "modifikácia správy";
$f_lang['title setup'] = "inštalácia";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Zlyhalo pripojenie k databáze";
$f_lang['erreur_connexion'] = "Vaše prihlasovacie údaje nie sú správne";
$f_lang['manque login'] = "Zadajte prosím Vaše prihlasovacie meno";
$f_lang['manque pass'] = "Zadajte prosím Vaše heslo";
$f_lang['end session'] = "Vaša relácia bola ukonèená";

/* add version 3.11 */
$f_lang['addSignature'] = "Vloi novú správu";
$f_lang['seeMessages'] = "Èíta správy";
$f_lang['addMessageBlocAdd'] = "Prida správu do návštevnej knihy";

/* add version 3.2 */
$f_lang['version'] = "Verzia";
$f_lang['new_version_dispo'] = "Je k dispozícii nová verzia Návštevnej knihy";
$f_lang['version_courrante'] = "Súèasné verzie skriptov";
$f_lang['info_version'] = "Informácie o Vašej verzii";
$f_lang['version_txt_ok'] = "Vaša verzie je ".$alex_livre_version.",<br>táto verzia je najnovšia, netreba aktualizova.";
$f_lang['version_txt_erreur'] = "The version you have is ".$alex_livre_version.".<br/><b>An error occured during update verification.</b> You can verify new version on our website http://www.alexguestbook.net";
$f_lang['version_txt_update'] = "Vaša verzia je ".$alex_livre_version.", <b>k dispozícií je novšia verzia</b>";
$f_lang['version_down'] = "Stiahnú novú verziu";
$f_lang['help_update'] = "Pomoc pri aktualizacií";
$f_lang['spam'] = "USER AGENT Vašeho prehliadaèa nebol identifikovanı, zdá sa, akoby sa nejakı robot pokúšal automatizovane vloi správu. Ak tomu tak nie je, skúste to prosím z iného prehliadaèa.";
$f_lang['avis_spammeurs'] = "Poznámka pre spammerov";
$f_lang['txt_spammeurs'] = "<b>Táto návštevná kniha je chránená pred spammermi</b>, E-mailové a www adresy sú v zdrojovom kóde stránok zašifrované, preto je úplne zbytoèné vkláda komerèné odkazy, nebudú vidite¾né vo vyh¾adávaèoch (naviac vaša správa bude aj tak vymazaná...)";
$f_lang['fermer'] = "Zavrie toto okno";
$f_lang['valider_messages'] = "Chcete najpr prezrie vloené správy pred ich zverejnením ?";
$f_lang['valide'] = "Schválené ?";
$f_lang['mess_valide'] = "Táto správa bola schválena";
$f_lang['mess_invalide'] = "Tato správa èaká na schválenie";
$f_lang['info_mess_valide'] = "Schválená správa ?";
$f_lang['ok_post_valid'] = "Vïaka ! Vaša správa bola úspešne vloená, bude zverejnená ihneï po webmastrovom schválení.";
$f_lang['see_skin'] = "Zobrazi návštevnú knihu v tomto vzh¾ade";
$f_lang['maxi_car'] = "Maximálny povolenı poèet znakov vo správe (0 = bez obmedzenia)";
$f_lang['il_reste'] = "Do Vašej správy môete napísa ešte";
$f_lang['caracteres'] = "znakov";
$f_lang['sup_copyright'] = "Vymaza copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Meno tabu¾ky bezpeènostnıch kódov";
$f_lang['add_code_securite'] = "Chcete, aby uivate¾ musel pred odoslaním správy prepísa bezpeènostní kód?";
$f_lang['t_chem_dossier_fonts'] = "Úplna cesta (URL) ku zloke s font-ami";
$f_lang['t_color_txt_code'] = "Hexadecimálny kód farby textu";
$f_lang['t_color_background_code'] = "Hexadecimální kód farby pozadia";
$f_lang['veuillez_taper_code'] = "Opíšte prosím tento bezpeènostnı kód do políèka vpravo";
$f_lang['a_quoi_ca_sert'] = "A preèo?";
$f_lang['why_code'] = "Proè \"bezpeènostnı kód\" ?";
$f_lang['txt_why_code'] = "Umoòuje skontrolova, èi správa bola vloená skutoènım ivım návštevníkom a nie automaticky pracujúcím softvérom.<br><br><b>Komerèné správy a spam sú zakázáné!</b>";
$f_lang['erreur_code_securite'] = "Zadajte prosím bezpeènostnı kód";
$f_lang['erreur_saisie_code_securite'] = "Vámi zadanı bezpeènostnı kód nie je správny. Prosím, skúste to znova";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Automatická odpoveï";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;správa automatickej odpovede?";
$f_lang['text_reponse_auto'] = "<b>Tu môete zada text automatickej odpovede</b> odosielanej návštevníkovi, ktorı vloí správu do Vašej návštevnej knihy. Táto správa bude odoslaná, ak túto funkciu aktivujete v parametroch.<br><br>Kadı jazyk má svoju vlastnú odpoveï a kód [PSEUDO] bude nahradenı menom alebo prezıvkou návštevníka, ktorı správu vloil.";
$f_lang['name_table_rep_auto'] = "Meno tabu¾ky, ktorá obsahuje automatické odpovede";
$f_lang['gestion_reponses'] = "Správa správ";
$f_lang['msg_remerciement'] = "Vïaka za správu";
$f_lang['txt_remerciement'] = "Dobrı deò, [PSEUDO],\n\vïaka za správu v našej návštevnej knihe!";
$f_lang['ok_save_msg_rem'] = "Vïaka, automatická odpoveï bola uloena.";
$f_lang['envoyer_remerciement'] = "Chcete, aby bylo automaticky odosielané poïakovanie?";
$f_lang['remerciement'] = "Vïaka";
$f_lang['titre_guestbook'] = "Titulok návštevnej knihy";
$f_lang['text_titre_guestbook'] = "<b>Môete zmeni titulok návštevnej knihy</b> a napísat svoj vlastnı pre kadı z jazykov.";
$f_lang['titre'] = "Titulok";
$f_lang['parametrage'] = "Nastavenia";
$f_lang['ok_save_titre'] = "Vïaka, titulok bol uloenı.";
$f_lang['ville_visiteur'] = "Mesto :";
$f_lang['pays_visiteur'] = "Krajina :";
$f_lang['flag'] = "Vlajka";
$f_lang['ville_modif'] = "Mesto";
$f_lang['pays_modif'] = "Krajina";
$f_lang['action'] = "Akcia";
$f_lang['repondre'] = "Odpoveï";
$f_lang['votre_reponse'] = "Vaša odpoveï";
$f_lang['ok_reponse_mess'] = "Vïaka, Vaša odpoveï bola uloená";
$f_lang['defaut_titre_rep'] = "Odpoveï správcu";
$f_lang['annuler'] = "Zruš";
$f_lang['num_appari'] = "Poèet inštalovanıch smajlíkù";
$f_lang['nb_max_smileys'] = "Maximálnı poèet zobrazovanıch smajlíkov";
$f_lang['plus_smileys'] = "Uka ïalších smajlíkov";
$f_lang['liste_all_smilies'] = "Zoznam všetkıch smajlíkov";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>Táto funkcia Vám umoòuje zobrazi posledné správy, vloené do Vašej návštevnej knihy,</b> na stránke pod¾a Vašej vo¾by.";
$f_lang['parametrage_modele'] = "Nastavenie masky";
$f_lang['ok_save_boite'] = "Vïaka, Vaše nastavenie bolo uloené";
$f_lang['format_date_boite'] = "Formát data (zodpovedá <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>funkcii date()</b></a> jazyka PHP)";
$f_lang['nbre_maxi_pseudo_boite'] = "Maximálny poèet znakov zobrazujúcích sa z mena alebo prezıvky";
$f_lang['nbre_maxi_message_boite'] = "Maximálnı poèet znakov zobrazovanıch zo správy";
$f_lang['modele_affichage_donnees'] = "Maska";
$f_lang['url_dossier_livre_boite'] = "Doplòte adresu URL ku zloke s návštevnou knihou";
$f_lang['url_livre_boite'] = "Doplòte adresu URL úvodnej stránky návštevnej knihy";
$f_lang['generation_code'] = "Vytvorenie javascriptu";
$f_lang['nom_msg_afficher'] = "Poèet zobrazovanıch správ";
$f_lang['generer_code'] = "Vytvori javascriptovı kód";
$f_lang['code_a_copier'] = "HTML kód, ktorı musí by skopírovanı do vybranej stránky";
$f_lang['erreur_boite_java'] = "Zadajte prosím platnı poèet zobrazovanıch zpráv";
$f_lang['erreur_par_boite'] = "Chyba v konfigurácií, nemôem vo vašej maske nájs sekciu [BOUCLE] ... [/BOUCLE].";
$f_lang['saut_ligne_msg_boite'] = "Ponecha riadkovanie vo správach";
$f_lang['message_a'] = "o";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravova databázu ?";
$f_lang['bdd'] = "Database";
$f_lang['optimisation'] = "Optimalizácia";
$f_lang['sauvegarde'] = "Zálohovanie";
$f_lang['restauration'] = "Obnovenie";
$f_lang['optimisation_txt'] = "<b>Po zápisoch a vymazávaniach zostalo v tabu¾kách databázy nevyuité miesto.</b> To nie je vhodné z poh¾adu rıchlosti odozvy a vıkonu databázy a tım aj Vašich stránok. Táto funkcia umoòuje riešit problém optimalizáciou tabuliek.";
$f_lang['liste_tables'] = "Zoznam tabuliek vo Vašej databáze";
$f_lang['lancer_optimisation'] = "Spúšam optimalizáciu";
$f_lang['tables'] = "TABU¼KY";
$f_lang['pertes'] = "NAVIAC";
$f_lang['octets'] = "bytov";
$f_lang['ok_optimise'] = "Vïaka, optimalizácia tabuliek bola prevedená";
$f_lang['txt_sauvegarde'] = "<b>Ak chcete archivova správy dlhší èas, dôrazne odporúèame pravidelné zálohovanie dát.</b> Problém s hardvérom môe znièi všetky Vaše dáta. Záloha môe by taktie uitoèná pri prechode na inı server.";
$f_lang['lancer_sauvegarde'] = "Spusti zálohovanie";
$f_lang['lancer_restauration'] = "Spusti obnovu";
$f_lang['txt_restauration'] = "<b>Ak máte k dispozícií zálohu, môete kompletne obnovi dáta Vašej návštevnej knihy</b> Jednoducho na Vašom disku vyberte zodpovedajúci súbor so zálohou .<br><br><b><u>POZOR</u></b>, ak je tento súbor príliš ve¾kı (nieko¾ko megabytov), môe pri obnove dôjs k problému, z 
dôvodu nastavenia Vášho servera (èasovı limit behu skriptu alebo maximálne povolená ve¾kos nahrávaného súboru).";
$f_lang['select_file'] = "Vyberte súbor so zálohou na Vašom disku (.ZIP alebo .SQL)";
$f_lang['confirm_restauration'] = "Potvrdzujete spustenie obnovy dát ? Aktuálne dáta budú vymazané!";
$f_lang['select_file_restau'] = "Vyberte prosím súbor na Vašom disku";
$f_lang['erreur_ext_restau'] = "Vybranı súbor nemá príponu .ZIP nebo .SQL, obnova dát nemôe by spustená.";
$f_lang['conseil_zip'] = "(Rozba¾te ZIP súbor na Váš pevnı disk k získaniu súboru SQL)";
$f_lang['erreur_ext_zip'] = "Extension PHP_ZIP nie je na serveri dostupná, obnova dát zo ZIP súboru nie je moná. Vyberte prosím .SQL soubor na Vašom disku".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Chyba pri èítaní Vášho ZIP archívu, nemono spusti obnovu dát.  Skúste to prostredníctvom .SQL súboru ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Vybranı súbor SQL neobsahuje zodpovedajúce príkazy pre obnovu dát návštevnej knihy \"@lex Guestbook\".  Obnova nemôe by spustená.";
$f_lang['restauration_terminee'] = "Vïaka ! Obnova dát bola úspešne prevedená !";

							/* V5 */
$f_lang['name_table_ban'] = "Názov zakázanıch IP, tabu¾ka prezıviek a e-mailov";
$f_lang['ok_validation'] = "Vïaka, overenie bolo vykonané";
$f_lang['selectionner_tous_messages'] = "Oznaèi/odznaèi všetky";
$f_lang['admin_send_mail'] = "eláte si, aby admin dostal e-mail po pridaní novej správy v knihe hostí?";

//ajout bannissement
$f_lang['bannissement'] = "Vyhnanstvo";
$f_lang['admin_gestion_bannissement'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;spravova vyhnanstvo ?";
$f_lang['interdit_de_message'] = "Vaša správa nebola uloená. Pre zobrazenie dôvodu odmietnutia (zakázané slovo, nevyplnené povinné pole ...) JavaScript musí by povolenı. Môete sa pokúsi upravi svoju správu.";
$f_lang['valider_mess'] = "Poui vyššie uvedené vo¾by";
$f_lang['erreur_ip'] = "IP adresa nie je správna";
$f_lang['erreur_ip1'] = "Prosím, vyplòte 1. èas IP adresy s èíslom od 0 do 255 alebo *";
$f_lang['erreur_ip2'] = "Prosím, vyplòte 2. èas IP adresy s èíslom od 0 do 255 alebo *";
$f_lang['erreur_ip3'] = "Prosím, vyplòte 3. èas IP adresy s èíslom od 0 do 255 alebo *";
$f_lang['erreur_ip4'] = "Prosím, vyplòte 4. èas IP adresy s èíslom od 0 do 255 alebo *";
$f_lang['explication_bannir_mot'] = "Máte dve monosti ako zakáza slová v správach. Buï zakázané slová cenzúrujute (tieto slová nahradíte inımi slovami alebo symbolmi, ktoré zvolíte) alebo správa bude odmietnutá.";
$f_lang['bannir_mot'] = "Chcete, aby správy obsahujúce cenzúrované slová (pozri \"Cenzúrovné slová\" v menu) boli odmietnuté?<br>Ak oznaèíte \"nie\", tieto slová budú iba nahradené inımi slovami alebo symbolmi, ktoré ste zvolili.";

/* bannir des pseudos */
$f_lang['bannir_pseudo'] = "Vyhnanstvo prezıviek";
$f_lang['admin_text_pseudo'] = "Ak si eláte, aby uívate¾ <b>nemohol pridáva správy do knihy hostí</b>, môete tu zada jeho prezıvku. Taktie môete poui divokú kartu (wildcard) *, ktorá zachytí akéko¾vek písmeno alebo èíslo do úètu.";
$f_lang['ajouter_pseudo'] = "Prida novú prezıvku do vyhnanstva";
$f_lang['gestion_pseudo'] = "Správa prezıvok";
$f_lang['sup_pseudo'] = "Odstráni oznaèené prezıvky";
$f_lang['erreur_pseudo'] = "Prosím, zadajte prezıvku";
$f_lang['ok_aj_pseudo'] = "Vïaka, prezıvka je odteraz zakázaná";
$f_lang['verif_sup_pseudo'] = "Naozaj chcete odstráni všetky oznaèené prezıvky?";

/* bannir des emails */
$f_lang['bannir_emails'] = "Vyhnanstvo e-mailovıch adries";
$f_lang['admin_text_email'] = "Ak si eláte, aby uívate¾ <b>nemohol pridáva správy do knihy hostí</b>, môete tu zada jeho e-mailovú adresu. Taktie môete poui divokú kartu (wildcard) *, napr. odmietnutie celého názvu domény zabezpeèíte nasledovne: \"*@spamdomain.com\".";
$f_lang['ajouter_email'] = "Prida novú e-mailovú adresu do vyhnanstva";
$f_lang['gestion_email'] = "Správa e-mailovıch adries";
$f_lang['sup_email'] = "Odstráni oznaèené e-mailové adresy";
$f_lang['erreur_email'] = "Prosím, zadajte e-mailovú adresu";
$f_lang['ok_aj_email'] = "Vïaka, e-mailová adresa je odteraz zakázaná";
$f_lang['verif_sup_email'] = "Naozaj chcete odstráni všetky oznaèené e-mailové adresy?";

$f_lang['no_pseudo'] = "UPOZORNENIE\\nVaša prezıvka je vo vyhnanstve. Nemôete prida správu do tejto knihy hostí.";
$f_lang['no_email'] = "UPOZORNENIE\\nVaša e-mailová adresa je vo vyhnanstve. Nemôete prida správu do tejto knihy hostí.";
$f_lang['no_ville'] = "UPOZORNENIE\\nZadané mesto nie je správne. Nemôete prida správu do tejto knihy hostí.";
$f_lang['no_mot'] = "UPOZORNENIE\\nZadali ste zakázané slovo. Nemôete prida správu do tejto knihy hostí.\\nProsím, upravte text správy.";

// interdiction des URL
$f_lang['url_interdite'] = "UPOZORNENIE\\nURL odkazy sú v správach zakázané";
$f_lang['url_interdites'] = "Chcete zakáza správy obsahujúce URL odkazy?";
$f_lang['url_cliquables'] = "Chcete, aby URL odkazy v správach boli klikate¾né?";

//remplacement du fichier /config/config.php par une table dans la BDD
$f_lang['name_table_config'] = "Názov tabu¾ky s konfiguraènımi parametrami";

// decalage horaire
$f_lang['admin_decalage_horaire'] = "Môete nastavi èsovı rozdiel medzi serverom a vašou krajinou. Ak nepotrebujete nastavova èasovı rozdiel, nechajte 0.";
$f_lang['heures'] = "hodín";
$f_lang['secondes'] = "sekúnd";
$f_lang['admin_erreur_decalage_horaire'] = "Hodnotu èasového posunu musíte zada v rozmedzí od -12 do +12";

// interdit la suppression du dernier admin
$f_lang['admin_suppr_dernier_admin'] = "Nemôete odstráni posledného administrátora";

// désactivation des smileys en un clic
$f_lang['admin_autoriser_smileys'] = "Chcete povoli smajlíkov?";

// pour empêcher que le temps de session de la partie admin ne soit trop court
$f_lang['admin_temps_session_min'] = "UPOZORNENIE\\nZadaná hodnota platnosti sedenia je príliš krátka!\\nMusíte zada hodnotu vyššiu ako 300 sekúnd";

// inclure le livre dans une page PHP
$f_lang['admin_inclure_livre'] = "Chcete zahrnú knihu hostí do PHP súboru?";
$f_lang['admin_inclure_livre_code'] = "Tu je PHP kód, ktorı musíte vloi do svojho PHP súboru medzi tagy &lt;?php a ?&gt;.\n\ntaktie musíte zmeni \$chem_absolu pole v súbore /index.php v knihe hostí a prida CSS do stránky (pozrite FAQ pre detailné vysvetlenie)";
$f_lang['admin_fichier_inclusion'] = "Zadajte absolútnu cestu k súboru, do ktorého chcete zahrnú knihu hostí (napríklad: /adresar1/adersar2/subor_pre_zahrnutie_knihi_hosti.php). Musíte kliknú na tlaèítko \"Uloi\", aby ste videli zadanú cestu, prevzatú do úètu v kóde.";
$f_lang['admin_fichier_inclusion_erreur'] = "UPOZORNENIE\\nZadali ste nesprávnu cestu k súbore pre zahrnutie knihi hostí.\\nCesta musí by v tvare: /adresar1/adersar2/subor_pre_zahrnutie_knihi_hosti.php";

// gestion des champs
$f_lang['admin_champ_propose'] = "Nenavrhova";
$f_lang['admin_champ_obligatoire'] = "Povinnı";
$f_lang['admin_champ_prive'] = "Súkromnı";
$f_lang['admin_champ_pseudo'] = "Návštevníci môu zada prezıvku";
$f_lang['admin_champ_ville'] = "Návštevníci môu zada mesto";
$f_lang['admin_donner_focus'] = "Chcete, aby poloka 'Prezıvka' bola zvolená (aktívna, netreba do nej kliknú) po naèítani stránky?";
$f_lang['champ_obligatoire_vide'] = "Niektorá z povinnıch poloiek (oznaèená *) je prázdna. Prosím, vyplòte ju.";
$f_lang['erreur_add_nom'] = "Prosím, zadajte meno";
$f_lang['erreur_add_email'] = "Prosím, zadajte e-mailovú adresu";
$f_lang['erreur_add_site'] = "Prosím, zadajte adresu web stránky";
$f_lang['erreur_add_ville'] = "Prosím, zadajte mesto";
$f_lang['erreur_add_pays'] = "Prosím, zadajte krajinu";
$f_lang['erreur_add_note'] = "Prosím, zvo¾te hodnotenie";
$f_lang['erreur_add_message'] = "Prosím, zadajte správu";
$f_lang['erreur_url'] = "Adresa web stránky je zrejme nesprávna";

// code de sécurité : vérification de la présence de la librairie GD2
$f_lang['admin_gd_non_activee'] = "<span class=\"texte_alerte\">Nemôete poui ochranu overovacím kódom!<br/>\n Váš server nepodporuje kninicu GD2, ktorá je potrebná pre funkènos overovacieho kódu</span>";

// lien vers l'admin et vers la page d'accueil
$f_lang['admin_lien_admin'] = "Chcete prida odkaz do administrátorského rozhrania v spodnej èasti knihi hostí?";
$f_lang['admin_lien_accueil'] = "Chcete prida spätnı odkaz na vašu domovskú stránku alebo nejakú inú stránku?";
$f_lang['admin_chemin_lien_accueil'] = "Ak necháte túto poloku prázdnu, odkaz bude smerova na domovskú stránku. Môete zada absolútnu cestu k stránke (napr. /adresar1/stranka1.htm).";
$f_lang['admin_chemin_lien_accueil_erreur'] = "Zadana cesta nie je správna. Prosím, zadajte absolútnu cestu (napr. /mojastranka.php).";
$f_lang['texte_lien_accueil'] = "Naspä na úvodnú stránku";
$f_lang['texte_lien_admin'] = "Administrátorské rozhranie";

$f_lang['admin_retour_livre'] = "Pozrie knihu hostí";

// symboles champs privés/obligatoires sur le formulaire
// /!\ Attention, maximum 90 caractères
$f_lang['information_champ_prive'] = "Obsah tejto poloky bude vidite¾nı iba administrátorom.";
$f_lang['information_champ_obligatoire'] = "Táto poloka je povinná pre pridanie správy.";

/* Bas de page partie admin */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

$f_lang['host_base'] = "Server (zvyèane: localhost)";

$f_lang['name_table_txt_lang'] = "Názov tabu¾ky obsahujúcej upravené texty (napr. názov knihyhostí)";

$f_lang['erreur_host'] = "Prosím, zadajte databázovı server";

$f_lang['erreur_ecriture'] = "<b>CHYBA</b>, nemôem zapisova do adresára \"config/\".<br><br>Prosím, upravte práva pre tento adresár (chmod 777) a inštaláciu zopakujte: <a href=\"./setup.php\"><b>naspä</b></a>.";

$f_lang['options_livre'] = "Nastavenia knihy hostí";

$f_lang['text1'] = "V správach od návštevníkov budú <b>cenzúrované slová automaticky nahradené</b>. Môete zvolené slovo \"zle slovo\" nahradi  vırazom \"**cenzúrované slovo**\".<br/>Ak ste zvolili vo¾bu odmietnú správy obsahujúce cenzúrovné slová, <u>aj tak musíte zada slová, ktoré ich mjú nahradi</u>. Tımto spôsobom môete potom ¾ahko prepína vo¾by (odmietanie správ a nahradzovanie cenzúrovanıch slov).";

/* Erreur si fichier install present */
$f_lang['erreur_fic_install_present'] = "For security reasons, to use your guestbook you have to delete file setup.php and folder update/";
?>