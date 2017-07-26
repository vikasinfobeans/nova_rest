<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genreids
 *
 * @ORM\Table(name="genreids")
 * @ORM\Entity
 */
class Genreids
{
    /**
     * @var string
     *
     * @ORM\Column(name="Genre", type="string", length=60, nullable=false)
     */
    private $genre;

    /**
     * @var integer
     *
     * @ORM\Column(name="GenreId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $genreid;



    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Genreids
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
     * Get genreid
     *
     * @return integer
     */
    public function getGenreid()
    {
        return $this->genreid;
    }
}
