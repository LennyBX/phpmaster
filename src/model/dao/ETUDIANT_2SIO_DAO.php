<?php

namespace model\dao;

use model\dto\ETUDIANT;

class ETUDIANT_2SIO_DAO
{
    protected $bdd;
    public function __construct(\PDO $bdd){
        if(!is_null($bdd))
            $this->bdd = $bdd;
    }

    public function getAll() : ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM etudiant');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new ETUDIANT($row);

            }
        }
        return $resultSet;
    }

    public function getById(int $id_etu): ?ETUDIANT_2SIO_DAO {
        $resultSet = NULL;
        $req = $this->bdd->prepare('SELECT * FROM etudiant WHERE id_etu = :id_etu;');
        $res = $req->execute([':id_etu' => $id_etu]);

        if ($res !== FALSE) {
            $tab = ($tmp = $req->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {
                $resultSet = new ETUDIANT_2SIO_DAO($tab);
            }
        }
        return $resultSet;

    }

    public function getByLogin(string $login): ?ETUDIANT {
        $resultSet = NULL;
        $req = $this->bdd->prepare('SELECT * FROM etudiant WHERE LOG_ETU = :log_etu;');
        $res = $req->execute([':log_etu' => $login]);

        if ($res !== FALSE) {
            $tab = ($tmp = $req->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {
                $resultSet = new ETUDIANT($tab);
            }
        }
        return $resultSet;
    }

}