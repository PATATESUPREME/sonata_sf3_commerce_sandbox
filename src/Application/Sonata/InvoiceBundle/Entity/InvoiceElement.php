<?php

namespace App\Application\Sonata\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\InvoiceBundle\Entity\BaseInvoiceElement as BaseInvoiceElement;

/**
 * Class InvoiceElement
 *
 * @package App\Application\Sonata\InvoiceBundle\Entity
 *
 * @ORM\Table(name="invoice__invoice_element")
 * @ORM\Entity()
 */
class InvoiceElement extends BaseInvoiceElement
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
