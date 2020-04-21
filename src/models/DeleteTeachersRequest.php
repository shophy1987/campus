<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class DeleteTeachersRequest extends AbstractRequest
{
    // OrgUserIds	string[]	是	100	教师OrgUserId列表	[axdsd13, dfjihh1]
    public $OrgUserIds;
    
    // 接口请求地址
    public function path()
    {
        return '/v2/user';
    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('OrgUserIds', $param) && $param['OrgUserIds'] !== null) {
            $this->OrgUserIds = $param['OrgUserIds'];
        }
    }
}
