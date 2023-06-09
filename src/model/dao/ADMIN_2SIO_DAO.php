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
        $req = $this->bdd->query('SELECT * FROM admin');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new ADMIN($row);

            }
        }
        return $resultSet;
    }

    public function getById(int $id_adm): ?ADMIN {
        $resultSet = NULL;
        $req = $this->bdd->prepare('SELECT * FROM admin WHERE id_adm = :id_adm;');
        $res = $req->execute([':id_adm' => $id_adm]);

        if ($res !== FALSE) {
            $tab = ($tmp = $req->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {
                $resultSet = new ADMIN($tab);
            }
        }
        return $resultSet;
    }

    public function getByLogin(string $login): ?ADMIN {
        $resultSet = NULL;
        $req = $this->bdd->prepare('SELECT * FROM admin WHERE LOG_ADM = :log_adm;');
        $res = $req->execute([':log_adm' => $login]);

        if ($res !== FALSE) {
            $tab = ($tmp = $req->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {
                $resultSet = new ADMIN($tab);
            }
        }
        return $resultSet;
    }


}