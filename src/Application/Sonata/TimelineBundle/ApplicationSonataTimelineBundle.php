<?php

namespace App\Application\Sonata\TimelineBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ApplicationSonataTimelineBundle
 *
 * @package App\Application\Sonata\TimelineBundle
 */
class ApplicationSonataTimelineBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'SonataTimelineBundle';
    }
}
