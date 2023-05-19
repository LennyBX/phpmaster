<?php

namespace model\dto;

use model\dao\NOTE_1_2SIO_DAO;

class NOTE_1
{

    private $ID_NOT_1;
    private $REM_NOT_BIL_1;
    private $DAT_BIL_1;
    private $NOT_ORA_NOT;
    private $NOT_DOS_NOT;
    private $NOT_ENT_NOT;

    /**
     * @param $ID_NOT_1
     * @param $REM_NOT_BIL_1
     * @param $DAT_BIL_1
     * @param $NOT_ORA_NOT
     * @param $NOT_DOS_NOT
     * @param $NOT_ENT_NOT
     */
    public function __construct($tab)
    {
        $this->ID_NOT_1 = $tab['ID_NOT_1'];
        $this->REM_NOT_BIL_1 = $tab['REM_NOT_BIL_1'];
        $this->DAT_BIL_1 = $tab['DAT_BIL_1'];
        $this->NOT_ORA_NOT = $tab['NOT_ORA_NOT'];
        $this->NOT_DOS_NOT = $tab['NOT_DOS_NOT'];
        $this->NOT_ENT_NOT = $tab['NOT_ENT_NOT'];
    }

    public function getjsonformat(){

        return array("ID_NOT_1"=>$this->getIDNOT1(),"REM_NOT_BIL_1"=>$this->getREMNOTBIL1(),"DAT_BIL_1"=>$this->getDATBIL1(),"NOT_ORA_NOT"=>$this->getNOTENTNOT(),"NOT_DOS_NOT"=>$this->getNOTDOSNOT(),
            "NOT_ENT_NOT"=>$this->getNOTENTNOT());

    }

    /**
     * @return mixed
     */
    public function getIDNOT1()
    {
        return $this->ID_NOT_1;
    }

    /**
     * @param mixed $ID_NOT_1
     */
    public function setIDNOT1($ID_NOT_1): void
    {
        $this->ID_NOT_1 = $ID_NOT_1;
    }

    /**
     * @return mixed
     */
    public function getREMNOTBIL1()
    {
        return $this->REM_NOT_BIL_1;
    }

    /**
     * @param mixed $REM_NOT_BIL_1
     */
    public function setREMNOTBIL1($REM_NOT_BIL_1): void
    {
        $this->REM_NOT_BIL_1 = $REM_NOT_BIL_1;
    }

    /**
     * @return mixed
     */
    public function getDATBIL1()
    {
        return $this->DAT_BIL_1;
    }

    /**
     * @param mixed $DAT_BIL_1
     */
    public function setDATBIL1($DAT_BIL_1): void
    {
        $this->DAT_BIL_1 = $DAT_BIL_1;
    }

    /**
     * @return mixed
     */
    public function getNOTORANOT()
    {
        return $this->NOT_ORA_NOT;
    }

    /**
     * @param mixed $NOT_ORA_NOT
     */
    public function setNOTORANOT($NOT_ORA_NOT): void
    {
        $this->NOT_ORA_NOT = $NOT_ORA_NOT;
    }

    /**
     * @return mixed
     */
    public function getNOTDOSNOT()
    {
        return $this->NOT_DOS_NOT;
    }

    /**
     * @param mixed $NOT_DOS_NOT
     */
    public function setNOTDOSNOT($NOT_DOS_NOT): void
    {
        $this->NOT_DOS_NOT = $NOT_DOS_NOT;
    }

    /**
     * @return mixed
     */
    public function getNOTENTNOT()
    {
        return $this->NOT_ENT_NOT;
    }

    /**
     * @param mixed $NOT_ENT_NOT
     */
    public function setNOTENTNOT($NOT_ENT_NOT): void
    {
        $this->NOT_ENT_NOT = $NOT_ENT_NOT;
    }

}