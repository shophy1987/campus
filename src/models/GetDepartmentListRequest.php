<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetDepartmentListRequest extends AbstractRequest
{
    // DepartmentType    Int   否     64    架构类型 全部:0,学生:1,教职工:2,校友:4,退休教师:5,临时组:6,虚拟组:7,课程班:8,上级单位:9,教学班（高校）:10    1
    public $DepartmentType;
    // PageIndex   Int   是     64    页码    1
    public $PageIndex;
    // PageSize    Int   是     64    数量    1
    public $PageSize;

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
        if (array_key_exists('DepartmentType', $param) && $param['DepartmentType'] !== null) {
            $this->DepartmentType = $param['DepartmentType'];
        }

        if (array_key_exists('PageIndex', $param) && $param['PageIndex'] !== null) {
            $this->PageIndex = $param['PageIndex'];
        }

        if (array_key_exists('PageSize', $param) && $param['PageSize'] !== null) {
            $this->PageSize = $param['PageSize'];
        }
    }
}
