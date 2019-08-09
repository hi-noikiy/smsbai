<?php
namespace  jamesluo\smsbai\Creative;
use  jamesluo\smsbai\Lib\CommonService;
class CreativeService extends CommonService
{    public function __construct($config) {
    parent::__construct ( 'sms', 'service', 'CreativeService',$config );
}

    // ABSTRACT METHODS

    public function updateCreative ($updateCreativeRequest){
        return $this->execute ( 'updateCreative', $updateCreativeRequest );
    }
    public function deleteCreative ($deleteCreativeRequest){
        return $this->execute ( 'deleteCreative', $deleteCreativeRequest );
    }
    public function addCreative ($addCreativeRequest){
        return $this->execute ( 'addCreative', $addCreativeRequest );
    }
    public function getCreative ($getCreativeRequest){
        return $this->execute ( 'getCreative', $getCreativeRequest );
    }

}
