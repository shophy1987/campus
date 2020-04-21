<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class TeacherInfo extends AbstractResponse
{
    // OrgUserId	string	是		全校唯一的用户id	58po4mj5443
    public $OrgUserId;
    // Name  string      是     50    姓名    王老师
    public $Name;
    // Phone string      是           手机号   13800000000
    public $Phone;
    // Gender      int   是           性别    1：男 2：女
    public $Gender;
    // UserNo      string      是     50    教工号   Nu1231
    public $UserNo;
    // JoinDate    string      是           入职日期  2019-09-10
    public $JoinDate;
    // Departments Department[]      是           用户所属架构信息    [{"Name": "教务处","Code":"jgabc"},{"Name": "校长室","Code":"jg123"}]
    public $Departments;

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

        if (array_key_exists('Name', $param) && $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('Phone', $param) && $param['Phone'] !== null) {
            $this->Phone = $param['Phone'];
        }

        if (array_key_exists('Gender', $param) && $param['Gender'] !== null) {
            $this->Gender = $param['Gender'];
        }

        if (array_key_exists('UserNo', $param) && $param['UserNo'] !== null) {
            $this->UserNo = $param['UserNo'];
        }

        if (array_key_exists('JoinDate', $param) && $param['JoinDate'] !== null) {
            $this->JoinDate = $param['JoinDate'];
        }

        if (array_key_exists('Departments', $param) && $param['Departments'] !== null) {
            $this->Departments = [];
            foreach ($param['Departments'] as $key => $value){
                $obj = new DepartmentNode();
                $obj->deserialize($value);
                array_push($this->Departments, $obj);
            }
        }
    }
}
