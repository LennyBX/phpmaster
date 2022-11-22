<?php

namespace model\dao;

use model\dto\ENTREPRISE;

class ENTREPRISE_2SIO_DAO
{
    protected $bdd;
    public function __construct(\PDO $bdd){
        if(!is_null($bdd))
            $this->bdd = $bdd;
    }

    public function getAll() : ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM entreprise');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new ENTREPRISE($row);

            }
        }
        return $resultSet;
    }

    public function getById(int $id_ent): ?ENTREPRISE_2SIO_DAO {
        $resultSet = NULL;
        $req = $this->bdd->prepare('SELECT * FROM entreprise WHERE id_entre = :id_ent;');
        $res = $req->execute([':id_ent' => $id_ent]);

        if ($res !== FALSE) {
            $tab = ($tmp = $req->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {
                $resultSet = new ENTREPRISE_2SIO_DAO($tab);
            }
        }
        return $resultSet;

    }

}