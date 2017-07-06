<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Timezones
 *
 * @ORM\Table(name="timezones", indexes={@ORM\Index(name="idx_zone_name", columns={"zone_name"})})
 * @ORM\Entity
 */
class Timezones
{
    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=2, nullable=false)
     */
    private $countryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="zone_name", type="string", length=35, nullable=false)
     */
    private $zoneName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

