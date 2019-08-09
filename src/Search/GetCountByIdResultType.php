<?php
namespace  jamesluo\smsbai\Search;
class GetCountByIdResultType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetCountByIdResultType Attributes
    public $countInfos;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setCountInfos($aCountInfos)
    {
        $wasSet = false;
        $this->countInfos = $aCountInfos;
        $wasSet = true;
        return $wasSet;
    }

    public function getCountInfos()
    {
        return $this->countInfos;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
