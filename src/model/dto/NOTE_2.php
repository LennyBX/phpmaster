<?php

namespace model\dto;

use model\dao\NOTE_1_2SIO_DAO;

class NOTE_2
{

    private $ID_NOT_2;
    private $REM_NOT_BIL_2;
    private $DAT_NOT_BIL_2;
    private $NOT_DOS_BIL_2;
    private $NOT_ENT_NOT_BIL_2;
    private $NOT_ORA_BIL_2;

    /**
     * @param $ID_NOT_2
     * @param $REM_NOT_BIL_2
     * @param $DAT_NOT_BIL_2
     * @param $NOT_DOS_BIL_2
     * @param $NOT_ENT_NOT_BIL_2
     * @param $NOT_ORA_BIL_2
     */
    public function __construct($tab)
    {
        $this->ID_NOT_2 = $tab['ID_NOT_2'];
        $this->REM_NOT_BIL_2 = $tab['REM_NOT_BIL_2'];
        $this->DAT_NOT_BIL_2 = $tab['DAT_NOT_BIL_2'];
        $this->NOT_DOS_BIL_2 = $tab['NOT_DOS_BIL_2'];
        $this->NOT_ENT_NOT_BIL_2 = $tab['NOT_ENT_NOT_BIL_2'];
        $this->NOT_ORA_BIL_2 = $tab['NOT_ORA_BIL_2'];
    }


    public function getjsonformat(){

        return array("ID_NOT_2"=>$this->getIDNOT2(),"REM_NOT_BIL_2"=>$this->getREMNOTBIL2(),"DAT_NOT_BIL_2"=>$this->getDATNOTBIL2(),"NOT_DOS_BIL_2"=>$this->getNOTDOSBIL2(),"NOT_ENT_NOT_BIL_2"=>$this->getNOTENTNOTBIL2(),
            "NOT_ORA_BIL_2"=>$this->getNOTORABIL2());

    }
    /**
     * @return mixed
     */
    public function getIDNOT2()
    {
        return $this->ID_NOT_2;
    }

    /**
     * @param mixed $ID_NOT_2
     */
    public function setIDNOT2($ID_NOT_2): void
    {
        $this->ID_NOT_2 = $ID_NOT_2;
    }

    /**
     * @return mixed
     */
    public function getREMNOTBIL2()
    {
        return $this->REM_NOT_BIL_2;
    }

    /**
     * @param mixed $REM_NOT_BIL_2
     */
    public function setREMNOTBIL2($REM_NOT_BIL_2): void
    {
        $this->REM_NOT_BIL_2 = $REM_NOT_BIL_2;
    }

    /**
     * @return mixed
     */
    public function getDATNOTBIL2()
    {
        return $this->DAT_NOT_BIL_2;
    }

    /**
     * @param mixed $DAT_NOT_BIL_2
     */
    public function setDATNOTBIL2($DAT_NOT_BIL_2): void
    {
        $this->DAT_NOT_BIL_2 = $DAT_NOT_BIL_2;
    }

    /**
     * @return mixed
     */
    public function getNOTDOSBIL2()
    {
        return $this->NOT_DOS_BIL_2;
    }

    /**
     * @param mixed $NOT_DOS_BIL_2
     */
    public function setNOTDOSBIL2($NOT_DOS_BIL_2): void
    {
        $this->NOT_DOS_BIL_2 = $NOT_DOS_BIL_2;
    }

    /**
     * @return mixed
     */
    public function getNOTENTNOTBIL2()
    {
        return $this->NOT_ENT_NOT_BIL_2;
    }

    /**
     * @param mixed $NOT_ENT_NOT_BIL_2
     */
    public function setNOTENTNOTBIL2($NOT_ENT_NOT_BIL_2): void
    {
        $this->NOT_ENT_NOT_BIL_2 = $NOT_ENT_NOT_BIL_2;
    }

    /**
     * @return mixed
     */
    public function getNOTORABIL2()
    {
        return $this->NOT_ORA_BIL_2;
    }

    /**
     * @param mixed $NOT_ORA_BIL_2
     */
    public function setNOTORABIL2($NOT_ORA_BIL_2): void
    {
        $this->NOT_ORA_BIL_2 = $NOT_ORA_BIL_2;
    }

}