<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class DepartmentNode extends AbstractResponse
{
    // DepartmentType    Int   根节点必传 64    架构类型，要求一次批量创建的节点属于一个架构类型。学生:1，教职工:2，校友:4，退休教师:5，临时组:6，虚拟组:7，课程班:8，上级单位:9，教学班（高校）:10 
    public $DepartmentType;
    // ParentId    int   根节点必传       父级id,请求包体里的根节点会在指定的ParentId下创建      1
    public $ParentId;
    // Name  string      是           架构名称，年级节点不用传名称    测试
    public $Name;
    // JoinYear    int   否           加入年份  2018
    public $JoinYear;
    // Sort  int   否           架构树立的排序值, 由小到大    1
    public $Sort;
    // Tag   int   学生类型架构必传          学生架构的架构含义，比如班级、年级等学生根节点 2
    // 学生根节点	1
    // 学部	2
    // 学院	3
    // 年级	4
    // 班级	5
    // 系别	6
    // 专业	7
    // 学年	8
    // 学期	9
    public $Tag;
    // OrgAttribute      int   否           架构所属学校类型，6：小学，5：初中，3：高中 6
    public $OrgAttribute;
    // Code  string      否           架构代码，全局唯一，不填则系统生成 test_code
    public $Code;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('DepartmentType', $param) && $param['DepartmentType'] !== null) {
            $this->DepartmentType = $param['DepartmentType'];
        }

        if (array_key_exists('ParentId', $param) && $param['ParentId'] !== null) {
            $this->ParentId = $param['ParentId'];
        }

        if (array_key_exists('Name', $param) && $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('JoinYear', $param) && $param['JoinYear'] !== null) {
            $this->JoinYear = $param['JoinYear'];
        }

        if (array_key_exists('Sort', $param) && $param['Sort'] !== null) {
            $this->Sort = $param['Sort'];
        }

        if (array_key_exists('Tag', $param) && $param['Tag'] !== null) {
            $this->Tag = $param['Tag'];
        }

        if (array_key_exists('OrgAttribute', $param) && $param['OrgAttribute'] !== null) {
            $this->OrgAttribute = $param['OrgAttribute'];
        }

        if (array_key_exists('Code', $param) && $param['Code'] !== null) {
            $this->Code = $param['Code'];
        }
    }
}
