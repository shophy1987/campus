<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class Message extends AbstractResponse
{
    // Id   520,
    public $Id;
    // Title   缴费通知
    public $Title;
    // OrgUserId   58po4mj5443
    public $OrgUserId;
    // Name   谭浩强
    public $Name;
    // Read   20/30
    public $Read;
    // Status   4
    public $Status;
    // StatusStr   "发送成功
    public $StatusStr;
    // SendTime   2019-12-12
    public $SendTime;
    // SendNum   30
    public $SendNum;
    // ReadNum   20
    public $ReadNum;
    // Timer   2020-01-01 01:02:03
    public $Timer;
    // Tag   1
    public $Tag;
    // TagLabel   全校通知
    public $TagLabel;
    // Range
    public $Range;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('Id', $param) && $param['Id'] !== null) {
            $this->Id = $param['Id'];
        }

        if (array_key_exists('Title', $param) && $param['Title'] !== null) {
            $this->Title = $param['Title'];
        }

        if (array_key_exists('OrgUserId', $param) && $param['OrgUserId'] !== null) {
            $this->OrgUserId = $param['OrgUserId'];
        }

        if (array_key_exists('Name', $param) && $param['Name'] !== null) {
            $this->Name = $param['Name'];
        }

        if (array_key_exists('Read', $param) && $param['Read'] !== null) {
            $this->Read = $param['Read'];
        }

        if (array_key_exists('Status', $param) && $param['Status'] !== null) {
            $this->Status = $param['Status'];
        }

        if (array_key_exists('StatusStr', $param) && $param['StatusStr'] !== null) {
            $this->StatusStr = $param['StatusStr'];
        }

        if (array_key_exists('SendTime', $param) && $param['SendTime'] !== null) {
            $this->SendTime = $param['SendTime'];
        }

        if (array_key_exists('SendNum', $param) && $param['SendNum'] !== null) {
            $this->SendNum = $param['SendNum'];
        }

        if (array_key_exists('ReadNum', $param) && $param['ReadNum'] !== null) {
            $this->ReadNum = $param['ReadNum'];
        }

        if (array_key_exists('Timer', $param) && $param['Timer'] !== null) {
            $this->Timer = $param['Timer'];
        }

        if (array_key_exists('Tag', $param) && $param['Tag'] !== null) {
            $this->Tag = $param['Tag'];
        }

        if (array_key_exists('TagLabel', $param) && $param['TagLabel'] !== null) {
            $this->TagLabel = $param['TagLabel'];
        }

        if (array_key_exists('Range', $param) && $param['Range'] !== null) {
            $this->Range = [];
            foreach ($param['Range'] as $key => $value){
                $obj = new MsgRange();
                $obj->deserialize($value);
                array_push($this->Range, $obj);
            }
        }
    }
}
