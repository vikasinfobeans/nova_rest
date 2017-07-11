<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="PRODUCT", indexes={@ORM\Index(name="productProdID", columns={"ProdID"}), @ORM\Index(name="PT", columns={"provider_type"})})
 * @ORM\Entity
 */
class Product
{
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
     * @ORM\Column(name="pid", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pid;



    /**
     * Set prodid
     *
     * @param integer $prodid
     *
     * @return Product
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
     * @return Product
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
     * Get pid
     *
     * @return integer
     */
    public function getPid()
    {
        return $this->pid;
    }
}
