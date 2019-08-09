<?php
namespace  jamesluo\smsbai\Report;
class GetProfessionalReportIdRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetProfessionalReportIdRequest Attributes
    public $reportRequestType;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setReportRequestType($aReportRequestType)
    {
        $wasSet = false;
        $this->reportRequestType = $aReportRequestType;
        $wasSet = true;
        return $wasSet;
    }

    public function getReportRequestType()
    {
        return $this->reportRequestType;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}

