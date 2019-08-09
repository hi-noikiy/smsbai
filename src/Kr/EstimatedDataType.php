<?php
namespace jamesluo\smsbai\Kr;
class EstimatedDataType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //EstimatedDataType Attributes
    public $bid;
    public $show;
    public $click;
    public $charge;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setBid($aBid)
    {
        $wasSet = false;
        $this->bid = $aBid;
        $wasSet = true;
        return $wasSet;
    }

    public function setShow($aShow)
    {
        $wasSet = false;
        $this->show = $aShow;
        $wasSet = true;
        return $wasSet;
    }

    public function setClick($aClick)
    {
        $wasSet = false;
        $this->click = $aClick;
        $wasSet = true;
        return $wasSet;
    }

    public function setCharge($aCharge)
    {
        $wasSet = false;
        $this->charge = $aCharge;
        $wasSet = true;
        return $wasSet;
    }

    public function getBid()
    {
        return $this->bid;
    }

    public function getShow()
    {
        return $this->show;
    }

    public function getClick()
    {
        return $this->click;
    }

    public function getCharge()
    {
        return $this->charge;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
