<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TopSingles
 *
 * @ORM\Table(name="top_singles")
 * @ORM\Entity(repositoryClass="RestBundle\Repository\TopSinglesRepository")
 */
class TopSingles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="prod_id", type="integer", nullable=true)
     */
    private $prodId;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_type", type="string", length=45, nullable=true)
     */
    private $providerType;

    /**
     * @var string
     *
     * @ORM\Column(name="territory", type="string", length=45, nullable=true)
     */
    private $territory;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=true)
     */
    private $modified;

    /**
     * @var string
     *
     * @ORM\Column(name="artist_name", type="string", length=255, nullable=true)
     */
    private $artistName;

    /**
     * @var integer
     *
     * @ORM\Column(name="album", type="integer", nullable=true)
     */
    private $album;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=3, nullable=true)
     */
    private $language;

    /**
     * @var integer
     *
     * @ORM\Column(name="sortId", type="integer", nullable=true)
     */
    private $sortid;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set prodId
     *
     * @param integer $prodId
     *
     * @return TopSingles
     */
    public function setProdId($prodId)
    {
        $this->prodId = $prodId;
    
        return $this;
    }

    /**
     * Get prodId
     *
     * @return integer
     */
    public function getProdId()
    {
        return $this->prodId;
    }

    /**
     * Set providerType
     *
     * @param string $providerType
     *
     * @return TopSingles
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
     * Set territory
     *
     * @param string $territory
     *
     * @return TopSingles
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return TopSingles
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
     * Set modified
     *
     * @param \DateTime $modified
     *
     * @return TopSingles
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    
        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set artistName
     *
     * @param string $artistName
     *
     * @return TopSingles
     */
    public function setArtistName($artistName)
    {
        $this->artistName = $artistName;
    
        return $this;
    }

    /**
     * Get artistName
     *
     * @return string
     */
    public function getArtistName()
    {
        return $this->artistName;
    }

    /**
     * Set album
     *
     * @param integer $album
     *
     * @return TopSingles
     */
    public function setAlbum($album)
    {
        $this->album = $album;
    
        return $this;
    }

    /**
     * Get album
     *
     * @return integer
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return TopSingles
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set sortid
     *
     * @param integer $sortid
     *
     * @return TopSingles
     */
    public function setSortid($sortid)
    {
        $this->sortid = $sortid;
    
        return $this;
    }

    /**
     * Get sortid
     *
     * @return integer
     */
    public function getSortid()
    {
        return $this->sortid;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
