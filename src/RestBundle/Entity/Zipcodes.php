<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zipcodes
 *
 * @ORM\Table(name="zipcodes", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 * @ORM\Entity
 */
class Zipcodes
{
    /**
     * @var string
     *
     * @ORM\Column(name="ZipCode", type="string", length=5, nullable=false)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="City", type="string", length=35, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="State", type="string", length=2, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="County", type="string", length=45, nullable=true)
     */
    private $county;

    /**
     * @var string
     *
     * @ORM\Column(name="AreaCode", type="string", length=55, nullable=true)
     */
    private $areacode;

    /**
     * @var string
     *
     * @ORM\Column(name="CityType", type="string", length=1, nullable=true)
     */
    private $citytype;

    /**
     * @var string
     *
     * @ORM\Column(name="CityAliasAbbreviation", type="string", length=13, nullable=true)
     */
    private $cityaliasabbreviation;

    /**
     * @var string
     *
     * @ORM\Column(name="CityAliasName", type="string", length=35, nullable=true)
     */
    private $cityaliasname;

    /**
     * @var string
     *
     * @ORM\Column(name="Latitude", type="decimal", precision=12, scale=6, nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="Longitude", type="decimal", precision=12, scale=6, nullable=true)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="TimeZone", type="string", length=2, nullable=true)
     */
    private $timezone;

    /**
     * @var integer
     *
     * @ORM\Column(name="Elevation", type="integer", nullable=true)
     */
    private $elevation;

    /**
     * @var string
     *
     * @ORM\Column(name="CountyFIPS", type="string", length=5, nullable=true)
     */
    private $countyfips;

    /**
     * @var string
     *
     * @ORM\Column(name="DayLightSaving", type="string", length=1, nullable=true)
     */
    private $daylightsaving;

    /**
     * @var string
     *
     * @ORM\Column(name="PreferredLastLineKey", type="string", length=10, nullable=true)
     */
    private $preferredlastlinekey;

    /**
     * @var string
     *
     * @ORM\Column(name="ClassificationCode", type="string", length=1, nullable=true)
     */
    private $classificationcode;

    /**
     * @var string
     *
     * @ORM\Column(name="MultiCounty", type="string", length=1, nullable=true)
     */
    private $multicounty;

    /**
     * @var string
     *
     * @ORM\Column(name="StateFIPS", type="string", length=2, nullable=true)
     */
    private $statefips;

    /**
     * @var string
     *
     * @ORM\Column(name="CityStateKey", type="string", length=6, nullable=true)
     */
    private $citystatekey;

    /**
     * @var string
     *
     * @ORM\Column(name="CityAliasCode", type="string", length=5, nullable=true)
     */
    private $cityaliascode;

    /**
     * @var string
     *
     * @ORM\Column(name="PrimaryRecord", type="string", length=1, nullable=true)
     */
    private $primaryrecord;

    /**
     * @var string
     *
     * @ORM\Column(name="CityMixedCase", type="string", length=35, nullable=true)
     */
    private $citymixedcase;

    /**
     * @var string
     *
     * @ORM\Column(name="CityAliasMixedCase", type="string", length=35, nullable=true)
     */
    private $cityaliasmixedcase;

    /**
     * @var string
     *
     * @ORM\Column(name="StateANSI", type="string", length=2, nullable=true)
     */
    private $stateansi;

    /**
     * @var string
     *
     * @ORM\Column(name="CountyANSI", type="string", length=3, nullable=true)
     */
    private $countyansi;

    /**
     * @var string
     *
     * @ORM\Column(name="FacilityCode", type="string", length=1, nullable=true)
     */
    private $facilitycode;

    /**
     * @var string
     *
     * @ORM\Column(name="CityDeliveryIndicator", type="string", length=1, nullable=true)
     */
    private $citydeliveryindicator;

    /**
     * @var string
     *
     * @ORM\Column(name="CarrierRouteRateSortation", type="string", length=1, nullable=true)
     */
    private $carrierrouteratesortation;

    /**
     * @var string
     *
     * @ORM\Column(name="FinanceNumber", type="string", length=6, nullable=true)
     */
    private $financenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="UniqueZIPName", type="string", length=1, nullable=true)
     */
    private $uniquezipname;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

