<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class AddParentsResponse extends AbstractResponse
{
    /*注意: 该接口比较特殊，即使添加失败了，ErrorCode也是Ok, 请使用FailedIdx进行判断
    成功的样例
    {
        "ErrorCode":"Ok",
        "ErrorMsg":"",
        "RequestId":"123gfdjsdfdfad",
        "Data":{
            SuccessIdx:[],
            FailedIdx:[]
        }
    }
    失败的样例
    {
        "ErrorCode":"Ok",
        "ErrorMsg":"",
        "RequestId":"123gfdjsdfdfad",
        "Data":{
            SuccessIdx:[{"Idx":"1","OrgUserId":"113121"}],
            FailedIdx:[0] //说明王老师这个用户添加失败了
        }
    }*/

    // Success     SuccessIdx[]      添加的教师列表     
    public $Success;
    // Fails FailedIdx[] 失败的下标数组
    public $Fails;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('Success', $param) && $param['Success'] !== null) {
            $this->Success = [];
            foreach ($param['Success'] as $key => $value){
                $obj = new SuccessIdx();
                $obj->deserialize($value);
                array_push($this->Success, $obj);
            }
        }

        if (array_key_exists('Fails', $param) && $param['Fails'] !== null) {
            $this->Fails = [];
            foreach ($param['Fails'] as $key => $value){
                $obj = new FailedIdx();
                $obj->deserialize($value);
                array_push($this->Fails, $obj);
            }
        }
    }
}
