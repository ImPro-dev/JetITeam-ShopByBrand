<?php
/**
 *
 * Copyright © 2017 JetITeam. All rights reserved.
 * See COPYING.txt for license details.
 *
 */

namespace JetITeam\ShopByBrand\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface BrandSearchResultsInterface
 *
 * @package JetITeam\ShopByBrand\Api\Data
 */
interface BrandSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get blocks list.
     *
     * @return \JetITeam\ShopByBrand\Api\Data\BrandInterface[]
     */
    public function getItems();

    /**
     * Set blocks list.
     *
     * @param \JetITeam\ShopByBrand\Api\Data\BrandInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}