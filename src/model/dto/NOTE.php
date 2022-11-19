<?php

namespace model\dto;

use model\dao\NOTE_2SIO_DAO;

class NOTE
{

    private $ID_NOT;
    private $REM_NOT;
    private $DAT_NOT;
    private $NOT_ORA_NOT;
    private $NOT_DOS_NOT;
    private $NOT_DOS_FIN_NOT;
    private $NOT_ORA_FIN_NOT;
    private $NOT_ENT_NOT;

    /**
     * @param $ID_NOT
     * @param $REM_NOT
     * @param $DAT_NOT
     * @param $NOT_ORA_NOT
     * @param $NOT_DOS_NOT
     * @param $NOT_DOS_FIN_NOT
     * @param $NOT_ORA_FIN_NOT
     * @param $NOT_ENT_NOT
     */
    public function __construct($tab)
    {
        $this->ID_NOT = $tab['ID_NOT'];
        $this->REM_NOT = $tab['REM_NOT'];
        $this->DAT_NOT = $tab['DAT_NOT'];
        $this->NOT_ORA_NOT = $tab['NOT_ORA_NOT'];
        $this->NOT_DOS_NOT = $tab['NOT_DOS_NOT'];
        $this->NOT_DOS_FIN_NOT = $tab['NOT_DOS_FIN_NOT'];
        $this->NOT_ORA_FIN_NOT = $tab['NOT_ORA_FIN_NOT'];
        $this->NOT_ENT_NOT = $tab['NOT_ENT_NOT'];
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
    public function getNOTDOSFINNOT()
    {
        return $this->NOT_DOS_FIN_NOT;
    }

    /**
     * @param mixed $NOT_DOS_FIN_NOT
     */
    public function setNOTDOSFINNOT($NOT_DOS_FIN_NOT): void
    {
        $this->NOT_DOS_FIN_NOT = $NOT_DOS_FIN_NOT;
    }

    /**
     * @return mixed
     */
    public function getNOTORAFINNOT()
    {
        return $this->NOT_ORA_FIN_NOT;
    }

    /**
     * @param mixed $NOT_ORA_FIN_NOT
     */
    public function setNOTORAFINNOT($NOT_ORA_FIN_NOT): void
    {
        $this->NOT_ORA_FIN_NOT = $NOT_ORA_FIN_NOT;
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