<?php

namespace App\Application\Sonata\UserBundle\Block\Breadcrumb;

use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\SeoBundle\Block\Breadcrumb\BaseBreadcrumbMenuBlockService;

/**
 * Class BaseUserProfileBreadcrumbBlockService
 *
 * @package App\Application\Sonata\UserBundle\Block\Breadcrumb
 */
abstract class BaseUserProfileBreadcrumbBlockService extends BaseBreadcrumbMenuBlockService
{
    /**
     * {@inheritdoc}
     */
    protected function getRootMenu(BlockContextInterface $blockContext)
    {
        $menu = parent::getRootMenu($blockContext);
        $menu->addChild('sonata_user_profile_breadcrumb_index', array(
            'route' => 'sonata_user_profile_show',
            'extras' => array('translation_domain' => 'SonataUserBundle'),
        ));
        return $menu;
    }
}
