<?php

namespace model\dao;

use model\dto\ADMIN;

class ADMIN_2SIO_DAO
{
    protected $bdd;
    public function __construct(\PDO $bdd){
        if(!is_null($bdd))
            $this->bdd = $bdd;
    }

    public function getAll() : ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM administrateur');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new ADMIN($row);

            }
        }
        return $resultSet;
    }

    public function getById(int $id_adm): ?ADMIN_2SIO_DAO {
        $resultSet = NULL;
        $req = $this->bdd->prepare('SELECT * FROM administrateur WHERE id_admin = :id_adm;');
        $res = $req->execute([':id_adm' => $id_adm]);

        if ($res !== FALSE) {
            $tab = ($tmp = $req->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {
                $resultSet = new ADMIN_2SIO_DAO($tab);
            }
        }
        return $resultSet;

    }

}