<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

/**
 * Session请求参数结构体
 */
class Session extends AbstractResponse
{
    // 用户唯一id
    public $OpenUserId;
    // UserName
    public $UserName;
    // 用户在一个学校的唯一id
    public $OrgUserId;
    // 角色id
    public $RoleId;
    // 学校id
    public $OrgId;
    // 扩展字段
    public $ExtData;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('OpenUserId', $param) && $param['OpenUserId'] !== null) {
            $this->UserCode = $param['OpenUserId'];
        }

        if (array_key_exists('UserName', $param) && $param['UserName'] !== null) {
            $this->UserCode = $param['UserName'];
        }

        if (array_key_exists('OrgUserId', $param) && $param['OrgUserId'] !== null) {
            $this->UserCode = $param['OrgUserId'];
        }

        if (array_key_exists('RoleId', $param) && $param['RoleId'] !== null) {
            $this->UserCode = $param['RoleId'];
        }

        if (array_key_exists('OrgId', $param) && $param['OrgId'] !== null) {
            $this->UserCode = $param['OrgId'];
        }

        if (array_key_exists('ExtData', $param) && $param['ExtData'] !== null) {
            $this->UserCode = $param['ExtData'];
        }
    }
}
