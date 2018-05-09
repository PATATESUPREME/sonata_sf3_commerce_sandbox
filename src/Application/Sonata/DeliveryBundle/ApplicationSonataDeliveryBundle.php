<?php

namespace App\Application\Sonata\DeliveryBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ApplicationSonataDeliveryBundle
 *
 * @package App\Application\Sonata\DeliveryBundle
 */
class ApplicationSonataDeliveryBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataDeliveryBundle';
    }
}
