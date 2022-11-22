<?php

require_once '../../config/appConfig.php';

if(isset($_SESSION['user'])) {
    if(isset($_GET['delete'])) {
        $repositoryEtudiant->deleteEtudiant($_GET['idEtudiant']);
        header("location: ../view/gestion_etudiants.php");
    } else {
        $_SESSION['infos_etudiant'] = $repositoryEtudiant->changeInfos($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['specialite'], $_POST['telephone'], $_POST['classe']);
        header("location: ../view/liste_etudiants.php");
    }
} else {
    header("location: connexion_control.php");
}
