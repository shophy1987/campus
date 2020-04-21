<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class PageInfo extends AbstractResponse
{
    // int	总页数	1
    public $Total;
    // int	当前页	1
    public $Page;
    // int	一页记录数	10
    public $Size;

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

        if (array_key_exists('Page', $param) && $param['Page'] !== null) {
            $this->Page = $param['Page'];
        }

        if (array_key_exists('Size', $param) && $param['Size'] !== null) {
            $this->Size = $param['Size'];
        }
    }
}
