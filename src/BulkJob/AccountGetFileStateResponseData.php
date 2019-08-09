<?php
namespace  jamesluo\smsbai\BulkJob;
class AccountGetFileStateResponseData
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //AccountGetFileStateResponseData Attributes
    public $isGenerated;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setIsGenerated($aIsGenerated)
    {
        $wasSet = false;
        $this->isGenerated = $aIsGenerated;
        $wasSet = true;
        return $wasSet;
    }

    public function getIsGenerated()
    {
        return $this->isGenerated;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
