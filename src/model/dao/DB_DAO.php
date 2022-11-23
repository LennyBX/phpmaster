<?php

namespace model\dao;
use model\dto\TUTEUR;
use model\dto\ADMIN;
use model\dto\ETUDIANT;


class DB_DAO
{
    protected $bdd;
    public function __construct(\PDO $bdd)
    {
        if (!is_null($bdd))
            $this->bdd = $bdd;
    }

    public function authentifyUser(string $login, string $mdp): ?string {
        $req = $this->bdd->query('SELECT * FROM admin');
        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet = new ADMIN($row);
                if($resultSet->getLOGADM() == $login && $resultSet->getMDPADM() == $mdp) {
                    return "ADMIN";
                }
            }
        }
        $req = $this->bdd->query('SELECT * FROM tuteur');
        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet = new TUTEUR($row);
                if($resultSet->getLOGTUT() == $login && $resultSet->getMDPTUT() == $mdp) {
                    return "TUTEUR";
                }
            }
        }
        $req = $this->bdd->query('SELECT * FROM etudiant');
        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet = new ETUDIANT($row);
                if($resultSet->getLOGETU() == $login && $resultSet->getMDPETU() == $mdp) {
                    return "ETUDIANT";
                }
            }
        }
        return false;
    }

}



