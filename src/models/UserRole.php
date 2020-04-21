<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class UserRole extends AbstractResponse
{
    // string	用户在学校的唯一id	xxx
    public $OrgUserId;
    // int	角色
    public $RoleId;

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

        if (array_key_exists('RoleId', $param) && $param['RoleId'] !== null) {
            $this->RoleId = $param['RoleId'];
        }
    }
}
