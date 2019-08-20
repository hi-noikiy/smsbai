<?php
namespace  jamesluo\smsbai;
use jamesluo\smsbai\Keyword\GetWordRequest;
use jamesluo\smsbai\Keyword\KeywordService;

class SmsKeyword {
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
        $request=new GetWordRequest();
        $request->setIds($ids);
        $request->setWordFields($fields);
        $request->setIdType($idtype);
        $request->setGetTemp($getTemp);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $k = new  KeywordService($config);
        $k->setIsJson(true);
        $response=$k->getWord($request);
        $head=$k->getJsonHeader();
        return ['head'=>$head,'data'=>$response->data];
    }
}
