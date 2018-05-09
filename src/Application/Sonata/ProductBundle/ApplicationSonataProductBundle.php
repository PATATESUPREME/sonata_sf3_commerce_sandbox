<?php

namespace App\Application\Sonata\ProductBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ApplicationSonataProductBundle
 *
 * @package App\Application\Sonata\ProductBundle
 */
class ApplicationSonataProductBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataProductBundle';
    }
}
