<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalesTerritory
 *
 * @ORM\Table(name="SALES_TERRITORY", indexes={@ORM\Index(name="SalesTerritoryPriceCategory", columns={"PRICE_CATEGORY"}), @ORM\Index(name="PRODUCT_OFFER_ID", columns={"PRODUCT_OFFER_ID"})})
 * @ORM\Entity
 */
class SalesTerritory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PRODUCT_OFFER_ID", type="bigint", nullable=true)
     */
    private $productOfferId;

    /**
     * @var string
     *
     * @ORM\Column(name="PRICE_CATEGORY", type="string", length=20, nullable=true)
     */
    private $priceCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="TERRITORY_CODE", type="string", length=3, nullable=true)
     */
    private $territoryCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SALES_START_DATE", type="date", nullable=true)
     */
    private $salesStartDate;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_type", type="string", length=10, nullable=true)
     */
    private $providerType = 'sony';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SALES_END_DATE", type="date", nullable=true)
     */
    private $salesEndDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="SALES_TERRITORY_ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $salesTerritoryId;



    /**
     * Set productOfferId
     *
     * @param integer $productOfferId
     *
     * @return SalesTerritory
     */
    public function setProductOfferId($productOfferId)
    {
        $this->productOfferId = $productOfferId;

        return $this;
    }

    /**
     * Get productOfferId
     *
     * @return integer
     */
    public function getProductOfferId()
    {
        return $this->productOfferId;
    }

    /**
     * Set priceCategory
     *
     * @param string $priceCategory
     *
     * @return SalesTerritory
     */
    public function setPriceCategory($priceCategory)
    {
        $this->priceCategory = $priceCategory;

        return $this;
    }

    /**
     * Get priceCategory
     *
     * @return string
     */
    public function getPriceCategory()
    {
        return $this->priceCategory;
    }

    /**
     * Set territoryCode
     *
     * @param string $territoryCode
     *
     * @return SalesTerritory
     */
    public function setTerritoryCode($territoryCode)
    {
        $this->territoryCode = $territoryCode;

        return $this;
    }

    /**
     * Get territoryCode
     *
     * @return string
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Set salesStartDate
     *
     * @param \DateTime $salesStartDate
     *
     * @return SalesTerritory
     */
    public function setSalesStartDate($salesStartDate)
    {
        $this->salesStartDate = $salesStartDate;

        return $this;
    }

    /**
     * Get salesStartDate
     *
     * @return \DateTime
     */
    public function getSalesStartDate()
    {
        return $this->salesStartDate;
    }

    /**
     * Set providerType
     *
     * @param string $providerType
     *
     * @return SalesTerritory
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
     * Set salesEndDate
     *
     * @param \DateTime $salesEndDate
     *
     * @return SalesTerritory
     */
    public function setSalesEndDate($salesEndDate)
    {
        $this->salesEndDate = $salesEndDate;

        return $this;
    }

    /**
     * Get salesEndDate
     *
     * @return \DateTime
     */
    public function getSalesEndDate()
    {
        return $this->salesEndDate;
    }

    /**
     * Get salesTerritoryId
     *
     * @return integer
     */
    public function getSalesTerritoryId()
    {
        return $this->salesTerritoryId;
    }
}
