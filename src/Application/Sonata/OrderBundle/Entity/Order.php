<?php

namespace App\Application\Sonata\OrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\OrderBundle\Entity\BaseOrder as BaseOrder;

/**
 * Class Order
 *
 * @package App\Application\Sonata\OrderBundle\Entity
 *
 * @ORM\Table(name="order__order")
 * @ORM\Entity()
 */
class Order extends BaseOrder
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
