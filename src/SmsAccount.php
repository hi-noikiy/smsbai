<?php
namespace jamesluo\smsbai;
use jamesluo\smsbai\Account\AccountService;
use jamesluo\smsbai\Account\GetAccountInfoRequest;
class SmsAccount{
    protected  $url = '';
    protected  $username='';
    protected  $password ='';
    protected  $token ='';
    protected  $target='';
    protected  $accesstoken = '';
    public  function __construct($config)
    {
       $this->url = isset($config['url'])?$config['url']:'';
       $this->username = isset($config['username'])?$config['username']:'';
       $this->password = isset($config['password'])?$config['password']:'';
       $this->token = isset($config['token'])?$config['token']:'';
       $this->target= isset($config['target'])?$config['target']:'';
       $this->accesstoken = isset($config['accesstoken'])?$config['accesstoken']:'';

    }
    public  function get($fields){
        $getAccountInfoRequest=new GetAccountInfoRequest();
        $getAccountInfoRequest->setAccountFields($fields);
        $config = array('url'=>$this->url,
            'username'=>$this->username,
            'password'=>$this->password,
            'token'=>$this->token,
            'target'=>$this->target,
            'accesstoken'=>$this->accesstoken
        );
        $account = new  AccountService($config);
        $account->setIsJson(true);
        $response=$account->getAccountInfo($getAccountInfoRequest);
        $head=$account->getJsonHeader();
        return ['head'=>$head,'data'=>$response->data];
    }
    public  function update($fields){
        $updateAccountInfoRequest=new UpdateAccountInfoRequest();
        $updateAccountInfoRequest->setAccountInfo($fields);
        $response=$this->updateAccountInfo($updateAccountInfoRequest);
        $head=$this->getJsonHeader();
        return ['head'=>$head,'data'=>$response->data];
    }

}
