<?php

/* Configuration du Framework */
define('ROOT', $_SERVER['DOCUMENT_ROOT']); // Chemin de la racine de votre site
define('SITE', 'EdenPHP');                 // Nom du site
define('URL', 'http://localhost/');        // URL du site
define('CHARSET', 'utf-8');                // Encodage du site
define('YEAR', 2012);                      // Début du développement
define('DEV', true);                       // Mode développement
define('TIMEZONE', 'Europe/Paris');        // Fuseau Horaire

/* Configuration de la base de données */
define('DBHOST',  'localhost'); // Hôte
define('DBSLAVE', false);       // Serveur secondaire
define('DBUSER',  'root');      // Utilisateur
define('DBPASS',  'root');      // Mot de passe
define('DBNAME',  'edenphp');   // Base de données
define('DBPREF',  'eden_');     // Préfixe des tables

/* Chemins des dossiers */
define('APP',        ROOT    .'/app');
define('WEBROOT',    ROOT    .'/webroot');
define('LIB',        ROOT    .'/lib');
define('LANG',       ROOT    .'/lang');
define('LOG',        ROOT    .'/log');
define('CACHE',      ROOT    .'/cache/');
define('PLUGIN',     LIB     .'/plugin');
define('SYSTEM',     LIB     .'/system');
define('SMARTY_DIR', SYSTEM  .'/class/smarty/');
define('FILE',       WEBROOT .'/file');
define('TEMPLATE',   APP     .'/template');
define('SOURCE',     APP     .'/source/');

?>