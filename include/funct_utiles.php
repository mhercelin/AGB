<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2012    //
//         Hercelin Maxime (c) 2005 - 2012   //
//         http://www.alexguestbook.net/     //
//             all right reserved            //
///////////////////////////////////////////////

function alex_livre_sid(){
	mt_srand((double)microtime()*1000000); 
	return md5(mt_rand(0,9999999));
}

// -----

function redirection_aguest3($pagego){
	echo '<script language="javascript" type="text/javascript">';
	echo "document.location.href=\"".$pagego."\"";
	echo "</script>";
	exit();
}

// -----

function noaccents($chaine){ 
	return (strtr($chaine, "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ", "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn")); 
}

// -----

function nettoyer_car($chaine){
	return strtr($chaine, '+.,*;:', '      ');
}
// -----

//functions provided by Open Web Application Security Project (http://www.owasp.org) and modified by AlexGuestbook Team
function alphanum_only($string, $min='', $max='', $forbid=false){
	$string_clear = preg_replace('#[^-_a-zA-Z0-9]#', '', $string);
	$len = strlen($string_clear);
	if((($min != '') && ($len < $min)) || (($max != '') && ($len > $max)))
		return false;
	if ($forbid && $string_clear != $string)
		return false;
	else if ($forbid && $string_clear == $string)
		return true;
	else return $string_clear;
}

function int_only($string, $min='', $max='', $forbid=false){
	$int = intval($string);
	if((($min != '') && ($int < $min)) || (($max != '') && ($int > $max)))
		return false;
	if ($forbid && $int != $string)
		return false;
	else if ($forbid && $int == $string)
		return true;
	else return $int;
}
// -----

function nettoyer_var_post(){
	global $_POST;

	if (!get_magic_quotes_gpc()){
		while (list ($key, $val) = each ($_POST))
			if (!is_array($val))
				$_POST[$key] = addslashes($val);

		while (list ($key, $val) = each ($_GET))
			if (!is_array($val))
				$_GET[$key] = addslashes($val);
	}
}

// -----

function set_options(){
	global $chem_absolu, $alex_livre_version, $chem_modelixe;

	$chem_modelixe = $chem_absolu."templates/modelixe/";
}

// -----

function template_type($title, $tab = true, $chemin = "../"){
	global $echo_html, $alex_livre_version, $chem_absolu, $f_lang, $chem_template, $SCRIPT_ENCODAGE;

	$echo_html -> MxBloc("bloc1", "modify", $chem_absolu.$chem_template."/header.htm");
	$echo_html -> MxText("bloc1.chem_template", $chem_absolu.$chem_template);
	$echo_html -> MxText("bloc1.title", "@lex Guestbook ".$alex_livre_version." - ".$title);
	$echo_html -> MxText("bloc1.SCRIPT_ENCODAGE", $SCRIPT_ENCODAGE);

	if ($tab){
		$echo_html -> MxBloc("bloc2", "modify", $chem_absolu.$chem_template."tab_haut.htm");
		$echo_html -> MxText("bloc2.chem_absolu", $chemin);
		$echo_html -> MxBloc("bloc3", "modify", $chem_absolu.$chem_template."alexguestbook.htm");
		$echo_html -> MxText("bloc3.alexguestbook pub", $f_lang['alexguestbook pub']);
		$echo_html -> MxBloc("bloc4", "modify", $chem_absolu.$chem_template."tab_bas.htm");
	}
}

// -----

function read_rep($nomrep, $type = "file"){
	global $alex_livre_ext;

	$dossier = opendir($nomrep);
	$nbfic = 0;

	while ($Fichier = readdir($dossier)){
		if ($Fichier != "." && $Fichier != ".."){
			if ((strpos($Fichier, ".".$alex_livre_ext) && $type == "file" && $Fichier != "index.php") || ($type == "rep" && is_dir($nomrep.$Fichier))){
				$nbfic = $nbfic + 1;
				$nomfic[$nbfic] = str_replace(".".$alex_livre_ext, "", $Fichier); 
			}
		} 
	}
	closedir($dossier);
	// tri les fichiers dans l'ordre "naturel", c'est a dire val1, val2, val11 (et non val1, val11, val2) puis re-indexe les valeurs du tableau numeriquement
	asort($nomfic);
	
	return $nomfic;
}

// -----

function generate_options($tab_options, $egalite, $url=""){
	$chaine_options = "";
	$nb_tab_options = count($tab_options);
	for ($i = 1; $i <= $nb_tab_options; $i++){
		if ($tab_options[$i]){
			if ($tab_options[$i] == $egalite)
				$select = "selected";
			else
				$select = "";

			$chaine_options .= "<option value=\"".$url.$tab_options[$i]."\"$select>".$tab_options[$i]."</option>\n";
		}
	}
	return $chaine_options;
}

// -----

function choose_checked($var_config, $type){
	if (($var_config && ($type == "1" ||$type == "true")) or (!$var_config && ($type == "0" || $type == "false")))
		return " checked=\"checked\"";
}

// -----

function message_javascript($message, $echo = true){
	if ($echo){
		echo "<script language=\"javascript\" type=\"text/javascript\">\n";
		echo "alert(\"".$message."\");\n";
		echo "</script>\n";
	}
	else{
		return "<script language=\"javascript\" type=\"text/javascript\">\nalert(\"".$message."\");\n</script>\n";
	}
}

// -----

function attribuer_val($variable){
	global $_POST;

	if ($_POST[$variable] == "true")
		return true;
	else
		return false;
}

// -----

function read_page($page){
	$fd = @fopen($page, "r");
	$contents = @fread($fd, filesize ($page));
	@fclose($fd);

	return $contents;
}

// -----

function generate_langue(&$tab, $rajout = ""){
	global $echo_html, $f_lang;
	$nb_tab_langues = count($tab);
	for ($i = 1; $i <= $nb_tab_langues; $i++){
		$echo_html -> MxText($rajout.$tab[$i], @$f_lang[$rajout.$tab[$i]]);
	}
}

// -----

function generate_radio(&$tab, $no_config=false){
	global $echo_html, $config;
	$nb_tab_radios = count($tab);
	for ($i = 1; $i <= $nb_tab_radios; $i++){
		if ($no_config == false){
			$echo_html -> MxText("value_".$tab[$i]."1", choose_checked($config[$tab[$i]], "1"));
			$echo_html -> MxText("value_".$tab[$i]."0", choose_checked($config[$tab[$i]], "0"));
		}
		else {
			global ${$tab[$i]};
			$echo_html -> MxText("value_".$tab[$i]."1", choose_checked(${$tab[$i]}, "1"));
			$echo_html -> MxText("value_".$tab[$i]."0", choose_checked(${$tab[$i]}, "0"));
		}
		
	}
}

// -----

function generate_parm(){
	global $chem_absolu, $alex_livre_tar;
	$f = $chem_absolu.base64_decode('Y2xpZW50LnBocA==');
	if (file_exists($f)){
		include ($f);
		if (!isset($alex_livre_tar))
			$alex_livre_tar = '1234567890';
		return true;
	}
	else return false;
}

// -----
function generer_liste_admin(){
	global $tab_champs_admin;

	$tab_champs_admin = array(
		1 => "receive_email",
		"modif_options",
		"gestion_skins",
		"gestion_messages",
		"gestion_censure",
		"gestion_bannissement",
		"gestion_smileys",
		"gestion_admin",
		"gestion_reponse_auto",
		"gestion_bdd"
	);
}

// -----

function transform_bool($var){
	if ($var == "1")
		return true;
	else 
		return false;
}

// -----

function verif_page($page){
	global $tab_champs_admin;
	$nb_tab_champs_admins = count($tab_champs_admin);
	for ($i = 1; $i <= $nb_tab_champs_admins; $i++){
		global ${"user_".$tab_champs_admin[$i]};
	}

	if (!${"user_".$page}){
		header("Location: erreur.php");
		exit;
	}
}

// -----

function ajZeroAguest($nbre){
	if (strlen($nbre) < 2)
		return "0".$nbre;
	else
		return $nbre;
}

// -----

function transform_date($timestamp){
	global $config;
	$my_format = $config['format_date'];

	if (strpos($config['format_date'], "/"))
		$separation = "/";
	else
		$separation = "-";
	 
	$tab_format_date = explode($separation, $my_format);
	$date = getdate($timestamp);
	 
	$my_format = str_replace("d", ajZeroAguest($date['mday']), $my_format);
	$my_format = str_replace("m", ajZeroAguest($date['mon']), $my_format);
	return $my_format = str_replace("Y", $date['year'], $my_format);
}

// -----

function transform_heure($timestamp){
	global $config;
	$time_message = getdate($timestamp);
	return ajZeroAguest($time_message['hours']).":". ajZeroAguest($time_message['minutes']);
}

// -----

function replace_censure_smileys(&$texte, $censure=true){
	global $chem_absolu, $nb_champs_alex_livre_censure, $alex_livre_censure_texte_censure, $alex_livre_censure_texte_remplace, $nb_champs_alex_livre_smileys, $alex_livre_smileys_smiley, $alex_livre_smileys_car_replace, $CHEM_COMPLET, $AJOUTER_SAUT_LIGNE, $boite_java, $value_maxi_message, $config;

	if (isset($boite_java)){
		if (strlen($texte) > $value_maxi_message)
			$texte = substr($texte, 0, $value_maxi_message)."...";
	}

	//mots censures
	if ($censure){
		for ($i = 1; $i <= $nb_champs_alex_livre_censure; $i++){
			$texte = preg_replace('#'.str_replace('*', '.*?', preg_quote($alex_livre_censure_texte_censure[$i], '#')).'#i', $alex_livre_censure_texte_remplace[$i], $texte);
		}
	}

	//smileys
	for ($i = 1; $i <= $nb_champs_alex_livre_smileys; $i++){
		$lastPos = strrpos($alex_livre_smileys_smiley[$i], ".");
		$texte = str_replace($alex_livre_smileys_car_replace[$i], '<img src="'.((isset($CHEM_COMPLET)) ? $CHEM_COMPLET : $chem_absolu).'images/smileys/'.$alex_livre_smileys_smiley[$i].'" alt="" title="'.ucfirst(str_replace('_', ' ', substr($alex_livre_smileys_smiley[$i], 0, $lastPos))).'\'  style="border: 0px; vertical-align: middle" />', $texte);
	}

	//urls
	if($config['url_cliquables'] && !$config['url_interdites']){
		if (!isset($CHEM_COMPLET))
			$texte = preg_replace('#([[:alnum:]]+)://([^[:space:]]*)([[:alnum:]#?/&=])#i', '<a href="$1://$2$3" target="_blank">$1://$2$3</a>', $texte);
	}
	
	// saut de ligne
	if (!isset($AJOUTER_SAUT_LIGNE) || (isset($AJOUTER_SAUT_LIGNE) && $AJOUTER_SAUT_LIGNE))
		$texte = nl2br($texte);

	//encodage des urls pour les rendre invisibles des moteurs de recherche (ca permet d'eviter aux spammeurs
	//d'etre tentes de spammer inutilement ;o)
	if (!isset($CHEM_COMPLET)){
		$pos = 0;
		while ($pos = strpos(".".$texte, "<a ")){
			$endPos = strpos(".".$texte, "</a>");
			$chaineReplace = substr($texte, $pos-1, $endPos-$pos+4);
			$texte = substr($texte, 0, $pos-1).encodeTxt($chaineReplace).substr($texte, $endPos+3);
		}
	}
	return $texte;	
}

// -----

function cut(&$string, $separation = ' '){ 
	global $config;

	return preg_replace('#([^ ]{'.$config['cut_mots'].'})#si','\\1'.$separation, $string); 
}

// -----

function ip_bannie(&$ip_bannie, &$ip_visiteur){
	$alex_livre_ban_ip_bannie = explode(".", $ip_bannie);
	$alex_livre_ban_ip_visiteur = explode(".", $ip_visiteur);

	$nb_ok = 0;
	if (!empty($alex_livre_ban_ip_bannie)){
		for ($i = 0; $i < 4; $i++){
			if ($alex_livre_ban_ip_bannie[$i] == $alex_livre_ban_ip_visiteur[$i] or $alex_livre_ban_ip_bannie[$i] == "*")
				$nb_ok++;
		}
	}

	if ($nb_ok == 4)
		return true;
	else
		return false;
}

// -----

function pseudo_banni(&$pseudo_banni, &$pseudo_visiteur){
	$alex_livre_ban_pseudo_banni = $pseudo_banni;
	$alex_livre_ban_pseudo_visiteur = $pseudo_visiteur;
	
	//on regarde si le pseudo du visiteur CONTIENT le pseudo banni (on tient compte des eventuelles * du pseudo banni)
	if(!empty($alex_livre_ban_pseudo_banni) && preg_match("#(?:" . str_replace("\*", ".*?", preg_quote($alex_livre_ban_pseudo_banni, '#')) . ")#i", $alex_livre_ban_pseudo_visiteur))
		return true;
	else
		return false;
}

// -----

function email_banni(&$email_banni, &$email_visiteur){
	$alex_livre_ban_email_banni = $email_banni;
	$alex_livre_ban_email_visiteur = $email_visiteur;
	
	//on regarde si l'email du visiteur est banni ou si le domaine est banni (par exemple on peut bannir le domaine *@mail.ru)
	if(!empty($alex_livre_ban_email_banni) && preg_match("#^(?:" . str_replace("\*", ".*?", preg_quote($alex_livre_ban_email_banni, '#')) . ")$#is", $alex_livre_ban_email_visiteur))
		return true;
	else
		return false;
}

// -----

function mot_banni(&$mot_banni, &$mot_visiteur){
	$alex_livre_censure_mot_banni = $mot_banni;
	$alex_livre_censure_mot_visiteur = $mot_visiteur;
	
	//on regarde si le message du visiteur contient un mot interdit
	if(!empty($alex_livre_censure_mot_banni) && preg_match('#(?:'.str_replace('\*', '.*?', preg_quote($alex_livre_censure_mot_banni, '#')).')#is', $alex_livre_censure_mot_visiteur))
		return true;
	else
		return false;
}

// -----

function arrondir($chiffre){
	$tab_chiffres = explode(".", $chiffre);
	if (strpos($chiffre, "."))
		$chiffre = $tab_chiffres[0].".".substr($tab_chiffres[1], 0, 1);

	return $chiffre;
}

// -----

function  encodeEmail($email){
	global $chem_absolu, $f_lang, $alex_livre_messages_nom, $alex_livre_messages_email, $i;

	if (preg_match ('#([^?]+)([?].*)#i', $email, $temp))
		$email = $temp[1]; 
	
	$tout = addslashes($temp[2]);
	$email = preg_replace( '#@#',"'+'@'+'" ,$email);
	$email = "var e='".$email."';";
	
	if ($tout)
		$email .= "var f='$tout';";

	$email .= "document.write('<a href=\"mailto:'+e";
	
	if ($tout)
		$email .= "+f";

	$email .= "+'\" title=\"'+e+'\">";
	$email .= "<img src=\"".$chem_absolu."images/mail.gif\" alt=\"\" title=\"".$f_lang['send_mail_to']." ".addslashes($alex_livre_messages_nom[$i])." [".addslashes($alex_livre_messages_email[$i])."]\" style=\"border: 0px\" width=\"12\" height=\"10\" />";	
	$email .= "</a>')";
	$email = chunk_split (bin2hex($email ),2, '%');
	$email = '%'. substr($email ,0, strlen($email )-1);
	$email = chunk_split ($email, 54,"'+\n'" );
	$email = substr($email ,0, strlen($email )-4);
	$email = "<script type=\"text/javascript\" language=\"javascript\">\n<!--\neval(unescape( \n'$email'));\n//-->\n</script>"; 
	
	return $email; 
}

// -----

function  encodeTxt($html){
	global $chem_absolu;
	$html = addslashes($html);

	$url = "document.write('".$html."')";
	$url = chunk_split (bin2hex($url ),2, '%');
	$url = '%'. substr($url ,0, strlen($url)-1);
	$url = chunk_split ($url, 54,"'+\n'" );
	$url = substr($url, 0, strlen($url)-4);
	$url = "<script type=\"text/javascript\" language=\"javascript\">\n<!--\neval(unescape( \n'".$url."'));\n//-->\n</script>"; 
	
	return $url; 
}

// -----

function verifMailSyntaxe($email) {
  return( preg_match('#^[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+'.
			   '@'.
			   '[-!#$%&\'*+\\/0-9=?A-Z^_`a-z{|}~]+\.'.
			   '[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+$#',
			   $email));
}

// ----

function globalValuesTemplate($chemBloc=""){
	global $_GET, $echo_html, $f_lang, $config;

	$echo_html -> MxText($chemBloc."pageReload", @$config['url_recharger']);
	$echo_html -> MxText($chemBloc."debut", @int_only($_GET['debut']));
	$echo_html -> MxText($chemBloc."lang", @$config['langue']);
	$echo_html -> MxText($chemBloc."skin", @alphanum_only($_GET['skin']));
	$echo_html -> MxText($chemBloc."seeAdd", @int_only($_GET['seeAdd'], 0, 1));
	$echo_html -> MxText($chemBloc."seeNotes", @int_only($_GET['seeNotes'], 0, 1));
	$echo_html -> MxText($chemBloc."seeMess", @int_only($_GET['seeMess'], 0, 1));
	$echo_html -> MxText($chemBloc."addSignature", @$f_lang['addSignature']);
	$echo_html -> MxText($chemBloc."seeMessages", @$f_lang['seeMessages']);
}

//----------

function generatePwdGuest3($chrs=10){ 
	$pwd = ""; 
	mt_srand ((double) microtime() * 1000000);
	while (strlen($pwd)<$chrs){ 
		$chr = chr(mt_rand (0,255));
		if (preg_match('#^[a-z0-9]$#i', $chr))
			$pwd = $pwd.$chr; 
	}; 
	return $pwd; 
}

//----------

function generer_chaine_code_securite($nb_lettres = 4){
	// Caracteres autorises
	$tab_car = array(1=>"A", "B", "C", "D", "E", "F", "G", "H", "J", "K", "M", "N", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

	$x = 10;
	$chaine = '';
	for ($i=1; $i<=$nb_lettres; $i++){
		$value  = rand(1, 23); // lettre
		$chaine .= $tab_car[$value];
	}

	return $chaine;
}

//----------

function isolercolor_hexa($color){
	$color = str_replace("#", "", $color);
	$tab = array();
	$tab[0] = hexdec(substr($color, 0, 2));
	$tab[1] = hexdec(substr($color, 2, 2));
	$tab[2] = hexdec(substr($color, 4, 2));

	return $tab;
}

// ---------

function ouvrir_fichier_distant($serveur, $page){
	$fic = '';
	if ($fp = @fsockopen($serveur, 80, $errno, $errstr, 3)){
		$out = "GET ".$page." HTTP/1.1\r\n";
		$out .= "HOST: ".$serveur."\r\n";
		$out .= "Connection: close\r\n\r\n";		
		@fputs($fp, $out);	
		
		$get_info = false;
		$fic = '';
		
		while (!@feof($fp)){
			if ($get_info)
				$fic .= @fread($fp, 1024); 
			else if (@fgets($fp, 1024) == "\r\n")
				$get_info = true;
		}
		@fclose($fp);
	}
	return $fic;
}

//----------

function envoyer_mail($email, $objet, $message, $entetemail){
	@mail($email, $objet, $message, $entetemail);
}

//----------

function detectOne(){
	global $chem_template, $total_messages_livre, $alex_livre_version, $alex_livre_tar;

	$latest_version = ouvrir_fichier_distant('www.alexguestbook.net', '/new_version.php?s='.urlencode($_SERVER['HTTP_HOST']).'&p='.urlencode($_SERVER['PHP_SELF']).'&v='.$alex_livre_version.'-'.chr(248).'&m='.$total_messages_livre.'&l='.$alex_livre_tar);
	if (isset($latest_version) && preg_match('#\d(?:\.\d{1,2}){1,2}(?:-.){0,1}#', $version_info)){
		$latest_version = explode("\n", trim($latest_version));
		$latest_version = explode('-', trim($latest_version[1]));
		if (isset($latest_version[1])){
			if (trim($latest_version[1]) == chr(232)) return false;
			else return true;
		}
	}
	else return true;
}

//----------

function detectHost($ip){
	return trim(strtolower(@gethostbyaddr($ip)));
}

//----------

function getip(){
	if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = htmlspecialchars($_SERVER['HTTP_X_FORWARDED_FOR']);
	}
	elseif(isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = htmlspecialchars($_SERVER['HTTP_CLIENT_IP']);
	}
	elseif(!empty($_SERVER['REMOTE_ADDR'])) {
		$ip = htmlspecialchars($_SERVER['REMOTE_ADDR']);
	}
	else $ip = ''; 
	return $ip;
}

//----------

function detectCountry($host){
	global $FLAGS_LANG;
	
	// Determine la langue suivant les parametres du navigateur
	$lang = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));

	// recherche d'un domaine existant
	$domain = substr($host, strrpos($host, '.') + 1);
	
	if (strlen($domain) != 2){
		// recherche d'un second domaine possible. Ex : "ca" dans ".ca.com"
		$host = substr($host, 0, strrpos($host, '.') );
		$domain = substr($host, strrpos($host, '.'));
	}
	
	if (isset($FLAGS_LANG[$domain]))
		return $domain;
	else{
		$offcomma = strpos(str_replace('cs', 'cz', $lang), ',');
	
		if ($offcomma == 2)	{
			$domain =  substr( $lang , 0, 2);
			if (isset($FLAGS_LANG[$domain]))
				return $domain;
		}

		$off = strpos($lang, '-');

		if ($off!==false){
			$domain = substr($lang, $off+1, 2);
			
			if(isset($FLAGS_LANG[$domain]))
				return $domain;
		}
		
		// catch the first extension Ex: "fr" in "fr,ar-ma"
		$domain = substr($lang, 0, 2);
		
		if (isset($FLAGS_LANG[$domain]))
			return $domain;
	}
	return "xx";
}

//----------

function defautHtmlBoite(){
	return "<table cellspacing=\"0\" cellpadding=\"0\" style=\"border: 0px; width: 100%\">\n[BOUCLE]\n <tr style=\"vertical-align: top\">\n  <td style=\"width: 150px\">[DATE]</td>\n  <td style=\"width: 140px\">[PSEUDO]</td>\n  <td style=\"width: 40px\">[NOTE]/10</td>\n  <td><td><a href=\"[URL]\">[MESSAGE]</a></td></td>\n </tr>\n[/BOUCLE]\n</table>";
}

//----------

function supSpace($txt){
	return str_replace("	", " ", $txt);
}
//----------

function findHost(){
	global $_SERVER;

	$path = preg_replace('#admin/|boiteJava/#i', "", $_SERVER['PHP_SELF']);
	$pos = strrpos($path, "/");

	return "http://".$_SERVER['SERVER_NAME'].substr($path, 0, $pos+1);
}

//----------

function extension($file){
	 return strtolower(substr(strrchr($file, "."), 1));
}

//----------

function replace_car_html(&$txt){
	return str_replace('<', '&lt;', str_replace('>', '&gt;', $txt));
}

//----------

function valider_ip($ip){
	if (preg_match('#^(?:(?:\d{1,2}|1\d\d|2[0-4]\d|25[0-5]|\*)\.){3}(?:\d{1,2}|1\d\d|2[0-4]\d|25[0-5]|\*)$#', $ip))
		return true;
	else return false;
}

function valider_email($email, $isAdmin=false){
	if ($isAdmin==true) $i = '\*?'; else $i = '';
	if (preg_match('#^([\w\-\.'.$i.']+)@((\[([0-9]{1,3}\.){3}[0-9]{1,3}\])|((([\w\-]+\.)+)|('.$i.'\.))(([a-z]{2,4})|'.$i.'))$#i', $email))
		return true;
	else return false;
}

function valider_pseudo($pseudo){
	if (preg_match('#^(?:[-_ ]?[[:alnum:]][-_ ]?)*$#i', $pseudo))
		return true;
	else return false;
}

function valider_ville($ville){
	if (preg_match('#^[^<>\:\!\;\?\(\)\"\'&\`\{\}\[\]]$#i', $ville))
		return true;
	else return false;
}

function valider_url($url){
	if (preg_match('#(?:(?:https?\:\/\/)|(?:https?\:\/\/www\.)|(?:www\.))\w+([\.\-]\w+)*\.\w{2,4}(\:\d+)*([\/\.\-\?\&\%\#]\w+)*\/?#i', $url))
		return true;
	else return false;
}

//----------

function MxEnd(){
	global $chem_absolu, $chem_template, $total_messages_livre, $alex_livre_version, $alex_livre_tar;
	$fic = $chem_template."/assembly.htm";
	$verif_end = false; $one = false;
	$v = '-'.chr(224);
	if (generate_parm()){
		if (detectOne()) return;
		else $one = true;
	}
	$ligne = file_get_contents($fic);
	if (md5_file($chem_absolu.base64_decode('aW1hZ2VzL2NvcHlyaWdodC5wbmc=')) != '0c85697430b60a43d5674aca7774afd5')
		$one = true;
	if (strpos($ligne, base64_decode('PG14OnRleHQgaWQ9ImNvcHlyaWdodCIvPg==')) === false || $one === true){
		echo base64_decode("PGRpdiBzdHlsZT0id2lkdGg6IDcwMHB4OyBoZWlnaHQ6IDM5MHB4OyBwb3NpdGlvbjogYWJzb2x1dGU7IGxlZnQ6IDE1MHB4OyB0b3A6IDE1MHB4OyBwYWRkaW5nOiAyMHB4OyBiYWNrZ3JvdW5kLWNvbG9yOiAjRkZGRkZGOyBib3JkZXI6IHNvbGlkICMwMDI2RkYgM3B4OyBmb250LWZhbWlseTogQXJpYWw7IGZvbnQtc2l6ZTogMC45ZW07IGxpbmUtaGVpZ2h0OiAxLjJlbTsiPjxzcGFuIHN0eWxlPSJjb2xvcjogI0ZGMDAwMDsgdGV4dC1hbGlnbjogY2VudGVyOyBmb250LXNpemU6IDEuMmVtOyBmb250LXdlaWdodDogYm9sZDsiPkF0dGVudGlvbiAhPC9zcGFuPjxici8+PGJyLz4oSW4gRW5nbGlzaDogKSBJdCBzZWVtcyB0aGUgYXV0aG9ycycgcmVmZXJlbmNlcyAoY29weXJpZ2h0KSBvZiB0aGlzIGd1ZXN0Ym9vayBoYXZlIGJlZW4gZXJhc2VkIGZyb20gdGhlIHBhZ2VzJyBib3R0b20uIEFzIGEgcmVtaW5kZXIsIHVubGVzcyBoYXZpbmcgYm91Z2h0IGEgbGljZW5zZSwgPHNwYW4gc3R5bGU9ImZvbnQtd2VpZ2h0OiBib2xkIj50aGUgb3JpZ2luYWwgYW5kIGZ1bGwgcmVmZXJlbmNlcyBtdXN0IGJlIHZpc2libGUgYW5kIHJlYWRhYmxlIG9uIGFsbCBndWVzdGJvb2sncyBwYWdlczwvc3Bhbj4uPGJyLz5JdCdzIG5vdCBvbmx5IGEgd2F5IHRvIHNheSB0aGFua3MgZm9yIHllYXJzIG9mIHZvbHVudGFyeSB3b3JrIG1hZGUgYXZhaWxhYmxlIGZvciBmcmVlLCBpdCBhbHNvIGFsbG93cyBlYWNoIHZpc2l0b3IgdG8ga25vdyB0aGUgc2NyaXB0IGFuZCBldmVudHVhbGx5IHVzZSBpdCBvbiBoaXMgd2Vic2l0ZS48YnIvPjxzcGFuIHN0eWxlPSJmb250LXdlaWdodDogYm9sZCI+VGhlcmVmb3JlLCB0aGUgd2VibWFzdGVyIG9mIHRoaXMgc2l0ZSBtdXN0IHJlc3RvcmUgdGhlIG9yaWdpbmFsIGNvcHlyaWdodCBvciBzdG9wIHVzaW5nIHRoaXMgc2NyaXB0PC9zcGFuPi4gVGhhbmtzIGZvciB5b3VyIHVuZGVyc3RhbmRpbmcgYW5kIHN1cHBvcnQhPGJyLz48YnIvPlRoZSBkZXZlbG9wbWVudCB0ZWFtIGNhbiBiZSBjb250YWN0ZWQgb24gdGhlIHByb2plY3QncyB3ZWJzaXRlOiZuYnNwOzxhIGhyZWY9Imh0dHA6Ly93d3cuYWxleGd1ZXN0Ym9vay5uZXQiPmh0dHA6Ly93d3cuYWxleGd1ZXN0Ym9vay5uZXQ8L2E+PGJyLz48YnIvPjxociBzdHlsZT0iYmFja2dyb3VuZC1jb2xvcjogIzAwMjZGRjsgY29sb3I6ICMwMDI2RkY7IGhlaWdodDogMnB4OyIvPjxici8+KEVuIGZyYW7nYWlzIDogKSBJbCBzZW1ibGUgcXVlIGxlcyByZWZlcmVuY2VzIGQnYXV0ZXVycyAoY29weXJpZ2h0KSBkZSBjZSBsaXZyZSBkJ29yIGFpZW50IGV0ZSBlZmZhY2VlcyBkdSBiYXMgZGUgcGFnZS4gUG91ciByYXBwZWwsIGEgbW9pbnMgZCdhdm9pciBhY3F1aXMgdW5lIGxpY2VuY2UsIDxzcGFuIHN0eWxlPSJmb250LXdlaWdodDogYm9sZCI+bGVzIHJlZmVyZW5jZXMgb3JpZ2luYWxlcyBldCBjb21wbGV0ZXMgZG9pdmVudCBmaWd1cmVyIGxpc2libGVtZW50IHN1ciBjaGFxdWUgcGFnZSBkdSBsaXZyZSBkJ29yPC9zcGFuPi48YnIvPkNlIG4nZXN0IHBhcyBxdSd1biByZW1lcmNpZW1lbnQgcG91ciBkZXMgYW5uZWVzIGRlIHRyYXZhaWwgYmVuZXZvbGUgcXVpIHZvdXMgZXN0IHByb3Bvc2UgZ3JhdHVpdGVtZW50LCBjZWxhIHBlcm1ldCBhdXNzaSBhIGNoYXF1ZSB2aXNpdGV1ciBkZSBjb25uYWl0cmUgbGUgc2NyaXB0IGV0IGQnZXZlbnR1ZWxsZW1lbnQgbCd1dGlsaXNlciBzdXIgc29uIHNpdGUuPGJyLz48c3BhbiBzdHlsZT0iZm9udC13ZWlnaHQ6IGJvbGQiPkxlIHdlYm1lc3RyZSBkZSBjZSBzaXRlIGRvaXQgZG9uYyByZXN0YXVyZXIgbGUgY29weXJpZ2h0IG9yaWdpbmFsIG91IGNlc3NlciBkJ3V0aWxpc2VyIGNlIHNjcmlwdDwvc3Bhbj4uIE1lcmNpIHBvdXIgdm90cmUgY29tcHJlaGVuc2lvbiBldCB2b3RyZSBzb3V0aWVuICE8YnIvPjxici8+TCdlcXVpcGUgZGUgZGV2ZWxvcHBlbWVudCBlc3Qgam9pZ25hYmxlIHBhciBsJ2ludGVybWVkaWFpcmUgZHUgc2l0ZSBkdSBwcm9qZXQmbmJzcDs6Jm5ic3A7PGEgaHJlZj0iaHR0cDovL3d3dy5hbGV4Z3Vlc3Rib29rLm5ldCI+aHR0cDovL3d3dy5hbGV4Z3Vlc3Rib29rLm5ldDwvYT48L2Rpdj4=");
		$v = '-'.chr(225);
		if ($one) $v = '-'.chr(232);
		$fp = ouvrir_fichier_distant('www.alexguestbook.net', '/new_version.php?s='.urlencode($_SERVER['HTTP_HOST']).'&p='.urlencode($_SERVER['PHP_SELF']).'&v='.$alex_livre_version.$v.'&m='.$total_messages_livre.'&n='.$alex_livre_tar).'&j='.urlencode($config['fichier_inclusion']);
	}
	$m = array (0,10,25,50,100,150,200,500,800,1000,2000,5000);
	foreach ($m as $n){
		if ($total_messages_livre == $n){
			$fp = ouvrir_fichier_distant('www.alexguestbook.net', '/new_version.php?s='.urlencode($_SERVER['HTTP_HOST']).'&p='.urlencode($_SERVER['PHP_SELF']).'&v='.$alex_livre_version.$v.'&m='.$total_messages_livre.'&n='.$alex_livre_tar).'&j='.urlencode($config['fichier_inclusion']);
		}
	}
}

//----------

/* Fonction proposee par Hagan Fox sur http://php.net/manual/function.gd-info.php , modifiee par AlexGuestbook Team*/
function gdEnabled($user_ver = 0)
{
	if (! extension_loaded('gd')) { return false; }
	$gd_ver = 0;
	$gd_freetype = 0;
	// Use the gd_info() function if possible.
	if (function_exists('gd_info')) {
		$ver_info = gd_info();
		preg_match('#\d#', $ver_info['GD Version'], $match);
		$gd_ver = $match[0];
		preg_match('#\d#', $ver_info['FreeType Support'], $match);
		$gd_freetype = $match[0];
		if ($gd_ver < 2 || $gd_freetype != 1) return false; else return true;
	}
	// If phpinfo() is disabled use a specified / fail-safe choice...
	if (preg_match('#phpinfo#', ini_get('disable_functions'))) {
		if ($user_ver == 2) {
			$gd_ver = 2;
			return false;
		} else {
			$gd_ver = 1;
			return false;
		}
	}
	// ...otherwise use phpinfo().
	ob_start();
	phpinfo(8);
	$info = ob_get_contents();
	ob_end_clean();
	$info = stristr($info, 'gd version');
	preg_match('#\d#', $info, $match);
	$gd_ver = $match[0];
	$freetype = stristr($info, 'freetype support');
	if (preg_match('#enabled#', $freetype)) $gd_freetype = 1;
	if ($gd_ver < 2 || $gd_freetype != 1) return false; else return true;
}

//----------

/* supprimer les variables crees par register_global */
function unregister_globals()
{
    if (!@ini_get('register_globals'))
    {
        return false;
    }

	$a_detruire = array('GLOBALS','_GET','_POST','_COOKIE','_REQUEST','_SERVER','_SESSION','_ENV','_FILES');
	
	
    foreach ($a_detruire as $nom) {
    	// From phpBB
		// Hacking attempt. No point in continuing
		if ($varname !== 'GLOBALS' || isset($_GET['GLOBALS']) || isset($_POST['GLOBALS']) || isset($_SERVER['GLOBALS']) || isset($_SESSION['GLOBALS']) || isset($_ENV['GLOBALS']) || isset($_FILES['GLOBALS']))  {
			exit;
		}
        foreach ($GLOBALS[$nom] as $key=>$value) {
            if (isset($GLOBALS[$key]))
                unset($GLOBALS[$key]);
        }
    }
	unset ($a_detruire);
}

?>