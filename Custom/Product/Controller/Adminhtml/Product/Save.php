<?php
/**
 * Copyright © Bluethink All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Custom\Product\Controller\Adminhtml\Product;

use Magento\Framework\Exception\LocalizedException;

class Save extends \Magento\Backend\App\Action
{

    protected $dataPersistor;
    
    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
    ) {
        $this->dataPersistor = $dataPersistor;
        parent::__construct($context);
    }

    /**
     * Save action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();
        if ($data) {
            
            $id = $this->getRequest()->getParam('product_id');
        
            $model = $this->_objectManager->create(\Custom\Product\Model\Product::class)->load($id);
            if (!$model->getId() && $id) {
                $this->messageManager->addErrorMessage(__('This Product no longer exists.'));
                return $resultRedirect->setPath('*/*/');
            }

            $data['store_id']=implode(',',$data['store_id']);
            $model->setData($data);
        
            $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/datta.log');
            $logger = new \Zend\Log\Logger();
            $logger->addWriter($writer);
            $logger->info(print_r($data,true));
            $logger->info(print_r($data['store_id'],true));

            try {
                $model->save();
                $this->messageManager->addSuccessMessage(__('You saved the Product.'));
                $this->dataPersistor->clear('custom_product_product');
        
                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['product_id' => $model->getId()]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the Product.'));
            }
        
            $this->dataPersistor->set('custom_product_product', $data);
            return $resultRedirect->setPath('*/*/edit', ['product_id' => $this->getRequest()->getParam('product_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}

