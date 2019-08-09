<?php
namespace  jamesluo\smsbai\Adgroup;
class UpdateAdgroupRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //UpdateAdgroupRequest Attributes
    public $adgroupTypes;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setAdgroupTypes($aadgroupTypes) {
        $this->adgroupTypes = $aadgroupTypes;
    }

    public function addAdgroupType($aAdgroupType)
    {
        $wasAdded = false;
        $this->adgroupTypes[] = $aAdgroupType;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeAdgroupType($aAdgroupType)
    {
        $wasRemoved = false;
        unset($this->adgroupTypes[$this->indexOfAdgroupType($aAdgroupType)]);
        $this->adgroupTypes = array_values($this->adgroupTypes);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getAdgroupTypes()
    {
        $newAdgroupTypes = $this->adgroupTypes;
        return $newAdgroupTypes;
    }

    public function numberOfAdgroupTypes()
    {
        $number = count($this->adgroupTypes);
        return $number;
    }

    public function indexOfAdgroupType($aAdgroupType)
    {
        $rawAnswer = array_search($aAdgroupType,$this->adgroupTypes);
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
