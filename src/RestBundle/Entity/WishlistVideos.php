<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WishlistVideos
 *
 * @ORM\Table(name="wishlist_videos")
 * @ORM\Entity
 */
class WishlistVideos
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
     * @var integer
     *
     * @ORM\Column(name="pProdID", type="bigint", nullable=false)
     */
    private $pprodid;

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
     * @var \DateTime
     *
     * @ORM\Column(name="week_start_date", type="datetime", nullable=false)
     */
    private $weekStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="week_end_date", type="datetime", nullable=false)
     */
    private $weekEndDate;

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

