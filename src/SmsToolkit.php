<?php

namespace jamesluo\smsbai;

use jamesluo\smsbai\Toolkit\GetOperationRecordRequest;
use jamesluo\smsbai\Toolkit\ToolkitService;

class  SmsToolkit
{
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

    public function get($startDate,$endDate,$optLevel = 3,$optTypes = array(),$optContents = array())
    {

        $getOperationRecordRequest = new GetOperationRecordRequest();
        $getOperationRecordRequest->setStartDate($startDate);
        $getOperationRecordRequest->setEndDate($endDate);
        $getOperationRecordRequest->setOptLevel($optLevel);
        if(!empty($optTypes)){
            $getOperationRecordRequest->setOptTypes($optTypes);
        }
        if(!empty($optContents)){
            $getOperationRecordRequest->setOptContents($optContents);
        }
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $tool = new  ToolkitService($config);
        $tool->setIsJson(true);
        $response = $tool->getOperationRecord($getOperationRecordRequest);
        $head = $tool->getJsonHeader();
        return ['head' => $head, 'data' => $response->data];
    }
}
