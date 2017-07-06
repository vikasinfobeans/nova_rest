<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeviceMasters
 *
 * @ORM\Table(name="device_masters", indexes={@ORM\Index(name="authentiaction_token", columns={"authentication_token"})})
 * @ORM\Entity
 */
class DeviceMasters
{
    /**
     * @var string
     *
     * @ORM\Column(name="patron_id", type="string", length=150, nullable=true)
     */
    private $patronId;

    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer", nullable=true)
     */
    private $libraryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="system_type", type="integer", nullable=true)
     */
    private $systemType;

    /**
     * @var string
     *
     * @ORM\Column(name="device_id", type="string", length=255, nullable=true)
     */
    private $deviceId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=true)
     */
    private $createdDate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="registration_id", type="string", length=255, nullable=true)
     */
    private $registrationId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_language", type="string", length=45, nullable=true)
     */
    private $userLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="authentication_token", type="string", length=255, nullable=true)
     */
    private $authenticationToken;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

