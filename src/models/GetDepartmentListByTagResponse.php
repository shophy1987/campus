<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetDepartmentListByTagResponse extends AbstractResponse
{
    // Total int   返回数量  1
    public $Total;
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
        if (array_key_exists('Total', $param) && $param['Total'] !== null) {
            $this->Total = $param['Total'];
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
