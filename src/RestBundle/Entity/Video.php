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


}

