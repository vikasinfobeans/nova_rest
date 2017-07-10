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



    /**
     * Set libraryId
     *
     * @param string $libraryId
     *
     * @return Wishlists
     */
    public function setLibraryId($libraryId)
    {
        $this->libraryId = $libraryId;

        return $this;
    }

    /**
     * Get libraryId
     *
     * @return string
     */
    public function getLibraryId()
    {
        return $this->libraryId;
    }

    /**
     * Set patronId
     *
     * @param string $patronId
     *
     * @return Wishlists
     */
    public function setPatronId($patronId)
    {
        $this->patronId = $patronId;

        return $this;
    }

    /**
     * Get patronId
     *
     * @return string
     */
    public function getPatronId()
    {
        return $this->patronId;
    }

    /**
     * Set prodid
     *
     * @param integer $prodid
     *
     * @return Wishlists
     */
    public function setProdid($prodid)
    {
        $this->prodid = $prodid;

        return $this;
    }

    /**
     * Get prodid
     *
     * @return integer
     */
    public function getProdid()
    {
        return $this->prodid;
    }

    /**
     * Set productid
     *
     * @param string $productid
     *
     * @return Wishlists
     */
    public function setProductid($productid)
    {
        $this->productid = $productid;

        return $this;
    }

    /**
     * Get productid
     *
     * @return string
     */
    public function getProductid()
    {
        return $this->productid;
    }

    /**
     * Set isrc
     *
     * @param string $isrc
     *
     * @return Wishlists
     */
    public function setIsrc($isrc)
    {
        $this->isrc = $isrc;

        return $this;
    }

    /**
     * Get isrc
     *
     * @return string
     */
    public function getIsrc()
    {
        return $this->isrc;
    }

    /**
     * Set artist
     *
     * @param string $artist
     *
     * @return Wishlists
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * Get artist
     *
     * @return string
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set album
     *
     * @param string $album
     *
     * @return Wishlists
     */
    public function setAlbum($album)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return string
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * Set trackTitle
     *
     * @param string $trackTitle
     *
     * @return Wishlists
     */
    public function setTrackTitle($trackTitle)
    {
        $this->trackTitle = $trackTitle;

        return $this;
    }

    /**
     * Get trackTitle
     *
     * @return string
     */
    public function getTrackTitle()
    {
        return $this->trackTitle;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     *
     * @return Wishlists
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Get userAgent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Wishlists
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Wishlists
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set deleteOn
     *
     * @param \DateTime $deleteOn
     *
     * @return Wishlists
     */
    public function setDeleteOn($deleteOn)
    {
        $this->deleteOn = $deleteOn;

        return $this;
    }

    /**
     * Get deleteOn
     *
     * @return \DateTime
     */
    public function getDeleteOn()
    {
        return $this->deleteOn;
    }

    /**
     * Set providerType
     *
     * @param string $providerType
     *
     * @return Wishlists
     */
    public function setProviderType($providerType)
    {
        $this->providerType = $providerType;

        return $this;
    }

    /**
     * Get providerType
     *
     * @return string
     */
    public function getProviderType()
    {
        return $this->providerType;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
