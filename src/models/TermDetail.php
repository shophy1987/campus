<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class TermDetail extends AbstractResponse
{
    // int	学期Id	1
    public $TermId;
    // string	学期名称	学期名称
    public $TermName;
    // string	开始时间	2019/09/01
    public $StartDate;
    // string	结束时间	2019/12/31
    public $EndDate;
    // string	创建时间	2019/10/31
    public $CreateDate;
    // int	学年id	76
    public $YearId;
    // string	学年名	2019-2020
    public $Label;
    // int	班级ID	1117985
    public $ClassId;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('TermId', $param) && $param['TermId'] !== null) {
            $this->TermId = $param['TermId'];
        }

        if (array_key_exists('TermName', $param) && $param['TermName'] !== null) {
            $this->TermName = $param['TermName'];
        }

        if (array_key_exists('StartDate', $param) && $param['StartDate'] !== null) {
            $this->StartDate = $param['StartDate'];
        }

        if (array_key_exists('EndDate', $param) && $param['EndDate'] !== null) {
            $this->EndDate = $param['EndDate'];
        }

        if (array_key_exists('CreateDate', $param) && $param['CreateDate'] !== null) {
            $this->CreateDate = $param['CreateDate'];
        }

        if (array_key_exists('YearId', $param) && $param['YearId'] !== null) {
            $this->YearId = $param['YearId'];
        }

        if (array_key_exists('Label', $param) && $param['Label'] !== null) {
            $this->TermDate = $param['Label'];
        }

        if (array_key_exists('ClassId', $param) && $param['ClassId'] !== null) {
            $this->ClassId = $param['ClassId'];
        }
    }
}
