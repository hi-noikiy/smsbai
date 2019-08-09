<?php
namespace jamesluo\smsbai\BulkJob;
class ChangedItemIdType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //ChangedItemIdType Attributes
    public $operator;
    public $creativeId;
    public $dynCreativeId;
    public $keywordId;
    public $adgroupId;
    public $campaignId;
    public $sublinkId;
    public $mobileSublinkId;
    public $phoneId;
    public $bridgeId;
    public $ecallId;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setOperator($aOperator)
    {
        $wasSet = false;
        $this->operator = $aOperator;
        $wasSet = true;
        return $wasSet;
    }

    public function setCreativeId($aCreativeId)
    {
        $wasSet = false;
        $this->creativeId = $aCreativeId;
        $wasSet = true;
        return $wasSet;
    }

    public function setDynCreativeId($aDynCreativeId)
    {
        $wasSet = false;
        $this->dynCreativeId = $aDynCreativeId;
        $wasSet = true;
        return $wasSet;
    }

    public function setKeywordId($aKeywordId)
    {
        $wasSet = false;
        $this->keywordId = $aKeywordId;
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

    public function setCampaignId($aCampaignId)
    {
        $wasSet = false;
        $this->campaignId = $aCampaignId;
        $wasSet = true;
        return $wasSet;
    }

    public function setSublinkId($aSublinkId)
    {
        $wasSet = false;
        $this->sublinkId = $aSublinkId;
        $wasSet = true;
        return $wasSet;
    }

    public function setMobileSublinkId($aMobileSublinkId)
    {
        $wasSet = false;
        $this->mobileSublinkId = $aMobileSublinkId;
        $wasSet = true;
        return $wasSet;
    }

    public function setPhoneId($aPhoneId)
    {
        $wasSet = false;
        $this->phoneId = $aPhoneId;
        $wasSet = true;
        return $wasSet;
    }

    public function setBridgeId($aBridgeId)
    {
        $wasSet = false;
        $this->bridgeId = $aBridgeId;
        $wasSet = true;
        return $wasSet;
    }

    public function setEcallId($aEcallId)
    {
        $wasSet = false;
        $this->ecallId = $aEcallId;
        $wasSet = true;
        return $wasSet;
    }

    public function getOperator()
    {
        return $this->operator;
    }

    public function getCreativeId()
    {
        return $this->creativeId;
    }

    public function getDynCreativeId()
    {
        return $this->dynCreativeId;
    }

    public function getKeywordId()
    {
        return $this->keywordId;
    }

    public function getAdgroupId()
    {
        return $this->adgroupId;
    }

    public function getCampaignId()
    {
        return $this->campaignId;
    }

    public function getSublinkId()
    {
        return $this->sublinkId;
    }

    public function getMobileSublinkId()
    {
        return $this->mobileSublinkId;
    }

    public function getPhoneId()
    {
        return $this->phoneId;
    }

    public function getBridgeId()
    {
        return $this->bridgeId;
    }

    public function getEcallId()
    {
        return $this->ecallId;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
