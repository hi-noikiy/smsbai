<?php
namespace  jamesluo\smsbai\Report;
class GetRealTimeQueryDataRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetRealTimeQueryDataRequest Attributes
    public $realTimeQueryRequestType;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setRealTimeQueryRequestType($aRealTimeQueryRequestType)
    {
        $wasSet = false;
        $this->realTimeQueryRequestType = $aRealTimeQueryRequestType;
        $wasSet = true;
        return $wasSet;
    }

    public function getRealTimeQueryRequestType()
    {
        return $this->realTimeQueryRequestType;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
