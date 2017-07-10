<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table(name="video", indexes={@ORM\Index(name="ReferenceID", columns={"ReferenceID"}), @ORM\Index(name="Sample_FileID", columns={"Sample_FileID"}), @ORM\Index(name="FullLength_FIleID", columns={"FullLength_FIleID"}), @ORM\Index(name="idx_ArtistText", columns={"ArtistText"})})
 * @ORM\Entity
 */
class Video
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pProdID", type="bigint", nullable=false)
     */
    private $pprodid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ProductID", type="string", length=16, nullable=false)
     */
    private $productid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ReferenceID", type="bigint", nullable=false)
     */
    private $referenceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="A_ReferenceID", type="bigint", nullable=false)
     */
    private $aReferenceid;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=200, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="VideoTitle", type="string", length=200, nullable=true)
     */
    private $videotitle;

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
     * @ORM\Column(name="Advisory", type="string", length=1, nullable=true)
     */
    private $advisory;

    /**
     * @var string
     *
     * @ORM\Column(name="ISRC", type="string", length=12, nullable=false)
     */
    private $isrc;

    /**
     * @var string
     *
     * @ORM\Column(name="Composer", type="text", length=65535, nullable=true)
     */
    private $composer;

    /**
     * @var string
     *
     * @ORM\Column(name="Genre", type="text", length=65535, nullable=true)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="Territory", type="text", length=65535, nullable=true)
     */
    private $territory;

    /**
     * @var string
     *
     * @ORM\Column(name="DownloadStatus", type="string", nullable=false)
     */
    private $downloadstatus = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TrackBundleCount", type="bigint", nullable=true)
     */
    private $trackbundlecount;

    /**
     * @var string
     *
     * @ORM\Column(name="Sample_Duration", type="string", length=8, nullable=true)
     */
    private $sampleDuration;

    /**
     * @var string
     *
     * @ORM\Column(name="FullLength_Duration", type="string", length=8, nullable=true)
     */
    private $fulllengthDuration;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sample_FileID", type="bigint", nullable=true)
     */
    private $sampleFileid;

    /**
     * @var integer
     *
     * @ORM\Column(name="FullLength_FIleID", type="bigint", nullable=true)
     */
    private $fulllengthFileid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CreatedOn", type="datetime", nullable=true)
     */
    private $createdon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UpdateOn", type="datetime", nullable=true)
     */
    private $updateon;

    /**
     * @var integer
     *
     * @ORM\Column(name="sequence_number", type="integer", nullable=true)
     */
    private $sequenceNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="Image_FileID", type="integer", nullable=true)
     */
    private $imageFileid;

    /**
     * @var string
     *
     * @ORM\Column(name="video_label", type="string", length=255, nullable=true)
     */
    private $videoLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="FullLength_SaveAsName", type="string", length=254, nullable=true)
     */
    private $fulllengthSaveasname;

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
     * Set pprodid
     *
     * @param integer $pprodid
     *
     * @return Video
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
     * @return Video
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
     * Set referenceid
     *
     * @param integer $referenceid
     *
     * @return Video
     */
    public function setReferenceid($referenceid)
    {
        $this->referenceid = $referenceid;

        return $this;
    }

    /**
     * Get referenceid
     *
     * @return integer
     */
    public function getReferenceid()
    {
        return $this->referenceid;
    }

    /**
     * Set aReferenceid
     *
     * @param integer $aReferenceid
     *
     * @return Video
     */
    public function setAReferenceid($aReferenceid)
    {
        $this->aReferenceid = $aReferenceid;

        return $this;
    }

    /**
     * Get aReferenceid
     *
     * @return integer
     */
    public function getAReferenceid()
    {
        return $this->aReferenceid;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Video
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
     * Set videotitle
     *
     * @param string $videotitle
     *
     * @return Video
     */
    public function setVideotitle($videotitle)
    {
        $this->videotitle = $videotitle;

        return $this;
    }

    /**
     * Get videotitle
     *
     * @return string
     */
    public function getVideotitle()
    {
        return $this->videotitle;
    }

    /**
     * Set artisttext
     *
     * @param string $artisttext
     *
     * @return Video
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
     * @return Video
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
     * Set advisory
     *
     * @param string $advisory
     *
     * @return Video
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
     * Set isrc
     *
     * @param string $isrc
     *
     * @return Video
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
     * Set composer
     *
     * @param string $composer
     *
     * @return Video
     */
    public function setComposer($composer)
    {
        $this->composer = $composer;

        return $this;
    }

    /**
     * Get composer
     *
     * @return string
     */
    public function getComposer()
    {
        return $this->composer;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Video
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set territory
     *
     * @param string $territory
     *
     * @return Video
     */
    public function setTerritory($territory)
    {
        $this->territory = $territory;

        return $this;
    }

    /**
     * Get territory
     *
     * @return string
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * Set downloadstatus
     *
     * @param string $downloadstatus
     *
     * @return Video
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
     * @return Video
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
     * Set sampleDuration
     *
     * @param string $sampleDuration
     *
     * @return Video
     */
    public function setSampleDuration($sampleDuration)
    {
        $this->sampleDuration = $sampleDuration;

        return $this;
    }

    /**
     * Get sampleDuration
     *
     * @return string
     */
    public function getSampleDuration()
    {
        return $this->sampleDuration;
    }

    /**
     * Set fulllengthDuration
     *
     * @param string $fulllengthDuration
     *
     * @return Video
     */
    public function setFulllengthDuration($fulllengthDuration)
    {
        $this->fulllengthDuration = $fulllengthDuration;

        return $this;
    }

    /**
     * Get fulllengthDuration
     *
     * @return string
     */
    public function getFulllengthDuration()
    {
        return $this->fulllengthDuration;
    }

    /**
     * Set sampleFileid
     *
     * @param integer $sampleFileid
     *
     * @return Video
     */
    public function setSampleFileid($sampleFileid)
    {
        $this->sampleFileid = $sampleFileid;

        return $this;
    }

    /**
     * Get sampleFileid
     *
     * @return integer
     */
    public function getSampleFileid()
    {
        return $this->sampleFileid;
    }

    /**
     * Set fulllengthFileid
     *
     * @param integer $fulllengthFileid
     *
     * @return Video
     */
    public function setFulllengthFileid($fulllengthFileid)
    {
        $this->fulllengthFileid = $fulllengthFileid;

        return $this;
    }

    /**
     * Get fulllengthFileid
     *
     * @return integer
     */
    public function getFulllengthFileid()
    {
        return $this->fulllengthFileid;
    }

    /**
     * Set createdon
     *
     * @param \DateTime $createdon
     *
     * @return Video
     */
    public function setCreatedon($createdon)
    {
        $this->createdon = $createdon;

        return $this;
    }

    /**
     * Get createdon
     *
     * @return \DateTime
     */
    public function getCreatedon()
    {
        return $this->createdon;
    }

    /**
     * Set updateon
     *
     * @param \DateTime $updateon
     *
     * @return Video
     */
    public function setUpdateon($updateon)
    {
        $this->updateon = $updateon;

        return $this;
    }

    /**
     * Get updateon
     *
     * @return \DateTime
     */
    public function getUpdateon()
    {
        return $this->updateon;
    }

    /**
     * Set sequenceNumber
     *
     * @param integer $sequenceNumber
     *
     * @return Video
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * Get sequenceNumber
     *
     * @return integer
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Set imageFileid
     *
     * @param integer $imageFileid
     *
     * @return Video
     */
    public function setImageFileid($imageFileid)
    {
        $this->imageFileid = $imageFileid;

        return $this;
    }

    /**
     * Get imageFileid
     *
     * @return integer
     */
    public function getImageFileid()
    {
        return $this->imageFileid;
    }

    /**
     * Set videoLabel
     *
     * @param string $videoLabel
     *
     * @return Video
     */
    public function setVideoLabel($videoLabel)
    {
        $this->videoLabel = $videoLabel;

        return $this;
    }

    /**
     * Get videoLabel
     *
     * @return string
     */
    public function getVideoLabel()
    {
        return $this->videoLabel;
    }

    /**
     * Set fulllengthSaveasname
     *
     * @param string $fulllengthSaveasname
     *
     * @return Video
     */
    public function setFulllengthSaveasname($fulllengthSaveasname)
    {
        $this->fulllengthSaveasname = $fulllengthSaveasname;

        return $this;
    }

    /**
     * Get fulllengthSaveasname
     *
     * @return string
     */
    public function getFulllengthSaveasname()
    {
        return $this->fulllengthSaveasname;
    }

    /**
     * Set imageSaveasname
     *
     * @param string $imageSaveasname
     *
     * @return Video
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
     * @return Video
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
     * @return Video
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
     * @return Video
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
