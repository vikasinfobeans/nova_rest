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


}

