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



    /**
     * Set total
     *
     * @param integer $total
     *
     * @return DownloadVideoGenres
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set downloadDate
     *
     * @param \DateTime $downloadDate
     *
     * @return DownloadVideoGenres
     */
    public function setDownloadDate($downloadDate)
    {
        $this->downloadDate = $downloadDate;

        return $this;
    }

    /**
     * Get downloadDate
     *
     * @return \DateTime
     */
    public function getDownloadDate()
    {
        return $this->downloadDate;
    }

    /**
     * Set libraryId
     *
     * @param integer $libraryId
     *
     * @return DownloadVideoGenres
     */
    public function setLibraryId($libraryId)
    {
        $this->libraryId = $libraryId;

        return $this;
    }

    /**
     * Get libraryId
     *
     * @return integer
     */
    public function getLibraryId()
    {
        return $this->libraryId;
    }

    /**
     * Set genreName
     *
     * @param string $genreName
     *
     * @return DownloadVideoGenres
     */
    public function setGenreName($genreName)
    {
        $this->genreName = $genreName;

        return $this;
    }

    /**
     * Get genreName
     *
     * @return string
     */
    public function getGenreName()
    {
        return $this->genreName;
    }
}
