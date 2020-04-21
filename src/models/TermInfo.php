<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class TermInfo extends AbstractResponse
{
    // int	学期Id	1
    public $TermId;
    // string	学期名称	学期名称
    public $Name;
    // array	学期时间段	[开始学年，结束学年]
    public $TermDate;

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

        if (array_key_exists('Name', $param) && $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('TermDate', $param) && $param['TermDate'] !== null) {
            $this->TermDate = $param['TermDate'];
        }
    }
}
