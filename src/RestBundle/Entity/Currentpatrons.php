<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currentpatrons
 *
 * @ORM\Table(name="currentpatrons", indexes={@ORM\Index(name="CurrentPatronsPatronID", columns={"patronid"}), @ORM\Index(name="CurrentPatronsLibID", columns={"libid"})})
 * @ORM\Entity
 */
class Currentpatrons
{
    /**
     * @var integer
     *
     * @ORM\Column(name="libid", type="integer", nullable=false)
     */
    private $libid;

    /**
     * @var string
     *
     * @ORM\Column(name="patronid", type="string", length=50, nullable=false)
     */
    private $patronid;

    /**
     * @var string
     *
     * @ORM\Column(name="consortium", type="string", length=255, nullable=true)
     */
    private $consortium;

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
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=50, nullable=false)
     */
    private $sessionId;

    /**
     * @var string
     *
     * @ORM\Column(name="is_approved", type="string", nullable=false)
     */
    private $isApproved = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="stream_popup", type="string", nullable=false)
     */
    private $streamPopup = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="notify_popup", type="string", nullable=false)
     */
    private $notifyPopup = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="branch_name", type="string", length=255, nullable=true)
     */
    private $branchName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

