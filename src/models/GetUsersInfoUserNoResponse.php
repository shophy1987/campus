<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetUsersInfoUserNoResponse extends AbstractResponse
{
    // Total int   返回数量  1
    public $Total;
    // DataList    UserInfo[]  详细信息
    public $DataList;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('Total', $param) && $param['Total'] !== null) {
            $this->Total = $param['Total'];
        }

        if (array_key_exists('DataList', $param) && $param['DataList'] !== null) {
            $this->DataList = [];
            foreach ($param['DataList'] as $key => $value){
                $obj = new UserInfo();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }
    }
}
