<?php
namespace  jamesluo\smsbai\App;
use jamesluo\smsbai\Lib\CommonService;
class  AppService extends CommonService
{
    public function __construct($config) {
        parent::__construct ( 'sms', 'service', 'AppService',$config );
    }

    // ABSTRACT METHODS

    public function submitAppStatus ($submitAppStatusRequest){
    return $this->execute ( 'submitAppStatus', $submitAppStatusRequest );
}

}
