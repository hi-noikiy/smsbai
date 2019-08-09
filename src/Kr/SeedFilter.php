<?php
namespace jamesluo\smsbai\Kr;
class SeedFilter
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //SeedFilter Attributes
    public $device;
    public $competeLow;
    public $competeHigh;
    public $maxNum;
    public $negativeWords;
    public $positiveWord;
    public $pvLow;
    public $pvHigh;
    public $regionExtend;
    public $removeDuplicate;
    public $searchRegions;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setDevice($aDevice)
    {
        $wasSet = false;
        $this->device = $aDevice;
        $wasSet = true;
        return $wasSet;
    }

    public function setCompeteLow($aCompeteLow)
    {
        $wasSet = false;
        $this->competeLow = $aCompeteLow;
        $wasSet = true;
        return $wasSet;
    }

    public function setCompeteHigh($aCompeteHigh)
    {
        $wasSet = false;
        $this->competeHigh = $aCompeteHigh;
        $wasSet = true;
        return $wasSet;
    }

    public function setMaxNum($aMaxNum)
    {
        $wasSet = false;
        $this->maxNum = $aMaxNum;
        $wasSet = true;
        return $wasSet;
    }
    public function setNegativeWords($anegativeWords) {
        $this->negativeWords = $anegativeWords;
    }

    public function addNegativeWord($aNegativeWord)
    {
        $wasAdded = false;
        $this->negativeWords[] = $aNegativeWord;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeNegativeWord($aNegativeWord)
    {
        $wasRemoved = false;
        unset($this->negativeWords[$this->indexOfNegativeWord($aNegativeWord)]);
        $this->negativeWords = array_values($this->negativeWords);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function setPositiveWord($aPositiveWord)
    {
        $wasSet = false;
        $this->positiveWord = $aPositiveWord;
        $wasSet = true;
        return $wasSet;
    }

    public function setPvLow($aPvLow)
    {
        $wasSet = false;
        $this->pvLow = $aPvLow;
        $wasSet = true;
        return $wasSet;
    }

    public function setPvHigh($aPvHigh)
    {
        $wasSet = false;
        $this->pvHigh = $aPvHigh;
        $wasSet = true;
        return $wasSet;
    }

    public function setRegionExtend($aRegionExtend)
    {
        $wasSet = false;
        $this->regionExtend = $aRegionExtend;
        $wasSet = true;
        return $wasSet;
    }

    public function setRemoveDuplicate($aRemoveDuplicate)
    {
        $wasSet = false;
        $this->removeDuplicate = $aRemoveDuplicate;
        $wasSet = true;
        return $wasSet;
    }
    public function setSearchRegions($asearchRegions) {
        $this->searchRegions = $asearchRegions;
    }

    public function addSearchRegion($aSearchRegion)
    {
        $wasAdded = false;
        $this->searchRegions[] = $aSearchRegion;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeSearchRegion($aSearchRegion)
    {
        $wasRemoved = false;
        unset($this->searchRegions[$this->indexOfSearchRegion($aSearchRegion)]);
        $this->searchRegions = array_values($this->searchRegions);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function getDevice()
    {
        return $this->device;
    }

    public function getCompeteLow()
    {
        return $this->competeLow;
    }

    public function getCompeteHigh()
    {
        return $this->competeHigh;
    }

    public function getMaxNum()
    {
        return $this->maxNum;
    }


    public function getNegativeWords()
    {
        $newNegativeWords = $this->negativeWords;
        return $newNegativeWords;
    }

    public function numberOfNegativeWords()
    {
        $number = count($this->negativeWords);
        return $number;
    }

    public function indexOfNegativeWord($aNegativeWord)
    {
        $rawAnswer = array_search($aNegativeWord,$this->negativeWords);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function getPositiveWord()
    {
        return $this->positiveWord;
    }

    public function getPvLow()
    {
        return $this->pvLow;
    }

    public function getPvHigh()
    {
        return $this->pvHigh;
    }

    public function getRegionExtend()
    {
        return $this->regionExtend;
    }

    public function getRemoveDuplicate()
    {
        return $this->removeDuplicate;
    }


    public function getSearchRegions()
    {
        $newSearchRegions = $this->searchRegions;
        return $newSearchRegions;
    }

    public function numberOfSearchRegions()
    {
        $number = count($this->searchRegions);
        return $number;
    }

    public function indexOfSearchRegion($aSearchRegion)
    {
        $rawAnswer = array_search($aSearchRegion,$this->searchRegions);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function isRegionExtend()
    {
        return $this->regionExtend;
    }

    public function isRemoveDuplicate()
    {
        return $this->removeDuplicate;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
