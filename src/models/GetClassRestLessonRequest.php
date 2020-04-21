<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetClassRestLessonRequest extends AbstractRequest
{
    // Action
    public $Action='';
    // 通过code换取的凭证AccessToken
    public $AccessToken='';
    // ClassId	int	是	班级组织架构ID		123
    public $ClassId;

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

        if (array_key_exists('ScheduleId', $param) && $param['ScheduleId'] !== null) {
            $this->ScheduleId = $param['ScheduleId'];
        }
    }
}
