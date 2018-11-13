<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2012    //
//         Hercelin Maxime (c) 2005 - 2012   //
//         http://www.alexguestbook.net/     //
//              all right reserved           //
//        Dutch translation by A.Dousma      //
//            http://www.jyoti.nl/           //
///////////////////////////////////////////////

/* Encodage utilisé dans le script */
$SCRIPT_ENCODAGE = "iso-8859-1";
$CONTENT_LANGUAGE = "nl";

/* setup */
$f_lang['install_auto'] = "Automatische Installatie";
$f_lang['identi_base'] = "Database ID";
$f_lang['type_base'] = "Database type";
$f_lang['user_base'] = "Gebruikersnaam";
$f_lang['pass_base'] = "Wachtwoord";
$f_lang['nom_base'] = "Database naam";
$f_lang['nom_table'] = "Tabel namen";
$f_lang['name_table_sessions'] = "Naam van de sessie tabel";
$f_lang['name_table_users'] = "Naam van de gebruikers tabel";
$f_lang['name_table_messages'] = "Naam van de berichten";
$f_lang['name_table_censure'] = "Naam van de gecensureerde woorden tabel";
$f_lang['name_table_ip'] = "Naam van de verbannen ip's tabel";
$f_lang['name_table_smileys'] = "Naam van de smiley tabel";
$f_lang['extension_script'] = "Script extensie";
$f_lang['choose_extension'] = "Kies een extensie voor de pagina's<br>(wij adviseren \"php\", anders moet u alle bestanden hernoemen met de gekozen extensie)";
$f_lang['identi_acces_admin'] = "De naam van de beheerder van het gastenboek";
$f_lang['login_admin'] = "Naam";
$f_lang['pass_admin'] = "Wachtwoord";
$f_lang['verif_pass_admin'] = "Typ het wachtwoord nogmaals";
$f_lang['email_admin_setup'] = "Uw e-mail adres";
$f_lang['installer'] = "Installeer";
$f_lang['erreur_host'] = "U bent de servernaam vergeten";
$f_lang['erreur_user'] = "U bent de gebruikersnaam van de database server vergeten";
$f_lang['erreur_nom_base'] = "U bent de database naam vergeten";
$f_lang['erreur_log_admin'] = "U bent de naam van de beheerder vergeten";
$f_lang['erreur_pass_admin'] = "U bent het wachtwoord van de beheerder vergeten";
$f_lang['erreur_pass_differents'] = "LET OP uw wachtwoorden zijn niet gelijk.";
$f_lang['erreur_first_connexion'] = "<b>ERROR, connectie met de database server was onmogelijk.</b><br><br>Controleer alstublieft de gegevens van de database: <a href=\"javascript:history.go(-1);\"><b>terug</b></a>.";
$f_lang['erreur_install'] = "Installatie mislukt";
$f_lang['ok_install'] = "Installatie geslaagd";
$f_lang['text_ok_install'] = "<b>Hartelijk Dank. Installatie geslaagd.</b><br><br>Wij adviseren u dringend het installatie bestand dat u net heeft gebruikt te verwijderen (\"setup.php\"), als u dit niet doet, bestaat de kans dat anderen de procedure herhalen en zo het gastenboek onbruikbaar maken.<br><br>u kunt het gastenboek nu gaan configureren door <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>hier</b></a><b> te klikken</b> of<br> het gastenboek te bekijken zoals bezoekers het zien. klik dan<a href=\"".$chem_absolu."\" target=\"_blank\"><b>hier</b></a>.";

/* administration */
$f_lang['page protect'] = "Inloggen voor beheerders";
$f_lang['login'] = "Gebruikersnaam";
$f_lang['pass'] = "Wachtwoord";
$f_lang['value identif'] = "Login";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "Opties";
$f_lang['script'] = "Instellingen";
$f_lang['graphismes'] = "Opmaak";
$f_lang['messages'] = "Berichten";
$f_lang['gestion'] = "Management";
$f_lang['censure_mots'] = "Gecensureerde woorden";
$f_lang['smileys'] = "Smileys";
$f_lang['utilisateurs'] = "Beheerders";
$f_lang['ajouter'] = "Toevoegen";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "Over...";
$f_lang['donner_avis'] = "Geef ons uw mening";
$f_lang['deconnexion'] = "Afmelden";

 /* options */
 $f_lang['options_livre'] = "Gastenboek opties";
$f_lang['options_generales'] = "Algemene opties";
$f_lang['langue'] = "Talen";
$f_lang['send_mail'] = "Wilt u dat de beheerder bij elk nieuw bericht een e-mail ontvangt?";
$f_lang['avert_mail'] = "<br>(<b>informatie</b> : de e-mail() functie van uw provider is uitgeschakeld, om die reden, ook al kiest u\"ja\" ) zal u geen e-mail berichten ontvangen";
$f_lang['oui'] = "ja";
$f_lang['non'] = "nee";
$f_lang['options_modules'] = "Gastenboek veld opties";
$f_lang['admin_champ_email'] = "Bezoekers kunnen hun e-mail adres invullen";
$f_lang['admin_champ_site'] = "Bezoekers kunnen hun internetadres invullen";
$f_lang['admin_champ_pays'] = "Bezoekers kunnen het land van herkomst invullen";
$f_lang['admin_champ_note'] = "Bezoekers kunnen het gastenboek een cijfer geven";
$f_lang['admin_ok_aff_moteur'] = "Laat de zoekmachine zien";
$f_lang['options_tech'] = "Geavanceerde opties";
$f_lang['url_recharger'] = "Te laden pagina na het posten van een bericht";
$f_lang['url_variables'] = "Variabele instructies om te versturen als parameters (type # ipv $ in een variabele)";
$f_lang['temps_session'] = "Cookie levensduur voor de configuratie";
$f_lang['skin_to_use'] = "Het te gebruiken opmaakprofiel";
$f_lang['enregistrer'] = "Opslaan";
$f_lang['nb_pages'] = "Aantal berichten per pagina";
$f_lang['merci_options'] = "Dank u, de informatie is verwerkt en bewaard";
$f_lang['erreur_options'] = "ERROR\\nDe informatie kon niet opgeslagen worden, het was niet mogelijk om het \\\"config.".$alex_livre_ext."\\\" bestand te schrijven, probeert u alstublieft de wijzigingen met een tekst editor aan te passen.";
$f_lang['temps_ip_post'] = "Aantal minuten voor dat iemand weer een bericht kan posten";
$f_lang['minutes'] = "minuten";
$f_lang['cut_mots'] = "Aantal letters voordat een woord wordt afgekort";
$f_lang['format_date'] = "Datum formaat";

/* skins */
$f_lang['ok_ajouter'] = "Bedankt, het opmaakprofiel is met succes gemaakt";
$f_lang['erreur_ajouter'] = "ERROR\\nHet opmaakprofiel kon niet gemaakt worden, probeert u het handmatig alstublieft";
$f_lang['text1_2'] = "De volgende opmaakprofielen worden opgeslagen in &quot;templates/skins/&quot; map. Deze interface zorgt er voor dat u de opmaakprofielen eenvoudig kan wijzigen maar u kunt ze ook bewerken met een HTML editor.";
$f_lang['text2'] = "<b>Als u de opmaak van de beheerderpagina´s dan kunt u deze alleen handmatig wijzigen.</b> Deze kunt u vinden in de &quot;templates/admin/&quot; map.";
$f_lang['text_aj_skin'] = "Voeg een opmaakprofiel toe";
$f_lang['ajouter'] = "voeg toe";
$f_lang['gestion_skins'] = "Opmaakprofielen";
$f_lang['vous_editez'] = "U kunt nu uw opmaakprofiel bewerken:";
$f_lang['style'] = "stylesheet";
$f_lang['ajouter_message'] = "nieuw bericht";
$f_lang['nbre_messages_page'] = "aantal berichten / pagina gedeelte";
$f_lang['pages_dispos'] = "lijst van de beschikbare pagina´s / volgende pagina – vorige pagina gedeelte";
$f_lang['texte_corps_messages'] = "berichten opmaak";
$f_lang['espacement'] = "ruimte tussen 2 berichten";
$f_lang['text_assembly'] = "de vorige bestandsdelen samenvoegen";
$f_lang['ok_edit_skin'] = "het opmaak profiel is bijgewerkt!";
$f_lang['erreur_edit_skin'] = "ERROR\\nEen of meerdere bestanden van het opmaakprofiel konden niet opgeslagen worden. Probeert u het handmatig.";
$f_lang['ajouter'] = "Toevoegen";
$f_lang['supprimer'] = "Verwijder";
$f_lang['text_sup_skin'] = "Verwijder een opmaakprofiel";
$f_lang['ok_supprimer'] = "Het opmaakprofiel is met succes verwijderd.";
$f_lang['erreur_supprimer'] = "ERROR\\nEen of meerdere bestanden van het opmaakprofiel konden niet verwijderd worden, u zult deze handmatig moeten verwijderen.";

/* page des mots censurés */
$f_lang['aj_mot'] = "Voeg een woord toe "; 
$f_lang['mot_interdit'] = "Verboden woord:";
$f_lang['remplacer_par'] = "Vervang door :";
$f_lang['gestion_censure'] = "Censuur management";
$f_lang['mot'] = "woord";
$f_lang['remplace_by'] = "vervang door";
$f_lang['liste_jour'] = "Vernieuw de lijst";
$f_lang['sup_mots'] = "Verwijder de geselecteerde woorden";
$f_lang['erreur_aj_censure1'] = "Geef het te censureren woord";
$f_lang['erreur_aj_censure2'] = "Geef het woord dat het gecensureerde woord moet vervangen";
$f_lang['ok_aj_mot'] = "Het gecensureerde woord is toegevoegd.";
$f_lang['verif_sup'] = "Weet u zeker dat u de geselecteerde woorden wilt verwijderen?";
$f_lang['merci_modif'] = "De wijzigingen zijn opgeslagen";

/* bannir des ip */
$f_lang['bannir_ip'] = "Verbannen ip's";
$f_lang['text_ip1'] = "Elke bezoeker heeft een unieke code die bestaat uit 4 cijfercombinaties (b.v. 201.10.25.14). Deze code wordt verstrekt door de internet provider en kan wisselen, in theorie elke keer dat de persoon opnieuw inbeld.";
$f_lang['text_ip2'] = "Als u wilt <b>voorkomen dat mensen berichten posten op uw gastenboek</b>, kunt u hier het ip adres invullen. U kunt ook een complete reeks uitsluiten door het sterretje te gebruiken * (i.e. 201.15.55.*, of zelfs 158.*.*.*).";
$f_lang['ajouter_ip'] = "Voeg een verbannen ip toe";
$f_lang['gestion_ip'] = "Beheer de verbannen ip’s";
$f_lang['sup_ip'] = "Verwijder de geselecteerde verbannen ip’s";
$f_lang['ok_aj_ip'] = "Het ingevulde ip is nu verbannen";
$f_lang['verif_sup_ip'] = "Weet u zeker dat u de geselecteerde ip’s wilt verwijderen?";

/* smileys */
$f_lang['gestion_smileys'] = "Smileys beheer";
$f_lang['text_smileys'] = "<b>Smileys geven de schrijver van een bericht de mogelijkheid emoties mee te sturen</b>. Vanuit deze pagina kunt u smileys toevoegen en verwijderen zodat er een ruime keuze kan ontstaan :o)<br><br>Smileys die op deze pagina staan, staan opgeslagen in de \"images/smileys\" map.";
$f_lang['ajouter_smiley'] = "Voeg een smiley toe";
$f_lang['image_smiley'] = "Figuur";
$f_lang['car_replace'] = "Gewenste code";
$f_lang['gestion_smileys'] = "Smileys beheer";
$f_lang['sup_smileys'] = "Verwijder de geselecteerde smileys";
$f_lang['erreur_image'] = "Kies een smiley";
$f_lang['erreur_car'] = "Kies u alstublieft een juiste code voor de smiley";
$f_lang['ok_aj_smiley'] = "Smiley met succes toegevoegd";
$f_lang['no_smiley'] = "De smiley moet een GIF of JPEG bestand zijn";
$f_lang['copy_impossible'] = "ERROR\\nHet was onmogelijk om de smiley in de \\\"images/smileys\\\" map te zetten.";
$f_lang['car_replace_exist'] = "ERROR\\nDe gekozen smiley code bestaat al in de database.";
$f_lang['modif_smileys'] = "Update alle smileys";
$f_lang['verif_sup_smileys'] = "Weet u zeker dat u alle geselecteerde smileys wilt verwijderen?";
$f_lang['merci_modif_smileys'] = "De smileys zijn aangepast.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Voeg een beheerder toe";
	$f_lang['add_admin_2'] = "Voeg een beheerder toe";
	$f_lang['ajouter_admin'] = "voeg toe";
	$f_lang['name_ajouter_admin'] = "voeg toe";
}
else{
	$f_lang['add_admin_texte'] = "Wijzig een beheerder";
	$f_lang['add_admin_2'] = "Wijzig een beheerder";
	$f_lang['ajouter_admin'] = "Opslaan";
	$f_lang['name_ajouter_admin'] = "Wijzig";
}

$f_lang['identif_connexion'] = "Gebruikersnaam";
$f_lang['passe_admin'] = "Wachtwoord";
$f_lang['email_admin'] = "E-mail (Belangrijk als de beheerder e-mail moet krijgen wanneer er een nieuw bericht is gepost)";
$f_lang['admin_receive_email'] = "Wilt u dat deze beheerder een e-mail ontvangt als er een nieuw bericht is gepost?";
$f_lang['admin_modif_options'] = "Is deze beheerder gemachtigd de standaard opties te wijzigen?";
$f_lang['admin_gestion_skins'] = "Is deze beheerder gemachtigd het opmaakprofiel te wijzigen?";
$f_lang['admin_gestion_messages'] = "Is deze beheerder gemachtigd berichten te beheren ?";
$f_lang['admin_gestion_censure'] = "Is deze beheerder gemachtigd gecensureerde woorden te beheren?";
$f_lang['admin_gestion_smileys'] = "Is deze beheerder gemachtigd smileys te veranderen?";
$f_lang['admin_gestion_admin'] = "Is deze beheerder gemachtigd andere beheerders te wijzigen?";
$f_lang['erreur_name'] = "Voer een gebruikersnaam in";
$f_lang['erreur_passe'] = "Voer een wachtwoord in";
$f_lang['erreur_email'] = "Voer een e-mail adres in";
$f_lang['ok_aj_admin'] = "de beheerder is toegevoegd";
$f_lang['ok_modif_admin'] = "de beheerder is gewijzigd";
$f_lang['erreur_aj_admin'] = "ERROR\\nDeze gebruikersnaam bestaat al";
$f_lang['revenir'] = "Terug naar de vorige pagina";

/* gestion des admins */
$f_lang['gest_admin'] = "Beheer de beheerders";
$f_lang['sup_admin'] = "verwijder";
$f_lang['login_admin'] = "Naam";
$f_lang['email_admin'] = "E-mail";
$f_lang['modif_admin'] = "Verander";
$f_lang['value_sup_admin'] = "Verwijder alle geselecteerde beheerder";
$f_lang['verif_sup_admin'] = "Weet u zeker dat u alle geselecteerde beheerder wilt verwijderen?";

/* page d'erreur */
$f_lang['erreur_texte'] = "PAGINA NIET BESCHIKBAAR";
$f_lang['erreur_auth'] = "Identificatie niet gelukt";
$f_lang['erreur_droits'] = "Je hebt niet genoeg rechten om deze pagina te bekijken.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Gemiddelde score gegeven aan dit gastenboek:";
$f_lang['title_guestbook'] = "Het gastenboek";
$f_lang['note_super'] = " : Geweldig !";
$f_lang['note_moyen'] = " : Gaat wel";
$f_lang['note_rate'] = " : Verschrikkelijk";
$f_lang['nom_pseudo_visiteur'] = "Naam of alias :";
$f_lang['email_visiteur'] = "E-mail adres:";
$f_lang['site_web_visiteur'] = "Website URL:";
$f_lang['ville_pays_visiteur'] = "Plaats / Land :";
$f_lang['note_visiteur'] = "Wat vind je van dit gastenboek?";
$f_lang['message_visiteur'] = "Het bericht:";
$f_lang['ajouter_message_visiteur'] = "Verstuur";
$f_lang['erreur_add_nom'] = "Je bent je naam vergeten";
$f_lang['erreur_add_message'] = "Je bent je bericht vergeten";
$f_lang['erreur_mail'] = "Je e-mail adres klopt niet";
$f_lang['messages'] = "Berichten";
$f_lang['messages_a'] = "tot";
$f_lang['page'] = "Pagina";
$f_lang['nbre_messages'] = "Aantal berichten";
$f_lang['message_le'] = "op";
$f_lang['message_note'] = "Score";
$f_lang['send_mail_to'] = "Stuur een e-mail aan";
$f_lang['go_home'] = "Bezoek de website";
$f_lang['precedente'] = "&lt;&lt; vorige";
$f_lang['suivante'] = "volgende &gt;&gt;";
$f_lang['no_message'] = "Geen berichten.";
$f_lang['no_ip'] = "LET OP\\n Jou ip adres is verbannen, je bent dus niet in staat een bericht in dit gastenboek te posten.";
$f_lang['ok_post'] = "Bedankt!  Je bericht is succesvol toegevoegd.";
$f_lang['time_erreur'] = "LET OP\\nJe bericht kon niet geplaatst worden, probeer het later nog eens.";
$f_lang['text_select_search'] = "Laat alleen de berichten zien die het volgende bevatten";
$f_lang['text_ok_search'] = "Ok";

/* mail envoyé */
$f_lang['mail_object'] = "[info] – Nieuw bericht in het gastenboek - ";
$f_lang['mail_message'] = "Er is een nieuw bericht gepost in het gastenboek \n\nHet bericht is :\n-------------------------------------------\n";

/* gestion des messages */
$f_lang['gestion_mess'] = "Berichten beheren";
$f_lang['selectionner_pages'] = "Geef";
$f_lang['messages_gest'] = "berichten";
$f_lang['page_gest'] = "pagina";
$f_lang['aller_en_page'] = "Ga naar pagina";
$f_lang['supprimer_gest'] = "verwijder";
$f_lang['auteur_gest'] = "Schrijver";
$f_lang['modifier_gest'] = "bewerk";
$f_lang['supprimer_mess_selected'] = "Verwijder de geselecteerde berichten";
$f_lang['verif_sup_mess'] = "Weet u zeker dat u de geselecteerde berichten wilt verwijderen ?";

/* modifier un message */
$f_lang['modif_mess'] = "Bewerk een bericht";
$f_lang['message_modif'] = "Bericht";
$f_lang['nom_modif'] = "Naam";
$f_lang['email_modif'] = "E-mail";
$f_lang['site_web_modif'] = "Website URL";
$f_lang['note_modif'] = "Toegekende score aan het gastenboek";
$f_lang['ville_pays_modif'] = "Plaats / Land";
$f_lang['date_modif'] = "toegevoegd op";
$f_lang['ip_modif'] = "IP adres";
$f_lang['ok_modif_mess'] = "De wijzigingen zijn opgeslagen";

/* titre des pages */
$f_lang['title identification'] = "gebruikersnaam";
$f_lang['title administration'] = "beheer";
$f_lang['title frame gauche'] = "linker frame";
$f_lang['title options'] = "opties";
$f_lang['title skins'] = "opmaakprofielen";
$f_lang['title censure'] = "gecensureerde woorden";
$f_lang['title censure'] = "verbannen ip's";
$f_lang['title smileys'] = "smileybeheer";
$f_lang['title add admin'] = "voeg een beheerder toe";
$f_lang['title gest admin'] = "de beheerders wijzigen";
$f_lang['title erreur'] = "FOUT";
$f_lang['title gestion mess'] = "berichten beheren";
$f_lang['title modif mess'] = "een bericht bewerken";
$f_lang['title setup'] = "installatie";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Kan geen verbinding maken met de database";
$f_lang['erreur_connexion'] = "Uw gebruikergegevens zijn incorrect";
$f_lang['manque login'] = "Vul uw gebruikersnaam in";
$f_lang['manque pass'] = "Vul uw wachtwoord in";
$f_lang['end session'] = "Uw sessie is ten einde gekomen";

/* add version 3.11 */
$f_lang['addSignature'] = "Schrijf een nieuw bericht";
$f_lang['seeMessages'] = "Lees het gastenboek";
$f_lang['addMessageBlocAdd'] = "Voeg een bericht toe";

/* add version 3.2 */
$f_lang['version'] = "Versie";
$f_lang['new_version_dispo'] = "Er is een update voor het gastenboek beschikbaar";
$f_lang['version_courrante'] = "Huidige versie van het script";
$f_lang['info_version'] = "Informatie over de versie waar u over beschikt";
$f_lang['version_txt_ok'] = "De versie die u heeft is ".$alex_livre_version.",<br>Dit is de laatste versie. Een update is niet noodzakelijk.";
$f_lang['version_txt_erreur'] = "The version you have is ".$alex_livre_version.".<br/><b>An error occured during update verification.</b> You can verify new version on our website http://www.alexguestbook.net";
$f_lang['version_txt_update'] = "De versie die u heeft is ".$alex_livre_version.", <b>een nieuwe versie is beschikbaar.</b>";
$f_lang['version_down'] = "Download de nieuwe versie";
$f_lang['help_update'] = "Hulp bij de nieuwe versie";
$f_lang['spam'] = "Uw type internet browser kon niet worden vastgesteld, het lijkt er op dat een robot getracht heeft dit bericht te plaatsen. Als dit niet correct is probeert u het dan nogmaalt met een andere browser.";
$f_lang['avis_spammeurs'] = "Bericht aan spammers";
$f_lang['txt_spammeurs'] = "<b>Dit gastenboek is beveiligd tegen spammers</b>, E-mail adressen en links worden versleuteld geplaatst in de bron code en zijn niet te controleren door robots (En het bericht zal toch wel verwijderd worden...)";
$f_lang['fermer'] = "Sluit dit venster";
$f_lang['valider_messages'] = "Wilt u de berichten controleren voordat deze geplaatst worden in het gastenboek ?";
$f_lang['valide'] = "Controleer ?";
$f_lang['mess_valide'] = "Dit bericht is gecontroleerd";
$f_lang['mess_invalide'] = "Dit bericht wacht op controle";
$f_lang['info_mess_valide'] = "Controleer bericht ?";
$f_lang['ok_post_valid'] = "Dank u ! Uw bericht is toegevoegd, het zal geplaatst worden na controle van de beheerder.";
$f_lang['see_skin'] = "Bekijk het gastenboek met deze skin";
$f_lang['maxi_car'] = "Maximum karakters voor een bericht (0 = onbeperkt)";
$f_lang['il_reste'] = "U kunt nog";
$f_lang['caracteres'] = "karakters in uw bericht gebruiken";
$f_lang['sup_copyright'] = "Verwijder copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Naam van de beveiligings codes tabel";
$f_lang['add_code_securite'] = "Wilt u dat gebruikers een beveiligingscode moeten typen voor het bericht wordt geplaatst?";
$f_lang['t_chem_dossier_fonts'] = "Voledig pad naar de fonts directory";
$f_lang['t_color_txt_code'] = "Hexadecimale code van de tekst kleur";
$f_lang['t_color_background_code'] = "Hexadecimale code van de achtergrond kleur";
$f_lang['veuillez_taper_code'] = "Voer de code in";
$f_lang['a_quoi_ca_sert'] = "Waarom is dit?";
$f_lang['why_code'] = "Waarom een \"beveiligingscode\" ?";
$f_lang['txt_why_code'] = "Deze code zorgt ervoor dat zogenaamde \"bots\" geen spam berichten kunnen plaatsten in het gastenboek.<br><br><b>Reclame en spam links zijn verboden in dit gastenboek!</b>";
$f_lang['erreur_code_securite'] = "Voer de verificatie code in a.u.b.";
$f_lang['erreur_saisie_code_securite'] = "De door u ingevoerde verificatie code is onjuist, probeer het nogmaals.";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Automatisch antwoord";
$f_lang['admin_gestion_reponse_auto'] = "Is deze beheerder gemachtigd de automatische antwoorden te beheren?";
$f_lang['text_reponse_auto'] = "<b>Op deze pagina kunt u de teksten van de automatische antwoorden aanpassen</b> deze zullen worden verstuurd als gasten een bericht achter laten in het gastenboek.  Deze optie kunt u inschakelen onder het kopje instellingen.<br><br>Elke taal kan een eigen bericht hebben. De code [PSEUDO] zal worden vervangen door de naam van de gast die het bericht heeft geplaatst.";
$f_lang['name_table_rep_auto'] = "Naam van de MySQL tabel die de automatische antwoorden bevat";
$f_lang['gestion_reponses'] = "Beheer antwoorden";
$f_lang['msg_remerciement'] = "Bericht";
$f_lang['txt_remerciement'] = "Beste [PSEUDO],\n\nBedankt voor het achter laten van uw bericht in ons gastenboek!";
$f_lang['ok_save_msg_rem'] = "Dank u, het automatisch antwoord is opgeslagen.";
$f_lang['envoyer_remerciement'] = "Wilt u een bedankt bericht automatisch laten versturen na het plaatsen van een bericht?";
$f_lang['remerciement'] = "Bedankt";
$f_lang['titre_guestbook'] = "Gastenboek titel";
$f_lang['text_titre_guestbook'] = "<b>Hier kunt u de titel van uw gastenboek veranderen,</b> en een titel maken voor elke beschikbare taal.";
$f_lang['titre'] = "Titel";
$f_lang['parametrage'] = "Titel";
$f_lang['ok_save_titre'] = "Dank u, de titel is opgeslagen.";
$f_lang['ville_visiteur'] = "Plaats :";
$f_lang['pays_visiteur'] = "Land :";
$f_lang['flag'] = "Vlag";
$f_lang['ville_modif'] = "Plaats";
$f_lang['pays_modif'] = "Provincie";
$f_lang['action'] = "Actie";
$f_lang['repondre'] = "Antwoord";
$f_lang['votre_reponse'] = "Uw antwoord";
$f_lang['ok_reponse_mess'] = "Bedankt, uw antwoord is opgeslagen";
$f_lang['defaut_titre_rep'] = "Reactie van de webmaster";
$f_lang['annuler'] = "Annuleren";
$f_lang['num_appari'] = "Nummer";
$f_lang['nb_max_smileys'] = "Maximum aantal weer te geven smileys";
$f_lang['plus_smileys'] = "Laat meer zien";
$f_lang['liste_all_smilies'] = "Laat alles zien";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>Deze functie stelt u in staat om de laatst geplaatste berichten weer te geven op een andere pagina.</b>";
$f_lang['parametrage_modele'] = "Opmaakprofiel instellingen";
$f_lang['ok_save_boite'] = "Dank u, de instellingen zijn opgeslagen";
$f_lang['format_date_boite'] = "Datum formaat (identiek aan <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> PHP functie)";
$f_lang['nbre_maxi_pseudo_boite'] = "Maximum aantal karakters voor de naam";
$f_lang['nbre_maxi_message_boite'] = "Maximum aantal karakters voor het bericht";
$f_lang['modele_affichage_donnees'] = "Opmaak code:";
$f_lang['url_dossier_livre_boite'] = "Voledige URL naar de gastenboek map";
$f_lang['url_livre_boite'] = "Volledige URL naar de index pagina van het gastenboek";
$f_lang['generation_code'] = "Genereer javabox code";
$f_lang['nom_msg_afficher'] = "Aantal weer te geven berichten";
$f_lang['generer_code'] = "Genereer de code";
$f_lang['code_a_copier'] = "Deze HTML code kunt u plaatsen op de pagina van uw keuze";
$f_lang['erreur_boite_java'] = "Voor a.u.b een geldig aantal in";
$f_lang['erreur_par_boite'] = "Settings error, kan de code [BOUCLE] ... [/BOUCLE] niet in uw opmaakprofiel zetten.";
$f_lang['saut_ligne_msg_boite'] = "Behoud de lege regels in berichten";
$f_lang['message_a'] = "naar";
$f_lang['admin_gestion_bdd'] = "Is deze beheerder gemachtigd de database te beheren?";
$f_lang['bdd'] = "Database";
$f_lang['optimisation'] = "Optimalisatie";
$f_lang['sauvegarde'] = "Backup maken";
$f_lang['restauration'] = "Backup herstellen";
$f_lang['optimisation_txt'] = "<b>Tijdens het beheren van uw gastenboek blijven er kleine deeltjes data achter die ruimte in beslag nemen</b> Deze kunnen het gastenboek langzamer maken en onnodig ruimte in beslag nemen. Op deze pagina kunt u de database optimaliseren.";
$f_lang['liste_tables'] = "Tabellen van de database";
$f_lang['lancer_optimisation'] = "Start optimalisatie";
$f_lang['tables'] = "Tabellen";
$f_lang['pertes'] = "Onnodige data";
$f_lang['octets'] = "bytes";
$f_lang['ok_optimise'] = "Dank u, de tabellen zijn geoptimaliseert";
$f_lang['txt_sauvegarde'] = "<b>Als u de geplaatste berichten langer wilt bewaren is het verstandig regelmatig een backup te maken.</b> Een fout op de webserver kan fataal zijn voor de data. Een backup kan ook er handig zijn wanneer u het gastenboek wilt verplaasten naar een andere locatie.";
$f_lang['lancer_sauvegarde'] = "Start de backup";
$f_lang['lancer_restauration'] = "Herstellen";
$f_lang['txt_restauration'] = "<b>Als u eerder een backup heeft gemaakt kunt u deze hier herstellen</b> Selecteer het juiste bestand van uw hardeschijf door op bladeren te klikken.<br><br><b><u>LET OP</u></b>, als het een erg groot bestand is (enkele megabytes), kan dit voor problemen zorgen. (dit hangt af van de webserver instellingen set_time_limit() en  maximum size allowed).";
$f_lang['select_file'] = "Selecteer het backup bestand van uw hardeschijf of server (.ZIP of .SQL)";
$f_lang['confirm_restauration'] = "Weet u zeker dat u de backup wil terugzetten en daarmee alle data wilt overschrijven?";
$f_lang['select_file_restau'] = "Selecteer een bestand a.u.b.";
$f_lang['erreur_ext_restau'] = "Het geselecteerde bestand is niet een .ZIP of .SQL bestand, herstellen mislukt.";
$f_lang['conseil_zip'] = "(Pak het ZIP bestand uit op uw hardeschijf om het SQL bestand te verkrijgen)";
$f_lang['erreur_ext_zip'] = "De PHP_ZIP extensie is niet beschikbaar op uw webserver, het herstellen van een backup via een ZIP bestand is dan niet mogelijk. Selecteer a.u.b. een .SQL bestand van uw hardeschijf".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Fout bij het lezen van het ZIP bestand, het terugzetten van de backup is mislukt. U kunt een .SQL bestand proberen ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Het geselecteerde SQL bestand lijkt niet een @lex Guestbook backup bestand te zijn. Herstellen mislukt.";
$f_lang['restauration_terminee'] = "Bedankt! Herstellen is gelukt !";

							/* V5 */
$f_lang['name_table_ban'] = "Naam van het verbannen IP, nicknamen en E-mail table";
$f_lang['ok_validation'] = "Bedankt, de validatie is gedaan";
$f_lang['selectionner_tous_messages'] = "Vink alles aan/uit";
$f_lang['admin_send_mail'] = "Wilt u dat de administrators een e-mail ontvangen zodra er een nieuw bericht is gepost ?";

//ajout bannissement
$f_lang['bannissement'] = "Verbannen";
$f_lang['admin_gestion_bannissement'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;manage the banishment ?";
$f_lang['interdit_de_message'] = "Uw bericht is nie opgeslagen. Om de reden te bekijken (verboden woord, verplicht veld niet ingevuld...) moet Javascript in uw webbrowser geactiveerd zijn. U kunt uw bericht nog aanpassen.";
$f_lang['valider_mess'] = "Pas de bovenstaande validatie regels toe";
$f_lang['erreur_ip'] = "IP address is niet juist";
$f_lang['erreur_ip1'] = "Vul deel 1 van het ip in met een waarde tussen 0 and 255 of een *";
$f_lang['erreur_ip2'] = "Vul deel 2 van het ip in met een waarde tussen 0 and 255 of een *";
$f_lang['erreur_ip3'] = "Vul deel 3 van het ip in met een waarde tussen 0 and 255 of een *";
$f_lang['erreur_ip4'] = "Vul deel 4 van het ip in met een waarde tussen 0 and 255 of een *";
$f_lang['explication_bannir_mot'] = "Er zijn 2 opties om woorden in de berichten te bannen. Of ze worden gecensureerd (deze woorden worden vervangen door tekens of tekst die jij kiest), of het bericht word geweigerd.";
$f_lang['bannir_mot'] = "Wil je dat berichten die gecensureerde woorden bevatten (zie \"gecensureerde woorden\" in het menu) worden geweigerd ?<br/>Als je \"nee\" aanvinkt, worden deze woorden vervangen door de tekens of tekst die jij hebt gekozen.";

/* bannir des pseudos */
$f_lang['bannir_pseudo'] = "Bannen van (nick)namen";
$f_lang['admin_text_pseudo'] = "Als u een gebruiker wilt verbieden<b>om een bericht in het gastenboek te plaatsen</b>, dan kunt u hier zijn/haar naam/nicknaam zetten. U kunt ook een wildcard * gebruiken, die rekening houd met alle letters en cijfers.";
$f_lang['ajouter_pseudo'] = "Voeg een (nick)naam toe om te verbannen";
$f_lang['gestion_pseudo'] = "Nicknaam beheer";
$f_lang['sup_pseudo'] = "Verwijder geselecteerde nicknamen";
$f_lang['erreur_pseudo'] = "Vul de nicknaam in";
$f_lang['ok_aj_pseudo'] = "Bedankt, de nickname is nu verbannen";
$f_lang['verif_sup_pseudo'] = "Weet u zeker dat u de geselecteerde nicknamen wilt verwijderen ?";

/* bannir des emails */
$f_lang['bannir_emails'] = "Bannen van E-mail adressen";
$f_lang['admin_text_email'] = "Als u een gebruiker wilt verbieden <b>om een bericht in het gastenboek te plaatsen</b>, dan kunt u hier zijn/haar E-mail adres zetten. U kunt ook een wildcard * gebruiken, b.v. om hele domainnamen te bannen, zoals : *@spamdomain.com.";
$f_lang['ajouter_email'] = "Voeg een E-mail adres toe om te verbannen";
$f_lang['gestion_email'] = "E-mail adressen beheer";
$f_lang['sup_email'] = "Verwijder geselecteerde E-mail adressen";
$f_lang['erreur_email'] = "Vul het E-mail adres in";
$f_lang['ok_aj_email'] = "Bedankt, het E-mail adres is nu verbannen";
$f_lang['verif_sup_email'] = "Weet u zeker dat u de geselecteerde E-mail adressen wilt verwijderen ?";

$f_lang['no_pseudo'] = "ATTENTION\\nUw (nick)naam is geweigerd, het is u niet toegestaan een bericht te plaatsen in ons gastenboek.";
$f_lang['no_email'] = "ATTENTION\\nUw E-mail adres is geweigerd, het is u niet toegestaan een bericht te plaatsen in ons gastenboek.";
$f_lang['no_ville'] = "ATTENTION\\nDe ingevulde plaats is niet juist.";
$f_lang['no_mot'] = "ATTENTION\\nU heeft een gecensureerd woord gebruikt.\\nPas uw boodschap aan !";

// interdiction des URL
$f_lang['url_interdite'] = "ATTENTIE\\nU mag geen URL's gebruiken in de berichten";
$f_lang['url_interdites'] = "Wilt u berichten met URL's weigeren ?";
$f_lang['url_cliquables'] = "Wilt u berichten met URL's aan kunnen klikken (active) ?";

//remplacement du fichier /config/config.php par une table dans la BDD
$f_lang['name_table_config'] = "Naam van de config parameters tabel";

// decalage horaire
$f_lang['admin_decalage_horaire'] = "U kunt het tijdverschil tussen de server en uw pc laten aanpassen. Laat 0 als u geen aanpassing wilt.";
$f_lang['heures'] = "uren";
$f_lang['secondes'] = "seconden";
$f_lang['admin_erreur_decalage_horaire'] = "De waarde van het tijd verschil moet liggen tussen -12 en +12";

// interdit la suppression du dernier admin
$f_lang['admin_suppr_dernier_admin'] = "U mag de laatste administrator niet verwijderen";

// désactivation des smileys en un clic
$f_lang['admin_autoriser_smileys'] = "Wilt u smileys toestaan ?";

// pour empêcher que le temps de session de la partie admin ne soit trop court
$f_lang['admin_temps_session_min'] = "ATTENTIE\\nDe waarde van de sessie lengte is te kort !\\nU moet een waarde boven 300 seconden invullen";

// inclure le livre dans une page PHP
$f_lang['admin_inclure_livre'] = "Wilt u het gastenboek in een PHP file hebben ?";
$f_lang['admin_inclure_livre_code'] = "Hier is de PHP code die je in je PHP file moet zetten tussen de &lt;?php and ?&gt; tags.\n\nU moet ook de \$chem_absolu array veranderen in de  /index.php file van het gastenboek en de stylesheet in de aanroep bladzijde toevoegen (zie de FAQ voor toelichting)";
$f_lang['admin_fichier_inclusion'] = "Zet hier het absolute pad naar de file waarin je het gastenboek wilt opnemen (zoals : /folder1/folder2/file_where_the_include_takes_place.php). Klik op \"Save\" knop in om het opgegeven pad in de code te zien worden opgenomen";
$f_lang['admin_fichier_inclusion_erreur'] = "ATTENTIE\\nU heeft geen geldig pad opgegeven naar het include file\\nHet pad moet staan als bijv. /folder1/folder2/file_where_the_include_takes_place.php";

// gestion des champs
$f_lang['admin_champ_propose'] = "Niet mogelijk";
$f_lang['admin_champ_obligatoire'] = "Verplicht";
$f_lang['admin_champ_prive'] = "Niet zichtbaar";
$f_lang['admin_champ_pseudo'] = "Bezoekers kunnen hun (nick)naam opgeven";
$f_lang['admin_champ_ville'] = "Bezoekers kunnen hun plaats opgeven";
$f_lang['admin_donner_focus'] = "Wilt u bij het laden van de pagina de focus op de 'Nickname' hebben ?";
$f_lang['champ_obligatoire_vide'] = "Minstens 1 veld (aangeduid met een *) is leeg. Vul deze in.";
$f_lang['erreur_add_nom'] = "Naam";
$f_lang['erreur_add_email'] = "E-mail addres";
$f_lang['erreur_add_site'] = "Website URL";
$f_lang['erreur_add_ville'] = "Plaats";
$f_lang['erreur_add_pays'] = "Selecteer uw land";
$f_lang['erreur_add_note'] = "Wat vind je van onze site?";
$f_lang['erreur_add_message'] = "Uw bericht";
$f_lang['erreur_url'] = "Het website adres lijkt niet juist te zijn";

// code de sécurité : vérification de la présence de la librairie GD2
$f_lang['admin_gd_non_activee'] = "<span class=\"texte_alerte\">U kunt niet de security code optie gebruiken !<br/>\n Uw server heeft geen GD2 library en/of de opties die nodig zijn voor de security code</span>";

// lien vers l'admin et vers la page d'accueil
$f_lang['admin_lien_admin'] = "Wil je een link naar het administratie gedeelte onderaan het gastenboek ?";
$f_lang['admin_lien_accueil'] = "Wil je een link naar de homepage of een andere bladzij?";
$f_lang['admin_chemin_lien_accueil'] = "Als dit veld leeg blijft, zal de link naar de homepage leiden. Je kunt ook een bladzijde van eigen voorkeur opgeven, gebruik daartoe een absoluut pad (b.v. /folder1/page1.htm).";
$f_lang['admin_chemin_lien_accueil_erreur'] = "Het opgegeven pad is niet juist. Gebruik een absoluut pad (b.v. /mypage.php).";
$f_lang['texte_lien_accueil'] = "Terug naar de homepage";
$f_lang['texte_lien_admin'] = "Gastenboek administratie";

$f_lang['admin_retour_livre'] = "Bekijk het gastenboek";

// symboles champs privés/obligatoires sur le formulaire
// /!\ Attentie, maximaal 90 karakters
$f_lang['information_champ_prive'] = "Dit veld is alleen zichtbaar voor de webmaster.";
$f_lang['information_champ_obligatoire'] = "Dit is een verplicht veld.";

/* Bas de page partie admin */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

$f_lang['host_base'] = "Server (gewoonlijk : localhost)";

$f_lang['name_table_txt_lang'] = "Naam van de tabel die de aangepaste teksten bevat (b.v. gastenboek titel)";

$f_lang['erreur_host'] = "U bent de servernaam vergeten";

$f_lang['erreur_ecriture'] = "<b>ERROR</b>, onmogelijk om te schrijven in de directory \"config/\" folder.<br><br>Pas alstublieft de Unix rechten aan op de \"config\" map (chmod 777), probeert u het na deze verandering nogmaals : <a href=\"./setup.php\"><b>terug</b></a>.";

$f_lang['options_livre'] = "Gastenboek opties";

$f_lang['text1'] = "<b>Gecensureerde woorden zullen automatisch worden vervangen</b> in de berichten van de bezoekers. U kunt bijvoorbeeld alle \"scheld\" vervangen door \"**gecensureerd**\".<br/>Als je kiest om berichten te weigeren die woorden bevatten die zijn \"**gecensureerd**\", <u>moet je wel een vervangende tekst aangeven</u>. Hierdoor heb je de mogelijkheid om van mode te veranderen (woord vervanging or bericht weigering).";

/* Erreur si fichier install present */
$f_lang['erreur_fic_install_present'] = "For security reasons, to use your guestbook you have to delete file setup.php and folder update/";

/* Erreur si versions differentes */
$f_lang['erreur_necessite_maj'] = "Version of files is different from the version of the database. Please update.";
$f_lang['erreur_necessite_maj_lien'] = "Link to update.";
?>