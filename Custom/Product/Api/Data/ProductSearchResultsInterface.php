<?php
/**
 * Copyright © Bluethink All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Custom\Product\Api\Data;

interface ProductSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get product list.
     * @return \Custom\Product\Api\Data\ProductInterface[]
     */
    public function getItems();

    /**
     * Set sku list.
     * @param \Custom\Product\Api\Data\ProductInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

