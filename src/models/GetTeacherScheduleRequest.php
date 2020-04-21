<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class GetTeacherScheduleRequest extends AbstractRequest
{
    // Action
    public $Action='';
    // 通过code换取的凭证AccessToken
    public $AccessToken='';
    // Id	int	是	学生id		123
    public $Id;
    // TermId	int	是	学期ID		123
    public $TermId;
    // WeekId	int	是	周次		123
    public $WeekId;
    // WeekDay	int	是	传1-7表示周1-周天,传0表示查询一周课表		1
    public $WeekDay;

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

        if (array_key_exists('Id', $param) && $param['Id'] !== null) {
            $this->Id = $param['Id'];
        }

        if (array_key_exists('TermId', $param) && $param['TermId'] !== null) {
            $this->TermId = $param['TermId'];
        }

        if (array_key_exists('WeekId', $param) && $param['WeekId'] !== null) {
            $this->WeekId = $param['WeekId'];
        }

        if (array_key_exists('WeekDay', $param) && $param['WeekDay'] !== null) {
            $this->WeekDay = $param['WeekDay'];
        }
    }
}
