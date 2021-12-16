<?php

namespace Codilar\Employee\Controller\Employee;

use Magento\Framework\App\Action\Action;
use Codilar\Employee\Model\EmployeeFactory as ModelFactory;
use Codilar\Employee\Model\ResourceModel\Employee as ResourceModel;
use Magento\Framework\App\Action\Context;
use Codilar\Employee\Model\Employee;

class Update extends Action
{
    /**
     * @var ModelFactory
     */
    protected $modelFactory;

    /**
     * @var ResourceModel
     */
    protected $resourceModel;
    

    public function __construct(
        Context $context,
        ModelFactory $modelFactory,
        ResourceModel $resourceModel,
        Employee $employee
    )
    {
        parent::__construct($context);
        $this->modelFactory = $modelFactory;
        $this->employee=$employee;
        $this->resourceModel = $resourceModel;
    }

    public function execute()
    {
        $model=$this->modelFactory->create();
        $content=$this->getRequest()->getParams();
        $datamodel=$model->load($content['entity_id']);
        $model->setFirstname($content['firstname'] ?? null);
        $model->setLastname($content['lastname'] ?? null);
        $model->setEmail($content['email'] ?? null);
        $model->setMobile($content['mobile'] ?? null);
        $model->setDate($content['date'] ?? null);
        $model->setAddress($content['address'] ?? null);
        $this->resourceModel->save($model);
        $this->messageManager->addSuccessMessage(__('Employee Updated successfully'));
        return $this->resultRedirectFactory->create()->setPath('employee/employee/view');
    }
}