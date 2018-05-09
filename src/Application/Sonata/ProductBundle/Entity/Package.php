<?php

namespace App\Application\Sonata\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\ProductBundle\Entity\BasePackage as BasePackage;

/**
 * Class Package
 *
 * @package App\Application\Sonata\ProductBundle\Entity
 *
 * @ORM\Table(name="product__package")
 * @ORM\Entity()
 */
class Package extends BasePackage
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
