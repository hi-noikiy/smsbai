<?php
namespace  jamesluo\smsbai\Toolkit;
class OptlogType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //OptlogType Attributes
    public $userId;
    public $planId;
    public $unitId;
    public $optTime;
    public $optContent;
    public $optType;
    public $optLevel;
    public $oldValue;
    public $newValue;
    public $optObj;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setUserId($aUserId)
    {
        $wasSet = false;
        $this->userId = $aUserId;
        $wasSet = true;
        return $wasSet;
    }

    public function setPlanId($aPlanId)
    {
        $wasSet = false;
        $this->planId = $aPlanId;
        $wasSet = true;
        return $wasSet;
    }

    public function setUnitId($aUnitId)
    {
        $wasSet = false;
        $this->unitId = $aUnitId;
        $wasSet = true;
        return $wasSet;
    }

    public function setOptTime($aOptTime)
    {
        $wasSet = false;
        $this->optTime = $aOptTime;
        $wasSet = true;
        return $wasSet;
    }

    public function setOptContent($aOptContent)
    {
        $wasSet = false;
        $this->optContent = $aOptContent;
        $wasSet = true;
        return $wasSet;
    }

    public function setOptType($aOptType)
    {
        $wasSet = false;
        $this->optType = $aOptType;
        $wasSet = true;
        return $wasSet;
    }

    public function setOptLevel($aOptLevel)
    {
        $wasSet = false;
        $this->optLevel = $aOptLevel;
        $wasSet = true;
        return $wasSet;
    }

    public function setOldValue($aOldValue)
    {
        $wasSet = false;
        $this->oldValue = $aOldValue;
        $wasSet = true;
        return $wasSet;
    }

    public function setNewValue($aNewValue)
    {
        $wasSet = false;
        $this->newValue = $aNewValue;
        $wasSet = true;
        return $wasSet;
    }

    public function setOptObj($aOptObj)
    {
        $wasSet = false;
        $this->optObj = $aOptObj;
        $wasSet = true;
        return $wasSet;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getPlanId()
    {
        return $this->planId;
    }

    public function getUnitId()
    {
        return $this->unitId;
    }

    public function getOptTime()
    {
        return $this->optTime;
    }

    public function getOptContent()
    {
        return $this->optContent;
    }

    public function getOptType()
    {
        return $this->optType;
    }

    public function getOptLevel()
    {
        return $this->optLevel;
    }

    public function getOldValue()
    {
        return $this->oldValue;
    }

    public function getNewValue()
    {
        return $this->newValue;
    }

    public function getOptObj()
    {
        return $this->optObj;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
