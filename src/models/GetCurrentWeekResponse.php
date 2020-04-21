<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetCurrentWeekResponse extends AbstractResponse
{
    // 如果当前日期不在学期时间范围内, 返回 0
    public $Week;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('Week', $param) && $param['Week'] !== null) {
            $this->Week = $param['Week'];
        }
    }
}
