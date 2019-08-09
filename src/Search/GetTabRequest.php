<?php
namespace  jamesluo\smsbai\Search;
class GetTabRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetTabRequest Attributes
    public $tabIds;
    public $idType;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setTabIds($atabIds) {
        $this->tabIds = $atabIds;
    }

    public function addTabId($aTabId)
    {
        $wasAdded = false;
        $this->tabIds[] = $aTabId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeTabId($aTabId)
    {
        $wasRemoved = false;
        unset($this->tabIds[$this->indexOfTabId($aTabId)]);
        $this->tabIds = array_values($this->tabIds);
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


    public function getTabIds()
    {
        $newTabIds = $this->tabIds;
        return $newTabIds;
    }

    public function numberOfTabIds()
    {
        $number = count($this->tabIds);
        return $number;
    }

    public function indexOfTabId($aTabId)
    {
        $rawAnswer = array_search($aTabId,$this->tabIds);
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
