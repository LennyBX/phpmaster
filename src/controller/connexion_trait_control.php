<?php
include_once '../../config/appConfig.php';

if(isset($_POST['username']) && isset($_POST['password'])) {
    $userType = $repositoryDB->authentifyUser($_POST['username'], $_POST['password']);
    if($userType == "ADMIN") {
        $_SESSION['user'] = $repositoryAdmin->getByLogin($_POST['username']);
        $_SESSION['perm'] = $userType;
        header("location: ../view/accueil.php");
    } else if($userType == "TUTEUR") {
        $_SESSION['user'] = $repositoryTuteur->getByLogin($_POST['username']);
        $_SESSION['perm'] = $userType;
        header("location: ../view/accueil.php");
    } else if($userType == "ETUDIANT") {
        $_SESSION['user'] = $repositoryEtudiant->getByLogin($_POST['username']);
        $_SESSION['perm'] = $userType;
        header("location: ../view/accueil.php");
    } else {
        header("location: ../view/connexion.php");
    }
} else {
    header("location: ../view/connexion.php");
}


