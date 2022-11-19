<?php

require_once '../../config/appConfig.php';

if(isset($_POST['login']) && isset($_POST['password'])) {
    if($repositoryEtudiant->authentify($_POST['login']) == true) {
    }
}

if(isset($_SESSION['user'])) {
    header("location: ../view/accueil.php");
} else {
    header("location: ../view/connexion.php");
}
