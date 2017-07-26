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



    /**
     * Set modUser
     *
     * @param string $modUser
     *
     * @return DeletedSongs
     */
    public function setModUser($modUser)
    {
        $this->modUser = $modUser;

        return $this;
    }

    /**
     * Get modUser
     *
     * @return string
     */
    public function getModUser()
    {
        return $this->modUser;
    }

    /**
     * Set modAction
     *
     * @param string $modAction
     *
     * @return DeletedSongs
     */
    public function setModAction($modAction)
    {
        $this->modAction = $modAction;

        return $this;
    }

    /**
     * Get modAction
     *
     * @return string
     */
    public function getModAction()
    {
        return $this->modAction;
    }

    /**
     * Set modDate
     *
     * @param \DateTime $modDate
     *
     * @return DeletedSongs
     */
    public function setModDate($modDate)
    {
        $this->modDate = $modDate;

        return $this;
    }

    /**
     * Get modDate
     *
     * @return \DateTime
     */
    public function getModDate()
    {
        return $this->modDate;
    }

    /**
     * Set productid
     *
     * @param string $productid
     *
     * @return DeletedSongs
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
     * @return DeletedSongs
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
     * Set songtitle
     *
     * @param string $songtitle
     *
     * @return DeletedSongs
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
     * @return DeletedSongs
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
     * Set isrc
     *
     * @param string $isrc
     *
     * @return DeletedSongs
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
     * Set genre
     *
     * @param string $genre
     *
     * @return DeletedSongs
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
     * Set providerType
     *
     * @param string $providerType
     *
     * @return DeletedSongs
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
     * Set fulllengthSaveasname
     *
     * @param string $fulllengthSaveasname
     *
     * @return DeletedSongs
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
     * @return DeletedSongs
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
     * @return DeletedSongs
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
     * Get prodid
     *
     * @return integer
     */
    public function getProdid()
    {
        return $this->prodid;
    }
}
