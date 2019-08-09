<?php

namespace jamesluo\smsbai;

use jamesluo\smsbai\Campaign\AddCampaignRequest;
use jamesluo\smsbai\Campaign\CampaignType;
use jamesluo\smsbai\Campaign\GetCampaignRequest;
use jamesluo\smsbai\Campaign\CampaignService;

class SmsCampaign
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

    public function add($data)
    {
        $datas = array();
        foreach ($data as $k => $v) {
            $datatype = new  CampaignType();
            isset($v['campaignName']) ? $datatype->setCampaignName($v['campaignName']) : '';
            isset($v['budget']) ? $datatype->setBudget($v['budget']) : '';
            isset($v['regionTarget']) ? $datatype->setRegionTarget($v['regionTarget']) : '';
            isset($v['negativeWords']) ? $datatype->setNegativeWords($v['negativeWords']) : '';
            isset($v['exactNegativeWords']) ? $datatype->setExactNegativeWords($v['exactNegativeWords']) : '';
            isset($v['schedule']) ? $datatype->setSchedule($v['schedule']) : '';
            isset($v['budgetOfflineTime']) ? $datatype->setBudgetOfflineTime($v['budgetOfflineTime']) : '';
            isset($v['showProb']) ? $datatype->setShowProb($v['showProb']) : '';
            isset($v['pause']) ? $datatype->setPause($v['pause']) : '';
            isset($v['status']) ? $datatype->setStatus($v['status']) : '';
            isset($v['isDynamicCreative']) ? $datatype->setIsDynamicCreative($v['isDynamicCreative']) : '';
            isset($v['internalType']) ? $datatype->setInternalType($v['internalType']) : '';
            isset($v['campaignType']) ? $datatype->setCampaignType($v['campaignType']) : '';
            isset($v['device']) ? $datatype->setDevice($v['device']) : '';
            isset($v['priceRatio']) ? $datatype->setPriceRatio($v['priceRatio']) : '';
            isset($v['excludeIp']) ? $datatype->setExcludeIp($v['excludeIp']) : '';
            isset($v['dynCreativeExclusion']) ? $datatype->setDynCreativeExclusion($v['dynCreativeExclusion']) : '';
            isset($v['isDynamicTagSublink']) ? $datatype->setIsDynamicTagSublink($v['isDynamicTagSublink']) : '';
            isset($v['isDynamicTitle']) ? $datatype->setIsDynamicTitle($v['isDynamicTitle']) : '';
            isset($v['isDynamicHotRedirect']) ? $datatype->isDynamicHotRedirect($v['isDynamicHotRedirect']) : '';
            isset($v['operator']) ? $datatype->setOperator($v['operator']) : '';
            isset($v['rmktStatus']) ? $datatype->setRmktStatus($v['rmktStatus']) : '';
            isset($v['rmktPriceRatio']) ? $datatype->setRmktPriceRatio($v['rmktPriceRatio']) : '';
            isset($v['offlineReasons']) ? $datatype->setOfflineReasons($v['offlineReasons']) : '';
            isset($v['adType']) ? $datatype->setAdType($v['adType']) : '';
            array_push($datas, $datatype);
        }
        $request = new AddCampaignRequest();
        $request->setCampaignTypes($datas);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $campaign = new  CampaignService($config);
        $campaign->setIsJson(true);

        $response = $campaign->addCampaign($request);
        $head = $campaign->getJsonHeader();
        return ['head' => $head, $response->data];
    }

    public function get($fields, $ids = array())
    {
        $request = new GetCampaignRequest();
        if (empty($ids)) {
            $request->setCampaignIds(null);
        } else {
            $request->setCampaignIds($ids);
        }
        $request->setCampaignFields($fields);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $campaign = new  CampaignService($config);
        $campaign->setIsJson(true);
        $response = $campaign->getCampaign($request);
        $head = $campaign->getJsonHeader();
        return ['head' => $head, 'data' => $response->data];
    }

    public function update($data)
    {
        $datas = array();
        foreach ($data as $k => $v) {
            $datatype = new  CampaignType();
            isset($v['campaignId']) ? $datatype->setCampaignId($v['campaignId']) : '';
            isset($v['campaignName']) ? $datatype->setCampaignName($v['campaignName']) : '';
            isset($v['budget']) ? $datatype->setBudget($v['budget']) : '';
            isset($v['regionTarget']) ? $datatype->setRegionTarget($v['regionTarget']) : '';
            isset($v['negativeWords']) ? $datatype->setNegativeWords($v['negativeWords']) : '';
            isset($v['exactNegativeWords']) ? $datatype->setExactNegativeWords($v['exactNegativeWords']) : '';
            isset($v['schedule']) ? $datatype->setSchedule($v['schedule']) : '';
            isset($v['budgetOfflineTime']) ? $datatype->setBudgetOfflineTime($v['budgetOfflineTime']) : '';
            isset($v['showProb']) ? $datatype->setShowProb($v['showProb']) : '';
            isset($v['pause']) ? $datatype->setPause($v['pause']) : '';
            isset($v['status']) ? $datatype->setStatus($v['status']) : '';
            isset($v['isDynamicCreative']) ? $datatype->setIsDynamicCreative($v['isDynamicCreative']) : '';
            isset($v['internalType']) ? $datatype->setInternalType($v['internalType']) : '';
            isset($v['campaignType']) ? $datatype->setCampaignType($v['campaignType']) : '';
            isset($v['device']) ? $datatype->setDevice($v['device']) : '';
            isset($v['priceRatio']) ? $datatype->setPriceRatio($v['priceRatio']) : '';
            isset($v['excludeIp']) ? $datatype->setExcludeIp($v['excludeIp']) : '';
            isset($v['dynCreativeExclusion']) ? $datatype->setDynCreativeExclusion($v['dynCreativeExclusion']) : '';
            isset($v['isDynamicTagSublink']) ? $datatype->setIsDynamicTagSublink($v['isDynamicTagSublink']) : '';
            isset($v['isDynamicTitle']) ? $datatype->setIsDynamicTitle($v['isDynamicTitle']) : '';
            isset($v['isDynamicHotRedirect']) ? $datatype->isDynamicHotRedirect($v['isDynamicHotRedirect']) : '';
            isset($v['operator']) ? $datatype->setOperator($v['operator']) : '';
            isset($v['rmktStatus']) ? $datatype->setRmktStatus($v['rmktStatus']) : '';
            isset($v['rmktPriceRatio']) ? $datatype->setRmktPriceRatio($v['rmktPriceRatio']) : '';
            isset($v['offlineReasons']) ? $datatype->setOfflineReasons($v['offlineReasons']) : '';
            isset($v['adType']) ? $datatype->setAdType($v['adType']) : '';
            array_push($datas, $datatype);
        }
        $request = new UpdateCampaignRequest();
        $request->setCampaignTypes($datas);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $campaign = new  CampaignService($config);
        $campaign->setIsJson(true);
        $response = $campaign->updateCampaign($request);
        $head = $campaign->getJsonHeader();
        return ['head' => $head, 'data' => $response];
    }

    public function delete($data)
    {
        $request = new DeleteCampaignRequest();
        $datas = array();
        foreach ($data as $k => $v) {
            $datatype = new  CampaignType();
            isset($v['campaignId']) ? $datatype->setCampaignId($v['campaignId']) : '';
            array_push($datas, $datatype);
        }
        $request->setCampaignIds($datas);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $campaign = new  CampaignService($config);
        $campaign->setIsJson(true);
        $response = $campaign->deleteCampaign($request);
        $head = $campaign->getJsonHeader();
        return ['head' => $head, 'data' => $response->data];
    }
}
