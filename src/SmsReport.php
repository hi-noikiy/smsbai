<?php

namespace jamesluo\smsbai;

use jamesluo\smsbai\Report\GetRealTimeDataRequest;
use jamesluo\smsbai\Report\ReportRequestType;
use jamesluo\smsbai\Report\ReportService;
use jamesluo\smsbai\Report\GetProfessionalReportIdRequest;
use jamesluo\smsbai\Report\GetReportStateRequest;
use  jamesluo\smsbai\Report\GetReportFileUrlRequest;

class  SmsReport
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

    public function getRealTimeData($fields, $startDate, $endDate, $levelDetails, $UnitTime, $ReportType)
    {
        $request = new GetRealTimeDataRequest();
        $type = new ReportRequestType();
        $type->setPerformanceData($fields);
        $type->setLevelOfDetails($levelDetails);
        $type->setUnitOfTime($UnitTime);
        $type->setReportType($ReportType);
        $type->setStartDate($startDate);
        $type->setEndDate($endDate);
        $request->setRealTimeRequestType($type);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $report = new  ReportService($config);
        $response = $report->getRealTimeData($request);
        $head = $report->getJsonHeader();
        return ['head' => $head, 'data' => $response->data];
    }

    public function getRealTimeQueryData($fields, $startDate, $endDate, $levelDetails, $UnitTime, $ReportType)
    {
        $request = new GetRealTimeQueryDataRequest();
        $type = new ReportRequestType();
        $type->setPerformanceData($fields);
        $type->setLevelOfDetails($levelDetails);
        $type->setUnitOfTime($UnitTime);
        $type->setReportType($ReportType);
        $type->setStartDate($startDate);
        $type->setEndDate($endDate);
        $request->setRealTimeQueryRequestType($type);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $report = new  ReportService($config);
        $report->setIsJson(true);
        $response = $report->getRealTimeQueryData($request);
        $head = $report->getJsonHeader();
        return ['head' => $head, 'data' => $response->data];
    }

    public function getRealTimePairData($fields, $startDate, $endDate, $levelDetails, $UnitTime, $ReportType)
    {
        $request = new GetRealTimePairDataRequest();
        $type = new ReportRequestType();
        $type->setPerformanceData($fields);
        $type->setLevelOfDetails($levelDetails);
        $type->setUnitOfTime($UnitTime);
        $type->setReportType($ReportType);
        $type->setStartDate($startDate);
        $type->setEndDate($endDate);
        $request->setRealTimePairRequestType($type);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $report = new  ReportService($config);
        $report->setIsJson(true);
        $response = $report->getRealTimePairData($request);
        $head = $report->getJsonHeader();
        return ['head' => $head, 'data' => $response->data];
    }

    public function getProfessionalReportId($fields, $startDate, $endDate, $levelDetails, $UnitTime, $ReportType)
    {
        $request = new GetProfessionalReportIdRequest();
        $type = new ReportRequestType();
        $type->setPerformanceData($fields);
        $type->setLevelOfDetails($levelDetails);
        $type->setUnitOfTime($UnitTime);
        $type->setReportType($ReportType);
        $type->setStartDate($startDate);
        $type->setEndDate($endDate);
        $request->setReportRequestType($type);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $report = new  ReportService($config);
        $report->setIsJson(true);
        $response = $report->getProfessionalReportId($request);
        $head = $report->getJsonHeader();
        return ['head' => $head, 'data' => $response->data];
    }

    public function getReportState($reportid)
    {
        $request = new GetReportStateRequest();
        $request->setReportId($reportid);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $report = new  ReportService($config);
        $report->setIsJson(true);
        $response = $report->getReportState($request);
        $head = $report->getJsonHeader();
        return ['head' => $head, 'data' => $response->data];
    }

    public function getReportFileUrlTest($reportid)
    {
        $request = new GetReportFileUrlRequest();
        $request->setReportId($reportid);
        $config = array('url' => $this->url,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
            'target' => $this->target,
            'accesstoken' => $this->accesstoken
        );
        $report = new  ReportService($config);
        $report->setIsJson(true);
        $response = $report->getReportFileUrl($request);
        $head = $report->getJsonHeader();
        return ['head' => $head, 'data' => $response->data];
    }

}
