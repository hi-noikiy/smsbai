<?php
namespace  jamesluo\smsbai\DynamicCreative;
class AddExclusionTypeRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //AddExclusionTypeRequest Attributes
    public $dynCreativeExclusionTypes;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setDynCreativeExclusionTypes($adynCreativeExclusionTypes) {
        $this->dynCreativeExclusionTypes = $adynCreativeExclusionTypes;
    }

    public function addDynCreativeExclusionType($aDynCreativeExclusionType)
    {
        $wasAdded = false;
        $this->dynCreativeExclusionTypes[] = $aDynCreativeExclusionType;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeDynCreativeExclusionType($aDynCreativeExclusionType)
    {
        $wasRemoved = false;
        unset($this->dynCreativeExclusionTypes[$this->indexOfDynCreativeExclusionType($aDynCreativeExclusionType)]);
        $this->dynCreativeExclusionTypes = array_values($this->dynCreativeExclusionTypes);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getDynCreativeExclusionTypes()
    {
        $newDynCreativeExclusionTypes = $this->dynCreativeExclusionTypes;
        return $newDynCreativeExclusionTypes;
    }

    public function numberOfDynCreativeExclusionTypes()
    {
        $number = count($this->dynCreativeExclusionTypes);
        return $number;
    }

    public function indexOfDynCreativeExclusionType($aDynCreativeExclusionType)
    {
        $rawAnswer = array_search($aDynCreativeExclusionType,$this->dynCreativeExclusionTypes);
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
