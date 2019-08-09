<?php
namespace  jamesluo\smsbai\Toolkit;
use jamesluo\smsbai\Lib\CommonService;
class ToolkitService extends CommonService
{    public function __construct($config) {
    parent::__construct ( 'sms', 'service', 'ToolkitService' ,$config);
}

    // ABSTRACT METHODS

    public function getOperationRecord ($getOperationRecordRequest){
        return $this->execute ( 'getOperationRecord', $getOperationRecordRequest );
    }

}
