<?php
namespace jamesluo\smsbai\Adgroup;

use jamesluo\smsbai\Lib\CommonService;

class  AdgroupService extends CommonService
{

    public function __construct()
    {
        parent::__construct('sms', 'service', 'AdgroupService');
    }

    // ABSTRACT METHODS

    public function addAdgroup($addAdgroupRequest)
    {
        return $this->execute('addAdgroup', $addAdgroupRequest);
    }

    public function updateAdgroup($updateAdgroupRequest)
    {
        return $this->execute('updateAdgroup', $updateAdgroupRequest);
    }

    public function deleteAdgroup($deleteAdgroupRequest)
    {
        return $this->execute('deleteAdgroup', $deleteAdgroupRequest);
    }

    public function getAdgroup($getAdgroupRequest)
    {
        return $this->execute('getAdgroup', $getAdgroupRequest);
    }
}
