<?php
namespace  jamesluo\smsbai\Campaign;
class ScheduleType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //ScheduleType Attributes
    public $startHour;
    public $endHour;
    public $weekDay;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setStartHour($aStartHour)
    {
        $wasSet = false;
        $this->startHour = $aStartHour;
        $wasSet = true;
        return $wasSet;
    }

    public function setEndHour($aEndHour)
    {
        $wasSet = false;
        $this->endHour = $aEndHour;
        $wasSet = true;
        return $wasSet;
    }

    public function setWeekDay($aWeekDay)
    {
        $wasSet = false;
        $this->weekDay = $aWeekDay;
        $wasSet = true;
        return $wasSet;
    }

    public function getStartHour()
    {
        return $this->startHour;
    }

    public function getEndHour()
    {
        return $this->endHour;
    }

    public function getWeekDay()
    {
        return $this->weekDay;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
