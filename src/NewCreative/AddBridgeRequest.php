<?php
namespace  jamesluo\smsbai\NewCreative;
class AddBridgeRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //AddBridgeRequest Attributes
    public $bridgeTypes;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setBridgeTypes($aBridgeTypes)
    {
        $wasSet = false;
        $this->bridgeTypes = $aBridgeTypes;
        $wasSet = true;
        return $wasSet;
    }

    public function getBridgeTypes()
    {
        return $this->bridgeTypes;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
