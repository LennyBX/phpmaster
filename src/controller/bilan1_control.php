<?php

require_once '../../config/appConfig.php';

if(isset($_SESSION['user'])) {
    $_SESSION['bilan1_etudiant'] = $repositoryNote1->getByIdEtudiant($_GET['idEtudiant']);
    header("location: ../view/bilan1.php");
} else {
    header("location: connexion_control.php");
}
