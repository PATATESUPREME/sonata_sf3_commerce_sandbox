<?php

namespace App\Application\Sonata\BasketBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ApplicationSonataBasketBundle
 *
 * @package App\Application\Sonata\BasketBundle
 */
class ApplicationSonataBasketBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataBasketBundle';
    }
}
