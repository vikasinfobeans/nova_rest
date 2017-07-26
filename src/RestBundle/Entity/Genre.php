<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 *
 * @ORM\Table(name="Genre", uniqueConstraints={@ORM\UniqueConstraint(name="ProdID_2", columns={"ProdID", "Genre", "provider_type"})}, indexes={@ORM\Index(name="Genre", columns={"Genre"}), @ORM\Index(name="ProdID", columns={"ProdID"})})
 * @ORM\Entity
 */
class Genre
{
    /**
     * @var string
     *
     * @ORM\Column(name="expected_genre", type="string", length=60, nullable=false)
     */
    private $expectedGenre;

    /**
     * @var string
     *
     * @ORM\Column(name="Subgenre", type="string", length=60, nullable=false)
     */
    private $subgenre;

    /**
     * @var integer
     *
     * @ORM\Column(name="GenreId", type="integer", nullable=true)
     */
    private $genreid;

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
     * @var string
     *
     * @ORM\Column(name="Genre", type="string", length=60)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $genre;



    /**
     * Set expectedGenre
     *
     * @param string $expectedGenre
     *
     * @return Genre
     */
    public function setExpectedGenre($expectedGenre)
    {
        $this->expectedGenre = $expectedGenre;

        return $this;
    }

    /**
     * Get expectedGenre
     *
     * @return string
     */
    public function getExpectedGenre()
    {
        return $this->expectedGenre;
    }

    /**
     * Set subgenre
     *
     * @param string $subgenre
     *
     * @return Genre
     */
    public function setSubgenre($subgenre)
    {
        $this->subgenre = $subgenre;

        return $this;
    }

    /**
     * Get subgenre
     *
     * @return string
     */
    public function getSubgenre()
    {
        return $this->subgenre;
    }

    /**
     * Set genreid
     *
     * @param integer $genreid
     *
     * @return Genre
     */
    public function setGenreid($genreid)
    {
        $this->genreid = $genreid;

        return $this;
    }

    /**
     * Get genreid
     *
     * @return integer
     */
    public function getGenreid()
    {
        return $this->genreid;
    }

    /**
     * Set providerType
     *
     * @param string $providerType
     *
     * @return Genre
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
     * @return Genre
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

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Genre
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
}
