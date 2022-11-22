<?php
include_once '../../config/appConfig.php';


if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmPassword'])) {

    if ($_POST['password'] === $_POST['confirmPassword']){
        $login = $_POST['username'];
        $mdp = $_POST['password'];

        $db_dao = new \model\dao\DB_DAO($bdd);
        $user = $db_dao->connectUser($login, $_POST['password']);
        if($user === 'admin'){
            $_SESSION['admin'] = $repositoryAdmin->getByLogin($login);
            header('Location: ../view/accueil.php');
        } elseif ($user === 'tuteur'){
            $_SESSION['tuteur'] = $repositoryTuteur->getByLogin($login);
            header('Location: ../view/accueil.php');
        } elseif ($user === 'etudiant'){
            $_SESSION['etudiant'] = $repositoryEtudiant->getByLogin($login);
            header('Location: ../view/accueil.php');
        }else header('Location: ../view/connexion.php?erreur=pasDeCompte');


    }else header('Location: ../view/connexion.php?erreur=mdpcomf');

} else header('Location: ../view/connexion.php?erreur=champVide');

