<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetOfficeRelationsListRequest extends AbstractRequest
{
    // OrgId int   上级单位ID      1
    public $OrgId;
    // Type  int   获取类型  2：上级单位 4：学校
    public $Type;

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
        if (array_key_exists('OrgId', $param) && $param['OrgId'] !== null) {
            $this->OrgId = $param['OrgId'];
        }

        if (array_key_exists('Type', $param) && $param['Type'] !== null) {
            $this->Type = $param['Type'];
        }
    }
}
