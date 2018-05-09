<?php

namespace App\Application\Sonata\BasketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\BasketBundle\Entity\BaseBasket as BaseBasket;

/**
 * Class Basket
 *
 * @package App\Application\Sonata\BasketBundle\Entity
 *
 * @ORM\Table(name="basket__basket")
 * @ORM\Entity()
 */
class Basket extends BaseBasket
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
