<?php
namespace jamesluo\smsbai\DynamicCreative;
class UpdateDynCreativeRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //UpdateDynCreativeRequest Attributes
    public $dynCreativeTypes;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setDynCreativeTypes($adynCreativeTypes) {
        $this->dynCreativeTypes = $adynCreativeTypes;
    }

    public function addDynCreativeType($aDynCreativeType)
    {
        $wasAdded = false;
        $this->dynCreativeTypes[] = $aDynCreativeType;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeDynCreativeType($aDynCreativeType)
    {
        $wasRemoved = false;
        unset($this->dynCreativeTypes[$this->indexOfDynCreativeType($aDynCreativeType)]);
        $this->dynCreativeTypes = array_values($this->dynCreativeTypes);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getDynCreativeTypes()
    {
        $newDynCreativeTypes = $this->dynCreativeTypes;
        return $newDynCreativeTypes;
    }

    public function numberOfDynCreativeTypes()
    {
        $number = count($this->dynCreativeTypes);
        return $number;
    }

    public function indexOfDynCreativeType($aDynCreativeType)
    {
        $rawAnswer = array_search($aDynCreativeType,$this->dynCreativeTypes);
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
