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


}

