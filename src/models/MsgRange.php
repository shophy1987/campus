<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class MsgRange extends AbstractResponse
{
    // "AutoId": 1,
    public $AutoId;
    // "IsLeaf": true,
    public $IsLeaf;
    // "RangeId": 12,
    public $RangeId;
    // "Name": "发送范围",
    public $Name;
    // "RangeType": 1
    public $RangeType;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('AutoId', $param) && $param['AutoId'] !== null) {
            $this->AutoId = $param['AutoId'];
        }

        if (array_key_exists('IsLeaf', $param) && $param['IsLeaf'] !== null) {
            $this->IsLeaf = $param['IsLeaf'];
        }

        if (array_key_exists('RangeId', $param) && $param['RangeId'] !== null) {
            $this->RangeId = $param['RangeId'];
        }

        if (array_key_exists('Name', $param) && $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }
        if (array_key_exists('RangeType', $param) && $param['RangeType'] !== null) {
            $this->RangeType = $param['RangeType'];
        }
    }
}
