<?php
namespace  jamesluo\smsbai\Report;
class RealTimePairResultType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //RealTimePairResultType Attributes
    public $keywordId;
    public $creativeId;
    public $pairInfo;
    public $date;
    public $KPIs;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setKeywordId($aKeywordId)
    {
        $wasSet = false;
        $this->keywordId = $aKeywordId;
        $wasSet = true;
        return $wasSet;
    }

    public function setCreativeId($aCreativeId)
    {
        $wasSet = false;
        $this->creativeId = $aCreativeId;
        $wasSet = true;
        return $wasSet;
    }
    public function setPairInfo($apairInfo) {
        $this->pairInfo = $apairInfo;
    }

    public function addPairInfo($aPairInfo)
    {
        $wasAdded = false;
        $this->pairInfo[] = $aPairInfo;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removePairInfo($aPairInfo)
    {
        $wasRemoved = false;
        unset($this->pairInfo[$this->indexOfPairInfo($aPairInfo)]);
        $this->pairInfo = array_values($this->pairInfo);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function setDate($aDate)
    {
        $wasSet = false;
        $this->date = $aDate;
        $wasSet = true;
        return $wasSet;
    }
    public function setKPIs($aKPIs) {
        $this->KPIs = $aKPIs;
    }

    public function addKPI($aKPI)
    {
        $wasAdded = false;
        $this->KPIs[] = $aKPI;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeKPI($aKPI)
    {
        $wasRemoved = false;
        unset($this->KPIs[$this->indexOfKPI($aKPI)]);
        $this->KPIs = array_values($this->KPIs);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function getKeywordId()
    {
        return $this->keywordId;
    }

    public function getCreativeId()
    {
        return $this->creativeId;
    }


    public function getPairInfo()
    {
        $newPairInfo = $this->pairInfo;
        return $newPairInfo;
    }

    public function numberOfPairInfo()
    {
        $number = count($this->pairInfo);
        return $number;
    }

    public function indexOfPairInfo($aPairInfo)
    {
        $rawAnswer = array_search($aPairInfo,$this->pairInfo);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function getDate()
    {
        return $this->date;
    }


    public function getKPIs()
    {
        $newKPIs = $this->KPIs;
        return $newKPIs;
    }

    public function numberOfKPIs()
    {
        $number = count($this->KPIs);
        return $number;
    }

    public function indexOfKPI($aKPI)
    {
        $rawAnswer = array_search($aKPI,$this->KPIs);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
