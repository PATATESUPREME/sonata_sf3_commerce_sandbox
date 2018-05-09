<?php

namespace App\Application\Sonata\CustomerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ApplicationSonataCustomerBundle
 *
 * @package App\Application\Sonata\CustomerBundle
 */
class ApplicationSonataCustomerBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataCustomerBundle';
    }
}
