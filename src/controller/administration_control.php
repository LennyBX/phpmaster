<?php

require_once '../../config/appConfig.php';

if(isset($_SESSION['user'])) {
    header("location: ../view/administration.php");
} else {
    header("location: connexion_control.php");
}