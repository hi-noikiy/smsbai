<?php
namespace  jamesluo\smsbai\Adgroup;
class DeleteAdgroupRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //DeleteAdgroupRequest Attributes
    public $adgroupIds;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setAdgroupIds($aadgroupIds) {
        $this->adgroupIds = $aadgroupIds;
    }

    public function addAdgroupId($aAdgroupId)
    {
        $wasAdded = false;
        $this->adgroupIds[] = $aAdgroupId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeAdgroupId($aAdgroupId)
    {
        $wasRemoved = false;
        unset($this->adgroupIds[$this->indexOfAdgroupId($aAdgroupId)]);
        $this->adgroupIds = array_values($this->adgroupIds);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getAdgroupIds()
    {
        $newAdgroupIds = $this->adgroupIds;
        return $newAdgroupIds;
    }

    public function numberOfAdgroupIds()
    {
        $number = count($this->adgroupIds);
        return $number;
    }

    public function indexOfAdgroupId($aAdgroupId)
    {
        $rawAnswer = array_search($aAdgroupId,$this->adgroupIds);
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
