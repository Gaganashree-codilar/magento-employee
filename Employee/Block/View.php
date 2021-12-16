<?php

namespace Codilar\Employee\Block;

use Magento\Framework\View\Element\Template;
use Codilar\Employee\Model\Employee;
use Codilar\Employee\Model\ResourceModel\Employee\CollectionFactory;

class View extends Template
{
    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @return employee[]
     */
    public function getAllEmployees()
    {
        $collection = $this->collectionFactory->create();
         return $collection->getItems();
    }
    public function getFormUrl()
    {
        return $this->getUrl('employee/employee/Form');
    }

    public function getAddUrl()
    {
        return $this->getUrl('employee/employee/Add');
    }
    public function getDeleteUrl()
    {
    return $this->getUrl('employee/employee/Delete');
    }
    public function getEditUrl()
    {
    return $this->getUrl('employee/employee/Edit');
    }
    public function getViewUrl()
    {
    return $this->getUrl('employee/employee/View');
    }
     public function getUpdateUrl()
    {
    return $this->getUrl('employee/employee/Update');
    }
    public function getUpdateValues()
    {
        $id=$this->getRequest()->getParam('entity_id');
        $collection=$this->collectionFactory->create();
        return $collection->getItembyId($id);
    }
    public function getDetailsUrl()
    {
    return $this->getUrl('employee/employee/Details');
    }
    public function getEmployees()
    {
        $id=$this->getRequest()->getParam('entity_id');
        $collection=$this->collectionFactory->create();
        return $collection->getItembyId($id);
    }
    
}