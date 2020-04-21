<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class DeleteDepartmentRequest extends AbstractRequest
{
    // DepartmentId	int	是		组织架构Id。不能删除架构类型根目录，不能删除挂有用户列表的架构	12241
    public $DepartmentId;
    
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
