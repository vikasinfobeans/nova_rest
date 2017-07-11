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



    /**
     * Set libraryId
     *
     * @param integer $libraryId
     *
     * @return LatestVideodownloads
     */
    public function setLibraryId($libraryId)
    {
        $this->libraryId = $libraryId;

        return $this;
    }

    /**
     * Get libraryId
     *
     * @return integer
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
     * @return LatestVideodownloads
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
     * @return LatestVideodownloads
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
     * Set pprodid
     *
     * @param integer $pprodid
     *
     * @return LatestVideodownloads
     */
    public function setPprodid($pprodid)
    {
        $this->pprodid = $pprodid;

        return $this;
    }

    /**
     * Get pprodid
     *
     * @return integer
     */
    public function getPprodid()
    {
        return $this->pprodid;
    }

    /**
     * Set productid
     *
     * @param string $productid
     *
     * @return LatestVideodownloads
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
     * @return LatestVideodownloads
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
     * @return LatestVideodownloads
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
     * Set trackTitle
     *
     * @param string $trackTitle
     *
     * @return LatestVideodownloads
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
     * Set userLoginType
     *
     * @param string $userLoginType
     *
     * @return LatestVideodownloads
     */
    public function setUserLoginType($userLoginType)
    {
        $this->userLoginType = $userLoginType;

        return $this;
    }

    /**
     * Get userLoginType
     *
     * @return string
     */
    public function getUserLoginType()
    {
        return $this->userLoginType;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return LatestVideodownloads
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     *
     * @return LatestVideodownloads
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
     * @return LatestVideodownloads
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
     * Set history
     *
     * @param boolean $history
     *
     * @return LatestVideodownloads
     */
    public function setHistory($history)
    {
        $this->history = $history;

        return $this;
    }

    /**
     * Get history
     *
     * @return boolean
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Set providerType
     *
     * @param string $providerType
     *
     * @return LatestVideodownloads
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return LatestVideodownloads
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
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
