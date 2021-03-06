<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetYearListResponse extends AbstractResponse
{
    // 分页信息
    public $PageInfo;
    // array	学期数组
    public $DataList;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('PageInfo', $param) && $param['PageInfo'] !== null) {
            $this->PageInfo = new PageInfo();
            $this->PageInfo->deserialize($param['PageInfo']);
        }

        if (array_key_exists('DataList', $param) && $param['DataList'] !== null) {
            $this->DataList = [];
            foreach ($param['DataList'] as $key => $value){
                $obj = new YearInfo();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }
    }
}
