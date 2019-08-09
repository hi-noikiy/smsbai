<?php
namespace  jamesluo\smsbai\Search;
class TabType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //TabType Attributes
    public $tabId;
    public $idType;
    public $tabName;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setTabId($aTabId)
    {
        $wasSet = false;
        $this->tabId = $aTabId;
        $wasSet = true;
        return $wasSet;
    }

    public function setIdType($aIdType)
    {
        $wasSet = false;
        $this->idType = $aIdType;
        $wasSet = true;
        return $wasSet;
    }

    public function setTabName($aTabName)
    {
        $wasSet = false;
        $this->tabName = $aTabName;
        $wasSet = true;
        return $wasSet;
    }

    public function getTabId()
    {
        return $this->tabId;
    }

    public function getIdType()
    {
        return $this->idType;
    }

    public function getTabName()
    {
        return $this->tabName;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
