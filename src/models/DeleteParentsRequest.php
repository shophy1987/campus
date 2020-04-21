<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class DeleteParentsRequest extends AbstractRequest
{
    // OpenParent	OpenParent[]	是		需要删除的家长列表
    public $OpenParent;
    
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
        if (array_key_exists('OpenParent', $param) && $param['OpenParent'] !== null) {
            $this->OpenStudent = [];
            foreach ($param['OpenParent'] as $key => $value){
                $obj = new OpenParent();
                $obj->deserialize($value);
                array_push($this->OpenParent, $obj);
            }
        }
    }
}
