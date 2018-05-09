<?php

namespace App\Application\Sonata\PaymentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\PaymentBundle\Entity\BaseTransaction as BaseTransaction;

/**
 * Class Transaction
 *
 * @package App\Application\Sonata\PaymentBundle\Entity
 *
 * @ORM\Table(name="payment__transaction")
 * @ORM\Entity()
 */
class Transaction extends BaseTransaction
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
