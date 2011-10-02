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

if (file_exists($chem_absolu."config/extension.inc")){
	include($chem_absolu."config/extension.inc");
	include($chem_absolu."include/livre_include.".$alex_livre_ext);
}
else
	exit();

// Récupération de la chaine à afficher suivant l'id passé en paramètre
$sql = "SELECT valeur FROM `".$name_table['alex_img_verif_add'] ."` WHERE numero='".$_GET['id']."'";
$result = $f_db_connexion -> sql_query($sql);
$num_valeur = $f_db_connexion -> sql_fetchrow($result);

$CurrentPath = getcwd(); 
$Pos = strrpos($CurrentPath, "/"); 

if ($Pos === false) { 
	$Pos = strrpos($CurrentPath, "\\"); 
	$DirSep = "\\"; 
} 
else 
	$DirSep = "/"; 

$chem_dossier_fonts= substr($CurrentPath,0,$Pos).$DirSep."fonts".$DirSep; 

// Génération de l'image
header("Content-type: image/png");
$im = @imagecreate (82, 20);

if (!$config['color_txt_code']) $color_txt_code = "#000000";
if (!$config['color_background_code'])  $color_background_code  = "#FFFFFF";

$tab_font_hexa = isolercolor_hexa($config['color_background_code']);
$fond = imagecolorallocate($im, $tab_font_hexa[0], $tab_font_hexa[1], $tab_font_hexa[2]);

$tab_font_hexa = isolercolor_hexa($config['color_txt_code']);
$black = imagecolorallocate($im, $tab_font_hexa[0], $tab_font_hexa[1], $tab_font_hexa[2]);

if (isset($num_valeur[0])){
	// Polices autorisées
	$tab_polices = array(1=>"courbd", "arial", "comic", "tahoma", "verdana");

	$x = 5;
	$nb_lettres = strlen($num_valeur[0]);

	for ($i=0; $i<$nb_lettres; $i++){
		$value  = $num_valeur[0][$i]; // lettre
		$value2 = rand(1, 5);  // police
		$angle  = rand(-20, 20);  // angle

		if (!@imagettftext($im, 12, $angle, $x, 16, $black, $chem_dossier_fonts.$tab_polices[$value2].".ttf", $value)){
			$chem_dossier_fonts = "";
			@imagettftext($im, 12, $angle, $x, 16, $black, dertimner_path_fonts().$tab_polices[$value2].".ttf", $value);
		}

		$x += 20;
	}
}

imagepng($im);
imagedestroy($im);
?> 