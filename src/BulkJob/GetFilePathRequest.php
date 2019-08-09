<?php
namespace  jamesluo\smsbai\BulkJob;
class GetFilePathRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetFilePathRequest Attributes
    public $fileId;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setFileId($aFileId)
    {
        $wasSet = false;
        $this->fileId = $aFileId;
        $wasSet = true;
        return $wasSet;
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
