<?php
namespace  jamesluo\smsbai\NewCreative;
class BridgeType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //BridgeType Attributes
    public $bridgeId;
    public $adgroupId;
    public $pause;
    public $status;
    public $campaignId;
    public $operator;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setBridgeId($aBridgeId)
    {
        $wasSet = false;
        $this->bridgeId = $aBridgeId;
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

    public function setCampaignId($aCampaignId)
    {
        $wasSet = false;
        $this->campaignId = $aCampaignId;
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

    public function getBridgeId()
    {
        return $this->bridgeId;
    }

    public function getAdgroupId()
    {
        return $this->adgroupId;
    }

    public function getPause()
    {
        return $this->pause;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getCampaignId()
    {
        return $this->campaignId;
    }

    public function getOperator()
    {
        return $this->operator;
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
