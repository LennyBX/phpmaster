<?php

namespace model\dao;

use model\dto\ADMIN;
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

    public function getById(int $id_etu): ?ETUDIANT {
        $resultSet = NULL;
        $req = $this->bdd->prepare('SELECT * FROM etudiant WHERE id_etu = :id_etu;');
        $res = $req->execute([':id_etu' => $id_etu]);

        if ($res !== FALSE) {
            $tab = ($tmp = $req->fetch(\PDO::FETCH_ASSOC)) ? $tmp : null;
            if(!is_null($tab)) {
                $resultSet = new ETUDIANT($tab);
            }
        }
        return $resultSet;
    }

    public function getAllByTuteur(int $id_tut) : ?array
    {
        $resultSet = NULL;
        $req = $this->bdd->prepare('SELECT * FROM etudiant WHERE id_tut_etu = :id_tut');
        $res = $req->execute([':id_tut' => $id_tut]);

        if ($req) {
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            foreach ($req as $row) {
                $resultSet[] = new ETUDIANT($row);

            }
        }
        return $resultSet;
    }

    public function changeInfos(int $id, string $nom, string $prenom, string $mail, string $specialite, int $tel, string $classe)
    {
        $req = $this->bdd->prepare('UPDATE etudiant SET PRE_ETU = :prenom, NOM_ETU = :nom, MAI_ETU = :mail, SPE_ETU = :specialite, TEL_ETU = :tel, CLA_ETU = :classe WHERE id_etu = :id;');
        $res = $req->execute([
            ':id' => $id,
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':mail' => $mail,
            ':specialite' => $specialite,
            ':tel' => $tel,
            ':classe' => $classe
            ]
        );
        return $this->getById($id);
    }

    public function deleteEtudiant(int $id)
    {
        $req = $this->bdd->prepare('DELETE FROM etudiant WHERE id_etu = :id;');
        $res = $req->execute([':id' => $id]);
    }

    public function addEtudiant(string $nom, string $prenom, string $mail, string $specialite, int $tel, string $classe, string $login, string $mdp, int $cp, string $rue, string $ville, int $numrue, int $idEntreprise)
    {
        $req = $this->bdd->prepare('INSERT INTO etudiant (id_etu, nom_etu, pre_etu, cla_etu, spe_etu, log_etu, mdp_etu, cp_etu, rue_etu, vil_etu, num_rue_etu, mai_etu, tel_etu, id_ent_etu, id_not_etu, id_tut_etu, ID_NOT_ETU_BIL_2) VALUES (:id, :nom, :prenom, :specialite, :classe, :login, :mdp, :cp, :rue, :ville, :numrue, :mail, :tel, :idEntreprise, :idnote1, :idTut, :idnote2);');
        $res = $req->execute(
            [
                ':id' => $this->bdd->lastInsertId(),
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':classe' => $classe,
                ':specialite' => $specialite,
                ':login' => $login,
                ':mdp' => password_hash($mdp, PASSWORD_DEFAULT),
                ':cp' => $cp,
                ':rue' => $rue,
                ':ville' => $ville,
                ':numrue' => $numrue,
                ':mail' => $mail,
                ':tel' => $tel,
                ':idEntreprise' => $idEntreprise,
                ':idnote1' => null,
                ':idTut' => null,
                ':idnote2' => null
            ]
        );
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