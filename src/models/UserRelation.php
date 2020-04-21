<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class UserRelation extends AbstractResponse
{
    // OpenUserId  string      用户全局唯一id    558dd3w6ww
    public $OpenUserId;
    // OrgUserId   string            58dd3w6ww
    public $OrgUserId;
    // RoleId      int   角色id  
    public $RoleId;
    // Name  string      用户名   张三
    public $Name;
    // Relation    int   用户关系  1
    // 1	爸爸
    // 2	妈妈
    // 3	爷爷
    // 4	奶奶
    // 5	姥姥
    // 6	姥爷
    // 7	家长
    public $Relation;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('OpenUserId', $param) && $param['OpenUserId'] !== null) {
            $this->OpenUserId = $param['OpenUserId'];
        }

        if (array_key_exists('OrgUserId', $param) && $param['OrgUserId'] !== null) {
            $this->OrgUserId = $param['OrgUserId'];
        }

        if (array_key_exists('RoleId', $param) && $param['RoleId'] !== null) {
            $this->RoleId = $param['RoleId'];
        }

        if (array_key_exists('Name', $param) && $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('Relation', $param) && $param['Relation'] !== null) {
            $this->Relation = $param['Relation'];
        }
    }
}
