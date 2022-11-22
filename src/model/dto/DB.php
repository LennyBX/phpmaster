<?php

namespace model\dto;

class DB
{

    private \PDO $PDO;
    private $HOST;
    private $NAME;
    private $USERNAME;
    private $PASSWORD;

    public function __construct(string $HOST, string $NAME, string $USERNAME, string $PASSWORD)
    {
        $bdd = new \PDO("mysql:host={$HOST};dbname={$NAME};charset=UTF8", "{$USERNAME}", "{$PASSWORD}");
        $this->PDO = $bdd;
    }

    public function connectUser(string $login, string $mdp): ?string{
        $query_check_admin = $this->PDO->prepare("Select * from admin where LOG_ADM = :id_adm;");
        $query_check_tuteur = $this->PDO->prepare("Select * from tuteur where LOG_TUT = :log_tut;");
        $query_check_etudiant = $this->PDO->prepare("Select * from etudiant where LOG_ETU = :log_etu;");

        if ($query_check_admin) return 'admin';
        elseif ($query_check_tuteur) return 'tuteur';
        elseif ($query_check_etudiant) return 'etudiant';
        else return null;
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->HOST;
    }

    /**
     * @param mixed $HOST
     */
    public function setHost($HOST): void
    {
        $this->HOST = $HOST;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->NAME;
    }

    /**
     * @param mixed $NAME
     */
    public function setName($NAME): void
    {
        $this->NAME = $NAME;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->USERNAME;
    }

    /**
     * @param mixed $USERNAME
     */
    public function setUsername($USERNAME): void
    {
        $this->USERNAME = $USERNAME;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->PASSWORD;
    }

    /**
     * @param mixed $PASSWORD
     */
    public function setPassword($PASSWORD): void
    {
        $this->PASSWORD = $PASSWORD;
    }

    /**
     * @return \PDO
     */
    public function getPDO(): \PDO
    {
        return $this->PDO;
    }

    /**
     * @param \PDO $PDO
     */
    public function setPDO(\PDO $PDO): void
    {
        $this->PDO = $PDO;
    }

}