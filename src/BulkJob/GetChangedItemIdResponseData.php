<?php
namespace jamesluo\smsbai\BulkJob;
class GetChangedItemIdResponseData
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetChangedItemIdResponseData Attributes
    public $endTime;
    public $changedItemIds;

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
    public function setChangedItemIds($achangedItemIds) {
        $this->changedItemIds = $achangedItemIds;
    }

    public function addChangedItemId($aChangedItemId)
    {
        $wasAdded = false;
        $this->changedItemIds[] = $aChangedItemId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeChangedItemId($aChangedItemId)
    {
        $wasRemoved = false;
        unset($this->changedItemIds[$this->indexOfChangedItemId($aChangedItemId)]);
        $this->changedItemIds = array_values($this->changedItemIds);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }


    public function getChangedItemIds()
    {
        $newChangedItemIds = $this->changedItemIds;
        return $newChangedItemIds;
    }

    public function numberOfChangedItemIds()
    {
        $number = count($this->changedItemIds);
        return $number;
    }

    public function indexOfChangedItemId($aChangedItemId)
    {
        $rawAnswer = array_search($aChangedItemId,$this->changedItemIds);
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
