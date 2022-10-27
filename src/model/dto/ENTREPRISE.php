<?php

namespace models\dto;


class ENTREPRISE
{

    private $ID_ENT;
    private $LIB_ENT;
    private $NOM_ENT;
    private $PRE_ENT;
    private $CP_ENT;
    private $VIL_ENT;
    private $RUE_ENT;
    private $NUM_ENT;
    private $TEL_ENT;
    private $MAI_ENT;

    /**
     * @param $ID_ENT
     * @param $LIB_ENT
     * @param $NOM_ENT
     * @param $PRE_ENT
     * @param $CP_ENT
     * @param $VIL_ENT
     * @param $RUE_ENT
     * @param $NUM_ENT
     * @param $TEL_ENT
     * @param $MAI_ENT
     */
    public function __construct($tab)
    {
        $this->ID_ENT = $tab['ID_ENT'];
        $this->LIB_ENT = $tab['LIB_ENT'];
        $this->NOM_ENT = $tab['NOM_ENT'];
        $this->PRE_ENT = $tab['PRE_ENT'];
        $this->CP_ENT = $tab['CP_ENT'];
        $this->VIL_ENT = $tab['VIL_ENT'];
        $this->RUE_ENT = $tab['RUE_ENT'];
        $this->NUM_ENT = $tab['NUM_ENT'];
        $this->TEL_ENT = $tab['TEL_ENT'];
        $this->MAI_ENT = $tab['MAI_ENT'];
    }

    /**
     * @return mixed
     */
    public function getIDENT()
    {
        return $this->ID_ENT;
    }

    /**
     * @param mixed $ID_ENT
     */
    public function setIDENT($ID_ENT): void
    {
        $this->ID_ENT = $ID_ENT;
    }

    /**
     * @return mixed
     */
    public function getLIBENT()
    {
        return $this->LIB_ENT;
    }

    /**
     * @param mixed $LIB_ENT
     */
    public function setLIBENT($LIB_ENT): void
    {
        $this->LIB_ENT = $LIB_ENT;
    }

    /**
     * @return mixed
     */
    public function getNOMENT()
    {
        return $this->NOM_ENT;
    }

    /**
     * @param mixed $NOM_ENT
     */
    public function setNOMENT($NOM_ENT): void
    {
        $this->NOM_ENT = $NOM_ENT;
    }

    /**
     * @return mixed
     */
    public function getPREENT()
    {
        return $this->PRE_ENT;
    }

    /**
     * @param mixed $PRE_ENT
     */
    public function setPREENT($PRE_ENT): void
    {
        $this->PRE_ENT = $PRE_ENT;
    }

    /**
     * @return mixed
     */
    public function getCPENT()
    {
        return $this->CP_ENT;
    }

    /**
     * @param mixed $CP_ENT
     */
    public function setCPENT($CP_ENT): void
    {
        $this->CP_ENT = $CP_ENT;
    }

    /**
     * @return mixed
     */
    public function getVILENT()
    {
        return $this->VIL_ENT;
    }

    /**
     * @param mixed $VIL_ENT
     */
    public function setVILENT($VIL_ENT): void
    {
        $this->VIL_ENT = $VIL_ENT;
    }

    /**
     * @return mixed
     */
    public function getRUEENT()
    {
        return $this->RUE_ENT;
    }

    /**
     * @param mixed $RUE_ENT
     */
    public function setRUEENT($RUE_ENT): void
    {
        $this->RUE_ENT = $RUE_ENT;
    }

    /**
     * @return mixed
     */
    public function getNUMENT()
    {
        return $this->NUM_ENT;
    }

    /**
     * @param mixed $NUM_ENT
     */
    public function setNUMENT($NUM_ENT): void
    {
        $this->NUM_ENT = $NUM_ENT;
    }

    /**
     * @return mixed
     */
    public function getTELENT()
    {
        return $this->TEL_ENT;
    }

    /**
     * @param mixed $TEL_ENT
     */
    public function setTELENT($TEL_ENT): void
    {
        $this->TEL_ENT = $TEL_ENT;
    }

    /**
     * @return mixed
     */
    public function getMAIENT()
    {
        return $this->MAI_ENT;
    }

    /**
     * @param mixed $MAI_ENT
     */
    public function setMAIENT($MAI_ENT): void
    {
        $this->MAI_ENT = $MAI_ENT;
    }

}