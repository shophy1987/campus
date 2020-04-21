<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class Course extends AbstractResponse
{
    public $Id; //学科id 110
    public $Name; //学科名 课程
    public $Color; //学科名称颜色 '#0CB181'
    public $Operator; //创建人 课程 张三
    public $CreateTime; //创建时间 2019-8-6 14:36:41
    public $Opts; //操作(给前端用) ["edit", "delete"]

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('Id', $param) && $param['Id'] !== null) {
            $this->Id = $param['Id'];
        }

        if (array_key_exists('Name', $param) && $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('Color', $param) && $param['Color'] !== null) {
            $this->Color = $param['Color'];
        }

        if (array_key_exists('Operator', $param) && $param['Operator'] !== null) {
            $this->Operator = $param['Operator'];
        }

        if (array_key_exists('CreateTime', $param) && $param['CreateTime'] !== null) {
            $this->CreateTime = $param['CreateTime'];
        }

        if (array_key_exists('Opts', $param) && $param['Opts'] !== null) {
            $this->Opts = $param['Opts'];
        }
    }
}
