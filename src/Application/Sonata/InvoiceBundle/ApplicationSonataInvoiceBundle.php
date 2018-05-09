<?php

namespace App\Application\Sonata\InvoiceBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ApplicationSonataInvoiceBundle
 *
 * @package App\Application\Sonata\InvoiceBundle
 */
class ApplicationSonataInvoiceBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataInvoiceBundle';
    }
}
