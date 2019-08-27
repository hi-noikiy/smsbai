<?php

namespace jamesluo\smsbai;

use jamesluo\smsbai\BulkJob\GetAllChangedObjectsRequest;
use  jamesluo\smsbai\BulkJob\GetAllObjectsRequest;
use jamesluo\smsbai\BulkJob\BulkJobService;
use jamesluo\smsbai\BulkJob\GetFileStatusRequest;
use jamesluo\smsbai\BulkJob\GetFilePathRequest;
use jamesluo\smsbai\BulkJob\GetUserCacheRequest;
use jamesluo\smsbai\BulkJob\GetChangedIdRequest;

class  SmsBulkJob
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

    function getAllObjects($acampaignIds = null, $fields = array("all"))
    {
        $request = new GetAllObjectsRequest();
        $request->setAccountFields($fields);
        $request->setCampaignIds($acampaignIds);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $bj = new  BulkJobService($config);
        $response = $bj->getAllObjects($request);
        $head = $bj->getJsonHeader();
        return ['head' => $head,  'data' => isset($response->data)?$response->data:[]];
    }

    function GetAllChangedObjects($campaignIds = array(),$aStartTime = "", $aField = array("all"), $camField = array("all"),$agField=array("all"),$akField=array("all") )
    {
        $request = new  GetAllChangedObjectsRequest();
        $request->setCampaignIds($campaignIds);
        if(!empty($agField)){
            $request->setAccountFields($aField);
        }
        if(!empty($camField)){
            $request->setCampaignFields($camField);
        }
        if(!empty($agField)){
            $request->setAdgroupFields($agField);
        }
        if(!empty($akField)){
            $request->setKeywordFields($akField);
        }
        $request->setStartTime($aStartTime);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $bj = new  BulkJobService($config);
        $response = $bj->getAllChangedObjects($request);
        $head = $bj->getJsonHeader();
        return ['head' => $head, 'data' => isset($response->data)?$response->data:[]];
    }

    function getUserCache($fileId)
    {
        $request = new GetUserCacheRequest();
        $request->setFileId($fileId);        //找一个存在的
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $bj = new  BulkJobService($config);
        $response = $bj->getUserCache($request);
        $head = $bj->getJsonHeader();
        return ['head' => $head,  'data' => isset($response->data)?$response->data:[]];
    }

    function getFilePath($aFileId)
    {
        $request = new GetFilePathRequest();
        $request->setFileId($aFileId);        //找一个存在的
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $bj = new  BulkJobService($config);
        $response = $bj->getFilePath($request);
        $head = $bj->getJsonHeader();
        return ['head' => $head,  'data' => isset($response->data)?$response->data:[]];
    }

    function getFileStatus($aFileId)
    {
        $request = new GetFileStatusRequest();
        $request->setFileId($aFileId);        //找一个存在的
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $bj = new  BulkJobService($config);
        $response = $bj->getFileStatus($request);
        $head = $bj->getJsonHeader();
        return ['head' => $head, 'data' => isset($response->data)?$response->data:[]];
    }

    function cancelDownload($aFileId)
    {
        $request = new CancelDownloadRequest();
        $request->setFileId($aFileId);        //找一个存在的
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $bj = new  BulkJobService($config);
        $response = $bj->cancelDownload($request);
        $head = $bj->getJsonHeader();
        return ['head' => $head,  'data' => isset($response->data)?$response->data:[]];
    }

    function getChangedItemId($startTime = "", $ids = array(), $types = 3, $itemType = 5)
    {
        $request = new GetChangedItemIdRequest();
        $request->setIds($ids);
        $request->setType($types);
        $request->setItemType($itemType);
        $request->setStartTime($startTime);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $bj = new  BulkJobService($config);
        $response = $bj->getChangedItemId($request);
        $head = $bj->getJsonHeader();
        return ['head' => $head,  'data' => isset($response->data)?$response->data:[]];
    }

    function getChangedId($startTime)
    {
        $request = new GetChangedIdRequest();
        $request->setCampaignLevel(true);
        $request->setAdgroupLevel(true);
        $request->setKeywordLevel(true);
        $request->setStartTime($startTime);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $bj = new  BulkJobService($config);
        $response = $bj->getChangedId($request);
        $head = $bj->getJsonHeader();
        return ['head' => $head, 'data' => isset($response->data)?$response->data:[]];
    }

    function getChangedScale($startTime, $campaignIds = array())
    {
        $request = new GetChangedScaleRequest();
        $request->setCampaignIds($campaignIds);
        $request->setChangedCampaignScale(true);
        $request->setChangedAdgroupScale(true);
        $request->setChangedKeywordScale(true);
        $request->setStartTime($startTime);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $bj = new  BulkJobService($config);
        $bj->getChangedScale($request);
        $head = $bj->getJsonHeader();
        return ['head' => $head];
    }

}
