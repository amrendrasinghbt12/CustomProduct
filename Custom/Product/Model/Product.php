<?php
/**
 * Copyright © Bluethink All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Custom\Product\Model;

use Custom\Product\Api\Data\ProductInterface;
use Custom\Product\Api\Data\ProductInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;

class Product extends \Magento\Framework\Model\AbstractModel
{

    protected $dataObjectHelper;

    protected $productDataFactory;

    protected $_eventPrefix = 'custom_product_product';

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param ProductInterfaceFactory $productDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \Custom\Product\Model\ResourceModel\Product $resource
     * @param \Custom\Product\Model\ResourceModel\Product\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        ProductInterfaceFactory $productDataFactory,
        DataObjectHelper $dataObjectHelper,
        \Custom\Product\Model\ResourceModel\Product $resource,
        \Custom\Product\Model\ResourceModel\Product\Collection $resourceCollection,
        array $data = []
    ) {
        $this->productDataFactory = $productDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve product model with product data
     * @return ProductInterface
     */
    public function getDataModel()
    {
        $productData = $this->getData();
        
        $productDataObject = $this->productDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $productDataObject,
            $productData,
            ProductInterface::class
        );
        
        return $productDataObject;
    }
}

