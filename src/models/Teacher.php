<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class Teacher extends AbstractResponse
{
    public $Id; //教师id 110
    public $Name; //教师名 课程

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
    }
}
