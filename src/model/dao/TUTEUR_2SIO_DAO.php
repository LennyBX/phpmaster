<?php

namespace model\dao;

use model\dto\TUTEUR;

class TUTEUR_2SIO_DAO
{
    protected $bdd;
    public function __construct(\PDO $bdd){
        if(!is_null($bdd))
            $this->bdd = $bdd;
    }

    public function getAll() : ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM tuteur');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new TUTEUR($row);

            }
        }
        return $resultSet;
    }

    public function getById(int $id_ent): ?TUTEUR_2SIO_DAO {
        $resultSet = NULL;
        $req = $this->bdd->prepare('SELECT * FROM tuteur WHERE id_tuteur = :id_tuteur;');
        $res = $req->execute([':id_ent' => $id_ent]);

        if ($res !== FALSE) {
            $tab = ($tmp = $req->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {
                $resultSet = new TUTEUR_2SIO_DAO($tab);
            }
        }
        return $resultSet;

    }

    public function getByLogin(string $login): ?TUTEUR {
        $resultSet = NULL;
        $req = $this->bdd->prepare('SELECT * FROM tuteur WHERE LOG_TUT = :log_tut;');
        $res = $req->execute([':log_tut' => $login]);

        if ($res !== FALSE) {
            $tab = ($tmp = $req->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {
                $resultSet = new TUTEUR($tab);
            }
        }
        return $resultSet;
    }

}