<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class UpdateTemporarysRequest extends AbstractRequest
{
    // Teachers	Teacher[]	是	100	添加/更新的列表		
    public $Teachers;
    
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
        if (array_key_exists('Teachers', $param) && $param['Teachers'] !== null) {
            $this->Teachers = [];
            foreach ($param['Teachers'] as $key => $value){
                $obj = new TeacherInfo();
                $obj->deserialize($value);
                array_push($this->Teachers, $obj);
            }
        }
    }
}
