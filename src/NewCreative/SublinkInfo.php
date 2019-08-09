<?php
namespace  jamesluo\smsbai\NewCreative;
class SublinkInfo
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //SublinkInfo Attributes
    public $description;
    public $destinationUrl;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setDescription($aDescription)
    {
        $wasSet = false;
        $this->description = $aDescription;
        $wasSet = true;
        return $wasSet;
    }

    public function setDestinationUrl($aDestinationUrl)
    {
        $wasSet = false;
        $this->destinationUrl = $aDestinationUrl;
        $wasSet = true;
        return $wasSet;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDestinationUrl()
    {
        return $this->destinationUrl;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
