<?php
namespace  jamesluo\smsbai\Account;
class OfflineTimeType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //OfflineTimeType Attributes
    public $time;
    public $flag;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setTime($aTime)
    {
        $wasSet = false;
        $this->time = $aTime;
        $wasSet = true;
        return $wasSet;
    }

    public function setFlag($aFlag)
    {
        $wasSet = false;
        $this->flag = $aFlag;
        $wasSet = true;
        return $wasSet;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function getFlag()
    {
        return $this->flag;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
