<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2005    //
//          http://www.alexguestbook.com/      //
//              all right reserved           //
//        polish translation by the nym      //
///////////////////////////////////////////////

/* Encodage utilisé dans le script */
$SCRIPT_ENCODAGE = "iso-8859-2";
$CONTENT_LANGUAGE = "pl";

/* setup */
$f_lang['install_auto'] = "Automatyczna instalacja";
$f_lang['identi_base'] = "ID bazy danych";
$f_lang['type_base'] = "Typ bazy danych";
$f_lang['user_base'] = "U¿ytkownik";
$f_lang['pass_base'] = "Has³o";
$f_lang['nom_base'] = "Nazwa bazy danych";
$f_lang['nom_table'] = "Nazwy tabel";
$f_lang['name_table_sessions'] = "Nazwa tabeli sesji";
$f_lang['name_table_users'] = "Nazwa tabeli u¿ytkowników";
$f_lang['name_table_messages'] = "Nazwa tabeli wiadomo¶ci";
$f_lang['name_table_censure'] = "Nazwa tabeli s³ów ocenzurowanych";
$f_lang['name_table_ip'] = "Nazwa tabeli zbanowanych IP";
$f_lang['name_table_smileys'] = "Nazwa tabeli u¶mieszków";
$f_lang['extension_script'] = "Rozszerzenie skryptu";
$f_lang['choose_extension'] = "Wybierz rozszerzenie skryptów<br>(radzimy u¿ycie \"php\", inaczej bêdziesz musia³ zmieniæ nazwê wszystkich plików z wybranym rozszerzeniem)";
$f_lang['identi_acces_admin'] = "Twoja identyfikacja dostêpu do panelu administracyjnego";
$f_lang['login_admin'] = "Login";
$f_lang['pass_admin'] = "Has³o";
$f_lang['verif_pass_admin'] = "Wpisz ponownie has³o";
$f_lang['email_admin_setup'] = "Twój Email";
$f_lang['installer'] = "Instaluj";
$f_lang['erreur_host'] = "Zapomnia³e¶ podaæ nazwy hosta";
$f_lang['erreur_user'] = "Zapomnia³e¶ podaæ swojego ID do po³±czenia z baz± danych";
$f_lang['erreur_nom_base'] = "Zapomnia³e¶ podaæ nazwy swojej bazy danych";
$f_lang['erreur_log_admin'] = "Zapomnia³e¶ podaæ swojego loginu do panelu administracyjnego";
$f_lang['erreur_pass_admin'] = "Zapomnia³e¶ podaæ swojego has³a do panelu administracyjnego";
$f_lang['erreur_pass_differents'] = "UWAGA, twoje has³a s± ró¿ne.";
$f_lang['erreur_first_connexion'] = "<b>B£¥D, nie mo¿na po³±czyæ siê z baz± danych.</b><br><br>proszê sprawdziæ swój ID : <a href=\"javascript:history.go(-1);\"><b>wróæ</b></a>.";
$f_lang['erreur_install'] = "B³±d instalacji";
$f_lang['ok_install'] = "Instalacja prawid³owa";
$f_lang['text_ok_install'] = "<b>Dziêkujê ! Instalacja zakoñczy³a siê prawid³owo.</b><br><br>Z powodów bezpieczeñstwa, radzimy usun±æ plik instalacji, którego w³a¶nie u¿ywa³e¶ (\"setup.php\"), je¿eli tego nie zrobisz, kto¶ bêdzie móg³ go u¿yæ do zepsucia twoich plików konfiguracyjnych.<br><br>Mo¿esz teraz zarz±dzaæ swoj± ksiêg± go¶ci klikaj±c <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>tutaj</b></a> lub<br> zobaczyæ panel go¶ci <a href=\"".$chem_absolu."\" target=\"_blank\"><b>tutaj</b></a>.";

/* administration */
$f_lang['page protect'] = "Strona logowania";
$f_lang['login'] = "Login";
$f_lang['pass'] = "Has³o";
$f_lang['value identif'] = "Zaloguj";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "Opcje";
$f_lang['script'] = "Skrypty";
$f_lang['graphismes'] = "Skórki";
$f_lang['messages'] = "Wpisów";
$f_lang['gestion'] = "Zarz±dzanie";
$f_lang['censure_mots'] = "Cenura s³ów";
$f_lang['smileys'] = "U¶mieszki";
$f_lang['utilisateurs'] = "Administratorzy";
$f_lang['ajouter'] = "Dodaj";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "O...";
$f_lang['donner_avis'] = "Dodaj opiniê";
$f_lang['deconnexion'] = "Wyloguj";

 /* options */
 $f_lang['options_livre'] = "Opcje ksiêgi";
$f_lang['options_generales'] = "Opcje ogólne";
$f_lang['langue'] = "Jêzyk";
$f_lang['send_mail'] = " Czy chcesz, ¿eby administratorzy otrzymywali email po wys³aniu nowej wiadomo¶ci ?";
$f_lang['avert_mail'] = "<br>(<b>informacja</b> : funkcja mail() na twoim serwerze jest  wy³±czona, dlatego nawet je¿eli ustawisz \"tak\" nie otrzymasz powiadomienia email)";
$f_lang['oui'] = "tak";
$f_lang['non'] = "nie";
$f_lang['options_modules'] = "Opcje pól ksiêgi go¶ci";
$f_lang['admin_champ_email'] = "Go¶cie s± proszeni o podanie adresu email";
$f_lang['admin_champ_site'] = "Go¶cie s± proszeni o podanie adresu URL swojej strony";
$f_lang['admin_champ_pays'] = "Go¶cie s± proszeni o podanie nazwy miasta i kraju";
$f_lang['admin_champ_note'] = "Go¶cie mog± oceniaæ twoj± stronê";
$f_lang['admin_ok_aff_moteur'] = "Poka¿ wyszukiwanie";
$f_lang['options_tech'] = "Opcje techniczne ";
$f_lang['url_recharger'] = "Strona po prze³adowaniu ksiêgi go¶ci";
$f_lang['url_variables'] = "Zmienne instrukcje wys³ane jako parametry (napisz # zamiast $ w zmiennej)";
$f_lang['temps_session'] = "Czas trwania sesji w sekundach dla panelu administracyjnego";
$f_lang['skin_to_use'] = "U¿ywana skórka";
$f_lang['enregistrer'] = "Zapisz";
$f_lang['nb_pages'] = "Liczba wiadomo¶ci pokazywana na ka¿dej stronie ksiêgi go¶ci";
$f_lang['merci_options'] = "Dziêkujê, informacje zaktualizowane";
$f_lang['erreur_options'] = "B£¥D\\nInformacje nie mog³yby byæ zachowane, nie mo¿na by³o zapisaæ pliku \\\"config.".$alex_livre_ext."\\\", proszê edytuj ten plik edytorem tekstów aby zmieniæ twoje ustawienia.";
$f_lang['temps_ip_post'] = "Liczba minut zanim go¶æ bêdzie móg³ zapisaæ ponownie wiadomo¶æ";
$f_lang['minutes'] = "minut";
$f_lang['cut_mots'] = "Ilo¶æ liter zanim d³ugi wyraz zostanie podzielony";
$f_lang['format_date'] = "Format daty";

/* skins */
$f_lang['ok_ajouter'] = "Dziêkujê, skórka zosta³a utworzona";
$f_lang['erreur_ajouter'] = "B£¥D\\nSkórka nie mo¿e byæ utworzona, proszê utworzyæ j± rêcznie";
$f_lang['text1_2'] = "Poni¿sze skórki bêd± zapisane w folderze &quot;templates/skins/&quot;. Ten interfejs umo¿liwia ³atw± ich modyfikacjê ale ty mo¿esz rêcznie edytowaæ pliki html.";
$f_lang['text2'] = "<b>Je¿eli te¿ chcesz zmodyfikowaæ szablony panelu administracji</b> proszê edytuj rêcznie pliki w folderze &quot;templates/admin/&quot;.";
$f_lang['text_aj_skin'] = "Dodaj skórkê";
$f_lang['ajouter'] = "Dodaj";
$f_lang['gestion_skins'] = "Zarz±dzanie skórkami";
$f_lang['vous_editez'] = "Edytujesz skórkê :";
$f_lang['style'] = "arkusz stylów";
$f_lang['ajouter_message'] = "czê¶æ edycji wiadomo¶ci";
$f_lang['nbre_messages_page'] = "Ilo¶æ wpisów / czê¶æ strony";
$f_lang['pages_dispos'] = "lista dostêpnych stron / nastêpna strona - czê¶æ poprzedniej strony";
$f_lang['texte_corps_messages'] = "tre¶æ wiadomo¶ci";
$f_lang['espacement'] = "Odstêp miêdzy wpisami";
$f_lang['text_assembly'] = "plik zbieraj±cy poprzednie czê¶ci";
$f_lang['ok_edit_skin'] = "Dziêkujê, skórka zosta³a uaktualniona";
$f_lang['erreur_edit_skin'] = "B£¥D\\ ¿aden lub kilka plików skórki nie mo¿e byæ uaktualniony. Proszê to zrobiæ rêcznie.";
$f_lang['ajouter'] = "Dodaj";
$f_lang['supprimer'] = "Skasuj";
$f_lang['text_sup_skin'] = "Skasuj skórkê";
$f_lang['ok_supprimer'] = "Dziêkujê, skórka zosta³a skasowana.";
$f_lang['erreur_supprimer'] = "B£¥D\\ ¿aden lub kilka plików skórki nie mo¿e byæ skasowany, Proszê to zrobiæ rêcznie.";

/* page des mots censurés */
$f_lang['aj_mot'] = "Dodaj nowe s³owo "; 
$f_lang['mot_interdit'] = "S³owo zakazane :";
$f_lang['remplacer_par'] = "Zamieñ na :";
$f_lang['gestion_censure'] = "Zarz±dzanie zakazanymi s³owami";
$f_lang['mot'] = "s³owo";
$f_lang['remplace_by'] = "zamienione na";
$f_lang['liste_jour'] = "Uaktualnij listê";
$f_lang['sup_mots'] = "Skasuj wybrane s³owa";
$f_lang['erreur_aj_censure1'] = "Proszê dodaæ s³owo do cenzury";
$f_lang['erreur_aj_censure2'] = "Proszê dodaæ s³owo zastêpuj±ce ocenzurowane s³owa";
$f_lang['ok_aj_mot'] = "Dziêkujê, zakazane s³owo zosta³o dodane.";
$f_lang['verif_sup'] = "Czy chcesz trwale usun±æ wybrane s³owa ?";
$f_lang['merci_modif'] = "Dziêkujê, zmiany zosta³y zapisane";

/* bannir des ip */
$f_lang['bannir_ip'] = "Banowanie IP";
$f_lang['text_ip1'] = "Ka¿dy surfer w sieci ma specyficzny 4 liczbowy identyfikator (np. 201.10.25.14). Ten identyfikator jest nadawany przez dostawcê sieci i zmienia siê, teoretycznie, za ka¿dym razem po ponownym po³±czeniu.";
$f_lang['text_ip2'] = "Je¿eli chcesz <b>powstrzymaæ u¿ytkownika przed wysy³aniem wiadomo¶ci do twojej ksiêgi go¶ci</b>, mo¿esz tutaj skopiowaæ jego IP adres. Mo¿esz te¿ blokowaæ zakres adresów IP u¿ywaj±c gwiazdki * (np. 201.15.55.*, lub nawet 158.*.*.*).";
$f_lang['ajouter_ip'] = "Dodaj nowy zbanowany IP";
$f_lang['gestion_ip'] = "Zarz±dzanie adresami IP";
$f_lang['sup_ip'] = "Usuñ wybrane zbanowane adresy IP";
$f_lang['ok_aj_ip'] = "Dziêkujê, ten adres IP zosta³ w³a¶nie zbanowany";
$f_lang['verif_sup_ip'] = "Czy chcesz trwale usun±æ wybrane adresy IP ?";

/* smileys */
$f_lang['gestion_smileys'] = "Zarz±dzanie u¶mieszkami";
$f_lang['text_smileys'] = "<b>U¶mieszki pozwalaj± na pokazanie uczuæ</b> podczas pisania wiadomo¶ci. W tym interfejsie mo¿esz ³atwo dodaæ albo usun±æ u¶mieszki tak, aby twoi u¿ytkownicy mieli ich wiêkszy wybór :o)<br><br>U¶mieszki dostêpne na tej stronie s± przechowane w folderze \"images/smileys\".";
$f_lang['ajouter_smiley'] = "Dodaj u¶mieszki";
$f_lang['image_smiley'] = "Obrazek";
$f_lang['car_replace'] = "Odpowiadaj±cy kod";
$f_lang['gestion_smileys'] = "Zarz±dzanie u¶mieszkami";
$f_lang['sup_smileys'] = "Usuñ wybrane u¶mieszki";
$f_lang['erreur_image'] = "Proszê wybraæ u¶mieszek";
$f_lang['erreur_car'] = "Proszê wybraæ odpowiadaj±cy kod wybranego u¶mieszka";
$f_lang['ok_aj_smiley'] = "Dziêkujê, u¶mieszek zosta³ dodany";
$f_lang['no_smiley'] = "U¶mieszek musi byæ obrazem GIF lub JPEG";
$f_lang['copy_impossible'] = "B£¥D\\nNie mo¿na skopiowaæ u¶mieszka do foldera \\\"images/smileys\\\".";
$f_lang['car_replace_exist'] = "B£¥D\\nOdpowiadaj±cy kod ju¿ istnieje w bazie danych.";
$f_lang['modif_smileys'] = "Uaktualnij wszystkie u¶mieszki";
$f_lang['verif_sup_smileys'] = " Naprawdê chcesz usun±æ wybrane u¶mieszki ?";
$f_lang['merci_modif_smileys'] = "Dziêkujê, u¶mieszki zosta³y zmodyfikowane.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Dodaj administratora ksiêgi go¶ci";
	$f_lang['add_admin_2'] = "Dodaj admina";
	$f_lang['ajouter_admin'] = "Dodaj";
	$f_lang['name_ajouter_admin'] = "dodaj";
}
else{
	$f_lang['add_admin_texte'] = "Modyfikuj administratora ksiêgi go¶ci";
	$f_lang['add_admin_2'] = "Modyfikuj admina";
	$f_lang['ajouter_admin'] = "Zapisz";
	$f_lang['name_ajouter_admin'] = "modyfikuj";
}

$f_lang['identif_connexion'] = "Login";
$f_lang['passe_admin'] = "Has³o";
$f_lang['email_admin'] = "Email (wa¿ne je¶li admin chce otrzymaæ email po wys³aniu wiadomo¶ci)";
$f_lang['admin_receive_email'] = " Czy chcesz ¿eby administrator otrzyma³ email po wys³aniu wiadomo¶ci?";
$f_lang['admin_modif_options'] = "czy mo¿e modyfikowaæ opcje skryptu ?";
$f_lang['admin_gestion_skins'] = "czy mo¿e zmieniaæ skórki ?";
$f_lang['admin_gestion_messages'] = "czy mo¿e zarz±dzaæ wiadomo¶ciami ?";
$f_lang['admin_gestion_censure'] = "czy mo¿e zarz±dzaæ s³owami cenzurowanymi ?";
$f_lang['admin_gestion_smileys'] = "czy mo¿e zarz±dzaæ u¶mieszkami ?";
$f_lang['admin_gestion_admin'] = "czy mo¿e zarz±dzaæ innymi opcjami administratora ?";
$f_lang['erreur_name'] = "Proszê podaæ login";
$f_lang['erreur_passe'] = "Proszê podaæ has³o";
$f_lang['erreur_email'] = "Proszê podaæ email";
$f_lang['ok_aj_admin'] = "Dziêkujê, konto zosta³o utowrzone";
$f_lang['ok_modif_admin'] = "Dziêkujê, konto zosta³o zaktualizowane";
$f_lang['erreur_aj_admin'] = "B£¥D\\nTen login ju¿ istnieje";
$f_lang['revenir'] = "Powrót do poprzedniej strony";

/* gestion des admins */
$f_lang['gest_admin'] = "Zarz±dzanie administratorami";
$f_lang['sup_admin'] = "usuñ";
$f_lang['login_admin'] = "login";
$f_lang['email_admin'] = "email";
$f_lang['modif_admin'] = "modyfikuj";
$f_lang['value_sup_admin'] = "Skasuj wybranych adminów";
$f_lang['verif_sup_admin'] = "Czy naprawdê chcesz skasowaæ wybranych adminów ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "STRONA NIEDOSTÊPNA";
$f_lang['erreur_auth'] = "Brak autoryzacji";
$f_lang['erreur_droits'] = "Nie masz wymaganych praw dostêpu do tej strony.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "¶rednia ocena go¶ci odwiedzj±cych tê stronê :";
$f_lang['title_guestbook'] = "Ksiêga go¶ci";
$f_lang['note_super'] = " : fantastyczna !";
$f_lang['note_moyen'] = " : ¶rednia";
$f_lang['note_rate'] = " : beznadziejna";
$f_lang['nom_pseudo_visiteur'] = "Imiê lub Nick :";
$f_lang['email_visiteur'] = "Adres Email :";
$f_lang['site_web_visiteur'] = "URL strony :";
$f_lang['ville_pays_visiteur'] = "Miasto / Kraj :";
$f_lang['note_visiteur'] = "Twoja ocena :";
$f_lang['message_visiteur'] = "Wpisz wiadomo¶æ :";
$f_lang['ajouter_message_visiteur'] = "Zapisz wiadomo¶æ";
$f_lang['erreur_add_nom'] = "Proszê podaæ swoje imiê";
$f_lang['erreur_add_message'] = "Proszê wpisaæ swoj± wiadomo¶æ";
$f_lang['erreur_mail'] = "Twój adres email jest niepoprawny";
$f_lang['messages'] = "Wpisy";
$f_lang['messages_a'] = "do";
$f_lang['page'] = "Strona";
$f_lang['nbre_messages'] = "Ilo¶æ wpisów";
$f_lang['message_le'] = "dnia";
$f_lang['message_note'] = "Ocena";
$f_lang['send_mail_to'] = "Wy¶lij email do";
$f_lang['go_home'] = "Odwied¼ stronê";
$f_lang['precedente'] = "&lt;&lt; poprzednia";
$f_lang['suivante'] = "nastêpna &gt;&gt;";
$f_lang['no_message'] = "Brak wpisów.";
$f_lang['no_ip'] = "UWAGA\\nTwój IP zosta³ zbanow¶any, nie jeste¶ upowa¿niony do wpisywania wiadomo¶ci w tej ksiêdze go¶.";
$f_lang['ok_post'] = "Dziêkujê !  Twoja wiadomo¶æ zosta³a zapisana poprawnie.";
$f_lang['time_erreur'] = "UWAGA\\nTwoja wiadomo¶æ nie mo¿e byæ zapisana, zapisa³e¶ j± ju¿ wcze¶niej.";
$f_lang['text_select_search'] = "Poka¿ wpisy zawieraj±ce tylko s³owa";
$f_lang['text_ok_search'] = "Ok";

/* mail envoyé */
$f_lang['mail_object'] = "[info] - Nowa wiadomo¶æ w twojej ksiêdze go¶ci - ";
$f_lang['mail_message'] = "Hi,\n\nInformujemy ciê, ¿e nowa wiadomo¶æ zosta³a zapisana w twojej ksiêdze go¶ci ";

/* gestion des messages */
$f_lang['gestion_mess'] = "Zarz±dzanie wiadomo¶ciami";
$f_lang['selectionner_pages'] = "Wybierz";
$f_lang['messages_gest'] = "wiadomo¶æ";
$f_lang['page_gest'] = "strona";
$f_lang['aller_en_page'] = "Id¼ do strony";
$f_lang['supprimer_gest'] = "skasuj";
$f_lang['auteur_gest'] = "autor";
$f_lang['modifier_gest'] = "edytuj";
$f_lang['supprimer_mess_selected'] = "Skasuj wybrane wiadomo¶ci";
$f_lang['verif_sup_mess'] = "Czy chcesz na prawdê skasowaæ wybrane wiadomo¶ci ?";

/* modifier un message */
$f_lang['modif_mess'] = "Edytuj wiadomo¶æ";
$f_lang['message_modif'] = "wiadomo¶æ";
$f_lang['nom_modif'] = "Imiê";
$f_lang['email_modif'] = "Email";
$f_lang['site_web_modif'] = "URL strony";
$f_lang['note_modif'] = "Ocena twojej strony";
$f_lang['ville_pays_modif'] = "Miasto / Kraj";
$f_lang['date_modif'] = "Data wpisania";
$f_lang['ip_modif'] = "adres IP";
$f_lang['ok_modif_mess'] = "Dziêkujê, zmiany zosta³y zapisane";

/* titre des pages */
$f_lang['title identification'] = "identyfikacja";
$f_lang['title administration'] = "administracja";
$f_lang['title frame gauche'] = "lewa ramka";
$f_lang['title options'] = "opcje";
$f_lang['title skins'] = "skórki";
$f_lang['title censure'] = "s³owo do cenzury";
$f_lang['title censure'] = "zarz±dzanie zbanowanymi IP";
$f_lang['title smileys'] = "zarz±dzanie u¶mieszkami";
$f_lang['title add admin'] = "dodaj administratora ksiêgi go¶ci";
$f_lang['title gest admin'] = "zarz±dzanie administratorami ksiêgi go¶ci";
$f_lang['title erreur'] = "B£¥D";
$f_lang['title gestion mess'] = "zarz±dzanie wiadomo¶ciami";
$f_lang['title modif mess'] = "edycja wiadomo¶ci";
$f_lang['title setup'] = "instalacja";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Nie mo¿na po³±czyæ siê z baz± danych";
$f_lang['erreur_connexion'] = "Twoje informacje ID s± niepoprawne";
$f_lang['manque login'] = "Proszê podaj swój login";
$f_lang['manque pass'] = "Proszê podaj swoje has³o";
$f_lang['end session'] = "Twoja sesja zakoñczy³a siê";

/* add version 3.11 */
$f_lang['addSignature'] = "Wpisz  ";
$f_lang['seeMessages'] = "Przegl±daj wpisy";
$f_lang['addMessageBlocAdd'] = "Wpisz wiadomo¶æ do ksiêgi go¶ci";

/* add version 3.2 */
$f_lang['version'] = "Wersja";
$f_lang['new_version_dispo'] = "Dostêpna jest uaktualniona wersja ksiêgi go¶ci";
$f_lang['version_courrante'] = "Aktualna wersja skryptu";
$f_lang['info_version'] = "Informacja o wersji, któr± posiadasz";
$f_lang['version_txt_ok'] = "Wersja któr± posiadasz ".$alex_livre_version.",<br>ta wersja jest ostatnia, ¿adna aktualizacja nie jest konieczna.";
$f_lang['version_txt_update'] = "Wersja któr± posiadasz ".$alex_livre_version.", <b>dostêpna jest nowa wersja</b>";
$f_lang['version_down'] = "Pobierz ulepszon± wersjê";
$f_lang['help_update'] = "Pomoc dla aktualizacji";
$f_lang['spam'] = "USER AGENT twojej przegl±darki nie zosta³ rozpoznany, wydaje siê, ¿e to robot próbowa³ automatycznie wys³aæ wiadomo¶æ. Je¿eli jest to nieprawda, spróbuj ponownie z inn± przegl±dark±.";
$f_lang['avis_spammeurs'] = "Informacja dla spamerów";
$f_lang['txt_spammeurs'] = "<b>Ta ksiêga go¶ci jest zabezpieczona przed spamem</b>, Adresy email i URL s± kodowane w kodzie ¼ród³owym generowanych stron, dlatego wysy³anie linków reklam jest ca³kowicie bezcelowe, poniewa¿ nie bêd± widziane przez silniki wyszukiwania (ponadto twoja wiadomo¶æ natychmiast zostanie usuniêta...)";
$f_lang['fermer'] = "Zamknij to okno";
$f_lang['valider_messages'] = "Czy chcesz przegl±daæ wys³ane wiadomo¶ci zanim bêd± widoczne publicznie w ksiêdze go¶ci ?";
$f_lang['valide'] = "Zatwierdzona ?";
$f_lang['mess_valide'] = "Ta wiadomo¶æ zosta³a zatwierdzona";
$f_lang['mess_invalide'] = "wiadomo¶æ oczekuje na zatwierdzenie";
$f_lang['info_mess_valide'] = "Wiadomo¶æ zatwierdzona ?";
$f_lang['ok_post_valid'] = "Dziêkujê ! Twoja wiadomo¶æ zosta³a zapisana i oczekuje na akceptacjê webmastera.";
$f_lang['see_skin'] = "Zobacz ksiêgê w tej skórce";
$f_lang['maxi_car'] = "Maksymalna liczba znaków/liter dozwolona w wiadomo¶ci (0 = bez limitu)";
$f_lang['il_reste'] = "Mo¿esz wpisaæ do";
$f_lang['caracteres'] = "znaków w swojej wiadomo¶ci";
$f_lang['sup_copyright'] = "Skasuj copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Nazwa tabeli kodów bezpieczeñstwa";
$f_lang['add_code_securite'] = "Czy chcesz wymagaæ, ¿eby u¿ytkownik poda³ kod bezpieczeñstwa przed wys³aniem wiadomo¶ci?";
$f_lang['t_chem_dossier_fonts'] = "pe³ny URL do folderu fontów";
$f_lang['t_color_txt_code'] = "Szesnastkowy kod koloru tekstu";
$f_lang['t_color_background_code'] = "Szesnastkowy kod koloru t³a";
$f_lang['veuillez_taper_code'] = "Przepisz kod z obrazka";
$f_lang['a_quoi_ca_sert'] = "Do czego to s³u¿y?";
$f_lang['why_code'] = "Dlaczego \"kod bezpieczeñstwa\" ?";
$f_lang['txt_why_code'] = "Ten proces pozwala mi skontrolowaæ czy wiadomo¶æ wpisana jest przez prawdziw± osobê czy przez robota.<br><br><b>Reklamy i spam s± zakazane w tej ksiêdze go¶ci!</b>";
$f_lang['erreur_code_securite'] = "Proszê przepisaæ kod z obrazka";
$f_lang['erreur_saisie_code_securite'] = "Wpisany kod jest nieprawid³owy, proszê powtórzyæ operacjê";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Automatyczna odpowied¼";
$f_lang['admin_gestion_reponse_auto'] = "czy mo¿e zarz±dzaæ automatycznymi odpowiedziami?";
$f_lang['text_reponse_auto'] = "<b>Na tej stronie mo¿esz napisaæ automatyczn± odpowied¼,</b> która bêdzie wys³ana do u¿ytkownika pisz±cego wiadomo¶æ w twojej ksiêdze go¶ci. Ta wiadomo¶æ bêdzie wys³ana je¿eli aktywujesz tê funkcjê w opcjach skryptu.<br><br>Ka¿dy jêzyk mo¿e mieæ swoj± w³asn± odpowied¼, a kod [PSEUDO] bêdzie zast±piony przez nazwê albo nick u¿ytkownika, który wys³a³ wiadomo¶æ.";
$f_lang['name_table_rep_auto'] = "Nazwa tabeli MySQL, która bêdzie zawieraæ automatyczne odpowiedzi";
$f_lang['gestion_reponses'] = "Zarz±dzanie wiadomo¶ciami";
$f_lang['msg_remerciement'] = "Podziêkowanie";
$f_lang['txt_remerciement'] = "Witaj [PSEUDO],\n\nDziêkujê za wpis do ksiêgi go¶ci!";
$f_lang['ok_save_msg_rem'] = "Dziêkujê, automatyczne podziêkowanie zosta³o zapisane.";
$f_lang['envoyer_remerciement'] = "Czy chcesz aby podziêkowanie by³o wysy³ane automatycznie ?";
$f_lang['remerciement'] = "Dziêkujê";
$f_lang['titre_guestbook'] = "Tytu³ ksiêgi";
$f_lang['text_titre_guestbook'] = "<b>Mo¿esz zmieniæ tytu³ ksiêgi go¶ci </b> i wpisaæ inny dla ka¿dego dostêpnego jêzyka.";
$f_lang['titre'] = "Tytu³";
$f_lang['parametrage'] = "Ustawienia";
$f_lang['ok_save_titre'] = "Dziêkujê, tytu³ zosta³ zapisany.";
$f_lang['ville_visiteur'] = "Miasto :";
$f_lang['pays_visiteur'] = "Kraj :";
$f_lang['flag'] = "Flaga";
$f_lang['ville_modif'] = "Miasto";
$f_lang['pays_modif'] = "Kraj";
$f_lang['action'] = "Akcja";
$f_lang['repondre'] = "Odpowied¼";
$f_lang['votre_reponse'] = "Twoja odpowied¼";
$f_lang['ok_reponse_mess'] = "Dziêkujê, Twoja odpowied¼ zosta³a zapisana";
$f_lang['defaut_titre_rep'] = "Odpowied¼ webmastera";
$f_lang['annuler'] = "Porzuæ";
$f_lang['num_appari'] = "Wy¶wietlany numer";
$f_lang['nb_max_smileys'] = "Maksymalna liczba u¶mieszków";
$f_lang['plus_smileys'] = "Poka¿ wiêcej u¶mieszków";
$f_lang['liste_all_smilies'] = "Lista wszystkich u¶mieszków";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>Ta funkcja pozwala pokazaæ ostatnie wiadomo¶ci zapisane w twojej ksiêdze go¶ci</b> na innej stronie wed³ug twojego wyboru.";
$f_lang['parametrage_modele'] = "Ustawienia szablonu";
$f_lang['ok_save_boite'] = "Dziêkujê, twoje ustawienia zosta³y zapisane";
$f_lang['format_date_boite'] = "Format daty (identyczny z funkcj± <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> PHP)";
$f_lang['nbre_maxi_pseudo_boite'] = "Maksymalna liczba znaków pokazanych dla imienia albo nicka";
$f_lang['nbre_maxi_message_boite'] = "Maksymalna liczba znaków pokazanych dla wiadomo¶ci";
$f_lang['modele_affichage_donnees'] = "Kod szablonu do wysy³ania wiadomo¶ci";
$f_lang['url_dossier_livre_boite'] = "Kompletny URL do folderu twojej ksiêgi go¶ci";
$f_lang['url_livre_boite'] = "Kompletny URL do strony index twojej ksiêgi go¶ci";
$f_lang['generation_code'] = "Tworzenie kodu Javascript";
$f_lang['nom_msg_afficher'] = "Ilo¶æ pokazywanych wiadomo¶ci ";
$f_lang['generer_code'] = "Tworzenie kodu wywo³ania Javascript";
$f_lang['code_a_copier'] = "Kod HTML do skopiowania na stronê, któr± wybra³e¶";
$f_lang['erreur_boite_java'] = "Proszê ustawiæ prawid³ow± ilo¶æ pokazywanych wiadomo¶ci";
$f_lang['erreur_par_boite'] = "B£¥D USTAWIEÑ, nie mo¿na oddzieliæ ³añcucha [BOUCLE] ... [/BOUCLE] w twoim szablonie.";
$f_lang['saut_ligne_msg_boite'] = "Utrzymuj odstêp linii w wiadomo¶ciach";
$f_lang['message_a'] = "godz.";
$f_lang['admin_gestion_bdd'] = "czy mo¿e zarz±dzaæ baz± danych ?";
$f_lang['bdd'] = "Baza danych";
$f_lang['optimisation'] = "Optymalizacja";
$f_lang['sauvegarde'] = "Backup";
$f_lang['restauration'] = "Przywracanie";
$f_lang['optimisation_txt'] = "<b>Po zapisaniu lub usuwaniu danych, w tabelach twojej bazy danych narasta nie u¿ywana pusta przestrzeñ.</b> Nie wp³ywa to dobrze na wydajno¶æ twojej bazy danych oraz twojej strony, ta strona pozwala na rozwi±zanie tego problemu przez optymalizowanie tabel.";
$f_lang['liste_tables'] = "Lista tabel twojej bazy danych";
$f_lang['lancer_optimisation'] = "Rozpocznij optymalizacjê";
$f_lang['tables'] = "TABELA";
$f_lang['pertes'] = "NADMIAR";
$f_lang['octets'] = "bajtów";
$f_lang['ok_optimise'] = "Dziêkujê, tabele maj¹ce straty zosta³y optymalizowane";
$f_lang['txt_sauvegarde'] = "<b>Je¿eli chcesz trzymaæ wys³ane wiadomo¶ci przez d³ugi czas, radzimy robiæ regularn± i okresow± kopiê  zapasow±.</b> Uszkodzenie dysku mog³oby naprawdê zniszczyæ wszystkie twoje dane.  Kopia zapasowa mog³aby te¿ byæ bardzo u¿yteczna w przypadku chêci przeniesienia twoich wiadomo¶ci na inny serwer.";
$f_lang['lancer_sauvegarde'] = "Uruchom backup";
$f_lang['lancer_restauration'] = "Uruchom przywracanie";
$f_lang['txt_restauration'] = "<b>Je¿eli wykona³e¶ kopiê zapasow±, mo¿esz przywróciæ kompletn± bazê danych twojej ksiêgi go¶ci</b> Wybierz w³a¶ciwy plik na twoim dysku twardym.<br><br><b><u>UWAGA</u></b>, je¿eli ten plik jest bardzo du¿y (kilka megabajtów), proces przywracania móg³by spowodowaæ problem w twoich g³ównych ustawieniach serwera  (set_time_limit() i maksymalny dozwolony rozmiar w ustawieniach uploadu).";
$f_lang['select_file'] = "Wybierz plik kopii na twoim dysku albo na serwerze (.ZIP or .SQL)";
$f_lang['confirm_restauration'] = "Czy potwierdzasz chêæ uruchomienia przywracania i wymazania wszystkich bie¿±cych danych?";
$f_lang['select_file_restau'] = "Proszê wybierz plik na twoim dysku twardym";
$f_lang['erreur_ext_restau'] = "Wybrane rozszerzenie pliku nie jest .ZIP lub .SQL, przywracanie nie mo¿e byæ wykonane.";
$f_lang['conseil_zip'] = " (Rozpakuj plik ZIP na twoim dysku by dostaæ siê do pliku SQL)";
$f_lang['erreur_ext_zip'] = "Rozszerzenie PHP_ZIP nie jest dostêpne na twoim serwerze, przywracanie przez plik ZIP jest tak¿e nie mo¿liwe. Proszê wybierz plik .SQL na twoim dysku twardym".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "B£¥D odczytu twojego archiwum ZIP, nie mo¿na wykonaæ przywracania. Mo¿esz spróbowaæ z plikiem .SQL".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Wybrany plik SQL nie wydaje siê byæ skryptem @lex Guestbook. Nie mo¿na wykonaæ przywracania.";
$f_lang['restauration_terminee'] = "Dziêki ! Przywracanie zakoñczy³o siê sukcesem !";

							/* V5 */
$f_lang['name_table_ban'] = "Nazwy zbanowanych adresów IP, tabela nicków i adresów E-mail";
$f_lang['ok_validation'] = "Dziêki, zmiany zatwierdzone";
$f_lang['selectionner_tous_messages'] = "Zaznacz/odznacz wszystko";
$f_lang['admin_send_mail'] = "Czy chcesz aby administratorzy otrzymali E-mail po zapisaniu widomo¶ci ?";

//ajout bannissement
$f_lang['bannissement'] = "Banowanie";
$f_lang['admin_gestion_bannissement'] = "czy mo¿e zarz±dzaæ banowaniem ?";
$f_lang['interdit_de_message'] = "Twoja wiadomo¶æ nie zosta³a zapisana. Aby zobaczyæ powód odmowy (zakazane s³owo, nie wype³nione wymagane pole...) Skrypt Java musi byæ aktywowany w twojej przegl±darce. Mo¿esz spróbowaæ zmodyfikowaæ swoj± wiadomo¶æ.";
$f_lang['valider_mess'] = "Zastosuj wybrane powy¿ej opcje walidacji";
$f_lang['erreur_ip'] = "Niew³a¶ciwy adres IP";
$f_lang['erreur_ip1'] = "Wpisz 1. czê¶æ adresu IP pomiêdzy 0 i 255 lub *";
$f_lang['erreur_ip2'] = "Wpisz 2. czê¶æ adresu IP pomiêdzy 0 i 255 lub *";
$f_lang['erreur_ip3'] = "Wpisz 3. czê¶æ adresu IP pomiêdzy 0 i 255 lub *";
$f_lang['erreur_ip4'] = "Wpisz 4. czê¶æ adresu IP pomiêdzy 0 i 255 lub *";
$f_lang['explication_bannir_mot'] = "Masz dwie opcje cenzurowania s³ów w wiadomo¶ciach. Albo ocenzurowane s³owa bêd± zamienione wybranym tekstem lub symbolami albo wiadomo¶æ zostanie odrzucona.";
$f_lang['bannir_mot'] = "Czy chcesz aby wiadomo¶æ zawieraj±ca ocenzurowane s³owa (zobacz \"Cenzura s³ów\" w menu) zosta³a odrzucona ?<br/>Je¶li zaznaczysz \"nie\", s³owa te zostan± tylko zamienione wybranym tekstem lub symbolami.";

/* bannir des pseudos */
$f_lang['bannir_pseudo'] = "Banowanie nicków/imion";
$f_lang['admin_text_pseudo'] = "Je¶li chcesz u¿ytkownikowi <b>zabroniæ wpisywania wiadomo¶ci do twojej ksiêgi go¶ci</b>, musisz wpisaæ tutaj jego/jej nick/imiê. Mo¿esz u¿yæ gwiazdki *, która zast±pi dowoln± literê lub cyfrê w nazwie konta.";
$f_lang['ajouter_pseudo'] = "Dodawanie nowego nicka";
$f_lang['gestion_pseudo'] = "Zarz±dzanie nickami";
$f_lang['sup_pseudo'] = "Skasuj wybrany nick";
$f_lang['erreur_pseudo'] = "Dodaj nick";
$f_lang['ok_aj_pseudo'] = "Dziêki, ten nick od teraz jest zbanowany";
$f_lang['verif_sup_pseudo'] = "Czy naprawdê chcesz skasowaæ wszystkie wybrane nazwy ?";

/* bannir des emails */
$f_lang['bannir_emails'] = "Banowanie adresów E-mail";
$f_lang['admin_text_email'] = "Je¶li chcesz u¿ytkownikowi <b>zabroniæ wpisywania wiadomo¶ci do twojej ksiêgi go¶ci</b>, musisz wpisaæ tutaj jego/jej adres E-mail. Mo¿esz u¿yæ gwiazdki *, która zablokuje ca³± domenê, np. : *@spamdomain.com.";
$f_lang['ajouter_email'] = "Dodawanie nowego adresu E-mail";
$f_lang['gestion_email'] = "Zarz±dzanie adresami E-mail";
$f_lang['sup_email'] = "Skasuj wybrany adres E-mail";
$f_lang['erreur_email'] = "Dodaj adres E-mail";
$f_lang['ok_aj_email'] = "Dziêki, ten adres E-mail od teraz jest zbanowany";
$f_lang['verif_sup_email'] = "Czy naprawdê chcesz skasowaæ wszystkie wybrane adresy E-mail ?";

$f_lang['no_pseudo'] = "UWAGA\\nTwój nick zosta³ zbanowany, nie mo¿esz zapisaæ tej wiadomo¶ci w ksiêdze go¶ci.";
$f_lang['no_email'] = "UWAGA\\nTwój adres E-mail zosta³ zbanowany, nie mo¿esz zapisaæ tej wiadomo¶ci w ksiêdze go¶ci.";
$f_lang['no_ville'] = "UWAGA\\nMiasto, które wpisa³e¶ jest nieprawid³owe, nie mo¿esz zapisaæ tej wiadomo¶ci w ksiêdze go¶ci.";
$f_lang['no_mot'] = "UWAGA\\nWpisa³e¶ s³owo, które jest zakazane, nie mo¿esz zapisaæ tej wiadomo¶ci w ksiêdze go¶ci.\\nProszê popraw swoj± wiadomo¶æ !";

// interdiction des URL
$f_lang['url_interdite'] = "UWAGA\\nURL w wiadomo¶ci";
$f_lang['url_interdites'] = "Czy chcesz odrzucaæ wiadomo¶ci zawieraj±ce URL ?";
$f_lang['url_cliquables'] = "Czy chcesz aby URL w wiadomo¶ciach by³ aktywny (zlinkowany) ?";

//remplacement du fichier /config/config.php par une table dans la BDD
$f_lang['name_table_config'] = "Nazwa tabeli parametrów konfiguracji";

// decalage horaire
$f_lang['admin_decalage_horaire'] = "Mo¿esz dostosowaæ ró¿nicê czasu miêdzy serwerem, a twoim czasem lokalnym. Pozostaw 0 je¿eli nie potrzebujesz dostosowaæ czasu.";
$f_lang['heures'] = "godzin";
$f_lang['secondes'] = "sekund";
$f_lang['admin_erreur_decalage_horaire'] = "Musisz wpisaæ ró¿nicê czasu pomiêdzy -12 i +12";

// interdit la suppression du dernier admin
$f_lang['admin_suppr_dernier_admin'] = "Nie mo¿esz skasowaæ ostatniego administratora";

// désactivation des smileys en un clic
$f_lang['admin_autoriser_smileys'] = "Czy zezwalasz na u¶mieszki ?";

// pour empêcher que le temps de session de la partie admin ne soit trop court
$f_lang['admin_temps_session_min'] = "UWAGA\\nWpisana d³ugo¶æ sesji jest za krótka !\\nMusisz podaæ warto¶æ powy¿ej 300 sekund";

// inclure le livre dans une page PHP
$f_lang['admin_inclure_livre'] = "Czy chcesz dodaæ ksiêgê go¶ci do pliku PHP ?";
$f_lang['admin_inclure_livre_code'] = "Tutaj znajduje siê kod PHP, który powiniene¶ dodaæ do twojego pliku PHP pomiêdzy tagi &lt;?php i ?&gt; .\n\nPowiniene¶ równie¿ zmieniæ szyk \$chem_absolu w pliku /index.php ksiêgi go¶ci i dodaæ arkusz stylów na stronie edycji wiadomo¶ci (sprawd¼ FAQ w celu wyja¶nienia)";
$f_lang['admin_fichier_inclusion'] = "Wpisz tutaj ca³kowit± ¶cie¿kê dostêpu do pliku, w którym chcesz w³±czyæ ksiêgê go¶ci (w ten sposób: /folder1/folder2/plik_z_kodem_ksiêgi.php). Musisz klikn±æ przycisk \"Zapisz\" aby zobaczyæ czy ¶cie¿ka dostêpu zosta³a wziêta pod uwagê w kodzie";
$f_lang['admin_fichier_inclusion_erreur'] = "UWAGA\\nNie wpisa³e¶ poprawnej ¶cie¿ki do pliku\\nŒcie¿ka musi wygl±daæ w ten sposób: /folder1/folder2/plik_z_kodem_ksiêgi.php";

// gestion des champs
$f_lang['admin_champ_propose'] = "Nie proponuj";
$f_lang['admin_champ_obligatoire'] = "Obowi±zkowe";
$f_lang['admin_champ_prive'] = "Prywatne";
$f_lang['admin_champ_pseudo'] = "U¿ytkownik mo¿e wpisaæ swój nick";
$f_lang['admin_champ_ville'] = "U¿ytkownik mo¿e wpisaæ swoje miasto";
$f_lang['admin_donner_focus'] = "Czy chcesz aby po za³adowaniu strony kursor znalaz³ siê w polu 'Imiê lub Nick'  ?";
$f_lang['champ_obligatoire_vide'] = "Co najmniej jedno obowi±zkowe pole (oznaczone *) jest puste. Proszê je wype³niæ.";
$f_lang['erreur_add_nom'] = "Proszê podaæ swoje imiê";
$f_lang['erreur_add_email'] = "Proszê podaæ swój adres E-mail";
$f_lang['erreur_add_site'] = "Proszê podaæ URL swojej strony";
$f_lang['erreur_add_ville'] = "Proszê podaæ nazwê miasta";
$f_lang['erreur_add_pays'] = "Proszê podaæ nazwê kraju";
$f_lang['erreur_add_note'] = "Proszê podaæ ocenê";
$f_lang['erreur_add_message'] = "Proszê wpisaæ swoj± wiadomo¶æ";
$f_lang['erreur_url'] = "Adres twojej strony wygl±da na nieprawid³owy";

// code de sécurité : vérification de la présence de la librairie GD2
$f_lang['admin_gd_non_activee'] = "<span class=\"texte_alerte\">Nie mo¿esz u¿yæ opcji kodu bezpieczeñstwa !<br/>\n Twój serwer nie zawiera biblioteki GD2 i/lub opcji koniecznych do pracy kodu bezpieczeñstwa</span>";

// lien vers l'admin et vers la page d'accueil
$f_lang['admin_lien_admin'] = "Czy chcesz umie¶ciæ link do czê¶ci administracyjnej na dole Ksiêgi Go¶ci ?";
$f_lang['admin_lien_accueil'] = "Czy chcesz umie¶ciæ link przej¶cia na stronê g³ówn± lub inn±&nbsp;?";
$f_lang['admin_chemin_lien_accueil'] = "Je¶li pozostawisz to pole puste link poprowadzi do strony g³ównej. Mo¿esz podaæ kompletn± ¶cie¿kê do dowolnej strony (np. /folder1/strona1.htm).";
$f_lang['admin_chemin_lien_accueil_erreur'] = "Podana ¶cie¿ka jest nieprawid³owa. Proszê podaæ kompletn± ¶cie¿kê (np. /mojastrona.php).";
$f_lang['texte_lien_accueil'] = "Powrót do strony g³ównej";
$f_lang['texte_lien_admin'] = "Administracja Ksiêgi Go¶ci";

$f_lang['admin_retour_livre'] = "Zobacz Ksiêgê Go¶ci";

// symboles champs privés/obligatoires sur le formulaire
// /!\ Attention, maximum 90 caractères
$f_lang['information_champ_prive'] = "Zawarto¶æ tego pola widoczna jest tylko przez administratora Ksiêgi Go¶ci.";
$f_lang['information_champ_obligatoire'] = "To pole jest wymagane do wys³ania wiadomo¶ci.";

/* Bas de page partie admin */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

$f_lang['host_base'] = "Serwer (najczê¶ciej : localhost)";

$f_lang['name_table_txt_lang'] = "Nazwa tabeli zawieraj±cej przerobione teksty (np. tytu³ Ksiêgi Go¶ci)";

$f_lang['erreur_host'] = "Proszê wpisaæ serwer bazy danych";

$f_lang['erreur_ecriture'] = "<b>B£¥D</b>, nie mo¿na zapisaæ w folderze \"config/\".<br><br>Proszê zmieniæ atrybuty Unixowe foldera \"config\" (chmod 777) i ponownie wykonaæ : <a href=\"./setup.php\"><b>instalacjê</b></a>.";

$f_lang['options_livre'] = "Opcje Ksiêgi Go¶ci";

$f_lang['text1'] = "<b>S³owa ocenzurowane bêd± automatycznie zamieniane</b> w wiadomo¶ciach wys³anych przez u¿ytkowników. Mo¿esz je zamieniæ wszystkie \"wulgaryzm\" tekstem \"**ocenzurowano**\".<br/>Je¶li wybra³e¶ opcjê odrzucania wiadomo¶ci zawieraj±cych \"wulgaryzm\", <u>mo¿esz byæ zmuszony do ci±g³ego poprawiania tekstów</u>. Tutaj mo¿esz prze³±czyæ tryb (zamiana s³ów lub odrzucenie wiadomo¶ci).";
?>