<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TopSingles
 *
 * @ORM\Table(name="top_singles")
 * @ORM\Entity
 */
class TopSingles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prod_id", type="integer", nullable=true)
     */
    private $prodId;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_type", type="string", length=45, nullable=true)
     */
    private $providerType;

    /**
     * @var string
     *
     * @ORM\Column(name="territory", type="string", length=45, nullable=true)
     */
    private $territory;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=true)
     */
    private $modified;

    /**
     * @var string
     *
     * @ORM\Column(name="artist_name", type="string", length=255, nullable=true)
     */
    private $artistName;

    /**
     * @var integer
     *
     * @ORM\Column(name="album", type="integer", nullable=true)
     */
    private $album;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=3, nullable=true)
     */
    private $language;

    /**
     * @var integer
     *
     * @ORM\Column(name="sortId", type="integer", nullable=true)
     */
    private $sortid;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

