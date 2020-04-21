<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class RefreshAccessTokenRequest extends AbstractRequest
{
    // Action
    public $Action='';
    // 创建应用时生成的SecretId ， 用来标识密钥对
    public $SecretId='';
    // 创建应用时生成，注意保管，切勿泄漏
    public $SecretKey='';
    // 用Code换的AccessToken
    public $CurrentAccessToken;

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
        return '/v2/openlogin';
    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('CurrentAccessToken', $param) && $param['CurrentAccessToken'] !== null) {
            $this->CurrentAccessToken = $param['CurrentAccessToken'];
        }
    }
}
