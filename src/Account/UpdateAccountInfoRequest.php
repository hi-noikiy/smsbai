<?php
namespace  jamesluo\smsbai\Account;
class UpdateAccountInfoRequest
{

    //------------------------
    // MEMBER VARIABLES
    //------------------------

    //UpdateAccountInfoRequest Attributes
    public $accountInfo;

    //------------------------
    // CONSTRUCTOR
    //------------------------

    public function __construct()
    {}

    //------------------------
    // INTERFACE
    //------------------------

    public function setAccountInfo($aAccountInfo)
    {
        $wasSet = false;
        $this->accountInfo = $aAccountInfo;
        $wasSet = true;
        return $wasSet;
    }

    public function getAccountInfo()
    {
        return $this->accountInfo;
    }

    public function equals($compareTo)
    {
        return $this == $compareTo;
    }

    public function delete()
    {}

}
