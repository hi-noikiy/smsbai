<?php
namespace  jamesluo\smsbai\Kr;
class KREstimatedType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //KREstimatedType Attributes
    public $word;
    public $bid;
    public $matchType;

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

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
