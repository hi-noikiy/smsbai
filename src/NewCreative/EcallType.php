<?php
namespace  jamesluo\smsbai\NewCreative;
class EcallType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //EcallType Attributes
    public $ecallId;
    public $adgroupId;
    public $ecallGroupId;
    public $ecallGroupName;
    public $pause;
    public $status;
    public $operator;
    public $campaignId;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setEcallId($aEcallId)
    {
        $wasSet = false;
        $this->ecallId = $aEcallId;
        $wasSet = true;
        return $wasSet;
    }

    public function setAdgroupId($aAdgroupId)
    {
        $wasSet = false;
        $this->adgroupId = $aAdgroupId;
        $wasSet = true;
        return $wasSet;
    }

    public function setEcallGroupId($aEcallGroupId)
    {
        $wasSet = false;
        $this->ecallGroupId = $aEcallGroupId;
        $wasSet = true;
        return $wasSet;
    }

    public function setEcallGroupName($aEcallGroupName)
    {
        $wasSet = false;
        $this->ecallGroupName = $aEcallGroupName;
        $wasSet = true;
        return $wasSet;
    }

    public function setPause($aPause)
    {
        $wasSet = false;
        $this->pause = $aPause;
        $wasSet = true;
        return $wasSet;
    }

    public function setStatus($aStatus)
    {
        $wasSet = false;
        $this->status = $aStatus;
        $wasSet = true;
        return $wasSet;
    }

    public function setOperator($aOperator)
    {
        $wasSet = false;
        $this->operator = $aOperator;
        $wasSet = true;
        return $wasSet;
    }

    public function setCampaignId($aCampaignId)
    {
        $wasSet = false;
        $this->campaignId = $aCampaignId;
        $wasSet = true;
        return $wasSet;
    }

    public function getEcallId()
    {
        return $this->ecallId;
    }

    public function getAdgroupId()
    {
        return $this->adgroupId;
    }

    public function getEcallGroupId()
    {
        return $this->ecallGroupId;
    }

    public function getEcallGroupName()
    {
        return $this->ecallGroupName;
    }

    public function getPause()
    {
        return $this->pause;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getOperator()
    {
        return $this->operator;
    }

    public function getCampaignId()
    {
        return $this->campaignId;
    }

    public function isPause()
    {
        return $this->pause;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
