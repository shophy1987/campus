<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class ClassSchedule extends AbstractResponse
{
    public $LessonId; // 节次id 1
    public $List; // Schedule数组

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('LessonId', $param) && $param['LessonId'] !== null) {
            $this->LessonId = $param['LessonId'];
        }

        if (array_key_exists('List', $param) && $param['List'] !== null) {
            $this->List = [];
            foreach ($param['List'] as $key => $value){
                $obj = new Schedule();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
