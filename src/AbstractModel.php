<?php

namespace shophy\campus;

use \ReflectionClass;

/**
 * 抽象model类
 * @package shophy\campus;
 */
abstract class AbstractModel
{
    /**
     * 内部实现，用户禁止调用
     */
    public function serialize()
    {
        $ret = $this->objSerialize($this);
		return $ret;
    }

    private function objSerialize($obj) {
        $memberRet = [];
        $ref = new ReflectionClass(get_class($obj));
        $memberList = $ref->getProperties();
        foreach ($memberList as $x => $member)
        {
            $name = ucfirst($member->getName());
            $member->setAccessible(true);
            $value = $member->getValue($obj);
            if ($value === null) {
                continue;
            }
            if ($value instanceof AbstractModel) {
                $memberRet[$name] = $this->objSerialize($value);
            } else if (is_array($value)) {
                $memberRet[$name] = $this->arraySerialize($value);
            } else {
                $memberRet[$name] = $value;
            }
        }
        return $memberRet;
    }

    private function arraySerialize($memberList) {
        $memberRet = [];
        foreach ($memberList as $name => $value)
        {
            if ($value === null) {
                continue;
            }
            if ($value instanceof AbstractModel) {
                $memberRet[$name] = $this->objSerialize($value);
            } elseif (is_array($value)) {
                $memberRet[$name] = $this->arraySerialize($value);
            }else {
                $memberRet[$name] = $value;
            }
        }
        return $memberRet;
    }

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

    abstract public function deserialize($param);

    /**
     * @param string $jsonString json格式的字符串
     */
    public function fromJsonString($jsonString)
    {
        $arr = json_decode($jsonString, true);
        $this->deserialize($arr);
    }

    public function toJsonString()
    {
        $r = $this->serialize();
        // it is an object rather than an array
        if (empty($r)) {
            return "{}";
        }
        return json_encode($r, JSON_UNESCAPED_UNICODE);
    }

    public function __call($member, $param)
    {
        $act = substr($member,0,3);
        $attr = substr($member,3);
        if ($act === "get") {
            return $this->$attr;
        } else if ($act === "set") {
            $this->$attr = $param[0];
        }
    }
}

