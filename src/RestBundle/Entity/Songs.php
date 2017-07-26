<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Songs
 *
 * @ORM\Table(name="Songs", indexes={@ORM\Index(name="ReferenceID", columns={"ReferenceID"}), @ORM\Index(name="Sample_FileID", columns={"Sample_FileID"}), @ORM\Index(name="FullLength_FIleID", columns={"FullLength_FIleID"}), @ORM\Index(name="idx_ArtistText", columns={"ArtistText"}), @ORM\Index(name="MP4_FileID", columns={"MP4_FileID"}), @ORM\Index(name="StreamingStatus_idx", columns={"StreamingStatus"}), @ORM\Index(name="DownloadStatus_idx", columns={"DownloadStatus"}), @ORM\Index(name="idx_ArtistText_Full", columns={"ArtistText"}), @ORM\Index(name="idx_isrc", columns={"ISRC"})})
 * @ORM\Entity(repositoryClass="RestBundle\Repository\SongsRepository")
 */
class Songs
{
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
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=200, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="SongTitle", type="string", length=200, nullable=true)
     */
    private $songtitle;

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
     * @ORM\Column(name="DownloadStatus", type="string", nullable=true)
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
     * @var integer
     *
     * @ORM\Column(name="MP4_FileID", type="bigint", nullable=true)
     */
    private $mp4Fileid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="StreamingStatus", type="boolean", nullable=false)
     */
    private $streamingstatus = '0';

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
     * @var string
     *
     * @ORM\Column(name="FullLength_SaveAsName", type="string", length=254, nullable=true)
     */
    private $fulllengthSaveasname;

    /**
     * @var string
     *
     * @ORM\Column(name="Sample_SaveAsName", type="string", length=254, nullable=true)
     */
    private $sampleSaveasname;

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
     * @return Songs
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
     * @return Songs
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
     * Set title
     *
     * @param string $title
     *
     * @return Songs
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
     * Set songtitle
     *
     * @param string $songtitle
     *
     * @return Songs
     */
    public function setSongtitle($songtitle)
    {
        $this->songtitle = $songtitle;

        return $this;
    }

    /**
     * Get songtitle
     *
     * @return string
     */
    public function getSongtitle()
    {
        return $this->songtitle;
    }

    /**
     * Set artisttext
     *
     * @param string $artisttext
     *
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * Set mp4Fileid
     *
     * @param integer $mp4Fileid
     *
     * @return Songs
     */
    public function setMp4Fileid($mp4Fileid)
    {
        $this->mp4Fileid = $mp4Fileid;

        return $this;
    }

    /**
     * Get mp4Fileid
     *
     * @return integer
     */
    public function getMp4Fileid()
    {
        return $this->mp4Fileid;
    }

    /**
     * Set streamingstatus
     *
     * @param boolean $streamingstatus
     *
     * @return Songs
     */
    public function setStreamingstatus($streamingstatus)
    {
        $this->streamingstatus = $streamingstatus;

        return $this;
    }

    /**
     * Get streamingstatus
     *
     * @return boolean
     */
    public function getStreamingstatus()
    {
        return $this->streamingstatus;
    }

    /**
     * Set createdon
     *
     * @param \DateTime $createdon
     *
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
     * Set fulllengthSaveasname
     *
     * @param string $fulllengthSaveasname
     *
     * @return Songs
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
     * Set sampleSaveasname
     *
     * @param string $sampleSaveasname
     *
     * @return Songs
     */
    public function setSampleSaveasname($sampleSaveasname)
    {
        $this->sampleSaveasname = $sampleSaveasname;

        return $this;
    }

    /**
     * Get sampleSaveasname
     *
     * @return string
     */
    public function getSampleSaveasname()
    {
        return $this->sampleSaveasname;
    }

    /**
     * Set cdnpath
     *
     * @param string $cdnpath
     *
     * @return Songs
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
     * @return Songs
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
     * @return Songs
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
