<?php
/**
 * Copyright © Bluethink All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Custom\Product\Model\Data;

use Custom\Product\Api\Data\ProductInterface;

class Product extends \Magento\Framework\Api\AbstractExtensibleObject implements ProductInterface
{

    /**
     * Get product_id
     * @return string|null
     */
    public function getProductId()
    {
        return $this->_get(self::PRODUCT_ID);
    }

    /**
     * Set product_id
     * @param string $productId
     * @return \Custom\Product\Api\Data\ProductInterface
     */
    public function setProductId($productId)
    {
        return $this->setData(self::PRODUCT_ID, $productId);
    }

    /**
     * Get sku
     * @return string|null
     */
    public function getSku()
    {
        return $this->_get(self::SKU);
    }

    /**
     * Set sku
     * @param string $sku
     * @return \Custom\Product\Api\Data\ProductInterface
     */
    public function setSku($sku)
    {
        return $this->setData(self::SKU, $sku);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Custom\Product\Api\Data\ProductExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param \Custom\Product\Api\Data\ProductExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Custom\Product\Api\Data\ProductExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }

    /**
     * Get vendor_number
     * @return string|null
     */
    public function getVendorNumber()
    {
        return $this->_get(self::VENDOR_NUMBER);
    }

    /**
     * Set vendor_number
     * @param string $vendorNumber
     * @return \Custom\Product\Api\Data\ProductInterface
     */
    public function setVendorNumber($vendorNumber)
    {
        return $this->setData(self::VENDOR_NUMBER, $vendorNumber);
    }

    /**
     * Get vendor_note
     * @return string|null
     */
    public function getVendorNote()
    {
        return $this->_get(self::VENDOR_NOTE);
    }

    /**
     * Set vendor_note
     * @param string $vendorNote
     * @return \Custom\Product\Api\Data\ProductInterface
     */
    public function setVendorNote($vendorNote)
    {
        return $this->setData(self::VENDOR_NOTE, $vendorNote);
    }

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->_get(self::CREATED_AT);
    }

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Custom\Product\Api\Data\ProductInterface
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Get updated_at
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->_get(self::UPDATED_AT);
    }

    /**
     * Set updated_at
     * @param string $updatedAt
     * @return \Custom\Product\Api\Data\ProductInterface
     */
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }

    /**
     * Get store
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->_get(self::STORE);
    }

    /**
     * Set store
     * @param string $store
     * @return \Custom\Product\Api\Data\ProductInterface
     */
    public function setStoreId($storeId)
    {
        return $this->setData(self::STORE, $storeId);
    }
}

