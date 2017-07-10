<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 *
 * @ORM\Table(name="countries", uniqueConstraints={@ORM\UniqueConstraint(name="ProdID_UNIQUE", columns={"ProdID"})}, indexes={@ORM\Index(name="ProdID", columns={"ProdID"}), @ORM\Index(name="Territory_ProdID", columns={"ProdID", "Territory"}), @ORM\Index(name="Territory", columns={"Territory"})})
 * @ORM\Entity
 */
class Countries
{
    /**
     * @var string
     *
     * @ORM\Column(name="Territory", type="string", length=3, nullable=false)
     */
    private $territory;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SalesDate", type="date", nullable=false)
     */
    private $salesdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="TerritoryId", type="integer", nullable=true)
     */
    private $territoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_type", type="string", length=10, nullable=true)
     */
    private $providerType = 'sony';

    /**
     * @var integer
     *
     * @ORM\Column(name="ProdID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prodid;



    /**
     * Set territory
     *
     * @param string $territory
     *
     * @return Countries
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
     * @return Countries
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
     * Set territoryid
     *
     * @param integer $territoryid
     *
     * @return Countries
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
     * Set providerType
     *
     * @param string $providerType
     *
     * @return Countries
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
     * Get prodid
     *
     * @return integer
     */
    public function getProdid()
    {
        return $this->prodid;
    }
}
