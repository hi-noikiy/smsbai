<?php
namespace  jamesluo\smsbai\Creative;
class UpdateCreativeRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //UpdateCreativeRequest Attributes
    public $creativeTypes;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setCreativeTypes($acreativeTypes) {
        $this->creativeTypes = $acreativeTypes;
    }

    public function addCreativeType($aCreativeType)
    {
        $wasAdded = false;
        $this->creativeTypes[] = $aCreativeType;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeCreativeType($aCreativeType)
    {
        $wasRemoved = false;
        unset($this->creativeTypes[$this->indexOfCreativeType($aCreativeType)]);
        $this->creativeTypes = array_values($this->creativeTypes);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getCreativeTypes()
    {
        $newCreativeTypes = $this->creativeTypes;
        return $newCreativeTypes;
    }

    public function numberOfCreativeTypes()
    {
        $number = count($this->creativeTypes);
        return $number;
    }

    public function indexOfCreativeType($aCreativeType)
    {
        $rawAnswer = array_search($aCreativeType,$this->creativeTypes);
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
