<?php

namespace App\Application\Sonata\MediaBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ApplicationSonataMediaBundle
 *
 * @package App\Application\Sonata\MediaBundle
 */
class ApplicationSonataMediaBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataMediaBundle';
    }
}
