<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class ClassTeacher extends AbstractResponse
{
    // OpenUserId  string      用户唯一id      Kjin123
    public $OpenUserId;
    // OrgUserId   string            sdfjlk
    public $OrgUserId;
    // DepartmentId      int         42412
    public $DepartmentId;
    // ClassName   string      班级名称  一班
    public $ClassName;
    // UserName    string      老师名称  张三
    public $UserName;
    // AdminType   int   管理身份  1
    // 1	班主任
    // 2	辅导员
    // 3	跨校区任课老师
    // 4	教务任课老师
    public $AdminType;

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

        if (array_key_exists('DepartmentId', $param) && $param['DepartmentId'] !== null) {
            $this->DepartmentId = $param['DepartmentId'];
        }

        if (array_key_exists('ClassName', $param) && $param['ClassName'] !== null) {
            $this->ClassName = $param['ClassName'];
        }

        if (array_key_exists('UserName', $param) && $param['UserName'] !== null) {
            $this->UserName = $param['UserName'];
        }

        if (array_key_exists('AdminType', $param) && $param['AdminType'] !== null) {
            $this->AdminType = $param['AdminType'];
        }
    }
}
