<?php

namespace App\Application\Sonata\OrderBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ApplicationSonataOrderBundle
 *
 * @package App\Application\Sonata\OrderBundle
 */
class ApplicationSonataOrderBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataOrderBundle';
    }
}
