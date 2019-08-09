<?php
namespace  jamesluo\smsbai\Creative;
class OfflineReason
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //OfflineReason Attributes
    public $mainReason;
    public $detailReason;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setMainReason($aMainReason)
    {
        $wasSet = false;
        $this->mainReason = $aMainReason;
        $wasSet = true;
        return $wasSet;
    }

    public function setDetailReason($aDetailReason)
    {
        $wasSet = false;
        $this->detailReason = $aDetailReason;
        $wasSet = true;
        return $wasSet;
    }

    public function getMainReason()
    {
        return $this->mainReason;
    }

    public function getDetailReason()
    {
        return $this->detailReason;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
