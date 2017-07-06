<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artists
 *
 * @ORM\Table(name="artists")
 * @ORM\Entity
 */
class Artists
{
    /**
     * @var string
     *
     * @ORM\Column(name="artist_name", type="string", length=255, nullable=false)
     */
    private $artistName;

    /**
     * @var string
     *
     * @ORM\Column(name="artist_image", type="text", length=65535, nullable=false)
     */
    private $artistImage;

    /**
     * @var string
     *
     * @ORM\Column(name="territory", type="string", length=5, nullable=false)
     */
    private $territory;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=3, nullable=false)
     */
    private $language;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

