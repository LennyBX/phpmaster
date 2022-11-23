<?php

namespace model\dto;

use model\dao\TUTEUR_2SIO_DAO;

class TUTEUR
{

    private $ID_TUT;
    private $NOM_TUT;
    private $MAI_TUT;





    /**
     * @param $ID_TUT
     * @param $NOM_TUT
     * @param $PRE_TUT
     * @param $MAI_TUT
     * @param $TEL_TUT
     * @param $LOG_TUT
     * @param $MDP_TUT
     * @param $ID_NOT_TUT
     */
    public function __construct($tab)
    {
        $this->ID_TUT = $tab['ID_TUT'];
        $this->NOM_TUT = $tab['NOM_TUT'];
        $this->MAI_TUT = $tab['MAI_TUT'];
        $this->PRE_TUT = $tab['PRE_TUT'];
        $this->TEL_TUT = $tab['TEL_TUT'];
        $this->LOG_TUT = $tab['LOG_TUT'];
        $this->MDP_TUT = $tab['MDP_TUT'];
        $this->ID_NOT_TUT = $tab['ID_NOT_TUT'];
    }
    /**
     * @return mixed
     */
    public function getMAITUT()
    {
        return $this->MAI_TUT;
    }

    /**
     * @param mixed $MAI_TUT
     */
    public function setMAITUT($MAI_TUT): void
    {
        $this->MAI_TUT = $MAI_TUT;
    }
    private $PRE_TUT;
    private $TEL_TUT;
    private $LOG_TUT;
    private $MDP_TUT;
    private $ID_NOT_TUT;



    /**
     * @return mixed
     */
    public function getIDTUT()
    {
        return $this->ID_TUT;
    }

    /**
     * @param mixed $ID_TUT
     */
    public function setIDTUT($ID_TUT): void
    {
        $this->ID_TUT = $ID_TUT;
    }

    /**
     * @return mixed
     */
    public function getNOMTUT()
    {
        return $this->NOM_TUT;
    }

    /**
     * @param mixed $NOM_TUT
     */
    public function setNOMTUT($NOM_TUT): void
    {
        $this->NOM_TUT = $NOM_TUT;
    }

    /**
     * @return mixed
     */
    public function getPRETUT()
    {
        return $this->PRE_TUT;
    }

    /**
     * @param mixed $PRE_TUT
     */
    public function setPRETUT($PRE_TUT): void
    {
        $this->PRE_TUT = $PRE_TUT;
    }

    /**
     * @return mixed
     */
    public function getTELTUT()
    {
        return $this->TEL_TUT;
    }

    /**
     * @param mixed $TEL_TUT
     */
    public function setTELTUT($TEL_TUT): void
    {
        $this->TEL_TUT = $TEL_TUT;
    }

    /**
     * @return mixed
     */
    public function getLOGTUT()
    {
        return $this->LOG_TUT;
    }

    /**
     * @param mixed $LOG_TUT
     */
    public function setLOGTUT($LOG_TUT): void
    {
        $this->LOG_TUT = $LOG_TUT;
    }

    /**
     * @return mixed
     */
    public function getMDPTUT()
    {
        return $this->MDP_TUT;
    }

    /**
     * @param mixed $MDP_TUT
     */
    public function setMDPTUT($MDP_TUT): void
    {
        $this->MDP_TUT = $MDP_TUT;
    }

    /**
     * @return mixed
     */
    public function getIDNOTTUT()
    {
        return $this->ID_NOT_TUT;
    }

    /**
     * @param mixed $ID_NOT_TUT
     */
    public function setIDNOTTUT($ID_NOT_TUT): void
    {
        $this->ID_NOT_TUT = $ID_NOT_TUT;
    }

}