<?php
namespace  jamesluo\smsbai\Search;
use jamesluo\smsbai\Lib\CommonService;

class  SearchService extends  CommonService {
    public function __construct($config) {
        parent::__construct ( 'sms', 'service', 'SearchService',$config );
    }

    // ABSTRACT METHODS

    public function getCountById ($getCountByIdRequest){
        return $this->execute ( 'getCountById', $getCountByIdRequest );
    }
    public function getTab ($getTabRequest){
        return $this->execute ( 'getTab', $getTabRequest );
    }
    public function getMaterialInfoBySearch ($getMaterialInfoBySearchRequest){
        return $this->execute ( 'getMaterialInfoBySearch', $getMaterialInfoBySearchRequest );
    }
}
