<?php
namespace jamesluo\smsbai\Report;
class GetRealTimePairDataRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetRealTimePairDataRequest Attributes
    public $realTimePairRequestType;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setRealTimePairRequestType($aRealTimePairRequestType)
    {
        $wasSet = false;
        $this->realTimePairRequestType = $aRealTimePairRequestType;
        $wasSet = true;
        return $wasSet;
    }

    public function getRealTimePairRequestType()
    {
        return $this->realTimePairRequestType;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
