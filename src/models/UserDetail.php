<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class UserDetail extends AbstractResponse
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
    // DepartmentNames   string[]    所属组织架构名称    ["一班","二班"]
    public $DepartmentNames;
    // TitleIds    int[] 所在组织架构的职位id [141234,197212]
    public $TitleIds;
    // Status      int   用户状态 1. 正常 2. 删除、离休、迁出 3. 审核中 4. 已锁定      1
    public $Status;
    // CreateTime  string      用户创建时间      2018-09-01 20:00:00
    public $CreateTime;
    // UserNo      string      学号/工号 12312dd
    public $UserNo;

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

        if (array_key_exists('Sex', $param) && $param['Sex'] !== null) {
            $this->Sex = $param['Sex'];
        }

        if (array_key_exists('DepartmentIds', $param) && $param['DepartmentIds'] !== null) {
            $this->DepartmentIds = $param['DepartmentIds'];
        }

        if (array_key_exists('Avatar', $param) && $param['Avatar'] !== null) {
            $this->Avatar = $param['Avatar'];
        }

        if (array_key_exists('DepartmentNames', $param) && $param['DepartmentNames'] !== null) {
            $this->DepartmentNames = $param['DepartmentNames'];
        }

        if (array_key_exists('TitleIds', $param) && $param['TitleIds'] !== null) {
            $this->TitleIds = $param['TitleIds'];
        }

        if (array_key_exists('Status', $param) && $param['Status'] !== null) {
            $this->Status = $param['Status'];
        }

        if (array_key_exists('CreateTime', $param) && $param['CreateTime'] !== null) {
            $this->CreateTime = $param['CreateTime'];
        }

        if (array_key_exists('UserNo', $param) && $param['UserNo'] !== null) {
            $this->UserNo = $param['UserNo'];
        }
    }
}
