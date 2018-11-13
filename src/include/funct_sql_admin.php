<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2012    //
//         Hercelin Maxime (c) 2005 - 2012   //
//         http://www.alexguestbook.net/     //
//             all right reserved            //
///////////////////////////////////////////////

function countTotal($count, $table, $where="", $jointure="", $as=""){
	global $f_db_connexion, $name_table, $idc;

	$query = "SELECT COUNT(".$count.") FROM `".$name_table[$table]."` ".$as." ".$jointure." ".$where;
	$result = $f_db_connexion -> sql_query($query);
	$row = $f_db_connexion -> sql_fetchrow($result);
	return $row[0];
}

// -----

function sql_select_query($champs, $table, $where="", $orderby="", $limit="", $traitement_messages=false, $jointure="", $as="", $prefix=""){
	global $f_db_connexion, $name_table, $htmlspecial, $exact_name, $debug, $no_count, $idc, $indice_start, $not_init_tab;

	$query = "SELECT ".$champs." FROM `".$name_table[$table]."` ".$as." ".$jointure." ".$where." ".$orderby." ".$limit;
	$result = $f_db_connexion -> sql_query($query);
	global ${"nb_champs_".$table.(($prefix) ? $prefix : "")};

	if (!$no_count)
		${"nb_champs_".$table.(($prefix) ? $prefix : "")} =  $f_db_connexion -> sql_numrows($result);

	if (!isset($indice_start) || !$indice_start){
		$i=1;
		$val_start = 1;
	}
	else if ($indice_start){
		$i=$indice_start;
		$val_start = $indice_start;
	}

	while ($row = $f_db_connexion -> sql_fetchrow($result)){
		if ($table=='alex_livre_config'){
			global $config;
			$config[$row['nom_config']] = $row['valeur_config'];
		}
		else{
			foreach ($row as $cle => $value){
				if ($cle == "0" || trim((int)$cle))
					continue;

				if ($i == $val_start){
					if ($exact_name)
						global ${$cle};
					else {
						global ${$prefix.$table."_".$cle};

						if (!isset($not_init_tab))
							${$prefix.$table."_".$cle} = array();
					}
				}

				if ($traitement_messages && $cle == "message"){
					$value = trim($value);
					$value = cut($value);
					$value = replace_censure_smileys($value);
				}

				if ($exact_name && $htmlspecial != "no")
					${$cle} = $value;
				else if ($exact_name)
					${$cle} = $value;
				else if ($htmlspecial != "no" && $cle != "code_source")
					${$prefix.$table."_".$cle}[$i] = $value;
				else
					${$prefix.$table."_".$cle}[$i] = $value;
			}

			$i++;
		}
	}
}

// -----

function f_verif_identif(){
	global $name_table, $_POST, $f_db_connexion, $id_user;

	$query = "SELECT id_user,login FROM ".$name_table['alex_livre_users']." WHERE login='".$_POST['f_login']."' and pass='".$_POST['f_pass']."'";
	$result = $f_db_connexion -> sql_query($query);

	$row = $f_db_connexion -> sql_fetchrow($result);
	$id_user = $row[0];
	return $row[1];
}

// -----

function f_insert_session($f_sid, $type_action, $id_user, $login_user){
	global $f_db_connexion, $name_table;

	switch ($type_action){
		case("insert"):
			$query = "INSERT INTO ".$name_table['alex_livre_sessions']." (session, id_user, login, last_connect) VALUES('$f_sid','$id_user','$login_user','".time()."')";
			$query2 = "UPDATE ".$name_table['alex_livre_users']." SET last_connect='".time()."' WHERE id_user='$id_user'";
			break;
		case("update"):
			$query = "UPDATE ".$name_table['alex_livre_sessions']." SET last_connect='".time()."' WHERE session='$f_sid'";
			$query2 = "UPDATE ".$name_table['alex_livre_users']." SET last_connect='".time()."' WHERE id_user='$id_user'";
			break;
	}

	$result = $f_db_connexion -> sql_query($query);
	$result2 = $f_db_connexion -> sql_query($query2);
}

// -----

function f_destroy_session($id=''){
	global $f_db_connexion, $name_table, $config;

	$actu_time = time();
	if(!empty($id)){
		$query = "DELETE FROM ".$name_table['alex_livre_sessions']." WHERE session = '".$id."'";
	}
	else{
		$query = "DELETE FROM ".$name_table['alex_livre_sessions']." WHERE last_connect < (".$actu_time." - ".$config['temps_session'].")";
	}
	$result = $f_db_connexion -> sql_query($query);
}

// -----

function f_verif_session(){
	global $_GET, $name_table, $f_db_connexion, $config, $id_user, $login_user;

	$actu_time = time();
	$query = "SELECT id_user, login FROM ".$name_table['alex_livre_sessions']." WHERE session='".$_GET['f_sid']."' and last_connect >= (".$actu_time." - ".$config['temps_session'].")";
	$result = $f_db_connexion -> sql_query($query);

	if ($row = $f_db_connexion -> sql_fetchrow($result)){
		$id_user = $row[0];
		$login_user = $row[1];

		//on prolonge la session
		f_insert_session($_GET['f_sid'], "update", $id_user, $login_user);
	}
	else{
		//destruction de la session et redirection vers la page d'accueil de la partie admin
		$query = "DELETE FROM ".$name_table['alex_livre_sessions']." WHERE session='".$_GET['f_sid'];
		$result = $f_db_connexion -> sql_query($query);

		header("Location: index.php?close_sess=1");
		exit;
	}
}

// -----

function f_save_pages(){
	global $f_db_connexion, $name_table, $tab_champs_admin, $id_user, $nb_messages_page;

	generer_liste_admin();

	$query = "SELECT * FROM ".$name_table['alex_livre_users']." WHERE id_user='".$id_user."'";
	$result = $f_db_connexion -> sql_query($query);

	$a=4;
	while($row = $f_db_connexion->sql_fetchrow($result)){
		for ($i=1; $i<=count($tab_champs_admin); $i++){
			global ${"user_".$tab_champs_admin[$i]};

			${"user_".$tab_champs_admin[$i]} = $row[$tab_champs_admin[$i]];
			$a++;
		}

		$nb_messages_page = $row['nb_mess_page'];
	}
}

// -----

function moyenne_notes_messages(){
	global $name_table, $f_db_connexion, $value_moyenne_notes_messages;

	$query = "SELECT AVG(note) FROM ".$name_table['alex_livre_messages']." WHERE note<>''";
	$result = $f_db_connexion -> sql_query($query);

	while ($row = $f_db_connexion->sql_fetchrow($result)){
		$value_moyenne_notes_messages = $row[0];
	}
}

// -----

function ecrire_config($option, $valeur){
	global $name_table, $f_db_connexion, $config;

	$sql = 'UPDATE '.$name_table['alex_livre_config']." SET valeur_config = '".$valeur."' WHERE nom_config = '".$option."'";
	$result = $f_db_connexion -> sql_query($sql);
}
?>