<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetAdministrativeTeachListResponse extends AbstractResponse
{
    // 任课信息数组
    public $List;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('List', $param) && $param['List'] !== null) {
            $this->List = [];
            foreach ($param['List'] as $key => $value){
                $obj = new TeachInfo();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
