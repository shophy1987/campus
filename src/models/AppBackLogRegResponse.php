<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class AppBackLogRegResponse extends AbstractResponse
{
    // BacklogID	int	应用待办模块的id
    public $BacklogID;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('BacklogID', $param) && $param['BacklogID'] !== null) {
            $this->BacklogID = $param['BacklogID'];
        }
    }
}
