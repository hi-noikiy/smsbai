<?php
namespace  jamesluo\smsbai\Campaign;
use jamesluo\smsbai\Lib\CommonService;
class  CampaignService extends  CommonService{
    public function __construct($config=array()) {
        parent::__construct ( 'sms', 'service', 'CampaignService' ,$config);
    }
    // ABSTRACT METHODS

    public function getCampaign ($getCampaignRequest){
        return $this->execute ( 'getCampaign', $getCampaignRequest );
    }
    public function updateCampaign ($updateCampaignRequest){
        return $this->execute ( 'updateCampaign', $updateCampaignRequest );
    }
    public function deleteCampaign ($deleteCampaignRequest){
        return $this->execute ( 'deleteCampaign', $deleteCampaignRequest );
    }
    public function addCampaign ($addCampaignRequest){
        return $this->execute ( 'addCampaign', $addCampaignRequest );
    }
}
