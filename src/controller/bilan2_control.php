<?php

require_once '../../config/appConfig.php';

if(isset($_SESSION['user'])) {
    $_SESSION['bilan2_etudiant'] = $repositoryNote2->getByIdEtudiant($_GET['idEtudiant']);
    header("location: ../view/bilan2.php");
} else {
    header("location: connexion_control.php");
}

