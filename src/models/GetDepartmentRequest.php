<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetDepartmentRequest extends AbstractRequest
{
    // DepartmentId	Int	是	64	组织架构Id	1
    public $DepartmentId;

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
        if (array_key_exists('DepartmentId', $param) && $param['DepartmentId'] !== null) {
            $this->DepartmentId = $param['DepartmentId'];
        }
    }
}
