<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2011    //
//         Hercelin Maxime (c) 2005 - 2011   //
//         http://www.alexguestbook.net/     //
//             all right reserved            //
///////////////////////////////////////////////

DEFINE("AGUEST", true);
$chem_absolu = "../";

//----------------------- fichiers à inclure
include($chem_absolu."config/extension.inc");
include($chem_absolu."include/admin_include.".$alex_livre_ext);

//----------------------- on controle si le visiteur est ou non autorisé à visiter cette page
verif_page("gestion_bannissement");

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "bannissement",
	"text_ip1",
	"text_ip2",
	"ajouter_ip",
	"ajouter_pseudo",
	"ajouter_email",
	"ajouter",
	"gestion_ip",
	"gestion_pseudo",
	"gestion_email",
	"sup_ip",
	"sup_pseudo",
	"sup_email",
	"erreur_ip1",
	"erreur_ip2",
	"erreur_ip3",
	"erreur_ip4",
	"erreur_pseudo",
	"erreur_email",
	"verif_sup_ip",
	"verif_sup_pseudo",
	"verif_sup_email",
	"admin_text_pseudo",
	"admin_text_email"
);

//----------------------- ajouter une ip
if (isset($_POST['ajouter_ip'])){
	$ip = $_POST['ip1'].".".$_POST['ip2'].".".$_POST['ip3'].".".$_POST['ip4'];
	$query = "INSERT INTO ".$name_table['alex_livre_ban']." (`ip`, `pseudo`, `email`) VALUES ('".$ip."', '', '')";
	$result = $f_db_connexion -> sql_query($query);
	message_javascript($f_lang['ok_aj_ip']);
}

//----------------------- suppression des ip
if (isset($_POST['supprimer_ip'])){
	for ($i = 0; $i < count($_POST['liste_ip_bannies']); $i++){
		$query = "DELETE FROM ".$name_table['alex_livre_ban']." WHERE ip='".$_POST['liste_ip_bannies'][$i]."'";
		$result = $f_db_connexion -> sql_query($query);
	}
}

//----------------------- ajouter un pseudo
if (isset($_POST['ajouter_pseudo'])){
	$query = "INSERT INTO ".$name_table['alex_livre_ban']." (`ip`, `pseudo`, `email`) VALUES ('', '".htmlentities($_POST['pseudo'])."', '')";
	$result = $f_db_connexion -> sql_query($query);
	message_javascript($f_lang['ok_aj_pseudo']);
}


//----------------------- suppression des pseudos
if (isset($_POST['supprimer_pseudo'])){
	for ($i = 0; $i < count($_POST['liste_pseudos_bannis']); $i++){
		$query = "DELETE FROM ".$name_table['alex_livre_ban']." WHERE pseudo='".$_POST['liste_pseudos_bannis'][$i]."'";
		$result = $f_db_connexion -> sql_query($query);
	}
}

//----------------------- ajouter un email
if (isset($_POST['ajouter_email'])){
	$query = "INSERT INTO ".$name_table['alex_livre_ban']." (`ip`, `pseudo`, `email`) VALUES ('', '', '".htmlentities($_POST['email'])."')";
	$result = $f_db_connexion -> sql_query($query);
	message_javascript($f_lang['ok_aj_email']);
}

//----------------------- suppression des emails
if (isset($_POST['supprimer_email'])){
	for ($i = 0; $i < count($_POST['liste_emails_bannis']); $i++){
		$query = "DELETE FROM ".$name_table['alex_livre_ban']." WHERE email='".$_POST['liste_emails_bannis'][$i]."'";
		$result = $f_db_connexion -> sql_query($query);
	}
}

//----------------------- récupération des ips, pseudos et email bannis
sql_select_query("ip", "alex_livre_ban", "", "ORDER BY id_ban");
sql_select_query("pseudo", "alex_livre_ban", "", "ORDER BY id_ban");
sql_select_query("email", "alex_livre_ban", "", "ORDER BY id_ban");

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

//----------------------- on génère la liste des ips, pseudos et email bannis
if (isset($alex_livre_ban_ip))	$liste_option_ip = generate_options($alex_livre_ban_ip, ""); else $liste_option_ip = '';
if (isset($alex_livre_ban_pseudo))	$liste_option_pseudo = generate_options($alex_livre_ban_pseudo, ""); else $liste_option_pseudo = '';
if (isset($alex_livre_ban_email))	$liste_option_email = generate_options($alex_livre_ban_email, ""); else $liste_option_email = '';

//----------------------- affichage du template
$echo_html = new ModeliXe("bannissement.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
template_type(@$f_lang['title ban']);

/* langue */
generate_langue($tab_champs_langue);

/* urls */
$echo_html -> MxText("f_sid", $_GET['f_sid']);

/* liste des ip, pseudos et email bannis */
$echo_html -> MxText("option_ip", $liste_option_ip);
$echo_html -> MxText("option_pseudo", $liste_option_pseudo);
$echo_html -> MxText("option_email", $liste_option_email);

$html = $echo_html -> MxWrite("", true);
echo $html;
?>