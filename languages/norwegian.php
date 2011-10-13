<?php
/////////////////////////////////////////////////
//                @lex Guestbook               //
//      by Soulard Alexis (c) 2002 - 2006      //
//         Gieling Pierre (c) 2002 - 2008      //
//         Hercelin Maxime (c) 2005 - 2008     //
//         http://www.alexguestbook.net/       //
//              all right reserved             //
// Norwegian translation by Per-A. Christensen //
/////////////////////////////////////////////////

/* Script koding */
$SCRIPT_ENCODAGE = "iso-8859-1";
$CONTENT_LANGUAGE = "no";

/* setup */
$f_lang['install_auto'] = "Automatisk installasjon";
$f_lang['identi_base'] = "Database ID";
$f_lang['type_base'] = "Database type";
$f_lang['user_base'] = "Bruker";
$f_lang['pass_base'] = "Passord";
$f_lang['nom_base'] = "Database navn";
$f_lang['nom_table'] = "Navn på tabeller";
$f_lang['name_table_sessions'] = "Navn på sesjons tabell";
$f_lang['name_table_users'] = "Navn på bruker tabell";
$f_lang['name_table_messages'] = "Navn på beskjed tabell";
$f_lang['name_table_censure'] = "Navn på sensurerte ord tabell";
$f_lang['name_table_ip'] = "Navn på bannlyst IP tabell";
$f_lang['name_table_smileys'] = "Navn på smileys tabell";
$f_lang['extension_script'] = "Script filtype";
$f_lang['choose_extension'] = "Velg et filtype for scriptet<br>(vi anbefaler \"php\", ellers må du endre navn på alle filer med valgt filtype)";
$f_lang['identi_acces_admin'] = "Din ID for å komme in på administrasjons panelet";
$f_lang['login_admin'] = "Login";
$f_lang['pass_admin'] = "Passord";
$f_lang['verif_pass_admin'] = "Skriv ditt passord igjen";
$f_lang['email_admin_setup'] = "Din Email";
$f_lang['installer'] = "Install";
$f_lang['erreur_host'] = "Du glemte din database's server host";
$f_lang['erreur_user'] = "Du glemte din ID for å koble til database";
$f_lang['erreur_nom_base'] = "Du glemte navnet på din database";
$f_lang['erreur_log_admin'] = "Du glemte å skrive inn ditt login navn til administrasjons panelet";
$f_lang['erreur_pass_admin'] = "Du glemte å skrive inn ditt passord for å koble til administrasjons panelet";
$f_lang['erreur_pass_differents'] = "ADVARSEL, passordene er forskjellige.";
$f_lang['erreur_first_connexion'] = "<b>ERROR, tilkobling til databasen var umulig.</b><br><br>sjekk din tilkoblings ID : <a href=\"javascript:history.go(-1);\"><b>back</b></a>.";
$f_lang['erreur_install'] = "Installasjonen ble mislykket";
$f_lang['ok_install'] = "Installasjonen ble fullført";
$f_lang['text_ok_install'] = "<b>Takk ! Installasjonen ble fullført.</b><br><br>For sikkerhetens skyld, anbefaler vi på det sterkeste at du sletter installasjonsfilen du nettopp brukte (\"setup.php\"), hvis ikke, vil andre kunne bruke den og korrupte dine konfigurasjonsfiler.<br><br>Du kan nå administrere din gjestebok ved å klikke <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>HER</b></a> eller<br> se den som besøkende gjør <a href=\"".$chem_absolu."\" target=\"_blank\"><b>HER</b></a>.";

/* administrasjon */
$f_lang['page protect'] = "Beskyttet side";
$f_lang['login'] = "Login";
$f_lang['pass'] = "Pass";
$f_lang['value identif'] = "Identifikasjon";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* meny */
$f_lang['options'] = "Valg";
$f_lang['script'] = "Script";
$f_lang['graphismes'] = "Gjestebok skins";
$f_lang['messages'] = "Beskjeder";
$f_lang['gestion'] = "Behandle";
$f_lang['censure_mots'] = "Sensurerte ord";
$f_lang['smileys'] = "Smileys";
$f_lang['utilisateurs'] = "Administratorer";
$f_lang['ajouter'] = "Legg til";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "Om...";
$f_lang['donner_avis'] = "Gi oss din mening";
$f_lang['deconnexion'] = "Koble fra";

 /* valg */
 $f_lang['options_livre'] = "Gjestebok Administrasjon";
$f_lang['options_generales'] = "Hoved valg";
$f_lang['langue'] = "Språk";
$f_lang['send_mail'] = "Vil du at administratorene skal motta en email når ny beskjed er lagt inn ?";
$f_lang['avert_mail'] = "<br>(<b>Informasjon/b> : mail() funksjonen på din web leverandør er skrudd av, derfor hvis du velger \"Ja\" vil du ikke motta email)";
$f_lang['oui'] = "Ja";
$f_lang['non'] = "Nei";
$f_lang['options_modules'] = "Gjestebok felt valg";
$f_lang['admin_champ_email'] = "Besøkende blir spurt om sin Email";
$f_lang['admin_champ_site'] = "Besøkende blir spurt om sin hjemmeside";
$f_lang['admin_champ_pays'] = "Besøkende blir spurt om sin by og sitt land";
$f_lang['admin_champ_note'] = "Besøkende blir spurt om sin mening om siden";
$f_lang['admin_ok_aff_moteur'] = "Vis søke motoren";
$f_lang['options_tech'] = "Tekniske valg";
$f_lang['url_recharger'] = "Side for å oppdatere Gjesteboken";
$f_lang['url_variables'] = "Variabel instruksjoner sendt som parameterere (skriv # istedet for $ i en variabel)";
$f_lang['temps_session'] = "Sesjons tid i sekunder for administrasjons panelet";
$f_lang['skin_to_use'] = "Skin som skal brukes";
$f_lang['enregistrer'] = "Lagre";
$f_lang['nb_pages'] = "Antall beskjeder som skal vises på hver gjestebok side";
$f_lang['merci_options'] = "Takk, informasjonen har blitt oppdatert";
$f_lang['erreur_options'] = "ERROR\\nInformasjonen kunne ikke bli lagret, det var umulig å skrive til \\\"config.".$alex_livre_ext."\\\" filen, vennligst rediger denne filen i en tekst editor for å endre dine innstillinger.";
$f_lang['temps_ip_post'] = "Antall minutter før en besøker kan legge igjen en ny beskjed";
$f_lang['minutes'] = "minutter";
$f_lang['cut_mots'] = "Antall bokstaver før et langt ord er delt";
$f_lang['format_date'] = "Dato format";

/* skins */
$f_lang['ok_ajouter'] = "Takk, skinet har blitt fullført og laget";
$f_lang['erreur_ajouter'] = "ERROR\\nSkinet kunne ikke bli laget, lag det manuelt istedet";
$f_lang['text1_2'] = "Følgende skin vil bli lagret i &quot;templates/skins/&quot; mappen. Denne interface'n tillater deg å endre dem lett, men du kan også endre html filene manuelt.";
$f_lang['text2'] = "<b>Hvis du også vil endre utseendet til administrasjons panelet</b> kan du manuelt endre filene i &quot;templates/admin/&quot; mappen.";
$f_lang['text_aj_skin'] = "Legg til et skin";
$f_lang['ajouter'] = "Legg til";
$f_lang['gestion_skins'] = "Skins Administrasjon";
$f_lang['vous_editez'] = "Du endre nå dette skin :";
$f_lang['style'] = "stylesheet";
$f_lang['ajouter_message'] = "Legg til en beskjed del";
$f_lang['nbre_messages_page'] = "antall beskjeder / sider del";
$f_lang['pages_dispos'] = "Liste med tilgjengelige sider / neste side- forrige side del";
$f_lang['texte_corps_messages'] = "beskjed body";
$f_lang['espacement'] = "space mellom 2 beskjeder";
$f_lang['text_assembly'] = "Bygg filen fra de foregående delene";
$f_lang['ok_edit_skin'] = "Takk, skinet har blitt oppdatert";
$f_lang['erreur_edit_skin'] = "ERROR\\nEn eller flere file(r) av skinet kunne ikke bli oppdatert. Vennligst rediger disse manuelt";
$f_lang['ajouter'] = "Legg til";
$f_lang['supprimer'] = "Slett";
$f_lang['text_sup_skin'] = "Slett et skin";
$f_lang['ok_supprimer'] = "Takk, skinet har blitt slettet.";
$f_lang['erreur_supprimer'] = "ERROR\\nEn eller flere file(r) av skinet kunne ikke bli slettet, så du må slette dem manuelt.";

/* siden med sensurerte ord */
$f_lang['aj_mot'] = "Legg til et nytt ord "; 
$f_lang['mot_interdit'] = "Bannlyste ord :";
$f_lang['remplacer_par'] = "Erstatt med :";
$f_lang['gestion_censure'] = "Bannlyste ord Administrasjon";
$f_lang['mot'] = "ord";
$f_lang['remplace_by'] = "Erstatt med";
$f_lang['liste_jour'] = "Oppdater listen";
$f_lang['sup_mots'] = "Fjern valgte ord";
$f_lang['erreur_aj_censure1'] = "Vennligst skriv et ord som skal sensureres";
$f_lang['erreur_aj_censure2'] = "Vennligst skriv et ord som skal erstatte de sensurerte ordene";
$f_lang['ok_aj_mot'] = "Takk, det sensurerte ordet har blitt lagt til.";
$f_lang['verif_sup'] = "Vil du fjerne de valgte ordene permanent ?";
$f_lang['merci_modif'] = "Takk, endringene har blitt lagret";

/* bannlyste iper */
$f_lang['bannir_ip'] = "bannlyste ip'er";
$f_lang['text_ip1'] = "Hver surfer på web har en spesifik 4 numerert ID (i.e. 201.10.25.14). Denne ID er gitt av en internett leverandør og endres, teoretisk, hver gang de tilkobles.";
$f_lang['text_ip2'] = "Hvis du vil <b>nekte en besøkende å legge igjen en beskjed i gjesteboken</b>, kan du kopiere deres ip adresse her. Du kan også forby en 'range' med ip adresser med å bruke stjerne symbolet * (feks. 201.15.55.*, eller til og med 158.*.*.*).";
$f_lang['ajouter_ip'] = "Legg til en ny bannlyst IP";
$f_lang['gestion_ip'] = "Bannlyste IPer Administrasjon";
$f_lang['sup_ip'] = "Fjern de valgte bannlyste IP'ene";
$f_lang['ok_aj_ip'] = "Takk, denne IP er nå bannlyst";
$f_lang['verif_sup_ip'] = "Vil du virkelig slette de valgte IP'ene ?";

/* smileys */
$f_lang['gestion_smileys'] = "Smileys Administrasjon";
$f_lang['text_smileys'] = "<b>Smileys lar en besøkende å vise følelser</b> når de legger igjen en beskjed. Fra denne interface'n kan du lett legge til eller fjerne smileys så besøkende har stor valgmulighet av dem :o)<br><br>Smileys tilgjengelig på denne side er lagret i \"images/smileys\" mappen.";
$f_lang['ajouter_smiley'] = "Legg til en smiley";
$f_lang['image_smiley'] = "bilde";
$f_lang['car_replace'] = "Smiley kode";
$f_lang['gestion_smileys'] = "Smileys Administrasjon";
$f_lang['sup_smileys'] = "Slett de valgte smileys";
$f_lang['erreur_image'] = "Velg en smiley";
$f_lang['erreur_car'] = "Velg en kode for den valgte smiley";
$f_lang['ok_aj_smiley'] = "Takk, smiley'en er lagt til";
$f_lang['no_smiley'] = "Smiley'en må være et GIF eller JPEG bilde";
$f_lang['copy_impossible'] = "ERROR\\nDet var umulig å kopiere smiley'en in i \\\"images/smileys\\\" mappen.";
$f_lang['car_replace_exist'] = "ERROR\\nKoden eksisterer allerede i databasen.";
$f_lang['modif_smileys'] = "Oppdater alle smileys";
$f_lang['verif_sup_smileys'] = "Vil du virkelig slette de valgte smileys ?";
$f_lang['merci_modif_smileys'] = "Takk, smiley'ene har blitt endret.";

/* Legg til admins */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Legg til en gjestebok administrator";
	$f_lang['add_admin_2'] = "Legg til en admin";
	$f_lang['ajouter_admin'] = "Legg til";
	$f_lang['name_ajouter_admin'] = "Legg til";
}
else{
	$f_lang['add_admin_texte'] = "Endre en gjestebok administrator";
	$f_lang['add_admin_2'] = "Endre en admin";
	$f_lang['ajouter_admin'] = "Lagre";
	$f_lang['name_ajouter_admin'] = "Endre";
}

$f_lang['identif_connexion'] = "Tilkoblings ID";
$f_lang['passe_admin'] = "Passord";
$f_lang['email_admin'] = "Email (viktig, hvis admin skal motta mail når en ny beskjed er lagt inn)";
$f_lang['admin_receive_email'] = "Vil du at administratoren skal motta mail når en ny beskjed er lagt inn ?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;lov til å modifisere script valg ?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;lov til å bytte skins ?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;lov til å administrere beskjeder ?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;lov til å administrere senurerte ord ?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;lov til å administrere smileys ?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;lov til å administrere andre administratorers kontoer ?";
$f_lang['erreur_name'] = "Skriv inn en tilkoblings ID";
$f_lang['erreur_passe'] = "Skriv inn et passord";
$f_lang['erreur_email'] = "Skriv inn en Email";
$f_lang['ok_aj_admin'] = "Takk, kontoen er blitt laget";
$f_lang['ok_modif_admin'] = "Takk, kontoen har blitt oppdatert";
$f_lang['erreur_aj_admin'] = "ERROR\\nDette login'et eksisterer allerede";
$f_lang['revenir'] = "Tilbake til forrige side";

/* Administrer admins */
$f_lang['gest_admin'] = "Administrer administratorene";
$f_lang['sup_admin'] = "fjern";
$f_lang['login_admin'] = "login";
$f_lang['email_admin'] = "Email";
$f_lang['modif_admin'] = "endre";
$f_lang['value_sup_admin'] = "Fjern alle de valgte admins";
$f_lang['verif_sup_admin'] = "Vil du virkelig fjerne de valgte admins ?";

/* side error */
$f_lang['erreur_texte'] = "SIDE UTILGJENGELIG";
$f_lang['erreur_auth'] = "Authentifikasjon feil";
$f_lang['erreur_droits'] = "Du har ikke rettigheter til å komme inn på denne side.";

/* Skriv i gjesteboka */
$f_lang['note_moyenne'] = "Gjennomsnitlig score gitt av besøkende på denne siden :";
$f_lang['title_guestbook'] = "Gjestebok";
$f_lang['note_super'] = " : fantastisk !";
$f_lang['note_moyen'] = " : bra";
$f_lang['note_rate'] = " : dårlig";
$f_lang['nom_pseudo_visiteur'] = "Navn :";
$f_lang['email_visiteur'] = "Email adresse :";
$f_lang['site_web_visiteur'] = "Hjemmeside :";
$f_lang['ville_pays_visiteur'] = "By / Land :";
$f_lang['note_visiteur'] = "Din score :";
$f_lang['message_visiteur'] = "Din beskjed :";
$f_lang['ajouter_message_visiteur'] = "Legg til denne beskjeden";
$f_lang['erreur_add_nom'] = "Vennlighst skriv navnet ditt";
$f_lang['erreur_add_message'] = "Vennlighst skriv beskjeden din";
$f_lang['erreur_mail'] = "Din Email er feil";
$f_lang['messages'] = "Beskjeder";
$f_lang['messages_a'] = "til";
$f_lang['page'] = "Side";
$f_lang['nbre_messages'] = "Antall beskjeder";
$f_lang['message_le'] = "på";
$f_lang['message_note'] = "Score";
$f_lang['send_mail_to'] = "Send en Email til";
$f_lang['go_home'] = "Besøk siden";
$f_lang['precedente'] = "&lt;&lt; forrige";
$f_lang['suivante'] = "neste &gt;&gt;";
$f_lang['no_message'] = "Ingen beskjeder å vise.";
$f_lang['no_ip'] = "ADVARSEL\\nDin IP har blitt bannlyst, du er ikke autorisert til å skrive beskjeder i denne gjesteboken.";
$f_lang['ok_post'] = "Takk !  Din beskjed er lagt til i gjesteboken.";
$f_lang['time_erreur'] = "ADVARSEL\\nDin beskjed kunne ikke bli lagt til, du la til en nå nylig.";
$f_lang['text_select_search'] = "Vis bare beskjeder som inneholder følgende ord";
$f_lang['text_ok_search'] = "Ok";

/* mail beskjed */
$f_lang['mail_object'] = "[info] - Ny beskjed i Gjesteboka - ";
$f_lang['mail_message'] = "Hei,\n\nVi informerer at en ny beskjed er lagt til i gjesteboka ";

/* Administrer Beskjeder */
$f_lang['gestion_mess'] = "Administrer Beskjeder";
$f_lang['selectionner_pages'] = "Velg";
$f_lang['messages_gest'] = "beskjed";
$f_lang['page_gest'] = "side";
$f_lang['aller_en_page'] = "Gå til side";
$f_lang['supprimer_gest'] = "slett";
$f_lang['auteur_gest'] = "gjest";
$f_lang['modifier_gest'] = "rediger";
$f_lang['supprimer_mess_selected'] = "Slett de valgte beskjedene";
$f_lang['verif_sup_mess'] = "Vil du virkelig slette de valgte beskjedene ?";

/* rediger en beskjed */
$f_lang['modif_mess'] = "Rediger en beskjed";
$f_lang['message_modif'] = "Beskjed";
$f_lang['nom_modif'] = "Navn";
$f_lang['email_modif'] = "Email";
$f_lang['site_web_modif'] = "Hjemmeside";
$f_lang['note_modif'] = "Score gitt til din side";
$f_lang['ville_pays_modif'] = "By / Land";
$f_lang['date_modif'] = "Dato lagt til";
$f_lang['ip_modif'] = "IP adresse";
$f_lang['ok_modif_mess'] = "Takk, endringene er lagret";

/* tittel på sider */
$f_lang['title identification'] = "identifikasjon";
$f_lang['title administration'] = "administrasjon";
$f_lang['title frame gauche'] = "venstre ramme";
$f_lang['title options'] = "valg";
$f_lang['title skins'] = "skins";
$f_lang['title censure'] = "ord å sensurere";
$f_lang['title censure'] = "administrer bannlyste IPer";
$f_lang['title smileys'] = "administrer smileys";
$f_lang['title add admin'] = "legg til en gjestebok administrator";
$f_lang['title gest admin'] = "administrer gjestebok administratorene";
$f_lang['title erreur'] = "error";
$f_lang['title gestion mess'] = "administrer beskjedene";
$f_lang['title modif mess'] = "rediger en beskjed";
$f_lang['title setup'] = "installasjon";

/* errors */
$f_lang['erreur_mysql_connect'] = "Umulig å koble til databasen";
$f_lang['erreur_connexion'] = "Din ID info er feil";
$f_lang['manque login'] = "Vennligst skriv inn ditt login";
$f_lang['manque pass'] = "Vennligst skriv inn ditt passord";
$f_lang['end session'] = "Din sesjon ble avsluttet";

/* add version 3.11 */
$f_lang['addSignature'] = "Skriv en beskjed";
$f_lang['seeMessages'] = "Les beskjeder";
$f_lang['addMessageBlocAdd'] = "Legg til en beskjed i gjesteboka";

/* add version 3.2 */
$f_lang['version'] = "Versjon";
$f_lang['new_version_dispo'] = "En oppdatert versjon av gjesteboka er tilgjengelig";
$f_lang['version_courrante'] = "Nåværende versjon av scriptet";
$f_lang['info_version'] = "Informasjon om versjonen du har";
$f_lang['version_txt_ok'] = "Versjonen du har er ".$alex_livre_version.",<br>dette er nyeste versjon, ingen oppgradering er nødvendig.";
$f_lang['version_txt_update'] = "Versjonen du har er ".$alex_livre_version.", <b>ny versjon er tilgjengelig</b>";
$f_lang['version_down'] = "Last ned siste versjon";
$f_lang['help_update'] = "Hjelp til oppgradering";
$f_lang['spam'] = "USER AGENT i din browser kunne ikke fastslås, det ser ut som en robot prøvet å legge igjen en beskjed automatisk. Hvis dette ikke stemmer, vennligst prøv igjen med en annen browser.";
$f_lang['avis_spammeurs'] = "Beskjed til spammers";
$f_lang['txt_spammeurs'] = "<b>Denne gjesteboka er beskyttet mot spamming</b>, Email adresser og URLs er kodet i kilde koden på de genererte sidene, derfor er det nytteløst å legge igjen reklame linker, de vil ikke bli sett av søke motorer (ellers vil beskjedene bli slettet uansett...)";
$f_lang['fermer'] = "Steng dette vindu";
$f_lang['valider_messages'] = "Vil du forhåndse beskjeder før de er gjort synlige i gjesteboka ?";
$f_lang['valide'] = "Godkjent ?";
$f_lang['mess_valide'] = "Denne beskjeden er blitt godkjent";
$f_lang['mess_invalide'] = "Denne beskjeden venter på godkjenning";
$f_lang['info_mess_valide'] = "Godkjent beskjed ?";
$f_lang['ok_post_valid'] = "Takk ! Din beskjed er lagret, den vil bli synlig så fort admins har godkjent den.";
$f_lang['see_skin'] = "Forhåndsvis gjesteboka med dette skinet";
$f_lang['maxi_car'] = "Max nummer av tegn/bokstaver tillatt i en beskjed (0 = unlimited)";
$f_lang['il_reste'] = "Du kan skrive opptil";
$f_lang['caracteres'] = "flere tegn/bokstaver i din beskjed";
$f_lang['sup_copyright'] = "Slett copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Navn på sikkerhetskode tabellen";
$f_lang['add_code_securite'] = "Ønsker du at besøkende MÅ skrive inn en sikkerhetskode før de legger til en beskjed ?";
$f_lang['t_chem_dossier_fonts'] = "Full URL til fonts mappen";
$f_lang['t_color_txt_code'] = "Hexadecimal kode av den kodete teksten";
$f_lang['t_color_background_code'] = "Hexadecimal bakgrunn farve kode";
$f_lang['veuillez_taper_code'] = "Vennligst kopier denne sikkerhetskoden inn i boksen til høyre";
$f_lang['a_quoi_ca_sert'] = "Hvorfor dette ?";
$f_lang['why_code'] = "Hvorfor en \"sikkerhetskode\" ?";
$f_lang['txt_why_code'] = "Denne prosedyren lar oss sjekke at beskjeden er lagt til av en person og ikke av en automatisk robot/software.<br><br><b>reklame og lignende linker/spam er forbudt i denne gjesteboken!</b>";
$f_lang['erreur_code_securite'] = "Vennligst skriv inn sikkerhetskoden";
$f_lang['erreur_saisie_code_securite'] = "Sikkerhetskoden du skrev inn er ugyldig, vennligst prøv på nytt";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Automatisk svar";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;administrer de automatiske svarene?";
$f_lang['text_reponse_auto'] = "<b>På denne siden kan du skrive inn de automatiske svarene</b> som vil bli sendt til besøkende som har lagt igjen beskjed i gjesteboka.  Denne beskjeden vil bli sendt hvis du aktiverer denne funksjonen i script valgene.<br><br>Hvert språk kan ha sitt personlige svar og [PSEUDO] koden vil bli erstattet med navnet til besøkende som la igjen beskjeden.";
$f_lang['name_table_rep_auto'] = "Navn på MySQL tabellen som vil inneholde de automatiske svar beskjedene";
$f_lang['gestion_reponses'] = "Administrer beskjeder";
$f_lang['msg_remerciement'] = "Takk Beskjed";
$f_lang['txt_remerciement'] = "Hei [PSEUDO],\n\nTakk for at du la igjen en beskjed i gjesteboka vår!";
$f_lang['ok_save_msg_rem'] = "Takk, det automatiske Takk beskjeden har blitt lagret.";
$f_lang['envoyer_remerciement'] = "Ønsker du at Takk beskjed skal bli automatisk sendt?";
$f_lang['remerciement'] = "Takk";
$f_lang['titre_guestbook'] = "Gjestebok tittel";
$f_lang['text_titre_guestbook'] = "<b>u kan endre gjestebok tittelen</b> og skrive en for hvert tilgjengelige språk.";
$f_lang['titre'] = "Tittel";
$f_lang['parametrage'] = "Instillinger";
$f_lang['ok_save_titre'] = "Takk, tittelen har blitt lagret.";
$f_lang['ville_visiteur'] = "By :";
$f_lang['pays_visiteur'] = "Land :";
$f_lang['flag'] = "Flagg";
$f_lang['ville_modif'] = "By";
$f_lang['pays_modif'] = "Land";
$f_lang['action'] = "Handling";
$f_lang['repondre'] = "Svar";
$f_lang['votre_reponse'] = "Ditt svar";
$f_lang['ok_reponse_mess'] = "Takk, ditt svar har blitt lagret";
$f_lang['defaut_titre_rep'] = "Admins svar";
$f_lang['annuler'] = "Avbryt";
$f_lang['num_appari'] = "Vis nummer";
$f_lang['nb_max_smileys'] = "Max antall smileys vist";
$f_lang['plus_smileys'] = "Vis mere smileys";
$f_lang['liste_all_smilies'] = "Liste med alle smileys";
$f_lang['boite_java'] = "Javascript Boks";
$f_lang['text_boite_java'] = "<b>Denne funksjonen lar deg vise den siste beskjeden i gjesteboka</b> på en annen side som du velger.";
$f_lang['parametrage_modele'] = "Template instillinger";
$f_lang['ok_save_boite'] = "Takk, dine instillinger har blitt lagret";
$f_lang['format_date_boite'] = "Dato format (identisk til <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> PHP funksjon)";
$f_lang['nbre_maxi_pseudo_boite'] = "Max antall tegn vist for navn";
$f_lang['nbre_maxi_message_boite'] = "Max antall tegn vist for beskjeden";
$f_lang['modele_affichage_donnees'] = "Data post template";
$f_lang['url_dossier_livre_boite'] = "Full URL til din gjestebok mappe";
$f_lang['url_livre_boite'] = "Full URL til din gjestebok's index side";
$f_lang['generation_code'] = "Javascript kode Lager";
$f_lang['nom_msg_afficher'] = "Antall beskjeder å vise";
$f_lang['generer_code'] = "Lag Javascript 'call' kode";
$f_lang['code_a_copier'] = "HTML Kode som kopieres til side(r) som du ønsker";
$f_lang['erreur_boite_java'] = "Vennligst sett et gyldig nummer på beskjeder som skal vises";
$f_lang['erreur_par_boite'] = "Instillings error, kan ikke isolere [BOUCLE] ... [/BOUCLE] kjeden i din template.";
$f_lang['saut_ligne_msg_boite'] = "Behold linje hoppene i beskjedene";
$f_lang['message_a'] = "til";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;administrer databasen ?";
$f_lang['bdd'] = "Database";
$f_lang['optimisation'] = "Optimisasjon";
$f_lang['sauvegarde'] = "Lagrer";
$f_lang['restauration'] = "Gjennopprett";
$f_lang['optimisation_txt'] = "<b>Under lagring og sletting, stabler din database opp ubrukte tabeller som er tomme.</b> Dette er ikke bra for den totale ytelse og for din databse og for din webside, denne siden lar deg løse dette problemet med å optimisere tabellene.";
$f_lang['liste_tables'] = "Liste med tabellene i din database";
$f_lang['lancer_optimisation'] = "Starter optimisasjon";
$f_lang['tables'] = "TABELLER";
$f_lang['pertes'] = "TAP";
$f_lang['octets'] = "bytes";
$f_lang['ok_optimise'] = "Takk, tabellene med tap har blitt optimisert";
$f_lang['txt_sauvegarde'] = "<b>Hvis du vil beholde beskjedene veldig lenge, en regelmessig og periodisk backup er rekomandert.</b> En harddisk feil kan virkelig ødelegge all data.  En backup kan være veldig nyttig hvis du ønsker å overføre beskjedene til en annen server.";
$f_lang['lancer_sauvegarde'] = "Start backup";
$f_lang['lancer_restauration'] = "Start gjennoppretting";
$f_lang['txt_restauration'] = "<b>Hvis du har utført en backup, kan du gjennopprette din gjesteboks database fullstendig</b> Bare velg den backup filen fra harddisken din.<br><br><b><u>ADVARSEL</u></b>, hvis denne filen er veldig stor (mange megabytes), kan gjennopprettingen forårsake problemer på din servers webside instillinger (sett_tids_begrensning() og max størrelse på opplastnings instillinger).";
$f_lang['select_file'] = "Velg en backup fil på din harddisk eller server (.ZIP eller .SQL)";
$f_lang['confirm_restauration'] = "Vil du bekrefte at du vil starte gjennoppretting og at dette vil slette nåværende data?";
$f_lang['select_file_restau'] = "Vennligst velg en fil på din harddisk";
$f_lang['erreur_ext_restau'] = "Den valgte filendelsen er ikke  .ZIP eller .SQL, gjennopprettning kunne ikke utføres.";
$f_lang['conseil_zip'] = "(pakk ut ZIP filen på din harrdisk for å få tak i SQL filen)";
$f_lang['erreur_ext_zip'] = "PHP_ZIP endelsen er ikke tilgjengelig på din server, gjennopprettning via en .ZIP fil er derfor ikke mulig. Vennligst velg en .SQL fil på din harddisk".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Error i lesing av ditt ZIP arkiv, kan ikke utføre gjennoppretting.  Du kan prøve med en .SQL fil ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Den valgte SQL filen ser ikke ut til å være en @lex Gjestebok script fil. Kan ikke utføre gjennoppretting.";
$f_lang['restauration_terminee'] = "Takk ! Gjennoppretting kan utføres med suksess !";

/* V5 */
$f_lang['name_table_ban'] = "Navn på de bannlyste IP'ene, (nick)navn og e-post tabell";
$f_lang['ok_validation'] = "Takk, Valideringen har blitt utført";
$f_lang['selectionner_tous_messages'] = "Kryss/kryss av alle";
$f_lang['admin_send_mail'] = "Vil du at admins skal motta en e-post når en ny beskjed er lagt inn ?";

//Legg til Bannlysning
$f_lang['bannissement'] = "Bannlysning";
$f_lang['admin_gestion_bannissement'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;administrere forbudet ?";
$f_lang['interdit_de_message'] = "Din beskjed har ikke blitt lagret. For å se grunnen til dette (bannlyst ord, obligatorisk felt ikke fyllt inn...) Javascript må være aktivert i din webleser. Du vil kanskje prøve å endre din beskjed.";
$f_lang['valider_mess'] = "Legg til de overnevndte valideringsmulighetene";
$f_lang['erreur_ip'] = "IP adresse er ikke gyldig";
$f_lang['erreur_ip1'] = "Vennligst skriv inn første del av ip'en med et nummer mellom 0 og 255 eller en *";
$f_lang['erreur_ip2'] = "Vennligst skriv inn andre del av ip'en med et nummer mellom 0 og 255 eller en *";
$f_lang['erreur_ip3'] = "Vennligst skriv inn tredje del av ip'en med et nummer mellom 0 og 255 eller en *";
$f_lang['erreur_ip4'] = "Vennligst skriv inn fjerde del av ip'en med et nummer mellom 0 og 255 eller en *";
$f_lang['explication_bannir_mot'] = "Du har 2 valg for å forby ord i beskjeder. Enten sensurerer du de (disse ordene vil bli byttet ut med tekst eller symboler som du velger), eller beskjeden blir avvist.";
$f_lang['bannir_mot'] = "Vil du at beskjeder som inneholder ord du har sensurert (se \"Sensurerte ord\" i menyen) til å bli avvist ?<br/>Hvis du krysser \"nei\", vil ordene bli byttet ut med med teksten eller symbolene du har valgt.";

/* Bannlys (nick)navn */
$f_lang['bannir_pseudo'] = "Bannlys (nick)navn";
$f_lang['admin_text_pseudo'] = "Hvis du ønsker at en bruker <b>ikke skal ha tillatelse til å legge til en beskjed i din gjestebok</b>, Da kan du legge inn hans/hennes (nick)navn her. Du kan også bruke stjerne *, som vil ta hvilken som helst bokstav eller tall.";
$f_lang['ajouter_pseudo'] = "Legg til ett nytt bannlyst (nick)navn";
$f_lang['gestion_pseudo'] = "Nicknavn administrasjon";
$f_lang['sup_pseudo'] = "Slett the valgte nicknavnet";
$f_lang['erreur_pseudo'] = "Vennligst skriv inn nicknavnet som skal legges til";
$f_lang['ok_aj_pseudo'] = "Takk, nicknavnet er fra nå av forbudt";
$f_lang['verif_sup_pseudo'] = "Vil du virkelig slette alle de valgte nicknavnene ?";

/* Bannlys E-post adresser */
$f_lang['bannir_emails'] = "Bannlys E-post adresser";
$f_lang['admin_text_email'] = "Hvis du ønsker at en bruker <b>ikke skal ha tillatelse til å legge til en beskjed i din gjestebok</b>, Da kan du legge inn hans/hennes E-post adresse her. Du kan også bruke stjerne *, eller for å forby et helt domene, slik : *@spamdomain.com.";
$f_lang['ajouter_email'] = "Legg til en ny bannlyst E-post adresse";
$f_lang['gestion_email'] = "E-mail adresser administrasjon";
$f_lang['sup_email'] = "Slett de valgte E-post adressene";
$f_lang['erreur_email'] = "Vennligst skriv inn E-post adressen som skal legges til ";
$f_lang['ok_aj_email'] = "Takk, E-post adressen er fra nå av bannlyst";
$f_lang['verif_sup_email'] = "Vil du virkelig slette alle de valgte E-post adressene ?";

$f_lang['no_pseudo'] = "ADVARSEL\\nDitt (nick)navn er bannlyst, du har ikke tillatelse til å legge inn en beskjed i denne gjesteboken.";
$f_lang['no_email'] = "ADVARSEL\\nDin E-post adresse er bannlyst, du har ikke tillatelse til å legge inn en beskjed i denne gjesteboken.";
$f_lang['no_ville'] = "ADVARSEL\\nByen du skrev inn er ikke korrekt, du har ikke tillatelse til å legge inn en beskjed i denne gjesteboken.";
$f_lang['no_mot'] = "ADVARSEL\\nDu har skrevet inn ett sensurert ord, du har ikke tillatelse til å legge inn en beskjed i denne gjesteboken.\\nVennligst rediger din beskjed !";

// Forby URL
$f_lang['url_interdite'] = "ADVARSEL\\nURL/linker er forbudt i beskjeder";
$f_lang['url_interdites'] = "Vil du at beskjeder som inneholder URL/linker skal bli nektet ?";
$f_lang['url_cliquables'] = "Vil du at URL/linker i beskjeder skal være klikkbar (aktive) ?";

// erstatning fra fil sikkerhet /config.php av en tabell BDD 
$f_lang['name_table_config'] = "Navn på config parameter tabell";

// server tidsdifferanse
$f_lang['admin_decalage_horaire'] = "Du kan stille tidsdifferansen mellom server og ditt land's tid. La det stå 0 hvis du ikke trenger å stille tiden.";
$f_lang['heures'] = "timer";
$f_lang['secondes'] = "sekunder";
$f_lang['admin_erreur_decalage_horaire'] = "Du må skrive inn en tidsdifferanse mellom -12 og +12";

// bannlys sletting av siste admin
$f_lang['admin_suppr_dernier_admin'] = "Du kan ikke slette siste administrator";

// deaktivere smileys på et klikk
$f_lang['admin_autoriser_smileys'] = "Vil du tillate smileys ?";

// sjekk om sesjonstiden lagt inn er for kort
$f_lang['admin_temps_session_min'] = "ADVARSEL\\nSessjon validerings verdien du la inn er for kort !\\nDu må legge inn en verdi som over 300 sekunder";

// legge in gjesteboken i en PHP fil
$f_lang['admin_inclure_livre'] = "Ønsker du å legge inn/inkludere gjesteboken i en PHP fil ?";
$f_lang['admin_inclure_livre_code'] = "Her er PHP koden som du trenger for å legge inn i din PHP fil mellom &lt;?php and ?&gt; tags.\n\nDu trenger også å endre \$chem_absolu stringen i /index.php filen av gjesteboken og legge til 'stylesheet' i den oppkallede siden (sjekk FAQ for videre forklaring)";
$f_lang['admin_fichier_inclusion'] = "Skriv inn her den absolutte filbanen til filen som du vil inkludere gjesteboken i(eks. : /mappe1/mappe2/fil_hvor_include_er.php). Du må klikke på \"Lagre\" knappen for å se om om den innskrevne filbanen er tatt med i koden";
$f_lang['admin_fichier_inclusion_erreur'] = "ADVARSEL\\nDu har ikke skrevet inn en gyldig filbane til 'include' filen\\nFilbanen må være skrevet som dette /mappe1/mappe2/fil_hvor_include_er.php";

// administrer alle felt
$f_lang['admin_champ_propose'] = "Ikke foreslå";
$f_lang['admin_champ_obligatoire'] = "Obligatorisk";
$f_lang['admin_champ_prive'] = "Privat";
$f_lang['admin_champ_pseudo'] = "Besøkende kan skrive inn sitt (nick)navn";
$f_lang['admin_champ_ville'] = "Besøkende kan skrive inn sin by";
$f_lang['admin_donner_focus'] = "Vil du at 'Nicknavn' feltet til å være valgt (til å ha fokus på) når siden er lastet ?";
$f_lang['champ_obligatoire_vide'] = "Minst ett obligatorisk felt (identifisert med en *) er tomt. Vennligst fyll det ut";
$f_lang['erreur_add_nom'] = "Vennligst skriv inn ditt navn";
$f_lang['erreur_add_email'] = "Vennligst skriv inn din E-post adresse";
$f_lang['erreur_add_site'] = "Vennligst skriv inn din webside adresse";
$f_lang['erreur_add_ville'] = "Vennligst skriv inn din by";
$f_lang['erreur_add_pays'] = "Vennligst velg ditt land";
$f_lang['erreur_add_note'] = "Vennligst velg en score";
$f_lang['erreur_add_message'] = "Vennligst skriv inn din beskjed";
$f_lang['erreur_url'] = "Adressen til din hjemmeside ser ikke ut som den er gyldig";

// Sikkerhetskode - sjekk om GD2 er aktivert på din server
$f_lang['admin_gd_non_activee'] = "<span class=\"texte_alerte\">Du kan ikke bruke sikkerhetskode funksjonen !<br/>\n Din server støtter ikke/har ikke innstallert GD2 library og/eller alternativene som er nødvendig for at sikkerhetskoden skal fungere</span>";

// administrasjonsside tillegg
$f_lang['admin_lien_admin'] = "Vil du legge ut en link til administrasjonssiden nederst i gjesteboken ?";
$f_lang['admin_lien_accueil'] = "Vil du legge ut en link tilbake til din hjemmesiden din eller en annen&nbsp;?";
$f_lang['admin_chemin_lien_accueil'] = "Hvis du lar dette feltet stå tomt, vil den linke til denne hjemmesiden. Du kan alternativt skrive inn den absolutte filbanen til en side som du velger (feks. /mappe1/side1.htm).";
$f_lang['admin_chemin_lien_accueil_erreur'] = "Filbanen du skrev inn er ikke gyldig. Vennligst bruk en absolutt filbane (feks. /minside.php).";
$f_lang['texte_lien_accueil'] = "Tilbake til hjemmesiden";
$f_lang['texte_lien_admin'] = "Gjestebok administrasjon";

$f_lang['admin_retour_livre'] = "Se gjesteboken";

// symbolfelt privat/obligatorisk
// /!\ Advarsel, maximum 90 tegn
$f_lang['information_champ_prive'] = "Dette feltinnholdet vil bare bli sett av gjestebokadministrator.";
$f_lang['information_champ_obligatoire'] = "Dette felt er obligatorisk for å legge inn en beskjed.";

/* nederst på adminside */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

$f_lang['host_base'] = "Server (som regel : localhost)";

$f_lang['name_table_txt_lang'] = "Navn på tabellen som inneholder 'customised' tekster (eks. gjestebok tittel)";

$f_lang['erreur_host'] = "Vennligst skriv inn din database server";

$f_lang['erreur_ecriture'] = "<b>ERROR</b>, kan ikke skrive til \"config/\" mappen.<br><br>Vennligst rediger Unix rettighetene for \"config\" mappen (chmod 777), og prøv innstalleringen igjen : <a href=\"./setup.php\"><b>tilbake</b></a>.";

$f_lang['options_livre'] = "Gjestebok alternativer";

$f_lang['text1'] = "<b>Sensurerte ord vil automatisk bli byttet ut </b> i beskjeder lagt inn fra besøkende. Du kan feks. bytte ut alle  \"stygge ord\" med en tekst som \"**sensurert ord**\".<br/>Hvis du har valgt å nekte beskjeder som inneholder \"sensurerte ord\", <u>trenger du enda å skrive inn en erstatningstekst</u>. Dette tiltaket lar deg bytte modus (ord erstatning eller nekte beskjed).";
?>