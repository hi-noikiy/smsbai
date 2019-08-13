<?php
namespace  jamesluo\smsbai;
use jamesluo\smsbai\Adgroup\AdgroupService;
use jamesluo\smsbai\Adgroup\GetAdgroupRequest;

class  SmsAdgroup{
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

    public function get($fields, $ids,$IdType=3)
    {
        $request = new GetAdgroupRequest();
        $request->setIds($ids);
        $request->setAdgroupFields($fields);
        $request->setIdType($IdType);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $adgroupservice = new  AdgroupService($config);
        $adgroupservice->setIsJson(true);
        $response = $adgroupservice->getAdgroup($request);
        $head = $adgroupservice->getJsonHeader();
        return ['head' => $head, 'data' => $response->data];
    }
}
