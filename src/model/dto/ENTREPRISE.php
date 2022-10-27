<?php

namespace models\dto;


class ENTREPRISE
{

    // MDS = Maître de stage //
    private $ID_ENT;
    private $LIB_ENT;
    private $NOM_MDS_ENT;
    private $PRE_MDS_ENT;
    private $CP_ENT;
    private $VIL_ENT;
    private $RUE_ENT;
    private $NUM_RUE_ENT;
    private $TEL_MDS_ENT;
    private $MAI_MDS_ENT;

    /**
     * @param $ID_ENT
     * @param $LIB_ENT
     * @param $NOM_MDS_ENT
     * @param $PRE_MDS_ENT
     * @param $CP_ENT
     * @param $VIL_ENT
     * @param $RUE_ENT
     * @param $NUM_RUE_ENT
     * @param $TEL_MDS_ENT
     * @param $MAI_MDS_ENT
     */
    public function __construct($tab)
    {
        $this->ID_ENT = $tab['ID_ENT'];
        $this->LIB_ENT = $tab['LIB_ENT'];
        $this->NOM_MDS_ENT = $tab['NOM_MDS_ENT'];
        $this->PRE_MDS_ENT = $tab['PRE_MDS_ENT'];
        $this->CP_ENT = $tab['CP_ENT'];
        $this->VIL_ENT = $tab['VIL_ENT'];
        $this->RUE_ENT = $tab['RUE_ENT'];
        $this->NUM_RUE_ENT = $tab['NUM_RUE_ENT'];
        $this->TEL_MDS_ENT = $tab['TEL_MDS_ENT'];
        $this->MAI_MDS_ENT = $tab['MAI_MDS_ENT'];
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
    public function getNOMMDSENT()
    {
        return $this->NOM_MDS_ENT;
    }

    /**
     * @param mixed $NOM_MDS_ENT
     */
    public function setNOMMDSENT($NOM_MDS_ENT): void
    {
        $this->NOM_MDS_ENT = $NOM_MDS_ENT;
    }

    /**
     * @return mixed
     */
    public function getPREMDSENT()
    {
        return $this->PRE_MDS_ENT;
    }

    /**
     * @param mixed $PRE_MDS_ENT
     */
    public function setPREMDSENT($PRE_MDS_ENT): void
    {
        $this->PRE_MDS_ENT = $PRE_MDS_ENT;
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
    public function getNUMRUEENT()
    {
        return $this->NUM_RUE_ENT;
    }

    /**
     * @param mixed $NUM_RUE_ENT
     */
    public function setNUMRUEENT($NUM_RUE_ENT): void
    {
        $this->NUM_RUE_ENT = $NUM_RUE_ENT;
    }

    /**
     * @return mixed
     */
    public function getTELMDSENT()
    {
        return $this->TEL_MDS_ENT;
    }

    /**
     * @param mixed $TEL_MDS_ENT
     */
    public function setTELMDSENT($TEL_MDS_ENT): void
    {
        $this->TEL_MDS_ENT = $TEL_MDS_ENT;
    }

    /**
     * @return mixed
     */
    public function getMAIENT()
    {
        return $this->MAI_MDS_ENT;
    }

    /**
     * @param mixed $MAI_MDS_ENT
     */
    public function setMAIMDSENT($MAI_MDS_ENT): void
    {
        $this->MAI_MDS_ENT = $MAI_MDS_ENT;
    }

}