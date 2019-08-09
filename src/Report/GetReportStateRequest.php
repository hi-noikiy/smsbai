<?php
namespace  jamesluo\smsbai\Report;
class GetReportStateRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetReportStateRequest Attributes
    public $reportId;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setReportId($aReportId)
    {
        $wasSet = false;
        $this->reportId = $aReportId;
        $wasSet = true;
        return $wasSet;
    }

    public function getReportId()
    {
        return $this->reportId;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
