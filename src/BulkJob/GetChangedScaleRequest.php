<?php
namespace  jamesluo\smsbai\BulkJob;
class GetChangedScaleRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetChangedScaleRequest Attributes
    public $startTime;
    public $campaignIds;
    public $changedCampaignScale;
    public $changedAdgroupScale;
    public $changedKeywordScale;
    public $changedCreativeScale;
    public $changedSublinkScale;
    public $changedMobileSublinkScale;
    public $changedDynamicCreativeScale;
    public $changedPhoneScale;
    public $changedBridgeScale;

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
    public function setCampaignIds($acampaignIds) {
        $this->campaignIds = $acampaignIds;
    }

    public function addCampaignId($aCampaignId)
    {
        $wasAdded = false;
        $this->campaignIds[] = $aCampaignId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeCampaignId($aCampaignId)
    {
        $wasRemoved = false;
        unset($this->campaignIds[$this->indexOfCampaignId($aCampaignId)]);
        $this->campaignIds = array_values($this->campaignIds);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function setChangedCampaignScale($aChangedCampaignScale)
    {
        $wasSet = false;
        $this->changedCampaignScale = $aChangedCampaignScale;
        $wasSet = true;
        return $wasSet;
    }

    public function setChangedAdgroupScale($aChangedAdgroupScale)
    {
        $wasSet = false;
        $this->changedAdgroupScale = $aChangedAdgroupScale;
        $wasSet = true;
        return $wasSet;
    }

    public function setChangedKeywordScale($aChangedKeywordScale)
    {
        $wasSet = false;
        $this->changedKeywordScale = $aChangedKeywordScale;
        $wasSet = true;
        return $wasSet;
    }

    public function setChangedCreativeScale($aChangedCreativeScale)
    {
        $wasSet = false;
        $this->changedCreativeScale = $aChangedCreativeScale;
        $wasSet = true;
        return $wasSet;
    }

    public function setChangedSublinkScale($aChangedSublinkScale)
    {
        $wasSet = false;
        $this->changedSublinkScale = $aChangedSublinkScale;
        $wasSet = true;
        return $wasSet;
    }

    public function setChangedMobileSublinkScale($aChangedMobileSublinkScale)
    {
        $wasSet = false;
        $this->changedMobileSublinkScale = $aChangedMobileSublinkScale;
        $wasSet = true;
        return $wasSet;
    }

    public function setChangedDynamicCreativeScale($aChangedDynamicCreativeScale)
    {
        $wasSet = false;
        $this->changedDynamicCreativeScale = $aChangedDynamicCreativeScale;
        $wasSet = true;
        return $wasSet;
    }

    public function setChangedPhoneScale($aChangedPhoneScale)
    {
        $wasSet = false;
        $this->changedPhoneScale = $aChangedPhoneScale;
        $wasSet = true;
        return $wasSet;
    }

    public function setChangedBridgeScale($aChangedBridgeScale)
    {
        $wasSet = false;
        $this->changedBridgeScale = $aChangedBridgeScale;
        $wasSet = true;
        return $wasSet;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }


    public function getCampaignIds()
    {
        $newCampaignIds = $this->campaignIds;
        return $newCampaignIds;
    }

    public function numberOfCampaignIds()
    {
        $number = count($this->campaignIds);
        return $number;
    }

    public function indexOfCampaignId($aCampaignId)
    {
        $rawAnswer = array_search($aCampaignId,$this->campaignIds);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function getChangedCampaignScale()
    {
        return $this->changedCampaignScale;
    }

    public function getChangedAdgroupScale()
    {
        return $this->changedAdgroupScale;
    }

    public function getChangedKeywordScale()
    {
        return $this->changedKeywordScale;
    }

    public function getChangedCreativeScale()
    {
        return $this->changedCreativeScale;
    }

    public function getChangedSublinkScale()
    {
        return $this->changedSublinkScale;
    }

    public function getChangedMobileSublinkScale()
    {
        return $this->changedMobileSublinkScale;
    }

    public function getChangedDynamicCreativeScale()
    {
        return $this->changedDynamicCreativeScale;
    }

    public function getChangedPhoneScale()
    {
        return $this->changedPhoneScale;
    }

    public function getChangedBridgeScale()
    {
        return $this->changedBridgeScale;
    }

    public function isChangedCampaignScale()
    {
        return $this->changedCampaignScale;
    }

    public function isChangedAdgroupScale()
    {
        return $this->changedAdgroupScale;
    }

    public function isChangedKeywordScale()
    {
        return $this->changedKeywordScale;
    }

    public function isChangedCreativeScale()
    {
        return $this->changedCreativeScale;
    }

    public function isChangedSublinkScale()
    {
        return $this->changedSublinkScale;
    }

    public function isChangedMobileSublinkScale()
    {
        return $this->changedMobileSublinkScale;
    }

    public function isChangedDynamicCreativeScale()
    {
        return $this->changedDynamicCreativeScale;
    }

    public function isChangedPhoneScale()
    {
        return $this->changedPhoneScale;
    }

    public function isChangedBridgeScale()
    {
        return $this->changedBridgeScale;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
