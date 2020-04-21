<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class MsgDepartment extends AbstractResponse
{
    // DepartmentId	int	是	50	架构id	1000
    public $DepartmentId;

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
    }
}
