<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetMessageListRequest extends AbstractRequest
{
    // FromId      string      是     32    来源id  36fcw289ec
    public $FromId;
    // Page  int   是           页码    2
    public $Page;
    // Size  int   是           每页大小  10
    public $Size;
    // StartDate   string      是     10    开始日期  2019-01-01
    public $StartDate;
    // EndDate     string      是     10    结束日期  2019-01-20
    public $EndDate;

    /**
     * 调用方法
     * @return string GET OR POST
     */
    public function method()
    {
        return 'GET';
    }
    
    // 接口请求地址
    public function path()
    {
        return '/v2/message';
    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('FromId', $param) && $param['FromId'] !== null) {
            $this->FromId = $param['FromId'];
        }

        if (array_key_exists('Page', $param) && $param['Page'] !== null) {
            $this->Page = $param['Page'];
        }

        if (array_key_exists('Size', $param) && $param['Size'] !== null) {
            $this->Size = $param['Size'];
        }

        if (array_key_exists('StartDate', $param) && $param['StartDate'] !== null) {
            $this->StartDate = $param['StartDate'];
        }

        if (array_key_exists('EndDate', $param) && $param['EndDate'] !== null) {
            $this->EndDate = $param['EndDate'];
        }
    }
}
