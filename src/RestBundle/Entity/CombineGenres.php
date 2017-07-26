<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CombineGenres
 *
 * @ORM\Table(name="combine_genres")
 * @ORM\Entity
 */
class CombineGenres
{
    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=60, nullable=false)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="expected_genre", type="string", length=60, nullable=false)
     */
    private $expectedGenre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="update_genre", type="boolean", nullable=false)
     */
    private $updateGenre = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return CombineGenres
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
     * Set expectedGenre
     *
     * @param string $expectedGenre
     *
     * @return CombineGenres
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
     * Set updateGenre
     *
     * @param boolean $updateGenre
     *
     * @return CombineGenres
     */
    public function setUpdateGenre($updateGenre)
    {
        $this->updateGenre = $updateGenre;

        return $this;
    }

    /**
     * Get updateGenre
     *
     * @return boolean
     */
    public function getUpdateGenre()
    {
        return $this->updateGenre;
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
