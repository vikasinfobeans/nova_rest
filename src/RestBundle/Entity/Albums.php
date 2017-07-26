<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

    /**
    * Albums
    *
    * @ORM\Table(name="Albums", indexes={@ORM\Index(name="FileID", columns={"FileID"}),
    * @ORM\Index(name="AProviderType", columns={"provider_type"}),
    * @ORM\Index(name="idx_upc", columns={"UPC"})})
    * @ORM\Entity(repositoryClass="RestBundle\Repository\AlbumsRepository")
    */
class Albums
{
    /**
     * @var string
     *
     * @ORM\Column(name="ProductID", type="string", length=16, nullable=false)
     */
    private $productid;

    /**
     * @var string
     *
     * @ORM\Column(name="AlbumTitle", type="string", length=200, nullable=true)
     */
    private $albumtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=200, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="ArtistText", type="string", length=254, nullable=true)
     */
    private $artisttext;

    /**
     * @var string
     *
     * @ORM\Column(name="Artist", type="string", length=254, nullable=true)
     */
    private $artist;

    /**
     * @var string
     *
     * @ORM\Column(name="ArtistURL", type="string", length=254, nullable=true)
     */
    private $artisturl;

    /**
     * @var string
     *
     * @ORM\Column(name="Label", type="string", length=80, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="Copyright", type="string", length=200, nullable=true)
     */
    private $copyright;

    /**
     * @var string
     *
     * @ORM\Column(name="Advisory", type="string", length=1, nullable=true)
     */
    private $advisory;

    /**
     * @var integer
     *
     * @ORM\Column(name="FileID", type="bigint", nullable=true)
     */
    private $fileid;

    /**
     * @var string
     *
     * @ORM\Column(name="DownloadStatus", type="string", nullable=false)
     */
    private $downloadstatus = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TrackBundleCount", type="bigint", nullable=false)
     */
    private $trackbundlecount;

    /**
     * @var string
     *
     * @ORM\Column(name="UPC", type="string", length=15, nullable=false)
     */
    private $upc;

    /**
     * @var string
     *
     * @ORM\Column(name="PublicationStatus", type="string", length=32, nullable=false)
     */
    private $publicationstatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LastUpdated", type="datetime", nullable=false)
     */
    private $lastupdated = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="StatusNotes", type="string", length=255, nullable=false)
     */
    private $statusnotes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="PublicationDate", type="datetime", nullable=false)
     */
    private $publicationdate;

    /**
     * @var string
     *
     * @ORM\Column(name="Image_SaveAsName", type="string", length=254, nullable=true)
     */
    private $imageSaveasname;

    /**
     * @var string
     *
     * @ORM\Column(name="CdnPath", type="string", length=255, nullable=true)
     */
    private $cdnpath;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_type", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $providerType;

    /**
     * @var integer
     *
     * @ORM\Column(name="ProdID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $prodid;



    /**
     * Set productid
     *
     * @param string $productid
     *
     * @return Albums
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
     * Set albumtitle
     *
     * @param string $albumtitle
     *
     * @return Albums
     */
    public function setAlbumtitle($albumtitle)
    {
        $this->albumtitle = $albumtitle;

        return $this;
    }

    /**
     * Get albumtitle
     *
     * @return string
     */
    public function getAlbumtitle()
    {
        return $this->albumtitle;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Albums
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set artisttext
     *
     * @param string $artisttext
     *
     * @return Albums
     */
    public function setArtisttext($artisttext)
    {
        $this->artisttext = $artisttext;

        return $this;
    }

    /**
     * Get artisttext
     *
     * @return string
     */
    public function getArtisttext()
    {
        return $this->artisttext;
    }

    /**
     * Set artist
     *
     * @param string $artist
     *
     * @return Albums
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
     * Set artisturl
     *
     * @param string $artisturl
     *
     * @return Albums
     */
    public function setArtisturl($artisturl)
    {
        $this->artisturl = $artisturl;

        return $this;
    }

    /**
     * Get artisturl
     *
     * @return string
     */
    public function getArtisturl()
    {
        return $this->artisturl;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Albums
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set copyright
     *
     * @param string $copyright
     *
     * @return Albums
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;

        return $this;
    }

    /**
     * Get copyright
     *
     * @return string
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Set advisory
     *
     * @param string $advisory
     *
     * @return Albums
     */
    public function setAdvisory($advisory)
    {
        $this->advisory = $advisory;

        return $this;
    }

    /**
     * Get advisory
     *
     * @return string
     */
    public function getAdvisory()
    {
        return $this->advisory;
    }

    /**
     * Set fileid
     *
     * @param integer $fileid
     *
     * @return Albums
     */
    public function setFileid($fileid)
    {
        $this->fileid = $fileid;

        return $this;
    }

    /**
     * Get fileid
     *
     * @return integer
     */
    public function getFileid()
    {
        return $this->fileid;
    }

    /**
     * Set downloadstatus
     *
     * @param string $downloadstatus
     *
     * @return Albums
     */
    public function setDownloadstatus($downloadstatus)
    {
        $this->downloadstatus = $downloadstatus;

        return $this;
    }

    /**
     * Get downloadstatus
     *
     * @return string
     */
    public function getDownloadstatus()
    {
        return $this->downloadstatus;
    }

    /**
     * Set trackbundlecount
     *
     * @param integer $trackbundlecount
     *
     * @return Albums
     */
    public function setTrackbundlecount($trackbundlecount)
    {
        $this->trackbundlecount = $trackbundlecount;

        return $this;
    }

    /**
     * Get trackbundlecount
     *
     * @return integer
     */
    public function getTrackbundlecount()
    {
        return $this->trackbundlecount;
    }

    /**
     * Set upc
     *
     * @param string $upc
     *
     * @return Albums
     */
    public function setUpc($upc)
    {
        $this->upc = $upc;

        return $this;
    }

    /**
     * Get upc
     *
     * @return string
     */
    public function getUpc()
    {
        return $this->upc;
    }

    /**
     * Set publicationstatus
     *
     * @param string $publicationstatus
     *
     * @return Albums
     */
    public function setPublicationstatus($publicationstatus)
    {
        $this->publicationstatus = $publicationstatus;

        return $this;
    }

    /**
     * Get publicationstatus
     *
     * @return string
     */
    public function getPublicationstatus()
    {
        return $this->publicationstatus;
    }

    /**
     * Set lastupdated
     *
     * @param \DateTime $lastupdated
     *
     * @return Albums
     */
    public function setLastupdated($lastupdated)
    {
        $this->lastupdated = $lastupdated;

        return $this;
    }

    /**
     * Get lastupdated
     *
     * @return \DateTime
     */
    public function getLastupdated()
    {
        return $this->lastupdated;
    }

    /**
     * Set statusnotes
     *
     * @param string $statusnotes
     *
     * @return Albums
     */
    public function setStatusnotes($statusnotes)
    {
        $this->statusnotes = $statusnotes;

        return $this;
    }

    /**
     * Get statusnotes
     *
     * @return string
     */
    public function getStatusnotes()
    {
        return $this->statusnotes;
    }

    /**
     * Set publicationdate
     *
     * @param \DateTime $publicationdate
     *
     * @return Albums
     */
    public function setPublicationdate($publicationdate)
    {
        $this->publicationdate = $publicationdate;

        return $this;
    }

    /**
     * Get publicationdate
     *
     * @return \DateTime
     */
    public function getPublicationdate()
    {
        return $this->publicationdate;
    }

    /**
     * Set imageSaveasname
     *
     * @param string $imageSaveasname
     *
     * @return Albums
     */
    public function setImageSaveasname($imageSaveasname)
    {
        $this->imageSaveasname = $imageSaveasname;

        return $this;
    }

    /**
     * Get imageSaveasname
     *
     * @return string
     */
    public function getImageSaveasname()
    {
        return $this->imageSaveasname;
    }

    /**
     * Set cdnpath
     *
     * @param string $cdnpath
     *
     * @return Albums
     */
    public function setCdnpath($cdnpath)
    {
        $this->cdnpath = $cdnpath;

        return $this;
    }

    /**
     * Get cdnpath
     *
     * @return string
     */
    public function getCdnpath()
    {
        return $this->cdnpath;
    }

    /**
     * Set providerType
     *
     * @param string $providerType
     *
     * @return Albums
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
     * Set prodid
     *
     * @param integer $prodid
     *
     * @return Albums
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
}
