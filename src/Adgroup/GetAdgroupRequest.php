<?php
namespace  jamesluo\smsbai\Adgroup;
class GetAdgroupRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetAdgroupRequest Attributes
    public $adgroupFields;
    public $ids;
    public $idType;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setAdgroupFields($aadgroupFields) {
        $this->adgroupFields = $aadgroupFields;
    }

    public function addAdgroupField($aAdgroupField)
    {
        $wasAdded = false;
        $this->adgroupFields[] = $aAdgroupField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeAdgroupField($aAdgroupField)
    {
        $wasRemoved = false;
        unset($this->adgroupFields[$this->indexOfAdgroupField($aAdgroupField)]);
        $this->adgroupFields = array_values($this->adgroupFields);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setIds($aids) {
        $this->ids = $aids;
    }

    public function addId($aId)
    {
        $wasAdded = false;
        $this->ids[] = $aId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeId($aId)
    {
        $wasRemoved = false;
        unset($this->ids[$this->indexOfId($aId)]);
        $this->ids = array_values($this->ids);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function setIdType($aIdType)
    {
        $wasSet = false;
        $this->idType = $aIdType;
        $wasSet = true;
        return $wasSet;
    }


    public function getAdgroupFields()
    {
        $newAdgroupFields = $this->adgroupFields;
        return $newAdgroupFields;
    }

    public function numberOfAdgroupFields()
    {
        $number = count($this->adgroupFields);
        return $number;
    }

    public function indexOfAdgroupField($aAdgroupField)
    {
        $rawAnswer = array_search($aAdgroupField,$this->adgroupFields);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getIds()
    {
        $newIds = $this->ids;
        return $newIds;
    }

    public function numberOfIds()
    {
        $number = count($this->ids);
        return $number;
    }

    public function indexOfId($aId)
    {
        $rawAnswer = array_search($aId,$this->ids);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function getIdType()
    {
        return $this->idType;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
