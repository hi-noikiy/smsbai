<?php
namespace  jamesluo\smsbai\App;
class AppResponse
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //AppResponse Attributes
    public $errorcode;
    public $data;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setErrorcode($aErrorcode)
    {
        $wasSet = false;
        $this->errorcode = $aErrorcode;
        $wasSet = true;
        return $wasSet;
    }

    public function setData($aData)
    {
        $wasSet = false;
        $this->data = $aData;
        $wasSet = true;
        return $wasSet;
    }

    public function getErrorcode()
    {
        return $this->errorcode;
    }

    public function getData()
    {
        return $this->data;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
