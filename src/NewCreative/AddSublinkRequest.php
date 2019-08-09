<?php
namespace  jamesluo\smsbai\NewCreative;
class AddSublinkRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //AddSublinkRequest Attributes
    public $sublinkTypes;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setSublinkTypes($aSublinkTypes)
    {
        $wasSet = false;
        $this->sublinkTypes = $aSublinkTypes;
        $wasSet = true;
        return $wasSet;
    }

    public function getSublinkTypes()
    {
        return $this->sublinkTypes;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
