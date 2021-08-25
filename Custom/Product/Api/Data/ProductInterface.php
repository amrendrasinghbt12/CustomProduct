<?php
/**
 * Copyright © Bluethink All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Custom\Product\Api\Data;

interface ProductInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    const VENDOR_NOTE = 'vendor_note';

    const CREATED_AT = 'created_at';

    const VENDOR_NUMBER = 'vendor_number';

    const SKU = 'sku';

    const PRODUCT_ID = 'product_id';

    const UPDATED_AT = 'updated_at';
    
    const STORE = 'store_id';

    /**
     * Get product_id
     * @return string|null
     */
    public function getProductId();

    /**
     * Set product_id
     * @param string $productId
     * @return \Custom\Product\Api\Data\ProductInterface
     */
    public function setProductId($productId);

    /**
     * Get sku
     * @return string|null
     */
    public function getSku();

    /**
     * Set sku
     * @param string $sku
     * @return \Custom\Product\Api\Data\ProductInterface
     */
    public function setSku($sku);

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Custom\Product\Api\Data\ProductExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     * @param \Custom\Product\Api\Data\ProductExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Custom\Product\Api\Data\ProductExtensionInterface $extensionAttributes
    );

    /**
     * Get vendor_number
     * @return string|null
     */
    public function getVendorNumber();

    /**
     * Set vendor_number
     * @param string $vendorNumber
     * @return \Custom\Product\Api\Data\ProductInterface
     */
    public function setVendorNumber($vendorNumber);

    /**
     * Get vendor_note
     * @return string|null
     */
    public function getVendorNote();

    /**
     * Set vendor_note
     * @param string $vendorNote
     * @return \Custom\Product\Api\Data\ProductInterface
     */
    public function setVendorNote($vendorNote);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Custom\Product\Api\Data\ProductInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated_at
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set updated_at
     * @param string $updatedAt
     * @return \Custom\Product\Api\Data\ProductInterface
     */
    public function setUpdatedAt($updatedAt);

    /**
     * Get store
     * @return string|null
     */
    public function getStoreId();

    /**
     * Set store
     * @param string $store
     * @return \Custom\Product\Api\Data\ProductInterface
     */
    public function setStoreId($storeId);
}

