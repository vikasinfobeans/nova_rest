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


}

