<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAgents
 *
 * @ORM\Table(name="user_agents")
 * @ORM\Entity
 */
class UserAgents
{
    /**
     * @var string
     *
     * @ORM\Column(name="device_string", type="string", length=255, nullable=false)
     */
    private $deviceString;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="require_mp3", type="string", nullable=true)
     */
    private $requireMp3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

