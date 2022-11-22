<?php

namespace model\dao;

use model\dto\NOTE_1;

class NOTE_1_2SIO_DAO
{
    protected $bdd;
    public function __construct(\PDO $bdd){
        if(!is_null($bdd))
            $this->bdd = $bdd;
    }

    public function getAll() : ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->query('SELECT * FROM note_1');

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new NOTE_1($row);

            }
        }
        return $resultSet;
    }

    public function getById(int $id_note): ?NOTE_1 {
        $resultSet = NULL;
        $req = $this->bdd->prepare('SELECT * FROM note_1 WHERE id_not = :id_note;');
        $res = $req->execute([':id_note' => $id_note]);

        if ($res !== FALSE) {
            $tab = ($tmp = $req->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {
                $resultSet = new NOTE_1($tab);
            }
        }
        return $resultSet;

    }

}