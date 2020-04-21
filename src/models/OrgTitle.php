<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class OrgTitle extends AbstractResponse
{
    // Id    int   职位id  1
    public $Id;
    // Name  string      名称    校长
    public $Name;

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
