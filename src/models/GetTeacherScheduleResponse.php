<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetTeacherScheduleResponse extends AbstractResponse
{
    // WeekInfo
    public $WeekInfo;
    // array 课表数组
    public $DataList;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('WeekInfo', $param) && $param['WeekInfo'] !== null) {
            $this->WeekInfo = new WeekInfo();
            $this->WeekInfo->deserialize($param['WeekInfo']);
        }

        if (array_key_exists('DataList', $param) && $param['DataList'] !== null) {
            $this->DataList = [];
            foreach ($param['DataList'] as $key => $value){
                $obj = new Schedule();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }
    }
}
