<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetCurrentTermResponse extends AbstractResponse
{
    // array	学期数组
    public $TermList;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('TermList', $param) && $param['TermList'] !== null) {
            $this->TermList = [];
            foreach ($param['TermList'] as $key => $value){
                $obj = new TermDetail();
                $obj->deserialize($value);
                array_push($this->TermList, $obj);
            }
        }
    }
}
