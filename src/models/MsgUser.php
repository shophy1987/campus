<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class MsgUser extends AbstractResponse
{
    // OrgUserId   string      是     50    用户id  58po4mj5443
    public $OrgUserId;
    // OrgUserName string      否     50    用户姓名，非必填，仅用于消息标题的个性化展示。 张老师
    public $OrgUserName;
    // ChildId     string      否     50    非必填，当OrgUserId为家长id时，ChildId为其孩子id，仅用于消息标题的个性化展示。     58po4mj6589
    public $ChildId;
    // ChildName   string      否     50    非必填，当OrgUserId为家长id时，ChildName为其孩子姓名，仅用于消息标题的个性化展示。   张三
    public $ChildName;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('OrgUserId', $param) && $param['OrgUserId'] !== null) {
            $this->OrgUserId = $param['OrgUserId'];
        }

        if (array_key_exists('OrgUserName', $param) && $param['OrgUserName'] !== null) {
            $this->OrgUserName = $param['OrgUserName'];
        }

        if (array_key_exists('ChildId', $param) && $param['ChildId'] !== null) {
            $this->ChildId = $param['ChildId'];
        }

        if (array_key_exists('ChildName', $param) && $param['ChildName'] !== null) {
            $this->ChildName = $param['ChildName'];
        }
    }
}
