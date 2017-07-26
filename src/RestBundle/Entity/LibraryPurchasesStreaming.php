<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LibraryPurchasesStreaming
 *
 * @ORM\Table(name="library_purchases_streaming", uniqueConstraints={@ORM\UniqueConstraint(name="library_id", columns={"library_id", "purchased_order_num"})})
 * @ORM\Entity
 */
class LibraryPurchasesStreaming
{
    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer", nullable=false)
     */
    private $libraryId;

    /**
     * @var string
     *
     * @ORM\Column(name="purchased_order_num", type="string", length=255, nullable=false)
     */
    private $purchasedOrderNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="purchased_hours", type="integer", nullable=false)
     */
    private $purchasedHours;

    /**
     * @var float
     *
     * @ORM\Column(name="purchased_amount", type="float", precision=10, scale=0, nullable=false)
     */
    private $purchasedAmount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false)
     */
    private $modified;

    /**
     * @var float
     *
     * @ORM\Column(name="acv", type="float", precision=10, scale=0, nullable=true)
     */
    private $acv = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="circulation", type="string", length=255, nullable=true)
     */
    private $circulation = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set libraryId
     *
     * @param integer $libraryId
     *
     * @return LibraryPurchasesStreaming
     */
    public function setLibraryId($libraryId)
    {
        $this->libraryId = $libraryId;

        return $this;
    }

    /**
     * Get libraryId
     *
     * @return integer
     */
    public function getLibraryId()
    {
        return $this->libraryId;
    }

    /**
     * Set purchasedOrderNum
     *
     * @param string $purchasedOrderNum
     *
     * @return LibraryPurchasesStreaming
     */
    public function setPurchasedOrderNum($purchasedOrderNum)
    {
        $this->purchasedOrderNum = $purchasedOrderNum;

        return $this;
    }

    /**
     * Get purchasedOrderNum
     *
     * @return string
     */
    public function getPurchasedOrderNum()
    {
        return $this->purchasedOrderNum;
    }

    /**
     * Set purchasedHours
     *
     * @param integer $purchasedHours
     *
     * @return LibraryPurchasesStreaming
     */
    public function setPurchasedHours($purchasedHours)
    {
        $this->purchasedHours = $purchasedHours;

        return $this;
    }

    /**
     * Get purchasedHours
     *
     * @return integer
     */
    public function getPurchasedHours()
    {
        return $this->purchasedHours;
    }

    /**
     * Set purchasedAmount
     *
     * @param float $purchasedAmount
     *
     * @return LibraryPurchasesStreaming
     */
    public function setPurchasedAmount($purchasedAmount)
    {
        $this->purchasedAmount = $purchasedAmount;

        return $this;
    }

    /**
     * Get purchasedAmount
     *
     * @return float
     */
    public function getPurchasedAmount()
    {
        return $this->purchasedAmount;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return LibraryPurchasesStreaming
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
     * @return LibraryPurchasesStreaming
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
     * Set acv
     *
     * @param float $acv
     *
     * @return LibraryPurchasesStreaming
     */
    public function setAcv($acv)
    {
        $this->acv = $acv;

        return $this;
    }

    /**
     * Get acv
     *
     * @return float
     */
    public function getAcv()
    {
        return $this->acv;
    }

    /**
     * Set circulation
     *
     * @param string $circulation
     *
     * @return LibraryPurchasesStreaming
     */
    public function setCirculation($circulation)
    {
        $this->circulation = $circulation;

        return $this;
    }

    /**
     * Get circulation
     *
     * @return string
     */
    public function getCirculation()
    {
        return $this->circulation;
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
