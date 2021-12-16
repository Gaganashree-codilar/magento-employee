<?php

namespace Codilar\Employee\Model\ResourceModel\Employee;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Codilar\Employee\Model\Employee as Model;
use Codilar\Employee\Model\ResourceModel\Employee as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
