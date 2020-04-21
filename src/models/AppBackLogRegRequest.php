<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class AppBackLogRegRequest extends AbstractRequest
{
    // AppID	int	必填	应用ID
    public $AppID;
    // BacklogName	string	必填	待办事项
    public $BacklogName;
    // BacklogTitle	string	必填	推送文案
    public $BacklogTitle;
    // BacklogDesc	string	必填	待办描述
    public $BacklogDesc;
    // WxappUrl	string	必填	微信小程序待办回调地址
    public $WxappUrl;
    // StudentUrl	string	必填	学生平台待办回调地址
    public $StudentUrl;
    // TeacherUrl	string	必填	教师工作台待办回调地址
    public $TeacherUrl;

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
        if (array_key_exists('AppID', $param) && $param['AppID'] !== null) {
            $this->AppID = $param['AppID'];
        }

        if (array_key_exists('BacklogName', $param) && $param['BacklogName'] !== null) {
            $this->BacklogName = $param['BacklogName'];
        }
        
        if (array_key_exists('BacklogTitle', $param) && $param['BacklogTitle'] !== null) {
            $this->BacklogTitle = $param['BacklogTitle'];
        }

        if (array_key_exists('BacklogDesc', $param) && $param['BacklogDesc'] !== null) {
            $this->BacklogDesc = $param['BacklogDesc'];
        }

        if (array_key_exists('WxappUrl', $param) && $param['WxappUrl'] !== null) {
            $this->WxappUrl = $param['WxappUrl'];
        }

        if (array_key_exists('StudentUrl', $param) && $param['StudentUrl'] !== null) {
            $this->StudentUrl = $param['StudentUrl'];
        }

        if (array_key_exists('TeacherUrl', $param) && $param['TeacherUrl'] !== null) {
            $this->TeacherUrl = $param['TeacherUrl'];
        }
    }
}
