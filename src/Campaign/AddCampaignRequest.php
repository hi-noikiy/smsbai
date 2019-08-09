<?php
namespace  jamesluo\smsbai\Campaign;
class AddCampaignRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //AddCampaignRequest Attributes
    public $campaignTypes;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setCampaignTypes($acampaignTypes) {
        $this->campaignTypes = $acampaignTypes;
    }

    public function addCampaignType($aCampaignType)
    {
        $wasAdded = false;
        $this->campaignTypes[] = $aCampaignType;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeCampaignType($aCampaignType)
    {
        $wasRemoved = false;
        unset($this->campaignTypes[$this->indexOfCampaignType($aCampaignType)]);
        $this->campaignTypes = array_values($this->campaignTypes);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getCampaignTypes()
    {
        $newCampaignTypes = $this->campaignTypes;
        return $newCampaignTypes;
    }

    public function numberOfCampaignTypes()
    {
        $number = count($this->campaignTypes);
        return $number;
    }

    public function indexOfCampaignType($aCampaignType)
    {
        $rawAnswer = array_search($aCampaignType,$this->campaignTypes);
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
