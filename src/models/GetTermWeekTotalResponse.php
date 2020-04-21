<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetTermWeekTotalResponse extends AbstractResponse
{
    // 学期的总周数
    public $Total;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('Total', $param) && $param['Total'] !== null) {
            $this->Total = $param['Total'];
        }
    }
}
