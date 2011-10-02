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
verif_page("gestion_bdd");

//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "optimisation",
	"optimisation_txt",
	"liste_tables",
	"lancer_optimisation",
	"tables",
	"pertes"
);

//----------------------- lancement de l'optimisation
if (isset($_POST['optimiser'])){
	$sql_optimise = "OPTIMIZE TABLE ";

	$query = "SHOW TABLE STATUS";
	$result = $f_db_connexion -> sql_query($query);

	$nb = 0;

	while ($row = $f_db_connexion -> sql_fetchrow($result)){
		if ($row['Data_free']){
			$nb++;
			$sql_optimise .= (($nb > 1) ? ', ' : '').'`'.$row['Name'].'`'; 
		}
	}

	// requête d'optimisation
	$result = $f_db_connexion -> sql_query($sql_optimise);
	message_javascript($f_lang['ok_optimise']);
}

//----------------------- liste des pertes
$query = "SHOW TABLE STATUS";
$result = $f_db_connexion -> sql_query($query);

$TAB_PERTES = array();

while ($row = $f_db_connexion -> sql_fetchrow($result)){
	$TAB_PERTES[$row['Name']] = $row['Data_free'];
}

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

//----------------------- affichage du template
$echo_html = new ModeliXe("optimisation.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
template_type(@$f_lang['bdd']);

/* langue */
generate_langue($tab_champs_langue);

/* urls */
$echo_html -> MxText("f_sid", $_GET['f_sid']);

/* liste des tables */
$liste_table  = '';
$liste_pertes = '';

foreach ($TAB_PERTES as $cle=>$value){
	$liste_table  .= '<tr><td style="width: 150px; text-align: left" class="row_gris">'.$cle.'</td><td style="text-align: left" bgcolor="#FFFFFF"><span style="color: '.(($value) ? 'red': 'green').'">'.number_format($value, 0, ',', ' ').' '.(($value) ? $f_lang['octets'] : '').'</span></td></tr>';
}

$echo_html -> MxText("txt_liste_tables", $liste_table);

$html = $echo_html -> MxWrite("", true);
echo $html;
?>