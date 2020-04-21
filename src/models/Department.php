<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class Department extends AbstractResponse
{
    // DepartmentId      Int   架构id  1
    public $DepartmentId;
    // Name  string      架构名称  理学部
    public $Name;
    // Level int   架构层级  1
    public $Level;
    // ParentId    int   父级Id  1
    public $ParentId;
    // FullPath    string      所属架构全路径     /测试学校/理学部/
    public $FullPath;
    // UsersTotal  int   用户数   1
    public $UsersTotal;
    // Tag   int   组织架构含义，目前仅学生架构有效。学部：2，学院：3，年级：4，班级：5，系别：6，专业：7，学年：8，学期：9    5
    public $Tag;
    // DepartmentType	int	组织架构类型	1
    public $DepartmentType;
    // Extra	string	备注信息，年级的话会返回当前是几年级（幼儿园会返回中小班，高校不返回）	/测试学校/理学部/
    public $Extra;
    // Code  string      架构代码，全局唯一，不填则系统生成 test_code
    public $Code;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('DepartmentId', $param) && $param['DepartmentId'] !== null) {
            $this->DepartmentId = $param['DepartmentId'];
        }

        if (array_key_exists('Name', $param) && $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('Level', $param) && $param['Level'] !== null) {
            $this->Level = $param['Level'];
        }

        if (array_key_exists('ParentId', $param) && $param['ParentId'] !== null) {
            $this->ParentId = $param['ParentId'];
        }

        if (array_key_exists('FullPath', $param) && $param['FullPath'] !== null) {
            $this->FullPath = $param['FullPath'];
        }

        if (array_key_exists('UsersTotal', $param) && $param['UsersTotal'] !== null) {
            $this->UsersTotal = $param['UsersTotal'];
        }

        if (array_key_exists('Tag', $param) && $param['Tag'] !== null) {
            $this->Tag = $param['Tag'];
        }

        if (array_key_exists('DepartmentType', $param) && $param['DepartmentType'] !== null) {
            $this->DepartmentType = $param['DepartmentType'];
        }

        if (array_key_exists('Extra', $param) && $param['Extra'] !== null) {
            $this->Extra = $param['Extra'];
        }

        if (array_key_exists('Code', $param) && $param['Code'] !== null) {
            $this->Code = $param['Code'];
        }
    }
}
