<?php
namespace  jamesluo\smsbai\Account;
class GetAccountInfoRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //GetAccountInfoRequest Attributes
    public $accountFields;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------
    public function setAccountFields($aaccountFields) {
        $this->accountFields = $aaccountFields;
    }

    public function addAccountField($aAccountField)
    {
        $wasAdded = false;
        $this->accountFields[] = $aAccountField;
        $wasAdded = true;
        return $wasAdded;
    }

    public function removeAccountField($aAccountField)
    {
        $wasRemoved = false;
        unset($this->accountFields[$this->indexOfAccountField($aAccountField)]);
        $this->accountFields = array_values($this->accountFields);
        $wasRemoved = true;
        return $wasRemoved;
    }


    public function getAccountFields()
    {
        $newAccountFields = $this->accountFields;
        return $newAccountFields;
    }

    public function numberOfAccountFields()
    {
        $number = count($this->accountFields);
        return $number;
    }

    public function indexOfAccountField($aAccountField)
    {
        $rawAnswer = array_search($aAccountField,$this->accountFields);
        $index = $rawAnswer == null && $rawAnswer !== 0 ? -1 : $rawAnswer;
        return $index;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
