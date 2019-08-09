<?php
namespace  jamesluo\smsbai\NewCreative;
class EcallGroupType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //EcallGroupType Attributes
    public $ecallGroupId;
    public $ecallGroupName;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setEcallGroupId($aEcallGroupId)
    {
        $wasSet = false;
        $this->ecallGroupId = $aEcallGroupId;
        $wasSet = true;
        return $wasSet;
    }

    public function setEcallGroupName($aEcallGroupName)
    {
        $wasSet = false;
        $this->ecallGroupName = $aEcallGroupName;
        $wasSet = true;
        return $wasSet;
    }

    public function getEcallGroupId()
    {
        return $this->ecallGroupId;
    }

    public function getEcallGroupName()
    {
        return $this->ecallGroupName;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
