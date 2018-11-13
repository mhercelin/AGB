CREATE TABLE `<table_censure>` (
  `id_mot` mediumint(11) unsigned NOT NULL auto_increment,
  `texte_censure` varchar(255) NOT NULL default '',
  `texte_remplace` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id_mot`)
) ENGINE=MyISAM;

CREATE TABLE `<table_ban>` (
  `id_ban` mediumint(11) unsigned NOT NULL auto_increment,
  `ip` varchar(15) NOT NULL default '',
  `pseudo` VARCHAR(40) NOT NULL default '',
  `email` VARCHAR(150) NOT NULL default '',
  PRIMARY KEY  (`id_ban`)
) ENGINE=MyISAM;

CREATE TABLE `<table_messages>` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `nom` varchar(40) NOT NULL default '',
  `email` varchar(150) NOT NULL default '',
  `site` varchar(150) NOT NULL default '',
  `ville_pays` varchar(60) NOT NULL default '',
  `pays` varchar(2) NOT NULL,
  `note` char(2) default NULL,
  `message` text NOT NULL,
  `titre_reponse` varchar(100) NOT NULL,
  `reponse` text NOT NULL,
  `time` int(11) NOT NULL default '0',
  `ip` varchar(15) NOT NULL default '',
  `valid` enum('yes','no') NOT NULL default 'yes',
  PRIMARY KEY  (`id`),
  KEY `time` (`time`),
  KEY `valid` (`valid`), 
  KEY `nom` (`nom`), 
  FULLTEXT KEY `message` (`message`)
) ENGINE=MyISAM;

CREATE TABLE `<table_sessions>` (
  `session` varchar(70) NOT NULL default '',
  `id_user` mediumint(11) unsigned NOT NULL default '0',
  `login` varchar(20) NOT NULL default '',
  `last_connect` int(15) NOT NULL default '0',
  KEY `session` (`session`)
) ENGINE=MyISAM;

CREATE TABLE `<table_smileys>` (
  `id_smiley` mediumint(11) unsigned NOT NULL auto_increment,
  `numero` mediumint(8) unsigned NOT NULL default '0',
  `smiley` varchar(255) NOT NULL default '',
  `car_replace` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`id_smiley`),
  KEY `numero` (`numero`)
) ENGINE=MyISAM;

INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (1, 1, 'smile.gif', ':)');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (2, 2, 'biggrin.gif', ':-D');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (3, 3, 'confused.gif', ':?');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (4, 4, 'cool.gif', '8)');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (5, 5, 'cry.gif', ':cry:');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (6, 6, 'eek.gif', ':shock:');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (7, 7, 'love.gif', ':V)');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (8, 8, 'mad.gif', ':x');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (9, 9, 'lol.gif', ':lol:');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (10, 10, 'surprised.gif', '8-O');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (11, 11, 'wink.gif', ':;');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (12, 12, 'ooops.gif', ':oops:');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (13, 13, 'twisted.gif', ':twisted:');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (14, 14, 'evil.gif', ':evil:');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (15, 15, 'furious.gif', ':GG');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (16, 16, 'mdr.gif', ':mdr:');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (17, 17, 'cheer.gif', ':-)X');
INSERT INTO `<table_smileys>` (`id_smiley`, `numero`, `smiley`, `car_replace`) VALUES (18, 18, 'acllamer.gif', ':-//');

CREATE TABLE `<table_users>` (
  `id_user` mediumint(11) unsigned NOT NULL auto_increment,
  `login` varchar(20) NOT NULL default '',
  `pass` varchar(30) binary NOT NULL default '',
  `email` varchar(255) NOT NULL default '',
  `receive_email` tinyint(1) NOT NULL default '0',
  `modif_options` tinyint(1) NOT NULL default '0',
  `gestion_skins` tinyint(1) NOT NULL default '0',
  `gestion_reponse_auto` tinyint(1) NOT NULL default '0',
  `gestion_bdd` tinyint(1) NOT NULL default '0',
  `gestion_messages` tinyint(1) NOT NULL default '0',
  `gestion_censure` tinyint(1) NOT NULL default '0',
  `gestion_bannissement` tinyint(1) NOT NULL default '0',
  `gestion_smileys` tinyint(1) NOT NULL default '0',
  `gestion_admin` tinyint(1) NOT NULL default '0',
  `nb_mess_page` int(11) NOT NULL default '0',
  `last_connect` int(11) NOT NULL default '0',
  `date_creation` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id_user`),
  KEY `login` (`login`),
  KEY `pass` (`pass`)
) ENGINE=MyISAM;

INSERT INTO <table_users> (`id_user`, `login`, `pass`, `email`, `receive_email`, `modif_options`, `gestion_skins`, `gestion_reponse_auto`, `gestion_bdd`, `gestion_messages`, `gestion_censure`, `gestion_bannissement`, `gestion_smileys`, `gestion_admin`, `nb_mess_page`, `date_creation`, `last_connect`) VALUES (1, '<login_admin>', '<pass_admin>', '<email_admin>', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 15, '<time>', '<time>');

CREATE TABLE `<table_img_verif_add>` (
  `numero` varchar(10) NOT NULL default '',
  `time` int(10) unsigned NOT NULL default '0',
  `valeur` varchar(5) NOT NULL default '',
  `nom` varchar(40) NOT NULL default '',
  `email` varchar(150) NOT NULL default '',
  `site` varchar(150) NOT NULL default '',
  `ville_pays` varchar(60) NOT NULL default '',
  `pays` varchar(2) NOT NULL,
  `note` char(2) NOT NULL default '',
  `message` text NOT NULL,
  KEY `time` (`time`),
  KEY `numero` (`numero`)
) ENGINE=MyISAM;

CREATE TABLE `<table_txt_lang>` (
 `lang` VARCHAR(20) NOT NULL,
  `type` ENUM('rep_auto', 'titre', 'rep', 'boite'),
  `msg` TEXT NOT NULL,
  INDEX (`lang`) ,
  INDEX (`type`) 
) ENGINE=MyISAM;

CREATE TABLE `<table_config>` (
  `nom_config` varchar(255) NOT NULL,
  `valeur_config` varchar(255),
  UNIQUE KEY `nom_config` (`nom_config`)
) ENGINE=MyISAM;

INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('langue', '<langue>');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('skin_to_use', 'AguestNew');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('temps_session', '1800');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('send_mail', '1');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('temps_ip_post', '60');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('format_date', 'd/m/Y');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('admin_valide_messages', '0');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('admin_envoyer_remerciement', '0');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('admin_add_code_securite', '0');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('admin_bannir_mot', '0');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('url_interdites', '1');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('url_cliquables', '0');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('color_txt_code', '#000000');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('color_background_code', '#FFFFFF');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('champ_pseudo', '0');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('champ_email', '0');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('champ_site', '0');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('champ_pays', '0');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('champ_note', '0');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('champ_ville', '0');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('ok_aff_moteur', '1');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('nb_pages', '10');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('cut_mots', '75');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('maxi_car', '1500');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('nb_max_smileys', '20');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('url_recharger', 'index.php');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('extension_url', '');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('decalage_horaire', '0');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('autoriser_smileys', '1');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('inclure_livre', '0');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('fichier_inclusion', '');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('donner_focus', '0');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('lien_admin', '1');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('lien_accueil', '1');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('chemin_lien_accueil', '/');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('symbole_champ_obligatoire', '*');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('symbole_champ_prive', '[P]');
INSERT INTO `<table_config>` (`nom_config`, `valeur_config`) VALUES ('db_version', '5.0.4');