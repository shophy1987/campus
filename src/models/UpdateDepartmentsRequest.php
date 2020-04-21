<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class UpdateDepartmentsRequest extends AbstractRequest
{
    // DepartmentNodes	DepartmentNode[]	是	100	节点列表	
    public $DepartmentNodes;

    /**
     * 调用方法
     * @return string GET OR POST
     */
    public function method()
    {
        return 'GET';
    }
    
    // 接口请求地址
    public function path()
    {
        return ' /v2/message';
    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('DepartmentNodes', $param) && $param['DepartmentNodes'] !== null) {
            $this->DepartmentNodes = [];
            foreach ($param['DepartmentNodes'] as $key => $value){
                $obj = new DepartmentNode();
                $obj->deserialize($value);
                array_push($this->DepartmentNodes, $obj);
            }
        }
    }
}
