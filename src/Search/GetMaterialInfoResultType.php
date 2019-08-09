<?php
namespace  jamesluo\smsbai\Search;
class GetMaterialInfoResultType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetMaterialInfoResultType Attributes
    public $moreMaterial;
    public $materialSearchInfos;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setMoreMaterial($aMoreMaterial)
    {
        $wasSet = false;
        $this->moreMaterial = $aMoreMaterial;
        $wasSet = true;
        return $wasSet;
    }

    public function setMaterialSearchInfos($aMaterialSearchInfos)
    {
        $wasSet = false;
        $this->materialSearchInfos = $aMaterialSearchInfos;
        $wasSet = true;
        return $wasSet;
    }

    public function getMoreMaterial()
    {
        return $this->moreMaterial;
    }

    public function getMaterialSearchInfos()
    {
        return $this->materialSearchInfos;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
