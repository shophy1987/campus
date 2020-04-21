<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetTeacherClassRequest extends AbstractRequest
{
    // OrgUserId	string	是			ksjn12j
    public $OrgUserId;
    // DepartmentType	int	否		架构类型	1
    // 0	全部
    // 1	行政班
    // 8	课程班
    // 10	教学班（高校）
    public $DepartmentType;

    /**
     * 调用方法
     * @return string GET OR POST
     */
    public function method()
    {
        return 'GET';
    }

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

        if (array_key_exists('DepartmentType', $param) && $param['DepartmentType'] !== null) {
            $this->DepartmentType = $param['DepartmentType'];
        }
    }
}
