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
include($chem_absolu."include/zip.lib.php");

//----------------------- on controle si le visiteur est ou non autorisé à visiter cette page
verif_page("gestion_bdd");

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "sauvegarde",
	"txt_sauvegarde",
	"lancer_sauvegarde"
);

//----------------------- lancement de la sauvegarde
if (isset($_POST['sauvegarder'])){
	$SQL_SAUVEGARDE = "-- @lex Guestbook Backup\n-- version ".$alex_livre_version."\n-- By Alexis Soulard, Pierre Gieling, Maxime Hercelin (c)\n-- http://www.alexguestbook.net\n-- Date : ".date($config['format_date'].' H:i:s', time())."\n\n";

	// 1) Création des énoncés DROP TABLE
	foreach ($name_table as $value)
		$SQL_SAUVEGARDE .= "DROP TABLE IF EXISTS `".$value."`;\n";

	// 2) Lecture de la structure des tables
	$tab_structure_sql = file($chem_absolu."db/sql/alex_livre5.sql");
	$structure_sql = '';

	foreach ($tab_structure_sql as $value){
		if (substr($value, 0, 1) != "#" && substr($value, 0, 11) != "INSERT INTO")
			$structure_sql .= $value;
	}

	/* remplacement du nom des tables */
	foreach ($name_table as $cle=>$value){
		$cle = str_replace("alex", "table", str_replace("alex_livre", "table", $cle));
		$structure_sql = str_replace("<".$cle.">", $value, $structure_sql);	
	}

	$SQL_SAUVEGARDE .= "\n".$structure_sql."\n\n";

	// 3) Liste des données
	foreach ($name_table as $value){
		$SQL_SAUVEGARDE .= "-- `".$value."` DATAS\n\n";

		$query = "SELECT * FROM `".$value."`";
		$result = $f_db_connexion -> sql_query($query);

		while ($row = $f_db_connexion -> sql_fetchrow($result)){
			$SQL_SAUVEGARDE .= "INSERT INTO `".$value."` VALUES (";
			$nb = count($row)/2;
			$count = 0;
			
			foreach ($row as $cle=>$val_champ){
				if ($cle == "0" || trim((int)$cle))
					continue;

				$count++;
				$SQL_SAUVEGARDE .= "'".str_replace(chr(10), "\\n", str_replace(chr(13), "\\r", addslashes($val_champ)))."'".(($count < $nb) ? ', ' : '');
			}

			$SQL_SAUVEGARDE .= ");\n";
		}

		$SQL_SAUVEGARDE .= "\n";
	}

	// Entetes
	header('Content-Type: application/x-zip');
	header('Expires: ' . gmdate('D, d M Y H:i:s') . ' GMT');
	$filename = "alex_guestbook_backup_".preg_replace('#/|-#i', '_', date($config['format_date'], time())).".zip";

	$broswer = strtoupper($_SERVER['HTTP_USER_AGENT']);

	if (strpos($broswer, 'IE') && !strpos($broswer, 'OPERA')) {
		header('Content-Disposition: inline; filename="' . $filename . '"');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
	} else {
		header('Content-Disposition: attachment; filename="' . $filename . '"');
		header('Pragma: no-cache');
	}

	// Création du fichier zip
	$zipfile = new zipfile();

	// Ajout du fichier au zip
	$zipfile -> addFile(str_replace("\n", chr(13).chr(10), $SQL_SAUVEGARDE), str_replace(".zip", ".sql", $filename));
	
	// Envoi des données au navigateur
	exit($zipfile -> file());
}

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

//----------------------- affichage du template
$echo_html = new ModeliXe("sauvegarde.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
template_type(@$f_lang['sauvegarde']);

/* langue */
generate_langue($tab_champs_langue);

/* urls */
$echo_html -> MxText("f_sid", $_GET['f_sid']);

$html = $echo_html -> MxWrite("", true);
echo $html;
?>