<?php
namespace  jamesluo\smsbai;
use jamesluo\smsbai\Creative\GetCreativeRequest;
use jamesluo\smsbai\Creative\CreativeService;
class  SmsCreative {
    protected $url = '';
    protected $username = '';
    protected $password = '';
    protected $token = '';
    protected $target = '';
    protected $accesstoken = '';

    public function __construct($config)
    {
        $this->url = isset($config['url']) ? $config['url'] : '';
        $this->username = isset($config['username']) ? $config['username'] : '';
        $this->password = isset($config['password']) ? $config['password'] : '';
        $this->token = isset($config['token']) ? $config['token'] : '';
        $this->target = isset($config['target']) ? $config['target'] : '';
        $this->accesstoken = isset($config['accesstoken']) ? $config['accesstoken'] : '';
    }
    function get($ids,$fields,$idtype=5,$getTemp=0){
        $request=new GetCreativeRequest();
        $request->setIds($ids);
        $request->setCreativeFields($fields);
        $request->setIdType($idtype);
        $request->setGetTemp($getTemp);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $creative = new  CreativeService($config);
        $creative->setIsJson(true);
        $response=$creative->getCreative($request);
        $head=$creative->getJsonHeader();
        return ['head'=>$head,'data'=>$response->data];
    }

}
