<?php

require_once '../../config/appConfig.php';

if(isset($_SESSION['user'])) {
    $_SESSION['infos_etudiant'] = $repositoryEtudiant->getById($_GET['idEtudiant']);
    header("location: ../view/modif_etudiant.php");
} else {
    header("location: connexion_control.php");
}