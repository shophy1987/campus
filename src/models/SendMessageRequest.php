<?php

namespace shophy\campus\models;

use shophy\campus\AbstractRequest;

class SendMessageRequest extends AbstractRequest
{
    // Title string      是     50    消息标题  国庆节放假通知
    public $Title;
    // Content     string      是     10000 消息内容  国庆节放假7天，请有关部门做好节前准备。
    public $Content;
    // Users Users[]     否     100   消息接收人列表,单次推送最多100个。Users和Departments至少一个不为空。    
    public $Users;
    // Departments Departments[]     否     5     消息接收架构列表,单次推送最多5个。**Departments参数只针对特定的FromId开放，未经授权的FromId调用无效。**      
    public $Departments;
    // FromId      string      是     32    由系统分配的唯一id，标识消息的来源，需联系开放平台管理员获取     qweiuw
    public $FromId;
    // AppId int   是           应用id，从开放平台获取      10000
    public $AppId;
    // AppMessageUrl     string      否           应用消息的跳转详情地址 
    public $AppMessageUrl;

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
        if (array_key_exists('Title', $param) && $param['Title'] !== null) {
            $this->Title = $param['Title'];
        }

        if (array_key_exists('Content', $param) && $param['Content'] !== null) {
            $this->Content = $param['Content'];
        }

        if (array_key_exists('Users', $param) && $param['Users'] !== null) {
            $this->Users = [];
            foreach ($param['Users'] as $key => $value){
                $obj = new MsgUser();
                $obj->deserialize($value);
                array_push($this->Users, $obj);
            }
        }

        if (array_key_exists('Departments', $param) && $param['Departments'] !== null) {
            $this->Departments = [];
            foreach ($param['Departments'] as $key => $value){
                $obj = new MsgDepartment();
                $obj->deserialize($value);
                array_push($this->Departments, $obj);
            }
        }

        if (array_key_exists('FromId', $param) && $param['FromId'] !== null) {
            $this->FromId = $param['FromId'];
        }

        if (array_key_exists('AppId', $param) && $param['AppId'] !== null) {
            $this->AppId = $param['AppId'];
        }

        if (array_key_exists('AppMessageUrl', $param) && $param['AppMessageUrl'] !== null) {
            $this->AppMessageUrl = $param['AppMessageUrl'];
        }
    }
}
