<?php
namespace  jamesluo\smsbai\NewCreative;
class PhoneType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //PhoneType Attributes
    public $phoneId;
    public $phoneNum;
    public $adgroupId;
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

    public function setPhoneId($aPhoneId)
    {
        $wasSet = false;
        $this->phoneId = $aPhoneId;
        $wasSet = true;
        return $wasSet;
    }

    public function setPhoneNum($aPhoneNum)
    {
        $wasSet = false;
        $this->phoneNum = $aPhoneNum;
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

    public function getPhoneId()
    {
        return $this->phoneId;
    }

    public function getPhoneNum()
    {
        return $this->phoneNum;
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
