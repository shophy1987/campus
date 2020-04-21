<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetDepartmentListByTagRequest extends AbstractRequest
{
    // Tag   Int   是     64    组织架构含义，目前仅学生架构有效。学部：2，学院：3，年级：4，班级：5，系别：6，专业：7，学年：8，学期：9    1
    public $Tag;
    // PageIndex   Int   是     64    页码    1
    public $PageIndex;
    // PageSize    Int   是     64    数量    1
    public $PageSize;

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
        return '/v2/user';
    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('Tag', $param) && $param['Tag'] !== null) {
            $this->Tag = $param['Tag'];
        }

        if (array_key_exists('PageIndex', $param) && $param['PageIndex'] !== null) {
            $this->PageIndex = $param['PageIndex'];
        }

        if (array_key_exists('PageSize', $param) && $param['PageSize'] !== null) {
            $this->PageSize = $param['PageSize'];
        }
    }
}
