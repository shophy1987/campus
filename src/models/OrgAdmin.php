<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class OrgAdmin extends AbstractResponse
{
    // OrgUserId   string      用户在学校的唯一id  alkjioj
    public $OrgUserId;
    // OpenUserId  string      用户在系统全局唯一的id      sdfsdgsd
    public $OpenUserId;
    // Name  string      用户名   张三
    public $Name;
    // RoleId      int   角色    
    public $RoleId;
    // DepartmentIds     int[] 所属架构ID列表    [141234,197212]
    public $DepartmentIds;
    // AdminType   string[]    管理员类型 [超级管理员，分校管理员]
    public $AdminType;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('OrgUserId', $param) && $param['OrgUserId'] !== null) {
            $this->OrgUserId = $param['OrgUserId'];
        }

        if (array_key_exists('OpenUserId', $param) && $param['OpenUserId'] !== null) {
            $this->OpenUserId = $param['OpenUserId'];
        }

        if (array_key_exists('Name', $param) && $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('RoleId', $param) && $param['RoleId'] !== null) {
            $this->RoleId = $param['RoleId'];
        }

        if (array_key_exists('DepartmentIds', $param) && $param['DepartmentIds'] !== null) {
            $this->DepartmentIds = $param['DepartmentIds'];
        }

        if (array_key_exists('AdminType', $param) && $param['AdminType'] !== null) {
            $this->AdminType = $param['AdminType'];
        }
    }
}
