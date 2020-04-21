<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class TeachInfo extends AbstractResponse
{
    public $CourseId; // 任课学科id 206
    public $TeacherId; // 任课老师id数组 [30002086,30004570]
    public $CourseName; // 任课学科名称 数学

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('CourseId', $param) && $param['CourseId'] !== null) {
            $this->CourseId = $param['CourseId'];
        }

        if (array_key_exists('TeacherId', $param) && $param['TeacherId'] !== null) {
            $this->TeacherId = $param['TeacherId'];
        }

        if (array_key_exists('CourseName', $param) && $param['CourseName'] !== null) {
            $this->CourseName = $param['CourseName'];
        }
    }
}
