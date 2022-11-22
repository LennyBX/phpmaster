<?php

require_once '../../config/appConfig.php';

if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['passwordComf'])) {

    if ($_POST['password'] === $_POST['passwordComf']){
        $login = $_POST['login'];
        $mdp = $_POST['password'];

        $user = $bdd->connectUser($login, $mdp);
        if($user === 'admin'){
            $adminDAO = new \model\dao\ADMIN_2SIO_DAO($bdd);
            $_SESSION['admin'] = $adminDAO->getByLogin($login);
            header('Location : ../view/accueil.php');
        } elseif ($user === 'tuteur'){
            $tuteurDAO = new \model\dao\ADMIN_2SIO_DAO($bdd);
            $_SESSION['tuteur'] = $tuteurDAO->getByLogin($login);
            header('Location : ../view/accueil.php');
        } elseif ($user === 'etudiant'){
            $etudiantDAO = new \model\dao\ADMIN_2SIO_DAO($bdd);
            $_SESSION['etudiant'] = $etudiantDAO->getByLogin($login);
            header('Location : ../view/accueil.php');
        }


    }else header('Location : ../view/connexion.php?erreur=mdpcomf');

}else header('Location : ../view/connexion.php?erreur=champVide');


