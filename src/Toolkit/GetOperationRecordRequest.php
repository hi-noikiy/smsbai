<?php
namespace  jamesluo\smsbai\Toolkit;
class GetOperationRecordRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetOperationRecordRequest Attributes
    public $startDate;
    public $endDate;
    public $optTypes;
    public $optLevel;
    public $optContents;
    public $offset;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setStartDate($aStartDate)
    {
        $wasSet = false;
        $this->startDate = $aStartDate;
        $wasSet = true;
        return $wasSet;
    }

    public function setEndDate($aEndDate)
    {
        $wasSet = false;
        $this->endDate = $aEndDate;
        $wasSet = true;
        return $wasSet;
    }
    public function setOptTypes($aoptTypes) {
        $this->optTypes = $aoptTypes;
    }

    public function addOptType($aOptType)
    {
        $wasAdded = false;
        $this->optTypes[] = $aOptType;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeOptType($aOptType)
    {
        $wasRemoved = false;
        unset($this->optTypes[$this->indexOfOptType($aOptType)]);
        $this->optTypes = array_values($this->optTypes);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function setOptLevel($aOptLevel)
    {
        $wasSet = false;
        $this->optLevel = $aOptLevel;
        $wasSet = true;
        return $wasSet;
    }
    public function setOptContents($aoptContents) {
        $this->optContents = $aoptContents;
    }

    public function addOptContent($aOptContent)
    {
        $wasAdded = false;
        $this->optContents[] = $aOptContent;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeOptContent($aOptContent)
    {
        $wasRemoved = false;
        unset($this->optContents[$this->indexOfOptContent($aOptContent)]);
        $this->optContents = array_values($this->optContents);
        $wasRemoved = true;
        return $wasRemoved;
    }

    public function setOffset($aOffset)
    {
        $wasSet = false;
        $this->offset = $aOffset;
        $wasSet = true;
        return $wasSet;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }


    public function getOptTypes()
    {
        $newOptTypes = $this->optTypes;
        return $newOptTypes;
    }

    public function numberOfOptTypes()
    {
        $number = count($this->optTypes);
        return $number;
    }

    public function indexOfOptType($aOptType)
    {
        $rawAnswer = array_search($aOptType,$this->optTypes);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function getOptLevel()
    {
        return $this->optLevel;
    }


    public function getOptContents()
    {
        $newOptContents = $this->optContents;
        return $newOptContents;
    }

    public function numberOfOptContents()
    {
        $number = count($this->optContents);
        return $number;
    }

    public function indexOfOptContent($aOptContent)
    {
        $rawAnswer = array_search($aOptContent,$this->optContents);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
