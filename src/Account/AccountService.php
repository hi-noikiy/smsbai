<?php
namespace  jamesluo\smsbai\Account;
use  jamesluo\smsbai\Lib\CommonService;
class AccountService extends  CommonService{
    public function __construct($config=null) {
        parent::__construct ( 'sms', 'service', 'AccountService' ,$config);
    }

    public function getAccountInfo ($getAccountInfoRequest){
        return $this->execute ( 'getAccountInfo', $getAccountInfoRequest );
    }
    public function updateAccountInfo ($updateAccountInfoRequest){
        return $this->execute ( 'updateAccountInfo', $updateAccountInfoRequest );
    }

}
