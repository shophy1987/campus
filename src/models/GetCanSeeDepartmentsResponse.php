<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetCanSeeDepartmentsResponse extends AbstractResponse
{
    // Int数组
    public $DepartmentIds;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('DepartmentIds', $param) && $param['DepartmentIds'] !== null) {
            $this->DepartmentIds = $param['DepartmentIds'];
        }
    }
}
