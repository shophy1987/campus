<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class UserGroupsResponse extends AbstractResponse
{
    // GroupIds	[]int	1:创建者3:超级管理员4:部门管理员5:应用管理员6:分校区管理员7:班主任:8:任课老师(辅导员)9:校长	[1,6]
    public $GroupIds;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('GroupIds', $param) && $param['GroupIds'] !== null) {
            $this->GroupIds = $param['GroupIds'];
        }
    }
}
