<?php
namespace  jamesluo\smsbai\App;
class SubmitAppStatusRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //SubmitAppStatusRequest Attributes
    public $event;
    public $app;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setEvent($aEvent)
    {
        $wasSet = false;
        $this->event = $aEvent;
        $wasSet = true;
        return $wasSet;
    }

    public function setApp($aApp)
    {
        $wasSet = false;
        $this->app = $aApp;
        $wasSet = true;
        return $wasSet;
    }

    public function getEvent()
    {
        return $this->event;
    }

    public function getApp()
    {
        return $this->app;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
