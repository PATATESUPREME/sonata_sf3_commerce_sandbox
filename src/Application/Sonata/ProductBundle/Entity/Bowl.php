<?php

namespace App\Application\Sonata\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Application\Sonata\ProductBundle\Entity\Product as BaseProduct;

/**
 * Class Bowl
 *
 * @package App\Application\Sonata\ProductBundle\Entity
 *
 * @ORM\Table(name="product__product")
 * @ORM\Entity()
 */
abstract class Bowl extends BaseProduct
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
