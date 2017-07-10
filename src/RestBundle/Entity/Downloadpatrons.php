<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Downloadpatrons
 *
 * @ORM\Table(name="downloadpatrons")
 * @ORM\Entity
 */
class Downloadpatrons
{
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

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
     * @ORM\Column(name="patron_id", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $patronId;



    /**
     * Set email
     *
     * @param string $email
     *
     * @return Downloadpatrons
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set total
     *
     * @param integer $total
     *
     * @return Downloadpatrons
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
     * @return Downloadpatrons
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
     * @return Downloadpatrons
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
     * Set patronId
     *
     * @param string $patronId
     *
     * @return Downloadpatrons
     */
    public function setPatronId($patronId)
    {
        $this->patronId = $patronId;

        return $this;
    }

    /**
     * Get patronId
     *
     * @return string
     */
    public function getPatronId()
    {
        return $this->patronId;
    }
}
