<?php
namespace jamesluo\smsbai\Kr;
class RecBidType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //RecBidType Attributes
    public $bid;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setBid($aBid)
    {
        $wasSet = false;
        $this->bid = $aBid;
        $wasSet = true;
        return $wasSet;
    }

    public function getBid()
    {
        return $this->bid;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
