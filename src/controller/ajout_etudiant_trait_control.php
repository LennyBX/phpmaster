<?php

require_once '../../config/appConfig.php';

if(isset($_SESSION['user'])) {
    $repositoryEtudiant->addEtudiant($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['specialite'], $_POST['telephone'], $_POST['classe'], $_POST['login'], $_POST['mdp'], $_POST['cp'], $_POST['rue'], $_POST['ville'], $_POST['numrue'], $_POST['entreprise']);
    header("location: ../view/gestion_etudiants.php");
} else {
    header("location: connexion_control.php");
}
