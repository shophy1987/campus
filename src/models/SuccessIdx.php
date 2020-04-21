<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class SuccessIdx extends AbstractResponse
{
    // Idx   int   失败的下标 0
    public $Idx;
    // OrgUserId   string      用户ID  "User.UserNotExists"
    public $OrgUserId;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('Idx', $param) && $param['Idx'] !== null) {
            $this->Idx = $param['Idx'];
        }

        if (array_key_exists('OrgUserId', $param) && $param['OrgUserId'] !== null) {
            $this->OrgUserId = $param['OrgUserId'];
        }
    }
}
