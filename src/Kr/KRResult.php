<?php
namespace  jamesluo\smsbai\Kr;
class KRResult
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //KRResult Attributes
    public $word;
    public $competition;
    public $wordPackage;
    public $businessPoints;
    public $recBid;
    public $PV;
    public $pcPV;
    public $mobilePV;
    public $showReasons;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setWord($aWord)
    {
        $wasSet = false;
        $this->word = $aWord;
        $wasSet = true;
        return $wasSet;
    }

    public function setCompetition($aCompetition)
    {
        $wasSet = false;
        $this->competition = $aCompetition;
        $wasSet = true;
        return $wasSet;
    }

    public function setWordPackage($aWordPackage)
    {
        $wasSet = false;
        $this->wordPackage = $aWordPackage;
        $wasSet = true;
        return $wasSet;
    }

    public function setBusinessPoints($aBusinessPoints)
    {
        $wasSet = false;
        $this->businessPoints = $aBusinessPoints;
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

    public function setPV($aPV)
    {
        $wasSet = false;
        $this->PV = $aPV;
        $wasSet = true;
        return $wasSet;
    }

    public function setPcPV($aPcPV)
    {
        $wasSet = false;
        $this->pcPV = $aPcPV;
        $wasSet = true;
        return $wasSet;
    }

    public function setMobilePV($aMobilePV)
    {
        $wasSet = false;
        $this->mobilePV = $aMobilePV;
        $wasSet = true;
        return $wasSet;
    }

    public function setShowReasons($aShowReasons)
    {
        $wasSet = false;
        $this->showReasons = $aShowReasons;
        $wasSet = true;
        return $wasSet;
    }

    public function getWord()
    {
        return $this->word;
    }

    public function getCompetition()
    {
        return $this->competition;
    }

    public function getWordPackage()
    {
        return $this->wordPackage;
    }

    public function getBusinessPoints()
    {
        return $this->businessPoints;
    }

    public function getRecBid()
    {
        return $this->recBid;
    }

    public function getPV()
    {
        return $this->PV;
    }

    public function getPcPV()
    {
        return $this->pcPV;
    }

    public function getMobilePV()
    {
        return $this->mobilePV;
    }

    public function getShowReasons()
    {
        return $this->showReasons;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
