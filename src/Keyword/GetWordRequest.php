<?php
namespace jamesluo\smsbai\Keyword;
class GetWordRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetWordRequest Attributes
    public $wordFields;
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
    public function setWordFields($awordFields) {
        $this->wordFields = $awordFields;
    }

    public function addWordField($aWordField)
    {
        $wasAdded = false;
        $this->wordFields[] = $aWordField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeWordField($aWordField)
    {
        $wasRemoved = false;
        unset($this->wordFields[$this->indexOfWordField($aWordField)]);
        $this->wordFields = array_values($this->wordFields);
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


    public function getWordFields()
    {
        $newWordFields = $this->wordFields;
        return $newWordFields;
    }

    public function numberOfWordFields()
    {
        $number = count($this->wordFields);
        return $number;
    }

    public function indexOfWordField($aWordField)
    {
        $rawAnswer = array_search($aWordField,$this->wordFields);
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
