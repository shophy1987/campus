<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

/**
 * ExtData请求参数结构体
 */
class ExtData extends AbstractResponse
{
    public $BgType;
    public $ChildId;
    public $MOrgId;
    public $MOrgUserId;
    public $RealOrgUserId;
    public $OrgType;
    public $SubType;
    public $OrgName;
    public $UserName;
    public $Avatar;
    public $AppId;
    public $IsSuperLogin;
    public $LoginFactors;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (is_string($param)) {
            $param = json_decode($param, true/*to array*/);
            if ($param === false)   return;
        }
        if (array_key_exists('BgType', $param) && $param['BgType'] !== null) {
            $this->BgType = $param['BgType'];
        }

        if (array_key_exists('ChildId', $param) && $param['ChildId'] !== null) {
            $this->ChildId = $param['ChildId'];
        }

        if (array_key_exists('MOrgId', $param) && $param['MOrgId'] !== null) {
            $this->MOrgId = $param['MOrgId'];
        }

        if (array_key_exists('MOrgUserId', $param) && $param['MOrgUserId'] !== null) {
            $this->MOrgUserId = $param['MOrgUserId'];
        }

        if (array_key_exists('RealOrgUserId', $param) && $param['RealOrgUserId'] !== null) {
            $this->RealOrgUserId = $param['RealOrgUserId'];
        }

        if (array_key_exists('OrgType', $param) && $param['OrgType'] !== null) {
            $this->OrgType = $param['OrgType'];
        }

        if (array_key_exists('SubType', $param) && $param['SubType'] !== null) {
            $this->SubType = $param['SubType'];
        }

        if (array_key_exists('OrgName', $param) && $param['OrgName'] !== null) {
            $this->OrgName = $param['OrgName'];
        }

        if (array_key_exists('UserName', $param) && $param['UserName'] !== null) {
            $this->UserName = $param['UserName'];
        }

        if (array_key_exists('Avatar', $param) && $param['Avatar'] !== null) {
            $this->Avatar = $param['Avatar'];
        }

        if (array_key_exists('AppId', $param) && $param['AppId'] !== null) {
            $this->AppId = $param['AppId'];
        }

        if (array_key_exists('IsSuperLogin', $param) && $param['IsSuperLogin'] !== null) {
            $this->IsSuperLogin = $param['IsSuperLogin'];
        }

        if (array_key_exists('LoginFactors', $param) && $param['LoginFactors'] !== null) {
            $this->LoginFactors = $param['LoginFactors'];
        }
    }
}
