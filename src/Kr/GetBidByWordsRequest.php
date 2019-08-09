<?php
namespace jamesluo\smsbai\Kr;
class GetBidByWordsRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetBidByWordsRequest Attributes
    public $words;

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

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
