<?php
//  Basculer à TRUE pour activer les affichages de debug, les var_dump ou les dump_var
if(!defined('DUMP')) {
    define('DUMP', true);
}

//  L'url de votre site, sera utile dans les page en cas de déplacement du site...
define('URL_BASE', "http://localhost/P2023_1SIO_GestionCompetition");

// Exercice 1 - Partie 1 : Mettre les informations de votre BDD
$infoBdd = array(
    'interface' => 'pdo',
    'type'   => 'mysql',	    //  mysql ou pgsql
    'host'   => 'localhost',     // l'emplacement de votre site, dans le cas d'un site en local => localhost
    'port'   =>  '3306',	    // Par défaut: 5432 pour postgreSQL, 3306 pour MySQL
    'charset' => 'UTF8',
    'dbname' => 'roulette', // nom de votre BDD
    'user'   => 'root', // Utilisateur de connexion à votre BDD, sous MySQL par défaut c'est root
    'pass'   => '', // mot de passe pour se connecter à votre BDD, sous mySQL par défaut c'est vide
);

require_once 'globalconfig.php';