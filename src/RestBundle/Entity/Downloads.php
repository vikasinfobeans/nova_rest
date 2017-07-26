<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Downloads
 *
 * @ORM\Table(name="downloads", indexes={@ORM\Index(name="DownloadLibraryID", columns={"library_id"}), @ORM\Index(name="DownloadPatronID", columns={"patron_id"}), @ORM\Index(name="idx_created", columns={"created"}), @ORM\Index(name="idx_library_id_created", columns={"library_id", "created"}), @ORM\Index(name="idx_prodid", columns={"ProdID"}), @ORM\Index(name="idx_prodid_provtype", columns={"provider_type", "ProdID"}), @ORM\Index(name="idx_cmpd", columns={"ProdID", "provider_type"}), @ORM\Index(name="idx_id_type_created", columns={"ProdID", "provider_type", "created"}), @ORM\Index(name="idx_cmpd2", columns={"created", "ProdID", "provider_type"})})
 * @ORM\Entity
 */
class Downloads
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
     * @var boolean
     *
     * @ORM\Column(name="exists_in_lookup", type="boolean", nullable=false)
     */
    private $existsInLookup = '0';

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
     * @return Downloads
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
     * @return Downloads
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
     * @return Downloads
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
     * @return Downloads
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
     * @return Downloads
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
     * @return Downloads
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
     * @return Downloads
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
     * @return Downloads
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
     * @return Downloads
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
     * @return Downloads
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
     * @return Downloads
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
     * @return Downloads
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
     * Set existsInLookup
     *
     * @param boolean $existsInLookup
     *
     * @return Downloads
     */
    public function setExistsInLookup($existsInLookup)
    {
        $this->existsInLookup = $existsInLookup;

        return $this;
    }

    /**
     * Get existsInLookup
     *
     * @return boolean
     */
    public function getExistsInLookup()
    {
        return $this->existsInLookup;
    }

    /**
     * Set providerType
     *
     * @param string $providerType
     *
     * @return Downloads
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
     * @return Downloads
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
