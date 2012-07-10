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
verif_page("modif_options");

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "boite_java",
	"enregistrer",
	"text_boite_java",
	"parametrage_modele",
	"format_date_boite",
	"nbre_maxi_pseudo_boite",
	"nbre_maxi_message_boite",
	"modele_affichage_donnees",
	"url_dossier_livre_boite",
	"url_livre_boite",
	"generer_code",
	"nom_msg_afficher",
	"generation_code",
	"code_a_copier",
	"erreur_boite_java",
	"saut_ligne_msg_boite",
	"oui",
	"non"
);


//----------------------- enregistrement des données
if (isset($_POST['enregistrer'])){
	$nbTest = countTotal("*", "alex_livre_txt_lang", "WHERE `type`='boite'");

	$chaineTxt = supSpace($_POST['date'])."	".(int)trim(supSpace($_POST['maxi_pseudo']))."	".(int)trim(supSpace($_POST['maxi_message']))."	".supSpace($_POST['url_dossier'])."	".supSpace($_POST['url_livre'])."	".supSpace($_POST['saut_ligne'])."	".supSpace($_POST['modele_tpl']);

	if (!$nbTest){
		$query = "INSERT INTO ".$name_table['alex_livre_txt_lang']." (`lang`, `type`, `msg`) VALUES ('', 'boite', '".$chaineTxt."')";
		$result = $f_db_connexion -> sql_query($query);
	}
	else {
		$query = "UPDATE ".$name_table['alex_livre_txt_lang']." SET `msg`='".$chaineTxt."' WHERE `type`='boite'";
		$result = $f_db_connexion -> sql_query($query);
	}

	message_javascript($f_lang['ok_save_boite']);
}

//----------------------- récupération des données enregistrées
sql_select_query("msg", "alex_livre_txt_lang", "WHERE `type`='boite'");

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

//----------------------- affichage du template
$echo_html = new ModeliXe("boite_java.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
template_type(@$f_lang['boite_java']);

/* langue */
generate_langue($tab_champs_langue);

/* urls */
$echo_html -> MxText("f_sid", $_GET['f_sid']);

/* donnees */
if (isset($alex_livre_txt_lang_msg[1]))
	$TAB_DONNEES_BOITE = explode("	", $alex_livre_txt_lang_msg[1]);

if (isset($TAB_DONNEES_BOITE[0]))
	$echo_html -> MxText("value_date", htmlspecialchars($TAB_DONNEES_BOITE[0]));
else
	$echo_html -> MxText("value_date", "d/m/Y H:i:s");

if (isset($TAB_DONNEES_BOITE[1]))
	$echo_html -> MxText("value_maxi_pseudo", htmlspecialchars($TAB_DONNEES_BOITE[1]));
else
	$echo_html -> MxText("value_maxi_pseudo", "30");

if (isset($TAB_DONNEES_BOITE[2]))
	$echo_html -> MxText("value_maxi_message", htmlspecialchars($TAB_DONNEES_BOITE[2]));
else
	$echo_html -> MxText("value_maxi_message", "400");

if (isset($TAB_DONNEES_BOITE[3]))
	$echo_html -> MxText("value_url_dossier", htmlspecialchars($TAB_DONNEES_BOITE[3]));
else
	$echo_html -> MxText("value_url_dossier", findHost());

if (isset($TAB_DONNEES_BOITE[4]))
	$echo_html -> MxText("value_url_livre", htmlspecialchars($TAB_DONNEES_BOITE[4]));
else
	$echo_html -> MxText("value_url_livre", findHost().$config['url_recharger']);

if (isset($TAB_DONNEES_BOITE[5]))
	$value_saut_ligne = $TAB_DONNEES_BOITE[5];
else
	$value_saut_ligne = 0;

$echo_html -> MxText("value_saut_ligne".$value_saut_ligne, " checked");

if (isset($TAB_DONNEES_BOITE[6]))
	$echo_html -> MxText("value_modele_tpl", htmlspecialchars($TAB_DONNEES_BOITE[6]));
else
	$echo_html -> MxText("value_modele_tpl", htmlspecialchars(defautHtmlBoite()));

$echo_html -> MxWrite();
?>