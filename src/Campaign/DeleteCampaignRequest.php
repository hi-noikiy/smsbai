<?php
namespace  jamesluo\smsbai\Campaign;
class DeleteCampaignRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //DeleteCampaignRequest Attributes
    public $campaignIds;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
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

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
