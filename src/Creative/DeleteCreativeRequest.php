<?php
namespace  jamesluo\smsbai\Creative;
class DeleteCreativeRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //DeleteCreativeRequest Attributes
    public $creativeIds;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setCreativeIds($acreativeIds) {
        $this->creativeIds = $acreativeIds;
    }

    public function addCreativeId($aCreativeId)
    {
        $wasAdded = false;
        $this->creativeIds[] = $aCreativeId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeCreativeId($aCreativeId)
    {
        $wasRemoved = false;
        unset($this->creativeIds[$this->indexOfCreativeId($aCreativeId)]);
        $this->creativeIds = array_values($this->creativeIds);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getCreativeIds()
    {
        $newCreativeIds = $this->creativeIds;
        return $newCreativeIds;
    }

    public function numberOfCreativeIds()
    {
        $number = count($this->creativeIds);
        return $number;
    }

    public function indexOfCreativeId($aCreativeId)
    {
        $rawAnswer = array_search($aCreativeId,$this->creativeIds);
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
