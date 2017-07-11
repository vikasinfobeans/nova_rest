<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GbCountries
 *
 * @ORM\Table(name="gb_countries", indexes={@ORM\Index(name="ProdID_PT_T", columns={"ProdID", "provider_type", "Territory"}), @ORM\Index(name="SalesDate_index", columns={"SalesDate"})})
 * @ORM\Entity
 */
class GbCountries
{
    /**
     * @var string
     *
     * @ORM\Column(name="ioda_release_id", type="string", length=20, nullable=true)
     */
    private $iodaReleaseId;

    /**
     * @var string
     *
     * @ORM\Column(name="Territory", type="string", length=3, nullable=true)
     */
    private $territory;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SalesDate", type="date", nullable=true)
     */
    private $salesdate;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_type", type="string", length=10, nullable=false)
     */
    private $providerType = 'sony';

    /**
     * @var integer
     *
     * @ORM\Column(name="TerritoryId", type="integer", nullable=true)
     */
    private $territoryid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="DownloadStatus", type="boolean", nullable=false)
     */
    private $downloadstatus = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="StreamingStatus", type="boolean", nullable=false)
     */
    private $streamingstatus = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="StreamingSalesDate", type="date", nullable=false)
     */
    private $streamingsalesdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UpdateOn", type="datetime", nullable=false)
     */
    private $updateon = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ProdID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $prodid;



    /**
     * Set iodaReleaseId
     *
     * @param string $iodaReleaseId
     *
     * @return GbCountries
     */
    public function setIodaReleaseId($iodaReleaseId)
    {
        $this->iodaReleaseId = $iodaReleaseId;

        return $this;
    }

    /**
     * Get iodaReleaseId
     *
     * @return string
     */
    public function getIodaReleaseId()
    {
        return $this->iodaReleaseId;
    }

    /**
     * Set territory
     *
     * @param string $territory
     *
     * @return GbCountries
     */
    public function setTerritory($territory)
    {
        $this->territory = $territory;

        return $this;
    }

    /**
     * Get territory
     *
     * @return string
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * Set salesdate
     *
     * @param \DateTime $salesdate
     *
     * @return GbCountries
     */
    public function setSalesdate($salesdate)
    {
        $this->salesdate = $salesdate;

        return $this;
    }

    /**
     * Get salesdate
     *
     * @return \DateTime
     */
    public function getSalesdate()
    {
        return $this->salesdate;
    }

    /**
     * Set providerType
     *
     * @param string $providerType
     *
     * @return GbCountries
     */
    public function setProviderType($providerType)
    {
        $this->providerType = $providerType;

        return $this;
    }

    /**
     * Get providerType
     *
     * @return string
     */
    public function getProviderType()
    {
        return $this->providerType;
    }

    /**
     * Set territoryid
     *
     * @param integer $territoryid
     *
     * @return GbCountries
     */
    public function setTerritoryid($territoryid)
    {
        $this->territoryid = $territoryid;

        return $this;
    }

    /**
     * Get territoryid
     *
     * @return integer
     */
    public function getTerritoryid()
    {
        return $this->territoryid;
    }

    /**
     * Set downloadstatus
     *
     * @param boolean $downloadstatus
     *
     * @return GbCountries
     */
    public function setDownloadstatus($downloadstatus)
    {
        $this->downloadstatus = $downloadstatus;

        return $this;
    }

    /**
     * Get downloadstatus
     *
     * @return boolean
     */
    public function getDownloadstatus()
    {
        return $this->downloadstatus;
    }

    /**
     * Set streamingstatus
     *
     * @param boolean $streamingstatus
     *
     * @return GbCountries
     */
    public function setStreamingstatus($streamingstatus)
    {
        $this->streamingstatus = $streamingstatus;

        return $this;
    }

    /**
     * Get streamingstatus
     *
     * @return boolean
     */
    public function getStreamingstatus()
    {
        return $this->streamingstatus;
    }

    /**
     * Set streamingsalesdate
     *
     * @param \DateTime $streamingsalesdate
     *
     * @return GbCountries
     */
    public function setStreamingsalesdate($streamingsalesdate)
    {
        $this->streamingsalesdate = $streamingsalesdate;

        return $this;
    }

    /**
     * Get streamingsalesdate
     *
     * @return \DateTime
     */
    public function getStreamingsalesdate()
    {
        return $this->streamingsalesdate;
    }

    /**
     * Set updateon
     *
     * @param \DateTime $updateon
     *
     * @return GbCountries
     */
    public function setUpdateon($updateon)
    {
        $this->updateon = $updateon;

        return $this;
    }

    /**
     * Get updateon
     *
     * @return \DateTime
     */
    public function getUpdateon()
    {
        return $this->updateon;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return GbCountries
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    /**
     * Set prodid
     *
     * @param integer $prodid
     *
     * @return GbCountries
     */
    public function setProdid($prodid)
    {
        $this->prodid = $prodid;

        return $this;
    }

    /**
     * Get prodid
     *
     * @return integer
     */
    public function getProdid()
    {
        return $this->prodid;
    }
}
