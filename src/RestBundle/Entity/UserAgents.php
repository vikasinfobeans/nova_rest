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



    /**
     * Set deviceString
     *
     * @param string $deviceString
     *
     * @return UserAgents
     */
    public function setDeviceString($deviceString)
    {
        $this->deviceString = $deviceString;

        return $this;
    }

    /**
     * Get deviceString
     *
     * @return string
     */
    public function getDeviceString()
    {
        return $this->deviceString;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return UserAgents
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set requireMp3
     *
     * @param string $requireMp3
     *
     * @return UserAgents
     */
    public function setRequireMp3($requireMp3)
    {
        $this->requireMp3 = $requireMp3;

        return $this;
    }

    /**
     * Get requireMp3
     *
     * @return string
     */
    public function getRequireMp3()
    {
        return $this->requireMp3;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
