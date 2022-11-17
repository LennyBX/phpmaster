<?php

require_once 'globalConfig.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('URL_BASE', "http://localhost/ort/P2023_2SIO_Projet_Tutorat");

use models\dao\ADMIN_2SIO_DAO;
use models\dao\ENTREPRISE_2SIO_DAO;
use models\dao\ETUDIANT_2SIO_DAO;
use models\dao\NOTE_2SIO_DAO;
use models\dao\TUTEUR_2SIO_DAO;

$bdd = new \models\dto\DB("localhost", "P2023_2SIO_Projet_Tutorat", "root", "");
$bdd = $bdd->getPDO();

$repositoryAdmin = new ADMIN_2SIO_DAO($bdd);
$repositoryEntreprise = new ENTREPRISE_2SIO_DAO($bdd);
$repositoryEtudiant = new ETUDIANT_2SIO_DAO($bdd);
$repositoryTuteur = new TUTEUR_2SIO_DAO($bdd);
$repositoryNote = new NOTE_2SIO_DAO($bdd);