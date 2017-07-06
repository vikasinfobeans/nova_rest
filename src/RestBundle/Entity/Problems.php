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


}

