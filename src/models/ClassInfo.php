<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class ClassInfo extends AbstractResponse
{
    // Id    string      架构id  2
    public $Id;
    // Name  string      教室名字  数学班
    public $Name;
    // Level int   架构层级  
    public $Level;
    // ParentId    int   父级Id  1
    public $ParentId;

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

        if (array_key_exists('Level', $param) && $param['Level'] !== null) {
            $this->Level = $param['Level'];
        }

        if (array_key_exists('ParentId', $param) && $param['ParentId'] !== null) {
            $this->ParentId = $param['ParentId'];
        }
    }
}
