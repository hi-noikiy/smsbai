<?php
namespace  jamesluo\smsbai\BulkJob;
class AccountCancelDownloadResponseData
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //AccountCancelDownloadResponseData Attributes
    public $isCanceled;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setIsCanceled($aIsCanceled)
    {
        $wasSet = false;
        $this->isCanceled = $aIsCanceled;
        $wasSet = true;
        return $wasSet;
    }

    public function getIsCanceled()
    {
        return $this->isCanceled;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
