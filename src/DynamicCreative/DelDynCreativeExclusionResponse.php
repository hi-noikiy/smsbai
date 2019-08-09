<?php
namespace jamesluo\smsbai\DynamicCreative;
class DelDynCreativeExclusionResponse
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //DelDynCreativeExclusionResponse Attributes
    public $result;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setResult($aResult)
    {
        $wasSet = false;
        $this->result = $aResult;
        $wasSet = true;
        return $wasSet;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
