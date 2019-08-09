<?php
namespace  jamesluo\smsbai\NewCreative;
class AddEcallRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //AddEcallRequest Attributes
    public $ecallTypes;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setEcallTypes($aEcallTypes)
    {
        $wasSet = false;
        $this->ecallTypes = $aEcallTypes;
        $wasSet = true;
        return $wasSet;
    }

    public function getEcallTypes()
    {
        return $this->ecallTypes;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
