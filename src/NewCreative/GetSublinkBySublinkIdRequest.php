<?php
namespace  jamesluo\smsbai\NewCreative;
class GetSublinkBySublinkIdRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetSublinkBySublinkIdRequest Attributes
    public $ids;
    public $idType;
    public $sublinkFields;
    public $getTemp;
    public $device;

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
    public function setSublinkFields($asublinkFields) {
        $this->sublinkFields = $asublinkFields;
    }

    public function addSublinkField($aSublinkField)
    {
        $wasAdded = false;
        $this->sublinkFields[] = $aSublinkField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeSublinkField($aSublinkField)
    {
        $wasRemoved = false;
        unset($this->sublinkFields[$this->indexOfSublinkField($aSublinkField)]);
        $this->sublinkFields = array_values($this->sublinkFields);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function setGetTemp($aGetTemp)
    {
        $wasSet = false;
        $this->getTemp = $aGetTemp;
        $wasSet = true;
        return $wasSet;
    }

    public function setDevice($aDevice)
    {
        $wasSet = false;
        $this->device = $aDevice;
        $wasSet = true;
        return $wasSet;
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


    public function getSublinkFields()
    {
        $newSublinkFields = $this->sublinkFields;
        return $newSublinkFields;
    }

    public function numberOfSublinkFields()
    {
        $number = count($this->sublinkFields);
        return $number;
    }

    public function indexOfSublinkField($aSublinkField)
    {
        $rawAnswer = array_search($aSublinkField,$this->sublinkFields);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function getGetTemp()
    {
        return $this->getTemp;
    }

    public function getDevice()
    {
        return $this->device;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
