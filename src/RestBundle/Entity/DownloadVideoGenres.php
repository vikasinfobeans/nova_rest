<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DownloadVideoGenres
 *
 * @ORM\Table(name="download_video_genres")
 * @ORM\Entity
 */
class DownloadVideoGenres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="smallint", nullable=true)
     */
    private $total;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="download_date", type="date")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $downloadDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $libraryId;

    /**
     * @var string
     *
     * @ORM\Column(name="genre_name", type="string", length=36)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $genreName;


}

