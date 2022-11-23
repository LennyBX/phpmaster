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

    public function getById(int $id): ?TUTEUR {
        $resultSet = NULL;
        $req = $this->bdd->prepare('SELECT * FROM tuteur WHERE id_tut = :id_tuteur;');
        $res = $req->execute([':id_tuteur' => $id]);
        if ($res !== FALSE) {
            $tab = ($tmp = $req->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {
                $resultSet = new TUTEUR($tab);
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

    public function changeInfos(int $id, string $nom, string $prenom, string $mail, int $tel)
    {
        $req = $this->bdd->prepare('UPDATE tuteur SET PRE_TUT = :prenom, NOM_TUT = :nom, MAI_TUT = :mail, TEL_TUT = :tel WHERE id_tut = :id;');
        $res = $req->execute([
                ':id' => $id,
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':mail' => $mail,
                ':tel' => $tel
            ]
        );
        return $this->getById($id);
    }


    public function deleteTuteur(int $id)
    {
        $req = $this->bdd->prepare('DELETE FROM tuteur WHERE id_tut = :id;');
        $res = $req->execute([':id' => $id]);
    }

}