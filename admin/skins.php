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

//----------------------- on controle si le visiteur est ou non autorisé à visiter cette page
verif_page("gestion_skins");

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "text1_2",
	"text2",
	"text_aj_skin",
	"ajouter",
	"gestion_skins",
	"vous_editez",
	"style",
	"ajouter_message",
	"nbre_messages_page",
	"pages_dispos",
	"texte_corps_messages",
	"espacement",
	"text_assembly",
	"enregistrer",
	"ajouter",
	"supprimer",
	"text_sup_skin",
	"see_skin"
);

//----------------------- inclusion de fichiers utiles à la page des skins
include($chem_absolu."include/funct_write_files.".$alex_livre_ext);

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

if (!isset($_GET['skin_edit']))
	$_GET['skin_edit'] = $config['skin_to_use'];

$tab_template_guestbook = array(
	1 => "alex_livre.css",
	"add_message.htm",
	"nb_message_page.htm",
	"list_pages.htm",
	"corps_messages.htm",
	"space.htm",
	"assembly.htm"
);

for ($i=1; $i<=count($tab_template_guestbook); $i++)
	${preg_replace('/.htm|.css/', '', $tab_template_guestbook[$i])} = read_page($chem_absolu.'templates/skins/'.$_GET['skin_edit'].'/'.$tab_template_guestbook[$i]);

//----------------------- création d'un nouveau skin
if (isset($_POST['ajouter'])){
	if (@mkdir($chem_absolu."templates/skins/".$_POST['aj_skin']."/", 0755)){
		message_javascript($f_lang['ok_ajouter']);
	}
	else{
		message_javascript($f_lang['erreur_ajouter']);
	}
}

//----------------------- suppression d'un skin
if (isset($_POST['supprimer'])){
	$erreur_sup = false;

	//suppression des fichiers
	for ($i=1; $i<=count($tab_template_guestbook); $i++){
		$fic_sup = $chem_absolu."templates/skins/".$_POST['skin_sup']."/".$tab_template_guestbook[$i];
		@chmod($fic_sup, 0777);
		if (!@unlink($fic_sup) && file_exists($fic_sup))
			$erreur_sup = true;
	}

	//suppression du répertoire
	$rep_sup = $chem_absolu."templates/skins/".$_POST['skin_sup']."/";
	@chmod($rep_sup, 0777);
	if (!@rmdir($rep_sup))
		$erreur_sup = true;

	if (!$erreur_sup){
		message_javascript($f_lang['ok_supprimer']);
	}
	else{
		message_javascript($f_lang['erreur_supprimer']);
	}
}

//----------------------- enregistrement d'un skin
if (isset($_POST['enregistrer'])){
	$erreur_in_write = false;
	$write_object = new write_files();

	for ($i=1; $i<=count($tab_template_guestbook); $i++){
		$champ_edit = preg_replace('.htm|.css', '', $tab_template_guestbook[$i]);

		$write_object -> save_donnees(stripslashes($_POST[$champ_edit]));
		if (!$write_object -> write($chem_absolu."templates/skins/".$_GET['skin_edit']."/".$tab_template_guestbook[$i]))
			$erreur_in_write = true;
		
		$write_object -> init_donnes();
		${$champ_edit} = $_POST[$champ_edit];
	}

	if (!$erreur_in_write)
		message_javascript($f_lang['ok_edit_skin']);
	else
		message_javascript($f_lang['erreur_edit_skin']);
}

//----------------------- affichage du template
$echo_html = new ModeliXe("skins.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

//----------------------- on récupère tous les skins disponibles
$liste_rep = read_rep($chem_absolu."templates/skins/", "rep");
$option_rep = generate_options($liste_rep, $_GET['skin_edit'], "skins.php?f_sid=".$_GET['f_sid']."&skin_edit=");
$option_sup = generate_options($liste_rep, "");

/* instanciation des blocs */
template_type($f_lang['title skins']);

/* langues */
generate_langue($tab_champs_langue);

$echo_html -> MxText("liste_skin_to_use", $option_rep);
$echo_html -> MxText("liste_skin_sup", $option_sup);

/* urls */
$echo_html -> MxText("f_sid", $_GET['f_sid']);
$echo_html -> MxText("text_skin_edit", $_GET['skin_edit']);

/* apercu du skin */
if (!empty($config['fichier_inclusion']))
	$echo_html -> MxText("skin_apercu", $config['fichier_inclusion']);
else 
	$echo_html -> MxText("skin_apercu", '../index.php');

/* valeurs des textarea */
$echo_html -> MxText("alex_livre", htmlspecialchars(stripslashes($alex_livre)));
$echo_html -> MxText("add_message", htmlspecialchars(stripslashes($add_message)));
$echo_html -> MxText("nb_message_page", htmlspecialchars(stripslashes($nb_message_page)));
$echo_html -> MxText("list_pages", htmlspecialchars(stripslashes($list_pages)));
$echo_html -> MxText("corps_messages", htmlspecialchars(stripslashes($corps_messages)));
$echo_html -> MxText("space", htmlspecialchars(stripslashes($space)));
$echo_html -> MxText("assembly", htmlspecialchars(stripslashes($assembly)));

$html = $echo_html -> MxWrite("", true);
echo $html;
?>