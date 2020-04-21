<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetMessageDetailRequest extends AbstractRequest
{
    // MessageId	int	是		消息id	19527
    public $MessageId;

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
        if (array_key_exists('MessageId', $param) && $param['MessageId'] !== null) {
            $this->MessageId = $param['MessageId'];
        }
    }
}
