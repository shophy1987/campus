<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class OpenStudent extends AbstractResponse
{
    // OrgUserId	string	是	50	需要修改的学生id	123gfdjsdfdfad
    public $OrgUserId;
    // Name  string      是     50    学生姓名  李珊
    public $Name;
    // UserNo      string      是     50    学号    N839992
    public $UserNo;
    // JoinDate    string      是     50    如下日期  2019-08-15
    public $JoinDate;
    // Sex   int   是     1     性别 1:男 2:女  2
    public $Sex;
    // Departments Departments 是                 
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

        if (array_key_exists('UserNo', $param) && $param['UserNo'] !== null) {
            $this->UserNo = $param['UserNo'];
        }

        if (array_key_exists('JoinDate', $param) && $param['JoinDate'] !== null) {
            $this->JoinDate = $param['JoinDate'];
        }

        if (array_key_exists('Sex', $param) && $param['Sex'] !== null) {
            $this->Sex = $param['Sex'];
        }

        if (array_key_exists('Departments', $param) && $param['Departments'] !== null) {
            $this->Departments = [];
            foreach ($param['Departments'] as $key => $value){
                $obj = new DepartmentId();
                $obj->deserialize($value);
                array_push($this->Departments, $obj);
            }
        }
    }
}
