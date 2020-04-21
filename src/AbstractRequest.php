<?php

namespace shophy\campus;

/**
 * 抽象AbstractRequest类
 * @package shophy\campus;
 */
abstract class AbstractRequest extends AbstractModel
{
    /**
     * 调用方法
     * @return string GET OR POST
     */
    public function method()
    {
        return 'POST';
    }

    /**
     * 是否需要签名
     */
    public function isSign()
    {
        return true;
    }

    // 接口请求地址
    abstract public function path();
}

