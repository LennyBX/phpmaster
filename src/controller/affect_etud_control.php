<?php
require_once '../../config/appConfig.php';

if(isset($_POST['liste_etudiant'])){

    $id_etu = intval($_POST['liste_etudiant']);
    $id_tut = $_SESSION['user']->getIDTUT();


    if ($repositoryEtudiant->affectEtud($id_tut, $id_etu)){
        header('location: ../view/affectation_etudiants.php');
        $_SESSION['affect_etud'] = true;
    } else {
        header('location: ../view/affectation_etudiants.php');
        $_SESSION['affect_etud'] = false;
    }

} else  header('location: ../view/affectation_etudiants.php?erreur=Noselect');