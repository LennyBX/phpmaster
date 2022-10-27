<?php

namespace models\dto;


class NOTE
{

    private $ID_NOT;
    private $REM_NOT;
    private $DAT_NOT;
    private $NOO_NOT;
    private $NOD_NOT;
    private $NDF_NOT;
    private $NOF_NOT;
    private $NOE_NOT;

    /**
     * @param $ID_NOT
     * @param $REM_NOT
     * @param $DAT_NOT
     * @param $NOO_NOT
     * @param $NOD_NOT
     * @param $NDF_NOT
     * @param $NOF_NOT
     * @param $NOE_NOT
     */
    public function __construct($tab)
    {
        $this->ID_NOT = $tab['ID_NOT'];
        $this->REM_NOT = $tab['REM_NOT'];
        $this->DAT_NOT = $tab['DAT_NOT'];
        $this->NOO_NOT = $tab['NOO_NOT'];
        $this->NOD_NOT = $tab['NOD_NOT'];
        $this->NDF_NOT = $tab['NDF_NOT'];
        $this->NOF_NOT = $tab['NOF_NOT'];
        $this->NOE_NOT = $tab['NOE_NOT'];
    }

    /**
     * @return mixed
     */
    public function getIDNOT()
    {
        return $this->ID_NOT;
    }

    /**
     * @param mixed $ID_NOT
     */
    public function setIDNOT($ID_NOT): void
    {
        $this->ID_NOT = $ID_NOT;
    }

    /**
     * @return mixed
     */
    public function getREMNOT()
    {
        return $this->REM_NOT;
    }

    /**
     * @param mixed $REM_NOT
     */
    public function setREMNOT($REM_NOT): void
    {
        $this->REM_NOT = $REM_NOT;
    }

    /**
     * @return mixed
     */
    public function getDATNOT()
    {
        return $this->DAT_NOT;
    }

    /**
     * @param mixed $DAT_NOT
     */
    public function setDATNOT($DAT_NOT): void
    {
        $this->DAT_NOT = $DAT_NOT;
    }

    /**
     * @return mixed
     */
    public function getNOONOT()
    {
        return $this->NOO_NOT;
    }

    /**
     * @param mixed $NOO_NOT
     */
    public function setNOONOT($NOO_NOT): void
    {
        $this->NOO_NOT = $NOO_NOT;
    }

    /**
     * @return mixed
     */
    public function getNODNOT()
    {
        return $this->NOD_NOT;
    }

    /**
     * @param mixed $NOD_NOT
     */
    public function setNODNOT($NOD_NOT): void
    {
        $this->NOD_NOT = $NOD_NOT;
    }

    /**
     * @return mixed
     */
    public function getNDFNOT()
    {
        return $this->NDF_NOT;
    }

    /**
     * @param mixed $NDF_NOT
     */
    public function setNDFNOT($NDF_NOT): void
    {
        $this->NDF_NOT = $NDF_NOT;
    }

    /**
     * @return mixed
     */
    public function getNOFNOT()
    {
        return $this->NOF_NOT;
    }

    /**
     * @param mixed $NOF_NOT
     */
    public function setNOFNOT($NOF_NOT): void
    {
        $this->NOF_NOT = $NOF_NOT;
    }

    /**
     * @return mixed
     */
    public function getNOENOT()
    {
        return $this->NOE_NOT;
    }

    /**
     * @param mixed $NOE_NOT
     */
    public function setNOENOT($NOE_NOT): void
    {
        $this->NOE_NOT = $NOE_NOT;
    }

}