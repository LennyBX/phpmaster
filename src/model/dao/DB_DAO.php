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

    public function login(String $login, String $mdp): array{

        $query_prepare = $this->bdd->prepare('SELECT * from etudiant where LOG_ETU = :login');
        $query_prepare->execute([
            ':login' => $login
        ]);

        $result = $query_prepare->fetch(\PDO::FETCH_ASSOC);

        if( $result != 0 ) {
            $mdp_hash = $result['MDP_ETU'];
            if ($mdp == $mdp_hash){
                return $result;
            } else{
                return ["ID_ETU" => -101]; //mauvais mot de passe
            }
        }else{
            return ["ID_ETU" => -102]; //mauvais login
        }
    }


}



