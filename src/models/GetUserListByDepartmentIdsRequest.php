<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetUserListByDepartmentIdsRequest extends AbstractRequest
{
    // DepartmentId      int   是     100   架构id  123
    public $DepartmentId;
    // Key   string      否     100   搜索关键词 123
    public $Key;
    // PageSize    int   是     100   数量    20
    public $PageSize;
    // PageIndex   int   是     100   页码    1
    public $PageIndex;

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

        if (array_key_exists('Key', $param) && $param['Key'] !== null) {
            $this->Key = $param['Key'];
        }

        if (array_key_exists('PageSize', $param) && $param['PageSize'] !== null) {
            $this->PageSize = $param['PageSize'];
        }

        if (array_key_exists('PageIndex', $param) && $param['PageIndex'] !== null) {
            $this->PageIndex = $param['PageIndex'];
        }
    }
}
