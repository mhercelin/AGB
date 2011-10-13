<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2008    //
//         Hercelin Maxime (c) 2005 - 2008   //
//         http://www.alexguestbook.net/     //
//              all right reserved           //
//  Traduzione dalla 3.3 alla 5.0 inclusa:   //
//    TeddyBeer (A.K.A. De-MonHell)          //
//    damonhill82@hotmail.com                //
//    http://www.mauropanzeri.netsons.org/   //
//  Traduzione fino alla 3.3 esclusa::        //
//    Gianpaolo Vazza                        //
//    http://gianpaolo.membres.jexiste.org/  //
///////////////////////////////////////////////

/* Encodage utilisé dans le script */
$SCRIPT_ENCODAGE = "iso-8859-1";
$CONTENT_LANGUAGE = "it";

/* setup */
$f_lang['install_auto'] = "Installazione automatica";
$f_lang['identi_base'] = "Database ID";
$f_lang['type_base'] = "Tipo di Database";
$f_lang['user_base'] = "User";
$f_lang['pass_base'] = "Password";
$f_lang['nom_base'] = "Nome del Database";
$f_lang['nom_table'] = "Nome delle Tabelle";
$f_lang['name_table_sessions'] = "Nome della tabella delle sessioni";
$f_lang['name_table_users'] = "Nome della tabella degli utilizzatori";
$f_lang['name_table_messages'] = "Nome della tabella dei messaggi";
$f_lang['name_table_censure'] = "Nome della tabella delle parole censurate";
$f_lang['name_table_ip'] = "Nome della tabella degli IP vietati";
$f_lang['name_table_smileys'] = "Nome della tabella delle faccine";
$f_lang['extension_script'] = "Estensione dello script";
$f_lang['choose_extension'] = "Scegliere un'estensione per lo script<br>(si consiglia \"php\", altrimenti bisogna rinominare tutti i file con l'estensione scelta)";
$f_lang['identi_acces_admin'] = "ID di accesso per il pannello di amministrazione";
$f_lang['login_admin'] = "Login";
$f_lang['pass_admin'] = "Password";
$f_lang['verif_pass_admin'] = "Reinserisci la tua password";
$f_lang['email_admin_setup'] = "La tua Email";
$f_lang['installer'] = "Installare";
$f_lang['erreur_host'] = "Inserire l'host del server di database";
$f_lang['erreur_user'] = "Inserire l'identificativo di connessione al database";
$f_lang['erreur_nom_base'] = "Inserire il nome del database";
$f_lang['erreur_log_admin'] = "Inserire il login di accesso al pannello di amministrazione";
$f_lang['erreur_pass_admin'] = "Inserire la password di accesso al pannello di amministrazione";
$f_lang['erreur_pass_differents'] = "ATTENZIONE, password diverse.";
$f_lang['erreur_first_connexion'] = "<b>ERRORE, impossibile connettersi al database.</b><br><br>verificare l'ID di accesso: <a href=\"javascript:history.go(-1);\"><b>indietro</b></a>.";
$f_lang['erreur_install'] = "Installazione non riuscita";
$f_lang['ok_install'] = "Installazione riuscita";
$f_lang['text_ok_install'] = "<b>Grazie! Installazione riuscita con successo.</b><br><br>Per motivi di sicurezza ti invitiamo a cancellare il file di installazione appena usato (\"setup.php\"), nel caso contrario, altre persone potranno eseguire questa installazione automatica e corrompere i file di configurazione.<br><br>Da questo momento potrai amministrare il tuo guestbook cliccando <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>qui</b></a> oppure<br> visualizzarlo <a href=\"".$chem_absolu."\" target=\"_blank\"><b>qui</b></a>.";

/* administration */
$f_lang['page protect'] = "Pagina protetta";
$f_lang['login'] = "Login";
$f_lang['pass'] = "Pass";
$f_lang['value identif'] = "Identificazione";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "Opzioni";
$f_lang['script'] = "Script";
$f_lang['graphismes'] = "Skin del Guestbook";
$f_lang['messages'] = "Messaggi";
$f_lang['gestion'] = "Gestione";
$f_lang['censure_mots'] = "Vietare parole";
$f_lang['smileys'] = "Faccine";
$f_lang['utilisateurs'] = "Amministratori";
$f_lang['ajouter'] = "Aggiungere";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "A proposito di...";
$f_lang['donner_avis'] = "Dai la tua opinione";
$f_lang['deconnexion'] = "Disconnessione";

 /* options */
 $f_lang['options_livre'] = "Opzioni del Guestbook";
$f_lang['options_generales'] = "Opzioni generali";
$f_lang['langue'] = "Lingua";
$f_lang['send_mail'] = "Desideri che gli amministratori ricevano un'email quando un nuovo messaggio viene inserito?";
$f_lang['avert_mail'] = "<br>(<b>avviso</b>: la funzione mail() del tuo host è disabilitata, di conseguenza anche se clicchi su \"si\" non potrai essere avvertito con un'email)";
$f_lang['oui'] = "si";
$f_lang['non'] = "no";
$f_lang['options_modules'] = "Opzioni dei moduli del guestbook";
$f_lang['admin_champ_email'] = "I visitatori possono inserire il loro indirizzo email";
$f_lang['admin_champ_site'] = "I visitatori possono inserire la loro URL";
$f_lang['admin_champ_pays'] = "I visitatori possono inserire la loro città ed il loro paese";
$f_lang['admin_champ_note'] = "I visitatori possono inserire un voto di valutazione al tuo sito";
$f_lang['admin_ok_aff_moteur'] = "Mostra il motore di ricerca";
$f_lang['options_tech'] = "Opzioni tecniche";
$f_lang['url_recharger'] = "Pagina a cui ritornare dopo l'invio messaggio";
$f_lang['url_variables'] = "Variabili inviate come parametri (digitare # per rappresentare il $ in una variabile)";
$f_lang['temps_session'] = "Durata in secondi per la sessione del pannello di amministrazione";
$f_lang['skin_to_use'] = "Skin utilizzato";
$f_lang['enregistrer'] = "Salva";
$f_lang['nb_pages'] = "Numero di messaggi su ogni pagina del Guestbook";
$f_lang['merci_options'] = "Grazie, le informazioni sono state aggiornate";
$f_lang['erreur_options'] = "ERRORE\\nLe informazioni non sono state salvate, impossibile scrivere nel file \\\"config.".$alex_livre_ext."\\\" , si prega di editare manualmente il file per modificare le opzioni del Guestbook.";
$f_lang['temps_ip_post'] = "Numero di minuti prima che un visitatore possa reinserire un messaggio";
$f_lang['minutes'] = "minuti";
$f_lang['cut_mots'] = "Numero di caratteri prima che una parola troppo lunga sia tagliata in più parti";
$f_lang['format_date'] = "Formato data";

/* skins */
$f_lang['ok_ajouter'] = "Grazie, skin creato con successo";
$f_lang['erreur_ajouter'] = "ERRORE\\nLo skin non èstato creato, si prega di farlo manualmente";
$f_lang['text1_2'] = "I seguenti skin sono memorizzati nella cartella &quot;templates/skins/&quot;. Questa interfaccia permette di modificarli facilmente ma puoi anche editare manualmente i rispettivi file html.";
$f_lang['text2'] = "<b>Se desideri modificare i template del pannello di amministrazione</b> si prega di editare manualmente i file presenti nella cartella &quot;templates/admin/&quot; .";
$f_lang['text_aj_skin'] = "Aggiungi uno skin";
$f_lang['ajouter'] = "Aggiungi";
$f_lang['gestion_skins'] = "Gestione degli skin";
$f_lang['vous_editez'] = "Modifica adesso uno skin:";
$f_lang['style'] = "foglio di stile";
$f_lang['ajouter_message'] = "sezione - aggiungi un messaggio -";
$f_lang['nbre_messages_page'] = "sezione - numero di messaggi / pagine -";
$f_lang['pages_dispos'] = "sezione - lista delle pagine disponibili / pagina successiva-precedente -";
$f_lang['texte_corps_messages'] = "corpo dei messaggi";
$f_lang['espacement'] = "spazio tra due messaggi";
$f_lang['text_assembly'] = "file che raccoglie le diverse sezioni precedenti";
$f_lang['ok_edit_skin'] = "Grazie, lo skin è stato aggiornato";
$f_lang['erreur_edit_skin'] = "ERRORE\\nAggiornamento non riuscito di uno o più file dello skin. Si prega di modificarlo/i manualmente.";
$f_lang['ajouter'] = "Aggiungi";
$f_lang['supprimer'] = "Cancella";
$f_lang['text_sup_skin'] = "Cancella uno skin";
$f_lang['ok_supprimer'] = "Grazie, skin cancellato con successo.";
$f_lang['erreur_supprimer'] = "ERRORE\\nCancellazione non riuscita di uno o più file dello skin. Si prega di cancellarlo/i manualmente.";

/* page des mots censurés */
$f_lang['aj_mot'] = "Aggiungi una nuova parola "; 
$f_lang['mot_interdit'] = "Parola vietata :";
$f_lang['remplacer_par'] = "Sostituire con :";
$f_lang['gestion_censure'] = "Gestione delle parole vietate";
$f_lang['mot'] = "parola";
$f_lang['remplace_by'] = "sostituire con";
$f_lang['liste_jour'] = "Aggiorna la lista";
$f_lang['sup_mots'] = "Rimuovi le parole selezionate";
$f_lang['erreur_aj_censure1'] = "Inserire una parola da censurare";
$f_lang['erreur_aj_censure2'] = "Inserire una parola che sostituirà quella censurata";
$f_lang['ok_aj_mot'] = "Grazie, la parola da censurare è stata aggiunta.";
$f_lang['verif_sup'] = "Vuoi eliminare definitivamente le parole selezionate?";
$f_lang['merci_modif'] = "Grazie, le modifiche sono state salvate";

/* bannir des ip */
$f_lang['bannir_ip'] = "Bandimento indirizzi IP";
$f_lang['text_ip1'] = "Ogni internauta possiede uno specifico indirizzo a 4 cifre (201.10.25.14 per esempio). Questo identificativo viene attribuito dal fornitore di accesso e cambia, in teoria, ad ogni connessione.";
$f_lang['text_ip2'] = "Se desideri che un utilizzatore <b>non possa inserire messaggi nel tuo Guestbook</b>, puoi copiare qui il suo indirizzo IP. Puoi anche vietare un intero intervallo di IP usando il carattere * (per esempio 201.15.55.*, o anche 158.*.*.*).";
$f_lang['ajouter_ip'] = "Aggiungi un nuovo IP da vietare";
$f_lang['gestion_ip'] = "Gestione degli IP";
$f_lang['sup_ip'] = "Rimuovi gli IP selezionati";
$f_lang['ok_aj_ip'] = "Grazie, l'IP è da adesso vietato";
$f_lang['verif_sup_ip'] = "Eliminare tutti gli IP selezionati?";

/* smileys */
$f_lang['gestion_smileys'] = "Gestione delle faccine";
$f_lang['text_smileys'] = "<b>le faccine permettono di tradurre l'umore di una persona</b> nel momento in cui scrive un messaggio. Con questa interfaccia potrai facilmente aggiungere o rimuovere faccine per offrire ai tuoi visitatori la più grande scelta possibile :o)<br><br>Le faccine disponibili in questa pagina sono memorizzati nella cartella \"images/smileys\" .";
$f_lang['ajouter_smiley'] = "Aggiungi una faccina";
$f_lang['image_smiley'] = "Immagine";
$f_lang['car_replace'] = "Carattere sostitutivo";
$f_lang['gestion_smileys'] = "Gestione delle faccine";
$f_lang['sup_smileys'] = "Cancella la faccina selezionata";
$f_lang['erreur_image'] = "Seleziona una faccina";
$f_lang['erreur_car'] = "Scegliere un carattere sostitutivo per la faccina selezionata";
$f_lang['ok_aj_smiley'] = "Grazie, faccina aggiunta con successo";
$f_lang['no_smiley'] = "La faccina deve essere un'immagine GIF o JPEG ";
$f_lang['copy_impossible'] = "ERRORE\\nImpossibile copiare la faccina nella cartella \\\"images/smileys\\\" .";
$f_lang['car_replace_exist'] = "ERRORE\\nCarattere sostitutivo già esistente nel database.";
$f_lang['modif_smileys'] = "Aggiorna tutte le faccine";
$f_lang['verif_sup_smileys'] = "Cancellare tutti le faccine selezionate?";
$f_lang['merci_modif_smileys'] = "Grazie, faccine modificate con successo.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Aggiungere un amministratore del Guestbook";
	$f_lang['add_admin_2'] = "Aggiungere un amministratore";
	$f_lang['ajouter_admin'] = "Aggiungere";
	$f_lang['name_ajouter_admin'] = "aggiungere";
}
else{
	$f_lang['add_admin_texte'] = "Modificare un amministratore del Guestbook";
	$f_lang['add_admin_2'] = "Modificare un amministratore";
	$f_lang['ajouter_admin'] = "Salvare";
	$f_lang['name_ajouter_admin'] = "modificare";
}

$f_lang['identif_connexion'] = "ID di connessione";
$f_lang['passe_admin'] = "Password";
$f_lang['email_admin'] = "Email (importante se l'amministratore deve essere avvertito quando un nuovo messaggio è inserito)";
$f_lang['admin_receive_email'] = "L'amministratore deve essere avvertito via email quando viene inserito un nuovo messaggio?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;può modificare le opzioni dello script?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;modificare gli skin?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gestire i messaggi?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gestire le parole censurate?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gestire le faccine?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gestire gli account degli altri amministratori?";
$f_lang['erreur_name'] = "Inserire ID di connessione";
$f_lang['erreur_passe'] = "Inserire una password";
$f_lang['erreur_email'] = "Inserire un'email";
$f_lang['ok_aj_admin'] = "Grazie, account creato con successo";
$f_lang['ok_modif_admin'] = "Grazie, account aggiornato";
$f_lang['erreur_aj_admin'] = "ERRORE\\nLogin già esistente";
$f_lang['revenir'] = "Tornare alla pagina precedente";

/* gestion des admins */
$f_lang['gest_admin'] = "Gestione degli amministratori";
$f_lang['sup_admin'] = "rimuovere";

$f_lang['login_admin'] = "login";
$f_lang['email_admin'] = "Email";
$f_lang['modif_admin'] = "modificare";
$f_lang['value_sup_admin'] = "Rimuovere tutti gli amministratori selezionati";
$f_lang['verif_sup_admin'] = "Si è sicuri di voler rimuovere tutti gli amministratori selezionati?";

/* page d'erreur */
$f_lang['erreur_texte'] = "PAGINA NON DISPONIBILE";
$f_lang['erreur_auth'] = "Autenticazione fallita";
$f_lang['erreur_droits'] = "Non hai i diritti richiesti per visualizzare questa pagina.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Voto medio attribuito dai visitatori a questo sito:";
$f_lang['title_guestbook'] = "Il mio Guestbook";
$f_lang['note_super'] = " : Fantastico !";
$f_lang['note_moyen'] = " : Medio";
$f_lang['note_rate'] = " : Un grande fallimento";
$f_lang['nom_pseudo_visiteur'] = "Nome o Nickname :";
$f_lang['email_visiteur'] = "Email :";
$f_lang['site_web_visiteur'] = "URL :";
$f_lang['ville_pays_visiteur'] = "Città / Paese :";
$f_lang['note_visiteur'] = "Il vostro voto a questo sito :";
$f_lang['message_visiteur'] = "Messaggio :";
$f_lang['ajouter_message_visiteur'] = "INVIA";
$f_lang['vider_message_visiteur'] = "ANNULLA";
$f_lang['erreur_add_nom'] = "Si prega di indicare il vostro nome";
$f_lang['erreur_add_message'] = "Si prega di scrivere un messaggio";
$f_lang['erreur_mail'] = "Email non corretta";
$f_lang['messages'] = "Messaggi";
$f_lang['messages_a'] = "--&gt;";
$f_lang['page'] = "Pagina";
$f_lang['nbre_messages'] = "Numero di messaggi";
$f_lang['message_le'] = "il";
$f_lang['message_note'] = "Voto";
$f_lang['send_mail_to'] = "Inviare Email a";
$f_lang['go_home'] = "Visitare il sito";
$f_lang['precedente'] = "&lt;&lt; precedente";
$f_lang['suivante'] = "successiva &gt;&gt;";
$f_lang['no_message'] = "Nessun messaggio da visualizzare.";
$f_lang['no_ip'] = "ATTENZIONE\\nIl vostro IP è stato vietato, non siete autorizzati a inserire messaggi in questo Guestbook.";
$f_lang['ok_post'] = "Grazie! Messaggio inserito con successo.";
$f_lang['time_erreur'] = "ATTENZIONE\\nIl messaggio non può essere inserito, ne avete già pubblicato uno troppo di recente.";
$f_lang['text_select_search'] = "Visualizzare solo i messaggi contenenti le seguenti parole";
$f_lang['text_ok_search'] = "Ok";

/* mail envoyè */
$f_lang['mail_object'] = "[info] - C'è un nuovo messaggio nel tuo Guestbook - ";
$f_lang['mail_message'] = "E' stato inserito un nuovo messaggio nel tuo Guestbook ";

/* gestion des messages */
$f_lang['gestion_mess'] = "Gestione dei messaggi";
$f_lang['selectionner_pages'] = "Selezionare";
$f_lang['messages_gest'] = "messaggio";
$f_lang['page_gest'] = "pagina";
$f_lang['aller_en_page'] = "Andare alla pagina";
$f_lang['supprimer_gest'] = "cancellare";
$f_lang['auteur_gest'] = "autore";
$f_lang['modifier_gest'] = "modificare";
$f_lang['supprimer_mess_selected'] = "Eliminare i messaggi selezionati";
$f_lang['verif_sup_mess'] = "Si è sicuri di voler cancellare i messaggi selezionati?";

/* modifier un message */
$f_lang['modif_mess'] = "Modificare un messaggio";
$f_lang['message_modif'] = "Messaggio";
$f_lang['nom_modif'] = "Nome";
$f_lang['email_modif'] = "Email";
$f_lang['site_web_modif'] = "Sito Web";
$f_lang['note_modif'] = "Voto attribuito al tuo sito";
$f_lang['ville_pays_modif'] = "Città / Paese";
$f_lang['date_modif'] = "Data di inserimento";
$f_lang['ip_modif'] = "Indirizzo IP";
$f_lang['ok_modif_mess'] = "Grazie, le informazioni sono state modificate";

/* titre des pages */
$f_lang['title identification'] = "identificazione";
$f_lang['title administration'] = "amministrazione";
$f_lang['title frame gauche'] = "frame sinistro";
$f_lang['title options'] = "opzioni";
$f_lang['title skins'] = "skin";
$f_lang['title censure'] = "parole da censurare";
$f_lang['title censure'] = "gestione degli IP da vietare";
$f_lang['title smileys'] = "gestione delle faccine";
$f_lang['title add admin'] = "aggiungere un amministratore del Guestbook";
$f_lang['title gest admin'] = "gestione degli amministratori del Guestbook";
$f_lang['title erreur'] = "errore";
$f_lang['title gestion mess'] = "gestione dei messaggi";
$f_lang['title modif mess'] = "modificare un messaggio";
$f_lang['title setup'] = "installazione";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Impossibile connettersi al database";
$f_lang['erreur_connexion'] = "ID non corrette";
$f_lang['manque login'] = "Si prega di inserire il login";
$f_lang['manque pass'] = "Si prega di inserire la password";
$f_lang['end session'] = "Sessione terminata";

/* add version 3.11 */
$f_lang['addSignature'] = "Scrivere un messaggio";
$f_lang['seeMessages'] = "Vedere i messaggi";
$f_lang['addMessageBlocAdd'] = "Aggiungere un messaggio al Guestbook";

/* add version 3.2 */
$f_lang['version'] = "Versione";
$f_lang['new_version_dispo'] = "E' disponibile una versione aggiornata del guestbook";
$f_lang['version_courrante'] = "Versione corrente del guesbook";
$f_lang['info_version'] = "Informazioni sulla versione posseduta";
$f_lang['version_txt_ok'] = "La tua versione è la ".$alex_livre_version.",<br>Questa versione è la più aggiornata. Non è necessario aggiornare.";
$f_lang['version_txt_update'] = "La tua versione è ".$alex_livre_version.", <b>è disponibile una nuova versione</b>";
$f_lang['version_down'] = "Scarica la versione aggiornata";
$f_lang['help_update'] = "Aiuto per l'aggiornamento";
$f_lang['spam'] = "Lo USER AGENTE del tuo browser non può essere determinato. Sembra essere uno spammer che ha postato automaticamente un messaggio. Se questo non fosse vero, per piacere provare con un altro browser.";
$f_lang['avis_spammeurs'] = "X gli spammer";
$f_lang['txt_spammeurs'] = "<b>Questo guestbook è protetto contro lo spamming.</b>, Gli indirizzi email e gli URL sono codificati nel codice sorgente delle pagine, quindi è assolutamente inutile immettere link commerciali, perchè essi non verrebbero visti dai motori di ricerca (e probabilmente il vostro messaggio verrà cancellato, comunque!)";
$f_lang['fermer'] = "Chiudi questa finestra";
$f_lang['valider_messages'] = "Vuoi convalidare i messaggi inviati prima che siano disponibili pubblicamente nel guestbook?";
$f_lang['valide'] = "Validato ?";
$f_lang['mess_valide'] = "Questo messaggio è stato convalidato";
$f_lang['mess_invalide'] = "Questo messaggio attende la convalida";
$f_lang['info_mess_valide'] = "Messaggio convalidato ?";
$f_lang['ok_post_valid'] = "Grazie! Il tuo messaggio è stato salvato, e verrà pubblicato dopo l'approvazione del webmaster.";
$f_lang['see_skin'] = "Anteprima del guestbook con questa skin";
$f_lang['maxi_car'] = "Massimo numero di caratteri in un messaggio. (0 = infinito)";
$f_lang['il_reste'] = "Puoi digitare fino a";
$f_lang['caracteres'] = "caratteri nel tuo messaggio";
$f_lang['sup_copyright'] = "Cancella copyright";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Nome della tabella dei codici di sicurezza";
$f_lang['add_code_securite'] = "Vuoi che gli utenti digitino il codice di sicurezza (CAPTCHA) prima di postare un messaggio?";
$f_lang['t_chem_dossier_fonts'] = "URL completo alla cartella dei font";
$f_lang['t_color_txt_code'] = "Codice esadecimale del codice";
$f_lang['t_color_background_code'] = "Codice esadecimale del colore di sfondo";
$f_lang['veuillez_taper_code'] = "Per piacere copia questo codice di sicurezza nel campo a destra";
$f_lang['a_quoi_ca_sert'] = "Perchè questo?";
$f_lang['why_code'] = "Perchè un \"codice di sicurezza\" ?";
$f_lang['txt_why_code'] = "Questa procedura ci consente di verificare che il messaggio è stato inviato da una persona reale e non da un programma automatizzato.<br><br><b>Pubblicità e spam sono vietati su questo guestbook!</b>";
$f_lang['erreur_code_securite'] = "Immetti il codice di sicurezza";
$f_lang['erreur_saisie_code_securite'] = "Il codice da te digitato non è corretto. Controllare e ripetere la digitazione";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Risposta automatica";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gestire la risposta automatica?";
$f_lang['text_reponse_auto'] = "<b>In questa pagina puoi scrivere il testo della risposta automatica </b> che verrà inviata agli utenti che hanno inviato un messaggio.  Questo messaggio verrà mandato se attivi la funzione di risposta automatica nelle opzioni del guestbook.<br><br>Ogni lingua può avere il suo messaggio di risposta personalizzato ed ogni occorrenza della parola [PSEUDO] verrà sostituita con il nome dell'utente che ha inviato il messaggio.";
$f_lang['name_table_rep_auto'] = "Nome della tabella MySQL che conterrà i testi delle risposte automatiche.";
$f_lang['gestion_reponses'] = "Gestione messaggi";
$f_lang['msg_remerciement'] = "Messaggio di ringraziamento";
$f_lang['txt_remerciement'] = "Ciao [PSEUDO],\n\nGrazie per avere lasciato la tua firma sul nostro guestbook!";
$f_lang['ok_save_msg_rem'] = "La risposta automatica è stata salvata.";
$f_lang['envoyer_remerciement'] = "Vuoi che venga inviato un messaggio di risposta automatico?";
$f_lang['remerciement'] = "Grazie";
$f_lang['titre_guestbook'] = "Titolo Guestbook";
$f_lang['text_titre_guestbook'] = "<b>Puoi cambiare il nome del guestbook</b> e scriverne uno diverso per ogni lingua disponibile.";
$f_lang['titre'] = "Titolo";
$f_lang['parametrage'] = "Impostazioni";
$f_lang['ok_save_titre'] = "Il titolo è stato salvato.";
$f_lang['ville_visiteur'] = "Città :";
$f_lang['pays_visiteur'] = "Stato :";
$f_lang['flag'] = "Bandiera";
$f_lang['ville_modif'] = "Città";
$f_lang['pays_modif'] = "Bandiera";
$f_lang['action'] = "Azioni";
$f_lang['repondre'] = "Risposta";
$f_lang['votre_reponse'] = "La tua risposta";
$f_lang['ok_reponse_mess'] = "La tua risposta è stata salvata";
$f_lang['defaut_titre_rep'] = "Risposta dal webmaster";
$f_lang['annuler'] = "Annulla";
$f_lang['num_appari'] = "Mostra numero";
$f_lang['nb_max_smileys'] = "Massimo numero di faccine nel messaggio";
$f_lang['plus_smileys'] = "Mostra più faccine";
$f_lang['liste_all_smilies'] = "Lista di tutti le faccine";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>Questa funzione di consente di mostrare gli ultimi messaggi inviati nel guestbook</b>In un'altra pagina a tua scelta.";
$f_lang['parametrage_modele'] = "Impostazioni template";
$f_lang['ok_save_boite'] = "Le tue impostazioni sono state salvate";
$f_lang['format_date_boite'] = "Formato data (identico alla funzione <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> PHP )";
$f_lang['nbre_maxi_pseudo_boite'] = "Massimo numero di caratteri mostrati per il nickname";
$f_lang['nbre_maxi_message_boite'] = "Massimo numero di caratteri mostrati per il messaggio";
$f_lang['modele_affichage_donnees'] = "Template invio dati";
$f_lang['url_dossier_livre_boite'] = "URL completo alla cartella del guestbook";
$f_lang['url_livre_boite'] = "URL completo alla pagina iniziale del tuo guestbook";
$f_lang['generation_code'] = "Creazione codice Javascript";
$f_lang['nom_msg_afficher'] = "Numero di messaggi da mostrare";
$f_lang['generer_code'] = "Crea la chiamata Javascript corrispondente";
$f_lang['code_a_copier'] = "Codice HTML da copiare nelle pagine di tuo gradimento";
$f_lang['erreur_boite_java'] = "Immetti un numero valido di messaggi da mostrare";
$f_lang['erreur_par_boite'] = "Errore nelle impostazioni, impossibile isolare la sequenza [BOUCLE] ... [/BOUCLE] nel tuo template.";
$f_lang['saut_ligne_msg_boite'] = "Keep the line jumps in the messages";
$f_lang['message_a'] = "--&gt;";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gestione del database?";
$f_lang['bdd'] = "Database";
$f_lang['optimisation'] = "Ottimizzazione";
$f_lang['sauvegarde'] = "Salvataggio";
$f_lang['restauration'] = "Ripristino";
$f_lang['optimisation_txt'] = "<b>Mentre inserisci e cancelli le tabelle del database accumulano spazio vuoto.</b> Questo non va bene per le prestazioni del database e quindi del sito. Questa pagina consente di risolvere questi problemi ottimizzando le tabelle.";
$f_lang['liste_tables'] = "Lista delle tabelle del database";
$f_lang['lancer_optimisation'] = "Ottimizzazione in corso";
$f_lang['tables'] = "TABELLE";
$f_lang['pertes'] = "SPRECATI";
$f_lang['octets'] = "bytes";
$f_lang['ok_optimise'] = "Le tabelle sono state ottimizzate";
$f_lang['txt_sauvegarde'] = "<b>Se vuoi tenere i messaggi inviati in un lungo arco di tempo, un regolare e periodica backup è caldamente raccomandato.</b> Una rottura del disco fisso può farti perdere tutti i dati! Un backup può sempre essere utile se vuoi trasferire i tuoi messaggi su un altro server.";
$f_lang['lancer_sauvegarde'] = "Avvia il backup";
$f_lang['lancer_restauration'] = "Avvia il ripristino";
$f_lang['txt_restauration'] = "<b>Se hai eseguito un backup, puoi ripristinare completamente il tuo guestbook.</b> Seleziona il file corrispondente al backup sul tuo disco.<br><br><b><u>ATTENZIONE</u></b>, se questo file è molto grande (molti megabytes), il processo di ripristino può causare problemi se il server che ospita il guestbook ha certe impostazioni (vedi set_time_limit() e la massima grandezza dei file ammessi in upload).";
$f_lang['select_file'] = "Seleziona un file di backup sul tuo disco o sul server (.ZIP o .SQL)";
$f_lang['confirm_restauration'] = "Confermi che vuoi avviare il ripristino e quindi cancellare tutti i dati attuali?";
$f_lang['select_file_restau'] = "Seleziona un file suo tuo disco";
$f_lang['erreur_ext_restau'] = "Il file selezionato non è ne ZIP ne SQL. Il ripristino non può essere esguito.";
$f_lang['conseil_zip'] = "(Decomprimi il file ZIP suo tuo hard disk per ottenere il file SQL)";
$f_lang['erreur_ext_zip'] = "L'estensione PHP_ZIP non è disponibile su questo server, quindi il ripristino tramite file ZIP non è disponibile. Selezionare un file .SQL sul tuo disco ".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Errore leggendo il file ZIP, impossibile eseguire il ripristino.  Puoi provare con un file .SQL ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Il file SQL selezionato non sembra essere un file adatto per questo guestbook. Impossibile eseguire il ripristino.";
$f_lang['restauration_terminee'] = "Il ripristino può essere eseguito!";

							/* V5 */
$f_lang['name_table_ban'] = "Tabella degli IP, nicknames e Emails banditi";
$f_lang['ok_validation'] = "Grazie la convalida è stata eseguita";
$f_lang['selectionner_tous_messages'] = "Seleziona/deseleziona tutto";
$f_lang['admin_send_mail'] = "Vuoi che l'amministratore riceva un email quando un nuovo messaggio viene pubblicato?";

//ajout bannissement
$f_lang['bannissement'] = "Bandire";
$f_lang['admin_gestion_bannissement'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;gestione dei banditi?";
$f_lang['interdit_de_message'] = "Il tuo messaggio non è stato salvato. Possibili ragioni: (parole proibite, campi obbligatori non immessi) Javascript deve essere attivo nel tuo browser. Forse vuoi modificare il tuo messaggio.";
$f_lang['valider_mess'] = "Applica le scelte di convalida";
$f_lang['erreur_ip'] = "Indirizzo IP non valido";
$f_lang['erreur_ip1'] = "Immetti la parte 1 dell'indirizzo IP compresa tra 0 e 255 oppure un *";
$f_lang['erreur_ip2'] = "Immetti la parte 2 dell'indirizzo IP compresa tra 0 e 255 oppure un *";
$f_lang['erreur_ip3'] = "Immetti la parte 3 dell'indirizzo IP compresa tra 0 e 255 oppure un *";
$f_lang['erreur_ip4'] = "Immetti la parte 4 dell'indirizzo IP compresa tra 0 e 255 oppure un *";
$f_lang['explication_bannir_mot'] = "Hai 2 opzioni per le parole da bandire. O le parole vengono sostituite da un testo/simbolo a tua scelta oppure il messaggio viene rifiutato.";
$f_lang['bannir_mot'] = "Vuoi che il messaggio che contiene le parole vietate  (vedi \"Parole vietate\" nel menu) venga rifiutato?<br/>Se selezioni \"no\", queste parole verrano solo rimpiazzate da del testo/simbolo a tua scelta.";

/* bannir des pseudos */
$f_lang['bannir_pseudo'] = "Bandimento nicknames";
$f_lang['admin_text_pseudo'] = "Se vuoi che un utente <b>non possa più inserire un messaggio</b>, puoi immettere il suo nome qui. Puoi anche usare il carattere jolly *, che considera ogni possibile sequenza di lettere o numeri.";
$f_lang['ajouter_pseudo'] = "Bandisci un nickname";
$f_lang['gestion_pseudo'] = "Gestione nicknames";
$f_lang['sup_pseudo'] = "Cancella i nickname selezionati";
$f_lang['erreur_pseudo'] = "Immetti il nickname da aggiungere";
$f_lang['ok_aj_pseudo'] = "Il nickname è bandito da ora.";
$f_lang['verif_sup_pseudo'] = "Vuoi veramente cancellare tutti i nicknames selezionati??";

/* bannir des emails */
$f_lang['bannir_emails'] = "Bandimento Indirizzi Email";
$f_lang['admin_text_email'] = "Se vuoi che un utente <b>non possa più inserire un messaggio</b>, puoi immettere la sua email qui.. Puoi anche usare il carattere jolly *, per esempio per bandire un intero dominio, come: *@dominiochespamma.com";
$f_lang['ajouter_email'] = "Aggiungi un nuovo indirizzo email da bandire.";
$f_lang['gestion_email'] = "Gestione indirizzi Email.";
$f_lang['sup_email'] = "Cancella gli indirizzi Email selezionati";
$f_lang['erreur_email'] = "Digita l'indirizzo Email da aggiungere";
$f_lang['ok_aj_email'] = "Questo indirizzo Email è bandito da adesso";
$f_lang['verif_sup_email'] = "Vuoi veramente cancellare gli indirizzi Email selezionati?";

$f_lang['no_pseudo'] = "ATTENZIONE\\nIl tuo nickname è stato bandito, non ti è consentito inviare messaggi su questo guesbook.";
$f_lang['no_email'] = "ATTENZIONE\\nIl tuo indirizzo E-amil è stato bandito, non ti è consentito inviare messaggi su questo guesbook.";
$f_lang['no_ville'] = "ATTENZIONE\\nLa città inserita non è corretta, non ti è consentito inviare messaggi su questo guesbook.";
$f_lang['no_mot'] = "ATTENZIONE\\nHai usato parole vietate, non ti è consentito inviare messaggi su questo guesbook.\\nModifica il tuo messaggio!";

// interdiction des URL
$f_lang['url_interdite'] = "ATTENZIONE\\nGli URL non sono consentiti nei messaggi ";
$f_lang['url_interdites'] = "Vuoi che i messaggi contenenti URL vengano rifiutati?";
$f_lang['url_cliquables'] = "Vuoi che gli URL nei messaggi siano cliccabili (attivi)?";

//remplacement du fichier /config/config.php par une table dans la BDD
$f_lang['name_table_config'] = "Nome tabella parametri di configurazione";

// decalage horaire
$f_lang['admin_decalage_horaire'] = "Puoi modificare la differenza di orario tra il server ed il tuo fuso-orario. Lascia 0 se non vuoi nessuna modifica.";
$f_lang['heures'] = "ore";
$f_lang['secondes'] = "secondi";
$f_lang['admin_erreur_decalage_horaire'] = "Devi immettere una differenza di orario compresa tra -12 e +12";

// interdit la suppression du dernier admin
$f_lang['admin_suppr_dernier_admin'] = "Non puoi cancellare l'unico amministratore rimasto";

// dèsactivation des smileys en un clic
$f_lang['admin_autoriser_smileys'] = "Vuoi consentire le faccine nei messaggi?";

// pour empcher que le temps de session de la partie admin ne soit trop court
$f_lang['admin_temps_session_min'] = "ATTENZIONE\\nLa durata della validità della sessione che hai immesso è troppo corta!\\nDevi immettere una valore superiore ai 300 secondi";

// inclure le livre dans une page PHP
$f_lang['admin_inclure_livre'] = "Vuoi includere il guestbook in un file PHP?";
$f_lang['admin_inclure_livre_code'] = "Questo è il codice PHP che dovrai inserire nel tuo file PHP tra i tag <b>&lt;?php</b> e <b>?&gt;<b> .\n\nTi servirà anche cambiare la variabile \$chem_absolu nel file /index.php del guesbook e aggiungere il foglio di stile CSS sulla pagina chiamante (vedi le FAQ per ulteriori spiegazioni)";
$f_lang['admin_fichier_inclusion'] = "Digita qui il percorso assoluto del file nel quale vuoi includere il guesbook (in questo modo: /cartella1/cartella2/file_dove_finisce_il_guestbook.php). Devi premere il pulsante \"Salva\" per vedere il path digitato preso in considerazione nel codice";
$f_lang['admin_fichier_inclusion_erreur'] = "ATTENZIONE\\nNon hai immesso un percorso valido al file incluso\\nIl percorso deve essere digitato come in questo esempio: /cartella1/cartella2/file_dove_finisce_il_guestbook.php";

// gestion des champs
$f_lang['admin_champ_propose'] = "Non proporre";
$f_lang['admin_champ_obligatoire'] = "Obbligatorio";
$f_lang['admin_champ_prive'] = "Privato (non pubblicato)";
$f_lang['admin_champ_pseudo'] = "I visitatori possono immettere il proprio nickname";
$f_lang['admin_champ_ville'] = "I visitatori possono immettere la propria città";
$f_lang['admin_donner_focus'] = "Vuoi che il campo 'Nickname' venga selezionato (abbia il focus) quando la pagina viene caricata?";
$f_lang['champ_obligatoire_vide'] = "Almeno un campo obbligatorio (contrassegnato con *) è vuoto.";
$f_lang['erreur_add_nom'] = "Digita il tuo nome";
$f_lang['erreur_add_email'] = "Digita il tuo indirizzo Email";
$f_lang['erreur_add_site'] = "Digita il tuo sito web";
$f_lang['erreur_add_ville'] = "Digita il nome della tua città";
$f_lang['erreur_add_pays'] = "Seleziona il tuo stato";
$f_lang['erreur_add_note'] = "Seleziona una valutazione";
$f_lang['erreur_add_message'] = "Digita il tuo messaggio";
$f_lang['erreur_url'] = "L'indirizzo del tuo sito web non sembra essere valido";

// code de sècurité : vèrification de la prèsence de la librairie GD2
$f_lang['admin_gd_non_activee'] = "<span class=\"texte_alerte\">Non puoi usare l'opzione 'codice di sicurezza'!<br/>\n Il tuo server non include la libreria GD2 e/o le opzioni necessarie a questa caratteristica.</span>";

// lien vers l'admin et vers la page d'accueil
$f_lang['admin_lien_admin'] = "Vuoi pubblicare il link alla sezione di amministrazione in fondo al guestbook?";
$f_lang['admin_lien_accueil'] = "Vuoi pubblicare un link di ritorno all'homepage o altra pagina del tuo sito?";
$f_lang['admin_chemin_lien_accueil'] = "Se lasci questo vuoto, il link porterà all'homepage di questo sito. Alternativamente puoi immettere il percorso assoluto di una pagina a tua scelta (ES: /cartella1/pagina1.htm).";
$f_lang['admin_chemin_lien_accueil_erreur'] = "Il percorso che hai immesso non è valido. Usare solo percorsi assoluti (ES: /miapagina.php).";
$f_lang['texte_lien_accueil'] = "Ritorna all'homepage";
$f_lang['texte_lien_admin'] = "Amministrazione Guestbook";

$f_lang['admin_retour_livre'] = "Guarda il guestbook";

// symboles champs privès/obligatoires sur le formulaire
// /!\ Attention, maximum 90 caractères
$f_lang['information_champ_prive'] = "Non verrà pubblicato";
$f_lang['information_champ_obligatoire'] = "Questo campo è obbligatorio per inviare un messaggio.";

/* Bas de page partie admin */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

$f_lang['host_base'] = "Server (generalmente : localhost)";

$f_lang['name_table_txt_lang'] = "Nome della tabella contenente i testi personalizzati (per esempio il titolo del guestbook)";

$f_lang['erreur_host'] = "Immettere il server del database";

$f_lang['erreur_ecriture'] = "<b>ERRORE</b>, impossibile scrivere nella cartella \"config/\".<br><br>Modifica i diritti UNIX di tale cartella (chmod 777), e successivamente riprovare l'installazione: <a href=\"./setup.php\"><b>indietro</b></a>.";

$f_lang['options_livre'] = "Opzioni Guestbook";

$f_lang['text1'] = "<b>Le parole vietate verranno automaticamete sostituite</b> nei messaggi pubblicati dai visitatori. Puoi, per esempio, sostituire tutte le occorrenze di \"brutta parola\" con un testo come \"**testo censurato**\".<br/>Se hai scelto di rifiutare i messaggi contenenti \"parole vietate\", <u>devi comunque immettere un testo sostitutivo</u>. Questa accortezza ti consente di passare tra un modo ed un altro (sostituzione parole oppure rifiuto messaggio).";
?>
