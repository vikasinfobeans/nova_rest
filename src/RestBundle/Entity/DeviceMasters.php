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



    /**
     * Set patronId
     *
     * @param string $patronId
     *
     * @return DeviceMasters
     */
    public function setPatronId($patronId)
    {
        $this->patronId = $patronId;

        return $this;
    }

    /**
     * Get patronId
     *
     * @return string
     */
    public function getPatronId()
    {
        return $this->patronId;
    }

    /**
     * Set libraryId
     *
     * @param integer $libraryId
     *
     * @return DeviceMasters
     */
    public function setLibraryId($libraryId)
    {
        $this->libraryId = $libraryId;

        return $this;
    }

    /**
     * Get libraryId
     *
     * @return integer
     */
    public function getLibraryId()
    {
        return $this->libraryId;
    }

    /**
     * Set systemType
     *
     * @param integer $systemType
     *
     * @return DeviceMasters
     */
    public function setSystemType($systemType)
    {
        $this->systemType = $systemType;

        return $this;
    }

    /**
     * Get systemType
     *
     * @return integer
     */
    public function getSystemType()
    {
        return $this->systemType;
    }

    /**
     * Set deviceId
     *
     * @param string $deviceId
     *
     * @return DeviceMasters
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    /**
     * Get deviceId
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return DeviceMasters
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set registrationId
     *
     * @param string $registrationId
     *
     * @return DeviceMasters
     */
    public function setRegistrationId($registrationId)
    {
        $this->registrationId = $registrationId;

        return $this;
    }

    /**
     * Get registrationId
     *
     * @return string
     */
    public function getRegistrationId()
    {
        return $this->registrationId;
    }

    /**
     * Set userLanguage
     *
     * @param string $userLanguage
     *
     * @return DeviceMasters
     */
    public function setUserLanguage($userLanguage)
    {
        $this->userLanguage = $userLanguage;

        return $this;
    }

    /**
     * Get userLanguage
     *
     * @return string
     */
    public function getUserLanguage()
    {
        return $this->userLanguage;
    }

    /**
     * Set authenticationToken
     *
     * @param string $authenticationToken
     *
     * @return DeviceMasters
     */
    public function setAuthenticationToken($authenticationToken)
    {
        $this->authenticationToken = $authenticationToken;

        return $this;
    }

    /**
     * Get authenticationToken
     *
     * @return string
     */
    public function getAuthenticationToken()
    {
        return $this->authenticationToken;
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
