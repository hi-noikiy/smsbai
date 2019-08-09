<?php
namespace  jamesluo\smsbai\BulkJob;
class GetUserCacheRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetUserCacheRequest Attributes
    public $action;
    public $biz;
    public $fileId;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setAction($aAction)
    {
        $wasSet = false;
        $this->action = $aAction;
        $wasSet = true;
        return $wasSet;
    }

    public function setBiz($aBiz)
    {
        $wasSet = false;
        $this->biz = $aBiz;
        $wasSet = true;
        return $wasSet;
    }

    public function setFileId($aFileId)
    {
        $wasSet = false;
        $this->fileId = $aFileId;
        $wasSet = true;
        return $wasSet;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getBiz()
    {
        return $this->biz;
    }

    public function getFileId()
    {
        return $this->fileId;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
