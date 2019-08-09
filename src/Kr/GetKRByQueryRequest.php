<?php
namespace  jamesluo\smsbai\Kr;
class GetKRByQueryRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetKRByQueryRequest Attributes
    public $queryType;
    public $seedFilter;
    public $query;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setQueryType($aQueryType)
    {
        $wasSet = false;
        $this->queryType = $aQueryType;
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

    public function setQuery($aQuery)
    {
        $wasSet = false;
        $this->query = $aQuery;
        $wasSet = true;
        return $wasSet;
    }

    public function getQueryType()
    {
        return $this->queryType;
    }

    public function getSeedFilter()
    {
        return $this->seedFilter;
    }

    public function getQuery()
    {
        return $this->query;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
