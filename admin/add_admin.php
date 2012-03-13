<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2012    //
//         Hercelin Maxime (c) 2005 - 2012   //
//         http://www.alexguestbook.net/     //
//             all right reserved            //
///////////////////////////////////////////////

DEFINE("AGUEST", true);
$chem_absolu = "../";

//----------------------- fichiers à inclure
include($chem_absolu."config/extension.inc");
include($chem_absolu."include/admin_include.".$alex_livre_ext);

//----------------------- on controle si le visiteur est ou non autorisé à visiter cette page
verif_page("gestion_admin");

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "ajouter_admin",
	"add_admin_texte",
	"add_admin_2",
	"identif_connexion",
	"passe_admin",
	"email_admin",
	"oui",
	"non"
);

//----------------------- ajouter
if (isset($_POST['ajouter'])){
	//on vérifie si le login n'est pas déjà pris
	$query = "SELECT id_user FROM ".$name_table['alex_livre_users']." WHERE login='".$_POST['name_admin']."'";
	$result = $f_db_connexion -> sql_query($query);

	if ($f_db_connexion->sql_numrows($result) < 1){
		$query = "INSERT INTO ".$name_table['alex_livre_users']." (login, pass, email, receive_email, modif_options, gestion_skins, gestion_reponse_auto, gestion_bdd, gestion_messages, gestion_censure, gestion_bannissement, gestion_smileys, gestion_admin, nb_mess_page) VALUES ('".$_POST['name_admin']."', '".$_POST['passe_admin']."', '".$_POST['email_admin']."', '".$_POST['receive_email']."', '".$_POST['modif_options']."', '".$_POST['gestion_skins']."', '".$_POST['gestion_reponse_auto']."', '".$_POST['gestion_bdd']."', '".$_POST['gestion_messages']."', '".$_POST['gestion_censure']."', '".$_POST['gestion_bannissement']."', '".$_POST['gestion_smileys']."', '".$_POST['gestion_admin']."', '15')";
		$result = $f_db_connexion -> sql_query($query);
		message_javascript($f_lang['ok_aj_admin']);
	}
	else{
		message_javascript($f_lang['erreur_aj_admin']);
		$erreur = 1;
	}
}

//----------------------- modifier
if (isset($_POST['modifier'])){
	$query = "UPDATE ".$name_table['alex_livre_users']." set pass='".$_POST['passe_admin']."', email='".$_POST['email_admin']."', receive_email='".$_POST['receive_email']."', modif_options='".$_POST['modif_options']."', gestion_skins='".$_POST['gestion_skins']."', gestion_reponse_auto='".$_POST['gestion_reponse_auto']."', gestion_bdd='".$_POST['gestion_bdd']."', gestion_messages='".$_POST['gestion_messages']."', gestion_censure='".$_POST['gestion_censure']."', gestion_bannissement='".$_POST['gestion_bannissement']."', gestion_smileys='".$_POST['gestion_smileys']."', gestion_admin='".$_POST['gestion_admin']."' WHERE id_user='".$_GET['id_modif']."'";
	$result = $f_db_connexion -> sql_query($query);
	message_javascript($f_lang['ok_modif_admin']);
	redirection_aguest3("gest_admin.php?f_sid=".$_GET['f_sid']);
	exit();
}

//----------------------- on récupère tous les admins
if (isset($_GET['id_modif']) && $_GET['id_modif']){
	sql_select_query("*", "alex_livre_users", "WHERE id_user='".$_GET['id_modif']."'");

	$name_admin = $alex_livre_users_login[1];
	$passe_admin = $alex_livre_users_pass[1];
	$email_admin = $alex_livre_users_email[1];

	for ($i = 1; $i <= count($tab_champs_admin); $i++){
		$chaine_assemb = ${"alex_livre_users_".$tab_champs_admin[$i]};
		${$tab_champs_admin[$i]} = transform_bool($chaine_assemb[1]);
	}
}

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

//----------------------- affichage du template
$echo_html = new ModeliXe("add_admin.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
template_type($f_lang['title add admin']);

/* langue */
generate_langue($tab_champs_langue);
generate_langue($tab_champs_admin, "admin_");

$echo_html -> MxText("erreur_name", $f_lang['erreur_name']);
$echo_html -> MxText("erreur_passe", $f_lang['erreur_passe']);
$echo_html -> MxText("erreur_email", $f_lang['erreur_email']);

/* urls */
$echo_html -> MxText("f_sid", @$_GET['f_sid']);
$echo_html -> MxText("id_modif", @$_GET['id_modif']);

if (isset($_GET['id_modif']) && $_GET['id_modif'])
	$echo_html -> MxText("name_ajouter_admin", "modifier");
else
	$echo_html -> MxText("name_ajouter_admin", "ajouter");

/* valeur des champs */
if (isset($_GET['id_modif']) && $_GET['id_modif']){
	$echo_html -> MxText("enabled_login", " disabled=\"true\"");
	$echo_html -> MxText("revenir", "&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"button\" value=\"".$f_lang['revenir']."\" class=\"normal\" onclick=\"location.href='gest_admin.php?f_sid=".$_GET['f_sid']."'\">");
}

if (isset($erreur) or (isset($_GET['id_modif']) && $_GET['id_modif'])){
	$echo_html -> MxText("value_name_admin", htmlspecialchars($name_admin));
	$echo_html -> MxText("value_passe_admin", $passe_admin);
	$echo_html -> MxText("value_email_admin", $email_admin);

	for ($i = 1; $i <= count($tab_champs_admin); $i++)
		generate_radio($tab_champs_admin, $no_config=true);
}
else{
	$echo_html -> MxText("value_name_admin", "");
	$echo_html -> MxText("value_passe_admin", "");
	$echo_html -> MxText("value_email_admin", "");

	for ($i = 1; $i <= count($tab_champs_admin); $i++)
		$echo_html -> MxText("value_".$tab_champs_admin[$i]."1", "checked");
}

$html = $echo_html -> MxWrite("", true);
echo $html;
?>