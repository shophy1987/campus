<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetOrgInfoResponse extends AbstractResponse
{
    // Name  string      机构名称  罗湖
    public $Name;
    // Logo  string      学校logo      https://xxxx
    public $Logo;
    // Type  OrgType     机构类型
    // OFFICE	上级单位
    // GROUP	总集
    // SCHOOL	学校
    public $Type;
    // Country     string      国家    中国
    public $Country;
    // Province    string      省份    省
    public $Province;
    // City  string      城市    市
    public $City;
    // Area  string      区     去
    public $Area;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('Name', $param) && $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('Logo', $param) && $param['Logo'] !== null) {
            $this->Logo = $param['Logo'];
        }

        if (array_key_exists('Type', $param) && $param['Type'] !== null) {
            $this->Type = $param['Type'];
        }

        if (array_key_exists('Country', $param) && $param['Country'] !== null) {
            $this->Country = $param['Country'];
        }

        if (array_key_exists('Province', $param) && $param['Province'] !== null) {
            $this->Province = $param['Province'];
        }

        if (array_key_exists('City', $param) && $param['City'] !== null) {
            $this->City = $param['City'];
        }

        if (array_key_exists('Area', $param) && $param['Area'] !== null) {
            $this->Area = $param['Area'];
        }
    }
}
