<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetClassResponse extends AbstractResponse
{
    // Total int   返回数量  1
    public $Total;
    // Classes	Class[]	教师列表	
    public $Classes;

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

        if (array_key_exists('Classes', $param) && $param['Classes'] !== null) {
            $this->Classes = [];
            foreach ($param['Classes'] as $key => $value){
                $obj = new ClassInfo();
                $obj->deserialize($value);
                array_push($this->Classes, $obj);
            }
        }
    }
}
