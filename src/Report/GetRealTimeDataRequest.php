<?php
namespace jamesluo\smsbai\Report;
class GetRealTimeDataRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetRealTimeDataRequest Attributes
    public $realTimeRequestType;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setRealTimeRequestType($aRealTimeRequestType)
    {
        $wasSet = false;
        $this->realTimeRequestType = $aRealTimeRequestType;
        $wasSet = true;
        return $wasSet;
    }

    public function getRealTimeRequestType()
    {
        return $this->realTimeRequestType;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
