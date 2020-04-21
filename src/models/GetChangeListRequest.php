<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetChangeListRequest extends AbstractRequest
{
    // Seq	是	Integer	本地保存的已获取变化数据的最大序号
    public $Seq;

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
        return '/v2/notify';
    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('Seq', $param) && $param['Seq'] !== null) {
            $this->Seq = $param['Seq'];
        }
    }
}
