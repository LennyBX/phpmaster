<?php
require_once '../../config/appConfig.php';

$_SESSION['user'] = $repositoryTuteur->getById(2);

if(isset($_SESSION['user'])) {
    header("location: ../view/accueil.php");
} else {
    header("location: ../view/connexion.php");
}

