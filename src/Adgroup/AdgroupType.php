<?php
namespace  jamesluo\smsbai\Adgroup;
class AdgroupType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //AdgroupType Attributes
    public $adgroupId;
    public $campaignId;
    public $adgroupName;
    public $maxPrice;
    public $pause;
    public $negativeWords;
    public $exactNegativeWords;
    public $status;
    public $accuPriceFactor;
    public $wordPriceFactor;
    public $widePriceFactor;
    public $matchPriceStatus;
    public $priceRatio;
    public $offlineReasons;
    public $adType;
    public $operator;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setAdgroupId($aAdgroupId)
    {
        $wasSet = false;
        $this->adgroupId = $aAdgroupId;
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

    public function setAdgroupName($aAdgroupName)
    {
        $wasSet = false;
        $this->adgroupName = $aAdgroupName;
        $wasSet = true;
        return $wasSet;
    }

    public function setMaxPrice($aMaxPrice)
    {
        $wasSet = false;
        $this->maxPrice = $aMaxPrice;
        $wasSet = true;
        return $wasSet;
    }

    public function setPause($aPause)
    {
        $wasSet = false;
        $this->pause = $aPause;
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
    public function setExactNegativeWords($aexactNegativeWords) {
        $this->exactNegativeWords = $aexactNegativeWords;
    }

    public function addExactNegativeWord($aExactNegativeWord)
    {
        $wasAdded = false;
        $this->exactNegativeWords[] = $aExactNegativeWord;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeExactNegativeWord($aExactNegativeWord)
    {
        $wasRemoved = false;
        unset($this->exactNegativeWords[$this->indexOfExactNegativeWord($aExactNegativeWord)]);
        $this->exactNegativeWords = array_values($this->exactNegativeWords);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function setStatus($aStatus)
    {
        $wasSet = false;
        $this->status = $aStatus;
        $wasSet = true;
        return $wasSet;
    }

    public function setAccuPriceFactor($aAccuPriceFactor)
    {
        $wasSet = false;
        $this->accuPriceFactor = $aAccuPriceFactor;
        $wasSet = true;
        return $wasSet;
    }

    public function setWordPriceFactor($aWordPriceFactor)
    {
        $wasSet = false;
        $this->wordPriceFactor = $aWordPriceFactor;
        $wasSet = true;
        return $wasSet;
    }

    public function setWidePriceFactor($aWidePriceFactor)
    {
        $wasSet = false;
        $this->widePriceFactor = $aWidePriceFactor;
        $wasSet = true;
        return $wasSet;
    }

    public function setMatchPriceStatus($aMatchPriceStatus)
    {
        $wasSet = false;
        $this->matchPriceStatus = $aMatchPriceStatus;
        $wasSet = true;
        return $wasSet;
    }

    public function setPriceRatio($aPriceRatio)
    {
        $wasSet = false;
        $this->priceRatio = $aPriceRatio;
        $wasSet = true;
        return $wasSet;
    }
    public function setOfflineReasons($aofflineReasons) {
        $this->offlineReasons = $aofflineReasons;
    }

    public function addOfflineReason($aOfflineReason)
    {
        $wasAdded = false;
        $this->offlineReasons[] = $aOfflineReason;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeOfflineReason($aOfflineReason)
    {
        $wasRemoved = false;
        unset($this->offlineReasons[$this->indexOfOfflineReason($aOfflineReason)]);
        $this->offlineReasons = array_values($this->offlineReasons);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function setAdType($aAdType)
    {
        $wasSet = false;
        $this->adType = $aAdType;
        $wasSet = true;
        return $wasSet;
    }

    public function setOperator($aOperator)
    {
        $wasSet = false;
        $this->operator = $aOperator;
        $wasSet = true;
        return $wasSet;
    }

    public function getAdgroupId()
    {
        return $this->adgroupId;
    }

    public function getCampaignId()
    {
        return $this->campaignId;
    }

    public function getAdgroupName()
    {
        return $this->adgroupName;
    }

    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    public function getPause()
    {
        return $this->pause;
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


    public function getExactNegativeWords()
    {
        $newExactNegativeWords = $this->exactNegativeWords;
        return $newExactNegativeWords;
    }

    public function numberOfExactNegativeWords()
    {
        $number = count($this->exactNegativeWords);
        return $number;
    }

    public function indexOfExactNegativeWord($aExactNegativeWord)
    {
        $rawAnswer = array_search($aExactNegativeWord,$this->exactNegativeWords);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getAccuPriceFactor()
    {
        return $this->accuPriceFactor;
    }

    public function getWordPriceFactor()
    {
        return $this->wordPriceFactor;
    }

    public function getWidePriceFactor()
    {
        return $this->widePriceFactor;
    }

    public function getMatchPriceStatus()
    {
        return $this->matchPriceStatus;
    }

    public function getPriceRatio()
    {
        return $this->priceRatio;
    }


    public function getOfflineReasons()
    {
        $newOfflineReasons = $this->offlineReasons;
        return $newOfflineReasons;
    }

    public function numberOfOfflineReasons()
    {
        $number = count($this->offlineReasons);
        return $number;
    }

    public function indexOfOfflineReason($aOfflineReason)
    {
        $rawAnswer = array_search($aOfflineReason,$this->offlineReasons);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function getAdType()
    {
        return $this->adType;
    }

    public function getOperator()
    {
        return $this->operator;
    }

    public function isPause()
    {
        return $this->pause;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
