<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class RestLesson extends AbstractResponse
{
    public $LessonId; // 节次id 1
    public $LessonName; // 节次名称 第1节
    public $SummerTime; // 夏季作息时间 8:00-9:00
    public $WinterTime; // 冬季作息时间 8:30-9:30

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

        if (array_key_exists('LessonName', $param) && $param['LessonName'] !== null) {
            $this->LessonName = $param['LessonName'];
        }

        if (array_key_exists('SummerTime', $param) && $param['SummerTime'] !== null) {
            $this->SummerTime = $param['SummerTime'];
        }

        if (array_key_exists('WinterTime', $param) && $param['WinterTime'] !== null) {
            $this->WinterTime = $param['WinterTime'];
        }
    }
}
