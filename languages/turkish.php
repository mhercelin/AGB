<?php
/////////////////////////////////////////////
//                @lex Guestbook				//
//      by Soulard Alexis (c) 2002 - 2006 		//
//         Gieling Pierre (c) 2002 - 2012 		//
//         Hercelin Maxime (c) 2005 - 2012		//
//         http://www.alexguestbook.net		//
//              all right reserved           			//
//   Turkish translation by Anti Biotic		//
//          http://www.allaturkaa.de			//
////////////////////////////////////////////

/* Encodage utilisé dans le script */
$SCRIPT_ENCODAGE = "iso-8859-9";
$CONTENT_LANGUAGE = "tr";

/* Bas de page partie admin */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

/* setup */
$f_lang['install_auto'] = "Otomatik Kurulum";
$f_lang['identi_base'] = "Veritabaný Kullanýcý Adý";
$f_lang['type_base'] = "Veritabaný Türü";
$f_lang['host_base'] = "Host";
$f_lang['user_base'] = "Kullanýcý Adý";
$f_lang['pass_base'] = "Þifre";
$f_lang['nom_base'] = "Veritabaný Adý";
$f_lang['nom_table'] = "Tablolarýn Adý";
$f_lang['name_table_sessions'] = "Oturum Tablolarýnýn Adý";
$f_lang['name_table_users'] = "Kullanýcý Tablolarýnýn Adý";
$f_lang['name_table_messages'] = "Mesaj Tablolarýnýn Adý";
$f_lang['name_table_censure'] = "Sansürlü Kelimelerin Tablolarýnýn Adý";
$f_lang['name_table_ip'] = "Yasaklý IP Tablolarýnýn Adý";
$f_lang['name_table_smileys'] = "Ýfade Tablolarýnýn Adý";
$f_lang['extension_script'] = "Script baðlantýsý";
$f_lang['choose_extension'] = "Script için bir baðlantý seçin.<br>(bizim tavsiyemiz \"php\", dilerseniz seçili baðlantýya siz de farklý bir isim verebilirsiniz.)";
$f_lang['identi_acces_admin'] = "Yönetim Paneline gitmek için Kullanýcý Adý";
$f_lang['login_admin'] = "Kullanýcý Adý";
$f_lang['pass_admin'] = "Þifre";
$f_lang['verif_pass_admin'] = "Þifreni Tekrar Gir";
$f_lang['email_admin_setup'] = "E-Posta Adresin";
$f_lang['installer'] = "Kur";
$f_lang['erreur_host'] = "Viritabanýnýzýn sunucu hostunu yazmayý unuttunuz.";
$f_lang['erreur_user'] = "Viritabanýna baðlanabilmek için Kullanýcý Adý yazmayý unuttunuz.";
$f_lang['erreur_nom_base'] = "Veritabaný isminizi yazmayý unuttunuz.";
$f_lang['erreur_log_admin'] = "Yönetim Paneline baðlanmak için bir Kullanýcý Adý oluþturmayý unuttunuz.";
$f_lang['erreur_pass_admin'] = "Yönetim Paneline baðlanmak için bir þifre oluþturmayý unuttunuz.";
$f_lang['erreur_pass_differents'] = "Uyarý! Þifreniz uyuþmuyor.";
$f_lang['erreur_first_connexion'] = "<b>HATA! Veritabanýna baðlanýlamýyor.</b><br><br>Lütfen Kullanýcý Adýnýzý kontrol ediniz : <a href=\"javascript:history.go(-1);\"><b>Geri Dön</b></a>.";
$f_lang['erreur_install'] = "Kurulum baþarýsýz oldu.";
$f_lang['ok_install'] = "Kurulum baþarýyla tamamlandý.";
$f_lang['text_ok_install'] = "<b>Teþekkür Ederiz Kurulum baþarýyla tamamlandý.</b><br><br>Güvenliðiniz için Ftp'nizden (\"setup.php\") dosyasýný siliniz., Eðer bu iþlemi yapmazsanýz baþka birisi sitenizi hackleyebilir.<br><br>Eðer hemen Yönetim Paneline gitmek istiyorsanýz <a href=\"".$chem_absolu."admin/\" target=\"_blank\"><b>Buraya Týklayýn!</b></a>ya da<br>Hemen ziyaretçi defterinizi görmek istiyorsanýz<a href=\"".$chem_absolu."\" target=\"_blank\"><b>Buraya Týklayýn!</b></a>.";
$f_lang['erreur_ecriture'] = "<b>HATA</b>, (config) dosyasý yazýlamýyor.<br><br>Lütfen \"config\" dosyasýnýn chmod ayarlarýnýn doðru olduðunu kontrol ediniz (chmod 777 olmalý), Daha sonra kuruluma devam edebilirsiniz : <a href=\"javascript:history.go(-1)\"><b>Geri Dön</b></a>.";

/* administration */
$f_lang['page protect'] = "Yönetici Giriþi";
$f_lang['login'] = "Kullanýcý Adý";
$f_lang['pass'] = "Þifre";
$f_lang['value identif'] = "Giriþ";
$f_lang['texte_lien_retour_livre'] = "Back to guestbook";

 /* menu */
$f_lang['options'] = "Seçenekler";
$f_lang['script'] = "Script";
$f_lang['graphismes'] = "Defterin Görünümü";
$f_lang['messages'] = "Mesajlar";
$f_lang['gestion'] = "Yönetim";
$f_lang['censure_mots'] = "Kelime Sansürleme";
$f_lang['bannir_ip'] = "IP Yasaklama";
$f_lang['smileys'] = "Ýfadeler";
$f_lang['utilisateurs'] = "Yöneticiler";
$f_lang['ajouter'] = "Ekle";
$f_lang['aide_guestbook'] = "Sýk Sorulan Sorular";
$f_lang['a_propos_de'] = "Hakkýmýzda";
$f_lang['donner_avis'] = "Fikrinizi Bizle Paylaþýn";
$f_lang['deconnexion'] = "Çýkýþ";

 /* options */
 $f_lang['options_livre'] = "Defterin Seçenekleri";
$f_lang['ok_write'] = "Buradan itibaren içeriðini doldurabilirsiniz.";
$f_lang['no_write'] = "<u>Buradan içerik yazamazsýnýz</u>. Bu Script serverinizin CHMOD haklarini degisitimeye çalisacak. Basarisiz olursa elle degistirmenizi tavsiye ederiz.";
$f_lang['infos'] = " \"config.".$alex_livre_ext."\" dosyasý hakkýnda bilgi :";
$f_lang['infos_'] = "Bu sayfadaki bilgiler  \"config.".$alex_livre_ext."\" dosyasýnda saklýdýr. \"include\" dosyasýna bir göz gezdirin. Dilerseniz bu dosyayý bir text editör programýyla düzenleyebilirsiniz.";
$f_lang['options_generales'] = "Genel Seçenekler";
$f_lang['langue'] = "Dil";
$f_lang['send_mail'] = "Her yeni mesajda yöneticilerin haberdar olmasini ister misiniz ?";
$f_lang['avert_mail'] = "<br>(<b>Bilgi</b> : Eger serveriniz mail fonksiyonu () çalismiyorsa evet deseniz bile bu islem gerçekleþsemez.";
$f_lang['oui'] = "Evet";
$f_lang['non'] = "Hayýr";
$f_lang['options_modules'] = "Defterin Modül Seçenekleri";
$f_lang['admin_champ_email'] = "Ziyaretçiler E-Posta adreslerini yazabilsinler mi ?";
$f_lang['admin_champ_site'] = "Ziyaretçiler Website adreslerini yazabilsinler mi ?";
$f_lang['admin_champ_pays'] = "Ziyaretçiler þehir ve ülkelerini yazabilsinler mi ?";
$f_lang['admin_champ_note'] = "Ziyaretçiler sitenize puan verebilsinler mi ?";
$f_lang['admin_ok_aff_moteur'] = "Arama motoru görüntülensin mi ?";
$f_lang['options_tech'] = "Teknik Seçenekler";
$f_lang['url_recharger'] = "Defter için yüklenecek sayfa";
$f_lang['url_variables'] = "Variable parameterisi ( $ larlari ifade etmek için # koyun)";
$f_lang['temps_session'] = "Yönetici için baðlý kalma zamaný";
$f_lang['skin_to_use'] = "Kullanýlan Tema (skin)";
$f_lang['enregistrer'] = "Deðiþiklikleri Kaydet";
$f_lang['nb_pages'] = "Defterde sayfa baþýna görüntülenecek mesaj sayýsý";
$f_lang['merci_options'] = "Teþekkürler, tüm bilgiler baþarý ile yüklenmiþtir.";
$f_lang['erreur_options'] = " HATA\\Þu belgedeki bilgiler kaydedilememiþtir\\\"config.".$alex_livre_ext."\\\", Bu belgeyi açarak düzeltiniz.";
$f_lang['temps_ip_post'] = "Bir ziyaretçinin yeniden mesaj atabilmesi için kaç dakika geçmesi gerek ?";
$f_lang['minutes'] = "Dakika";
$f_lang['cut_mots'] = "Bir uzun kelimenin kesilmesi için kaç harf olmasý gerek ?";
$f_lang['format_date'] = "Tarihlendirme þekli";

/* skins */
$f_lang['ok_ajouter'] = "Tesekkürler, yeni tema baþarýyla eklendi.";
$f_lang['erreur_ajouter'] = "HATA\\Tema eklenemedi, lütfen el ile ekleyiniz.";
$f_lang['text1_2'] = "Temalarýn kayýtlý olduðu dosya &quot;templates/skins/&quot;.";
$f_lang['text2'] = "<b>Admin bölümü görüntüsü deðiþtirmek için </b> el ile þu dosyadaki belgeyi deðiþtirin &quot;templates/admin/&quot;.";
$f_lang['text_aj_skin'] = "Tema Ekle";
$f_lang['ajouter'] = "Ekle";
$f_lang['gestion_skins'] = "Tema Yönetimi";
$f_lang['vous_editez'] = "Þu an seçili olan tema :";
$f_lang['style'] = "Stil Kaðýdý";
$f_lang['ajouter_message'] = "Mesaj Ekleme Bölümü";
$f_lang['nbre_messages_page'] = "Sayfa baþýna mesaj bölümü";
$f_lang['pages_dispos'] = "Var olan sayfalar bölümü / Geri Sayfa - Ýleri Sayfa";
$f_lang['texte_corps_messages'] = "Mesajýn Ýçeriði";
$f_lang['espacement'] = "2 Mesaj arasý boþluk";
$f_lang['text_assembly'] = "Önceki bölümleri birleþtiren belge";
$f_lang['ok_edit_skin'] = "Tesekkürler, tema baþarý ile yüklendi.";
$f_lang['erreur_edit_skin'] = "HATA\\Lütfen el ile bu belgeyi düzenleyin.";
$f_lang['ajouter'] = "Ekle";
$f_lang['supprimer'] = "Sil";
$f_lang['text_sup_skin'] = "Tema Sil";
$f_lang['ok_supprimer'] = "Tesekkürler, tema baþarýyla silindi.";
$f_lang['erreur_supprimer'] = "HATA\\Temayý el ile silin.";

/* page des mots censurés */
$f_lang['aj_mot'] = "Yeni bir kelime ekle. "; 
$f_lang['mot_interdit'] = "Yasak kelimeleri:";
$f_lang['remplacer_par'] = "ile deðiþtir:";
$f_lang['gestion_censure'] = "Yasak kelimelerin yönetimi";
$f_lang['mot'] = "Kelime";
$f_lang['remplace_by'] = "olarak deðiþmiþtir.";
$f_lang['liste_jour'] = "Listeyi yükle.";
$f_lang['sup_mots'] = "Seçilen kelimeleri kaldýr.";
$f_lang['erreur_aj_censure1'] = "Sansürlenecek kelimeyi belirtiniz.";
$f_lang['erreur_aj_censure2'] = "Sansürlenecek kelimenin yerine kullanýlacak kelimeyi seçin.";
$f_lang['ok_aj_mot'] = "Teþekkürler, sansürlencek kelimeler baþarýyla eklenmiþtir.";
$f_lang['verif_sup'] = "Seçtiðiniz kelimeleri silmek istediðinizden emin misiniz ?";
$f_lang['merci_modif'] = "Teþekkürler, deðiþiklikler uygulamaya konulmuþtur.";

/* bannir des ip */
$f_lang['bannir_ip'] = "IP Yasaklama";
$f_lang['text_ip1'] = "Her Ýnternet kullanýcýsýnýn bir IP adresi vardýr. (201.10.25.14 örnek). Genelde bu adresi ISP tarafýndan verilmekte her yeni baðlantýda genelde deðiþmektedir.";
$f_lang['text_ip2'] = "Eðer bir kullanýcýnin IP sini yasaklamak istiyorsanýz buraya IP sini girebilirsiniz.";
$f_lang['ajouter_ip'] = "Yasaklanacak bir IP adresi gir.";
$f_lang['gestion_ip'] = "IP lerin yönetimi";
$f_lang['sup_ip'] = "Seçilen IP leri sil.";
$f_lang['erreur_ip1'] = "IP nin birinci bölümünü yazýn";
$f_lang['erreur_ip2'] = "Ip nin ikinci bölümünü yazýn";
$f_lang['erreur_ip3'] = "IP nin üçüncü bölümünü yazýn";
$f_lang['erreur_ip4'] = "IP nin dördüncü bölümünü yazýn";
$f_lang['ok_aj_ip'] = "Teþekkürler, artýk bu IP mesaj gönderemez.";
$f_lang['verif_sup_ip'] = "Seçtiðiniz IP leri silmek istediðinizden emin misiniz ?";

/* smileys */
$f_lang['gestion_smileys'] = "Ýfadelerin Yönetimi";
$f_lang['text_smileys'] = "<b>Bu bölümden ifade ekleyebilir, silebilir, ifadelerinizin yerlerini deðiþebilirsiniz. Ayný zamanda Ziyeretçi defterinizde ifade kullanýmýný iptal de edebilirsiniz. Anasayfada görünecek ifade sayýsýný Script seçeneklerinden düzenleyebilirsiniz.</b>";
$f_lang['ajouter_smiley'] = "Yeni bir ifade ekle.";
$f_lang['image_smiley'] = "Resim :";
$f_lang['car_replace'] = "Yerine konacak harfler :";
$f_lang['gestion_smileys'] = "Ýfadelerin Yönetimi";
$f_lang['sup_smileys'] = "Seçilenleri Sil";
$f_lang['erreur_image'] = "Lütfen bir ifade seçin.";
$f_lang['erreur_car'] = "Yerine konacak tuþlarý seçin.";
$f_lang['ok_aj_smiley'] = "Teþekkürler. Baþarýyla eklediniz.";
$f_lang['no_smiley'] = "Ýfadeler .jpeg veya .gif formatýnda olmalý.";
$f_lang['copy_impossible'] = "HATA\\Dosyaya yüklenemedi \\\"images/smileys\\\".";
$f_lang['car_replace_exist'] = "HATA\\Kullanmak istediðiniz tuþlar zaten var.";
$f_lang['modif_smileys'] = "Tüm ifadeleri deðiþtir.";
$f_lang['verif_sup_smileys'] = "Silmek istediðinizden emin misiniz ?";
$f_lang['merci_modif_smileys'] = "Teþekkürler, tüm ifadeler ler deðiþtirilmiþir.";

/* ajouter un admin */
if (!(isset($_GET['id_modif']) && $_GET['id_modif'])){
	$f_lang['add_admin_texte'] = "Deftere yeni bir yönetici ekler.";
	$f_lang['add_admin_2'] = "Yeni Yönetici Ekle";
	$f_lang['ajouter_admin'] = "Ekle";
	$f_lang['name_ajouter_admin'] = "Ekle";
}
else{
	$f_lang['add_admin_texte'] = "Defterin yönetcisini deðiþitir.";
	$f_lang['add_admin_2'] = "Yönetici Deðiþtir";
	$f_lang['ajouter_admin'] = "Kaydet";
	$f_lang['name_ajouter_admin'] = "Deðiþtir";
}

$f_lang['identif_connexion'] = "Kullanýcý Adý :";
$f_lang['passe_admin'] = "Þifre :";
$f_lang['email_admin'] = "E-mail (Önemli)";
$f_lang['admin_receive_email'] = "Yönetici her mesaj gönderildiginde bildirilsin mi ?";
$f_lang['admin_modif_options'] = "Yönetici script seçenekelerini deðiþtirebilsin mi ?";
$f_lang['admin_gestion_skins'] = "Yönetici temalarý deðiþtirebilsin mi ?";
$f_lang['admin_gestion_messages'] = "Yönetici girilen mesajlarý deðiþtirebilsin mi ?";
$f_lang['admin_gestion_censure'] = "Yönetici uygunsuz kelimeleri deðiþtirebilsin mi ?";
$f_lang['admin_gestion_smileys'] = "Yönetici ifadeleri deðiþtirebilsin mi ?";
$f_lang['admin_gestion_admin'] = "Yönetici diðer yöneticilerin hesaplarýný deðiþtirebilsin mi ?";
$f_lang['erreur_name'] = "Lütfen bir kullanýcý adý giriniz.";
$f_lang['erreur_passe'] = "Lütfen þifrenizi giriniz.";
$f_lang['erreur_email'] = "Lütfen E-mail adresinizi belirtiniz.";
$f_lang['ok_aj_admin'] = "Teþekkürler, hesap baþarýyla eklenmiþtir.";
$f_lang['ok_modif_admin'] = "Tesekkürler, hesap baþarýyla deðiþtirilmiþtir.";
$f_lang['erreur_aj_admin'] = "Hata\\nBu kullanýcý adý zaten mevcut lütfen baþka bir kullanýcý adý seçiniz.";
$f_lang['revenir'] = "Bir önceki sayfaya geri dön";

/* gestion des admins */
$f_lang['gest_admin'] = "Yönetim Sayfasý";
$f_lang['sup_admin'] = "Sil";
$f_lang['login_admin'] = "Kullanýcý Adý";
$f_lang['email_admin'] = "E-mail";
$f_lang['modif_admin'] = "Deðiþtir";
$f_lang['value_sup_admin'] = "Seçilen Yöneticileri Sil";
$f_lang['verif_sup_admin'] = "Silmek istediðinizden emin misiniz ?";

/* page d'erreur */
$f_lang['erreur_texte'] = "ÜZGÜNÜZ BU SAYFAYI KISITLI OLARAK KULLANABÝLÝRSÝNÝZ";
$f_lang['erreur_auth'] = "Tanýmlanamadýnýz.";
$f_lang['erreur_droits'] = "Bu sayfaya girme yetkiniz yok.";

/* affichage du livre d'or */
$f_lang['note_moyenne'] = "Ziyaretçilerin verdiði ortalama not :";
$f_lang['title_guestbook'] = "Ziyaretçi Defteri";
$f_lang['note_super'] = " : Süper !";
$f_lang['note_moyen'] = " : Orta";
$f_lang['note_rate'] = " : Kötü";
$f_lang['nom_pseudo_visiteur'] = "Adýnýz :";
$f_lang['email_visiteur'] = "E-Posta Adresiniz :";
$f_lang['site_web_visiteur'] = "Web Sayfanýz :";
$f_lang['ville_pays_visiteur'] = "Þehir/Ülke :";
$f_lang['note_visiteur'] = "Bu Site Ýçin Notunuz :";
$f_lang['message_visiteur'] = "Mesajýnýzý Yazýnýz :";
$f_lang['ajouter_message_visiteur'] = "Gönder";
$f_lang['erreur_add_nom'] = "Lütfen isminizi yazýnýz.";
$f_lang['erreur_add_message'] = "Boþ bir mesaj gönderemezsiniz.";
$f_lang['erreur_mail'] = "Geçersiz bir E-Posta adresi girdiniz.";
$f_lang['messages'] = "Mesajlar";
$f_lang['messages_a'] = "/";
$f_lang['page'] = "Sayfa";
$f_lang['nbre_messages'] = "Mesaj Sayýsý";
$f_lang['message_le'] = "Mesaj Tarihi";
$f_lang['message_note'] = "Deðerlendirme";
$f_lang['send_mail_to'] = "E-Posta gönder";
$f_lang['go_home'] = "Bu siteyi ziyaret et";
$f_lang['precedente'] = "&lt;&lt; Geri";
$f_lang['suivante'] = "Ýleri &gt;&gt;";
$f_lang['no_message'] = "Þu an hiçbir mesaj bulunmamakta.";
$f_lang['no_ip'] = "DÝKKAT\\nIP adresiniz yasaklanmýþtýr. Buraya mesaj göndermezsiniz.";
$f_lang['ok_post'] = "Teþekkürler !  Mesajýnýz baþarýyla gönderilmiþtir.";
$f_lang['time_erreur'] = "DÝKKAT\\nYeni bir mesaj gönderdiðiniz için bekleme süreniz henüz bitmemiþtir.";
$f_lang['text_select_search'] = "Sadece þu kelimeleri içeren mesajlarý göster ";
$f_lang['text_ok_search'] = "Ara";

/* mail envoyé */
$f_lang['mail_object'] = "[Ziyaretçi Defteri] - Yeni bir mesaj gönderilmiþir. ";
$f_lang['mail_message'] = "Ziyaretçi defterinizde yeni mesaj :\n\n-------------------------------------------\n ";

/* gestion des messages */
$f_lang['gestion_mess'] = "Mesaj Yönetimi";
$f_lang['selectionner_pages'] = "Seçiniz";
$f_lang['messages_gest'] = "Mesaj";
$f_lang['page_gest'] = "Sayfa";
$f_lang['aller_en_page'] = "Sayfaya Git";
$f_lang['supprimer_gest'] = "Sil";
$f_lang['auteur_gest'] = "Yazan";
$f_lang['modifier_gest'] = "Deðiþtir";
$f_lang['supprimer_mess_selected'] = "Seçilen mesajlarý sil";
$f_lang['verif_sup_mess'] = "Silmek istediðinizden emin misiniz ?";

/* modifier un message */
$f_lang['modif_mess'] = "Mesajý Deðiþtir";
$f_lang['message_modif'] = "Mesaj :";
$f_lang['nom_modif'] = "Ýsim :";
$f_lang['email_modif'] = "E-Posta :";
$f_lang['site_web_modif'] = "Web Sayfasý :";
$f_lang['note_modif'] = "Sitenize verilen oy :";
$f_lang['ville_pays_modif'] = "Þehir Ülke :";
$f_lang['date_modif'] = "Eklenme Tarihi :";
$f_lang['ip_modif'] = "IP Adresi :";
$f_lang['ok_modif_mess'] = "Teþekkürler. Tüm bilgiler deðiþtirilmiþtir.";

/* titre des pages */
$f_lang['title identification'] = "Baðlantý";
$f_lang['title administration'] = "Yönetim";
$f_lang['title frame gauche'] = "Sol Pencere";
$f_lang['title options'] = "Seçenekler";
$f_lang['title skins'] = "Temalar";
$f_lang['title censure'] = "Uygunsuz Kelimeler";
$f_lang['title censure'] = "Yasaklanacan IP";
$f_lang['title smileys'] = "Ýfade Yönetimi";
$f_lang['title add admin'] = "Yeni Bir Yönetici Ekle";
$f_lang['title gest admin'] = "Yöneticiler";
$f_lang['title erreur'] = "Hata";
$f_lang['title gestion mess'] = "Mesaj Yönetimi";
$f_lang['title modif mess'] = "Mesajý Deðiþtir";
$f_lang['title setup'] = "Kurulum";

/* erreurs */
$f_lang['erreur_mysql_connect'] = "Veritabanýna baðlanýlamýyor.";
$f_lang['erreur_connexion'] = "Kullanýcý adýnýz yanlýþ";
$f_lang['manque login'] = "Kullanýcý Adý Girin";
$f_lang['manque pass'] = "Þifrenizi Girin";
$f_lang['end session'] = "Baðlantý Süreniz Dolmuþtur.";

/* add version 3.11 */
$f_lang['addSignature'] = "Mesaj Yaz";
$f_lang['seeMessages'] = "Eklenen Mesajlarý Oku";
$f_lang['addMessageBlocAdd'] = "Deftere Yeni Mesaj Ekle";

/* add version 3.2 */
$f_lang['version'] = "Versiyon";
$f_lang['new_version_dispo'] = "Bu scriptin yeni bir versiyonu mevcuttur.";
$f_lang['version_courrante'] = "Scriptin þu anki versiyonu";
$f_lang['info_version'] = "Sizin versiyonunuz hakkinda bilgi";
$f_lang['version_txt_ok'] = "Elinizde su ".$alex_livre_version.",versiyonu var. <br>Bu en son versiyon, güncelleme gerekmemektedir.";
$f_lang['version_txt_erreur'] = "The version you have is ".$alex_livre_version.".<br/><b>An error occured during update verification.</b> You can verify new version on our website http://www.alexguestbook.net";
$f_lang['version_txt_update'] = "Elinizde þu an ".$alex_livre_version."versiyonu bulunmakta, <b>yeni bir versiyon mevcut.</b>";
$f_lang['version_down'] = "Yeni Versiyonu Yükle";
$f_lang['help_update'] = "Yükleme Yardým";
$f_lang['spam'] = "Kullandýðýnýz browser koruma konusunda yetersiz.Bir robot (Bot) tarafýndan mesaj gönderiliyor gibi görünmekte. Eðer bu dogru deðilse baþka bir browserde tekrar deneyiniz.";
$f_lang['avis_spammeurs'] = "Spamcýlara Duyuru";
$f_lang['txt_spammeurs'] = "<b>Bu ziyaretçi defteri spamlara karþý korunmaktadýr. Her türlü saldýraya karþý gerekli önlem alýnmýþtýr.";
$f_lang['fermer'] = "Bu pencereyi kapat!";
$f_lang['valider_messages'] = "Mesajalrý defterde yayýnlanmadan önce onaylamak ister misiniz ?";
$f_lang['valide'] = "Onay Durumu";
$f_lang['mess_valide'] = "Bu mesaj onaylandý.";
$f_lang['mess_invalide'] = "Bu mesaj onaylanmayý beklemektedir.";
$f_lang['info_mess_valide'] = "Mesaj Onaylandý.";
$f_lang['ok_post_valid'] = "Tesekkürler ! Ýsteðiniz baþarýyla eklenmiþtir. Yönetici en yakýn zamanda isteðinizi deðerlendirecektir.";
$f_lang['see_skin'] = "Bu temayý kullanarak siteyi dolaþ";
$f_lang['maxi_car'] = "Bir mesajdaki maksimum harf sayýsý (0 = sýnýrsýz)";
$f_lang['il_reste'] = "Mesajýnýz için";
$f_lang['caracteres'] = "karakter daha kullanabilirsiniz.";
$f_lang['sup_copyright'] = "Copyright Sil";

/* add version 3.3 */
$f_lang['name_table_img_verif_add'] = "Güvenlik kodu tablosunun adý";
$f_lang['add_code_securite'] = "Ziyaretçiler mesaj gönderirken güvenlik kodu kullansýnlar mý ?";
$f_lang['t_chem_dossier_fonts'] = "Bütün URL yazýlarýnýn yönetimi";
$f_lang['t_color_txt_code'] = "Güvenlik kodu için yazý rengi";
$f_lang['t_color_background_code'] = "Güvenlik kodu için arka plan rengi";
$f_lang['veuillez_taper_code'] = "Lütfen aþaðýda bulunan 4 karakteri kutunun içine eksiksiz giriniz";
$f_lang['a_quoi_ca_sert'] = "Neden ?";
$f_lang['why_code'] = "Niçin bir \"güvenlik kodu\" uygulamasý yapýlýyor ?";
$f_lang['txt_why_code'] = "Bu seçenek sayesinde mesaj yazanýn gerçek bir kiþi mi yoksa bir bilgisayar bot'u mu olduðunu anlýyoruz.<br><br><b>Bu sayede defrerimiz Spamcýlara karþý daha iyi korumnaktadýr.</b><br><br><b>Anlayýþýnýz için Teþekkür ederiz!</b>";
$f_lang['erreur_code_securite'] = "Lütfen güvenlik kodunu giriniz.";
$f_lang['erreur_saisie_code_securite'] = "Girmiþ olduðunuz güvenlik kodu doðru deðil.Lütfen tekrar deneyiniz.";

/* add version 4.0 */
$f_lang['reponse_auto'] = "Otomatik Cevaplama";
$f_lang['admin_gestion_reponse_auto'] = "Yönetici Otomatik Cevaplama seçeneðini düzenleyebilsin mi ?";
$f_lang['text_reponse_auto'] = "<b>Bu bölümde defterinize mesaj yazan ziyaretçilere otomatik olarak cevap gönderebilirsiniz .</b>Bu seçeneði aktif ederseniz oluþturduðunuz mesaj otomatik olarak ziyaretçilere gönderilecektir.<br><br>Ýstediðiniz dilde otomatik cevap oluþturmanýz mümkün. Ziyaretçiler mesaj yazdýktan sonra bu otomatik mesaj sayfada görüntülenecektir.";
$f_lang['name_table_rep_auto'] = "Otomatik mesaj cevaplama MySQL tablo ismi";
$f_lang['gestion_reponses'] = "Mesaj Yönetimi";
$f_lang['msg_remerciement'] = "Teþekkür Mesajý";
$f_lang['txt_remerciement'] = "Defterimizi ziyaret ettiðiniz için teþekkür ederiz.";
$f_lang['ok_save_msg_rem'] = "Teþekkürler, Otomatik cevap mesajýn kaydedilmiþtir..";
$f_lang['envoyer_remerciement'] = "Ziyaretçilere gönderdikleri mesaj bilgileri E-posta olarak gönderilsin mi?";
$f_lang['remerciement'] = "Teþekkürler";
$f_lang['titre_guestbook'] = "Defter Baþlýðý";
$f_lang['text_titre_guestbook'] = "<b>Ziyaretçi defterinizin baþlýðýný deðiþebilirsiniz.</b> Diðer dil seçeneklerini de kullanarak bu iþlemi gerçekleþtirebilirsiniz. ";
$f_lang['titre'] = "Baþlýk";
$f_lang['parametrage'] = "Ayarlar";
$f_lang['ok_save_titre'] = "Teþekkürler, baþlýk kaydedilmiþtir.";
$f_lang['ville_visiteur'] = "Þehir :";
$f_lang['pays_visiteur'] = "Ülke :";
$f_lang['flag'] = "Bayrak";
$f_lang['ville_modif'] = "Þehir";
$f_lang['pays_modif'] = "Ülke";
$f_lang['action'] = "Ýþlem";
$f_lang['repondre'] = "Cevaplama";
$f_lang['votre_reponse'] = "Yorumunuz";
$f_lang['ok_reponse_mess'] = "Teþekkürler yorumunuz eklenmiþtir.";
$f_lang['defaut_titre_rep'] = "Editör'ün Yorumu";
$f_lang['annuler'] = "Ýptal";
$f_lang['num_appari'] = "Numara Göster";
$f_lang['nb_max_smileys'] = "En fazla görüntülenebilecek ifade sayýsý :";
$f_lang['plus_smileys'] = "Daha fazla ifade göster";
$f_lang['liste_all_smilies'] = "Tüm ifadelerin listesi :";
$f_lang['boite_java'] = "Javascript Box";
$f_lang['text_boite_java'] = "<b>Bu fonksiyon defterinize gönderilen en son mesajlarý farklý bir sayfada görüntülemenize izin verir.</b>";
$f_lang['parametrage_modele'] = "Kalýp Ayarlarý";
$f_lang['ok_save_boite'] = "Teþekkürler. Ayarlarýnýz baþarýyla kaydedilmiþtir.";
$f_lang['format_date_boite'] = "Tarihlendirme Þekli (hemen hemen ayný<a href=\"http://www.php.net/manual/function.date.php\" target=\"_blank\"><b>date()</b></a> PHP formatý ile)";
$f_lang['nbre_maxi_pseudo_boite'] = "Kullanýcý Adý için kullanýlabilecek maksimum (en fazla) karakter sayýsý :";
$f_lang['nbre_maxi_message_boite'] = "Mesaj için kullanýlabilecek maksimum (en fazla) karakter sayýsý :";
$f_lang['modele_affichage_donnees'] = "Gönderme kalýbý bilgileri";
$f_lang['url_dossier_livre_boite'] = "Defterinizin bulunduðu dosyayý belirtmek için vereceðiniz URL yi tamamlayýnýz.";
$f_lang['url_livre_boite'] = "Defterinizin anasayfasý belirtmek için vereceðiniz URL yi tamamlayýnýz.";
$f_lang['generation_code'] = "Javascript kod oluþturma";
$f_lang['nom_msg_afficher'] = "Görüntülenebilecek mesaj sayýsý";
$f_lang['generer_code'] = "Yeni bir Javascript baþlangýç kodu oluþtur";
$f_lang['code_a_copier'] = "Seçtiðiniz HTML kodlarý kopyalandý.";
$f_lang['erreur_boite_java'] = "Mesajý görüntülemek için geçerli bir numara giriniz.";
$f_lang['erreur_par_boite'] = "Settings error, cannot isolate the [BOUCLE] ... [/BOUCLE] chain in your template.";
$f_lang['saut_ligne_msg_boite'] = "Keep the line jumps in the messages";
$f_lang['message_a'] = "Saat";
$f_lang['admin_gestion_bdd'] = "Yönetici Veritabaný düzenlemesi yapabilsin mi ?";
$f_lang['bdd'] = "Veritabaný";
$f_lang['optimisation'] = "Durum";
$f_lang['sauvegarde'] = "Veritabanýný Kaydet";
$f_lang['restauration'] = "Veritabaný Yükle";
$f_lang['optimisation_txt'] = "<b>Veritabanýný kaydederken veya silerken tablolara eriþmeniz zor oluyor.</b> Bu durum sizin için sýkýntý olabilir. Ama bu sayfa sayesinde veritabanýnýzdaki tablolarýn durumunu kontrol edebilir ve gerektiðinde hepsini silebilirsiniz.";
$f_lang['liste_tables'] = "Veritabanýnýzdaki Tablolarýn Listesi";
$f_lang['lancer_optimisation'] = "Veritabanýný Sýfýrla";
$f_lang['tables'] = "TABLES";
$f_lang['pertes'] = "LOSSES";
$f_lang['octets'] = "bytes";
$f_lang['ok_optimise'] = "Thanks, the tables having losses have been optimized";
$f_lang['txt_sauvegarde'] = "<b>Eðer gönderilen mesajlarý uzun süre saklamak istiyorsanýz veritabanýnýzý bir hardiske ya da bir sunucuya kaydedebilirsiniz.</b> Ayný þekilde kaydettiðiniz mesajlarý veritabanýnýza tekrar yüklemeniz de mümkün.";
$f_lang['lancer_sauvegarde'] = "Veritabanýný Kaydetmeye Baþla";
$f_lang['lancer_restauration'] = "Veritabanýný Yüklemeye Baþla";
$f_lang['txt_restauration'] = "<b>Eðer isterseniz veritabanýnýzdaki bilgileri bilgisayarýnýza (hard diskinize) ya da bir sunucuya kaydedebilirsiniz.</b><br><br><b><u>DÝKKAT</u></b>,Eðer veritabanýnýzýn boyutu çok büyük ise, kaydetme süresi uzayabilir. Website sunucunuzun upload ve download hýzýda bu iþlemi etkileyebilir.";
$f_lang['select_file'] = "Veritabanýna yüklemek istediðiniz bir dosya seçiniz. (.ZIP veya .SQL)";
$f_lang['confirm_restauration'] = "Do you confirm that you wish to lauch the restoration and thus erase all actual data?";
$f_lang['select_file_restau'] = "Lütfen bilgisayarýnýzdan yükleyebileceðiniz bir dosya seçiniz.";
$f_lang['erreur_ext_restau'] = "Seçtiðiniz dosya geçerli deðil. .ZIP ya da .SQL, uzantýlý bir dosya seçmelisiniz.";
$f_lang['conseil_zip'] = "(Sýkýþtýrýlmamýþ bir SQL dosyasý seçiniz.)";
$f_lang['erreur_ext_zip'] = "Sunucunuzdaki PHP_ZIP baðlantýsý kullanýlamýyor, veritabaný yüklemesi .ZIP uzantýlý dosyayla yapýlamamaktadýr. Lütfen hard diskinizden .SQL uzantýlý bir dosya seçiniz.".$f_lang['conseil_zip'].".";
$f_lang['erreur_zip'] = "ZIP arþiv dosyasý bir hatadan dolayý okunamýyor. Yükleme yapmak için lütfen bir SQL dosyasý seçiniz.".$f_lang['conseil_zip'].".";
$f_lang['erreur_read_sql'] = "Seçtiðiniz SQL dosyasý @lex Guestbook script dosyasý olarak görünmüyor. Bu nedenle yükleme yapamazsýnýz. ";
$f_lang['restauration_terminee'] = "Teþekkürler, veritabaný baþarýyla yüklenmiþtir.";

							/* V5 */
$f_lang['name_table_ban'] = "Banlanan IP,Nick  ve E-postanýn bulunduðu tablo adý";
$f_lang['ok_validation'] = "Teþekkürler.Seçilen mesajlar onaylanmýþtýr.";
$f_lang['selectionner_tous_messages'] = "Hepsini Seç/Seçimi Kaldýr";
$f_lang['admin_send_mail'] = "Yeni mesaj eklendiðinde yöneticiye E-posta ile bildirilsin mi ?";

//ajout bannissement
$f_lang['bannissement'] = "Yasaklama";
$f_lang['admin_gestion_bannissement'] = "Yönetici Yasaklama Yönetimi'ni kullanabilsin mi ?";
$f_lang['interdit_de_message'] = "Mesajýnýz uygunsuz kelimeler içermektedir. Lütfen mesajýnýzý düzenleyerek tekrar deneyiniz.";
$f_lang['valider_mess'] = "Seçilen Mesajlarý Onayla";
$f_lang['erreur_ip'] = "Geçersiz bir IP adresi";
$f_lang['erreur_ip1'] = "Lütfen ilk bölüm için 0 ile 255 arasý bir sayý giriniz.";
$f_lang['erreur_ip2'] = "Lütfen ikinci bölüm için 0 ile 255 arasý bir sayý giriniz.";
$f_lang['erreur_ip3'] = "Lütfen üçüncü bölüm için 0 ile 255 arasý bir sayý giriniz.";
$f_lang['erreur_ip4'] = "Lütfen dördüncü bölüm için 0 ile 255 arasý bir sayý giriniz.";
$f_lang['explication_bannir_mot'] = "Mesajlardaki kelimeleri yasaklamak için iki yönteme sahipsiniz.Hem onlarý otomatik olarak deðiþebilirsiniz hem de yazaný mesaj gönderirken sistemden otomatik olarak uyarmasýný isteyebilirsiniz.";
$f_lang['bannir_mot'] = " Sansürlediðiniz kelimelerin mesaj yazarken otomatik olarak uyarýlmasýný ister misiniz?<br/>Eðer bu seçeði iþaretlerseniz sansürlenmiþ kelime yazýldýðý zaman sistem otomatik olarak yazaný uyaracaktýr.</br>Hayýr ý seçerseniz sistem o kelimeyi (deðiþtirerek) yazaný uyarmadan yayýnlayacaktýr.";

/* bannir des pseudos */
$f_lang['bannir_pseudo'] = "Kullanýcý Adý Yasaklama";
$f_lang['admin_text_pseudo'] = "Eðer dilerseniz defterinize mesaj yazan kiþinin ismini/nickin vs. yasaklayabilirsiniz.";
$f_lang['ajouter_pseudo'] = "Yasaklanacak bir kullanýcý adý seçiniz.";
$f_lang['gestion_pseudo'] = "Kullanýcý Adý Yönetimi";
$f_lang['sup_pseudo'] = "Seçilen Kullanýcý Adlarýný Sil";
$f_lang['erreur_pseudo'] = "Lütfen bir kullanýcý adý seçiniz.";
$f_lang['ok_aj_pseudo'] = "Teþekkürler. Seçtiðiniz Kullanýcý Adý yasaklanmýþtýr.";
$f_lang['verif_sup_pseudo'] = "Seçtiðiniz tüm Kullanýcý Adlarýný silmek istediðnizden emin misiniz ?";

/* bannir des emails */
$f_lang['bannir_emails'] = "E-Posta Adresi Yasaklama";
$f_lang['admin_text_email'] = "Eðer dilerseniz ziyaretçi defterinize mesaj yazan kiþinin E-posta adresini yasaklayabilirsiniz</b>Sadece E-Posta adresini deðil ayný zamanda domain uzantýlý mail adreslerini de yasaklamanýz mümkün : (...@spamdomain.com) gibi";
$f_lang['ajouter_email'] = "Yasaklanacak bir E-Posta adresi Ekle";
$f_lang['gestion_email'] = "E-Posta Yönetimi";
$f_lang['sup_email'] = "Seçilen E-Postayý Sil";
$f_lang['erreur_email'] = "Lütfen bir E-posta adresi seçin.";
$f_lang['ok_aj_email'] = "Teþekkürler. Seçilen E-posta adresi yasaklanmýþtýr.";
$f_lang['verif_sup_email'] = "Seçilen tüm E-posta adreslerini silmek istediðinizden emin misiniz ?";

$f_lang['no_pseudo'] = "UYARI!\\nSizin Kullanýcý Adýnýz yasaklanmýþtýr. Þu an bu panoya mesaj yazamazsýnýz.";
$f_lang['no_email'] = "UYARI!\\nSizin E-Posta adresiniz yasaklanmýþtýr. Þu an bu panoya mesaj yazamazsýnýz.";
$f_lang['no_ville'] = "UYARI!\\nYanlýþ bir þehirden girmeyi denediniz. Þu an bu panoya mesaj yazamazsýnýz.";
$f_lang['no_mot'] = "UYARI!\\nYazmýþ olduðunuz mesaj uygun olmayan kelimeler içermektedir. Lütfen mesajýnýzý kontrol edip tekrar deneyiniz !";

// interdiction des URL
$f_lang['url_interdite'] = "UYARI\\nMesajýnýzda URL adresine yer vermeniz yönetici tarafýndan yasaklanmýþtýr.";
$f_lang['url_interdites'] = "Mesajýn içeriðinde URL baðlantýlarý engellensin mi ?";
$f_lang['url_cliquables'] = "Mesajýn içeriðinde URL baðlantýlarý aktif edilsin mi ?";

//remplacement du fichier /config/config.php par une table dans la BDD
$f_lang['name_table_config'] = "config paremetre tablolarýnýn adý";

// decalage horaire
$f_lang['admin_decalage_horaire'] = "Sunucu zaman ayarýndan farklý olarak bir zaman belirtebilirsiniz. Girdiðiniz deðer zamaný ileriye alacaktýr. Buna ihtiyacýnýz yoksa lütfen 0 deðerini giriniz.";
$f_lang['heures'] = "saat";
$f_lang['secondes'] = "saniye";
$f_lang['admin_erreur_decalage_horaire'] = "-12 ve +12 arasý geçerli bir zaman girmelisiniz";

// interdit la suppression du dernier admin
$f_lang['admin_suppr_dernier_admin'] = "Son yönetici silinemez!";

// désactivation des smileys en un clic
$f_lang['admin_autoriser_smileys'] = "Ýfadeleri kullanýma izin veriyor musunuz ?";

// pour empêcher que le temps de session de la partie admin ne soit trop court
$f_lang['admin_temps_session_min'] = "UYARI!\\nSeçmiþ olduðunuz zaman dilimi çok kýsa.\\n300 saniyeden daha fazla bir zaman dilimi girmeniz gerekiyor.";

// inclure le livre dans une page PHP
$f_lang['admin_inclure_livre'] = "Ziyaretçi defterinizi bir PHP dosyasýna dahil etmek ister misiniz ?";
$f_lang['admin_inclure_livre_code'] = "Here is the PHP code that you will need to insert into your PHP file between the &lt;?php and ?&gt; tags.\n\nYou'll also need to change the \$chem_absolu array in the /index.php file of the guestbook and to add the stylesheet in the calling page (check the FAQ for further explanation)";
$f_lang['admin_fichier_inclusion'] = "Enter here the absolute path to the file in which you want to include the guestbook (this way : /folder1/folder2/file_where_the_include_takes_place.php). You must click on the \"Save\" button in order to see the entered path taken into account in the code";
$f_lang['admin_fichier_inclusion_erreur'] = "ATTENTION\\nYou haven't entered a valid path to the include file\\nThe path must be entered i.e. as /folder1/folder2/file_where_the_include_takes_place.php";

// gestion des champs
$f_lang['admin_champ_propose'] = "Listeden Kaldýr";
$f_lang['admin_champ_obligatoire'] = "Zorunlu Yap";
$f_lang['admin_champ_prive'] = "Özel Yap";
$f_lang['admin_champ_pseudo'] = "Ziyaretçiler isimlerini yazsýnlar mý ?";
$f_lang['admin_champ_ville'] = "Ziyaterçiler þehierlerini ekleyebilsinler mi ?";
$f_lang['admin_donner_focus'] = "Sayfa yüklenirken 'Kullanýcý Adý'seçili olsun mu ? (çerezler için)";
$f_lang['champ_obligatoire_vide'] = "At least one required field (identified by a *) is empty. Please fill it in.";
$f_lang['erreur_add_nom'] = "Lütfen adýnýzý giriniz.";
$f_lang['erreur_add_email'] = "Lütfen E-Posta adresi giriniz.";
$f_lang['erreur_add_site'] = "Lütfen Website adresinizi giriniz.";
$f_lang['erreur_add_ville'] = "Lütfen þehrinizi belirtiniz.";
$f_lang['erreur_add_pays'] = "Lütfen ülkenizi belirtiniz.";
$f_lang['erreur_add_note'] = "Sitemiz için lütfen bir puan kullanýnýz";
$f_lang['erreur_add_message'] = "Lütfen mesajýnýzý yazýnýz.";
$f_lang['erreur_url'] = "Girmiþ olduðunuz Website adresi geçerli deðil.";

// code de sécurité : vérification de la présence de la librairie GD2
$f_lang['admin_gd_non_activee'] = "<span class=\"texte_alerte\">Güvenlik kodu uygulamasýný kullanamazsýnýz !<br/>\n Sunucunuz GD2 fonksiyonu içermiyor. Güvenlik kodu uygulamasýnýn çalýþmasý için bu ayarlar gerekli.</span>";

// lien vers l'admin et vers la page d'accueil
$f_lang['admin_lien_admin'] = "Yönetim Paneli'ne gitmek için defterinizin altýna bir eriþim linki eklemek ister misiniz ?";
$f_lang['admin_lien_accueil'] = "Back link (Anasayfaya Dön) ansayfanýza mý yönlensin yoksa baþka bir site mi tercih edersiniz&nbsp;?";
$f_lang['admin_chemin_lien_accueil'] = "Eðer defterinizin anasayfadan baþka bir linke yönlenmesini istiyorsanýz bu seçenekten düzenleme yapabilirsiniz. FTP'den alternatif bir uzantý giriniz. (www.siteadresiniz.com/dosya2/index.html) gibi.";
$f_lang['admin_chemin_lien_accueil_erreur'] = "Girmiþ olduðunuz adres eksik. Lütfen adresinizi tam giriniz (i.e. /mypage.php).";
$f_lang['texte_lien_accueil'] = "Anasayfaya Dön";
$f_lang['texte_lien_admin'] = "Yönetim Paneli";

$f_lang['admin_retour_livre'] = "Deftere Git";

// symboles champs privés/obligatoires sur le formulaire
// /!\ Attention, maximum 90 caractères
$f_lang['information_champ_prive'] = "Sadece ziyaretçi defterinin yöneticileri özelleri görebilir.";
$f_lang['information_champ_obligatoire'] = "This field is required to post a message.";

/* Bas de page partie admin */
$f_lang['alexguestbook pub'] = "@lex Guestbook ".$alex_livre_version." - &copy; by Alexis Soulard, Pierre Gieling, Maxime Hercelin";

$f_lang['host_base'] = "Sunucu (genellikle: localhost)";

$f_lang['name_table_txt_lang'] = "Name of the table containing the customized texts (Örn: Defter baþlýðý)";

$f_lang['erreur_ecriture'] = "<b>HATA</b>, \"config/\" dosyasýna yazýlma izni verilmemiþ.<br><br>Lütfen \"config\" dosyasýnýn ayarlarýný deðiþtiriniz. (chmod 777), Daha sonra yeniden deneyiniz : <a href=\"./setup.php\"><b>Geri Dön</b></a>.";

$f_lang['options_livre'] = "Defter Ayarlarý";

$f_lang['text1'] = "<b>Sansürlenen kelimeler otomatik olarak deðiþtirilecek.<br>Eðer bir ziyaretçi uygun olmayan bir kelime girmiþse ve bu kelime de sizin sansürlediðiniz kelimeler arasýnda varsa sistem otomatik olarak o kelimeyi isteðiniz kelimeyle deðiþecektir.</b>";

/* Erreur si fichier install present */
$f_lang['erreur_fic_install_present'] = "For security reasons, to use your guestbook you have to delete file setup.php and folder update/";
?>
