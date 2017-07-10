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



    /**
     * Set countryCode
     *
     * @param string $countryCode
     *
     * @return Timezones
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set zoneName
     *
     * @param string $zoneName
     *
     * @return Timezones
     */
    public function setZoneName($zoneName)
    {
        $this->zoneName = $zoneName;

        return $this;
    }

    /**
     * Get zoneName
     *
     * @return string
     */
    public function getZoneName()
    {
        return $this->zoneName;
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
