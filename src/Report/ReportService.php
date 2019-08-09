<?php
namespace  jamesluo\smsbai\Report;
use jamesluo\smsbai\Lib\CommonService;

class  ReportService extends  CommonService{

    public function __construct($config) {
        parent::__construct ( 'sms', 'service', 'ReportService',$config );
    }

    // ABSTRACT METHODS

    public function getRealTimeQueryData ($getRealTimeQueryDataRequest){
        return $this->execute ( 'getRealTimeQueryData', $getRealTimeQueryDataRequest );
    }
    public function getRealTimePairData ($getRealTimePairDataRequest){
        return $this->execute ( 'getRealTimePairData', $getRealTimePairDataRequest );
    }
    public function getProfessionalReportId ($getProfessionalReportIdRequest){
        return $this->execute ( 'getProfessionalReportId', $getProfessionalReportIdRequest );
    }
    public function getReportState ($getReportStateRequest){
        return $this->execute ( 'getReportState', $getReportStateRequest );
    }
    public function getReportFileUrl ($getReportFileUrlRequest){
        return $this->execute ( 'getReportFileUrl', $getReportFileUrlRequest );
    }
    public function getRealTimeData ($getRealTimeDataRequest){
        return $this->execute ( 'getRealTimeData', $getRealTimeDataRequest );
    }

}
