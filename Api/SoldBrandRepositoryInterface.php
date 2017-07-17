<?php

namespace JetITeam\ShopByBrand\Api;

use JetITeam\ShopByBrand\Api\Data\SoldBrandInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface SoldBrandRepositoryInterface
 *
 * @package JetITeam\ShopByBrand\Api
 */
interface SoldBrandRepositoryInterface
{
    /**
     * Save sold brand.
     *
     * @param \JetITeam\ShopByBrand\Api\Data\SoldBrandInterface $soldBrand
     * @return \JetITeam\ShopByBrand\Api\Data\SoldBrandInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(SoldBrandInterface $soldBrand);

    /**
     * Retrieve sold brand.
     *
     * @param int $soldBrandId
     * @return \JetITeam\ShopByBrand\Api\Data\SoldBrandInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($soldBrandId);

    /**
     * Retrieve sold brands matching the specified criteria.
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return \JetITeam\ShopByBrand\Api\Data\BrandSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(SearchCriteriaInterface $searchCriteria);

    /**
     * Delete sold brand.
     *
     * @param \JetITeam\ShopByBrand\Api\Data\SoldBrandInterface $soldBrand
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(SoldBrandInterface $soldBrand);

    /**
     * Delete sold brand by ID.
     *
     * @param int $soldBrandId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($soldBrandId);
}