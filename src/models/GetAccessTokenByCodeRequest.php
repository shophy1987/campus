<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

/**
 * GetAccessTokenByCodeRequest请求参数结构体
 */
class GetAccessTokenByCodeRequest extends AbstractRequest
{
    // Action
    public $Action;
    // 创建应用时生成的SecretId ， 用来标识密钥对
    public $SecretId;
    // 创建应用时生成，注意保管，切勿泄漏
    public $SecretKey;
    // 前端传过来的Code ， 每个Code只能使用一次
    public $UserCode;

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
        if (array_key_exists('UserCode', $param) && $param['UserCode'] !== null) {
            $this->UserCode = $param['UserCode'];
        }
    }
}
