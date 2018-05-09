<?php

namespace App\Application\Sonata\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\ProductBundle\Entity\BaseDelivery as BaseDelivery;

/**
 * Class Delivery
 *
 * @package App\Application\Sonata\ProductBundle\Entity
 *
 * @ORM\Table(name="product__delivery")
 * @ORM\Entity()
 */
class Delivery extends BaseDelivery
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
