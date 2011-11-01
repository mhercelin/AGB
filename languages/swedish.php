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

/* Kodning */
$SCRIPT_ENCODAGE = "iso-8859-1";
$CONTENT_LANGUAGE = "se";

/* setup */
$f_lang['install_auto'] = "Automatisk installation";
$f_lang['identi_base'] = "Database ID";
$f_lang['type_base'] = "Database type";
$f_lang['user_base'] = "Användare";
$f_lang['pass_base'] = "Lösenord";
$f_lang['nom_base'] = "Databasens namn";
$f_lang['nom_table'] = "Tabellnamn";
$f_lang['name_table_sessions'] = "Name på sessionslista";
$f_lang['name_table_users'] = "Namn på användarlista";
$f_lang['name_table_messages'] = "Namn på meddelandelista";
$f_lang['name_table_censure'] = "Namn på lista över förbjuda ord";
$f_lang['name_table_ip'] = "Namn på lista över bannade IP's";
$f_lang['name_table_smileys'] = "Namn på lista över smileys";
$f_lang['extension_script'] = "Filtyp på script";
$f_lang['choose_extension'] = "Välj en filtyp för scriptet<br>(vi rekommenderar \"php\", annars måste du döpa om alla filer för den valda filtypen)";
$f_lang['identi_acces_admin'] = "Ditt användarnamn för att logga in på kontrollpanelen";
$f_lang['login_admin'] = "Användare";
$f_lang['pass_admin'] = "Lösenord";
$f_lang['verif_pass_admin'] = "Ange lösenord igen";
$f_lang['installer'] = "Installera";
$f_lang['erreur_host'] = "Du glömde ange din databas värdserver";
$f_lang['erreur_user'] = "Du glömde ange ditt användarnamn för att ansluta till databasen";
$f_lang['erreur_nom_base'] = "Du glömde ange namnet på din databas";
$f_lang['erreur_log_admin'] = "Du glömde ange ditt användarnamn för att logga in på kontrollpanelen";
$f_lang['erreur_pass_admin'] = "Du glömde ange ditt lösenord för att logga in på kontrollpanelen";
$f_lang['erreur_pass_differents'] = "FEL, lösenorden stämmer inte överens.";
$f_lang['erreur_first_connexion'] = "<b>FEL, det gick inte upprätta anslutning till databasen.</b><br><br>vänligen kontrollera dina användaruppgifter : <a href=\"javascript:history.go(-1);\"><b>tillbaks</b></a>.";
$f_lang['erreur_install'] = "Installationen misslyckades";
$f_lang['ok_install'] = "Installationen lyckades";
$f_lang['text_ok_install'] = "<b>Tack ! Installationen lyckades.</b><br><br>Av säkerhetsskäl bör du nu radera eller döpa om installationfilen du nyss använde (\"setup.php\"), om inte kan andra personer använda filen för att förstöra dina konfigurationsfiler.<br><br>Du kan nu administrera din gästbok genom att klicka <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>här</b></a> eller<br> visa gästboken som besökare ser den <a href=\"".$chem_absolu."\" target=\"_blank\"><b>här</b></a>.";

/* administration */
$f_lang['page protect'] = "Inloggning till kontrollpanel";
$f_lang['login'] = "Användare";
$f_lang['pass'] = "Lösenord";
$f_lang['value identif'] = "Logga in";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* meny */
$f_lang['options'] = "Alternativ";
$f_lang['script'] = "Script";
$f_lang['graphismes'] = "Gästboksteman";
$f_lang['messages'] = "Meddelanden";
$f_lang['gestion'] = "Hantering";
$f_lang['censure_mots'] = "Censurerade ord";
$f_lang['bannir_ip'] = "Bannade IP's";
$f_lang['smileys'] = "Uttryckssymboler";
$f_lang['utilisateurs'] = "Administratörer";
$f_lang['ajouter'] = "Lägg till";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "Om...";
$f_lang['donner_avis'] = "Ge oss din åsikt";
$f_lang['deconnexion'] = "Logga ut";

 /* Alternativ */
 $f_lang['options_livre'] = "Gästboksalternativ";
$f_lang['options_generales'] = "Allmänna alternativ";
$f_lang['langue'] = "Språk";
$f_lang['send_mail'] = "Skall administratörerna informeras via e-post när ett nytt inlägg skrivs ?";
$f_lang['avert_mail'] = "<br>(<b>info.</b> : funktionen mail() är inaktiverad hos din värd, så även om du markerar \"Ja\" kommer du inte informeras via E-post)";
$f_lang['oui'] = "Ja";
$f_lang['non'] = "Nej";
$f_lang['options_modules'] = "Alternativ för fält";
$f_lang['admin_champ_email'] = "Besökare ombeds ange sin e-postadress";
$f_lang['admin_champ_site'] = "Besökare ombeds ange URL till sin hemsida";
$f_lang['admin_champ_pays'] = "Besökare ombeds ange sin stad och hemland";
$f_lang['admin_champ_note'] = "Besökare kan utvärdera din sida genom poäng 1-10";
$f_lang['admin_ok_aff_moteur'] = "Visa sökmotorn";
$f_lang['options_tech'] = "Tekniska alternativ";
$f_lang['url_recharger'] = "Sida att ladda om för gästboken";
$f_lang['url_variables'] = "Variabla instruktioner sänds som parametrar (skriv # istället för $ i en variabel)";
$f_lang['temps_session'] = "Tid i sekunder innan sessionen för kontrollpanelen gör timeout";
$f_lang['skin_to_use'] = "Tema som används";
$f_lang['enregistrer'] = "Spara";
$f_lang['nb_pages'] = "Antal meddelanden som visas per sida i gästboken";
$f_lang['merci_options'] = "Tack, informationen har uppdaterats";
$f_lang['erreur_options'] = "FEL\\nInformationen kunde inte lagras, det gick inte skriva till filen \\\"config.".$alex_livre_ext."\\\" , ändra den här filen med en texteditor för att justera dina inställningar.";
$f_lang['temps_ip_post'] = "Antal minuter som måste passera innan en besökare kan göra ett nytt inlägg";
$f_lang['minutes'] = "minuter";
$f_lang['cut_mots'] = "Antal tecken i ett ord innan det radbryts";
$f_lang['format_date'] = "Datumformat";

/* Teman */
$f_lang['ok_ajouter'] = "Tack, temat har skapats utan problem";
$f_lang['erreur_ajouter'] = "FEL\\nTemat kunde inte skapas, vänligen skapa det manuellt";
$f_lang['text1_2'] = "Följande teman kommer sparas i katalogen &quot;templates/skins/&quot;. Du kan enkelt modifiera dem här eller genom att ändra direkt i .html-filerna.";
$f_lang['text2'] = "<b>Om du vill ändra mallarna för kontrollpanelen</b> måste du manuellt ändra filerna i katalogen &quot;templates/admin/&quot; .";
$f_lang['text_aj_skin'] = "Lägg till ett tema";
$f_lang['ajouter'] = "Lägg till";
$f_lang['gestion_skins'] = "Temahantering";
$f_lang['vous_editez'] = "Du kan nu redigera detta tema :";
$f_lang['style'] = "stylesheet";
$f_lang['ajouter_message'] = "lägg till en del till inlägg";
$f_lang['nbre_messages_page'] = "antal inlägg / siddelar";
$f_lang['pages_dispos'] = "lista över tillgängliga sidor / nästa sida - föregående siddel";
$f_lang['texte_corps_messages'] = "inläggs body";
$f_lang['espacement'] = "avstånd mellan två inlägg";
$f_lang['text_assembly'] = "konstruera filen från de föregående delarna";
$f_lang['ok_edit_skin'] = "Tack, temat har uppdaterats";
$f_lang['erreur_edit_skin'] = "FEL\\nEn eller flera av temats filer kunde inte uppdateras. Vänligen redigera dessa filer manuellt.";
$f_lang['ajouter'] = "Lägg till";
$f_lang['supprimer'] = "Radera";
$f_lang['text_sup_skin'] = "Radera tema";
$f_lang['ok_supprimer'] = "Tack, temat har raderats.";
$f_lang['erreur_supprimer'] = "FEL\\nEn eller flera av temats filer kunde inte raderas, du måste radera dem manuellt.";

/* Censur */
$f_lang['aj_mot'] = "Lägg till nytt ord "; 
$f_lang['mot_interdit'] = "Förbjudet ord :";
$f_lang['remplacer_par'] = "Ersätt med :";
$f_lang['gestion_censure'] = "Hantering av förbjudna ord";
$f_lang['mot'] = "ord";
$f_lang['remplace_by'] = "ersatt med";
$f_lang['liste_jour'] = "Uppdatera listan";
$f_lang['sup_mots'] = "Radera valda ord";
$f_lang['erreur_aj_censure1'] = "Vänligen ange ett ord att censurera";
$f_lang['erreur_aj_censure2'] = "Vänligen ange ett ord att ersätta de censurerade orden med";
$f_lang['ok_aj_mot'] = "Tack, det censurerade ordet har lagts till.";
$f_lang['verif_sup'] = "Vill du permanent radera de valda orden ?";
$f_lang['merci_modif'] = "Tack, ändringarna har sparats";

/* Spärra ip */
$f_lang['bannir_ip'] = "Spärra IP's";
$f_lang['text_ip1'] = "Alla som surfar på internet har ett specifikt ID bestående av siffror i 4 grupper (t.ex. 201.10.25.14) och kallas för IP-adress. Denna IP-adress utdelas av internetleverantören/ISP och är ofta dynamisk, dvs. ändras i princip varenda gång en användare ansluter till internet.";
$f_lang['text_ip2'] = "Om du vill <b>förhindra en användare att skriva inlägg i din gästbok</b>, kan du kopiera hans/hennes IP-adress hit för att spärra denna. Du kan också spärra ett intervall genom att använda wildcard/asterisk * (t.ex. 201.15.55.*, eller rentav 158.*.*.*).";
$f_lang['ajouter_ip'] = "Lägg till IP att spärra";
$f_lang['gestion_ip'] = "Hantera IP's";
$f_lang['sup_ip'] = "Radera valda spärrade IP'n";
$f_lang['ok_aj_ip'] = "Tack, detta IP är tillagt på listan över förbjudna IP";
$f_lang['verif_sup_ip'] = "Säkert att du vill radera valda IP's ?";

/* Uttryckssymboler */
$f_lang['gestion_smileys'] = "Hantering av uttryckssymboler";
$f_lang['text_smileys'] = "<b>Uttryckssymboler möjliggör för besökaren att uttrycka sig</b> när han/hon skriver ett inlägg. Från denna sida kan du enkelt lägga till eller ta bort symboler så att dina besökare har ett brett urval :o)<br><br>Uttryckssymboler som finns tillgängliga på denna sida är lagrade i katalogen \"images/smileys\" .";
$f_lang['ajouter_smiley'] = "Lägg till en uttryckssymbol";
$f_lang['image_smiley'] = "Bild";
$f_lang['car_replace'] = "Tillhörande kod";
$f_lang['gestion_smileys'] = "Hantering av uttryckssymboler";
$f_lang['sup_smileys'] = "Radera vald(a) uttryckssymbol(er)";
$f_lang['erreur_image'] = "Vänligen välj en uttryckssymbol";
$f_lang['erreur_car'] = "Vänligen ange en tillhörande kod för den valda uttryckssymbolen";
$f_lang['ok_aj_smiley'] = "Tack, uttryckssymbolen har lagts till utan problem";
$f_lang['no_smiley'] = "Uttryckssymbolen måste vara av filtypen GIF- eller JPEG-bild";
$f_lang['copy_impossible'] = "FEL\\nDet gick inte kopiera uttryckssymbolen i katalogen \\\"images/smileys\\\" .";
$f_lang['car_replace_exist'] = "FEL\\nDen tillhörande koden är upptagen.";
$f_lang['modif_smileys'] = "Uppdatera alla uttryckssymboler";
$f_lang['verif_sup_smileys'] = "Vill du verkligen radera vald(a) uttryckssymbol(er) ?";
$f_lang['merci_modif_smileys'] = "Tack, uttryckssymbolderna har redigerats.";

/* lägg till administratörer */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Lägg till en gästboksadministratör";
	$f_lang['add_admin_2'] = "Lägg till en administratör";
	$f_lang['ajouter_admin'] = "Lägg till";
	$f_lang['name_ajouter_admin'] = "Lägg till";
}
else{
	$f_lang['add_admin_texte'] = "Ändra en gästboksadministratör";
	$f_lang['add_admin_2'] = "Ändra en administratör";
	$f_lang['ajouter_admin'] = "Spara";
	$f_lang['name_ajouter_admin'] = "Ändra";
}

$f_lang['identif_connexion'] = "Inloggningsnamn";
$f_lang['passe_admin'] = "Lösenord";
$f_lang['email_admin'] = "E-post (vikigt om administratören skall kunna meddelas via e-post när ett nytt inlägg skrivs)";
$f_lang['admin_receive_email'] = "Skall administratören meddelas via e-post när ett nytt inlägg skrivs ?";
$f_lang['admin_modif_options'] = "Får ändra inställningar för script ?";
$f_lang['admin_gestion_skins'] = "Får ändra teman ?";
$f_lang['admin_gestion_messages'] = "Får hantera meddelanden ?";
$f_lang['admin_gestion_censure'] = "Får hantera censurerade ord ?";
$f_lang['admin_gestion_smileys'] = "Får hantera uttryckssymboler ?";
$f_lang['admin_gestion_admin'] = "Får hantera andra administratörskonton ?";
$f_lang['erreur_name'] = "Vänligen ange ett inloggningsnamn";
$f_lang['erreur_passe'] = "Vänligen ange ett lösenord";
$f_lang['erreur_email'] = "Vänligen ange en e-postadress";
$f_lang['ok_aj_admin'] = "Tack, kontot skapades utan problem";
$f_lang['ok_modif_admin'] = "Tack, kontot har uppdaterats";
$f_lang['erreur_aj_admin'] = "FEL\\nDetta inloggningsnamn existerar redan";
$f_lang['revenir'] = "Tillbaka till föregående sida";

/* Hantering av administratörer */
$f_lang['gest_admin'] = "Hantering av administratörer";
$f_lang['sup_admin'] = "Markering";
$f_lang['login_admin'] = "Inloggningsnamn";
$f_lang['email_admin'] = "E-post";
$f_lang['modif_admin'] = "Redigera";
$f_lang['value_sup_admin'] = "Radera alla markerade administratörer";
$f_lang['verif_sup_admin'] = "Vill du verkligen radera alla valda administratörer ?";

/* Felmeddelanden */
$f_lang['erreur_texte'] = "SIDAN EJ TILLGÄNGLIG";
$f_lang['erreur_auth'] = "Inloggningen misslyckades";
$f_lang['erreur_droits'] = "Du har inte tillräckliga rättigheter för att se denna sida.";

/* Gästbok */
$f_lang['note_moyenne'] = "Medelbetyg som besökare gett den här sidan :";
$f_lang['title_guestbook'] = "Min gästbok";
$f_lang['note_super'] = " : fantastisk !";
$f_lang['note_moyen'] = " : medel";
$f_lang['note_rate'] = " : botten";
$f_lang['nom_pseudo_visiteur'] = "Namn:";
$f_lang['email_visiteur'] = "E-post  :";
$f_lang['site_web_visiteur'] = "Hemsida URL :";
$f_lang['ville_pays_visiteur'] = "Stad / Land :";
$f_lang['note_visiteur'] = "Ditt betyg :";
$f_lang['message_visiteur'] = "Ditt meddelande :";
$f_lang['ajouter_message_visiteur'] = "Skicka inlägget";
$f_lang['erreur_add_nom'] = "Vänligen skriv ditt namn";
$f_lang['erreur_add_message'] = "Vänligen skriv ett meddelande";
$f_lang['erreur_mail'] = "Din e-postadress är ogiltig";
$f_lang['messages'] = "Inlägg";
$f_lang['messages_a'] = "till";
$f_lang['page'] = "Sida";
$f_lang['nbre_messages'] = "Antal inlägg";
$f_lang['message_le'] = "den";
$f_lang['message_note'] = "Betyg";
$f_lang['send_mail_to'] = "Skicka e-post till";
$f_lang['go_home'] = "Besök sidan";
$f_lang['precedente'] = "&lt;&lt; Föregående";
$f_lang['suivante'] = "Nästa &gt;&gt;";
$f_lang['no_message'] = "Det finns inga inlägg att visa.";
$f_lang['no_ip'] = "OBS!\\nDitt IP har blivit spärrat, du kan ej skriva inlägg";
$f_lang['ok_post'] = "Tack! Ditt inlägg har skickats.";
$f_lang['time_erreur'] = "FEL\\nDitt inlägg kunde ej sparas, du måste vänta en stund innan du kan skicka ett nytt.";
$f_lang['text_select_search'] = "Visa bara meddelanden som innehåller följande ord";
$f_lang['text_ok_search'] = "Ok";

/* e-postmeddelning */
$f_lang['mail_object'] = "[info] - Nytt Inlägg i din gästbok - ";
$f_lang['mail_message'] = "Hej,\n\nVi informerar dig om att du har ett nytt inlägg i din gästbok ";

/* Hantera inlägg */
$f_lang['gestion_mess'] = "Hantera inlägg";
$f_lang['selectionner_pages'] = "Välj";
$f_lang['messages_gest'] = "Inlägg";
$f_lang['page_gest'] = "sida";
$f_lang['aller_en_page'] = "Gå till sida";
$f_lang['supprimer_gest'] = "Radera";
$f_lang['auteur_gest'] = "skrivet av";
$f_lang['modifier_gest'] = "redigera";
$f_lang['supprimer_mess_selected'] = "Radera valda meddelanden";
$f_lang['verif_sup_mess'] = "Vill du verkligen radera valda meddelanden ?";

/* redigera ett inlägg */
$f_lang['modif_mess'] = "Redigera ett inlägg";
$f_lang['message_modif'] = "Meddelande";
$f_lang['nom_modif'] = "Namn";
$f_lang['email_modif'] = "E-post";
$f_lang['site_web_modif'] = "Hemsida URL";
$f_lang['note_modif'] = "Poäng som gavs till din sida";
$f_lang['ville_pays_modif'] = "Stad / Land";
$f_lang['date_modif'] = "Skrivet den";
$f_lang['ip_modif'] = "IP address";
$f_lang['ok_modif_mess'] = "Tack, ändringarna har sparats";

/* sidtitlar */
$f_lang['title identification'] = "Logga in";
$f_lang['title administration'] = "Administration";
$f_lang['title frame gauche'] = "vänster ram";
$f_lang['title options'] = "alternativ";
$f_lang['title skins'] = "teman";
$f_lang['title censure'] = "ord att censurera";
$f_lang['title censure'] = "Hantering av spärrade IP's";
$f_lang['title smileys'] = "Hantering av uttryckssymboler";
$f_lang['title add admin'] = "Lägg till en gästboksadministratör";
$f_lang['title gest admin'] = "Hantering av gästboksadministratörer";
$f_lang['title erreur'] = "Fel";
$f_lang['title gestion mess'] = "Hantering av inlägg";
$f_lang['title modif mess'] = "Redigering av inlägg";
$f_lang['title setup'] = "Installation";

/* felmeddelanden */
$f_lang['erreur_mysql_connect'] = "Det gick inte ansluta till databasen";
$f_lang['erreur_connexion'] = "Dina inloggningsuppgifter är felaktiga";
$f_lang['manque login'] = "Vänligen ange ditt användarnamn";
$f_lang['manque pass'] = "Vänligen ange ditt lösenord";
$f_lang['end session'] = "Din session gjorde timeout";

/* add version 3.11 */
$f_lang['addSignature'] = "Skriv ett inlägg";
$f_lang['seeMessages'] = "Läs inlägg";
$f_lang['addMessageBlocAdd'] = "Skriv ett inlägg i gästboken";

/* add version 3.2 */
$f_lang['version'] = "Version";
$f_lang['new_version_dispo'] = "En uppdaterad version av gästboken finns tillgänglig";
$f_lang['version_courrante'] = "Nuvarande scriptversion";
$f_lang['info_version'] = "Information om den versionen du har";
$f_lang['version_txt_ok'] = "Din version är ".$alex_livre_version.",<br>detta är den senaste versionen, uppgradering ej är nödvändigt.";
$f_lang['version_txt_erreur'] = "The version you have is ".$alex_livre_version.".<br/><b>An error occured during update verification.</b> You can verify new version on our website htt://www.alexguestbook.net"
$f_lang['version_txt_update'] = "Din version är ".$alex_livre_version.", <b>en ny version finns tillgänglig.</b>";
$f_lang['version_down'] = "Ladda ned den uppgraderade versionen";
$f_lang['help_update'] = "Hjälp om uppgraderingen";
$f_lang['spam'] = "USER AGENT i din webbläsare kunde ej fastslås, det verkar som en robot försökte att automatiskt skriva ett inlägg. Om detta inte är fallet, försök igen med en annan webbläsare.";
$f_lang['avis_spammeurs'] = "Note to spammers";
$f_lang['txt_spammeurs'] = "<b>This Guestbook is protected against spamming</b>, Email adresses and URLs are encoded in the source code of the generated pages, therefore it's absolutely useless to post commercials links, they will not be seen by search engines (furthermore your message will be deleted anyway...)";
$f_lang['fermer'] = "Stäng fönster";
$f_lang['valider_messages'] = "Vill du granska inlägg innan de blir synliga för allmänheten ?";
$f_lang['valide'] = "Granskat ?";
$f_lang['mess_valide'] = "Detta inlägg har granskats och godkänts";
$f_lang['mess_invalide'] = "Detta inlägg väntar på att bli granskat";
$f_lang['info_mess_valide'] = "Granskat inlägg ?";
$f_lang['ok_post_valid'] = "Tack ! Ditt inlägg har sparats utan problem, det kommer bli synligt så snart webmaster har granskat och godkänt det.";
$f_lang['see_skin'] = "Förhandsgranska gästboken med detta tema";
$f_lang['maxi_car'] = "Max antal tecken som tillåts per inlägg (0 = oändligt)";
$f_lang['il_reste'] = "Du kan skriva upp till";
$f_lang['caracteres'] = "fler tecken i ditt inlägg";
$f_lang['sup_copyright'] = "Ta bort copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Namn listan över säkerhetskoder";
$f_lang['add_code_securite'] = "Användare måste ange säkerhetskod för att kunna skriva ett inlägg ?";
$f_lang['t_chem_dossier_fonts'] = "Full URL till katalogen med typsnitt";
$f_lang['t_color_txt_code'] = "Hexadecimal kod för den kodade textens färg";
$f_lang['t_color_background_code'] = "Hexadecimal kod för bakgrundsfärg";
$f_lang['veuillez_taper_code'] = "Skriv av säkerhetskoden till den högra rutan.";
$f_lang['a_quoi_ca_sert'] = "Varför detta?";
$f_lang['why_code'] = "Varför en \"säkerhetskod\" ?";
$f_lang['txt_why_code'] = "Säkerhetskoden gör så att vi kan verifiera att det är en riktig användare som skriver inlägget och inte ett automatiskt program/robot.<br><br><b>Reklam och liknande länkar/spam är förbjudet i denna gästbok!</b>";
$f_lang['erreur_code_securite'] = "Vänligen ange säkerhetskoden";
$f_lang['erreur_saisie_code_securite'] = "Säkerhetskoden du angav är inte giltig, vänligen försök på nytt.";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Automatiskt svar";
$f_lang['admin_gestion_reponse_auto'] = "Får hantera automatiska svar?";
$f_lang['text_reponse_auto'] = "<b>På den här sidan kan du skriva ett automatiskt svar</b> som kommer skickas till besökare som skrivit ett inlägg i din gästbok. Detta meddelande kommer skickas om du aktiverar motsvarande funktion i scriptets inställningar.<br><br>Varje språk kan ha sitt eget automatiska svar och koden [PSEUDO] kommer ersättas med namnet på besökaren som skrev inlägget.";
$f_lang['name_table_rep_auto'] = "Namn på listan i MySQL som kommer innehålla meddelanden för automatiska svar.";
$f_lang['gestion_reponses'] = "Redigera meddelande";
$f_lang['msg_remerciement'] = "Tack-meddelande";
$f_lang['txt_remerciement'] = "Hej [PSEUDO],\n\nTack för att du skrev ett inlägg i gästboken!";
$f_lang['ok_save_msg_rem'] = "Tack, det automatiska tack-meddelandet har sparats.";
$f_lang['envoyer_remerciement'] = "Skall tack-meddelandet skickas automatiskt?";
$f_lang['remerciement'] = "Tack";
$f_lang['titre_guestbook'] = "Gästbokens titel";
$f_lang['text_titre_guestbook'] = "<b>Du kan ändra gästbokens titel</b> och ha olika titlar för varje språk.";
$f_lang['titre'] = "Titel";
$f_lang['parametrage'] = "Inställningar";
$f_lang['ok_save_titre'] = "Tack, titeln har sparats.";
$f_lang['ville_visiteur'] = "Stad :";
$f_lang['pays_visiteur'] = "Land :";
$f_lang['flag'] = "Flagga";
$f_lang['ville_modif'] = "Stad";
$f_lang['pays_modif'] = "Land";
$f_lang['action'] = "Åtgärd";
$f_lang['repondre'] = "Svara";
$f_lang['votre_reponse'] = "Ditt svar";
$f_lang['ok_reponse_mess'] = "Tack, ditt svar har sparats";
$f_lang['defaut_titre_rep'] = "Webmasters svar";
$f_lang['annuler'] = "Avbryt";
$f_lang['num_appari'] = "Visar nummer";
$f_lang['nb_max_smileys'] = "Maximalt antal uttryckssymboler som visas";
$f_lang['plus_smileys'] = "Visa flera uttryckssymbolder";
$f_lang['liste_all_smilies'] = "Lista över alla uttryckssymboler";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>Den här funktionen gör så att du kan visa de senaste inläggen som skrivits i din gästbok</b> på en annan valfri sida.";
$f_lang['parametrage_modele'] = "Inställningar för mall";
$f_lang['ok_save_boite'] = "Tack, dina inställningar har sparats";
$f_lang['format_date_boite'] = "Datumformat (identisk med <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> PHP funktionen)";
$f_lang['nbre_maxi_pseudo_boite'] = "Maximalt antal tecken som visas för namn";
$f_lang['nbre_maxi_message_boite'] = "Maximalt antal tecken som visas i inlägg";
$f_lang['modele_affichage_donnees'] = "Datapostmall";
$f_lang['url_dossier_livre_boite'] = "Full URL till katalogen med din gästbok";
$f_lang['url_livre_boite'] = "Full URL index-sidan för din gästbok";
$f_lang['generation_code'] = "Skapa Javascript-kod";
$f_lang['nom_msg_afficher'] = "Antal meddelanden att visa";
$f_lang['generer_code'] = "Skapa kod för åberopning av Javascript";
$f_lang['code_a_copier'] = "HTML kod som skall kopieras till den/de sida/sidor du väljer";
$f_lang['erreur_boite_java'] = "Vänligen ange ett giltigt nummer för antal meddelanden att visa";
$f_lang['erreur_par_boite'] = "Inställningsfel, kan inte isolera [BOUCLE] ... [/BOUCLE] -kedjan i din mall.";
$f_lang['saut_ligne_msg_boite'] = "Behåll radbrytningar i inläggen";
$f_lang['message_a'] = "@";
$f_lang['admin_gestion_bdd'] = "Får hantera databasen ?";
$f_lang['bdd'] = "Databas";
$f_lang['optimisation'] = "Optimering";
$f_lang['sauvegarde'] = "Spara";
$f_lang['restauration'] = "Återskapning";
$f_lang['optimisation_txt'] = "<b>Vid lagring och radering samlas oanvända och tomma listor.</b> Dessa inverkar prestandamässigt negativt på din databas och följdaktligen din webserver, den här sidan gör så du kan undvika problemet genom att optimera databasen och listorna.";
$f_lang['liste_tables'] = "Listor i din databas";
$f_lang['lancer_optimisation'] = "Påbörja optimering";
$f_lang['tables'] = "LISTA";
$f_lang['pertes'] = "FÖRLORAT";
$f_lang['octets'] = "bytes";
$f_lang['ok_optimise'] = "Tack, listor som hade förlorade bytes har optimerats.";
$f_lang['txt_sauvegarde'] = "<b>Om du vill spara inläggen en längre tid så rekommenderas du att med jämna mellanrum göra en säkerhetskopia.</b> En hårddiskkrasch kan förstöra alla dina data. En säkerhetskopia kan också vara användbar om du vill flytta dina inlägg till en annan server.";
$f_lang['lancer_sauvegarde'] = "Påbörja säkerhetskopiering";
$f_lang['lancer_restauration'] = "Påbörja återskapning";
$f_lang['txt_restauration'] = "<b>Om du har genomfört en säkerhetskopiering så kan du återskapa hela din gästboks databas.</b> Välj då motsvarande fil på din hårddisk.<br><br><b><u>OBS</u></b>, om filen är väldigt stor (flertalet megabytes), så kan återskapningsprocessen skapa problem med serverinställningarna för din hemsida (set_time_limit() och maximalt tillåtna storlek för uppladdning ).";
$f_lang['select_file'] = "Välj en säkerhetskopia på din hårddisk eller server (.ZIP eller .SQL)";
$f_lang['confirm_restauration'] = "Bekräfta att du vill påbörja återskapningsprocessen och därmed radera nuvarande data?";
$f_lang['select_file_restau'] = "Vänligen välj en fil på din hårddisk";
$f_lang['erreur_ext_restau'] = "Den valda filens är inte av typen .ZIP eller .SQL, återskapning kunde ej genomföras.";
$f_lang['conseil_zip'] = "(Packa upp ZIP-filen på din hårddisk för att komma åt SQL-filen)";
$f_lang['erreur_ext_zip'] = "Tillägget för PHP_ZIP  ör ej tillgängligt på din server, återskapning via en ZIP-fil är därför inte möjligt. Välj istället en fil av typen .SQL på din hårddisk".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Problem vid läsning från ZIP-arkivet, kan inte genomföra återskapning.  Försök återskapa från en fil av filtypen .SQL ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Den valda SQL-filen verkar inte vara @lex Guestbook scriptfil.  Kunde inte genomföra återskapningen.";
$f_lang['restauration_terminee'] = "Tack ! Återskapningen genomfördes utan problem !";

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