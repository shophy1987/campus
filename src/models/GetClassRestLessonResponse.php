<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetClassRestLessonResponse extends AbstractResponse
{
    // array 作息节次数组
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
                $obj = new RestLesson();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }
    }
}
