<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class DepartmentId extends AbstractResponse
{
    // Id	int	是	50	架构id	550
    public $Id;

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
    }
}
