<?php
namespace jamesluo\smsbai\Kr;
class GetKRFileIdByWordsRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetKRFileIdByWordsRequest Attributes
    public $seedFilter;
    public $seedWords;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setSeedFilter($aSeedFilter)
    {
        $wasSet = false;
        $this->seedFilter = $aSeedFilter;
        $wasSet = true;
        return $wasSet;
    }
    public function setSeedWords($aseedWords) {
        $this->seedWords = $aseedWords;
    }

    public function addSeedWord($aSeedWord)
    {
        $wasAdded = false;
        $this->seedWords[] = $aSeedWord;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeSeedWord($aSeedWord)
    {
        $wasRemoved = false;
        unset($this->seedWords[$this->indexOfSeedWord($aSeedWord)]);
        $this->seedWords = array_values($this->seedWords);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function getSeedFilter()
    {
        return $this->seedFilter;
    }


    public function getSeedWords()
    {
        $newSeedWords = $this->seedWords;
        return $newSeedWords;
    }

    public function numberOfSeedWords()
    {
        $number = count($this->seedWords);
        return $number;
    }

    public function indexOfSeedWord($aSeedWord)
    {
        $rawAnswer = array_search($aSeedWord,$this->seedWords);
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
