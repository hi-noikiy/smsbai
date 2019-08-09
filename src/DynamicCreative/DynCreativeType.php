<?php
namespace jamesluo\smsbai\DynamicCreative;
class DynCreativeType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //DynCreativeType Attributes
    public $dynCreativeId;
    public $campaignId;
    public $adgroupId;
    public $bindingType;
    public $title;
    public $url;
    public $murl;
    public $pause;
    public $status;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setDynCreativeId($aDynCreativeId)
    {
        $wasSet = false;
        $this->dynCreativeId = $aDynCreativeId;
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

    public function setBindingType($aBindingType)
    {
        $wasSet = false;
        $this->bindingType = $aBindingType;
        $wasSet = true;
        return $wasSet;
    }

    public function setTitle($aTitle)
    {
        $wasSet = false;
        $this->title = $aTitle;
        $wasSet = true;
        return $wasSet;
    }

    public function setUrl($aUrl)
    {
        $wasSet = false;
        $this->url = $aUrl;
        $wasSet = true;
        return $wasSet;
    }

    public function setMurl($aMurl)
    {
        $wasSet = false;
        $this->murl = $aMurl;
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

    public function setStatus($aStatus)
    {
        $wasSet = false;
        $this->status = $aStatus;
        $wasSet = true;
        return $wasSet;
    }

    public function getDynCreativeId()
    {
        return $this->dynCreativeId;
    }

    public function getCampaignId()
    {
        return $this->campaignId;
    }

    public function getAdgroupId()
    {
        return $this->adgroupId;
    }

    public function getBindingType()
    {
        return $this->bindingType;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getMurl()
    {
        return $this->murl;
    }

    public function getPause()
    {
        return $this->pause;
    }

    public function getStatus()
    {
        return $this->status;
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
