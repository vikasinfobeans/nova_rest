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



    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return PostalCodes
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return PostalCodes
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set provinceName
     *
     * @param string $provinceName
     *
     * @return PostalCodes
     */
    public function setProvinceName($provinceName)
    {
        $this->provinceName = $provinceName;

        return $this;
    }

    /**
     * Get provinceName
     *
     * @return string
     */
    public function getProvinceName()
    {
        return $this->provinceName;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     *
     * @return PostalCodes
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set dayLightSaving
     *
     * @param string $dayLightSaving
     *
     * @return PostalCodes
     */
    public function setDayLightSaving($dayLightSaving)
    {
        $this->dayLightSaving = $dayLightSaving;

        return $this;
    }

    /**
     * Get dayLightSaving
     *
     * @return string
     */
    public function getDayLightSaving()
    {
        return $this->dayLightSaving;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return PostalCodes
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return PostalCodes
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return PostalCodes
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
     * @return PostalCodes
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
