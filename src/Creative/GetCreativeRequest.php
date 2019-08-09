<?php
namespace  jamesluo\smsbai\Creative;
class GetCreativeRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetCreativeRequest Attributes
    public $creativeFields;
    public $ids;
    public $idType;
    public $getTemp;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setCreativeFields($acreativeFields) {
        $this->creativeFields = $acreativeFields;
    }

    public function addCreativeField($aCreativeField)
    {
        $wasAdded = false;
        $this->creativeFields[] = $aCreativeField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeCreativeField($aCreativeField)
    {
        $wasRemoved = false;
        unset($this->creativeFields[$this->indexOfCreativeField($aCreativeField)]);
        $this->creativeFields = array_values($this->creativeFields);
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

    public function setGetTemp($aGetTemp)
    {
        $wasSet = false;
        $this->getTemp = $aGetTemp;
        $wasSet = true;
        return $wasSet;
    }


    public function getCreativeFields()
    {
        $newCreativeFields = $this->creativeFields;
        return $newCreativeFields;
    }

    public function numberOfCreativeFields()
    {
        $number = count($this->creativeFields);
        return $number;
    }

    public function indexOfCreativeField($aCreativeField)
    {
        $rawAnswer = array_search($aCreativeField,$this->creativeFields);
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

    public function getGetTemp()
    {
        return $this->getTemp;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
