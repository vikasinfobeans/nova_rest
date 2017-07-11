<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Problems
 *
 * @ORM\Table(name="problems")
 * @ORM\Entity
 */
class Problems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="zendeskid", type="integer", nullable=true)
     */
    private $zendeskid;

    /**
     * @var string
     *
     * @ORM\Column(name="reporter_name", type="string", length=100, nullable=true)
     */
    private $reporterName;

    /**
     * @var string
     *
     * @ORM\Column(name="reporter_email", type="string", length=100, nullable=true)
     */
    private $reporterEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="description_of_problem", type="text", length=65535, nullable=true)
     */
    private $descriptionOfProblem;

    /**
     * @var string
     *
     * @ORM\Column(name="browser_version", type="string", length=50, nullable=true)
     */
    private $browserVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=50, nullable=true)
     */
    private $ipAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="operating_system", type="string", length=50, nullable=true)
     */
    private $operatingSystem;

    /**
     * @var string
     *
     * @ORM\Column(name="referring_page", type="string", length=100, nullable=true)
     */
    private $referringPage;

    /**
     * @var string
     *
     * @ORM\Column(name="library_name", type="string", length=100, nullable=true)
     */
    private $libraryName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=true)
     */
    private $modified;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="patron_id", type="string", length=50, nullable=true)
     */
    private $patronId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set zendeskid
     *
     * @param integer $zendeskid
     *
     * @return Problems
     */
    public function setZendeskid($zendeskid)
    {
        $this->zendeskid = $zendeskid;

        return $this;
    }

    /**
     * Get zendeskid
     *
     * @return integer
     */
    public function getZendeskid()
    {
        return $this->zendeskid;
    }

    /**
     * Set reporterName
     *
     * @param string $reporterName
     *
     * @return Problems
     */
    public function setReporterName($reporterName)
    {
        $this->reporterName = $reporterName;

        return $this;
    }

    /**
     * Get reporterName
     *
     * @return string
     */
    public function getReporterName()
    {
        return $this->reporterName;
    }

    /**
     * Set reporterEmail
     *
     * @param string $reporterEmail
     *
     * @return Problems
     */
    public function setReporterEmail($reporterEmail)
    {
        $this->reporterEmail = $reporterEmail;

        return $this;
    }

    /**
     * Get reporterEmail
     *
     * @return string
     */
    public function getReporterEmail()
    {
        return $this->reporterEmail;
    }

    /**
     * Set descriptionOfProblem
     *
     * @param string $descriptionOfProblem
     *
     * @return Problems
     */
    public function setDescriptionOfProblem($descriptionOfProblem)
    {
        $this->descriptionOfProblem = $descriptionOfProblem;

        return $this;
    }

    /**
     * Get descriptionOfProblem
     *
     * @return string
     */
    public function getDescriptionOfProblem()
    {
        return $this->descriptionOfProblem;
    }

    /**
     * Set browserVersion
     *
     * @param string $browserVersion
     *
     * @return Problems
     */
    public function setBrowserVersion($browserVersion)
    {
        $this->browserVersion = $browserVersion;

        return $this;
    }

    /**
     * Get browserVersion
     *
     * @return string
     */
    public function getBrowserVersion()
    {
        return $this->browserVersion;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return Problems
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set operatingSystem
     *
     * @param string $operatingSystem
     *
     * @return Problems
     */
    public function setOperatingSystem($operatingSystem)
    {
        $this->operatingSystem = $operatingSystem;

        return $this;
    }

    /**
     * Get operatingSystem
     *
     * @return string
     */
    public function getOperatingSystem()
    {
        return $this->operatingSystem;
    }

    /**
     * Set referringPage
     *
     * @param string $referringPage
     *
     * @return Problems
     */
    public function setReferringPage($referringPage)
    {
        $this->referringPage = $referringPage;

        return $this;
    }

    /**
     * Get referringPage
     *
     * @return string
     */
    public function getReferringPage()
    {
        return $this->referringPage;
    }

    /**
     * Set libraryName
     *
     * @param string $libraryName
     *
     * @return Problems
     */
    public function setLibraryName($libraryName)
    {
        $this->libraryName = $libraryName;

        return $this;
    }

    /**
     * Get libraryName
     *
     * @return string
     */
    public function getLibraryName()
    {
        return $this->libraryName;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Problems
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     *
     * @return Problems
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Problems
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set patronId
     *
     * @param string $patronId
     *
     * @return Problems
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
