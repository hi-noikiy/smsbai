<?php
namespace jamesluo\smsbai\DynamicCreative;
class DynCreativeExclusionType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //DynCreativeExclusionType Attributes
    public $campaignId;
    public $exclusionTypes;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setCampaignId($aCampaignId)
    {
        $wasSet = false;
        $this->campaignId = $aCampaignId;
        $wasSet = true;
        return $wasSet;
    }
    public function setExclusionTypes($aexclusionTypes) {
        $this->exclusionTypes = $aexclusionTypes;
    }

    public function addExclusionType($aExclusionType)
    {
        $wasAdded = false;
        $this->exclusionTypes[] = $aExclusionType;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeExclusionType($aExclusionType)
    {
        $wasRemoved = false;
        unset($this->exclusionTypes[$this->indexOfExclusionType($aExclusionType)]);
        $this->exclusionTypes = array_values($this->exclusionTypes);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function getCampaignId()
    {
        return $this->campaignId;
    }


    public function getExclusionTypes()
    {
        $newExclusionTypes = $this->exclusionTypes;
        return $newExclusionTypes;
    }

    public function numberOfExclusionTypes()
    {
        $number = count($this->exclusionTypes);
        return $number;
    }

    public function indexOfExclusionType($aExclusionType)
    {
        $rawAnswer = array_search($aExclusionType,$this->exclusionTypes);
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
