<?php
namespace  jamesluo\smsbai\Report;
class GetReportFileUrlData
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetReportFileUrlData Attributes
    public $reportFilePath;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setReportFilePath($aReportFilePath)
    {
        $wasSet = false;
        $this->reportFilePath = $aReportFilePath;
        $wasSet = true;
        return $wasSet;
    }

    public function getReportFilePath()
    {
        return $this->reportFilePath;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}

