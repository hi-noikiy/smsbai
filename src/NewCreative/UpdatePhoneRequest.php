<?php
namespace  jamesluo\smsbai\NewCreative;
class UpdatePhoneRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //UpdatePhoneRequest Attributes
    public $phoneTypes;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setPhoneTypes($aphoneTypes) {
        $this->phoneTypes = $aphoneTypes;
    }

    public function addPhoneType($aPhoneType)
    {
        $wasAdded = false;
        $this->phoneTypes[] = $aPhoneType;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removePhoneType($aPhoneType)
    {
        $wasRemoved = false;
        unset($this->phoneTypes[$this->indexOfPhoneType($aPhoneType)]);
        $this->phoneTypes = array_values($this->phoneTypes);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getPhoneTypes()
    {
        $newPhoneTypes = $this->phoneTypes;
        return $newPhoneTypes;
    }

    public function numberOfPhoneTypes()
    {
        $number = count($this->phoneTypes);
        return $number;
    }

    public function indexOfPhoneType($aPhoneType)
    {
        $rawAnswer = array_search($aPhoneType,$this->phoneTypes);
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
