<?php
namespace  jamesluo\smsbai\BulkJob;
class FilePathType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //FilePathType Attributes
    public $accountFilePath;
    public $campaignFilePath;
    public $adgroupFilePath;
    public $keywordFilePath;
    public $creativeFilePath;
    public $sublinkFilePath;
    public $mobileSublinkFilePath;
    public $phoneFilePath;
    public $bridgeFilePath;
    public $ecallFilePath;
    public $dynamicCreativeFilePath;
    public $accountFileMd5;
    public $campaignFileMd5;
    public $adgroupFileMd5;
    public $keywordFileMd5;
    public $creativeFileMd5;
    public $sublinkFileMd5;
    public $mobileSublinkFileMd5;
    public $phoneFileMd5;
    public $bridgeFileMd5;
    public $ecallFileMd5;
    public $dynamicCreativeFilePathMd5;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setAccountFilePath($aAccountFilePath)
    {
        $wasSet = false;
        $this->accountFilePath = $aAccountFilePath;
        $wasSet = true;
        return $wasSet;
    }

    public function setCampaignFilePath($aCampaignFilePath)
    {
        $wasSet = false;
        $this->campaignFilePath = $aCampaignFilePath;
        $wasSet = true;
        return $wasSet;
    }

    public function setAdgroupFilePath($aAdgroupFilePath)
    {
        $wasSet = false;
        $this->adgroupFilePath = $aAdgroupFilePath;
        $wasSet = true;
        return $wasSet;
    }

    public function setKeywordFilePath($aKeywordFilePath)
    {
        $wasSet = false;
        $this->keywordFilePath = $aKeywordFilePath;
        $wasSet = true;
        return $wasSet;
    }

    public function setCreativeFilePath($aCreativeFilePath)
    {
        $wasSet = false;
        $this->creativeFilePath = $aCreativeFilePath;
        $wasSet = true;
        return $wasSet;
    }

    public function setSublinkFilePath($aSublinkFilePath)
    {
        $wasSet = false;
        $this->sublinkFilePath = $aSublinkFilePath;
        $wasSet = true;
        return $wasSet;
    }

    public function setMobileSublinkFilePath($aMobileSublinkFilePath)
    {
        $wasSet = false;
        $this->mobileSublinkFilePath = $aMobileSublinkFilePath;
        $wasSet = true;
        return $wasSet;
    }

    public function setPhoneFilePath($aPhoneFilePath)
    {
        $wasSet = false;
        $this->phoneFilePath = $aPhoneFilePath;
        $wasSet = true;
        return $wasSet;
    }

    public function setBridgeFilePath($aBridgeFilePath)
    {
        $wasSet = false;
        $this->bridgeFilePath = $aBridgeFilePath;
        $wasSet = true;
        return $wasSet;
    }

    public function setEcallFilePath($aEcallFilePath)
    {
        $wasSet = false;
        $this->ecallFilePath = $aEcallFilePath;
        $wasSet = true;
        return $wasSet;
    }

    public function setDynamicCreativeFilePath($aDynamicCreativeFilePath)
    {
        $wasSet = false;
        $this->dynamicCreativeFilePath = $aDynamicCreativeFilePath;
        $wasSet = true;
        return $wasSet;
    }

    public function setAccountFileMd5($aAccountFileMd5)
    {
        $wasSet = false;
        $this->accountFileMd5 = $aAccountFileMd5;
        $wasSet = true;
        return $wasSet;
    }

    public function setCampaignFileMd5($aCampaignFileMd5)
    {
        $wasSet = false;
        $this->campaignFileMd5 = $aCampaignFileMd5;
        $wasSet = true;
        return $wasSet;
    }

    public function setAdgroupFileMd5($aAdgroupFileMd5)
    {
        $wasSet = false;
        $this->adgroupFileMd5 = $aAdgroupFileMd5;
        $wasSet = true;
        return $wasSet;
    }

    public function setKeywordFileMd5($aKeywordFileMd5)
    {
        $wasSet = false;
        $this->keywordFileMd5 = $aKeywordFileMd5;
        $wasSet = true;
        return $wasSet;
    }

    public function setCreativeFileMd5($aCreativeFileMd5)
    {
        $wasSet = false;
        $this->creativeFileMd5 = $aCreativeFileMd5;
        $wasSet = true;
        return $wasSet;
    }

    public function setSublinkFileMd5($aSublinkFileMd5)
    {
        $wasSet = false;
        $this->sublinkFileMd5 = $aSublinkFileMd5;
        $wasSet = true;
        return $wasSet;
    }

    public function setMobileSublinkFileMd5($aMobileSublinkFileMd5)
    {
        $wasSet = false;
        $this->mobileSublinkFileMd5 = $aMobileSublinkFileMd5;
        $wasSet = true;
        return $wasSet;
    }

    public function setPhoneFileMd5($aPhoneFileMd5)
    {
        $wasSet = false;
        $this->phoneFileMd5 = $aPhoneFileMd5;
        $wasSet = true;
        return $wasSet;
    }

    public function setBridgeFileMd5($aBridgeFileMd5)
    {
        $wasSet = false;
        $this->bridgeFileMd5 = $aBridgeFileMd5;
        $wasSet = true;
        return $wasSet;
    }

    public function setEcallFileMd5($aEcallFileMd5)
    {
        $wasSet = false;
        $this->ecallFileMd5 = $aEcallFileMd5;
        $wasSet = true;
        return $wasSet;
    }

    public function setDynamicCreativeFilePathMd5($aDynamicCreativeFilePathMd5)
    {
        $wasSet = false;
        $this->dynamicCreativeFilePathMd5 = $aDynamicCreativeFilePathMd5;
        $wasSet = true;
        return $wasSet;
    }

    public function getAccountFilePath()
    {
        return $this->accountFilePath;
    }

    public function getCampaignFilePath()
    {
        return $this->campaignFilePath;
    }

    public function getAdgroupFilePath()
    {
        return $this->adgroupFilePath;
    }

    public function getKeywordFilePath()
    {
        return $this->keywordFilePath;
    }

    public function getCreativeFilePath()
    {
        return $this->creativeFilePath;
    }

    public function getSublinkFilePath()
    {
        return $this->sublinkFilePath;
    }

    public function getMobileSublinkFilePath()
    {
        return $this->mobileSublinkFilePath;
    }

    public function getPhoneFilePath()
    {
        return $this->phoneFilePath;
    }

    public function getBridgeFilePath()
    {
        return $this->bridgeFilePath;
    }

    public function getEcallFilePath()
    {
        return $this->ecallFilePath;
    }

    public function getDynamicCreativeFilePath()
    {
        return $this->dynamicCreativeFilePath;
    }

    public function getAccountFileMd5()
    {
        return $this->accountFileMd5;
    }

    public function getCampaignFileMd5()
    {
        return $this->campaignFileMd5;
    }

    public function getAdgroupFileMd5()
    {
        return $this->adgroupFileMd5;
    }

    public function getKeywordFileMd5()
    {
        return $this->keywordFileMd5;
    }

    public function getCreativeFileMd5()
    {
        return $this->creativeFileMd5;
    }

    public function getSublinkFileMd5()
    {
        return $this->sublinkFileMd5;
    }

    public function getMobileSublinkFileMd5()
    {
        return $this->mobileSublinkFileMd5;
    }

    public function getPhoneFileMd5()
    {
        return $this->phoneFileMd5;
    }

    public function getBridgeFileMd5()
    {
        return $this->bridgeFileMd5;
    }

    public function getEcallFileMd5()
    {
        return $this->ecallFileMd5;
    }

    public function getDynamicCreativeFilePathMd5()
    {
        return $this->dynamicCreativeFilePathMd5;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
