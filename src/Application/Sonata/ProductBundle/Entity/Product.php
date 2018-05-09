<?php

namespace App\Application\Sonata\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\ProductBundle\Entity\BaseProduct as BaseProduct;

/**
 * Class Product
 *
 * @package App\Application\Sonata\ProductBundle\Entity
 *
 * @ORM\Table(name="product__product")
 * @ORM\Entity()
 * @ORM\InheritanceType( "SINGLE_TABLE" )
 * @ORM\DiscriminatorColumn( name = "discriminator", type = "string" )
 * @ORM\DiscriminatorMap( { "product" = "Product", "bowl" = "Bowl" } )
 */
class Product extends BaseProduct
{
    /**
     * @var int $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \App\Application\Sonata\MediaBundle\Entity\Media $image
     *
     * @ORM\OneToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media")
     */
    protected $image;

    /**
     * Get id.
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }
}
