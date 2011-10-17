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
$nb_smiley_ligne = 6;

//----------------------- fichiers à inclure
include($chem_absolu."config/extension.inc");
include($chem_absolu."include/admin_include.".$alex_livre_ext);

//----------------------- on controle si le visiteur est ou non autorisé à visiter cette page
verif_page("gestion_smileys");

//----------------------- génération de la liste des champs de cases à cocher oui / non
$tab_champs_options = array(
	1 => "autoriser_smileys"
);
//----------------------- génération de la liste des champs textes de la langue
$tab_champs_langue = array(
	1 => "gestion_smileys",
	"text_smileys",
	"autoriser_smileys",
	"ajouter_smiley",
	"image_smiley",
	"car_replace",
	"ajouter",
	"gestion_smileys",
	"sup_smileys",
	"erreur_image",
	"erreur_car",
	"modif_smileys",
	"verif_sup_smileys",
	"num_appari",
	"enregistrer",
	"admin_autoriser_smileys",
	"oui",
	"non"
);

// ---------------------- Autoriser ou pas les smileys
if (isset($_POST['enregistrer'])){
	ecrire_config('autoriser_smileys', $_POST['autoriser_smileys']);
}

//----------------------- ajout d'un smiley
if (isset($_POST['ajouter'])){
	//on regarde si le caractère de remplacement existe ou non
	$query = "SELECT id_smiley FROM ".$name_table['alex_livre_smileys']." WHERE car_replace='".$_POST['car_replace']."'";
	$result = $f_db_connexion -> sql_query($query);

	if ($f_db_connexion->sql_numrows($result) < 1){
		//on vérifie si le fichier à uploader est une image gif ou jpg
		$nom_image = $_FILES['image_smiley']['name'];
		$extension = strtolower(substr($nom_image, strrpos($nom_image, "."), strlen($nom_image) - strrpos($nom_image, ".")));

		if ($extension == ".gif" || $extension == ".jpg" || $extension == ".jpeg" || $extension == ".jpe"){
			@chmod($chem_absolu."images/smileys/", 0777);
			if (@move_uploaded_file($_FILES['image_smiley']['tmp_name'], $chem_absolu."images/smileys/".$nom_image)){
				$query = "INSERT INTO ".$name_table['alex_livre_smileys']." (numero, smiley, car_replace) VALUES ('".$_POST['numero']."', '".$nom_image."', '".$_POST['car_replace']."')";
				$result = $f_db_connexion -> sql_query($query);
				message_javascript($f_lang['ok_aj_smiley']);
			}
			else{
				message_javascript($f_lang['copy_impossible']);
			}
			@chmod($chem_absolu."images/smileys/", 0755);
		}
		else
			message_javascript($f_lang['no_smiley']);
	}
	else
		message_javascript($f_lang['car_replace_exist']);
}

//----------------------- suppression
if (isset($_POST['supprimer'])){
	for ($i = 1; $i <= $_POST['nbre_boucles']; $i++){
		$chaine_mot = "sup_".$i;
		if (isset($_POST[$chaine_mot])){
			$query = "DELETE FROM ".$name_table['alex_livre_smileys']." WHERE id_smiley='".$_POST[$chaine_mot]."'";
			$result = $f_db_connexion -> sql_query($query);
		}
	}
}

//----------------------- modifications
if (isset($_POST['modifier'])){
	for ($i = 1; $i <= $_POST['nbre_boucles']; $i++){
		$query = "UPDATE ".$name_table['alex_livre_smileys']." set numero='".$_POST["value_numero_".$i]."', car_replace='".$_POST["value_car_replace_".$i]."' WHERE id_smiley='".$_POST["id_smiley_".$i]."'";
		$result = $f_db_connexion -> sql_query($query);
	}
	message_javascript($f_lang['merci_modif_smileys']);
}

//----------------------- nouveau numéro d'apparition
$NEW_NUM_APPARI = (countTotal("*", "alex_livre_smileys") + 1);

//----------------------- on récupère tous les smileys
sql_select_query("*", "alex_livre_smileys", "", "ORDER BY numero");

/* fermeture de la connexion sql */
$f_db_connexion -> sql_close();

//----------------------- affichage du template
$echo_html = new ModeliXe("smileys.htm", "f_sid=".$_GET['f_sid']."", "", "", "", $chem_absolu.$chem_template);
$echo_html -> SetModeliXe();

/* instanciation des blocs */
template_type($f_lang['title smileys']);

/* langue */
generate_langue($tab_champs_langue);

/* urls */
$echo_html -> MxText("f_sid", $_GET['f_sid']);

/* smileys autorisés ? */
$echo_html -> MxText("value_autoriser_smileys", $config['autoriser_smileys']);
generate_radio($tab_champs_options);

/* nouveau numéro d'apparition */
$echo_html -> MxText("new_numero", $NEW_NUM_APPARI);

/* boucle pour afficher les smileys enregistrées */
$echo_html -> MxText("nb_smileys", $nb_champs_alex_livre_smileys);

$nbre_lignes = ceil($nb_champs_alex_livre_smileys / $nb_smiley_ligne);
$pourcentage = floor(100 / $nb_smiley_ligne);
$reste = 100 % $nb_smiley_ligne;
$nb_aff = 0;

if ($nb_champs_alex_livre_smileys > 0){
	for ($i = 1; $i <= $nbre_lignes; $i++){

		for ($j = 1; $j <= $nb_smiley_ligne; $j++){
			$nb_aff++;
			$pourcent_aff = $pourcentage;
			if (($nb_smiley_ligne - $j) < $reste)
				$pourcent_aff += 1;
			
			$echo_html -> MxText("bloc5.bloc6.td_col", $pourcent_aff."%");
			if ($nb_aff <= $nb_champs_alex_livre_smileys){
				$echo_html -> MxBloc("bloc5.bloc6.bloc7", "modify", $chem_absolu.$chem_template."/centre_tab_smileys.htm");
				$echo_html -> MxText("bloc5.bloc6.bloc7.img_src", $chem_absolu."images/smileys/".$alex_livre_smileys_smiley[$nb_aff]);
				$echo_html -> MxText("bloc5.bloc6.bloc7.value_car_replace", $alex_livre_smileys_car_replace[$nb_aff]);
				$echo_html -> MxText("bloc5.bloc6.bloc7.value_numero", $alex_livre_smileys_numero[$nb_aff]);
				$echo_html -> MxText("bloc5.bloc6.bloc7.boucle", $nb_aff);
				$echo_html -> MxText("bloc5.bloc6.bloc7.id_image", $alex_livre_smileys_id_smiley[$nb_aff]);
				$echo_html -> MxText("bloc5.bloc6.bloc7.alt_image", $alex_livre_smileys_smiley[$nb_aff]);
			}
			else
				$echo_html -> MxBloc("bloc5.bloc6.bloc7", "dele");

			$echo_html -> MxBloc("bloc5.bloc6", "loop" );
		}

		$echo_html -> MxBloc( "bloc5", "loop" );
    }
}
else
	$echo_html -> MxBloc("bloc5", "rese");

$html = $echo_html -> MxWrite("", true);
echo $html;
?>