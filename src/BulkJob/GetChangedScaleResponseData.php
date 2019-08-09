<?php
namespace  jamesluo\smsbai\BulkJob;
class GetChangedScaleResponseData
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetChangedScaleResponseData Attributes
    public $changedCampaignScale;
    public $changedAdgroupScale;
    public $changedKeywordScale;
    public $changedCreativeScale;
    public $changedSublinkScale;
    public $changedMobileSublinkScale;
    public $changedPhoneScale;
    public $changedBridgeScale;
    public $changedDynamicCreativeScale;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setChangedCampaignScale($achangedCampaignScale) {
        $this->changedCampaignScale = $achangedCampaignScale;
    }

    public function addChangedCampaignScale($aChangedCampaignScale)
    {
        $wasAdded = false;
        $this->changedCampaignScale[] = $aChangedCampaignScale;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedCampaignScale($aChangedCampaignScale)
    {
        $wasRemoved = false;
        unset($this->changedCampaignScale[$this->indexOfChangedCampaignScale($aChangedCampaignScale)]);
        $this->changedCampaignScale = array_values($this->changedCampaignScale);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setChangedAdgroupScale($achangedAdgroupScale) {
        $this->changedAdgroupScale = $achangedAdgroupScale;
    }

    public function addChangedAdgroupScale($aChangedAdgroupScale)
    {
        $wasAdded = false;
        $this->changedAdgroupScale[] = $aChangedAdgroupScale;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedAdgroupScale($aChangedAdgroupScale)
    {
        $wasRemoved = false;
        unset($this->changedAdgroupScale[$this->indexOfChangedAdgroupScale($aChangedAdgroupScale)]);
        $this->changedAdgroupScale = array_values($this->changedAdgroupScale);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setChangedKeywordScale($achangedKeywordScale) {
        $this->changedKeywordScale = $achangedKeywordScale;
    }

    public function addChangedKeywordScale($aChangedKeywordScale)
    {
        $wasAdded = false;
        $this->changedKeywordScale[] = $aChangedKeywordScale;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedKeywordScale($aChangedKeywordScale)
    {
        $wasRemoved = false;
        unset($this->changedKeywordScale[$this->indexOfChangedKeywordScale($aChangedKeywordScale)]);
        $this->changedKeywordScale = array_values($this->changedKeywordScale);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setChangedCreativeScale($achangedCreativeScale) {
        $this->changedCreativeScale = $achangedCreativeScale;
    }

    public function addChangedCreativeScale($aChangedCreativeScale)
    {
        $wasAdded = false;
        $this->changedCreativeScale[] = $aChangedCreativeScale;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedCreativeScale($aChangedCreativeScale)
    {
        $wasRemoved = false;
        unset($this->changedCreativeScale[$this->indexOfChangedCreativeScale($aChangedCreativeScale)]);
        $this->changedCreativeScale = array_values($this->changedCreativeScale);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setChangedSublinkScale($achangedSublinkScale) {
        $this->changedSublinkScale = $achangedSublinkScale;
    }

    public function addChangedSublinkScale($aChangedSublinkScale)
    {
        $wasAdded = false;
        $this->changedSublinkScale[] = $aChangedSublinkScale;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedSublinkScale($aChangedSublinkScale)
    {
        $wasRemoved = false;
        unset($this->changedSublinkScale[$this->indexOfChangedSublinkScale($aChangedSublinkScale)]);
        $this->changedSublinkScale = array_values($this->changedSublinkScale);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setChangedMobileSublinkScale($achangedMobileSublinkScale) {
        $this->changedMobileSublinkScale = $achangedMobileSublinkScale;
    }

    public function addChangedMobileSublinkScale($aChangedMobileSublinkScale)
    {
        $wasAdded = false;
        $this->changedMobileSublinkScale[] = $aChangedMobileSublinkScale;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedMobileSublinkScale($aChangedMobileSublinkScale)
    {
        $wasRemoved = false;
        unset($this->changedMobileSublinkScale[$this->indexOfChangedMobileSublinkScale($aChangedMobileSublinkScale)]);
        $this->changedMobileSublinkScale = array_values($this->changedMobileSublinkScale);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setChangedPhoneScale($achangedPhoneScale) {
        $this->changedPhoneScale = $achangedPhoneScale;
    }

    public function addChangedPhoneScale($aChangedPhoneScale)
    {
        $wasAdded = false;
        $this->changedPhoneScale[] = $aChangedPhoneScale;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedPhoneScale($aChangedPhoneScale)
    {
        $wasRemoved = false;
        unset($this->changedPhoneScale[$this->indexOfChangedPhoneScale($aChangedPhoneScale)]);
        $this->changedPhoneScale = array_values($this->changedPhoneScale);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setChangedBridgeScale($achangedBridgeScale) {
        $this->changedBridgeScale = $achangedBridgeScale;
    }

    public function addChangedBridgeScale($aChangedBridgeScale)
    {
        $wasAdded = false;
        $this->changedBridgeScale[] = $aChangedBridgeScale;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedBridgeScale($aChangedBridgeScale)
    {
        $wasRemoved = false;
        unset($this->changedBridgeScale[$this->indexOfChangedBridgeScale($aChangedBridgeScale)]);
        $this->changedBridgeScale = array_values($this->changedBridgeScale);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setChangedDynamicCreativeScale($achangedDynamicCreativeScale) {
        $this->changedDynamicCreativeScale = $achangedDynamicCreativeScale;
    }

    public function addChangedDynamicCreativeScale($aChangedDynamicCreativeScale)
    {
        $wasAdded = false;
        $this->changedDynamicCreativeScale[] = $aChangedDynamicCreativeScale;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedDynamicCreativeScale($aChangedDynamicCreativeScale)
    {
        $wasRemoved = false;
        unset($this->changedDynamicCreativeScale[$this->indexOfChangedDynamicCreativeScale($aChangedDynamicCreativeScale)]);
        $this->changedDynamicCreativeScale = array_values($this->changedDynamicCreativeScale);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getChangedCampaignScale()
    {
        $newChangedCampaignScale = $this->changedCampaignScale;
        return $newChangedCampaignScale;
    }

    public function numberOfChangedCampaignScale()
    {
        $number = count($this->changedCampaignScale);
        return $number;
    }

    public function indexOfChangedCampaignScale($aChangedCampaignScale)
    {
        $rawAnswer = array_search($aChangedCampaignScale,$this->changedCampaignScale);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getChangedAdgroupScale()
    {
        $newChangedAdgroupScale = $this->changedAdgroupScale;
        return $newChangedAdgroupScale;
    }

    public function numberOfChangedAdgroupScale()
    {
        $number = count($this->changedAdgroupScale);
        return $number;
    }

    public function indexOfChangedAdgroupScale($aChangedAdgroupScale)
    {
        $rawAnswer = array_search($aChangedAdgroupScale,$this->changedAdgroupScale);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getChangedKeywordScale()
    {
        $newChangedKeywordScale = $this->changedKeywordScale;
        return $newChangedKeywordScale;
    }

    public function numberOfChangedKeywordScale()
    {
        $number = count($this->changedKeywordScale);
        return $number;
    }

    public function indexOfChangedKeywordScale($aChangedKeywordScale)
    {
        $rawAnswer = array_search($aChangedKeywordScale,$this->changedKeywordScale);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getChangedCreativeScale()
    {
        $newChangedCreativeScale = $this->changedCreativeScale;
        return $newChangedCreativeScale;
    }

    public function numberOfChangedCreativeScale()
    {
        $number = count($this->changedCreativeScale);
        return $number;
    }

    public function indexOfChangedCreativeScale($aChangedCreativeScale)
    {
        $rawAnswer = array_search($aChangedCreativeScale,$this->changedCreativeScale);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getChangedSublinkScale()
    {
        $newChangedSublinkScale = $this->changedSublinkScale;
        return $newChangedSublinkScale;
    }

    public function numberOfChangedSublinkScale()
    {
        $number = count($this->changedSublinkScale);
        return $number;
    }

    public function indexOfChangedSublinkScale($aChangedSublinkScale)
    {
        $rawAnswer = array_search($aChangedSublinkScale,$this->changedSublinkScale);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getChangedMobileSublinkScale()
    {
        $newChangedMobileSublinkScale = $this->changedMobileSublinkScale;
        return $newChangedMobileSublinkScale;
    }

    public function numberOfChangedMobileSublinkScale()
    {
        $number = count($this->changedMobileSublinkScale);
        return $number;
    }

    public function indexOfChangedMobileSublinkScale($aChangedMobileSublinkScale)
    {
        $rawAnswer = array_search($aChangedMobileSublinkScale,$this->changedMobileSublinkScale);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getChangedPhoneScale()
    {
        $newChangedPhoneScale = $this->changedPhoneScale;
        return $newChangedPhoneScale;
    }

    public function numberOfChangedPhoneScale()
    {
        $number = count($this->changedPhoneScale);
        return $number;
    }

    public function indexOfChangedPhoneScale($aChangedPhoneScale)
    {
        $rawAnswer = array_search($aChangedPhoneScale,$this->changedPhoneScale);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getChangedBridgeScale()
    {
        $newChangedBridgeScale = $this->changedBridgeScale;
        return $newChangedBridgeScale;
    }

    public function numberOfChangedBridgeScale()
    {
        $number = count($this->changedBridgeScale);
        return $number;
    }

    public function indexOfChangedBridgeScale($aChangedBridgeScale)
    {
        $rawAnswer = array_search($aChangedBridgeScale,$this->changedBridgeScale);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getChangedDynamicCreativeScale()
    {
        $newChangedDynamicCreativeScale = $this->changedDynamicCreativeScale;
        return $newChangedDynamicCreativeScale;
    }

    public function numberOfChangedDynamicCreativeScale()
    {
        $number = count($this->changedDynamicCreativeScale);
        return $number;
    }

    public function indexOfChangedDynamicCreativeScale($aChangedDynamicCreativeScale)
    {
        $rawAnswer = array_search($aChangedDynamicCreativeScale,$this->changedDynamicCreativeScale);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
