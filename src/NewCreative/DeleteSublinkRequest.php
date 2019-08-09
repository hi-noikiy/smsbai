<?php
namespace  jamesluo\smsbai\NewCreative;
class DeleteSublinkRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //DeleteSublinkRequest Attributes
    public $sublinkIds;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setSublinkIds($asublinkIds) {
        $this->sublinkIds = $asublinkIds;
    }

    public function addSublinkId($aSublinkId)
    {
        $wasAdded = false;
        $this->sublinkIds[] = $aSublinkId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeSublinkId($aSublinkId)
    {
        $wasRemoved = false;
        unset($this->sublinkIds[$this->indexOfSublinkId($aSublinkId)]);
        $this->sublinkIds = array_values($this->sublinkIds);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getSublinkIds()
    {
        $newSublinkIds = $this->sublinkIds;
        return $newSublinkIds;
    }

    public function numberOfSublinkIds()
    {
        $number = count($this->sublinkIds);
        return $number;
    }

    public function indexOfSublinkId($aSublinkId)
    {
        $rawAnswer = array_search($aSublinkId,$this->sublinkIds);
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


