<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostalCodes
 *
 * @ORM\Table(name="postal_codes")
 * @ORM\Entity
 */
class PostalCodes
{
    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="string", length=10, nullable=false)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=35, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="province_name", type="string", length=35, nullable=false)
     */
    private $provinceName;

    /**
     * @var string
     *
     * @ORM\Column(name="timezone", type="string", length=2, nullable=true)
     */
    private $timezone;

    /**
     * @var string
     *
     * @ORM\Column(name="day_light_saving", type="string", length=1, nullable=true)
     */
    private $dayLightSaving;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="decimal", precision=12, scale=6, nullable=false)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="decimal", precision=12, scale=6, nullable=false)
     */
    private $longitude;

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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

