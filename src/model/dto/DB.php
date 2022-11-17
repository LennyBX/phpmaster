<?php

namespace models\dto;

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