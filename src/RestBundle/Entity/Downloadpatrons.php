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


}

