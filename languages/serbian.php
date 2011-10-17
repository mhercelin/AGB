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
$CONTENT_LANGUAGE = "sr";

/* setup */
$f_lang['install_auto'] = "Automatska instalacija";
$f_lang['identi_base'] = "ID Baze";
$f_lang['type_base'] = "Tip baze";
$f_lang['user_base'] = "Korisnicko ime";
$f_lang['pass_base'] = "Lozinka";
$f_lang['nom_base'] = "Naziv baze";
$f_lang['nom_table'] = "Nazivi tablica";
$f_lang['name_table_sessions'] = "Naziv tablice sesija";
$f_lang['name_table_users'] = "Naziv tablice korisnika";
$f_lang['name_table_messages'] = "Naziv tablice poruka";
$f_lang['name_table_censure'] = "Naziv tablice cenzurisanih reci";
$f_lang['name_table_ip'] = "Naziv tablice zabranjenih IP-ova";
$f_lang['name_table_smileys'] = "Naziv tablice smiley-a";
$f_lang['extension_script'] = "Izvrsna skripta";
$f_lang['choose_extension'] = "Izaberite ekstenziju za skriptu<br>(savetujemo \"php\", inace cete morati preimenovati sve datoteke u zeljenu ekstenziju.)";
$f_lang['identi_acces_admin'] = "Vas ID za pristup administracijskoj ploci";
$f_lang['login_admin'] = "Korisnicko ime";
$f_lang['pass_admin'] = "Lozinka";
$f_lang['verif_pass_admin'] = "Ponovo upisite svoju lozinku";
$f_lang['email_admin_setup'] = "Vas Email";
$f_lang['installer'] = "Instalacija";
$f_lang['erreur_host'] = "Zaboravili ste upisati server baze";
$f_lang['erreur_user'] = "Zaboravili ste upisati ID za povezivanje s bazom";
$f_lang['erreur_nom_base'] = "Zaboravili ste upisati naziv baze";
$f_lang['erreur_log_admin'] = "Zaboravili ste upisati korisnicko ime administracijskog panela";
$f_lang['erreur_pass_admin'] = "Zaboravili ste upisati lozinku za pristup administracijskom panelu";
$f_lang['erreur_pass_differents'] = "PAZNJA, loznike su razlicite.";
$f_lang['erreur_first_connexion'] = "<b>GREŠKA, veza s bazom je nemoguca.</b><br><br>molim proverite ID veze : <a href=\"javascript:history.go(-1);\"><b>natrag</b></a>.";
$f_lang['erreur_install'] = "Instalacija neuspela";
$f_lang['ok_install'] = "Instalacija je uspesno izvrsena";
$f_lang['text_ok_install'] = "<b>Hvala ! Instalacija je uspesno izvrsena.</b><br><br>Zbog sigurnosnih razloga savetujemo da izbrisete datoteku (\"setup.php\"), ako ne izbrisete neko ce moci pokvariti Vase konfiguracijske datoteke.<br><br>Sada mozete administrirati Vasu knjigu gostiju klikom <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>ovde</b></a> or<br> pogledaj kako posetioci vide <a href=\"".$chem_absolu."\" target=\"_blank\"><b>here</b></a>.";

/* administration */
$f_lang['page protect'] = "Zasticena stranica";
$f_lang['login'] = "Korisnicko ime";
$f_lang['pass'] = "Lozinka";
$f_lang['value identif'] = "Identifikacija";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "Opcije";
$f_lang['script'] = "Skripta";
$f_lang['graphismes'] = "Izgled knjige gostiju";
$f_lang['messages'] = "Poruke";
$f_lang['gestion'] = "Menadzment";
$f_lang['censure_mots'] = "Cenzurisanje reci";
$f_lang['smileys'] = "Smiley-i";
$f_lang['utilisateurs'] = "Administratori";
$f_lang['ajouter'] = "Dodaj";
$f_lang['aide_guestbook'] = "Cesto postavljena pitanja";
$f_lang['a_propos_de'] = "O...";
$f_lang['donner_avis'] = "Dajte nam svoje misljenje";
$f_lang['deconnexion'] = "odjavi se";

 /* options */
 $f_lang['options_livre'] = "Opcije knjige gostiju";
$f_lang['options_generales'] = "Celokupne opcije";
$f_lang['langue'] = "Jezik";
$f_lang['send_mail'] = "Zelite li da administratori prime Email kada se postavi nova poruka ?";
$f_lang['avert_mail'] = "<br>(<b>informacija</b> : mail() funkcija Vaseg servera je iskljucena, tako da ako obelezite \"da\" necete primiti obavest mailom)";
$f_lang['oui'] = "da";
$f_lang['non'] = "ne";
$f_lang['options_modules'] = "Opcija polja knjige gostiju";
$f_lang['admin_champ_email'] = "Posetioce trazite za upis Email-a";
$f_lang['admin_champ_site'] = "Posetioce trazite za upis URL-a njihove stranice";
$f_lang['admin_champ_pays'] = "Posetioce trazite za upis grada i drzave";
$f_lang['admin_champ_note'] = "posetioci mogu oceniti Vase stranice";
$f_lang['admin_ok_aff_moteur'] = "Prikaz pretrage";
$f_lang['options_tech'] = "Tehnicke opcije";
$f_lang['url_recharger'] = "Stranica za ponovo ucitavanje knjige gostiju";
$f_lang['url_variables'] = "Razlicita uputstva poslata kao parametri (upisite # umesto $ u varijabli)";
$f_lang['temps_session'] = "Trajanje sesije u sekundama za administrativni panel";
$f_lang['skin_to_use'] = "Tema koja ce biti koristena";
$f_lang['enregistrer'] = "Sacuvaj";
$f_lang['nb_pages'] = "Broj poruka prikazanih na jednoj stranici knjige gostiju";
$f_lang['merci_options'] = "Hvala, informacije su sacuvane";
$f_lang['erreur_options'] = "GREŠKA\\nInformacije nisu sacuvane, nemoguce je zapisati u \\\"config.".$alex_livre_ext."\\\" datoteku, molimo promjenite opcije u procesoru teksta.";
$f_lang['temps_ip_post'] = "Broj minuta nakon sto se posetilac moze ponovo upisati";
$f_lang['minutes'] = "minute";
$f_lang['cut_mots'] = "Broj slova pre nego sto se dugacke reci prelome";
$f_lang['format_date'] = "Format datuma";

/* skins */
$f_lang['ok_ajouter'] = "Hvala, tema je uspesno kreirana";
$f_lang['erreur_ajouter'] = "GREŠKA\\nTemu nije moguce stvoriti, molimo stvorite ju rucno";
$f_lang['text1_2'] = "Sledece teme ce biti sacuvane u &quot;templates/skins/&quot; folder. Ovo olruzenje Vam dopusta da jednostavno izmenite teme, ali mozete i rucno izmeniti 
html datoteke.";
$f_lang['text2'] = "<b>Ako takoðe zelite promeniti teme administracijskog panela</b> molimo promenite rucno datoteke u &quot;templates/admin/&quot; folderu.";
$f_lang['text_aj_skin'] = "Dodaj temu";
$f_lang['ajouter'] = "Dodaj";
$f_lang['gestion_skins'] = "Upravljanje temama";
$f_lang['vous_editez'] = "Sada obraðujete temu :";
$f_lang['style'] = "stil";
$f_lang['ajouter_message'] = "dodaj deo poruke";
$f_lang['nbre_messages_page'] = "broj poruka / stranica deo";
$f_lang['pages_dispos'] = "lista dostupnih stranica / iduca stranica - prethodna stranica deo";
$f_lang['texte_corps_messages'] = "telo poruke";
$f_lang['espacement'] = "prostor izmeðu dve poruke";
$f_lang['text_assembly'] = "datoteka koja sakuplja prethodne delove";
$f_lang['ok_edit_skin'] = "Hvala, tema je sacuvana";
$f_lang['erreur_edit_skin'] = "GREŠKA\\nijedna datoteka teme nije mogla biti sacuvana. Molimo obradite ih rucno.";
$f_lang['ajouter'] = "Dodaj";
$f_lang['supprimer'] = "Izbrisi";
$f_lang['text_sup_skin'] = "Izbrisi temu";
$f_lang['ok_supprimer'] = "Hvala, tema je uspesno izbrisana.";
$f_lang['erreur_supprimer'] = "GREŠKA\\nijedna od datoteka teme nije izbrisana, trebali biste ih izbrisati rucno.";

/* page des mots censurés */
$f_lang['aj_mot'] = "Dodaj novu rec "; 
$f_lang['mot_interdit'] = "Zabranjena rec :";
$f_lang['remplacer_par'] = "zameni sa :";
$f_lang['gestion_censure'] = "Upravljanje zabranjenim recima";
$f_lang['mot'] = "rec";
$f_lang['remplace_by'] = "zameni sa";
$f_lang['liste_jour'] = "Svacuvaj listu";
$f_lang['sup_mots'] = "Ukloni oznacene reci";
$f_lang['erreur_aj_censure1'] = "Molimo upisite rec za cenzuru";
$f_lang['erreur_aj_censure2'] = "Molimo upisite rec za zamenu cenzuriranih reci";
$f_lang['ok_aj_mot'] = "Hvala, cenzurirana rec je dodana.";
$f_lang['verif_sup'] = "Zelite li trajno ukloniti oznacene reci ?";
$f_lang['merci_modif'] = "Hvala, promene su sacuvane";

/* bannir des ip */
$f_lang['bannir_ip'] = "Zabrani ip-ove";
$f_lang['text_ip1'] = "Svaki surfer na internetu ima specificna 4 broja ID (npr. 201.10.25.14). Ovaj ID je pridodeljen od servera i promeni se, teoretski, svaki put kad se on/ona poveze na internet.";
$f_lang['text_ip2'] = "Ako zelite <b>spreciti korisnika da se upise u knjigu gostiju</b>, mozete kopirati njegovu IP adresu ovde. Takoðe mozete zabraniti raspon IP adresa koristeci zvjezda simbol * (npr. 201.15.55.*, ili cak 158.*.*.*).";
$f_lang['ajouter_ip'] = "Dodaj novi zabranjeni IP";
$f_lang['gestion_ip'] = "Upravljanje IP-ovima";
$f_lang['sup_ip'] = "Ukloni oznacene zabranjene IP-ove";
$f_lang['ok_aj_ip'] = "Hvala, ovaj IP je sada zabranjen";
$f_lang['verif_sup_ip'] = "Zelite li stvarno izbrisati oznacene IP-ove ?";

/* smileys */
$f_lang['gestion_smileys'] = "Upravljanje smiley-ima";
$f_lang['text_smileys'] = "<b>Smiley-i dopustaju posetiocu da pokazuje osecaje</b> kada pise. Iz ovog okruzenja mozete jednostavno dodati ili izbrisati smiley tako da posetioci imaju najbolji izbor :o)<br><br>Smiley-i dostupni na ovoj stranici su sacuvani u \"images/smileys\" folderu.";
$f_lang['ajouter_smiley'] = "Dodaj smiley";
$f_lang['image_smiley'] = "Slika";
$f_lang['car_replace'] = "Odgovarajuci kod";
$f_lang['gestion_smileys'] = "Upravljanje smiley-ima";
$f_lang['sup_smileys'] = "Izbrisi oznacene smiley-e";
$f_lang['erreur_image'] = "Molimo oznacite smiley";
$f_lang['erreur_car'] = "Molimo odaberite odgovarajuci kod za oznaceni smiley";
$f_lang['ok_aj_smiley'] = "Hvala, smiley je uspesno dodan";
$f_lang['no_smiley'] = "Smiley mora biti GIF ili JPEG slika";
$f_lang['copy_impossible'] = "GREŠKA\\nNemoguce je kopirati smiley u \\\"images/smileys\\\" folder.";
$f_lang['car_replace_exist'] = "GREŠKA\\nOdgovarajuci kod vec postoji u bazi.";
$f_lang['modif_smileys'] = "Sacuvaj sve smiley-e";
$f_lang['verif_sup_smileys'] = "Zelite li stvarno izbrisati oznacene smiley-e ?";
$f_lang['merci_modif_smileys'] = "Hvala, smiley-i su izmenjeni.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Dodaj administratora knjige gostiju";
	$f_lang['add_admin_2'] = "Dodaj administratora";
	$f_lang['ajouter_admin'] = "Dodaj";
	$f_lang['name_ajouter_admin'] = "dodaj";
}
else{
	$f_lang['add_admin_texte'] = "Izmeni administratora knjige gostiju";
	$f_lang['add_admin_2'] = "Izmeni administratora";
	$f_lang['ajouter_admin'] = "Sacuvaj";
	$f_lang['name_ajouter_admin'] = "izmeni";
}

$f_lang['identif_connexion'] = "ID Veze";
$f_lang['passe_admin'] = "Lozinka";
$f_lang['email_admin'] = "Email (vazno ako admin mora primiti mail kada je poruka dodana)";
$f_lang['admin_receive_email'] = "Zelite li da administrator primi Email kada je poruka dodana ?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;je li mu dopusteno da menja opcije skripte ?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;da menja teme ?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;da upravlja porukama ?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;da upravlja cenzurisanim recima ?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;da upravlja smiley-ima ?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;da upravlja drugim administratorskim nalozima ?";
$f_lang['erreur_name'] = "Molimo upisite ID veze";
$f_lang['erreur_passe'] = "Molimo upisite lozinku";
$f_lang['erreur_email'] = "Molimo upisite Email";
$f_lang['ok_aj_admin'] = "Hvala, nalog je uspesno kreiran";
$f_lang['ok_modif_admin'] = "Hvala, nalog je sacuvan";
$f_lang['erreur_aj_admin'] = "GREŠKA\\nOvo korisnicko ime vec postoji";
$f_lang['revenir'] = "Natrag na prethodnu stranicu";

/* gestion des admins */
$f_lang['gest_admin'] = "Upravljanje administratorima";
$f_lang['sup_admin'] = "ukloni";
$f_lang['login_admin'] = "korisnicko ime";
$f_lang['email_admin'] = "Email";
$f_lang['modif_admin'] = "izmeni";
$f_lang['value_sup_admin'] = "Ukloni oznacene administratore";
$f_lang['verif_sup_admin'] = "Zelite li stvarno ukloniti sve oznacene administratore ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "STRANICA NIJE DOSTUPNA";
$f_lang['erreur_auth'] = "Pogreska u autorizaciji";
$f_lang['erreur_droits'] = "Nemate prava za pristup ovoj stranici.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Prosecna ocena od strane posetilaca stranica :";
$f_lang['title_guestbook'] = "Knjiga gostiju";
$f_lang['note_super'] = " : fantasticno !";
$f_lang['note_moyen'] = " : prosecno";
$f_lang['note_rate'] = " : veliki neuspeh";
$f_lang['nom_pseudo_visiteur'] = "Ime ili nadimak :";
$f_lang['email_visiteur'] = "Email adresa :";
$f_lang['site_web_visiteur'] = "URL adresa stranice :";
$f_lang['ville_pays_visiteur'] = "Grad / Drzava :";
$f_lang['note_visiteur'] = "Vasa ocena :";
$f_lang['message_visiteur'] = "Vasa poruka :";
$f_lang['ajouter_message_visiteur'] = "Dodaj poruku";
$f_lang['erreur_add_nom'] = "Molimo upisite ime";
$f_lang['erreur_add_message'] = "Molimo upisite poruku";
$f_lang['erreur_mail'] = "Vas Email je netacan";
$f_lang['messages'] = "Poruke";
$f_lang['messages_a'] = "do";
$f_lang['page'] = "Strana";
$f_lang['nbre_messages'] = "Broj poruka";
$f_lang['message_le'] = "na";
$f_lang['message_note'] = "Ocena";
$f_lang['send_mail_to'] = "Posalji Email";
$f_lang['go_home'] = "Poseti stranice";
$f_lang['precedente'] = "&lt;&lt; prethodna";
$f_lang['suivante'] = "iduca &gt;&gt;";
$f_lang['no_message'] = "Ne postoje poruke za prikaz.";
$f_lang['no_ip'] = "PAZNJA\\nVas IP je zabranjen, ne mozete se upisivati u ovu knjigu gostiju.";
$f_lang['ok_post'] = "Hvala ! Vasa poruka je uspesno poslana.";
$f_lang['time_erreur'] = "PAZNJA\\nVasa poruka nije poslana, vec ste se nedavno upisali u knjigu.";
$f_lang['text_select_search'] = "Prikazi samo poruke koje sadrze sledece reci";
$f_lang['text_ok_search'] = "U redu";

/* mail envoyé */
$f_lang['mail_object'] = "[info] - Nova poruka u Vasoj knjizi gostiju - ";
$f_lang['mail_message'] = "Bok,\n\nObavestavamo Vas da se neko upisao u Vasu knjigu gostiju ";

/* gestion des messages */
$f_lang['gestion_mess'] = "Upravljanje porukama";
$f_lang['selectionner_pages'] = "Oznaci";
$f_lang['messages_gest'] = "poruka";
$f_lang['page_gest'] = "stranica";
$f_lang['aller_en_page'] = "Idi na stranicu";
$f_lang['supprimer_gest'] = "izbrisi";
$f_lang['auteur_gest'] = "autor";
$f_lang['modifier_gest'] = "uredi";
$f_lang['supprimer_mess_selected'] = "Izbrisi oznacene stavke";
$f_lang['verif_sup_mess'] = "Zelite li stvarno brisati oznacene poruke ?";

/* modifier un message */
$f_lang['modif_mess'] = "Uredi poruku";
$f_lang['message_modif'] = "Poruka";
$f_lang['nom_modif'] = "Ime";
$f_lang['email_modif'] = "Email";
$f_lang['site_web_modif'] = "URL adresa stranice";
$f_lang['note_modif'] = "Ocena Vasih stranica";
$f_lang['ville_pays_modif'] = "Grad / Drzava";
$f_lang['date_modif'] = "Datum upisa";
$f_lang['ip_modif'] = "IP adresa";
$f_lang['ok_modif_mess'] = "Hvala, promene su sacuvane";

/* titre des pages */
$f_lang['title identification'] = "identifikacija";
$f_lang['title administration'] = "administracija";
$f_lang['title frame gauche'] = "levi okvir";
$f_lang['title options'] = "opcije";
$f_lang['title skins'] = "teme";
$f_lang['title censure'] = "reci za cenzuru";
$f_lang['title censure'] = "upravljanje zabranjenim IP-ovima";
$f_lang['title smileys'] = "upravljanje smiley-ima";
$f_lang['title add admin'] = "dodavanje administratora knjige";
$f_lang['title gest admin'] = "upravljanje administratorima knjige";
$f_lang['title erreur'] = "GREŠKA";
$f_lang['title gestion mess'] = "upravljanje porukama";
$f_lang['title modif mess'] = "ureðivanje poruke";
$f_lang['title setup'] = "instalacija";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Nemoguce povezivanje s bazom";
$f_lang['erreur_connexion'] = "Vase informacije o ID-u nisu ispravne";
$f_lang['manque login'] = "Molimo upisite korisnicko ime";
$f_lang['manque pass'] = "Molimo upisite lozinku";
$f_lang['end session'] = "Vasa sesija je istekla";

/* add version 3.11 */
$f_lang['addSignature'] = "Napisi poruku";
$f_lang['seeMessages'] = "Citanje napisanih poruka";
$f_lang['addMessageBlocAdd'] = "Dodaj poruku u knjigu gostiju";

/* add version 3.2 */
$f_lang['version'] = "Verzija";
$f_lang['new_version_dispo'] = "Nova verzija knjige gostiju je dostupna";
$f_lang['version_courrante'] = "Trenutna verzija skripte";
$f_lang['info_version'] = "Informacije o verziji koju imate";
$f_lang['version_txt_ok'] = "Verzija koju imate je ".$alex_livre_version.",<br>najnovija verzija, nije potrebno nadograðivanje.";
$f_lang['version_txt_update'] = "Verzija koju imate je ".$alex_livre_version.", <b>nova verzija je dostupna</b>";
$f_lang['version_down'] = "Download nove verzije";
$f_lang['help_update'] = "Pomoc o nadogradnji";
$f_lang['spam'] = "Nije moguce utvrditi koji pretrazivac koristite, cini se da je robot pokusao automatski poslati  poruku. Ako ovo nije tacno, molimo pokusajte s drugim pretrazivacem.";
$f_lang['avis_spammeurs'] = "Note to spammers";
$f_lang['txt_spammeurs'] = "<b>This Guestbook is protected against spamming</b>, Email adresses and URLs are encoded in the source code of the generated pages, therefore it's absolutely useless to post commercials links, they will not be seen by search engines (furthermore your message will be deleted anyway...)";
$f_lang['fermer'] = "Close this window";
$f_lang['valider_messages'] = "Zelite li pregledati poslane poruke pre no sto se objave u knjizi gostiju ?";
$f_lang['valide'] = "Verifikovana ?";
$f_lang['mess_valide'] = "Ova poruka je verifikovana";
$f_lang['mess_invalide'] = "Ova poruka ceka na verifikaciju";
$f_lang['info_mess_valide'] = "Verifikovana poruka ?";
$f_lang['ok_post_valid'] = "Hvala ! Vasa poruka je uspesno sacuvana, a bice objavljena nakon autorizacije administratora.";
$f_lang['see_skin'] = "Izgled knjige gostiju s ovom temom";
$f_lang['maxi_car'] = "Maksimalan broj znakova/slova dozvoljenih u poruci (0 = neograniceno)";
$f_lang['il_reste'] = "Mozete ukucati do";
$f_lang['caracteres'] = "jos znakova/slova u Vasoj poruci";
$f_lang['sup_copyright'] = "Izbrisi copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Naziv tablice sigurnosnih kodova";
$f_lang['add_code_securite'] = "Zelite li zahtevati od korisnika da ukucaju sigurnosni kod pri slanju poruke?";
$f_lang['t_chem_dossier_fonts'] = "Puni URL foldera fontova";
$f_lang['t_color_txt_code'] = "Hexadecimalni kod kodnog teksta";
$f_lang['t_color_background_code'] = "Hexadecimalna boja pozadine koda";
$f_lang['veuillez_taper_code'] = "Molimo prekucajte ovaj sigurnosni kod u desnu kucicu";
$f_lang['a_quoi_ca_sert'] = "Zasto ovo?";
$f_lang['why_code'] = "Zasto \"sigurnosni kod\" ?";
$f_lang['txt_why_code'] = "Ova procedura dozvoljava nam da proverimo je li poruka napisana od stvarne osobe ili automatizovanog software-a.<br><br><b>Komercijalne poruke i primedbe su zabranjene u ovoj knjizi gostiju!</b>";
$f_lang['erreur_code_securite'] = "Molimo unesite sigurnosni kod";
$f_lang['erreur_saisie_code_securite'] = "Sigurnosni kod koji ste uneli nije tacan, molimo pokusajte ponovo";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Automatski odgovor";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;upravljanje automatskim odgovorima?";
$f_lang['text_reponse_auto'] = "<b>Na ovoj stranici mozete pisati tekst automatskih odgovora</b> koji ce biti poslani posetiocima koji se upisu u knjigu gostiju.  Ova poruka ce biti poslana ako aktivirate ovu opciju u 
Opcijama.<br><br>Svaki jezik moze imati personalizovani odgovor i [PSEUDO] kod ce biti zamenjen imenom ili
nadimkom posetioca koji je poslao poruku.";
$f_lang['name_table_rep_auto'] = "Naziv MySQL tablice u koju ce se cuvati automatski odgovori";
$f_lang['gestion_reponses'] = "Upravljanje porukama";
$f_lang['msg_remerciement'] = "Hvala message";
$f_lang['txt_remerciement'] = "Cao [PSEUDO],\n\nHvala na upisivanju u nasu knjigu gostiju!";
$f_lang['ok_save_msg_rem'] = "Hvala, automatski Hvala odgovor je sacuvan.";
$f_lang['envoyer_remerciement'] = "Zelite li da Hvala poruka bude automatski poslana?";
$f_lang['remerciement'] = "Hvala";
$f_lang['titre_guestbook'] = "Naslov knjige gostiju";
$f_lang['text_titre_guestbook'] = "<b>Mozete promeniti naslov knjige gostiju</b> i upisati razlicit za svaki jezik.";
$f_lang['titre'] = "Naslov";
$f_lang['parametrage'] = "Parametri";
$f_lang['ok_save_titre'] = "Hvala, naslov je sacuvan.";
$f_lang['ville_visiteur'] = "Grad :";
$f_lang['pays_visiteur'] = "Drzava :";
$f_lang['flag'] = "Zastava";
$f_lang['ville_modif'] = "Grad";
$f_lang['pays_modif'] = "Drzava";
$f_lang['action'] = "Akcija";
$f_lang['repondre'] = "Odazivanje";
$f_lang['votre_reponse'] = "Vas odgovor";
$f_lang['ok_reponse_mess'] = "Hvala, Vas odgovor je sacuvan";
$f_lang['defaut_titre_rep'] = "Odgovor Administratora";
$f_lang['annuler'] = "Odustani";
$f_lang['num_appari'] = "Prikaz brojeva";
$f_lang['nb_max_smileys'] = "Maksimalan broj smiley-a";
$f_lang['plus_smileys'] = "Prikazi vise smiley-a";
$f_lang['liste_all_smilies'] = "Lista svih smiley-a";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>Ova funkcija Vam dopusta da prikazete zadnju napisanu poruku</b> na drugoj stranici po Vasem izboru.";
$f_lang['parametrage_modele'] = "Postavke parametara";
$f_lang['ok_save_boite'] = "Hvala, Vase postavke su sacuvane";
$f_lang['format_date_boite'] = "Format datuma (identican <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> PHP funkciji)";
$f_lang['nbre_maxi_pseudo_boite'] = "Maksimalan broj znakova prikazan u imenu ili nadimku";
$f_lang['nbre_maxi_message_boite'] = "Maksimalan broj znakova za poruku";
$f_lang['modele_affichage_donnees'] = "Predlog slanja podataka";
$f_lang['url_dossier_livre_boite'] = "Potpuni URL Vaseg guestbook foldera";
$f_lang['url_livre_boite'] = "Potpuni URL Vase index stranice knjige gostiju";
$f_lang['generation_code'] = "Javascript kreiranje koda";
$f_lang['nom_msg_afficher'] = "Broj poruka za prikaz";
$f_lang['generer_code'] = "Stvori Javascript kod za pozivanje";
$f_lang['code_a_copier'] = "HTML kod koji ce biti kopiran na stranice Vaseg izbora";
$f_lang['erreur_boite_java'] = "Molimo upisite ispravan broj za prikaz poruka";
$f_lang['erreur_par_boite'] = "Greska u podesavanjima, nemoguce izolovati [BOUCLE] ... [/BOUCLE] lanac u Vasem parametru.";
$f_lang['saut_ligne_msg_boite'] = "Zadrzi tabulatore u poruci";
$f_lang['message_a'] = "za";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;upravljanje bazom ?";
$f_lang['bdd'] = "Baza";
$f_lang['optimisation'] = "Optimizacija";
$f_lang['sauvegarde'] = "Cuvanje";
$f_lang['restauration'] = "Restauracija";
$f_lang['optimisation_txt'] = "<b>Pri upisivanju i brisanju, tablice Vase baze nagomilavaju nekoristene, prazne prostore.</b> Isti su losi za sveukupan rad Vase baze i s tim knjige gostiju, ova stranica vam omogucava optimizaciju tablica.";
$f_lang['liste_tables'] = "Lista tablica Vase baze";
$f_lang['lancer_optimisation'] = "Pokrecem optimizaciju";
$f_lang['tables'] = "TABLICE";
$f_lang['pertes'] = "GUBICI";
$f_lang['octets'] = "bytes";
$f_lang['ok_optimise'] = "Hvala, tablice su optimizovane";
$f_lang['txt_sauvegarde'] = "<b>Ako zelite zadrzati upisane poruke dugo vremena, povremeni backup 
se cvrsto preporucuje.</b> Prestanak rada tvrdog diska moze unistiti sve Vase podatke.  Backup moze biti koristan i ako zelite prebaciti vase poruke na drugi server.";
$f_lang['lancer_sauvegarde'] = "Pokretanje backup-a";
$f_lang['lancer_restauration'] = "Pokretanje restore-a";
$f_lang['txt_restauration'] = "<b>Ako ste izvrsili backup, mozete u potpunosti vratiti Vasu knjigu gostiju</b> Samo oznacite odgovarajucu datoteku na Vasem tvrdom disku.<br><br><b><u>PAZNJA</u></b>, ako je ova datoteka jako velika (vise megabyte-a), proces restauracije moze praviti probleme zbog podesenja servera (set_time_limit() i maksimalna 
dopustena velicina pri postavljanju).";
$f_lang['select_file'] = "Oznacite backup datoteku na tvrdom disku ili server (.ZIP ili .SQL)";
$f_lang['confirm_restauration'] = "Zelite li potvrditi da zelite pokrenuti restauraciju i time izbrisati sve tekuce podatke?";
$f_lang['select_file_restau'] = "Molimo oznacite datoteku na tvrdom disku";
$f_lang['erreur_ext_restau'] = "Oznacena ekstenzija datoteke nije .ZIP ni .SQL, restauracija nije izvrsena.";
$f_lang['conseil_zip'] = "(Dekompresujte ZIP datoteku na Vas tvrdi disk da biste dobili SQL datoteku)";
$f_lang['erreur_ext_zip'] = "PHP_ZIP ekstenzija nije dostupna na Vasem serveru, restauracija preko ZIP datoteke tako nije moguca. Molimo oznacite .SQL datoteku na Vasem tvrdom disku".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Greska pri citanju ZIP arhive, nemoguce izvrsiti restauraciju.  Mozete pokusati sa SQL datotekom ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Oznacena SQL datoteka se ne cini kao @lex Guestbook skriptna datoteka.  Nemoguce izvrsiti restauraciju.";
$f_lang['restauration_terminee'] = "Hvala ! Restauracija je uspesno izvrsena !";

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