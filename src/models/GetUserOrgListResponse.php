<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetUserOrgListResponse extends AbstractResponse
{
    // string	用户名	张三
    public $UserName;
    // array	学校列表
    public $OrgInfos;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('UserName', $param) && $param['UserName'] !== null) {
            $this->UserName = $param['UserName'];
        }

        if (array_key_exists('OrgInfos', $param) && $param['OrgInfos'] !== null) {
            $this->OrgInfos = [];
            foreach ($param['OrgInfos'] as $key => $value){
                $obj = new OrgInfo();
                $obj->deserialize($value);
                array_push($this->OrgInfos, $obj);
            }
        }
    }
}
