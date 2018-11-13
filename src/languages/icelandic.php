<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2012    //
//         Hercelin Maxime (c) 2005 - 2012   //
//         http://www.alexguestbook.net/     //
//              all right reserved           //
//   Icelandic translation by Máni Jósefsson //
//          manijobba@gmail.com              //
///////////////////////////////////////////////

/* Encodage utilisé dans le script */
$SCRIPT_ENCODAGE = "iso-8859-1";
$CONTENT_LANGUAGE = "is";

/* setup */
$f_lang['install_auto'] = "Sjálfvirk uppsetning";
$f_lang['identi_base'] = "Gagnagrunns ID";
$f_lang['type_base'] = "Gerð gagnagrunns";
$f_lang['user_base'] = "Notendanafn";
$f_lang['pass_base'] = "Lykilorð";
$f_lang['nom_base'] = "Nafn gagnagrunns";
$f_lang['nom_table'] = "Nafn á töflum gagnagrunns";
$f_lang['name_table_sessions'] = "Nafn á sessions töflu";
$f_lang['name_table_users'] = "Nafn á notenda töflu";
$f_lang['name_table_messages'] = "Nafn á skilaboða töflu";
$f_lang['name_table_censure'] = "Nafn á bönnuð orð töflu";
$f_lang['name_table_ip'] = "Nafn á banna IP töflu";
$f_lang['name_table_smileys'] = "Nafn á smileys töflu";
$f_lang['extension_script'] = "Skráargerð skriftu";
$f_lang['choose_extension'] = "Veldu skráargerð fyrir gestabókina<br>(mælt er með \"php\", annars verður að endurnefna allar skrár með valinni endingu)";
$f_lang['identi_acces_admin'] = "Þitt ID til að fá aðgang að stjórnsvæði";
$f_lang['login_admin'] = "Notendanafn";
$f_lang['pass_admin'] = "Lykilorð";
$f_lang['verif_pass_admin'] = "Staðfesta lykilorð";
$f_lang['email_admin_setup'] = "Netfang";
$f_lang['installer'] = "Setja upp";
$f_lang['erreur_host'] = "Þú gleymdir að gefa upp host fyrir gagnagrunnshýsil";
$f_lang['erreur_user'] = "Þú gleymdir að gefa upp ID til að tengjast gagnagrunni";
$f_lang['erreur_nom_base'] = "Þú gleymdir að gefa upp nafnið á gagnagrunninum";
$f_lang['erreur_log_admin'] = "Þú gleymdir að gefa upp notendanafn til að fá aðgang að stjórnsvæðinu";
$f_lang['erreur_pass_admin'] = "Þú gleymdir að gefa upp lykilorð til að fá aðgang að stjórnsvæðinu";
$f_lang['erreur_pass_differents'] = "ATHUGIÐ, lykilorðin pössuðu ekki saman.";
$f_lang['erreur_first_connexion'] = "<b>Villa, ekki var hægt að tengjast gagnagrunni.</b><br><br>Athugaðu ID fyrir tenginguna þína : <a href=\"javascript:history.go(-1);\"><b>Til baka</b></a>.";
$f_lang['erreur_install'] = "Uppsetning mistókst";
$f_lang['ok_install'] = "Uppsetning tókst";
$f_lang['text_ok_install'] = "<b>Takk fyrir ! Uppsetning heppnaðist.</b><br><br>Af öryggisástæðum, mælum við með að þú eyðir uppsetningarskrá (\"setup.php\"), annars er mögulegt fyrir utanaðkomandi að breyta og/eða eyðileggja uppsetningu þína .<br><br>Þú getur nú komist á stjórnsvæðið með að smella <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>hérna</b></a> eða<br> séð hvernig hún lítur út á síðunni þinni  <a href=\"".$chem_absolu."\" target=\"_blank\"><b>hérna</b></a>.";

/* administration */
$f_lang['page protect'] = "Læst síða";
$f_lang['login'] = "Notendanafn";
$f_lang['pass'] = "Lykilorð";
$f_lang['value identif'] = "Auðkenning";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "Valmöguleikar";
$f_lang['script'] = "Gestabókin";
$f_lang['graphismes'] = "Útlit gestabókar";
$f_lang['messages'] = "Skilaboð";
$f_lang['gestion'] = "Tilhögun";
$f_lang['censure_mots'] = "Banna orð";
$f_lang['smileys'] = "Broskallar";
$f_lang['utilisateurs'] = "Síðustjórar";
$f_lang['ajouter'] = "Bæta við";
$f_lang['aide_guestbook'] = "FAQ";
$f_lang['a_propos_de'] = "Um...";
$f_lang['donner_avis'] = "Gafðu okkur þitt álit";
$f_lang['deconnexion'] = "aftengjast";

 /* options */
 $f_lang['options_livre'] = "Valmöguleikar gestabókar";
$f_lang['options_generales'] = "Almmenir valmöguleikar";
$f_lang['langue'] = "Tungumál";
$f_lang['send_mail'] = "Villt þú að stjórnendur fái email þegar skilaboð eru skráð í gestabók ?";
$f_lang['avert_mail'] = "<br>(<b>upplýsingar</b> : Vefhýsillinn þinn notast ekki við <b>mail()</b>  sem þýðir að jafnvel þó þú merkir við JÁ, er ekki hægt að senda tilkynningar á email)";
$f_lang['oui'] = "já";
$f_lang['non'] = "nei";
$f_lang['options_modules'] = "Valmöguleikar fyrir reiti í gestabók";
$f_lang['admin_champ_email'] = "Gestir eru beðnir að gefa upp netfang";
$f_lang['admin_champ_site'] = "Gestir eru beðnir að gefa upp veffang á vefsíðu viðkomandi";
$f_lang['admin_champ_pays'] = "Gestir eru beðnir að gefa upp stað og land";
$f_lang['admin_champ_note'] = "Gestir geta gefið álit sitt á síðunni";
$f_lang['admin_ok_aff_moteur'] = "Sýna möguleika á leit";
$f_lang['options_tech'] = "Tæknistillingar";
$f_lang['url_recharger'] = "Endurhlaða síðu fyrir gestabók";
$f_lang['url_variables'] = "Stillingar sendar sem breytur (sláðu inn # í staðinn fyrir $ í breytu)";
$f_lang['temps_session'] = "Gildistími fyrir Session á stjórnsvæði";
$f_lang['skin_to_use'] = "Útlit sem á að nota";
$f_lang['enregistrer'] = "Vista";
$f_lang['nb_pages'] = "Fjöldi skilaboða sem á að birta á hverri síðu";
$f_lang['merci_options'] = "Takk fyrir, upplýsingarnar voru uppfærðar";
$f_lang['erreur_options'] = "Villa\\nEkki var hægt að vista upplýsingar, ekki var hægt að skrifa í \\\"config.".$alex_livre_ext."\\\" skránna, vinsamlega uppfærðu upplýsingar skráarinnar með textaritli.";
$f_lang['temps_ip_post'] = "Fjöldi mínútna áður en gestur getur skráð önnur skilaboð";
$f_lang['minutes'] = "mínútur";
$f_lang['cut_mots'] = "Fjöldi stafa sem má nota áður en löngum orðum er skipt";
$f_lang['format_date'] = "Snið dagsetningar";

/* skins */
$f_lang['ok_ajouter'] = "Takk fyrir, útlitið hefur verið búið til";
$f_lang['erreur_ajouter'] = "VILLA\\nEkki var hægt að búa til útlit, vinsamlega búið til handstýrt";
$f_lang['text1_2'] = "Eftirfarandi snið verða vistuð í &quot;templates/skins/&quot; möppunni. Þú getur auðveldlega breytt þeim með þessu viðmóti en þú getur líka breytt þeim beint með HTML ritli";
$f_lang['text2'] = "<b>Ef þú villt líka breyta útlitssniði á stjórnsvæði</b> vinsamlega gerið það handstýrt í &quot;templates/admin/&quot; möppunni.";
$f_lang['text_aj_skin'] = "Bæta við útliti";
$f_lang['ajouter'] = "Bæta við";
$f_lang['gestion_skins'] = "Útlitsstjórn";
$f_lang['vous_editez'] = "Þú getur nú breytt þessu útliti :";
$f_lang['style'] = "stylesheet";
$f_lang['ajouter_message'] = "bæta við skilaboðahluta";
$f_lang['nbre_messages_page'] = "fjöldi skilaboða / síðuhluti";
$f_lang['pages_dispos'] = "listi yfir aðgengilegar síður / næsta síða - fyrri síðu hluti";
$f_lang['texte_corps_messages'] = "skilaboð búkur";
$f_lang['espacement'] = "bil milli tveggja skilaboða";
$f_lang['text_assembly'] = "skrá sem safnar fyrri hluta";
$f_lang['ok_edit_skin'] = "Takk fyrir, útlitið hefur verið uppfært";
$f_lang['erreur_edit_skin'] = "VILLA\\nEkki var hægt að uppfæra eina eða fleiri skrá úr útliti. Vinsamlega breytið þessari/þessum skrám handvirkt.";
$f_lang['ajouter'] = "Bæta við";
$f_lang['supprimer'] = "Eyða";
$f_lang['text_sup_skin'] = "Eyða útliti";
$f_lang['ok_supprimer'] = "Takk fyrir, útlitinu var eytt.";
$f_lang['erreur_supprimer'] = "VILLA\\nEkki var hægt að eyða einni eða fleiri skrám úr útliti, þeim ætti að eyða handvirkt.";

/* page des mots censurés */
$f_lang['aj_mot'] = "Bæta við orði "; 
$f_lang['mot_interdit'] = "Bannað orð :";
$f_lang['remplacer_par'] = "Skipta út fyrir :";
$f_lang['gestion_censure'] = "Stjórnun á bönnuðum orðum";
$f_lang['mot'] = "orð";
$f_lang['remplace_by'] = "skipt út fyrir";
$f_lang['liste_jour'] = "Uppfæra listann";
$f_lang['sup_mots'] = "Fjarlægja valin orð";
$f_lang['erreur_aj_censure1'] = "Vinsamlega gefðu upp orð til að banna";
$f_lang['erreur_aj_censure2'] = "Vinsamlega gefðu upp orð til að setja inn í staðinn fyrir bannað orð";
$f_lang['ok_aj_mot'] = "Takk fyrir, bönnuðu orði var bætt við.";
$f_lang['verif_sup'] = "Viltu endanlega fjarlægja valin orð ?";
$f_lang['merci_modif'] = "Takk fyrir, breytingar hafa verið vistaðar";

/* bannir des ip */
$f_lang['bannir_ip'] = "Banna ip tölur";
$f_lang['text_ip1'] = "Hver vefnotandi hefur sérstakt 4 talna ID (t.d. 201.10.25.14). Þetta ID er gefið út af þeim sem veitir aðgang og breytist í hvert skipti sem notandinn tengist aftur.";
$f_lang['text_ip2'] = "Ef þú vilt <b>hindra notanda í að skrifa í gestabókina þína</b>, getur þú afritað IP töluna hans hingað. Þú getur líka bannað eða IP tölur sem byrja á ákveðnum tölum með að nota táknið * (t.d. 201.15.55.*, eða jafnvel 158.*.*.*).";
$f_lang['ajouter_ip'] = "Bæta við bannaðri IP tölu";
$f_lang['gestion_ip'] = "Stjórna IP tölum";
$f_lang['sup_ip'] = "Fjarlægja valdar IP tölur";
$f_lang['ok_aj_ip'] = "Takk fyrir, þessi IP tala er nú bönnuð";
$f_lang['verif_sup_ip'] = "Viltu eyða þessum IP tölum ?";

/* smileys */
$f_lang['gestion_smileys'] = "Stjórna brosköllum";
$f_lang['text_smileys'] = "<b>Notendur geta tjáð tilfinningar sínar með brosköllum</b> þegar þeir skrifa skilaboð. Þú getur frá þessu viðmóti, sett inn fleiri broskalla svo að notendur hafi úr sem flestum að velja :o)<br><br>Broskallar sem hægt er að velja úr eru geymdir í \"images/smileys\" möppunni.";
$f_lang['ajouter_smiley'] = "Bæta við broskalli";
$f_lang['image_smiley'] = "Mynd";
$f_lang['car_replace'] = "Sambærilegur kóði";
$f_lang['gestion_smileys'] = "Stjórna brosköllum";
$f_lang['sup_smileys'] = "Eyða völdum brosköllum";
$f_lang['erreur_image'] = "Vinsamlega veldu broskall";
$f_lang['erreur_car'] = "Veldu sambærilegan kóða fyrir broskall";
$f_lang['ok_aj_smiley'] = "Takk fyrir, broskallinum hefur verið bætt við";
$f_lang['no_smiley'] = "Broskallinn verður að vera GIF eða JPG";
$f_lang['copy_impossible'] = "VILLA\\nEkki var hægt að afrita broskallinn í  \\\"images/smileys\\\" möppuna.";
$f_lang['car_replace_exist'] = "VILLA\\nSambærilegur kóði finnst fyrir í gagnagrunni.";
$f_lang['modif_smileys'] = "Uppfæra alla broskalla";
$f_lang['verif_sup_smileys'] = "Viltu eyða völdum brosköllum ?";
$f_lang['merci_modif_smileys'] = "Takk fyrir, brosköllunum hefur verið breytt.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Bæta við stjórnanda í gestabók";
	$f_lang['add_admin_2'] = "Bæta stjórnanda";
	$f_lang['ajouter_admin'] = "Bæta við";
	$f_lang['name_ajouter_admin'] = "bæta við";
}
else{
	$f_lang['add_admin_texte'] = "Breyta gestabókar stjórnanda";
	$f_lang['add_admin_2'] = "Breyta stjórnanda";
	$f_lang['ajouter_admin'] = "Vista";
	$f_lang['name_ajouter_admin'] = "breyta";
}

$f_lang['identif_connexion'] = "ID tengingar";
$f_lang['passe_admin'] = "Lykilorð";
$f_lang['email_admin'] = "Netfang (mikilvægt ef þú villt að stjórnandi fái email þegar ný skilaboð eru skráð)";
$f_lang['admin_receive_email'] = "Viltu að stjórnandi fái email þegar ný skilaboð eru skráð?";
$f_lang['admin_modif_options'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;má hann gera breytingar á gestabók ?";
$f_lang['admin_gestion_skins'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;breyta útliti ?";
$f_lang['admin_gestion_messages'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;að stjórna skilaboðum ?";
$f_lang['admin_gestion_censure'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;að stjórna bönnuðum orðum ?";
$f_lang['admin_gestion_smileys'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;að stjórna brosköllum ?";
$f_lang['admin_gestion_admin'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;að stjórna öðrum stjórnendum ?";
$f_lang['erreur_name'] = "Vinsamlega gefðu upp tengingar ID";
$f_lang['erreur_passe'] = "Vinsamlega gefðu upp lykilorð";
$f_lang['erreur_email'] = "Vinsamlega gefðu upp netfang";
$f_lang['ok_aj_admin'] = "Takk fyrir, notandi hefur verið stofnaður";
$f_lang['ok_modif_admin'] = "Takk fyrir, notandinn hefur verið uppfærður";
$f_lang['erreur_aj_admin'] = "VILLA\\nÞessi notandi er til";
$f_lang['revenir'] = "Aftur á fyrri síðu";

/* gestion des admins */
$f_lang['gest_admin'] = "stjórna stjórnendum";
$f_lang['sup_admin'] = "fjarlægja";
$f_lang['login_admin'] = "Notendanafn";
$f_lang['email_admin'] = "Netfang";
$f_lang['modif_admin'] = "breyta";
$f_lang['value_sup_admin'] = "Fjarlægja alla valda stjórnendur";
$f_lang['verif_sup_admin'] = "Viltu fjarlægja alla valda stjórnendur ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "Ekki hægt að birta síðu";
$f_lang['erreur_auth'] = "Auðkenning mistókst";
$f_lang['erreur_droits'] = "Þú hefur ekki tilskilin réttindi til að skoða síðuna.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Meðaleinkunn síðunar að mati gesta :";
$f_lang['title_guestbook'] = "Gestabók";
$f_lang['note_super'] = " : frábær !";
$f_lang['note_moyen'] = " : miðlungs";
$f_lang['note_rate'] = " : hroðaleg";
$f_lang['nom_pseudo_visiteur'] = "Nafn eða gælunafn :";
$f_lang['email_visiteur'] = "Netfang :";
$f_lang['site_web_visiteur'] = "Veffang(http://) :";
$f_lang['ville_pays_visiteur'] = "Staður / Land :";
$f_lang['note_visiteur'] = "Þín einkunn :";
$f_lang['message_visiteur'] = "Skilaboð :";
$f_lang['ajouter_message_visiteur'] = "Senda skilaboð";
$f_lang['erreur_add_nom'] = "Vinsamlega gefðu upp nafnið þitt";
$f_lang['erreur_add_message'] = "Vinsamlega skrifaðu skilaboð";
$f_lang['erreur_mail'] = "Netfangið þitt er rangt";
$f_lang['messages'] = "Skilaboð";
$f_lang['messages_a'] = "til";
$f_lang['page'] = "Síða";
$f_lang['nbre_messages'] = "Fjöldi skilaboða";
$f_lang['message_le'] = "þann";
$f_lang['message_note'] = "Einkunn";
$f_lang['send_mail_to'] = "Senda email til";
$f_lang['go_home'] = "Skoða síðuna";
$f_lang['precedente'] = "&lt;&lt; fyrra";
$f_lang['suivante'] = "næsta &gt;&gt;";
$f_lang['no_message'] = "Engin skilaboð.";
$f_lang['no_ip'] = "ATHUGIÐ\\nIP talan þín er bönnuð, þú mátt ekki skrifa í gestabókina.";
$f_lang['ok_post'] = "Takk fyrir !  Skilaboðin þín hafa verið skráð.";
$f_lang['time_erreur'] = "ATHUGIÐ\\nEkki var hægt að skrá skilaboðin þín, af öryggisástæðum eru tímamörk á skráningum.Reyndu síðar.";
$f_lang['text_select_search'] = "Sýna aðeins skilaboð sem innihalda ákveðin orð";
$f_lang['text_ok_search'] = "Ok";

/* mail envoyé */
$f_lang['mail_object'] = "[info] - Ný skilaboð í gestabók - ";
$f_lang['mail_message'] = "Hi,\n\nNý skilaboð hafa verið skráð í gestabókina á josefsson.dk ";

/* gestion des messages */
$f_lang['gestion_mess'] = "stjórna skilaboðum";
$f_lang['selectionner_pages'] = "Velja";
$f_lang['messages_gest'] = "skilaboð";
$f_lang['page_gest'] = "síða";
$f_lang['aller_en_page'] = "Fara á síðu";
$f_lang['supprimer_gest'] = "eyða";
$f_lang['auteur_gest'] = "höfundur";
$f_lang['modifier_gest'] = "breyta";
$f_lang['supprimer_mess_selected'] = "Eyða völdum skilaboðum";
$f_lang['verif_sup_mess'] = "Viltu eyða völdum skilaboðum ?";

/* modifier un message */
$f_lang['modif_mess'] = "Breyta skilaboði";
$f_lang['message_modif'] = "Skilaboð";
$f_lang['nom_modif'] = "Nafn";
$f_lang['email_modif'] = "Netfang";
$f_lang['site_web_modif'] = "Veffang";
$f_lang['note_modif'] = "Einkunn fyrir síðu";
$f_lang['ville_pays_modif'] = "Staður / Land";
$f_lang['date_modif'] = "Dags skrifað";
$f_lang['ip_modif'] = "IP tala";
$f_lang['ok_modif_mess'] = "Takk fyrir, breytingarnar vistaðar";

/* titre des pages */
$f_lang['title identification'] = "auðkenning";
$f_lang['title administration'] = "stjórnun";
$f_lang['title frame gauche'] = "vinstri rammi";
$f_lang['title options'] = "valmöguleikar";
$f_lang['title skins'] = "útlit";
$f_lang['title censure'] = "Orð sem á að banna";
$f_lang['title censure'] = "stjórna bönnuðum IP tölum";
$f_lang['title smileys'] = "stjórna brosköllum";
$f_lang['title add admin'] = "bæta við gestabókar stjórnanda";
$f_lang['title gest admin'] = "stjórna gestabókar stjórnendum";
$f_lang['title erreur'] = "villa";
$f_lang['title gestion mess'] = "stjórna skilaboðum";
$f_lang['title modif mess'] = "breyta skilaboði";
$f_lang['title setup'] = "uppsetning";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Ekki hægt að tengjast gagnagrunni";
$f_lang['erreur_connexion'] = "Upplýsingar um ID eru röng";
$f_lang['manque login'] = "Vinsamlega sláðu inn notendanafn";
$f_lang['manque pass'] = "Vinsamlega sláði inn lykilorð";
$f_lang['end session'] = "Session krefst nýrrar innskráningar";

/* add version 3.11 */
$f_lang['addSignature'] = "Skrifa skilaboð";
$f_lang['seeMessages'] = "Skoða skilaboð";
$f_lang['addMessageBlocAdd'] = "Bæta við skilaboði í gestabók";

/* add version 3.2 */
$f_lang['version'] = "Útgáfa";
$f_lang['new_version_dispo'] = "Hægt er að nálgast uppfærða útgáfu af gestabókinni";
$f_lang['version_courrante'] = "Núverandi útgáfa af gestabók";
$f_lang['info_version'] = "Upplýsingar um þína útgáfu";
$f_lang['version_txt_ok'] = "Þín útgáfa af gestabókinni er ".$alex_livre_version.",<br>þessi útgáfa þarfnast ekki uppfærslu.";
$f_lang['version_txt_erreur'] = "The version you have is ".$alex_livre_version.".<br/><b>An error occured during update verification.</b> You can verify new version on our website http://www.alexguestbook.net";
$f_lang['version_txt_update'] = "Þín útgáfa af gestabókinni er ".$alex_livre_version.", <b>hægt er að nálgast nýja útgáfu</b>";
$f_lang['version_down'] = "Ná í uppfærða útgáfu";
$f_lang['help_update'] = "Hjálp fyrir uppfærslu";
$f_lang['spam'] = "Ekki var hægt að fastsetja USER AGENT í vafranum þínum, það lítur út fyrir að róbóti hafi sjálfvirkt reynt að senda skilaboð. Sé þetta rangt, reyndu þá aftur með öðrum vafra.";
$f_lang['avis_spammeurs'] = "Note to spammers";//translate to icelandic if you see the point in that...=)
$f_lang['txt_spammeurs'] = "<b>This Guestbook is protected against spamming</b>, Email adresses and URLs are encoded in the source code of the generated pages, therefore it's absolutely useless to post commercials links, they will not be seen by search engines (furthermore your message will be deleted anyway...)";//translate to icelandic if you see the point in that...=)
$f_lang['fermer'] = "Loka glugga";
$f_lang['valider_messages'] = "Viltu skoða skilaboð áður en þau birtast á síðunni þinni ?";
$f_lang['valide'] = "Samþykkt ?";
$f_lang['mess_valide'] = "Þetta skilaboð hefur verið samþykkt";
$f_lang['mess_invalide'] = "Þetta skilaboð bíður samþykkis";
$f_lang['info_mess_valide'] = "Samþykkja skilaboð ?";
$f_lang['ok_post_valid'] = "Takk fyrir ! Skilaboðið hefur verið vistað, það verður birt á síðu eftir samþykki vefstjóra.";
$f_lang['see_skin'] = "Skoða gestabókina með þessu útliti";
$f_lang['maxi_car'] = "Hámarksfjöldi tákna/stafa leyfðum í skilaboði (0 = ótakmarkað)";
$f_lang['il_reste'] = "Þu getur líka skrifað upp";
$f_lang['caracteres'] = "fleiri tákn/stafir í skilaboði";
$f_lang['sup_copyright'] = "Eyða höfundarrétti";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Nafn á töflu fyrir öryggiskóða";
$f_lang['add_code_securite'] = "Viltu að gestir skrifi öryggiskóða áður en skilaboð eru send?";
$f_lang['t_chem_dossier_fonts'] = "URL að skráarsafni sem inniheldur leturgerðir(fonts)";
$f_lang['t_color_txt_code'] = "Hexadecimal kóði öryggiskóðaleturs";
$f_lang['t_color_background_code'] = "Hexadecimal kóði bakgrunns fyrir öryggiskóða";
$f_lang['veuillez_taper_code'] = "Skráðu öryggiskóðan í kassann hér til hægri";
$f_lang['a_quoi_ca_sert'] = "Af hverju?";
$f_lang['why_code'] = "Til hvers \"öryggiskóði\" ?";
$f_lang['txt_why_code'] = "Öryggiskóðinn er til að hindra sjálfvirkan hugbúnað í að skrá færslur.<br><br><b>Auglýsingar og annað spam er ekki leyft hér!</b>";
$f_lang['erreur_code_securite'] = "Vinsamlega sláðu inn öryggiskóða";
$f_lang['erreur_saisie_code_securite'] = "Öryggiskóðinn sem þú slóst inn var rangur.Vinsamlega reyndu aftur.";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Sjálfvirkt svar";
$f_lang['admin_gestion_reponse_auto'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;stjórna sjálfvirkum svörum?";
$f_lang['text_reponse_auto'] = "<b>Á þessari síðu getur þú skráð sjálfvirk svör</b> sem verða send til gesta sem að skrá skilaboð í gestabókina þína.  Þessi skilaboð verða send ef þú virkjar þau í valmöguleikum gestabókarinnar.<br><br>Hvert tungumál getur haft sitt sjálfvirka svar og [PSEUDO] kóðanum verður skipt út með nafni eða gælunafni þess sem skráir.";
$f_lang['name_table_rep_auto'] = "Nafn MySQL töflunar sem inniheldur sjálfvirk skilaboð";
$f_lang['gestion_reponses'] = "Stjórna skilaboðum";
$f_lang['msg_remerciement'] = "'takk fyrir' skilaboð";
$f_lang['txt_remerciement'] = "Halló [PSEUDO],\n\nTakk fyrir að skrá skilaboð í gestabókina mína!";
$f_lang['ok_save_msg_rem'] = "Takk, sjálfvirka ´takk´ skilaboðið hefur verið vistað.";
$f_lang['envoyer_remerciement'] = "Viltu að ´takk´ skilaboð verði sent sjálfvirkt?";
$f_lang['remerciement'] = "Takk";
$f_lang['titre_guestbook'] = "Titill gestabókar";
$f_lang['text_titre_guestbook'] = "<b>Þú getur breytt titli gestabókarinnar</b> og skrifað eitt mismunandi fyrir hvert tungumál.";
$f_lang['titre'] = "Titill";
$f_lang['parametrage'] = "Stillingar";
$f_lang['ok_save_titre'] = "Takk, titill gestabókar hefur verið vistaður.";
$f_lang['ville_visiteur'] = "Staður :";
$f_lang['pays_visiteur'] = "Land :";
$f_lang['flag'] = "Fáni";
$f_lang['ville_modif'] = "Staður";
$f_lang['pays_modif'] = "Land";
$f_lang['action'] = "Aðgerð";
$f_lang['repondre'] = "Svar";
$f_lang['votre_reponse'] = "Þitt svar";
$f_lang['ok_reponse_mess'] = "Takk, svarið þitt hefur verið vistað";
$f_lang['defaut_titre_rep'] = "Svar vefstjóra";
$f_lang['annuler'] = "Hætta við";
$f_lang['num_appari'] = "Sýni númer";
$f_lang['nb_max_smileys'] = "Hámarks fjöldi broskalla";
$f_lang['plus_smileys'] = "Sýna fleiri broskalla";
$f_lang['liste_all_smilies'] = "Lista alla broskalla";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>Þessi aðgerð gerir þér kleift að sjá nýjustu skilaboð sem voru skrifuð</b> á annari síðu að eigin vali .";
$f_lang['parametrage_modele'] = "Útlits stillingar";
$f_lang['ok_save_boite'] = "Takk, stillingar hafa verið vistaðar";
$f_lang['format_date_boite'] = "Snið dagsetningar (samanber <a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> PHP aðgerðina)";
$f_lang['nbre_maxi_pseudo_boite'] = "Hámarks fjöldi tákna fyrir nafn eða gælunafn";
$f_lang['nbre_maxi_message_boite'] = "Hámarks fjöldi tákna fyrir skilaboðatexta";
$f_lang['modele_affichage_donnees'] = "Útlitssnið fyrir gagnasendingar";
$f_lang['url_dossier_livre_boite'] = "Slóð að möppu sem inniheldur gestabók";
$f_lang['url_livre_boite'] = "Slóð að forsíðu gestabókar";
$f_lang['generation_code'] = "Búa til Javascript kóða";
$f_lang['nom_msg_afficher'] = "Hámark sýnilegra skilaboða";
$f_lang['generer_code'] = "Búa til Javascript call kóða";
$f_lang['code_a_copier'] = "HTML kóði sem má afrita á síðu af eigin vali";
$f_lang['erreur_boite_java'] = "Vinsamlega sláðu inn hámark sýnilegra skilaboða";
$f_lang['erreur_par_boite'] = "Stillinga villa, get ekki einangrað [BOUCLE] ... [/BOUCLE] keðjuna í útlitinu þínu.";
$f_lang['saut_ligne_msg_boite'] = "Halda línuhoppum í skilaboðum";
$f_lang['message_a'] = "á";
$f_lang['admin_gestion_bdd'] = "&nbsp;&nbsp;&nbsp;&nbsp;\"&nbsp;&nbsp;&nbsp;&nbsp;stjórna gagnagrunni ?";
$f_lang['bdd'] = "Gagnagrunnur";
$f_lang['optimisation'] = "Hröðun";
$f_lang['sauvegarde'] = "Vistun";
$f_lang['restauration'] = "Enduruppsetning";
$f_lang['optimisation_txt'] = "<b>Þegar þú breytir og eyðir úr gagnagrunnstöflum, hleðst upp pláss sem er ónýtt.</b> Þetta er slæmt uppá hraða síðunar og gagnagrunnsins og hér getur þú hraðað vinnslunni með að hreinsa til í gagnagrunnstöflunum.";
$f_lang['liste_tables'] = "Listi yfir töflur í gagnagrunni";
$f_lang['lancer_optimisation'] = "Byrja hröðun";
$f_lang['tables'] = "TÖFLUR";
$f_lang['pertes'] = "TAP";
$f_lang['octets'] = "bytes";
$f_lang['ok_optimise'] = "Takk, töflur sem ekki nýtast hafa verið hreinsaðar";
$f_lang['txt_sauvegarde'] = "<b>Ef þú vilt halda skilaboðum í lengri tíma, þá er góð hugmynd að búa til afrit.</b> Hrun hýsilstölvunar gæti þýtt gagnatap .  Afrit eru líka gagnleg ef þú þarft að færa töflurnar þínar á annann hýsil.";
$f_lang['lancer_sauvegarde'] = "Byrja afritunarferli";
$f_lang['lancer_restauration'] = "Byrja enduruppsetningu";
$f_lang['txt_restauration'] = "<b>Ef þú hefur búið til afrit, getur þú notað afritið til að enduruppsetja gagnagrunninn þinn.</b> Veldu bara tilheyrandi skrá á tölvunni þinni.<br><br><b><u>ATHUGIÐ/u></b>, ef skráin er mjög stór (nokkur megabæti), gæti enduruppsetning gengið hægt eða alls ekki en það veltur á stillingum hýsils.  (set_time_limit() og hámarksstærð upphals).";
$f_lang['select_file'] = "Veldu afritsskrá (.ZIP eða .SQL)";
$f_lang['confirm_restauration'] = "Hefja enduruppsetningu og eyða öllum eldri gögnum sem fyrir liggja í gagnagrunni?";
$f_lang['select_file_restau'] = "Veldu skrá af drifi";
$f_lang['erreur_ext_restau'] = "Valin skrá er ekki  .ZIP eða .SQL, ekki hægt að hefja enduruppsetningu.";
$f_lang['conseil_zip'] = "(Pakkaðu út .ZIP skránni til að ná í SQL skránna)";
$f_lang['erreur_ext_zip'] = " PHP_ZIP finnst ekki á hýsli, þarmeð er enduruppsetning með ZIP útilokuð. Vinsamlega veldu .SQL skrá af drifinu þínu".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "Get ekki lesið ZIP skjalasafn, Get ekki hafið enduruppsetningu.  Þú getur reynt aftur með .SQL skrá ".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Valin SQL skrá virðist ekki vera @lex Guestbook gestabókar skrá.  Get ekki hafið enduruppsetningu.";
$f_lang['restauration_terminee'] = "Takk ! Enduruppsetning heppnaðist !";

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

/* Erreur si fichier install present */
$f_lang['erreur_fic_install_present'] = "For security reasons, to use your guestbook you have to delete file setup.php and folder update/";

/* Erreur si versions differentes */
$f_lang['erreur_necessite_maj'] = "Version of files is different from the version of the database. Please update.";
$f_lang['erreur_necessite_maj_lien'] = "Link to update.";
?>