<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class OpenParent extends AbstractResponse
{
    // StudentId   string      是     50    家长关联的学生id   58po4mj5443
    public $StudentId;
    // Relation    string      是     1     家长角色  "1"：爸爸 "2"：妈妈 "3"：爷爷 "4"：奶奶 "5"：姥爷 "6"：姥姥 "7"：家长
    public $Relation;
    // Name  string      是     50    家长姓名  李文浩
    public $Name;
    // Phone string      是     50    家长手机号 13800138000
    public $Phone;
    // Work  string      否     300   家长工作单位      东方明珠塔
    public $Work;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('StudentId', $param) && $param['StudentId'] !== null) {
            $this->StudentId = $param['StudentId'];
        }

        if (array_key_exists('Relation', $param) && $param['Relation'] !== null) {
            $this->Relation = $param['Relation'];
        }

        if (array_key_exists('Name', $param) && $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('Phone', $param) && $param['Phone'] !== null) {
            $this->Phone = $param['Phone'];
        }

        if (array_key_exists('Work', $param) && $param['Work'] !== null) {
            $this->Work = $param['Work'];
        }
    }
}
