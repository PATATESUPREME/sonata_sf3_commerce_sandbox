<?php

return [
    // Sensio
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => ['all' => true],

    // Symfony
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symfony\Bundle\WebServerBundle\WebServerBundle::class => ['dev' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle::class => ['all' => true],
    Symfony\Bundle\AclBundle\AclBundle::class => ['all' => true],
    Symfony\Cmf\Bundle\RoutingBundle\CmfRoutingBundle::class => ['all' => true],

    // Doctrine
    Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],

    // Friend of Symfony
    FOS\CommentBundle\FOSCommentBundle::class => ['all' => true],
    FOS\RestBundle\FOSRestBundle::class => ['all' => true],
    FOS\UserBundle\FOSUserBundle::class => ['all' => true],

    // Knp
    Knp\Bundle\MarkdownBundle\KnpMarkdownBundle::class => ['all' => true],
    Knp\Bundle\MenuBundle\KnpMenuBundle::class => ['all' => true],
    Knp\Bundle\PaginatorBundle\KnpPaginatorBundle::class => ['all' => true],

    // Nelmio
    Nelmio\ApiDocBundle\NelmioApiDocBundle::class => ['all' => true],

    // JMS
    JMS\SerializerBundle\JMSSerializerBundle::class => ['all' => true],

    // Liip
    Liip\MonitorBundle\LiipMonitorBundle::class => ['all' => true],

    // Spy
    Spy\TimelineBundle\SpyTimelineBundle::class => ['all' => true],

    // Ivory
    Ivory\CKEditorBundle\IvoryCKEditorBundle::class => ['all' => true],

    // Stof
    Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle::class => ['all' => true],

    // Sonata
    // Foundation
    Sonata\CoreBundle\SonataCoreBundle::class => ['all' => true],
    Sonata\NotificationBundle\SonataNotificationBundle::class => ['all' => true],
//    Sonata\FormatterBundle\SonataFormatterBundle::class => ['all' => true],
    Sonata\IntlBundle\SonataIntlBundle::class => ['all' => true],
    Sonata\CacheBundle\SonataCacheBundle::class => ['all' => true],
    Sonata\SeoBundle\SonataSeoBundle::class => ['all' => true],
    Sonata\DatagridBundle\SonataDatagridBundle::class => ['all' => true],
    Sonata\EasyExtendsBundle\SonataEasyExtendsBundle::class => ['all' => true],

    // Admin
    Sonata\AdminBundle\SonataAdminBundle::class => ['all' => true],
    Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle::class => ['all' => true],
    Sonata\TranslationBundle\SonataTranslationBundle::class => ['all' => true],

    // E-Commerce
    Sonata\CommentBundle\SonataCommentBundle::class => ['all' => true],
    Sonata\BasketBundle\SonataBasketBundle::class => ['all' => true],
    Sonata\CustomerBundle\SonataCustomerBundle::class => ['all' => true],
    Sonata\DeliveryBundle\SonataDeliveryBundle::class => ['all' => true],
    Sonata\InvoiceBundle\SonataInvoiceBundle::class => ['all' => true],
    Sonata\OrderBundle\SonataOrderBundle::class => ['all' => true],
    Sonata\PaymentBundle\SonataPaymentBundle::class => ['all' => true],
    Sonata\PriceBundle\SonataPriceBundle::class => ['all' => true],
    Sonata\ProductBundle\SonataProductBundle::class => ['all' => true],

    // Feature
    Sonata\BlockBundle\SonataBlockBundle::class => ['all' => true],
    Sonata\ClassificationBundle\SonataClassificationBundle::class => ['all' => true],
    Sonata\MediaBundle\SonataMediaBundle::class => ['all' => true],
    Sonata\TimelineBundle\SonataTimelineBundle::class => ['all' => true],
    Sonata\UserBundle\SonataUserBundle::class => ['all' => true],

    // Application
    App\Application\Sonata\BasketBundle\ApplicationSonataBasketBundle::class => ['all' => true],
    App\Application\Sonata\CacheBundle\ApplicationSonataCacheBundle::class => ['all' => true],
    App\Application\Sonata\ClassificationBundle\ApplicationSonataClassificationBundle::class => ['all' => true],
    App\Application\Sonata\CustomerBundle\ApplicationSonataCustomerBundle::class => ['all' => true],
    App\Application\Sonata\DeliveryBundle\ApplicationSonataDeliveryBundle::class => ['all' => true],
    App\Application\Sonata\InvoiceBundle\ApplicationSonataInvoiceBundle::class => ['all' => true],
    App\Application\Sonata\MediaBundle\ApplicationSonataMediaBundle::class => ['all' => true],
    App\Application\Sonata\NotificationBundle\ApplicationSonataNotificationBundle::class => ['all' => true],
    App\Application\Sonata\OrderBundle\ApplicationSonataOrderBundle::class => ['all' => true],
    App\Application\Sonata\PaymentBundle\ApplicationSonataPaymentBundle::class => ['all' => true],
    App\Application\Sonata\ProductBundle\ApplicationSonataProductBundle::class => ['all' => true],
    App\Application\Sonata\TimelineBundle\ApplicationSonataTimelineBundle::class => ['all' => true],
    App\Application\Sonata\UserBundle\ApplicationSonataUserBundle::class => ['all' => true],
];
