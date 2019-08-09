<?php
namespace jamesluo\smsbai\Kr;
class GetEstimatedDataRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetEstimatedDataRequest Attributes
    public $words;
    public $searchRegions;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setWords($awords) {
        $this->words = $awords;
    }

    public function addWord($aWord)
    {
        $wasAdded = false;
        $this->words[] = $aWord;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeWord($aWord)
    {
        $wasRemoved = false;
        unset($this->words[$this->indexOfWord($aWord)]);
        $this->words = array_values($this->words);
        $wasRemoved = true;
        return $wasRemoved;
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


    public function getWords()
    {
        $newWords = $this->words;
        return $newWords;
    }

    public function numberOfWords()
    {
        $number = count($this->words);
        return $number;
    }

    public function indexOfWord($aWord)
    {
        $rawAnswer = array_search($aWord,$this->words);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
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

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
