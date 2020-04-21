<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class WeekInfo extends AbstractResponse
{
    // string 开始日期 2019-10-14
    public $StartDate;
    // string 开始日期 2019-10-20
    public $EndDate;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('StartDate', $param) && $param['StartDate'] !== null) {
            $this->StartDate = $param['StartDate'];
        }

        if (array_key_exists('EndDate', $param) && $param['EndDate'] !== null) {
            $this->EndDate = $param['EndDate'];
        }
    }
}
