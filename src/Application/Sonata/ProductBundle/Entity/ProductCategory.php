<?php

namespace App\Application\Sonata\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\ProductBundle\Entity\BaseProductCategory as BaseProductCategory;

/**
 * Class ProductCategory
 *
 * @package App\Application\Sonata\ProductBundle\Entity
 *
 * @ORM\Table(name="product__product_category")
 * @ORM\Entity()
 */
class ProductCategory extends BaseProductCategory
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
     * Get id.
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }
}
