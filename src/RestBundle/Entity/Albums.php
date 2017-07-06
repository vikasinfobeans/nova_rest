<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Albums
 *
 * @ORM\Table(name="Albums", indexes={@ORM\Index(name="FileID", columns={"FileID"}), @ORM\Index(name="AProviderType", columns={"provider_type"}), @ORM\Index(name="idx_upc", columns={"UPC"})})
 * @ORM\Entity
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


}

