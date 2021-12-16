<?php

namespace Codilar\Employee\Model;

use Magento\Framework\Model\AbstractModel;
use Codilar\Employee\Model\ResourceModel\Employee as ResourceModel;

class Employee extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
