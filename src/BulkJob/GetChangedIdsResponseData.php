<?php
namespace  jamesluo\smsbai\BulkJob;
class GetChangedIdsResponseData
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetChangedIdsResponseData Attributes
    public $endTime;
    public $changedCampaignIds;
    public $changedAdgroupIds;
    public $changedKeywordIds;
    public $changedCreativeIds;
    public $changedSublinkIds;
    public $changedMobileSublinkIds;
    public $changedPhoneIds;
    public $changedBridgeIds;
    public $changedDynamicCreativeIds;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setEndTime($aEndTime)
    {
        $wasSet = false;
        $this->endTime = $aEndTime;
        $wasSet = true;
        return $wasSet;
    }
    public function setChangedCampaignIds($achangedCampaignIds) {
        $this->changedCampaignIds = $achangedCampaignIds;
    }

    public function addChangedCampaignId($aChangedCampaignId)
    {
        $wasAdded = false;
        $this->changedCampaignIds[] = $aChangedCampaignId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedCampaignId($aChangedCampaignId)
    {
        $wasRemoved = false;
        unset($this->changedCampaignIds[$this->indexOfChangedCampaignId($aChangedCampaignId)]);
        $this->changedCampaignIds = array_values($this->changedCampaignIds);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setChangedAdgroupIds($achangedAdgroupIds) {
        $this->changedAdgroupIds = $achangedAdgroupIds;
    }

    public function addChangedAdgroupId($aChangedAdgroupId)
    {
        $wasAdded = false;
        $this->changedAdgroupIds[] = $aChangedAdgroupId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedAdgroupId($aChangedAdgroupId)
    {
        $wasRemoved = false;
        unset($this->changedAdgroupIds[$this->indexOfChangedAdgroupId($aChangedAdgroupId)]);
        $this->changedAdgroupIds = array_values($this->changedAdgroupIds);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setChangedKeywordIds($achangedKeywordIds) {
        $this->changedKeywordIds = $achangedKeywordIds;
    }

    public function addChangedKeywordId($aChangedKeywordId)
    {
        $wasAdded = false;
        $this->changedKeywordIds[] = $aChangedKeywordId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedKeywordId($aChangedKeywordId)
    {
        $wasRemoved = false;
        unset($this->changedKeywordIds[$this->indexOfChangedKeywordId($aChangedKeywordId)]);
        $this->changedKeywordIds = array_values($this->changedKeywordIds);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setChangedCreativeIds($achangedCreativeIds) {
        $this->changedCreativeIds = $achangedCreativeIds;
    }

    public function addChangedCreativeId($aChangedCreativeId)
    {
        $wasAdded = false;
        $this->changedCreativeIds[] = $aChangedCreativeId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedCreativeId($aChangedCreativeId)
    {
        $wasRemoved = false;
        unset($this->changedCreativeIds[$this->indexOfChangedCreativeId($aChangedCreativeId)]);
        $this->changedCreativeIds = array_values($this->changedCreativeIds);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setChangedSublinkIds($achangedSublinkIds) {
        $this->changedSublinkIds = $achangedSublinkIds;
    }

    public function addChangedSublinkId($aChangedSublinkId)
    {
        $wasAdded = false;
        $this->changedSublinkIds[] = $aChangedSublinkId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedSublinkId($aChangedSublinkId)
    {
        $wasRemoved = false;
        unset($this->changedSublinkIds[$this->indexOfChangedSublinkId($aChangedSublinkId)]);
        $this->changedSublinkIds = array_values($this->changedSublinkIds);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setChangedMobileSublinkIds($achangedMobileSublinkIds) {
        $this->changedMobileSublinkIds = $achangedMobileSublinkIds;
    }

    public function addChangedMobileSublinkId($aChangedMobileSublinkId)
    {
        $wasAdded = false;
        $this->changedMobileSublinkIds[] = $aChangedMobileSublinkId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedMobileSublinkId($aChangedMobileSublinkId)
    {
        $wasRemoved = false;
        unset($this->changedMobileSublinkIds[$this->indexOfChangedMobileSublinkId($aChangedMobileSublinkId)]);
        $this->changedMobileSublinkIds = array_values($this->changedMobileSublinkIds);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setChangedPhoneIds($achangedPhoneIds) {
        $this->changedPhoneIds = $achangedPhoneIds;
    }

    public function addChangedPhoneId($aChangedPhoneId)
    {
        $wasAdded = false;
        $this->changedPhoneIds[] = $aChangedPhoneId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedPhoneId($aChangedPhoneId)
    {
        $wasRemoved = false;
        unset($this->changedPhoneIds[$this->indexOfChangedPhoneId($aChangedPhoneId)]);
        $this->changedPhoneIds = array_values($this->changedPhoneIds);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setChangedBridgeIds($achangedBridgeIds) {
        $this->changedBridgeIds = $achangedBridgeIds;
    }

    public function addChangedBridgeId($aChangedBridgeId)
    {
        $wasAdded = false;
        $this->changedBridgeIds[] = $aChangedBridgeId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedBridgeId($aChangedBridgeId)
    {
        $wasRemoved = false;
        unset($this->changedBridgeIds[$this->indexOfChangedBridgeId($aChangedBridgeId)]);
        $this->changedBridgeIds = array_values($this->changedBridgeIds);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setChangedDynamicCreativeIds($achangedDynamicCreativeIds) {
        $this->changedDynamicCreativeIds = $achangedDynamicCreativeIds;
    }

    public function addChangedDynamicCreativeId($aChangedDynamicCreativeId)
    {
        $wasAdded = false;
        $this->changedDynamicCreativeIds[] = $aChangedDynamicCreativeId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedDynamicCreativeId($aChangedDynamicCreativeId)
    {
        $wasRemoved = false;
        unset($this->changedDynamicCreativeIds[$this->indexOfChangedDynamicCreativeId($aChangedDynamicCreativeId)]);
        $this->changedDynamicCreativeIds = array_values($this->changedDynamicCreativeIds);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }


    public function getChangedCampaignIds()
    {
        $newChangedCampaignIds = $this->changedCampaignIds;
        return $newChangedCampaignIds;
    }

    public function numberOfChangedCampaignIds()
    {
        $number = count($this->changedCampaignIds);
        return $number;
    }

    public function indexOfChangedCampaignId($aChangedCampaignId)
    {
        $rawAnswer = array_search($aChangedCampaignId,$this->changedCampaignIds);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getChangedAdgroupIds()
    {
        $newChangedAdgroupIds = $this->changedAdgroupIds;
        return $newChangedAdgroupIds;
    }

    public function numberOfChangedAdgroupIds()
    {
        $number = count($this->changedAdgroupIds);
        return $number;
    }

    public function indexOfChangedAdgroupId($aChangedAdgroupId)
    {
        $rawAnswer = array_search($aChangedAdgroupId,$this->changedAdgroupIds);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getChangedKeywordIds()
    {
        $newChangedKeywordIds = $this->changedKeywordIds;
        return $newChangedKeywordIds;
    }

    public function numberOfChangedKeywordIds()
    {
        $number = count($this->changedKeywordIds);
        return $number;
    }

    public function indexOfChangedKeywordId($aChangedKeywordId)
    {
        $rawAnswer = array_search($aChangedKeywordId,$this->changedKeywordIds);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getChangedCreativeIds()
    {
        $newChangedCreativeIds = $this->changedCreativeIds;
        return $newChangedCreativeIds;
    }

    public function numberOfChangedCreativeIds()
    {
        $number = count($this->changedCreativeIds);
        return $number;
    }

    public function indexOfChangedCreativeId($aChangedCreativeId)
    {
        $rawAnswer = array_search($aChangedCreativeId,$this->changedCreativeIds);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getChangedSublinkIds()
    {
        $newChangedSublinkIds = $this->changedSublinkIds;
        return $newChangedSublinkIds;
    }

    public function numberOfChangedSublinkIds()
    {
        $number = count($this->changedSublinkIds);
        return $number;
    }

    public function indexOfChangedSublinkId($aChangedSublinkId)
    {
        $rawAnswer = array_search($aChangedSublinkId,$this->changedSublinkIds);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getChangedMobileSublinkIds()
    {
        $newChangedMobileSublinkIds = $this->changedMobileSublinkIds;
        return $newChangedMobileSublinkIds;
    }

    public function numberOfChangedMobileSublinkIds()
    {
        $number = count($this->changedMobileSublinkIds);
        return $number;
    }

    public function indexOfChangedMobileSublinkId($aChangedMobileSublinkId)
    {
        $rawAnswer = array_search($aChangedMobileSublinkId,$this->changedMobileSublinkIds);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getChangedPhoneIds()
    {
        $newChangedPhoneIds = $this->changedPhoneIds;
        return $newChangedPhoneIds;
    }

    public function numberOfChangedPhoneIds()
    {
        $number = count($this->changedPhoneIds);
        return $number;
    }

    public function indexOfChangedPhoneId($aChangedPhoneId)
    {
        $rawAnswer = array_search($aChangedPhoneId,$this->changedPhoneIds);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getChangedBridgeIds()
    {
        $newChangedBridgeIds = $this->changedBridgeIds;
        return $newChangedBridgeIds;
    }

    public function numberOfChangedBridgeIds()
    {
        $number = count($this->changedBridgeIds);
        return $number;
    }

    public function indexOfChangedBridgeId($aChangedBridgeId)
    {
        $rawAnswer = array_search($aChangedBridgeId,$this->changedBridgeIds);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getChangedDynamicCreativeIds()
    {
        $newChangedDynamicCreativeIds = $this->changedDynamicCreativeIds;
        return $newChangedDynamicCreativeIds;
    }

    public function numberOfChangedDynamicCreativeIds()
    {
        $number = count($this->changedDynamicCreativeIds);
        return $number;
    }

    public function indexOfChangedDynamicCreativeId($aChangedDynamicCreativeId)
    {
        $rawAnswer = array_search($aChangedDynamicCreativeId,$this->changedDynamicCreativeIds);
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
