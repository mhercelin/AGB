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

if (!isset($_GET['lang_edit']) || !file_exists($chem_absolu."languages/".alphanum_only($_GET['lang_edit']).".".$alex_livre_ext))
	$_GET['lang_edit'] = $config['langue'];

//----------------------- on controle si le visiteur est ou non autorisé à visiter cette page
verif_page("modif_options");

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "titre_guestbook",
	"langue",
	"enregistrer",
	"text_titre_guestbook",
	"titre",
	"parametrage"
);


//----------------------- enregistrement des données
if (isset($_POST['enregistrer'])){
	$nbTest = countTotal("*", "alex_livre_txt_lang", "WHERE `lang`='".$_GET['lang_edit']."' and `type`='titre'");

	if (!$nbTest){
		$query = "INSERT INTO ".$name_table['alex_livre_txt_lang']." (`lang`, `type`, `msg`) VALUES ('".$_GET['lang_edit']."', 'titre', '".mysql_real_escape_string($_POST['titre'])."')";
		$result = $f_db_connexion -> sql_query($query);
	}
	else {
		$query = "UPDATE ".$name_table['alex_livre_txt_lang']." SET `msg`='".$_POST['titre']."' WHERE `lang`='".$_GET['lang_edit']."' and `type`='titre'";
		$result = $f_db_connexion -> sql_query($query);
	}

	message_javascript($f_lang['ok_save_titre']);
}

//----------------------- récupération de l'éventuel message personnalisé déjà enregistré pour la langue sélectionnée
sql_select_query("msg", "alex_livre_txt_lang", "WHERE lang='".$_GET['lang_edit']."' and `type`='titre'");

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

//----------------------- affichage du template
$echo_html = new ModeliXe("titre.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

//----------------------- on récupère toutes les langues disponibles
$liste_langues = read_rep($chem_absolu."languages/");
$option_langues = generate_options($liste_langues, $_GET['lang_edit']);

/* instanciation des blocs */
template_type(@$f_lang['title ip']);

/* langue */
generate_langue($tab_champs_langue);

/* urls */
$echo_html -> MxText("f_sid", $_GET['f_sid']);
$echo_html -> MxText("lang_edit", $_GET['lang_edit']);

/* liste des langues dispos */
$echo_html -> MxText("liste_langues", $option_langues);

/* texte du message dans la langue sélectionnée */
if (isset($alex_livre_txt_lang_msg[1]))
	$echo_html -> MxText("msg_langue", $alex_livre_txt_lang_msg[1]);
else {
	if (isset($f_lang['title_guestbook']))	
		$save_r = $f_lang['title_guestbook'];

	include($chem_absolu."languages/".$_GET['lang_edit'].".".$alex_livre_ext);

	if (isset($f_lang['title_guestbook']))
		$echo_html -> MxText("msg_langue", $f_lang['title_guestbook']);
	else if (isset($save_r))
		$echo_html -> MxText("msg_langue", $save_r);
	else
		$echo_html -> MxText("msg_langue", "");
}

$html = $echo_html -> MxWrite("", true);
echo $html;
?>