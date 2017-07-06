<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LatestVideodownloads
 *
 * @ORM\Table(name="latest_videodownloads", indexes={@ORM\Index(name="DownloadLibraryID", columns={"library_id"}), @ORM\Index(name="DownloadPatronID", columns={"patron_id"}), @ORM\Index(name="idx_created", columns={"created"}), @ORM\Index(name="idx_library_id_created", columns={"library_id", "created"}), @ORM\Index(name="idx_ProdID", columns={"ProdID"})})
 * @ORM\Entity
 */
class LatestVideodownloads
{
    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer", nullable=false)
     */
    private $libraryId;

    /**
     * @var string
     *
     * @ORM\Column(name="patron_id", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="track_title", type="string", length=200, nullable=false)
     */
    private $trackTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="user_login_type", type="string", length=30, nullable=true)
     */
    private $userLoginType;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="user_agent", type="string", length=250, nullable=true)
     */
    private $userAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=20, nullable=true)
     */
    private $ip;

    /**
     * @var boolean
     *
     * @ORM\Column(name="history", type="boolean", nullable=false)
     */
    private $history = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="provider_type", type="string", length=10, nullable=true)
     */
    private $providerType = 'sony';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

