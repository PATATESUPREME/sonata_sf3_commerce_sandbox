<?php

namespace App\Application\Sonata\PaymentBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ApplicationSonataPaymentBundle
 *
 * @package App\Application\Sonata\PaymentBundle
 */
class ApplicationSonataPaymentBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataPaymentBundle';
    }
}
