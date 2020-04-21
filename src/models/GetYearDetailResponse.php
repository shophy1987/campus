<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetYearDetailResponse extends AbstractResponse
{
    // int	学年Id	12
    public $YearId;
    // string	开始学年	2015
    public $StartYear;
    // string	结束学年	2018
    public $EndYear;
    // array 学期数组
    public $Terms;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('YearId', $param) && $param['YearId'] !== null) {
            $this->YearId = $param['YearId'];
        }

        if (array_key_exists('StartYear', $param) && $param['StartYear'] !== null) {
            $this->StartYear = $param['StartYear'];
        }

        if (array_key_exists('EndYear', $param) && $param['EndYear'] !== null) {
            $this->EndYear = $param['EndYear'];
        }

        if (array_key_exists('Terms', $param) && $param['Terms'] !== null) {
            $this->Terms = [];
            foreach ($param['Terms'] as $key => $value){
                $obj = new TermInfo();
                $obj->deserialize($value);
                array_push($this->Terms, $obj);
            }
        }
    }
}
