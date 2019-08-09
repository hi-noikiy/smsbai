<?php
namespace jamesluo\smsbai\Kr;
class EstimatedBidType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //EstimatedBidType Attributes
    public $show;
    public $click;
    public $cpc;
    public $charge;
    public $rank;
    public $ctr;
    public $showRate;
    public $pv;
    public $recBid;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

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

    public function setCpc($aCpc)
    {
        $wasSet = false;
        $this->cpc = $aCpc;
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

    public function setRank($aRank)
    {
        $wasSet = false;
        $this->rank = $aRank;
        $wasSet = true;
        return $wasSet;
    }

    public function setCtr($aCtr)
    {
        $wasSet = false;
        $this->ctr = $aCtr;
        $wasSet = true;
        return $wasSet;
    }

    public function setShowRate($aShowRate)
    {
        $wasSet = false;
        $this->showRate = $aShowRate;
        $wasSet = true;
        return $wasSet;
    }

    public function setPv($aPv)
    {
        $wasSet = false;
        $this->pv = $aPv;
        $wasSet = true;
        return $wasSet;
    }

    public function setRecBid($aRecBid)
    {
        $wasSet = false;
        $this->recBid = $aRecBid;
        $wasSet = true;
        return $wasSet;
    }

    public function getShow()
    {
        return $this->show;
    }

    public function getClick()
    {
        return $this->click;
    }

    public function getCpc()
    {
        return $this->cpc;
    }

    public function getCharge()
    {
        return $this->charge;
    }

    public function getRank()
    {
        return $this->rank;
    }

    public function getCtr()
    {
        return $this->ctr;
    }

    public function getShowRate()
    {
        return $this->showRate;
    }

    public function getPv()
    {
        return $this->pv;
    }

    public function getRecBid()
    {
        return $this->recBid;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
