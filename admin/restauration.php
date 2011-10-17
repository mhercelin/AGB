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
@set_time_limit(0);

//----------------------- fichiers à inclure
include($chem_absolu."config/extension.inc");
include($chem_absolu."include/admin_include.".$alex_livre_ext);
include($chem_absolu."include/read_backup.".$alex_livre_ext);

//----------------------- on controle si le visiteur est ou non autorisé à visiter cette page
verif_page("gestion_bdd");

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "restauration",
	"txt_restauration",
	"lancer_restauration",
	"select_file",
	"confirm_restauration",
	"select_file_restau"
);

//----------------------- lancement de la restauration
if (isset($_POST['restauration'])){
	$extension = extension($_FILES['fichier']['name']);

	// Récupération des données SQL
	if ($extension == "zip"){
		if (function_exists('zip_open')){
			$zip = @zip_open($_FILES['fichier']['tmp_name']);

			if ($zip) {
				$zip_entry = @zip_read($zip);

				if (@zip_entry_open($zip, $zip_entry, "r")) {
					$DATAS_SQL = @zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
					zip_entry_close($zip_entry);
				}
				else
					$erreur_zip = true;
			}
			else
				$erreur_zip = true;

			if (isset($erreur_zip))
				message_javascript($f_lang['erreur_zip']);
		}
		else
			message_javascript($f_lang['erreur_ext_zip']);
	}
	else if ($extension == "sql"){
		$DATAS_SQL = read_page($_FILES['fichier']['tmp_name']);
	}
	else
		message_javascript($f_lang['erreur_ext_restau']);

	// Traitement des données SQL
	if (isset($DATAS_SQL)){
		// Vérification du fichier SQL à traiter
		if (substr($DATAS_SQL, 0, 24) != '-- @lex Guestbook Backup')
			message_javascript($f_lang['erreur_read_sql']);
		else {
			// Lecture des données SQL à traiter
			$pieces = array();
			PMA_splitSqlFile($pieces, $DATAS_SQL);

			// Exécution des requêtes
			foreach ($pieces as $value)
				$f_db_connexion -> sql_query($value['query']);

			message_javascript($f_lang['restauration_terminee']);
		}
	}
}

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

//----------------------- affichage du template
$echo_html = new ModeliXe("restauration.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
template_type(@$f_lang['restauration']);

/* langue */
generate_langue($tab_champs_langue);

/* urls */
$echo_html -> MxText("f_sid", $_GET['f_sid']);

$html = $echo_html -> MxWrite("", true);
echo $html;
?>