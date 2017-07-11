<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Featuredartists
 *
 * @ORM\Table(name="featuredartists")
 * @ORM\Entity
 */
class Featuredartists
{
    /**
     * @var string
     *
     * @ORM\Column(name="artist_name", type="string", length=255, nullable=false)
     */
    private $artistName;

    /**
     * @var string
     *
     * @ORM\Column(name="artist_image", type="text", length=65535, nullable=false)
     */
    private $artistImage;

    /**
     * @var string
     *
     * @ORM\Column(name="territory", type="string", length=5, nullable=false)
     */
    private $territory;

    /**
     * @var integer
     *
     * @ORM\Column(name="album", type="bigint", nullable=false)
     */
    private $album;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=3, nullable=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_type", type="string", length=10, nullable=false)
     */
    private $providerType = 'sony';

    /**
     * @var boolean
     *
     * @ORM\Column(name="flag", type="boolean", nullable=true)
     */
    private $flag = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set artistName
     *
     * @param string $artistName
     *
     * @return Featuredartists
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
     * Set artistImage
     *
     * @param string $artistImage
     *
     * @return Featuredartists
     */
    public function setArtistImage($artistImage)
    {
        $this->artistImage = $artistImage;

        return $this;
    }

    /**
     * Get artistImage
     *
     * @return string
     */
    public function getArtistImage()
    {
        return $this->artistImage;
    }

    /**
     * Set territory
     *
     * @param string $territory
     *
     * @return Featuredartists
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
     * Set album
     *
     * @param integer $album
     *
     * @return Featuredartists
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
     * @return Featuredartists
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
     * Set providerType
     *
     * @param string $providerType
     *
     * @return Featuredartists
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
     * Set flag
     *
     * @param boolean $flag
     *
     * @return Featuredartists
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return boolean
     */
    public function getFlag()
    {
        return $this->flag;
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
