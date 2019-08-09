<?php
namespace jamesluo\smsbai\NewCreative;
class AddPhoneRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //AddPhoneRequest Attributes
    public $phoneTypes;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setPhoneTypes($aPhoneTypes)
    {
        $wasSet = false;
        $this->phoneTypes = $aPhoneTypes;
        $wasSet = true;
        return $wasSet;
    }

    public function getPhoneTypes()
    {
        return $this->phoneTypes;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
