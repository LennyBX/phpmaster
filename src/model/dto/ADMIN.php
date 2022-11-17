<?php

namespace model\dto;

use model\dao\ADMIN_2SIO_DAO;

class ADMIN
{

    private $ID_ADM;
    private $LOG_ADM;
    private $MDP_ADM;

    /**
     * @param $ID_ADM
     * @param $LOG_ADM
     * @param $MDP_ADM
     */
    public function __construct($tab)
    {
        $this->ID_ADM = $tab['ID_ADM'];
        $this->LOG_ADM = $tab['LOG_ADM'];
        $this->MDP_ADM = $tab['MDP_ADM'];
    }

    /**
     * @return mixed
     */
    public function getIDADM()
    {
        return $this->ID_ADM;
    }

    /**
     * @param mixed $ID_ADM
     */
    public function setIDADM($ID_ADM): void
    {
        $this->ID_ADM = $ID_ADM;
    }

    /**
     * @return mixed
     */
    public function getLOGADM()
    {
        return $this->LOG_ADM;
    }

    /**
     * @param mixed $LOG_ADM
     */
    public function setLOGADM($LOG_ADM): void
    {
        $this->LOG_ADM = $LOG_ADM;
    }

    /**
     * @return mixed
     */
    public function getMDPADM()
    {
        return $this->MDP_ADM;
    }

    /**
     * @param mixed $MDP_ADM
     */
    public function setMDPADM($MDP_ADM): void
    {
        $this->MDP_ADM = $MDP_ADM;
    }

}