<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wishlists
 *
 * @ORM\Table(name="wishlists", indexes={@ORM\Index(name="library_id", columns={"library_id"}), @ORM\Index(name="patron_id", columns={"patron_id"})})
 * @ORM\Entity
 */
class Wishlists
{
    /**
     * @var string
     *
     * @ORM\Column(name="library_id", type="string", length=36, nullable=false)
     */
    private $libraryId;

    /**
     * @var string
     *
     * @ORM\Column(name="patron_id", type="string", length=36, nullable=false)
     */
    private $patronId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ProdID", type="bigint", nullable=false)
     */
    private $prodid;

    /**
     * @var string
     *
     * @ORM\Column(name="ProductID", type="string", length=16, nullable=false)
     */
    private $productid;

    /**
     * @var string
     *
     * @ORM\Column(name="ISRC", type="string", length=12, nullable=false)
     */
    private $isrc;

    /**
     * @var string
     *
     * @ORM\Column(name="artist", type="string", length=254, nullable=false)
     */
    private $artist;

    /**
     * @var string
     *
     * @ORM\Column(name="album", type="string", length=200, nullable=false)
     */
    private $album;

    /**
     * @var string
     *
     * @ORM\Column(name="track_title", type="string", length=200, nullable=false)
     */
    private $trackTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="user_agent", type="string", length=250, nullable=false)
     */
    private $userAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=20, nullable=false)
     */
    private $ip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="delete_on", type="date", nullable=false)
     */
    private $deleteOn;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_type", type="string", length=10, nullable=true)
     */
    private $providerType;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

