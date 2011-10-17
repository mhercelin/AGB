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
$chem_absolu = "./";

//----------------------- fichiers à inclure
include($chem_absolu."config/extension.inc");
include($chem_absolu."include/livre_include.".$alex_livre_ext);
sql_select_query("*", "alex_livre_config");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title><?php echo $f_lang['avis_spammeurs']; ?></title>
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

<table border="0" width="100%" cellspacing="1" cellpadding="15" bgcolor="#000000" height="100%">
  <tr height="100%">
    <td width="100%" bgcolor="#FFFFFF" height="100%" valign="top">
	<p align="center">
	<b><font color="#CC3300" size="2"><?php echo $f_lang['avis_spammeurs']; ?></font></b></p>
	<p align="justify">
	<?php
	echo $f_lang['txt_spammeurs'];
	?></p>
	<p align="center"><input type="button" value="<?php echo $f_lang['fermer']; ?>" onclick="window.close()"></p>
    </td>
  </tr>
</table>
</body>

</html>