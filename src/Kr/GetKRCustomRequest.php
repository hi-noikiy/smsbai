<?php
namespace jamesluo\smsbai\Kr;
class GetKRCustomRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetKRCustomRequest Attributes
    public $id;
    public $idType;
    public $seedFilter;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setId($aId)
    {
        $wasSet = false;
        $this->id = $aId;
        $wasSet = true;
        return $wasSet;
    }

    public function setIdType($aIdType)
    {
        $wasSet = false;
        $this->idType = $aIdType;
        $wasSet = true;
        return $wasSet;
    }

    public function setSeedFilter($aSeedFilter)
    {
        $wasSet = false;
        $this->seedFilter = $aSeedFilter;
        $wasSet = true;
        return $wasSet;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getIdType()
    {
        return $this->idType;
    }

    public function getSeedFilter()
    {
        return $this->seedFilter;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
