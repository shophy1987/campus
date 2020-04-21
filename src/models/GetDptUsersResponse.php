<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetDptUsersResponse extends AbstractResponse
{
    // Total int   返回数量  1
    public $Total;
    // UserInfos	UserInfo[]	用户信息数组
    public $UserInfos;

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

        if (array_key_exists('UserInfos', $param) && $param['UserInfos'] !== null) {
            $this->UserInfos = [];
            foreach ($param['UserInfos'] as $key => $value){
                $obj = new UserInfo();
                $obj->deserialize($value);
                array_push($this->UserInfos, $obj);
            }
        }
    }
}
