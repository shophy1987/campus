<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetDptUsersRequest extends AbstractRequest
{
    // DepartmentId      Int   是     64    组织架构Id      1
    public $DepartmentId;
    // RecursiveDown     string      否           是否取下属所有子节点的成员。默认false   0
    public $RecursiveDown;
    // PageIndex   Int   是           页码    1
    public $PageIndex;
    // PageSize    Int   是           数量    20
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
        if (array_key_exists('DepartmentId', $param) && $param['DepartmentId'] !== null) {
            $this->DepartmentId = $param['DepartmentId'];
        }

        if (array_key_exists('RecursiveDown', $param) && $param['RecursiveDown'] !== null) {
            $this->RecursiveDown = $param['RecursiveDown'];
        }

        if (array_key_exists('PageIndex', $param) && $param['PageIndex'] !== null) {
            $this->PageIndex = $param['PageIndex'];
        }

        if (array_key_exists('PageSize', $param) && $param['PageSize'] !== null) {
            $this->PageSize = $param['PageSize'];
        }
    }
}
