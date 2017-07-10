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



    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return Zipcodes
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Zipcodes
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
     * Set state
     *
     * @param string $state
     *
     * @return Zipcodes
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set county
     *
     * @param string $county
     *
     * @return Zipcodes
     */
    public function setCounty($county)
    {
        $this->county = $county;

        return $this;
    }

    /**
     * Get county
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set areacode
     *
     * @param string $areacode
     *
     * @return Zipcodes
     */
    public function setAreacode($areacode)
    {
        $this->areacode = $areacode;

        return $this;
    }

    /**
     * Get areacode
     *
     * @return string
     */
    public function getAreacode()
    {
        return $this->areacode;
    }

    /**
     * Set citytype
     *
     * @param string $citytype
     *
     * @return Zipcodes
     */
    public function setCitytype($citytype)
    {
        $this->citytype = $citytype;

        return $this;
    }

    /**
     * Get citytype
     *
     * @return string
     */
    public function getCitytype()
    {
        return $this->citytype;
    }

    /**
     * Set cityaliasabbreviation
     *
     * @param string $cityaliasabbreviation
     *
     * @return Zipcodes
     */
    public function setCityaliasabbreviation($cityaliasabbreviation)
    {
        $this->cityaliasabbreviation = $cityaliasabbreviation;

        return $this;
    }

    /**
     * Get cityaliasabbreviation
     *
     * @return string
     */
    public function getCityaliasabbreviation()
    {
        return $this->cityaliasabbreviation;
    }

    /**
     * Set cityaliasname
     *
     * @param string $cityaliasname
     *
     * @return Zipcodes
     */
    public function setCityaliasname($cityaliasname)
    {
        $this->cityaliasname = $cityaliasname;

        return $this;
    }

    /**
     * Get cityaliasname
     *
     * @return string
     */
    public function getCityaliasname()
    {
        return $this->cityaliasname;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Zipcodes
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
     * @return Zipcodes
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
     * Set timezone
     *
     * @param string $timezone
     *
     * @return Zipcodes
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
     * Set elevation
     *
     * @param integer $elevation
     *
     * @return Zipcodes
     */
    public function setElevation($elevation)
    {
        $this->elevation = $elevation;

        return $this;
    }

    /**
     * Get elevation
     *
     * @return integer
     */
    public function getElevation()
    {
        return $this->elevation;
    }

    /**
     * Set countyfips
     *
     * @param string $countyfips
     *
     * @return Zipcodes
     */
    public function setCountyfips($countyfips)
    {
        $this->countyfips = $countyfips;

        return $this;
    }

    /**
     * Get countyfips
     *
     * @return string
     */
    public function getCountyfips()
    {
        return $this->countyfips;
    }

    /**
     * Set daylightsaving
     *
     * @param string $daylightsaving
     *
     * @return Zipcodes
     */
    public function setDaylightsaving($daylightsaving)
    {
        $this->daylightsaving = $daylightsaving;

        return $this;
    }

    /**
     * Get daylightsaving
     *
     * @return string
     */
    public function getDaylightsaving()
    {
        return $this->daylightsaving;
    }

    /**
     * Set preferredlastlinekey
     *
     * @param string $preferredlastlinekey
     *
     * @return Zipcodes
     */
    public function setPreferredlastlinekey($preferredlastlinekey)
    {
        $this->preferredlastlinekey = $preferredlastlinekey;

        return $this;
    }

    /**
     * Get preferredlastlinekey
     *
     * @return string
     */
    public function getPreferredlastlinekey()
    {
        return $this->preferredlastlinekey;
    }

    /**
     * Set classificationcode
     *
     * @param string $classificationcode
     *
     * @return Zipcodes
     */
    public function setClassificationcode($classificationcode)
    {
        $this->classificationcode = $classificationcode;

        return $this;
    }

    /**
     * Get classificationcode
     *
     * @return string
     */
    public function getClassificationcode()
    {
        return $this->classificationcode;
    }

    /**
     * Set multicounty
     *
     * @param string $multicounty
     *
     * @return Zipcodes
     */
    public function setMulticounty($multicounty)
    {
        $this->multicounty = $multicounty;

        return $this;
    }

    /**
     * Get multicounty
     *
     * @return string
     */
    public function getMulticounty()
    {
        return $this->multicounty;
    }

    /**
     * Set statefips
     *
     * @param string $statefips
     *
     * @return Zipcodes
     */
    public function setStatefips($statefips)
    {
        $this->statefips = $statefips;

        return $this;
    }

    /**
     * Get statefips
     *
     * @return string
     */
    public function getStatefips()
    {
        return $this->statefips;
    }

    /**
     * Set citystatekey
     *
     * @param string $citystatekey
     *
     * @return Zipcodes
     */
    public function setCitystatekey($citystatekey)
    {
        $this->citystatekey = $citystatekey;

        return $this;
    }

    /**
     * Get citystatekey
     *
     * @return string
     */
    public function getCitystatekey()
    {
        return $this->citystatekey;
    }

    /**
     * Set cityaliascode
     *
     * @param string $cityaliascode
     *
     * @return Zipcodes
     */
    public function setCityaliascode($cityaliascode)
    {
        $this->cityaliascode = $cityaliascode;

        return $this;
    }

    /**
     * Get cityaliascode
     *
     * @return string
     */
    public function getCityaliascode()
    {
        return $this->cityaliascode;
    }

    /**
     * Set primaryrecord
     *
     * @param string $primaryrecord
     *
     * @return Zipcodes
     */
    public function setPrimaryrecord($primaryrecord)
    {
        $this->primaryrecord = $primaryrecord;

        return $this;
    }

    /**
     * Get primaryrecord
     *
     * @return string
     */
    public function getPrimaryrecord()
    {
        return $this->primaryrecord;
    }

    /**
     * Set citymixedcase
     *
     * @param string $citymixedcase
     *
     * @return Zipcodes
     */
    public function setCitymixedcase($citymixedcase)
    {
        $this->citymixedcase = $citymixedcase;

        return $this;
    }

    /**
     * Get citymixedcase
     *
     * @return string
     */
    public function getCitymixedcase()
    {
        return $this->citymixedcase;
    }

    /**
     * Set cityaliasmixedcase
     *
     * @param string $cityaliasmixedcase
     *
     * @return Zipcodes
     */
    public function setCityaliasmixedcase($cityaliasmixedcase)
    {
        $this->cityaliasmixedcase = $cityaliasmixedcase;

        return $this;
    }

    /**
     * Get cityaliasmixedcase
     *
     * @return string
     */
    public function getCityaliasmixedcase()
    {
        return $this->cityaliasmixedcase;
    }

    /**
     * Set stateansi
     *
     * @param string $stateansi
     *
     * @return Zipcodes
     */
    public function setStateansi($stateansi)
    {
        $this->stateansi = $stateansi;

        return $this;
    }

    /**
     * Get stateansi
     *
     * @return string
     */
    public function getStateansi()
    {
        return $this->stateansi;
    }

    /**
     * Set countyansi
     *
     * @param string $countyansi
     *
     * @return Zipcodes
     */
    public function setCountyansi($countyansi)
    {
        $this->countyansi = $countyansi;

        return $this;
    }

    /**
     * Get countyansi
     *
     * @return string
     */
    public function getCountyansi()
    {
        return $this->countyansi;
    }

    /**
     * Set facilitycode
     *
     * @param string $facilitycode
     *
     * @return Zipcodes
     */
    public function setFacilitycode($facilitycode)
    {
        $this->facilitycode = $facilitycode;

        return $this;
    }

    /**
     * Get facilitycode
     *
     * @return string
     */
    public function getFacilitycode()
    {
        return $this->facilitycode;
    }

    /**
     * Set citydeliveryindicator
     *
     * @param string $citydeliveryindicator
     *
     * @return Zipcodes
     */
    public function setCitydeliveryindicator($citydeliveryindicator)
    {
        $this->citydeliveryindicator = $citydeliveryindicator;

        return $this;
    }

    /**
     * Get citydeliveryindicator
     *
     * @return string
     */
    public function getCitydeliveryindicator()
    {
        return $this->citydeliveryindicator;
    }

    /**
     * Set carrierrouteratesortation
     *
     * @param string $carrierrouteratesortation
     *
     * @return Zipcodes
     */
    public function setCarrierrouteratesortation($carrierrouteratesortation)
    {
        $this->carrierrouteratesortation = $carrierrouteratesortation;

        return $this;
    }

    /**
     * Get carrierrouteratesortation
     *
     * @return string
     */
    public function getCarrierrouteratesortation()
    {
        return $this->carrierrouteratesortation;
    }

    /**
     * Set financenumber
     *
     * @param string $financenumber
     *
     * @return Zipcodes
     */
    public function setFinancenumber($financenumber)
    {
        $this->financenumber = $financenumber;

        return $this;
    }

    /**
     * Get financenumber
     *
     * @return string
     */
    public function getFinancenumber()
    {
        return $this->financenumber;
    }

    /**
     * Set uniquezipname
     *
     * @param string $uniquezipname
     *
     * @return Zipcodes
     */
    public function setUniquezipname($uniquezipname)
    {
        $this->uniquezipname = $uniquezipname;

        return $this;
    }

    /**
     * Get uniquezipname
     *
     * @return string
     */
    public function getUniquezipname()
    {
        return $this->uniquezipname;
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
