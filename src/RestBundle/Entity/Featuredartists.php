<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Featuredartists
 *
 * @ORM\Table(name="featuredartists")
 * @ORM\Entity
 */
class Featuredartists
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
     * @var integer
     *
     * @ORM\Column(name="album", type="bigint", nullable=false)
     */
    private $album;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=3, nullable=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_type", type="string", length=10, nullable=false)
     */
    private $providerType = 'sony';

    /**
     * @var boolean
     *
     * @ORM\Column(name="flag", type="boolean", nullable=true)
     */
    private $flag = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

