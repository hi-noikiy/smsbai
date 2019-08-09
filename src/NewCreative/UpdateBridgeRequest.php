<?php
namespace  jamesluo\smsbai\NewCreative;
class UpdateBridgeRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //UpdateBridgeRequest Attributes
    public $bridgeTypes;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setBridgeTypes($abridgeTypes) {
        $this->bridgeTypes = $abridgeTypes;
    }

    public function addBridgeType($aBridgeType)
    {
        $wasAdded = false;
        $this->bridgeTypes[] = $aBridgeType;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeBridgeType($aBridgeType)
    {
        $wasRemoved = false;
        unset($this->bridgeTypes[$this->indexOfBridgeType($aBridgeType)]);
        $this->bridgeTypes = array_values($this->bridgeTypes);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getBridgeTypes()
    {
        $newBridgeTypes = $this->bridgeTypes;
        return $newBridgeTypes;
    }

    public function numberOfBridgeTypes()
    {
        $number = count($this->bridgeTypes);
        return $number;
    }

    public function indexOfBridgeType($aBridgeType)
    {
        $rawAnswer = array_search($aBridgeType,$this->bridgeTypes);
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
