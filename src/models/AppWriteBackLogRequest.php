<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class AppWriteBackLogRequest extends AbstractRequest
{
    // BacklogID	int	是	应用注册待办接口返回的BacklogID
    public $BacklogID;
    // AppID	int	是	应用id
    public $AppID;
    // OrgId	int	是	组织id
    public $OrgId;
    // OrgUserId	int	是	组织用户id
    public $OrgUserId;
    // BadgeNumber	int	是	待办条数
    public $BadgeNumber;
    // StudentAlert	int	否	是否在学生平台显示该待办信息
    public $StudentAlert;
    // TeacherAlert	int	否	是否在教师工作台显示该待办信息
    public $TeacherAlert;
    // WxappAlert	int	否	是否在微信平台显示该待办信息
    public $WxappAlert;
    // AppType	int	是	应用是h5还是微信小程序（1 小程序 2 h5）
    public $AppType;
    // Expire	int	否	过期时间（时间戳，以秒为单位）
    public $Expire;

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
        return '/v2/backlog';
    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('BacklogID', $param) && $param['BacklogID'] !== null) {
            $this->BacklogID = $param['BacklogID'];
        }

        if (array_key_exists('AppID', $param) && $param['AppID'] !== null) {
            $this->AppID = $param['AppID'];
        }

        if (array_key_exists('OrgId', $param) && $param['OrgId'] !== null) {
            $this->OrgId = $param['OrgId'];
        }

        if (array_key_exists('OrgUserId', $param) && $param['OrgUserId'] !== null) {
            $this->OrgUserId = $param['OrgUserId'];
        }

        if (array_key_exists('BadgeNumber', $param) && $param['BadgeNumber'] !== null) {
            $this->BadgeNumber = $param['BadgeNumber'];
        }

        if (array_key_exists('StudentAlert', $param) && $param['StudentAlert'] !== null) {
            $this->StudentAlert = $param['StudentAlert'];
        }

        if (array_key_exists('TeacherAlert', $param) && $param['TeacherAlert'] !== null) {
            $this->TeacherAlert = $param['TeacherAlert'];
        }

        if (array_key_exists('WxappAlert', $param) && $param['WxappAlert'] !== null) {
            $this->WxappAlert = $param['WxappAlert'];
        }

        if (array_key_exists('AppType', $param) && $param['AppType'] !== null) {
            $this->AppType = $param['AppType'];
        }

        if (array_key_exists('Expire', $param) && $param['Expire'] !== null) {
            $this->Expire = $param['Expire'];
        }
    }
}
