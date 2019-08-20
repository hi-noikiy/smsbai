<?php
/**
 * Created by PhpStorm.
 * User: 11005884
 * Date: 2019/8/16
 * Time: 9:30
 */
namespace  jamesluo\smsbai;
use jamesluo\smsbai\DynamicCreative\GetDynCreativeRequest;
use jamesluo\smsbai\DynamicCreative\DynamicCreativeService;
class  SmsDynamicCreative {
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
    function get($ids,$fields,$idtype=3){
        $request=new GetDynCreativeRequest();
//        $fields=array("dynCreativeId", "campaignId", "adgroupId", "bindingType", "bindingType","url","murl");
        $request->setIds($ids);
        $request->setDynCreativeFields($fields);
        $request->setIdType($idtype);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $dynCreative = new  DynamicCreativeService($config);
        $dynCreative->setIsJson(true);
        $response=$dynCreative->getDynCreative($request);
        $head=$dynCreative->getJsonHeader();
        return ['head'=>$head,'data'=>$response->data];
    }

}
