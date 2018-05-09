<?php

namespace App\Application\Sonata\ProductBundle\Provider;

use Sonata\ProductBundle\Model\BaseProductProvider;

/**
 * Class BowlProductProvider
 *
 * @package App\Application\Sonata\ProductBundle\Provider
 */
class BowlProductProvider extends BaseProductProvider
{
    /**
     * {@inheritDoc}
     */
    public function getBaseControllerName()
    {
        return 'SonataProductBundle:Bowl';
    }
}
