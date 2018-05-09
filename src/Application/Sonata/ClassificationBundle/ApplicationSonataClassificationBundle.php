<?php

namespace App\Application\Sonata\ClassificationBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ApplicationSonataClassificationBundle
 *
 * @package App\Application\Sonata\ClassificationBundle
 */
class ApplicationSonataClassificationBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataClassificationBundle';
    }
}
