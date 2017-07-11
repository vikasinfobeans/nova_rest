<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newartists
 *
 * @ORM\Table(name="newartists")
 * @ORM\Entity
 */
class Newartists
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
     * @return Newartists
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
     * @return Newartists
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
     * @return Newartists
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
     * @return Newartists
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
     * @return Newartists
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
