<?php

require_once '../../config/appConfig.php';

if(isset($_SESSION['user'])) {
    if(isset($_GET['unlog'])) {
        session_destroy();
        header("location: ../view/connexion.php");
    } else {
        header("location: ../view/accueil.php");
    }
} else {
    header("location: ../view/connexion.php");
}
