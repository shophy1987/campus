<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetUserOrgListRequest extends AbstractRequest
{
    // Action
    public $Action='';
    // 通过code换取的凭证AccessToken
    public $AccessToken='';
    // string	用户在系统全局唯一的id	xxxx
    public $OpenUserId;
    // int	角色	12
    public $RoleId;
    // bool	是否获取全部角色	true
    public $IsIncludeAllRoles;

    /**
     * 调用方法
     * @return string GET OR POST
     */
    public function method()
    {
        return 'GET';
    }

    /**
     * 是否需要签名
     */
    public function isSign()
    {
        return false;
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
        if (array_key_exists('AccessToken', $param) && $param['AccessToken'] !== null) {
            $this->AccessToken = $param['AccessToken'];
        }

        if (array_key_exists('OpenUserId', $param) && $param['OpenUserId'] !== null) {
            $this->OpenUserId = $param['OpenUserId'];
        }

        if (array_key_exists('RoleId', $param) && $param['RoleId'] !== null) {
            $this->RoleId = $param['RoleId'];
        }

        if (array_key_exists('IsIncludeAllRoles', $param) && $param['IsIncludeAllRoles'] !== null) {
            $this->IsIncludeAllRoles = $param['IsIncludeAllRoles'];
        }
    }
}
