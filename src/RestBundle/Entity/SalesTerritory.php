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


}

