<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class FailedIdx extends AbstractResponse
{
    // Idx   int   失败的下标 0
    public $Idx;
    // Message     string      失败原因  "User.UserNotExists"
    public $Message;

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

        if (array_key_exists('Message', $param) && $param['Message'] !== null) {
            $this->Message = $param['Message'];
        }
    }
}
