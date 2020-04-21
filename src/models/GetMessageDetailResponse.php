<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetMessageDetailResponse extends AbstractResponse
{
    // "Id": 520,
    public $Id;
    // "Title": "缴费通知",
    public $Title;
    // "OrgUserId": "58po4mj5443",
    public $OrgUserId;
    // "Name": "谭浩强",
    public $Name;
    // "Content": "抓紧时间交学费",
    public $Content;
    // "Status": 4,
    public $Status;
    // "StatusStr": "发送成功",
    public $StatusStr;
    // "Timer": "2020-01-01 01:02:03",
    public $Timer;
    // "SendTime": "2019-12-12",
    public $SendTime;
    // "OrgId": 1,
    public $OrgId;
    // "TaskId": "da345b099",
    public $TaskId;
    // "PushId": "5a52ab613",
    public $PushId;
    // "Tag": 1,
    public $Tag;
    // "TagLabel": "全校通知",
    public $TagLabel;
    // "CanRemark": 1,
    public $CanRemark;
    // "CanLike": 1,
    public $CanLike;
    // "IsSecret": 1,
    public $IsSecret;
    // "IsPc": 1,
    public $IsPc;
    // "Attachments": [{
    //     "Url": "https://www.demo.com",
    //     "Name": "Name",
    //     "Id": 12,
    //     "AType": "rz",
    //     "Size": "3M"
    // }],
    public $Attachments;
    // "Range": [{
    //     "AutoId": 1,
    //     "IsLeaf": true,
    //     "RangeId": 12,
    //     "Name": "发送范围",
    //     "RangeType": 1
    // }],
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

        if (array_key_exists('Content', $param) && $param['Content'] !== null) {
            $this->Content = $param['Content'];
        }

        if (array_key_exists('Status', $param) && $param['Status'] !== null) {
            $this->Status = $param['Status'];
        }

        if (array_key_exists('StatusStr', $param) && $param['StatusStr'] !== null) {
            $this->StatusStr = $param['StatusStr'];
        }

        if (array_key_exists('Timer', $param) && $param['Timer'] !== null) {
            $this->Timer = $param['Timer'];
        }

        if (array_key_exists('SendTime', $param) && $param['SendTime'] !== null) {
            $this->SendTime = $param['SendTime'];
        }

        if (array_key_exists('OrgId', $param) && $param['OrgId'] !== null) {
            $this->OrgId = $param['OrgId'];
        }

        if (array_key_exists('TaskId', $param) && $param['TaskId'] !== null) {
            $this->TaskId = $param['TaskId'];
        }

        if (array_key_exists('PushId', $param) && $param['PushId'] !== null) {
            $this->PushId = $param['PushId'];
        }

        if (array_key_exists('Tag', $param) && $param['Tag'] !== null) {
            $this->Tag = $param['Tag'];
        }

        if (array_key_exists('TagLabel', $param) && $param['TagLabel'] !== null) {
            $this->TagLabel = $param['TagLabel'];
        }

        if (array_key_exists('CanRemark', $param) && $param['CanRemark'] !== null) {
            $this->CanRemark = $param['CanRemark'];
        }

        if (array_key_exists('CanLike', $param) && $param['CanLike'] !== null) {
            $this->CanLike = $param['CanLike'];
        }

        if (array_key_exists('IsSecret', $param) && $param['IsSecret'] !== null) {
            $this->IsSecret = $param['IsSecret'];
        }

        if (array_key_exists('IsPc', $param) && $param['IsPc'] !== null) {
            $this->IsPc = $param['IsPc'];
        }

        if (array_key_exists('Attachments', $param) && $param['Attachments'] !== null) {
            $this->Attachments = [];
            foreach ($param['Attachments'] as $key => $value){
                $obj = new MsgAttachment();
                $obj->deserialize($value);
                array_push($this->Attachments, $obj);
            }
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
