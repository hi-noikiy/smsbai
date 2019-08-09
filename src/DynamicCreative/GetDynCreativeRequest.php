<?php
namespace jamesluo\smsbai\DynamicCreative;
class GetDynCreativeRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetDynCreativeRequest Attributes
    public $dynCreativeFields;
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
    public function setDynCreativeFields($adynCreativeFields) {
        $this->dynCreativeFields = $adynCreativeFields;
    }

    public function addDynCreativeField($aDynCreativeField)
    {
        $wasAdded = false;
        $this->dynCreativeFields[] = $aDynCreativeField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeDynCreativeField($aDynCreativeField)
    {
        $wasRemoved = false;
        unset($this->dynCreativeFields[$this->indexOfDynCreativeField($aDynCreativeField)]);
        $this->dynCreativeFields = array_values($this->dynCreativeFields);
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


    public function getDynCreativeFields()
    {
        $newDynCreativeFields = $this->dynCreativeFields;
        return $newDynCreativeFields;
    }

    public function numberOfDynCreativeFields()
    {
        $number = count($this->dynCreativeFields);
        return $number;
    }

    public function indexOfDynCreativeField($aDynCreativeField)
    {
        $rawAnswer = array_search($aDynCreativeField,$this->dynCreativeFields);
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
