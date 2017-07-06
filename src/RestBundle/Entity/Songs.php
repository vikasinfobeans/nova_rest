<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Songs
 *
 * @ORM\Table(name="Songs", indexes={@ORM\Index(name="ReferenceID", columns={"ReferenceID"}), @ORM\Index(name="Sample_FileID", columns={"Sample_FileID"}), @ORM\Index(name="FullLength_FIleID", columns={"FullLength_FIleID"}), @ORM\Index(name="idx_ArtistText", columns={"ArtistText"}), @ORM\Index(name="MP4_FileID", columns={"MP4_FileID"}), @ORM\Index(name="StreamingStatus_idx", columns={"StreamingStatus"}), @ORM\Index(name="DownloadStatus_idx", columns={"DownloadStatus"}), @ORM\Index(name="idx_ArtistText_Full", columns={"ArtistText"}), @ORM\Index(name="idx_isrc", columns={"ISRC"})})
 * @ORM\Entity
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


}

