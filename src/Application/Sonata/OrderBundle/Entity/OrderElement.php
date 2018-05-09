<?php

namespace App\Application\Sonata\OrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\OrderBundle\Entity\BaseOrderElement as BaseOrderElement;

/**
 * Class OrderElement
 *
 * @package App\Application\Sonata\OrderBundle\Entity
 *
 * @ORM\Table(name="order__order_element")
 * @ORM\Entity()
 */
class OrderElement extends BaseOrderElement
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
