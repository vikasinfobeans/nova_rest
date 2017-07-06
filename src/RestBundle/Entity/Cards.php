<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cards
 *
 * @ORM\Table(name="cards", indexes={@ORM\Index(name="indx_cardno_libid", columns={"card_number", "library_id"})})
 * @ORM\Entity
 */
class Cards
{
    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer", nullable=false)
     */
    private $libraryId;

    /**
     * @var string
     *
     * @ORM\Column(name="card_number", type="string", length=20, nullable=false)
     */
    private $cardNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="pin", type="string", length=20, nullable=false)
     */
    private $pin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false)
     */
    private $modified;

    /**
     * @var integer
     *
     * @ORM\Column(name="multi_auth_id", type="integer", nullable=true)
     */
    private $multiAuthId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

