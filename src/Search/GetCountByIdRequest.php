<?php
namespace  jamesluo\smsbai\Search;
class GetCountByIdRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetCountByIdRequest Attributes
    public $idType;
    public $countType;
    public $ids;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setIdType($aIdType)
    {
        $wasSet = false;
        $this->idType = $aIdType;
        $wasSet = true;
        return $wasSet;
    }

    public function setCountType($aCountType)
    {
        $wasSet = false;
        $this->countType = $aCountType;
        $wasSet = true;
        return $wasSet;
    }

    public function setIds($aIds)
    {
        $wasSet = false;
        $this->ids = $aIds;
        $wasSet = true;
        return $wasSet;
    }

    public function getIdType()
    {
        return $this->idType;
    }

    public function getCountType()
    {
        return $this->countType;
    }

    public function getIds()
    {
        return $this->ids;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
