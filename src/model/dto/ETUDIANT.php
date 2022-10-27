<?php


namespace models\dto;


class ETUDIANT
{
    private $ID_ETU;
    private $PRE_ETU;
    private $NOM_ETU;
    private $CLA_ETU;
    private $SPE_ETU;
    private $LOG_ETU;
    private $MDP_ETU;
    private $CP_ETU;
    private $RUE_ETU;
    private $VIL_ETU;
    private $NUM_ETU;
    private $MAI_ETU;
    private $TEL_ETU;
    private $IDE_ETU;
    private $IDN_ETU;
    private $IDT_ETU;

    /**
     * @param $ID_ETU
     * @param $PRE_ETU
     * @param $NOM_ETU
     * @param $CLA_ETU
     * @param $SPE_ETU
     * @param $LOG_ETU
     * @param $MDP_ETU
     * @param $CP_ETU
     * @param $RUE_ETU
     * @param $VIL_ETU
     * @param $NUM_ETU
     * @param $MAI_ETU
     * @param $TEL_ETU
     * @param $IDE_ETU
     * @param $IDN_ETU
     * @param $IDT_ETU
     */
    public function __construct($tab)
    {
        $this->ID_ETU = $tab['ID_ETU'];
        $this->PRE_ETU = $tab['PRE_ETU'];
        $this->NOM_ETU = $tab['NOM_ETU'];
        $this->CLA_ETU = $tab['CLA_ETU'];
        $this->SPE_ETU = $tab['SPE_ETU'];
        $this->LOG_ETU = $tab['LOG_ETU'];
        $this->MDP_ETU = $tab['MDP_ETU'];
        $this->CP_ETU = $tab['CP_ETU'];
        $this->RUE_ETU = $tab['RUE_ETU'];
        $this->VIL_ETU = $tab['VIL_ETU'];
        $this->NUM_ETU = $tab['NUM_ETU'];
        $this->MAI_ETU = $tab['MAI_ETU'];
        $this->TEL_ETU = $tab['TEL_ETU'];
        $this->IDE_ETU = $tab['IDE_ETU'];
        $this->IDN_ETU = $tab['IDN_ETU'];
        $this->IDT_ETU = $tab['IDT_ETU'];
    }

    /**
     * @return mixed
     */
    public function getIDETU()
    {
        return $this->ID_ETU;
    }

    /**
     * @param mixed $ID_ETU
     */
    public function setIDETU($ID_ETU)
    {
        $this->ID_ETU = $ID_ETU;
    }

    /**
     * @return mixed
     */
    public function getPREETU()
    {
        return $this->PRE_ETU;
    }

    /**
     * @param mixed $PRE_ETU
     */
    public function setPREETU($PRE_ETU)
    {
        $this->PRE_ETU = $PRE_ETU;
    }

    /**
     * @return mixed
     */
    public function getNOMETU()
    {
        return $this->NOM_ETU;
    }

    /**
     * @param mixed $NOM_ETU
     */
    public function setNOMETU($NOM_ETU)
    {
        $this->NOM_ETU = $NOM_ETU;
    }

    /**
     * @return mixed
     */
    public function getCLAETU()
    {
        return $this->CLA_ETU;
    }

    /**
     * @param mixed $CLA_ETU
     */
    public function setCLAETU($CLA_ETU)
    {
        $this->CLA_ETU = $CLA_ETU;
    }

    /**
     * @return mixed
     */
    public function getSPEETU()
    {
        return $this->SPE_ETU;
    }

    /**
     * @param mixed $SPE_ETU
     */
    public function setSPEETU($SPE_ETU)
    {
        $this->SPE_ETU = $SPE_ETU;
    }

    /**
     * @return mixed
     */
    public function getLOGETU()
    {
        return $this->LOG_ETU;
    }

    /**
     * @param mixed $LOG_ETU
     */
    public function setLOGETU($LOG_ETU)
    {
        $this->LOG_ETU = $LOG_ETU;
    }

    /**
     * @return mixed
     */
    public function getMDPETU()
    {
        return $this->MDP_ETU;
    }

    /**
     * @param mixed $MDP_ETU
     */
    public function setMDPETU($MDP_ETU)
    {
        $this->MDP_ETU = $MDP_ETU;
    }

    /**
     * @return mixed
     */
    public function getCPETU()
    {
        return $this->CP_ETU;
    }

    /**
     * @param mixed $CP_ETU
     */
    public function setCPETU($CP_ETU)
    {
        $this->CP_ETU = $CP_ETU;
    }

    /**
     * @return mixed
     */
    public function getRUEETU()
    {
        return $this->RUE_ETU;
    }

    /**
     * @param mixed $RUE_ETU
     */
    public function setRUEETU($RUE_ETU)
    {
        $this->RUE_ETU = $RUE_ETU;
    }

    /**
     * @return mixed
     */
    public function getVILETU()
    {
        return $this->VIL_ETU;
    }

    /**
     * @param mixed $VIL_ETU
     */
    public function setVILETU($VIL_ETU)
    {
        $this->VIL_ETU = $VIL_ETU;
    }

    /**
     * @return mixed
     */
    public function getNUMETU()
    {
        return $this->NUM_ETU;
    }

    /**
     * @param mixed $NUM_ETU
     */
    public function setNUMETU($NUM_ETU)
    {
        $this->NUM_ETU = $NUM_ETU;
    }

    /**
     * @return mixed
     */
    public function getMAIETU()
    {
        return $this->MAI_ETU;
    }

    /**
     * @param mixed $MAI_ETU
     */
    public function setMAIETU($MAI_ETU)
    {
        $this->MAI_ETU = $MAI_ETU;
    }

    /**
     * @return mixed
     */
    public function getTELETU()
    {
        return $this->TEL_ETU;
    }

    /**
     * @param mixed $TEL_ETU
     */
    public function setTELETU($TEL_ETU)
    {
        $this->TEL_ETU = $TEL_ETU;
    }

    /**
     * @return mixed
     */
    public function getIDEETU()
    {
        return $this->IDE_ETU;
    }

    /**
     * @param mixed $IDE_ETU
     */
    public function setIDEETU($IDE_ETU)
    {
        $this->IDE_ETU = $IDE_ETU;
    }

    /**
     * @return mixed
     */
    public function getIDTNTU()
    {
        return $this->IDN_ETU;
    }

    /**
     * @param mixed $IDN_ETU
     */
    public function setIDNETU($IDN_ETU)
    {
        $this->IDN_ETU = $IDN_ETU;
    }

    /**
     * @return mixed
     */
    public function getIDTETU()
    {
        return $this->IDT_ETU;
    }

    /**
     * @param mixed $IDT_ETU
     */
    public function setIDTETU($IDT_ETU)
    {
        $this->IDT_ETU = $IDT_ETU;
    }


}