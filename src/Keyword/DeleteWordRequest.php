<?php
namespace jamesluo\smsbai\Keyword;
class DeleteWordRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //DeleteWordRequest Attributes
    public $keywordIds;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setKeywordIds($akeywordIds) {
        $this->keywordIds = $akeywordIds;
    }

    public function addKeywordId($aKeywordId)
    {
        $wasAdded = false;
        $this->keywordIds[] = $aKeywordId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeKeywordId($aKeywordId)
    {
        $wasRemoved = false;
        unset($this->keywordIds[$this->indexOfKeywordId($aKeywordId)]);
        $this->keywordIds = array_values($this->keywordIds);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getKeywordIds()
    {
        $newKeywordIds = $this->keywordIds;
        return $newKeywordIds;
    }

    public function numberOfKeywordIds()
    {
        $number = count($this->keywordIds);
        return $number;
    }

    public function indexOfKeywordId($aKeywordId)
    {
        $rawAnswer = array_search($aKeywordId,$this->keywordIds);
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
