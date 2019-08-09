<?php
namespace jamesluo\smsbai\Kr;
class GetEstimatedDataByBidResult
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetEstimatedDataByBidResult Attributes
    public $word;
    public $bid;
    public $matchType;
    public $competition;
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

    public function setWord($aWord)
    {
        $wasSet = false;
        $this->word = $aWord;
        $wasSet = true;
        return $wasSet;
    }

    public function setBid($aBid)
    {
        $wasSet = false;
        $this->bid = $aBid;
        $wasSet = true;
        return $wasSet;
    }

    public function setMatchType($aMatchType)
    {
        $wasSet = false;
        $this->matchType = $aMatchType;
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

    public function getWord()
    {
        return $this->word;
    }

    public function getBid()
    {
        return $this->bid;
    }

    public function getMatchType()
    {
        return $this->matchType;
    }

    public function getCompetition()
    {
        return $this->competition;
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
