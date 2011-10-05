<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2008    //
//         Hercelin Maxime (c) 2005 - 2008   //
//         http://www.alexguestbook.net/     //
//             all right reserved            //
///////////////////////////////////////////////

DEFINE("AGUEST", true);
$chem_absolu = "../";

//----------------------- fichiers à inclure
include($chem_absolu."config/extension.inc");
include($chem_absolu."include/admin_include.".$alex_livre_ext);

if (file_exists($chem_absolu."languages/flags/".$config['langue'].".".$alex_livre_ext))
	include($chem_absolu."languages/flags/".$config['langue'].".".$alex_livre_ext);
else
	include($chem_absolu."languages/flags/english.".$alex_livre_ext);

//----------------------- on controle si le visiteur est ou non autorisé à visiter cette page
verif_page("gestion_messages");

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "modif_mess",
	"message_modif",
	"nom_modif",
	"email_modif",
	"site_web_modif",
	"note_modif",
	"ville_pays_modif",
	"date_modif",
	"ip_modif",
	"revenir",
	"enregistrer",
	"oui",
	"non",
	"info_mess_valide",
	"ville_modif",
	"pays_modif",
	"flag"
);

//----------------------- enregistrement des modifications
if (isset($_POST['modifier'])){
	if ($_POST['site_web'] && substr($_POST['site_web'], 0, 7) != 'http://')
		$_POST['site_web'] = 'http://'.$_POST['site_web'];
	if ($_POST['site_web'] && trim($_POST['site_web']) == 'http://')
		$_POST['site_web'] = '';

	$tab_date = explode("-", str_replace("/", "-", $_POST['date']));
	$tab_year = explode(" ", $tab_date[2]);
	$tab_hour = explode(":", $tab_year[1]);
	$date_format = mktime($tab_hour[0], $tab_hour[1], $tab_hour[2], $tab_date[1], $tab_year[0], $tab_date[0]);

	$query = "UPDATE ".$name_table['alex_livre_messages']." SET nom='".ucfirst($_POST['nom'])."', email='".$_POST['email']."', site='".$_POST['site_web']."', ville_pays='".ucfirst($_POST['ville_pays'])."', pays='".$_POST['pays']."', message='".$_POST['message']."', ip='".$_POST['ip1'].".".$_POST['ip2'].".".$_POST['ip3'].".".$_POST['ip4']."', time='".$date_format."' WHERE id='".$_GET['id_mess']."'";
	$result = $f_db_connexion -> sql_query($query);

	message_javascript($f_lang['ok_modif_mess']);
	redirection_aguest3("gestion_mess.php?f_sid=".$_GET['f_sid']."&debut=".$_GET['debut']);
	exit();
}

//----------------------- on récupère les infos sur le message en cours
sql_select_query("*", "alex_livre_messages", "WHERE id=".int_only($_GET['id_mess'], 1));

//----------------------- on récupère tous les smileys
sql_select_query("*", "alex_livre_smileys", "", "ORDER BY numero");

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

//----------------------- affichage du template
$echo_html = new ModeliXe("modif_mess.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
template_type($f_lang['title modif mess']);

/* langue */
generate_langue($tab_champs_langue);

/* urls */
$echo_html -> MxText("f_sid", $_GET['f_sid']);
$echo_html -> MxText("debut", $_GET['debut']);
$echo_html -> MxText("id_mess", $_GET['id_mess']);

/* création de la chaine html des smileys */
$chaine_smileys = "";

if (!isset($config['nb_max_smileys']) || !$config['nb_max_smileys']) $config['nb_max_smileys'] = $nb_champs_alex_livre_smileys;
if ($config['nb_max_smileys'] > $nb_champs_alex_livre_smileys) $config['nb_max_smileys'] = $nb_champs_alex_livre_smileys;

for ($i = 1; $i <= $config['nb_max_smileys']; $i++){
	$chaine_smileys .= "<img src=\"".$chem_absolu."images/smileys/".$alex_livre_smileys_smiley[$i]."\" alt=\"\" title=\"".ucfirst(str_replace("_", " ", preg_replace('/[.]{1}(.)*$/i', '', $alex_livre_smileys_smiley[$i])))."\" style=\"border: 0px; cursor: pointer; vertical-align: middle\"  onclick=\"smiley('".$alex_livre_smileys_car_replace[$i]."');\" />";

	if ($i < $nb_champs_alex_livre_smileys)
		$chaine_smileys .= " ";
}

/* S'il reste des smileys à afficher */
if ($nb_champs_alex_livre_smileys > $config['nb_max_smileys'])
	$chaine_smileys .= "&nbsp;<img src=\"".$chem_absolu."templates/admin/images/plus_smileys.png\" width=\"9\" height=\"15\" alt=\"\" title=\"".$f_lang['plus_smileys']."\" style=\"border: 0px; cursor: pointer; vertical-align: middle\" onclick=\"script_popup('".$chem_absolu."smileys.php', 'smileys_list', 250, 250, 'resizable=yes, scrollbars=yes')\" />";

$echo_html -> MxText("liste_smileys", $chaine_smileys);

/* valeurs des champs */
$echo_html -> MxText("value_nom", htmlspecialchars($alex_livre_messages_nom[1]));
$echo_html -> MxText("value_email", htmlspecialchars($alex_livre_messages_email[1]));
$echo_html -> MxText("value_site_web", htmlspecialchars($alex_livre_messages_site[1]));
$echo_html -> MxText("value_note", (($alex_livre_messages_note[1]) ? $alex_livre_messages_note[1] : "-"));
$echo_html -> MxText("value_ville_pays", htmlspecialchars($alex_livre_messages_ville_pays[1]));
$echo_html -> MxText("value_message", htmlspecialchars($alex_livre_messages_message[1]));
$echo_html -> MxText("value_date", date("Y-m-d H:i:s", $alex_livre_messages_time[1]));

// gestion de l'ip
$alex_livre_messages_ip = explode(".", $alex_livre_messages_ip[1]);
$echo_html -> MxText("value_ip1", $alex_livre_messages_ip[0]);
$echo_html -> MxText("value_ip2", $alex_livre_messages_ip[1]);
$echo_html -> MxText("value_ip3", $alex_livre_messages_ip[2]);
$echo_html -> MxText("value_ip4", $alex_livre_messages_ip[3]);

// pays
$FLAGS_LANG = array_unique($FLAGS_LANG);
asort($FLAGS_LANG);
$select_pays_value = '';

foreach ($FLAGS_LANG as $cle=>$value){
	$select_pays_value .= '<option value="'.$cle.'"'.(($cle==$alex_livre_messages_pays[1]) ? ' selected="selected"' : '').'>'.$value.'</option>';
}

$echo_html -> MxText("select_pays", $select_pays_value);

// drapeau
if ($alex_livre_messages_pays[1] && isset($FLAGS_LANG[$alex_livre_messages_pays[1]]))
	$echo_html -> MxText("img_flags", "flags/".$alex_livre_messages_pays[1].".png");
else
	$echo_html -> MxText("img_flags", "blank.gif");

$html = $echo_html -> MxWrite("", true);
echo $html;
?>