<?php

namespace App\Application\Sonata\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\CustomerBundle\Entity\BaseAddress as BaseAddress;

/**
 * Class Address
 *
 * @package App\Application\Sonata\CustomerBundle\Entity
 *
 * @ORM\Table(name="customer__address")
 * @ORM\Entity()
 */
class Address extends BaseAddress
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
