<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductOffer
 *
 * @ORM\Table(name="PRODUCT_OFFER", indexes={@ORM\Index(name="ProductOfferProdid", columns={"ProdID"})})
 * @ORM\Entity
 */
class ProductOffer
{
    /**
     * @var string
     *
     * @ORM\Column(name="LABEL_PRODUCT_OFFER_CODE", type="string", length=18, nullable=true)
     */
    private $labelProductOfferCode;

    /**
     * @var string
     *
     * @ORM\Column(name="CORP_CODE", type="string", length=10, nullable=true)
     */
    private $corpCode;

    /**
     * @var string
     *
     * @ORM\Column(name="LABEL_CODE", type="string", length=80, nullable=true)
     */
    private $labelCode;

    /**
     * @var string
     *
     * @ORM\Column(name="REPORTING_ID", type="string", length=18, nullable=true)
     */
    private $reportingId;

    /**
     * @var string
     *
     * @ORM\Column(name="EXCLUSIVE_IND", type="string", length=1, nullable=true)
     */
    private $exclusiveInd;

    /**
     * @var string
     *
     * @ORM\Column(name="PURCHASE", type="string", length=1, nullable=true)
     */
    private $purchase;

    /**
     * @var integer
     *
     * @ORM\Column(name="ProdID", type="bigint", nullable=true)
     */
    private $prodid;

    /**
     * @var string
     *
     * @ORM\Column(name="provider_type", type="string", length=10, nullable=true)
     */
    private $providerType = 'sony';

    /**
     * @var integer
     *
     * @ORM\Column(name="PRODUCT_OFFER_ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productOfferId;


}

