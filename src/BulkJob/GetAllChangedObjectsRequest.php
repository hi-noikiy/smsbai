<?php
namespace  jamesluo\smsbai\BulkJob;
class GetAllChangedObjectsRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetAllChangedObjectsRequest Attributes
    public $startTime;
    public $campaignIds;
    public $includeTemp;
    public $format;
    public $accountFields;
    public $campaignFields;
    public $adgroupFields;
    public $keywordFields;
    public $creativeFields;
    public $sublinkFields;
    public $mobileSublinkFields;
    public $phoneFields;
    public $bridgeFields;
    public $dynamicCreativeFields;
    public $needShowQ;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setStartTime($aStartTime)
    {
        $wasSet = false;
        $this->startTime = $aStartTime;
        $wasSet = true;
        return $wasSet;
    }
    public function setCampaignIds($acampaignIds) {
        $this->campaignIds = $acampaignIds;
    }

    public function addCampaignId($aCampaignId)
    {
        $wasAdded = false;
        $this->campaignIds[] = $aCampaignId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeCampaignId($aCampaignId)
    {
        $wasRemoved = false;
        unset($this->campaignIds[$this->indexOfCampaignId($aCampaignId)]);
        $this->campaignIds = array_values($this->campaignIds);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function setIncludeTemp($aIncludeTemp)
    {
        $wasSet = false;
        $this->includeTemp = $aIncludeTemp;
        $wasSet = true;
        return $wasSet;
    }

    public function setFormat($aFormat)
    {
        $wasSet = false;
        $this->format = $aFormat;
        $wasSet = true;
        return $wasSet;
    }
    public function setAccountFields($aaccountFields) {
        $this->accountFields = $aaccountFields;
    }

    public function addAccountField($aAccountField)
    {
        $wasAdded = false;
        $this->accountFields[] = $aAccountField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeAccountField($aAccountField)
    {
        $wasRemoved = false;
        unset($this->accountFields[$this->indexOfAccountField($aAccountField)]);
        $this->accountFields = array_values($this->accountFields);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setCampaignFields($acampaignFields) {
        $this->campaignFields = $acampaignFields;
    }

    public function addCampaignField($aCampaignField)
    {
        $wasAdded = false;
        $this->campaignFields[] = $aCampaignField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeCampaignField($aCampaignField)
    {
        $wasRemoved = false;
        unset($this->campaignFields[$this->indexOfCampaignField($aCampaignField)]);
        $this->campaignFields = array_values($this->campaignFields);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setAdgroupFields($aadgroupFields) {
        $this->adgroupFields = $aadgroupFields;
    }

    public function addAdgroupField($aAdgroupField)
    {
        $wasAdded = false;
        $this->adgroupFields[] = $aAdgroupField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeAdgroupField($aAdgroupField)
    {
        $wasRemoved = false;
        unset($this->adgroupFields[$this->indexOfAdgroupField($aAdgroupField)]);
        $this->adgroupFields = array_values($this->adgroupFields);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setKeywordFields($akeywordFields) {
        $this->keywordFields = $akeywordFields;
    }

    public function addKeywordField($aKeywordField)
    {
        $wasAdded = false;
        $this->keywordFields[] = $aKeywordField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeKeywordField($aKeywordField)
    {
        $wasRemoved = false;
        unset($this->keywordFields[$this->indexOfKeywordField($aKeywordField)]);
        $this->keywordFields = array_values($this->keywordFields);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setCreativeFields($acreativeFields) {
        $this->creativeFields = $acreativeFields;
    }

    public function addCreativeField($aCreativeField)
    {
        $wasAdded = false;
        $this->creativeFields[] = $aCreativeField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeCreativeField($aCreativeField)
    {
        $wasRemoved = false;
        unset($this->creativeFields[$this->indexOfCreativeField($aCreativeField)]);
        $this->creativeFields = array_values($this->creativeFields);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setSublinkFields($asublinkFields) {
        $this->sublinkFields = $asublinkFields;
    }

    public function addSublinkField($aSublinkField)
    {
        $wasAdded = false;
        $this->sublinkFields[] = $aSublinkField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeSublinkField($aSublinkField)
    {
        $wasRemoved = false;
        unset($this->sublinkFields[$this->indexOfSublinkField($aSublinkField)]);
        $this->sublinkFields = array_values($this->sublinkFields);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setMobileSublinkFields($amobileSublinkFields) {
        $this->mobileSublinkFields = $amobileSublinkFields;
    }

    public function addMobileSublinkField($aMobileSublinkField)
    {
        $wasAdded = false;
        $this->mobileSublinkFields[] = $aMobileSublinkField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeMobileSublinkField($aMobileSublinkField)
    {
        $wasRemoved = false;
        unset($this->mobileSublinkFields[$this->indexOfMobileSublinkField($aMobileSublinkField)]);
        $this->mobileSublinkFields = array_values($this->mobileSublinkFields);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setPhoneFields($aphoneFields) {
        $this->phoneFields = $aphoneFields;
    }

    public function addPhoneField($aPhoneField)
    {
        $wasAdded = false;
        $this->phoneFields[] = $aPhoneField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removePhoneField($aPhoneField)
    {
        $wasRemoved = false;
        unset($this->phoneFields[$this->indexOfPhoneField($aPhoneField)]);
        $this->phoneFields = array_values($this->phoneFields);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setBridgeFields($abridgeFields) {
        $this->bridgeFields = $abridgeFields;
    }

    public function addBridgeField($aBridgeField)
    {
        $wasAdded = false;
        $this->bridgeFields[] = $aBridgeField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeBridgeField($aBridgeField)
    {
        $wasRemoved = false;
        unset($this->bridgeFields[$this->indexOfBridgeField($aBridgeField)]);
        $this->bridgeFields = array_values($this->bridgeFields);
        $wasRemoved = true;
        return $wasRemoved;
    }
    public function setDynamicCreativeFields($adynamicCreativeFields) {
        $this->dynamicCreativeFields = $adynamicCreativeFields;
    }

    public function addDynamicCreativeField($aDynamicCreativeField)
    {
        $wasAdded = false;
        $this->dynamicCreativeFields[] = $aDynamicCreativeField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeDynamicCreativeField($aDynamicCreativeField)
    {
        $wasRemoved = false;
        unset($this->dynamicCreativeFields[$this->indexOfDynamicCreativeField($aDynamicCreativeField)]);
        $this->dynamicCreativeFields = array_values($this->dynamicCreativeFields);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function setNeedShowQ($aNeedShowQ)
    {
        $wasSet = false;
        $this->needShowQ = $aNeedShowQ;
        $wasSet = true;
        return $wasSet;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }


    public function getCampaignIds()
    {
        $newCampaignIds = $this->campaignIds;
        return $newCampaignIds;
    }

    public function numberOfCampaignIds()
    {
        $number = count($this->campaignIds);
        return $number;
    }

    public function indexOfCampaignId($aCampaignId)
    {
        $rawAnswer = array_search($aCampaignId,$this->campaignIds);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function getIncludeTemp()
    {
        return $this->includeTemp;
    }

    public function getFormat()
    {
        return $this->format;
    }


    public function getAccountFields()
    {
        $newAccountFields = $this->accountFields;
        return $newAccountFields;
    }

    public function numberOfAccountFields()
    {
        $number = count($this->accountFields);
        return $number;
    }

    public function indexOfAccountField($aAccountField)
    {
        $rawAnswer = array_search($aAccountField,$this->accountFields);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getCampaignFields()
    {
        $newCampaignFields = $this->campaignFields;
        return $newCampaignFields;
    }

    public function numberOfCampaignFields()
    {
        $number = count($this->campaignFields);
        return $number;
    }

    public function indexOfCampaignField($aCampaignField)
    {
        $rawAnswer = array_search($aCampaignField,$this->campaignFields);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getAdgroupFields()
    {
        $newAdgroupFields = $this->adgroupFields;
        return $newAdgroupFields;
    }

    public function numberOfAdgroupFields()
    {
        $number = count($this->adgroupFields);
        return $number;
    }

    public function indexOfAdgroupField($aAdgroupField)
    {
        $rawAnswer = array_search($aAdgroupField,$this->adgroupFields);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getKeywordFields()
    {
        $newKeywordFields = $this->keywordFields;
        return $newKeywordFields;
    }

    public function numberOfKeywordFields()
    {
        $number = count($this->keywordFields);
        return $number;
    }

    public function indexOfKeywordField($aKeywordField)
    {
        $rawAnswer = array_search($aKeywordField,$this->keywordFields);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getCreativeFields()
    {
        $newCreativeFields = $this->creativeFields;
        return $newCreativeFields;
    }

    public function numberOfCreativeFields()
    {
        $number = count($this->creativeFields);
        return $number;
    }

    public function indexOfCreativeField($aCreativeField)
    {
        $rawAnswer = array_search($aCreativeField,$this->creativeFields);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getSublinkFields()
    {
        $newSublinkFields = $this->sublinkFields;
        return $newSublinkFields;
    }

    public function numberOfSublinkFields()
    {
        $number = count($this->sublinkFields);
        return $number;
    }

    public function indexOfSublinkField($aSublinkField)
    {
        $rawAnswer = array_search($aSublinkField,$this->sublinkFields);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getMobileSublinkFields()
    {
        $newMobileSublinkFields = $this->mobileSublinkFields;
        return $newMobileSublinkFields;
    }

    public function numberOfMobileSublinkFields()
    {
        $number = count($this->mobileSublinkFields);
        return $number;
    }

    public function indexOfMobileSublinkField($aMobileSublinkField)
    {
        $rawAnswer = array_search($aMobileSublinkField,$this->mobileSublinkFields);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getPhoneFields()
    {
        $newPhoneFields = $this->phoneFields;
        return $newPhoneFields;
    }

    public function numberOfPhoneFields()
    {
        $number = count($this->phoneFields);
        return $number;
    }

    public function indexOfPhoneField($aPhoneField)
    {
        $rawAnswer = array_search($aPhoneField,$this->phoneFields);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getBridgeFields()
    {
        $newBridgeFields = $this->bridgeFields;
        return $newBridgeFields;
    }

    public function numberOfBridgeFields()
    {
        $number = count($this->bridgeFields);
        return $number;
    }

    public function indexOfBridgeField($aBridgeField)
    {
        $rawAnswer = array_search($aBridgeField,$this->bridgeFields);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }


    public function getDynamicCreativeFields()
    {
        $newDynamicCreativeFields = $this->dynamicCreativeFields;
        return $newDynamicCreativeFields;
    }

    public function numberOfDynamicCreativeFields()
    {
        $number = count($this->dynamicCreativeFields);
        return $number;
    }

    public function indexOfDynamicCreativeField($aDynamicCreativeField)
    {
        $rawAnswer = array_search($aDynamicCreativeField,$this->dynamicCreativeFields);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function getNeedShowQ()
    {
        return $this->needShowQ;
    }

    public function isIncludeTemp()
    {
        return $this->includeTemp;
    }

    public function isNeedShowQ()
    {
        return $this->needShowQ;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
