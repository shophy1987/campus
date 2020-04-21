<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetBatchDepartmentResponse extends AbstractResponse
{
    // Departments	Department[]	返回的组织架构
    public $Departments;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('Departments', $param) && $param['Departments'] !== null) {
            $this->Departments = [];
            foreach ($param['Departments'] as $key => $value){
                $obj = new Department();
                $obj->deserialize($value);
                array_push($this->Departments, $obj);
            }
        }
    }
}
