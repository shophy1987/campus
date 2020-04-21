<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetUsersInfoDetailRequest extends AbstractRequest
{
    // OrgUserId   string[]    是     100   用户在学校的唯一id  ["58po4mj5443", "58po4mj54521"]
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
