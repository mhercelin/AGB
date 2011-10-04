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
$chem_absolu = "./";

//----------------------- fichiers à inclure
include($chem_absolu."config/extension.inc");
include($chem_absolu."include/livre_include.".$alex_livre_ext);
sql_select_query("*", "alex_livre_config");

//----------------------- on récupère tous les smileys
sql_select_query("*", "alex_livre_smileys", "", "ORDER BY numero");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title><?php echo $f_lang['liste_all_smilies']; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $SCRIPT_ENCODAGE; ?>">
<style type="text/css">
BODY, TABLE {
	font-family: Verdana;
	font-size: 8pt;
}

INPUT {
	color : #000000;
	font: normal 10px Verdana, Arial, Helvetica, sans-serif;
	border-color : #000000;
	border-style: solid; 
	border-width: 1;
	cursor: hand;
}
</style>
</head>

<body bgcolor="#F8F8F8">
<script language="javascript" type="text/javascript">
<!--
window.focus();
//-->
</script>

<div style="border: 1px solid #000000; text-align: center; padding: 12px; background-color: #FFFFFF">
<?php 
for ($i=1; $i<=$nb_champs_alex_livre_smileys; $i++)
	echo "<img src=\"".$chem_absolu."images/smileys/".$alex_livre_smileys_smiley[$i]."\"  alt=\"\" title=\"".ucfirst(str_replace("_", " ", preg_replace('/[.]{1}(.)*$/i', '', $alex_livre_smileys_smiley[$i])))."\" style=\"border: 0px; cursor: pointer; margin: 2px\" align=\"middle\" onclick=\"window.opener.focus(); window.opener.smiley('".$alex_livre_smileys_car_replace[$i]."'); window.close();\" /> ";
?>

<br /><br />
<input type="button" value="<?php echo $f_lang['fermer']; ?>" onclick="window.close()">
</div>
</body>

</html>