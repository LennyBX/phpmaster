<?php

namespace model\dao;

use PDO;

class DB_DAO
{
    private PDO $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function connectUser(string $login, string $mdp): ?string{
        $query_check_admin = $this->pdo->prepare("Select * from admin where LOG_ADM = :id_adm;");
        $query_check_tuteur = $this->pdo->prepare("Select * from tuteur where LOG_TUT = :log_tut;");
        $query_check_etudiant = $this->pdo->prepare("Select * from etudiant where LOG_ETU = :log_etu;");

        if ($query_check_admin) return 'admin';
        elseif ($query_check_tuteur) return 'tuteur';
        elseif ($query_check_etudiant) return 'etudiant';
        else return null;
    }



    /**
     * @return PDO
     */
    public function getPdo(): PDO
    {
        return $this->pdo;
    }

    /**
     * @param PDO $pdo
     */
    public function setPdo(PDO $pdo): void
    {
        $this->pdo = $pdo;
    }




}