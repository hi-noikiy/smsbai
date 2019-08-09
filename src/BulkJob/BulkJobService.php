<?php
namespace  jamesluo\smsbai\BulkJob;
use jamesluo\smsbai\Lib\CommonService;
class BulkJobService extends CommonService
{    public function __construct($config) {
        parent::__construct ( 'sms', 'service', 'BulkJobService',$config );
    }

    // ABSTRACT METHODS

    public function getAllChangedObjects ($getAllChangedObjectsRequest){
        return $this->execute ( 'getAllChangedObjects', $getAllChangedObjectsRequest );
    }
    public function cancelDownload ($cancelDownloadRequest){
        return $this->execute ( 'cancelDownload', $cancelDownloadRequest );
    }
    public function getChangedItemId ($getChangedItemIdRequest){
        return $this->execute ( 'getChangedItemId', $getChangedItemIdRequest );
    }
    public function getChangedScale ($getChangedScaleRequest){
        return $this->execute ( 'getChangedScale', $getChangedScaleRequest );
    }
    public function getAllObjects ($getAllObjectsRequest){
        return $this->execute ( 'getAllObjects', $getAllObjectsRequest );
    }
    public function getFileStatus ($getFileStatusRequest){
        return $this->execute ( 'getFileStatus', $getFileStatusRequest );
    }
    public function getFilePath ($getFilePathRequest){
        return $this->execute ( 'getFilePath', $getFilePathRequest );
    }
    public function getChangedId ($getChangedIdRequest){
        return $this->execute ( 'getChangedId', $getChangedIdRequest );
    }
    public function getUserCache ($getUserCacheRequest){
        return $this->execute ( 'getUserCache', $getUserCacheRequest );
    }

}
