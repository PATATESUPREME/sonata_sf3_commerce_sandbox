<?php
namespace App\Application\Sonata\OrderBundle\Block\Breadcrumb;

use Sonata\BlockBundle\Block\BlockContextInterface;
use App\Application\Sonata\UserBundle\Block\Breadcrumb\BaseUserProfileBreadcrumbBlockService;

/**
 * Class UserOrderBreadcrumbBlockService
 *
 * @package App\Sonata\OrderBundle\Block\Breadcrumb
 */
class UserOrderBreadcrumbBlockService extends BaseUserProfileBreadcrumbBlockService
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'sonata.order.block.breadcrumb_order';
    }

    /**
     * {@inheritdoc}
     */
    protected function getMenu(BlockContextInterface $blockContext)
    {
        $menu = $this->getRootMenu($blockContext);

        $menu->addChild('sonata_order_user_breadcrumb', [
            'route' => 'sonata_order_index',
            'extras' => ['translation_domain' => 'SonataOrderBundle'],
        ]);

        return $menu;
    }
}
