<?php

namespace JetITeam\ShopByBrand\Block\Brand;

use Magento\Framework\View\Element\Template;
use JetITeam\ShopByBrand\Helper\Data as ShopByBrandHelper;
use JetITeam\ShopByBrand\Model\ResourceModel\Brand\CollectionFactory as BrandCollectionFactory;
use JetITeam\ShopByBrand\Block\AbstractBlock;
use Magento\Framework\View\Element\Template\Context;

/**
 * Brand list block.
 *
 * @package JetITeam\ShopByBrand\Block\Brand
 */
class BrandList extends AbstractBlock
{
    /**
     * @var BrandCollectionFactory
     */
    protected $_brandCollectionFactory;

    /**
     * BrandList constructor.
     *
     * @param BrandCollectionFactory $brandCollectionFactory
     * @param ShopByBrandHelper      $helper
     * @param Context                $context
     * @param array                  $data
     */
    public function __construct(
        BrandCollectionFactory $brandCollectionFactory,
        ShopByBrandHelper $helper,
        Template\Context $context,
        array $data = []
    ) {
        $this->_brandCollectionFactory = $brandCollectionFactory;
        parent::__construct($helper, $context, $data);
    }

    /**
     * Get brand collection.
     *
     * @return \JetITeam\ShopByBrand\Model\ResourceModel\Brand\Collection|\JetITeam\ShopByBrand\Model\Brand[]
     */
    public function getBrandCollection()
    {
        /** @var \JetITeam\ShopByBrand\Model\ResourceModel\Brand\Collection $collection */
        $collection = $this->_brandCollectionFactory->create();
        $collection->addWebsiteFilter()->addEnabledFilter();

        return $collection;
    }

    /**
     * Check fi has brands.
     *
     * @return bool
     */
    public function hasBrands()
    {
        return count($this->getBrandCollection()) > 0;
    }

    /**
     * Check is show name.
     *
     * @return bool
     */
    public function isShowName()
    {
        return $this->_helper->isShowListingName();
    }

    /**
     * Check is show logo.
     *
     * @return bool
     */
    public function isShowLogo()
    {
        return $this->_helper->isShowListingLogo();
    }

    /**
     * Check is show logo.
     *
     * @return bool
     */
    public function isShowShortDescription()
    {
        return $this->_helper->isShowListingShortDescription();
    }

    /**
     * @inheritdoc
     */
    protected function _toHtml()
    {
        if (!$this->hasBrands()) {
            return '';
        }

        return parent::_toHtml();
    }
}