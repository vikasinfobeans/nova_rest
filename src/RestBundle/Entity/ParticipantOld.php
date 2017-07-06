<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipantOld
 *
 * @ORM\Table(name="Participant_old", indexes={@ORM\Index(name="ProdID", columns={"ProdID"})})
 * @ORM\Entity
 */
class ParticipantOld
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ProdID", type="bigint", nullable=true)
     */
    private $prodid;

    /**
     * @var string
     *
     * @ORM\Column(name="Role", type="string", length=60, nullable=true)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=80, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="RoleId", type="bigint", nullable=true)
     */
    private $roleid;

    /**
     * @var integer
     *
     * @ORM\Column(name="participant_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $participantId;


}

