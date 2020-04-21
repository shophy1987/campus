<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

/**
 * GetAccessTokenByCodeResponse请求参数结构体
 */
class GetAccessTokenByCodeResponse extends AbstractResponse
{
    // AccessToken
    public $AccessToken;
    // Token过期时间(秒)
    public $ExpireIn;
    // 当前登陆用户Session信息
    public $Session;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('AccessToken', $param) && $param['AccessToken'] !== null) {
            $this->UserCode = $param['AccessToken'];
        }

        if (array_key_exists('ExpireIn', $param) && $param['ExpireIn'] !== null) {
            $this->UserCode = $param['ExpireIn'];
        }

        if (array_key_exists('Session', $param) && $param['Session'] !== null) {
            $this->Session = new Session();
            $this->Session->deserialize($param['Session']);
        }
    }
}
