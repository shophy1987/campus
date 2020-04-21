<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetUsersInfoUserNoRequest extends AbstractRequest
{
    // RoleId      int   是     50    姓名    11
    public $RoleId;
    // UserNo      string      是     50    教工号   Nu1231
    public $UserNo;

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
        if (array_key_exists('RoleId', $param) && $param['RoleId'] !== null) {
            $this->RoleId = $param['RoleId'];
        }

        if (array_key_exists('UserNo', $param) && $param['UserNo'] !== null) {
            $this->UserNo = $param['UserNo'];
        }
    }
}
