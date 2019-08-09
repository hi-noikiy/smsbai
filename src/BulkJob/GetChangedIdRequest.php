<?php
namespace  jamesluo\smsbai\BulkJob;
class GetChangedIdRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetChangedIdRequest Attributes
    public $startTime;
    public $campaignLevel;
    public $adgroupLevel;
    public $keywordLevel;
    public $creativeLevel;
    public $sublinkLevel;
    public $mobileSublinkLevel;
    public $dynamicCreativeLevel;
    public $phoneLevel;
    public $bridgeLevel;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setStartTime($aStartTime)
    {
        $wasSet = false;
        $this->startTime = $aStartTime;
        $wasSet = true;
        return $wasSet;
    }

    public function setCampaignLevel($aCampaignLevel)
    {
        $wasSet = false;
        $this->campaignLevel = $aCampaignLevel;
        $wasSet = true;
        return $wasSet;
    }

    public function setAdgroupLevel($aAdgroupLevel)
    {
        $wasSet = false;
        $this->adgroupLevel = $aAdgroupLevel;
        $wasSet = true;
        return $wasSet;
    }

    public function setKeywordLevel($aKeywordLevel)
    {
        $wasSet = false;
        $this->keywordLevel = $aKeywordLevel;
        $wasSet = true;
        return $wasSet;
    }

    public function setCreativeLevel($aCreativeLevel)
    {
        $wasSet = false;
        $this->creativeLevel = $aCreativeLevel;
        $wasSet = true;
        return $wasSet;
    }

    public function setSublinkLevel($aSublinkLevel)
    {
        $wasSet = false;
        $this->sublinkLevel = $aSublinkLevel;
        $wasSet = true;
        return $wasSet;
    }

    public function setMobileSublinkLevel($aMobileSublinkLevel)
    {
        $wasSet = false;
        $this->mobileSublinkLevel = $aMobileSublinkLevel;
        $wasSet = true;
        return $wasSet;
    }

    public function setDynamicCreativeLevel($aDynamicCreativeLevel)
    {
        $wasSet = false;
        $this->dynamicCreativeLevel = $aDynamicCreativeLevel;
        $wasSet = true;
        return $wasSet;
    }

    public function setPhoneLevel($aPhoneLevel)
    {
        $wasSet = false;
        $this->phoneLevel = $aPhoneLevel;
        $wasSet = true;
        return $wasSet;
    }

    public function setBridgeLevel($aBridgeLevel)
    {
        $wasSet = false;
        $this->bridgeLevel = $aBridgeLevel;
        $wasSet = true;
        return $wasSet;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getCampaignLevel()
    {
        return $this->campaignLevel;
    }

    public function getAdgroupLevel()
    {
        return $this->adgroupLevel;
    }

    public function getKeywordLevel()
    {
        return $this->keywordLevel;
    }

    public function getCreativeLevel()
    {
        return $this->creativeLevel;
    }

    public function getSublinkLevel()
    {
        return $this->sublinkLevel;
    }

    public function getMobileSublinkLevel()
    {
        return $this->mobileSublinkLevel;
    }

    public function getDynamicCreativeLevel()
    {
        return $this->dynamicCreativeLevel;
    }

    public function getPhoneLevel()
    {
        return $this->phoneLevel;
    }

    public function getBridgeLevel()
    {
        return $this->bridgeLevel;
    }

    public function isCampaignLevel()
    {
        return $this->campaignLevel;
    }

    public function isAdgroupLevel()
    {
        return $this->adgroupLevel;
    }

    public function isKeywordLevel()
    {
        return $this->keywordLevel;
    }

    public function isCreativeLevel()
    {
        return $this->creativeLevel;
    }

    public function isSublinkLevel()
    {
        return $this->sublinkLevel;
    }

    public function isMobileSublinkLevel()
    {
        return $this->mobileSublinkLevel;
    }

    public function isDynamicCreativeLevel()
    {
        return $this->dynamicCreativeLevel;
    }

    public function isPhoneLevel()
    {
        return $this->phoneLevel;
    }

    public function isBridgeLevel()
    {
        return $this->bridgeLevel;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
