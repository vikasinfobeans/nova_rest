<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories", indexes={@ORM\Index(name="Genre", columns={"Genre"})})
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var string
     *
     * @ORM\Column(name="Genre", type="string", length=100, nullable=false)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="Language", type="string", length=3, nullable=false)
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
     * Set genre
     *
     * @param string $genre
     *
     * @return Categories
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
     * Set language
     *
     * @param string $language
     *
     * @return Categories
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
