<?php
namespace jamesluo\smsbai\DynamicCreative;
class DeleteDynCreativeRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //DeleteDynCreativeRequest Attributes
    public $dynCreativeIds;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setDynCreativeIds($adynCreativeIds) {
        $this->dynCreativeIds = $adynCreativeIds;
    }

    public function addDynCreativeId($aDynCreativeId)
    {
        $wasAdded = false;
        $this->dynCreativeIds[] = $aDynCreativeId;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeDynCreativeId($aDynCreativeId)
    {
        $wasRemoved = false;
        unset($this->dynCreativeIds[$this->indexOfDynCreativeId($aDynCreativeId)]);
        $this->dynCreativeIds = array_values($this->dynCreativeIds);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getDynCreativeIds()
    {
        $newDynCreativeIds = $this->dynCreativeIds;
        return $newDynCreativeIds;
    }

    public function numberOfDynCreativeIds()
    {
        $number = count($this->dynCreativeIds);
        return $number;
    }

    public function indexOfDynCreativeId($aDynCreativeId)
    {
        $rawAnswer = array_search($aDynCreativeId,$this->dynCreativeIds);
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
