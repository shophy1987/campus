<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetYearListRequest extends AbstractRequest
{
    // Action
    public $Action='';
    // 通过code换取的凭证AccessToken
    public $AccessToken='';
    // int	否		页码	0
    public $Page;
    // int	否		分页数	20
    public $Size;
    // string	否		名称（保留）
    public $Key;

    /**
     * 调用方法
     * @return string GET OR POST
     */
    public function method()
    {
        return 'GET';
    }

    /**
     * 是否需要签名
     */
    public function isSign()
    {
        return false;
    }

    // 接口请求地址
    public function path()
    {
        return '/campus/education';
    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('AccessToken', $param) && $param['AccessToken'] !== null) {
            $this->AccessToken = $param['AccessToken'];
        }

        if (array_key_exists('Page', $param) && $param['Page'] !== null) {
            $this->Page = $param['Page'];
        }

        if (array_key_exists('Size', $param) && $param['Size'] !== null) {
            $this->Size = $param['Size'];
        }

        if (array_key_exists('Key', $param) && $param['Key'] !== null) {
            $this->Key = $param['Key'];
        }
    }
}
