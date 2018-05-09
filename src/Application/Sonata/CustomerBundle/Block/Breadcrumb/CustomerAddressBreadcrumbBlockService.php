<?php

namespace App\Application\Sonata\CustomerBundle\Block\Breadcrumb;

use App\Application\Sonata\UserBundle\Block\Breadcrumb\BaseUserProfileBreadcrumbBlockService;
use Sonata\BlockBundle\Block\BlockContextInterface;

/**
 * Class CustomerAddressBreadcrumbBlockService
 *
 * @package App\Application\Sonata\CustomerBundle\Block\Breadcrumb
 */
class CustomerAddressBreadcrumbBlockService extends BaseUserProfileBreadcrumbBlockService
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sonata.customer.block.breadcrumb_address';
    }

    /**
     * {@inheritdoc}
     */
    protected function getMenu(BlockContextInterface $blockContext)
    {
        $menu = $this->getRootMenu($blockContext);

        $menu->addChild('sonata_customer_addresses_breadcrumb', [
            'route' => 'sonata_customer_addresses',
            'extras' => ['translation_domain' => 'SonataCustomerBundle'],
        ]);

        return $menu;
    }
}
