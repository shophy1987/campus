<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class AppWriteBackLogResponse extends AbstractResponse
{
    // BacklogLogID	int	待办信息的id
    public $BacklogLogID;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('BacklogLogID', $param) && $param['BacklogLogID'] !== null) {
            $this->BacklogLogID = $param['BacklogLogID'];
        }
    }
}
