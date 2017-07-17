<?php

namespace JetITeam\ShopByBrand\Controller\Adminhtml\Index;

use JetITeam\ShopByBrand\Api\Data\BrandInterface;

/**
 * Mass disable action.
 *
 * @package JetITeam\ShopByBrand\Controller\Adminhtml\Action
 */
class MassDisable extends MassStatus
{
    /**
     * Brand status.
     *
     * @var int
     */
    protected $_status = BrandInterface::STATUS_DISABLED;

    /**
     * Action success message.
     *
     * @var string
     */
    protected $_successMessage = 'A total of %1 record(s) have been disabled.';
}
