<?php

require_once '../../config/appConfig.php';

if(isset($_SESSION['user'])) {
    $_SESSION['infos_tuteur'] = $repositoryTuteur->getById(intval($_GET['idTuteur']));
    header("location: ../view/modif_tuteur.php");
} else {
    header("location: connexion_control.php");
}