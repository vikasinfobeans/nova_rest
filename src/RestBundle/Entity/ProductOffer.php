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



    /**
     * Set labelProductOfferCode
     *
     * @param string $labelProductOfferCode
     *
     * @return ProductOffer
     */
    public function setLabelProductOfferCode($labelProductOfferCode)
    {
        $this->labelProductOfferCode = $labelProductOfferCode;

        return $this;
    }

    /**
     * Get labelProductOfferCode
     *
     * @return string
     */
    public function getLabelProductOfferCode()
    {
        return $this->labelProductOfferCode;
    }

    /**
     * Set corpCode
     *
     * @param string $corpCode
     *
     * @return ProductOffer
     */
    public function setCorpCode($corpCode)
    {
        $this->corpCode = $corpCode;

        return $this;
    }

    /**
     * Get corpCode
     *
     * @return string
     */
    public function getCorpCode()
    {
        return $this->corpCode;
    }

    /**
     * Set labelCode
     *
     * @param string $labelCode
     *
     * @return ProductOffer
     */
    public function setLabelCode($labelCode)
    {
        $this->labelCode = $labelCode;

        return $this;
    }

    /**
     * Get labelCode
     *
     * @return string
     */
    public function getLabelCode()
    {
        return $this->labelCode;
    }

    /**
     * Set reportingId
     *
     * @param string $reportingId
     *
     * @return ProductOffer
     */
    public function setReportingId($reportingId)
    {
        $this->reportingId = $reportingId;

        return $this;
    }

    /**
     * Get reportingId
     *
     * @return string
     */
    public function getReportingId()
    {
        return $this->reportingId;
    }

    /**
     * Set exclusiveInd
     *
     * @param string $exclusiveInd
     *
     * @return ProductOffer
     */
    public function setExclusiveInd($exclusiveInd)
    {
        $this->exclusiveInd = $exclusiveInd;

        return $this;
    }

    /**
     * Get exclusiveInd
     *
     * @return string
     */
    public function getExclusiveInd()
    {
        return $this->exclusiveInd;
    }

    /**
     * Set purchase
     *
     * @param string $purchase
     *
     * @return ProductOffer
     */
    public function setPurchase($purchase)
    {
        $this->purchase = $purchase;

        return $this;
    }

    /**
     * Get purchase
     *
     * @return string
     */
    public function getPurchase()
    {
        return $this->purchase;
    }

    /**
     * Set prodid
     *
     * @param integer $prodid
     *
     * @return ProductOffer
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

    /**
     * Set providerType
     *
     * @param string $providerType
     *
     * @return ProductOffer
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
     * Get productOfferId
     *
     * @return integer
     */
    public function getProductOfferId()
    {
        return $this->productOfferId;
    }
}
