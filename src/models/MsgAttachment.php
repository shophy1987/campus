<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class MsgAttachment extends AbstractResponse
{
    // "Url": "https://www.demo.com",
    public $Url;
    // "Name": "Name",
    public $Name;
    // "Id": 12,
    public $Id;
    // "AType": "rz",
    public $AType;
    // "Size": "3M"
    public $Size;

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

        if (array_key_exists('Url', $param) && $param['Url'] !== null) {
            $this->Url = $param['Url'];
        }

        if (array_key_exists('Name', $param) && $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('AType', $param) && $param['AType'] !== null) {
            $this->AType = $param['AType'];
        }

        if (array_key_exists('Size', $param) && $param['Size'] !== null) {
            $this->Size = $param['Size'];
        }
    }
}
