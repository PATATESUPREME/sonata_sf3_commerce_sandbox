<?php

namespace App\Application\Sonata\CacheBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ApplicationSonataCacheBundle
 *
 * @package Application\Sonata\CacheBundle
 */
class ApplicationSonataCacheBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataCacheBundle';
    }
}
