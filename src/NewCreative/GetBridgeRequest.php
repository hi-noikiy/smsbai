<?php
namespace  jamesluo\smsbai\NewCreative;
class GetBridgeRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetBridgeRequest Attributes
    public $ids;
    public $idType;
    public $bridgeFields;

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
    public function setBridgeFields($abridgeFields) {
        $this->bridgeFields = $abridgeFields;
    }

    public function addBridgeField($aBridgeField)
    {
        $wasAdded = false;
        $this->bridgeFields[] = $aBridgeField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeBridgeField($aBridgeField)
    {
        $wasRemoved = false;
        unset($this->bridgeFields[$this->indexOfBridgeField($aBridgeField)]);
        $this->bridgeFields = array_values($this->bridgeFields);
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


    public function getBridgeFields()
    {
        $newBridgeFields = $this->bridgeFields;
        return $newBridgeFields;
    }

    public function numberOfBridgeFields()
    {
        $number = count($this->bridgeFields);
        return $number;
    }

    public function indexOfBridgeField($aBridgeField)
    {
        $rawAnswer = array_search($aBridgeField,$this->bridgeFields);
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
