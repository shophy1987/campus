<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class OrgInfo extends AbstractResponse
{
    // int	学校ID	1
    public $OrgId;
    // string	学校名称	智慧校园大学
    public $Name;
    // int	角色	12
    public $RoleId;
    // int[]	学校Logo	xxx
    public $Logo;
    // array	角色列表
    public $List;

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

        if (array_key_exists('RoleId', $param) && $param['RoleId'] !== null) {
            $this->RoleId = $param['RoleId'];
        }

        if (array_key_exists('Logo', $param) && $param['Logo'] !== null) {
            $this->Logo = $param['Logo'];
        }

        if (array_key_exists('List', $param) && $param['List'] !== null) {
            $this->List = [];
            foreach ($param['List'] as $key => $value){
                $obj = new UserRole();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
