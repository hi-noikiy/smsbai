<?php
namespace  jamesluo\smsbai\BulkJob;
class GetUserCacheResponseData
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetUserCacheResponseData Attributes
    public $userId;
    public $status;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setUserId($aUserId)
    {
        $wasSet = false;
        $this->userId = $aUserId;
        $wasSet = true;
        return $wasSet;
    }

    public function setStatus($aStatus)
    {
        $wasSet = false;
        $this->status = $aStatus;
        $wasSet = true;
        return $wasSet;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
