<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class UserInfo extends AbstractResponse
{
    // OrgUserId   string      用户在学校的唯一id  58po4mj5443
    public $OrgUserId;
    // OpenUserId  string      用户在系统全局唯一的id      sgdgsdd
    public $OpenUserId;
    // RoleId      int   角色id  12
    public $RoleId;
    // Name  string      姓名    张三
    public $Name;
    // Sex   int   性别, 1: 男, 2: 女    1
    public $Sex;
    // DepartmentIds     int[] 所属组织架构id    [141234,197212]
    public $DepartmentIds;
    // Avatar      string      用户头像  https://img.qq.com/asdfasdfasdf.jpg
    public $Avatar;

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

        if (array_key_exists('RoleId', $param) && $param['RoleId'] !== null) {
            $this->RoleId = $param['RoleId'];
        }

        if (array_key_exists('Name', $param) && $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }
        if (array_key_exists('UserName', $param) && $param['UserName'] !== null) {
            $this->Name = $param['UserName'];
        }

        if (array_key_exists('Sex', $param) && $param['Sex'] !== null) {
            $this->Sex = $param['Sex'];
        }

        if (array_key_exists('DepartmentIds', $param) && $param['DepartmentIds'] !== null) {
            $this->DepartmentIds = $param['DepartmentIds'];
        }

        if (array_key_exists('Avatar', $param) && $param['Avatar'] !== null) {
            $this->Avatar = $param['Avatar'];
        }
    }
}
