<?php
namespace  jamesluo\smsbai\NewCreative;
class GetEcallRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetEcallRequest Attributes
    public $ids;
    public $idType;
    public $ecallFields;

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
    public function setEcallFields($aecallFields) {
        $this->ecallFields = $aecallFields;
    }

    public function addEcallField($aEcallField)
    {
        $wasAdded = false;
        $this->ecallFields[] = $aEcallField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeEcallField($aEcallField)
    {
        $wasRemoved = false;
        unset($this->ecallFields[$this->indexOfEcallField($aEcallField)]);
        $this->ecallFields = array_values($this->ecallFields);
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


    public function getEcallFields()
    {
        $newEcallFields = $this->ecallFields;
        return $newEcallFields;
    }

    public function numberOfEcallFields()
    {
        $number = count($this->ecallFields);
        return $number;
    }

    public function indexOfEcallField($aEcallField)
    {
        $rawAnswer = array_search($aEcallField,$this->ecallFields);
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
