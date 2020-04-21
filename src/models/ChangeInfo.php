<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class ChangeInfo extends AbstractResponse
{
    // OrgId	int	是	机构ID	
    public $OrgId;
    // AppId	int	是	应用ID	
    public $AppId;
    // Seq	int	是	当前变化Seq	
    public $Seq;
    // OpType	int	是	变更的操作类型	1-新增 2-修改 3-删除
    public $OpType;
    // DataType	int	是	变更的数据类型	详见定义
    // DataType取值	说明	对应的Key	更新数据的接口
    // 1	机构安装应用信息变更		安装的时候调用已经授权的接口初始化所有数据
    // 2	用户信息变更	orgUserId	GetUsersInfo
    // 3	组织架构及属性变更	departmentId	Getdepartment
    // 4	组织架构上下级关系变更	departmentId	Getdepartment
    // 5	班级任课老师对应关系变更	OrgUserId	GetTeacherClass
    // 6	学校属性变更		GetOrgInfo
    public $DataType;
    // Key	string	是	应用通过此key调用API接口获取具体数据	"axdsd13"
    public $Key;


    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('OrgId', $param) && $param['OrgId'] !== null) {
            $this->OrgId = $param['OrgId'];
        }

        if (array_key_exists('AppId', $param) && $param['AppId'] !== null) {
            $this->AppId = $param['AppId'];
        }

        if (array_key_exists('Seq', $param) && $param['Seq'] !== null) {
            $this->Seq = $param['Seq'];
        }

        if (array_key_exists('OpType', $param) && $param['OpType'] !== null) {
            $this->OpType = $param['OpType'];
        }

        if (array_key_exists('DataType', $param) && $param['DataType'] !== null) {
            $this->DataType = $param['DataType'];
        }

        if (array_key_exists('Key', $param) && $param['Key'] !== null) {
            $this->Key = $param['Key'];
        }
    }
}
