<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetClassRequest extends AbstractRequest
{
    // DepartmentType    int   否           架构类型  1
    // 0	全部
    // 1	行政班
    // 8	课程班
    public $DepartmentType;
    // PageIndex   int   是           页码    1
    public $PageIndex;
    // PageSize    int   是           数量    10
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
