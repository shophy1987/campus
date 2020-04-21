<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetClassScheduleResponse extends AbstractResponse
{
    // NOTE:后台按照作息节次时间排序
    public $DataList;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('DataList', $param) && $param['DataList'] !== null) {
            $this->DataList = [];
            foreach ($param['DataList'] as $key => $value){
                $obj = new ClassSchedule();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }
    }
}
