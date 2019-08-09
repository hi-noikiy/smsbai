<?php
namespace  jamesluo\smsbai\Report;
class AttributeType
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //AttributeType Attributes
    public $key;
    public $value;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setKey($aKey)
    {
        $wasSet = false;
        $this->key = $aKey;
        $wasSet = true;
        return $wasSet;
    }

    public function setValue($aValue)
    {
        $wasSet = false;
        $this->value = $aValue;
        $wasSet = true;
        return $wasSet;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
