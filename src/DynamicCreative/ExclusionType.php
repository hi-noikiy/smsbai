<?php
namespace jamesluo\smsbai\DynamicCreative;
class ExclusionType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //ExclusionType Attributes
    public $exclusionId;
    public $exclusionContent;
    public $exclusionType;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setExclusionId($aExclusionId)
    {
        $wasSet = false;
        $this->exclusionId = $aExclusionId;
        $wasSet = true;
        return $wasSet;
    }

    public function setExclusionContent($aExclusionContent)
    {
        $wasSet = false;
        $this->exclusionContent = $aExclusionContent;
        $wasSet = true;
        return $wasSet;
    }

    public function setExclusionType($aExclusionType)
    {
        $wasSet = false;
        $this->exclusionType = $aExclusionType;
        $wasSet = true;
        return $wasSet;
    }

    public function getExclusionId()
    {
        return $this->exclusionId;
    }

    public function getExclusionContent()
    {
        return $this->exclusionContent;
    }

    public function getExclusionType()
    {
        return $this->exclusionType;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
