<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class DeleteStudentsRequest extends AbstractRequest
{
    // OpenStudent	OpenStudent[]			需要删除的学生列表	
    public $OpenStudent;
    
    // 接口请求地址
    public function path()
    {
        return '/v2/user';
    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('OpenStudent', $param) && $param['OpenStudent'] !== null) {
            $this->OpenStudent = [];
            foreach ($param['OpenStudent'] as $key => $value){
                $obj = new OpenStudent();
                $obj->deserialize($value);
                array_push($this->OpenStudent, $obj);
            }
        }
    }
}
