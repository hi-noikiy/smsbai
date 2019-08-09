<?php
namespace  jamesluo\smsbai\NewCreative;
class UpdateEcallRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //UpdateEcallRequest Attributes
    public $ecallTypes;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setEcallTypes($aecallTypes) {
        $this->ecallTypes = $aecallTypes;
    }

    public function addEcallType($aEcallType)
    {
        $wasAdded = false;
        $this->ecallTypes[] = $aEcallType;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeEcallType($aEcallType)
    {
        $wasRemoved = false;
        unset($this->ecallTypes[$this->indexOfEcallType($aEcallType)]);
        $this->ecallTypes = array_values($this->ecallTypes);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getEcallTypes()
    {
        $newEcallTypes = $this->ecallTypes;
        return $newEcallTypes;
    }

    public function numberOfEcallTypes()
    {
        $number = count($this->ecallTypes);
        return $number;
    }

    public function indexOfEcallType($aEcallType)
    {
        $rawAnswer = array_search($aEcallType,$this->ecallTypes);
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
