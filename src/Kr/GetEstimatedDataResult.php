<?php
namespace  jamesluo\smsbai\Kr;
class GetEstimatedDataResult
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetEstimatedDataResult Attributes
    public $all;
    public $pc;
    public $mobile;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setAll($aAll)
    {
        $wasSet = false;
        $this->all = $aAll;
        $wasSet = true;
        return $wasSet;
    }

    public function setPc($aPc)
    {
        $wasSet = false;
        $this->pc = $aPc;
        $wasSet = true;
        return $wasSet;
    }

    public function setMobile($aMobile)
    {
        $wasSet = false;
        $this->mobile = $aMobile;
        $wasSet = true;
        return $wasSet;
    }

    public function getAll()
    {
        return $this->all;
    }

    public function getPc()
    {
        return $this->pc;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
