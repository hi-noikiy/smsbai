<?php
namespace jamesluo\smsbai\NewCreative;
use  jamesluo\smsbai\Lib\CommonService;
class  NewCreativeService extends  CommonService{
    public function __construct($config) {
        parent::__construct ( 'sms', 'service', 'NewCreativeService',$config );
    }

    // ABSTRACT METHODS

    public function addBridge ($addBridgeRequest){
        return $this->execute ( 'addBridge', $addBridgeRequest );
    }
    public function addSublink ($addSublinkRequest){
        return $this->execute ( 'addSublink', $addSublinkRequest );
    }
    public function updateSublink ($updateSublinkRequest){
        return $this->execute ( 'updateSublink', $updateSublinkRequest );
    }
    public function deleteSublink ($deleteSublinkRequest){
        return $this->execute ( 'deleteSublink', $deleteSublinkRequest );
    }
    public function addPhone ($addPhoneRequest){
        return $this->execute ( 'addPhone', $addPhoneRequest );
    }
    public function updatePhone ($updatePhoneRequest){
        return $this->execute ( 'updatePhone', $updatePhoneRequest );
    }
    public function updateBridge ($updateBridgeRequest){
        return $this->execute ( 'updateBridge', $updateBridgeRequest );
    }
    public function addEcall ($addEcallRequest){
        return $this->execute ( 'addEcall', $addEcallRequest );
    }
    public function updateEcall ($updateEcallRequest){
        return $this->execute ( 'updateEcall', $updateEcallRequest );
    }
    public function getSublink ($getSublinkRequest){
        return $this->execute ( 'getSublink', $getSublinkRequest );
    }
    public function getBridge ($getBridgeRequest){
        return $this->execute ( 'getBridge', $getBridgeRequest );
    }
    public function getPhone ($getPhoneRequest){
        return $this->execute ( 'getPhone', $getPhoneRequest );
    }
    public function getEcall ($getEcallRequest){
        return $this->execute ( 'getEcall', $getEcallRequest );
    }
    public function getEcallGroup ($getEcallGroupRequest){
        return $this->execute ( 'getEcallGroup', $getEcallGroupRequest );
    }
}
