<?php
namespace jamesluo\smsbai\Report;
class RealTimeResultType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //RealTimeResultType Attributes
    public $ID;
    public $relatedId;
    public $date;
    public $KPIs;
    public $name;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setID($aID)
    {
        $wasSet = false;
        $this->ID = $aID;
        $wasSet = true;
        return $wasSet;
    }

    public function setRelatedId($aRelatedId)
    {
        $wasSet = false;
        $this->relatedId = $aRelatedId;
        $wasSet = true;
        return $wasSet;
    }

    public function setDate($aDate)
    {
        $wasSet = false;
        $this->date = $aDate;
        $wasSet = true;
        return $wasSet;
    }
    public function setKPIs($aKPIs) {
        $this->KPIs = $aKPIs;
    }

    public function addKPI($aKPI)
    {
        $wasAdded = false;
        $this->KPIs[] = $aKPI;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeKPI($aKPI)
    {
        $wasRemoved = false;
        unset($this->KPIs[$this->indexOfKPI($aKPI)]);
        $this->KPIs = array_values($this->KPIs);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setName($aname) {
        $this->name = $aname;
    }

    public function addName($aName)
    {
        $wasAdded = false;
        $this->name[] = $aName;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeName($aName)
    {
        $wasRemoved = false;
        unset($this->name[$this->indexOfName($aName)]);
        $this->name = array_values($this->name);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function getID()
    {
        return $this->ID;
    }

    public function getRelatedId()
    {
        return $this->relatedId;
    }

    public function getDate()
    {
        return $this->date;
    }


    public function getKPIs()
    {
        $newKPIs = $this->KPIs;
        return $newKPIs;
    }

    public function numberOfKPIs()
    {
        $number = count($this->KPIs);
        return $number;
    }

    public function indexOfKPI($aKPI)
    {
        $rawAnswer = array_search($aKPI,$this->KPIs);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getName()
    {
        $newName = $this->name;
        return $newName;
    }

    public function numberOfName()
    {
        $number = count($this->name);
        return $number;
    }

    public function indexOfName($aName)
    {
        $rawAnswer = array_search($aName,$this->name);
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
