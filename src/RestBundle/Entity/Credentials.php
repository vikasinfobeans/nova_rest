<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Credentials
 *
 * @ORM\Table(name="credentials")
 * @ORM\Entity
 */
class Credentials
{
    /**
     * @var string
     *
     * @ORM\Column(name="card", type="string", length=100, nullable=false)
     */
    private $card;

    /**
     * @var string
     *
     * @ORM\Column(name="pin", type="string", length=100, nullable=false)
     */
    private $pin;

    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer", nullable=false)
     */
    private $libraryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

