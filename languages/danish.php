<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2011    //
//         Hercelin Maxime (c) 2005 - 2011   //
//         http://www.alexguestbook.net/     //
//              all right reserved           //
//   Danish translation by Thomas Knudsen    //
//          http://www.knudsweb.dk/          //
///////////////////////////////////////////////

/* Encodage utilisé dans le script */
$SCRIPT_ENCODAGE = "iso-8859-1";
$CONTENT_LANGUAGE = "da";

/* setup */
$f_lang['install_auto'] = "Automatisk installation";
$f_lang['identi_base'] = "Database ID";
$f_lang['type_base'] = "Database type";
$f_lang['user_base'] = "Bruger";
$f_lang['pass_base'] = "Adgangskode";
$f_lang['nom_base'] = "Database navn";
$f_lang['nom_table'] = "Tabel navne";
$f_lang['name_table_sessions'] = "Sessions tabel navn";
$f_lang['name_table_users'] = "Bruger tabel navn";
$f_lang['name_table_messages'] = "Besked tabel navn";
$f_lang['name_table_censure'] = "Censur tabel navn";
$f_lang['name_table_ip'] = "Spærrede IP tabel navn";
$f_lang['name_table_smileys'] = "Smiley table navn";
$f_lang['extension_script'] = "Script extension";
$f_lang['choose_extension'] = "Vælg extension til script<br>(Vi anbefaler \"php\", eller skal du omdøbe alle filerne med det valgte extension)";
$f_lang['identi_acces_admin'] = "Din ID for adgang til administrations panelet";
$f_lang['login_admin'] = "Logind";
$f_lang['pass_admin'] = "Adgangskode";
$f_lang['verif_pass_admin'] = "Skriv adgangskoden igen";
$f_lang['email_admin_setup'] = "Din Email";
$f_lang['installer'] = "Installer";
$f_lang['erreur_host'] = "Du glemte at angive (database server host)";
$f_lang['erreur_user'] = "Du glemte at angive (ID)";
$f_lang['erreur_nom_base'] = "Du glemte at angive (database navn)";
$f_lang['erreur_log_admin'] = "Du glemte at angive logind navn til administrations panelet";
$f_lang['erreur_pass_admin'] = "Du glemte at angive adgangskoden til administrations panelet";
$f_lang['erreur_pass_differents'] = "ADVARSEL, Dine adgangskoder stemmer ikke overens.";
$f_lang['erreur_first_connexion'] = "<b>FEJL, forbindelse til databasen er ikke mulig.</b><br><br>kontroller din ID : <a href=\"javascript:history.go(-1);\"><b>back</b></a>.";
$f_lang['erreur_install'] = "Installationen fejlede";
$f_lang['ok_install'] = "Installation fuldført";
$f_lang['text_ok_install'] = "<b>Tak ! Installation fuldført.</b><br><br>For en sikkerheds grund anbefaler vi dig kraftigt at slette installations filen du brugte (\"setup.php\"), hvis du vil undgå at andre folk, får mulighed for at bruge den til at lave rod i dine konfigurations filer.<br><br>Du kan nu administrere din gæstebog ved at trykke <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>here</b></a> eller<br> se den som dine besøgende <a href=\"".$chem_absolu."\" target=\"_blank\"><b>her</b></a>.";

/* administration */
$f_lang['page protect'] = "Beskyttet side";
$f_lang['login'] = "Logind";
$f_lang['pass'] = "Adgangskode";
$f_lang['value identif'] = "Identifikation";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "Indstillinger";
$f_lang['script'] = "Script";
$f_lang['graphismes'] = "Gæstebog skins";
$f_lang['messages'] = "Beskeder";
$f_lang['gestion'] = "Administration";
$f_lang['censure_mots'] = "Censur ord";
$f_lang['smileys'] = "Smileyer";
$f_lang['utilisateurs'] = "Administratorer";
$f_lang['ajouter'] = "Tilføj";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "Om...";
$f_lang['donner_avis'] = "Giv os din mening";
$f_lang['deconnexion'] = "Afbryd";

 /* options */
 $f_lang['options_livre'] = "Gæstebog indstillinger";
$f_lang['options_generales'] = "Overordnet muligheder";
$f_lang['langue'] = "Sprog";
$f_lang['send_mail'] = "Ønsker du at administratorerne modtager en emailnår en ny besked er tilføjet ?";
$f_lang['avert_mail'] = "<br>(<b>information</b> : mail() funktionen på din host er deaktiveret, så selvom du afkrydser \"ja\" vil du ikke modtage en email)";
$f_lang['oui'] = "ja";
$f_lang['non'] = "nej";
$f_lang['options_modules'] = "Gæstebog felt muligheder";
$f_lang['admin_champ_email'] = "Gæster bedes om email adresse";
$f_lang['admin_champ_site'] = "Gæster bedes om URL til deres hjemmeside";
$f_lang['admin_champ_pays'] = "Gæste bedes om by og land";
$f_lang['admin_champ_note'] = "Gæsterne kan give karakter til din side";
$f_lang['admin_ok_aff_moteur'] = "Vis søge funktionen";
$f_lang['options_tech'] = "Tekniske muligheder";
$f_lang['url_recharger'] = "Siden der skal reloades for gæstebogen";
$f_lang['url_variables'] = "Variable instruktioner bliver sendt som  (type # istedet for $ i en variabel)";
$f_lang['temps_session'] = "Session varighed i sekunder for administrator panelet";
$f_lang['skin_to_use'] = "Skin der skal bruges";
$f_lang['enregistrer'] = "Gem";
$f_lang['nb_pages'] = "Antal beskeder der skal vises på hver gæstebog side";
$f_lang['merci_options'] = "Tak, informationerne er opdateret";
$f_lang['erreur_options'] = "FEJL\\nInformationerne kunne ikke gemmes, det var ikke muligt at skrive dem i \\\"config.".$alex_livre_ext."\\\" filen, rediger derfor filen i en tekst editor for at ændre dine indstillinger.";
$f_lang['temps_ip_post'] = "Antal minutter der skal gå før en gæst kan tilføje en ny besked";
$f_lang['minutes'] = "minutter";
$f_lang['cut_mots'] = "Antal bogstaver inden et langt ord spilttes";
$f_lang['format_date'] = "Dato format";

/* skins */
$f_lang['ok_ajouter'] = "Tak, dit skin er blevet genereret";
$f_lang['erreur_ajouter'] = "FEJL\\nDit skin kunne ikke gemmes, opret det venligst manualt";
$f_lang['text1_2'] = "Følgende skin vil blive gemt i &quot;templates/skins/&quot; folderenr. Dette interface muliggør at nemt ændre den, men du kan også manualt redigere html filen.";
$f_lang['text2'] = "<b>Hvis du også ønsker at ændre templates i administrations panelet</b> rediger da filerne manualt i &quot;templates/admin/&quot; folderen.";
$f_lang['text_aj_skin'] = "Tilføj et skin";
$f_lang['ajouter'] = "Tilføj";
$f_lang['gestion_skins'] = "Skins administration";
$f_lang['vous_editez'] = "Du redigerer nu dette skin :";
$f_lang['style'] = "stylesheet";
$f_lang['ajouter_message'] = "tilføj en besked del";
$f_lang['nbre_messages_page'] = "antal beskeder / side del";
$f_lang['pages_dispos'] = "liste over tilgængelige sider / næste side - forrige side del";
$f_lang['texte_corps_messages'] = "besked krop";
$f_lang['espacement'] = "mellemrum mellen 2 beskeder";
$f_lang['text_assembly'] = "fil der samler forrige del";
$f_lang['ok_edit_skin'] = "Tak, dit skin er opdateret";
$f_lang['erreur_edit_skin'] = "FEJL\\nEN eller flere fil(er) til skin kunne ikke opdateres. Rediger dem venligst manualt.";
$f_lang['ajouter'] = "Tilføj";
$f_lang['supprimer'] = "Slet";
$f_lang['text_sup_skin'] = "Slet et skin";
$f_lang['ok_supprimer'] = "Tak, skin slettet.";
$f_lang['erreur_supprimer'] = "FEJL\\nEn eller flere fil(er) til det skin kunne ikke slettes, du kan selv slette dem.";

/* page des mots censurés */
$f_lang['aj_mot'] = "Tilføj et ord "; 
$f_lang['mot_interdit'] = "Forbudte ord :";
$f_lang['remplacer_par'] = "Erstat med :";
$f_lang['gestion_censure'] = "Forbudte ord administration";
$f_lang['mot'] = "ord";
$f_lang['remplace_by'] = "restat med";
$f_lang['liste_jour'] = "Opdater listen";
$f_lang['sup_mots'] = "Fjern det valgte ord";
$f_lang['erreur_aj_censure1'] = "Indtast et ord der skal censureres";
$f_lang['erreur_aj_censure2'] = "Indtast ordet som skal erstatte det censurerede";
$f_lang['ok_aj_mot'] = "Tak, det censurerede ord er blevet tilføjet.";
$f_lang['verif_sup'] = "Ønsker du at permanent fjerne det valgte ord ?";
$f_lang['merci_modif'] = "Tak, ændringer er blvet gemt";

/* bannir des ip */
$f_lang['bannir_ip'] = "Nægtet ip'er";
$f_lang['text_ip1'] = "Alle der surfer på nettet har et 4 cifret ID (f.x. 201.10.25.14). Dette ID tildeles af internet udbyderen.";
$f_lang['text_ip2'] = "Hvis du ønsker at <b>forhindre en bruger at tilføje beskeder i din gæstebog</b>, kan du kopiere hans/hendes IP adresse her. Du kan også nægte en serie IP adresser adgang ved at bruge escape symbolet * (f.x. 201.15.55.*, eller 158.*.*.*).";
$f_lang['ajouter_ip'] = "Tilføj nyt nægtet IP";
$f_lang['gestion_ip'] = "Administrer IP'er";
$f_lang['sup_ip'] = "Fjern de valgte IP'er";
$f_lang['ok_aj_ip'] = "Tak, dette IP er nu nægtet adgang";
$f_lang['verif_sup_ip'] = "Ønsker du virkeligt at slette de valgte IP´er ?";

/* smileys */
$f_lang['gestion_smileys'] = "Smileys administration";
$f_lang['text_smileys'] = "<b>Smileys tillader brugerne at vise følelser</b> . Via dette interface kan du nemt tilføje eller fjerne smileys :o)<br><br>Smileys det er tilgængelige på denne sider er gemt i \"images/smileys\" folderen.";
$f_lang['ajouter_smiley'] = "Tilføj en smiley";
$f_lang['image_smiley'] = "Billede";
$f_lang['car_replace'] = "Tilhørende kode";
$f_lang['gestion_smileys'] = "Smileys administration";
$f_lang['sup_smileys'] = "Slet de valgte smileys";
$f_lang['erreur_image'] = "Vælg en smiley";
$f_lang['erreur_car'] = "Vælg en tilhørende kode til den valgte smiley";
$f_lang['ok_aj_smiley'] = "Tak, smileyen er nu tilføjet";
$f_lang['no_smiley'] = "Smiley filen skal være at formatet .GIF eller .JPEG";
$f_lang['copy_impossible'] = "FEJL\\nDet var ikke muligt at kopiere smileyen i \\\"images/smileys\\\" folderen.";
$f_lang['car_replace_exist'] = "FEJL\\nDen tilhørende kode findes allerede i databasen.";
$f_lang['modif_smileys'] = "Opdater alle smileys";
$f_lang['verif_sup_smileys'] = "Ønsker du virkeligt at slette de valgte smileys ?";
$f_lang['merci_modif_smileys'] = "Tak, smiley er nu ændret.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Tilføj en gæstebog administrator";
	$f_lang['add_admin_2'] = "Tilføj en admin";
	$f_lang['ajouter_admin'] = "Tilføj";
	$f_lang['name_ajouter_admin'] = "Tilføj";
}
else{
	$f_lang['add_admin_texte'] = "Ændre en gæstebog admin";
	$f_lang['add_admin_2'] = "Ændre en admin";
	$f_lang['ajouter_admin'] = "Gem";
	$f_lang['name_ajouter_admin'] = "ændre";
}

$f_lang['identif_connexion'] = "Forbindelse ID";
$f_lang['passe_admin'] = "Adgangskode";
$f_lang['email_admin'] = "Email (vigtigt hvis admin skal modtage en Email når en besked er tilføjet)";
$f_lang['admin_receive_email'] = "Ønsker du at administratoren skal modtage en Email når der tilføjes en besked ?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;skal han have lov til at ændre script muligheder ?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;at ændre skin ?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;at administrere beskeder ?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;at administrere censurerede ord ?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;ad administrere smileys ?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;at administrere andre administratores' konti ?";
$f_lang['erreur_name'] = "Angiv forbindelses ID";
$f_lang['erreur_passe'] = "Angiv adgangskode";
$f_lang['erreur_email'] = "Angiv Email";
$f_lang['ok_aj_admin'] = "Tak, kontoen er nu oprettet";
$f_lang['ok_modif_admin'] = "Tak, kontoen er opdateret";
$f_lang['erreur_aj_admin'] = "FEJL\\ndette logind eksisterer allerede";
$f_lang['revenir'] = "Tilbage til forrige side";

/* gestion des admins */
$f_lang['gest_admin'] = "Administrer administratorer";
$f_lang['sup_admin'] = "fjern";
$f_lang['login_admin'] = "logind";
$f_lang['email_admin'] = "Email";
$f_lang['modif_admin'] = "ændre";
$f_lang['value_sup_admin'] = "Fjern alle de valgte admins";
$f_lang['verif_sup_admin'] = "Ønsker du virkeligt at fjerne de valgte admins ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "SIDEN ER IKKE TILGÆNGELIG";
$f_lang['erreur_auth'] = "Autoritations fejl";
$f_lang['erreur_droits'] = "Du her ikke de krævede rettigheder for at få adgang til siden.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Gennemsnits karakter givet af gæsterne til siden :";
$f_lang['title_guestbook'] = "Gæstebog";
$f_lang['note_super'] = " : fantastisk !";
$f_lang['note_moyen'] = " : nogenlunde";
$f_lang['note_rate'] = " : sikke noget lort";
$f_lang['nom_pseudo_visiteur'] = "Navn eller Kaldenavn :";
$f_lang['email_visiteur'] = "Email adresse :";
$f_lang['site_web_visiteur'] = "Hjemmeside URL :";
$f_lang['ville_pays_visiteur'] = "By / Land :";
$f_lang['note_visiteur'] = "Din karakter :";
$f_lang['message_visiteur'] = "Din besked :";
$f_lang['ajouter_message_visiteur'] = "Tilføj denne besked";
$f_lang['erreur_add_nom'] = "Skriv dit navn";
$f_lang['erreur_add_message'] = "Skriv din besked";
$f_lang['erreur_mail'] = "Din Email er ikke korrekt indtastet";
$f_lang['messages'] = "Beskeder";
$f_lang['messages_a'] = "til";
$f_lang['page'] = "Side";
$f_lang['nbre_messages'] = "Antal beskeder";
$f_lang['message_le'] = "den";
$f_lang['message_note'] = "Karakter";
$f_lang['send_mail_to'] = "Send en Email til";
$f_lang['go_home'] = "Besøg siden";
$f_lang['precedente'] = "&lt;&lt; forrige";
$f_lang['suivante'] = "næste &gt;&gt;";
$f_lang['no_message'] = "Der er ingen beskeder at vise.";
$f_lang['no_ip'] = "SE HER\\nDin IP er nægtet adgang, du kan derfor ikke skrive beskeder i denne gæstebog.";
$f_lang['ok_post'] = "Tak !  Din besked er nu tilføjet gæstebogen.";
$f_lang['time_erreur'] = "SE HER\\nDin besked kunne ikke tilføjes gæstebogen, du kun tilføje en besked i timen.";
$f_lang['text_select_search'] = "Vis kun beskeder der indeholder følgende ord";
$f_lang['text_ok_search'] = "Ok";

/* mail envoyé */
$f_lang['mail_object'] = "[info] - Der er en ny besked i din gæstebog - ";
$f_lang['mail_message'] = "Hej,\n\nDer er tilføjet en ny besked i din gæstebog ";

/* gestion des messages */
$f_lang['gestion_mess'] = "Administrer beskeder";
$f_lang['selectionner_pages'] = "Vælg";
$f_lang['messages_gest'] = "besked";
$f_lang['page_gest'] = "side";
$f_lang['aller_en_page'] = "Gå til side";
$f_lang['supprimer_gest'] = "slet";
$f_lang['auteur_gest'] = "forfatter";
$f_lang['modifier_gest'] = "rediger";
$f_lang['supprimer_mess_selected'] = "Slet den valgte besked";
$f_lang['verif_sup_mess'] = "Ønsker du virkelig at slette den valgte besked ?";

/* modifier un message */
$f_lang['modif_mess'] = "Rediger en besked";
$f_lang['message_modif'] = "Besked";
$f_lang['nom_modif'] = "Navn";
$f_lang['email_modif'] = "Email";
$f_lang['site_web_modif'] = "Hjemmeside URL";
$f_lang['note_modif'] = "Karakter givet til din side";
$f_lang['ville_pays_modif'] = "By / Land";
$f_lang['date_modif'] = "Dato tilføjet";
$f_lang['ip_modif'] = "IP adresse";
$f_lang['ok_modif_mess'] = "Tak, rettelserne er gemt";

/* titre des pages */
$f_lang['title identification'] = "identifikation";
$f_lang['title administration'] = "administration";
$f_lang['title frame gauche'] = "left frame";
$f_lang['title options'] = "indstillinger";
$f_lang['title skins'] = "skins";
$f_lang['title censure'] = "ord der skal censureres";
$f_lang['title censure'] = "administrer nægtede IP´er";
$f_lang['title smileys'] = "administrer smileyer";
$f_lang['title add admin'] = "tilføj en gæstebog administrator";
$f_lang['title gest admin'] = "administrer gæstebog administratorer";
$f_lang['title erreur'] = "fejl";
$f_lang['title gestion mess'] = "administrer beskeder";
$f_lang['title modif mess'] = "rediger en besked";
$f_lang['title setup'] = "installation";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Det var ikke muligt at forbinde til databasen";
$f_lang['erreur_connexion'] = "Din ID info er forkert";
$f_lang['manque login'] = "Indtast logind";
$f_lang['manque pass'] = "Indtast adgangskode";
$f_lang['end session'] = "Sessionen afbrudt";

/* add version 3.11 */
$f_lang['addSignature'] = "Skriv en besked";
$f_lang['seeMessages'] = "Læs beskeder";
$f_lang['addMessageBlocAdd'] = "Tilføj en besked til gæstebogen";

/* add version 3.2 */
$f_lang['version'] = "Version";
$f_lang['new_version_dispo'] = "En opdateret version af gæstebogen er tilgængelig";
$f_lang['version_courrante'] = "Korrekt script version";
$f_lang['info_version'] = "Information omkring den version du har";
$f_lang['version_txt_ok'] = "Den version du har er ".$alex_livre_version.",<br>denne version er den seneste, det er ikke nødvendigt at opgradere.";
$f_lang['version_txt_update'] = "Den version du har er ".$alex_livre_version.", <b>en nyere version er tilgængelig</b>";
$f_lang['version_down'] = "Download seneste version";
$f_lang['help_update'] = "Hjælp til opgraderingen";
$f_lang['spam'] = "Din browsers (USER AGENT) kunne ikke bestemmes, det ser ud til at en robot prøvede automatisk at tilføje en besked. Hvis dette ikke er tilfældet, prøv igen med en anden browser.";
$f_lang['avis_spammeurs'] = "Besked til spammers";
$f_lang['txt_spammeurs'] = "<b>Denne gæstebog er beskyttet mod spamming</b>, Email adressesr og URLs er indkodet i source coden af den generede side, det er derfor fulstændig spildt at tilføje kommercielle links, de vil ikke blive set at søgemaskinen (desuden vil din besked også blive slettet alligevel...)";
$f_lang['fermer'] = "Luk dette vindue";
$f_lang['valider_messages'] = "Ønsker du at gennemse beskeder før de bliver offentlig synlige i gæstebogen ?";
$f_lang['valide'] = "Validerede ?";
$f_lang['mess_valide'] = "Denne besked er blevet validerede";
$f_lang['mess_invalide'] = "Denne besked afventer validering";
$f_lang['info_mess_valide'] = "Validerede besked ?";
$f_lang['ok_post_valid'] = "Tak ! Din besked er nu gemt, den vil blive vist så snart webmasteren har godkendt den.";
$f_lang['see_skin'] = "Se gæstebogen med denne skin";
$f_lang['maxi_car'] = "Maksimun antal tegn/bogstaver tilladt i en besked (0 = uendelig)";
$f_lang['il_reste'] = "Du kan skrive";
$f_lang['caracteres'] = "tegn/bogstaver mere i din besked";
$f_lang['sup_copyright'] = "Slet copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "security codes table navn";
$f_lang['add_code_securite'] = "Ønsker du at brugerne skal indtaste en sikkerhedskode før beskeden tilføjes?";
$f_lang['t_chem_dossier_fonts'] = "Fuld URL til font biblioteket";
$f_lang['t_color_txt_code'] = "Hexadecimal code af kode text";
$f_lang['t_color_background_code'] = "Hexadecimal baggrund farve kode";
$f_lang['veuillez_taper_code'] = "Skriv venligst sikkerhedskoden i kassen til højre";
$f_lang['a_quoi_ca_sert'] = "Hvorfor nu det?";
$f_lang['why_code'] = "Hvorfor en \"sikkerhedskode\" ?";
$f_lang['txt_why_code'] = "Denne proceduresikrer os at alle beskeder tilføjet gæstebogen er skrevet af en virkelig personog ikke af software.<br><br><b>Reklamer og spam er ikke tilladt i denne gæstebog!</b>";
$f_lang['erreur_code_securite'] = "Indtast venligst sikkerhedskoden";
$f_lang['erreur_saisie_code_securite'] = "Sikkerhedskoden du har indtastet er forkert, forsøg venligst igen";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Automatisk svar";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;administrer de automatiske svar?";
$f_lang['text_reponse_auto'] = "<b>På denne siden kan du skrive den automatiske svar</b> som vil blive sendt til de brugere som tilføjer en besked i din gæstebog.  Denne besked vil blive sendt, hvis du aktiverer den funktion i script indstillingerne.<br><br>Hvert sprog kan have sin egen personlige besked og [PSEUDO] koden vil blive erstattet af navnet eller kaldenavnet af den bruger som har tilføjet beskeden.";
$f_lang['name_table_rep_auto'] = "MySQL tabllen som skal indeholde det automatiske svar";
$f_lang['gestion_reponses'] = "Administrer beskeder";
$f_lang['msg_remerciement'] = "Takke besked";
$f_lang['txt_remerciement'] = "Hej [PSEUDO],\n\nTak for dit indlæg i min gæstebog!  Husk også at besøge mit forum (www.knudsweb.dk/forum)";
$f_lang['ok_save_msg_rem'] = "Tak, det automatiske svar er blevet sendt.";
$f_lang['envoyer_remerciement'] = "Ønsker du at en takke mail automatisk bliver sendt?";
$f_lang['remerciement'] = "Tak";
$f_lang['titre_guestbook'] = "Gæstebog navn";
$f_lang['text_titre_guestbook'] = "<b>Du kan ændre gæstebogens navn</b> og skrive forskellige for hvert sprog.";
$f_lang['titre'] = "Navn";
$f_lang['parametrage'] = "Indstillinger";
$f_lang['ok_save_titre'] = "Tak, navnet er gemt.";
$f_lang['ville_visiteur'] = "By :";
$f_lang['pays_visiteur'] = "Land :";
$f_lang['flag'] = "Flag";
$f_lang['ville_modif'] = "By";
$f_lang['pays_modif'] = "Land";
$f_lang['action'] = "Action";
$f_lang['repondre'] = "Svar";
$f_lang['votre_reponse'] = "Dit svar";
$f_lang['ok_reponse_mess'] = "Tak, dit svar er sendt";
$f_lang['defaut_titre_rep'] = "Webmaster's svar";
$f_lang['annuler'] = "Annuller";
$f_lang['num_appari'] = "Viser nummer";
$f_lang['nb_max_smileys'] = "Maksimum antal smileys vist";
$f_lang['plus_smileys'] = "Vi flere smileys";
$f_lang['liste_all_smilies'] = "Liste med alle smileys";
$f_lang['boite_java'] = "Javascript Boks";
$f_lang['text_boite_java'] = "<b>Denne funktion muliggør at få vist de sidste beskeder tilføjet din gæstebog</b> på en anden side du vælger.";
$f_lang['parametrage_modele'] = "Template indstillinger";
$f_lang['ok_save_boite'] = "Tak, dine indstillinger er gemt";
$f_lang['format_date_boite'] = "Dato format (identisk med <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>dato()</b></a> PHP function)";
$f_lang['nbre_maxi_pseudo_boite'] = "Maks antal tegn brugt til navn eller kaldenavn";
$f_lang['nbre_maxi_message_boite'] = "Maks antal tegn brugt til beskeden";
$f_lang['modele_affichage_donnees'] = "Data posting template";
$f_lang['url_dossier_livre_boite'] = "Fuldstændig URL til din gæstebog bibliotek";
$f_lang['url_livre_boite'] = "Fuldstændig URL til din gæstebog index side";
$f_lang['generation_code'] = "Javascript kode generering";
$f_lang['nom_msg_afficher'] = "Antal beskeder der skal vises";
$f_lang['generer_code'] = "Generer Javascript call koden";
$f_lang['code_a_copier'] = "HTML kode som skal kopieres til side(er) som du vælger";
$f_lang['erreur_boite_java'] = "Indtast gyldig antal beskeder som skal vises";
$f_lang['erreur_par_boite'] = "Indstillings fejl, kan ikke isolere [BOUCLE] ... [/BOUCLE] kæden i din template.";
$f_lang['saut_ligne_msg_boite'] = "Behold linie spring i beskederne";
$f_lang['message_a'] = "klokken";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;administrer databasen ?";
$f_lang['bdd'] = "Database";
$f_lang['optimisation'] = "Optimering";
$f_lang['sauvegarde'] = "Gemmer";
$f_lang['restauration'] = "Gendannelse";
$f_lang['optimisation_txt'] = "<b>Når der gemmes og slettes tabeller i din database ophobes der ubrugt plads.</b> Dette er ikke godt for den overordnet ydelse af databasen og derfor også din hjemmeside, denne side muliggør at løse dette problem ved at optimere tabellerne.";
$f_lang['liste_tables'] = "Liste ober tabeller i din database";
$f_lang['lancer_optimisation'] = "Udfører optimering";
$f_lang['tables'] = "TABLLER";
$f_lang['pertes'] = "TAB";
$f_lang['octets'] = "bytes";
$f_lang['ok_optimise'] = "Tak, tabellerne med tab er blevet optimeret";
$f_lang['txt_sauvegarde'] = "<b>Hvis du ønsker at gemme beskeder i lang tid, er hyppig og periodiske backup anbefalet.</b> En harddisk fejl kan jo slette alle dine data.  En backup vil også være nyttig hvis du skal overføre dine data til en anden server.";
$f_lang['lancer_sauvegarde'] = "Start backup";
$f_lang['lancer_restauration'] = "Start gendannelse";
$f_lang['txt_restauration'] = "<b>Hvis du har gennemført en backup, kan du gendanne hele din gæstebogs database</b> Du skal bare vælge de tilhørende filer på din harddisk.<br><br><b><u>SE HER</u></b>, hvis denne fil er meget stor (adskillige megabytes), kan gendannelsen skabe nogle problemer for din host server indstillinger (set_time_limit() og maks tilladte størrelse af en upload indstillinger).";
$f_lang['select_file'] = "Vælg backup filen på din harddisk eller server (.ZIP eller .SQL)";
$f_lang['confirm_restauration'] = "Bekræft at du ønsker at starte gendannelsen og derved slette nuværende data?";
$f_lang['select_file_restau'] = "Vælg en fil på din harddisk";
$f_lang['erreur_ext_restau'] = "Den valgte filtype er ikke .ZIP eller .SQL, gendannelse kunne ikke gennemføres.";
$f_lang['conseil_zip'] = "(Udpak .ZIP filen på din harddisk for at få .SQL filen)";
$f_lang['erreur_ext_zip'] = "PHP_ZIP extension er ikke tilgængelig på din server, gendannelsen via en .ZIP fil er derfor ikke mulig. Vælg derfor en .SQL fil på din harddisk".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Der er opstået en fejl ved læsningen af din .ZIP fil, kan derfor ikke gennemføre gendannelsen.  Du kan prøve med en .SQL fil ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Den valgte .SQL fil ser ikke ud til at være en @lex Guestbook script fil.  Kan ikke gennemføre gendannelsen.";
$f_lang['restauration_terminee'] = "Tak ! Gendannelsen udført !";

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