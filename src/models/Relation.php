<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class Relation extends AbstractResponse
{
    /// OrgId int   学校或上级单位ID   1
    public $OrgId;
    // Name  string      学校获取上级单位名称  智慧校园大学
    public $Name;
    // Type  int   机构类型  2：上级单位 4：学校
    public $Type;
    // Logo  string      学校或上级单位Logo xxx
    public $Logo;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('OrgId', $param) && $param['OrgId'] !== null) {
            $this->OrgId = $param['OrgId'];
        }

        if (array_key_exists('Name', $param) && $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('Type', $param) && $param['Type'] !== null) {
            $this->Type = $param['Type'];
        }

        if (array_key_exists('Logo', $param) && $param['Logo'] !== null) {
            $this->Logo = $param['Logo'];
        }
    }
}
