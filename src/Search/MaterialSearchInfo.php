<?php
namespace  jamesluo\smsbai\Search;
class MaterialSearchInfo
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //MaterialSearchInfo Attributes
    public $materialInfos;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setMaterialInfos($amaterialInfos) {
        $this->materialInfos = $amaterialInfos;
    }

    public function addMaterialInfo($aMaterialInfo)
    {
        $wasAdded = false;
        $this->materialInfos[] = $aMaterialInfo;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeMaterialInfo($aMaterialInfo)
    {
        $wasRemoved = false;
        unset($this->materialInfos[$this->indexOfMaterialInfo($aMaterialInfo)]);
        $this->materialInfos = array_values($this->materialInfos);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getMaterialInfos()
    {
        $newMaterialInfos = $this->materialInfos;
        return $newMaterialInfos;
    }

    public function numberOfMaterialInfos()
    {
        $number = count($this->materialInfos);
        return $number;
    }

    public function indexOfMaterialInfo($aMaterialInfo)
    {
        $rawAnswer = array_search($aMaterialInfo,$this->materialInfos);
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
