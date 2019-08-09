<?php
namespace  jamesluo\smsbai\NewCreative;
class GetPhoneRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetPhoneRequest Attributes
    public $ids;
    public $idType;
    public $phoneFields;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
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
    public function setPhoneFields($aphoneFields) {
        $this->phoneFields = $aphoneFields;
    }

    public function addPhoneField($aPhoneField)
    {
        $wasAdded = false;
        $this->phoneFields[] = $aPhoneField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removePhoneField($aPhoneField)
    {
        $wasRemoved = false;
        unset($this->phoneFields[$this->indexOfPhoneField($aPhoneField)]);
        $this->phoneFields = array_values($this->phoneFields);
        $wasRemoved = true;
        return $wasRemoved;
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


    public function getPhoneFields()
    {
        $newPhoneFields = $this->phoneFields;
        return $newPhoneFields;
    }

    public function numberOfPhoneFields()
    {
        $number = count($this->phoneFields);
        return $number;
    }

    public function indexOfPhoneField($aPhoneField)
    {
        $rawAnswer = array_search($aPhoneField,$this->phoneFields);
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
