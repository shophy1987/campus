<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class Schedule extends AbstractResponse
{
    // int 周几 1
    public $WeekDay;
    // array 课程数组
    public $List;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('WeekDay', $param) && $param['WeekDay'] !== null) {
            $this->WeekDay = $param['WeekDay'];
        }

        if (array_key_exists('List', $param) && $param['List'] !== null) {
            $this->List = [];
            foreach ($param['List'] as $key => $value){
                $obj = new Lesson();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
