<?php

namespace App\Application\Sonata\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\InvoiceBundle\Entity\BaseInvoice as BaseInvoice;

/**
 * Class Invoice
 *
 * @package App\Application\Sonata\InvoiceBundle\Entity
 *
 * @ORM\Table(name="invoice__invoice")
 * @ORM\Entity()
 */
class Invoice extends BaseInvoice
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
