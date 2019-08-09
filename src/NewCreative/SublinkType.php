<?php
namespace  jamesluo\smsbai\NewCreative;
class SublinkType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //SublinkType Attributes
    public $sublinkId;
    public $sublinkInfos;
    public $adgroupId;
    public $pause;
    public $status;
    public $device;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setSublinkId($aSublinkId)
    {
        $wasSet = false;
        $this->sublinkId = $aSublinkId;
        $wasSet = true;
        return $wasSet;
    }
    public function setSublinkInfos($asublinkInfos) {
        $this->sublinkInfos = $asublinkInfos;
    }

    public function addSublinkInfo($aSublinkInfo)
    {
        $wasAdded = false;
        $this->sublinkInfos[] = $aSublinkInfo;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeSublinkInfo($aSublinkInfo)
    {
        $wasRemoved = false;
        unset($this->sublinkInfos[$this->indexOfSublinkInfo($aSublinkInfo)]);
        $this->sublinkInfos = array_values($this->sublinkInfos);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function setAdgroupId($aAdgroupId)
    {
        $wasSet = false;
        $this->adgroupId = $aAdgroupId;
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

    public function setDevice($aDevice)
    {
        $wasSet = false;
        $this->device = $aDevice;
        $wasSet = true;
        return $wasSet;
    }

    public function getSublinkId()
    {
        return $this->sublinkId;
    }


    public function getSublinkInfos()
    {
        $newSublinkInfos = $this->sublinkInfos;
        return $newSublinkInfos;
    }

    public function numberOfSublinkInfos()
    {
        $number = count($this->sublinkInfos);
        return $number;
    }

    public function indexOfSublinkInfo($aSublinkInfo)
    {
        $rawAnswer = array_search($aSublinkInfo,$this->sublinkInfos);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function getAdgroupId()
    {
        return $this->adgroupId;
    }

    public function getPause()
    {
        return $this->pause;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getDevice()
    {
        return $this->device;
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
