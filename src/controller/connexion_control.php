<?php
require_once '../../config/appConfig.php';
var_dump($bdd);

if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['confirm-password'])) {

    if ($_POST['password'] === $_POST['confirm-password']){
        $login = $_POST['login'];
        $mdp = $_POST['password'];

        $db_dao = new \model\dao\DB_DAO($bdd);
        $user = $db_dao->connectUser($login, $mdp);
        if($user === 'admin'){
            $_SESSION['admin'] = $repositoryAdmin->getByLogin($login);
            header('Location : ../view/accueil.php');
        } elseif ($user === 'tuteur'){
            $_SESSION['tuteur'] = $repositoryTuteur->getByLogin($login);
            header('Location : ../view/accueil.php');
        } elseif ($user === 'etudiant'){
            $_SESSION['etudiant'] = $repositoryEtudiant->getByLogin($login);
            header('Location : ../view/accueil.php');
        }else header('Location : ../view/connexion.php?erreur=pasDeCompte');


    }else header('Location : ../view/connexion.php?erreur=mdpcomf');

} else header('Location : ../view/connexion.php?erreur=champVide');

die('test');


