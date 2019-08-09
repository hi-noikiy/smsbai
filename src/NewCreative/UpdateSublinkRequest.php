<?php
namespace  jamesluo\smsbai\NewCreative;
class UpdateSublinkRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //UpdateSublinkRequest Attributes
    public $sublinkTypes;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setSublinkTypes($asublinkTypes) {
        $this->sublinkTypes = $asublinkTypes;
    }

    public function addSublinkType($aSublinkType)
    {
        $wasAdded = false;
        $this->sublinkTypes[] = $aSublinkType;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeSublinkType($aSublinkType)
    {
        $wasRemoved = false;
        unset($this->sublinkTypes[$this->indexOfSublinkType($aSublinkType)]);
        $this->sublinkTypes = array_values($this->sublinkTypes);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getSublinkTypes()
    {
        $newSublinkTypes = $this->sublinkTypes;
        return $newSublinkTypes;
    }

    public function numberOfSublinkTypes()
    {
        $number = count($this->sublinkTypes);
        return $number;
    }

    public function indexOfSublinkType($aSublinkType)
    {
        $rawAnswer = array_search($aSublinkType,$this->sublinkTypes);
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
