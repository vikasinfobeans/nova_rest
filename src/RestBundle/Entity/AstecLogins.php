<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AstecLogins
 *
 * @ORM\Table(name="astec_logins")
 * @ORM\Entity
 */
class AstecLogins
{
    /**
     * @var string
     *
     * @ORM\Column(name="tid", type="string", length=255, nullable=true)
     */
    private $tid;

    /**
     * @var integer
     *
     * @ORM\Column(name="state_code", type="integer", nullable=true)
     */
    private $stateCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_state", type="integer", nullable=true)
     */
    private $userState;

    /**
     * @var string
     *
     * @ORM\Column(name="user_handle", type="string", length=255, nullable=true)
     */
    private $userHandle;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_age_restriction", type="integer", nullable=true)
     */
    private $userAgeRestriction;

    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer", nullable=true)
     */
    private $libraryId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

