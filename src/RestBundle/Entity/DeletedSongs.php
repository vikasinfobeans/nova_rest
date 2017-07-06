<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeletedSongs
 *
 * @ORM\Table(name="deleted_Songs", uniqueConstraints={@ORM\UniqueConstraint(name="ProdID_UNIQUE", columns={"ProdID"})})
 * @ORM\Entity
 */
class DeletedSongs
{
    /**
     * @var string
     *
     * @ORM\Column(name="mod_user", type="string", length=255, nullable=true)
     */
    private $modUser;

    /**
     * @var string
     *
     * @ORM\Column(name="mod_action", type="string", length=255, nullable=true)
     */
    private $modAction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mod_date", type="datetime", nullable=true)
     */
    private $modDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ProductID", type="string", length=16, nullable=true)
     */
    private $productid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ReferenceID", type="bigint", nullable=true)
     */
    private $referenceid;

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
     * @ORM\Column(name="ISRC", type="string", length=12, nullable=true)
     */
    private $isrc;

    /**
     * @var string
     *
     * @ORM\Column(name="Genre", type="text", length=65535, nullable=true)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_type", type="string", length=10, nullable=true)
     */
    private $providerType = 'sony';

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
     * @var integer
     *
     * @ORM\Column(name="ProdID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prodid;


}

