<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class UserGroupsRequest extends AbstractRequest
{
    // OrgUserId	int	是	50	用户ID	12312323
    public $OrgUserId;

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
        if (array_key_exists('OrgUserId', $param) && $param['OrgUserId'] !== null) {
            $this->OrgUserId = $param['OrgUserId'];
        }
    }
}
