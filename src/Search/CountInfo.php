<?php
namespace  jamesluo\smsbai\Search;
class CountInfo
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //CountInfo Attributes
    public $id;
    public $count;

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

    public function setCount($aCount)
    {
        $wasSet = false;
        $this->count = $aCount;
        $wasSet = true;
        return $wasSet;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
