<?php

namespace App\Application\Sonata\ClassificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\ClassificationBundle\Entity\BaseCollection as BaseCollection;

/**
 * Class Collection
 *
 * @package App\Application\Sonata\ClassificationBundle\Entity
 *
 * @ORM\Table(name="classification__collection")
 * @ORM\Entity()
 */
class Collection extends BaseCollection
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
     * @var \App\Application\Sonata\MediaBundle\Entity\Media $media
     *
     * @ORM\ManyToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", inversedBy="collections")
     */
    protected $media;

    /**
     * @var \Doctrine\Common\Collections\Collection|\App\Application\Sonata\ProductBundle\Entity\ProductCollection[]
     *
     * @ORM\OneToMany(targetEntity="App\Application\Sonata\ProductBundle\Entity\ProductCollection", mappedBy="collection")
     */
    protected $productCollection;

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
