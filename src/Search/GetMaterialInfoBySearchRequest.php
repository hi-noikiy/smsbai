<?php
namespace  jamesluo\smsbai\Search;
class GetMaterialInfoBySearchRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetMaterialInfoBySearchRequest Attributes
    public $searchWord;
    public $startNum;
    public $endNum;
    public $campaignId;
    public $adgroupId;
    public $searchType;
    public $searchLevel;
    public $materialFields;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setSearchWord($aSearchWord)
    {
        $wasSet = false;
        $this->searchWord = $aSearchWord;
        $wasSet = true;
        return $wasSet;
    }

    public function setStartNum($aStartNum)
    {
        $wasSet = false;
        $this->startNum = $aStartNum;
        $wasSet = true;
        return $wasSet;
    }

    public function setEndNum($aEndNum)
    {
        $wasSet = false;
        $this->endNum = $aEndNum;
        $wasSet = true;
        return $wasSet;
    }

    public function setCampaignId($aCampaignId)
    {
        $wasSet = false;
        $this->campaignId = $aCampaignId;
        $wasSet = true;
        return $wasSet;
    }

    public function setAdgroupId($aAdgroupId)
    {
        $wasSet = false;
        $this->adgroupId = $aAdgroupId;
        $wasSet = true;
        return $wasSet;
    }

    public function setSearchType($aSearchType)
    {
        $wasSet = false;
        $this->searchType = $aSearchType;
        $wasSet = true;
        return $wasSet;
    }

    public function setSearchLevel($aSearchLevel)
    {
        $wasSet = false;
        $this->searchLevel = $aSearchLevel;
        $wasSet = true;
        return $wasSet;
    }
    public function setMaterialFields($amaterialFields) {
        $this->materialFields = $amaterialFields;
    }

    public function addMaterialField($aMaterialField)
    {
        $wasAdded = false;
        $this->materialFields[] = $aMaterialField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeMaterialField($aMaterialField)
    {
        $wasRemoved = false;
        unset($this->materialFields[$this->indexOfMaterialField($aMaterialField)]);
        $this->materialFields = array_values($this->materialFields);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function getSearchWord()
    {
        return $this->searchWord;
    }

    public function getStartNum()
    {
        return $this->startNum;
    }

    public function getEndNum()
    {
        return $this->endNum;
    }

    public function getCampaignId()
    {
        return $this->campaignId;
    }

    public function getAdgroupId()
    {
        return $this->adgroupId;
    }

    public function getSearchType()
    {
        return $this->searchType;
    }

    public function getSearchLevel()
    {
        return $this->searchLevel;
    }


    public function getMaterialFields()
    {
        $newMaterialFields = $this->materialFields;
        return $newMaterialFields;
    }

    public function numberOfMaterialFields()
    {
        $number = count($this->materialFields);
        return $number;
    }

    public function indexOfMaterialField($aMaterialField)
    {
        $rawAnswer = array_search($aMaterialField,$this->materialFields);
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
