<?php

namespace App\Application\Sonata\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\CustomerBundle\Entity\BaseCustomer as BaseCustomer;

/**
 * Class Customer
 *
 * @package App\Application\Sonata\CustomerBundle\Entity
 *
 * @ORM\Table(name="customer__customer")
 * @ORM\Entity()
 */
class Customer extends BaseCustomer
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
