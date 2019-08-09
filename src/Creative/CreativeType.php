<?php
namespace  jamesluo\smsbai\Creative;
class CreativeType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //CreativeType Attributes
    public $campaignId;
    public $creativeId;
    public $adgroupId;
    public $title;
    public $description1;
    public $description2;
    public $destinationUrl;
    public $displayUrl;
    public $pause;
    public $status;
    public $mobileDestinationUrl;
    public $mobileDisplayUrl;
    public $pcDestinationUrl;
    public $pcDisplayUrl;
    public $offlineReasons;
    public $tabs;
    public $devicePreference;
    public $temp;
    public $operator;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setCampaignId($aCampaignId)
    {
        $wasSet = false;
        $this->campaignId = $aCampaignId;
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

    public function setAdgroupId($aAdgroupId)
    {
        $wasSet = false;
        $this->adgroupId = $aAdgroupId;
        $wasSet = true;
        return $wasSet;
    }

    public function setTitle($aTitle)
    {
        $wasSet = false;
        $this->title = $aTitle;
        $wasSet = true;
        return $wasSet;
    }

    public function setDescription1($aDescription1)
    {
        $wasSet = false;
        $this->description1 = $aDescription1;
        $wasSet = true;
        return $wasSet;
    }

    public function setDescription2($aDescription2)
    {
        $wasSet = false;
        $this->description2 = $aDescription2;
        $wasSet = true;
        return $wasSet;
    }

    public function setDestinationUrl($aDestinationUrl)
    {
        $wasSet = false;
        $this->destinationUrl = $aDestinationUrl;
        $wasSet = true;
        return $wasSet;
    }

    public function setDisplayUrl($aDisplayUrl)
    {
        $wasSet = false;
        $this->displayUrl = $aDisplayUrl;
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

    public function setMobileDestinationUrl($aMobileDestinationUrl)
    {
        $wasSet = false;
        $this->mobileDestinationUrl = $aMobileDestinationUrl;
        $wasSet = true;
        return $wasSet;
    }

    public function setMobileDisplayUrl($aMobileDisplayUrl)
    {
        $wasSet = false;
        $this->mobileDisplayUrl = $aMobileDisplayUrl;
        $wasSet = true;
        return $wasSet;
    }

    public function setPcDestinationUrl($aPcDestinationUrl)
    {
        $wasSet = false;
        $this->pcDestinationUrl = $aPcDestinationUrl;
        $wasSet = true;
        return $wasSet;
    }

    public function setPcDisplayUrl($aPcDisplayUrl)
    {
        $wasSet = false;
        $this->pcDisplayUrl = $aPcDisplayUrl;
        $wasSet = true;
        return $wasSet;
    }
    public function setOfflineReasons($aofflineReasons) {
        $this->offlineReasons = $aofflineReasons;
    }

    public function addOfflineReason($aOfflineReason)
    {
        $wasAdded = false;
        $this->offlineReasons[] = $aOfflineReason;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeOfflineReason($aOfflineReason)
    {
        $wasRemoved = false;
        unset($this->offlineReasons[$this->indexOfOfflineReason($aOfflineReason)]);
        $this->offlineReasons = array_values($this->offlineReasons);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setTabs($atabs) {
        $this->tabs = $atabs;
    }

    public function addTab($aTab)
    {
        $wasAdded = false;
        $this->tabs[] = $aTab;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeTab($aTab)
    {
        $wasRemoved = false;
        unset($this->tabs[$this->indexOfTab($aTab)]);
        $this->tabs = array_values($this->tabs);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function setDevicePreference($aDevicePreference)
    {
        $wasSet = false;
        $this->devicePreference = $aDevicePreference;
        $wasSet = true;
        return $wasSet;
    }

    public function setTemp($aTemp)
    {
        $wasSet = false;
        $this->temp = $aTemp;
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

    public function getCampaignId()
    {
        return $this->campaignId;
    }

    public function getCreativeId()
    {
        return $this->creativeId;
    }

    public function getAdgroupId()
    {
        return $this->adgroupId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription1()
    {
        return $this->description1;
    }

    public function getDescription2()
    {
        return $this->description2;
    }

    public function getDestinationUrl()
    {
        return $this->destinationUrl;
    }

    public function getDisplayUrl()
    {
        return $this->displayUrl;
    }

    public function getPause()
    {
        return $this->pause;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getMobileDestinationUrl()
    {
        return $this->mobileDestinationUrl;
    }

    public function getMobileDisplayUrl()
    {
        return $this->mobileDisplayUrl;
    }

    public function getPcDestinationUrl()
    {
        return $this->pcDestinationUrl;
    }

    public function getPcDisplayUrl()
    {
        return $this->pcDisplayUrl;
    }


    public function getOfflineReasons()
    {
        $newOfflineReasons = $this->offlineReasons;
        return $newOfflineReasons;
    }

    public function numberOfOfflineReasons()
    {
        $number = count($this->offlineReasons);
        return $number;
    }

    public function indexOfOfflineReason($aOfflineReason)
    {
        $rawAnswer = array_search($aOfflineReason,$this->offlineReasons);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getTabs()
    {
        $newTabs = $this->tabs;
        return $newTabs;
    }

    public function numberOfTabs()
    {
        $number = count($this->tabs);
        return $number;
    }

    public function indexOfTab($aTab)
    {
        $rawAnswer = array_search($aTab,$this->tabs);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function getDevicePreference()
    {
        return $this->devicePreference;
    }

    public function getTemp()
    {
        return $this->temp;
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
