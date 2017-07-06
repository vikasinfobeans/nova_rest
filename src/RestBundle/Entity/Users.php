<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_id", type="integer", nullable=true)
     */
    private $typeId;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=50, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=50, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="bigint", nullable=false)
     */
    private $libraryId;

    /**
     * @var string
     *
     * @ORM\Column(name="consortium", type="string", length=255, nullable=true)
     */
    private $consortium;

    /**
     * @var string
     *
     * @ORM\Column(name="user_status", type="string", nullable=false)
     */
    private $userStatus = 'active';

    /**
     * @var string
     *
     * @ORM\Column(name="sales", type="string", nullable=false)
     */
    private $sales = 'no';

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
     * @ORM\Column(name="crm_patronid", type="integer", nullable=true)
     */
    private $crmPatronid;

    /**
     * @var integer
     *
     * @ORM\Column(name="crm_multiadmin_id", type="integer", nullable=true)
     */
    private $crmMultiadminId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

