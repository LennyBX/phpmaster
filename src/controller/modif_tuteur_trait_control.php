<?php

require_once '../../config/appConfig.php';

if(isset($_SESSION['user'])) {
    if(isset($_GET['delete'])) {
        $repositoryTuteur->deleteTuteur($_GET['idTuteur']);
        header("location: ../view/administration.php");
    } else {
        $_SESSION['infos_tuteur'] = $repositoryTuteur->changeInfos($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['telephone']);
        header("location: ../view/administration.php");
    }
} else {
    header("location: connexion_control.php");
}