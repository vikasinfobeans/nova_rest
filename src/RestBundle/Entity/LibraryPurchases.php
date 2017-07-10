<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LibraryPurchases
 *
 * @ORM\Table(name="library_purchases", uniqueConstraints={@ORM\UniqueConstraint(name="library_id", columns={"library_id", "purchased_order_num"})})
 * @ORM\Entity
 */
class LibraryPurchases
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
     * @ORM\Column(name="purchased_tracks", type="integer", nullable=false)
     */
    private $purchasedTracks;

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
     * @var integer
     *
     * @ORM\Column(name="previously_available_downloads", type="integer", nullable=false)
     */
    private $previouslyAvailableDownloads = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="acv", type="float", precision=10, scale=0, nullable=true)
     */
    private $acv;

    /**
     * @var string
     *
     * @ORM\Column(name="circulation", type="string", length=255, nullable=true)
     */
    private $circulation;

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
     * @return LibraryPurchases
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
     * @return LibraryPurchases
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
     * Set purchasedTracks
     *
     * @param integer $purchasedTracks
     *
     * @return LibraryPurchases
     */
    public function setPurchasedTracks($purchasedTracks)
    {
        $this->purchasedTracks = $purchasedTracks;

        return $this;
    }

    /**
     * Get purchasedTracks
     *
     * @return integer
     */
    public function getPurchasedTracks()
    {
        return $this->purchasedTracks;
    }

    /**
     * Set purchasedAmount
     *
     * @param float $purchasedAmount
     *
     * @return LibraryPurchases
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
     * @return LibraryPurchases
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
     * @return LibraryPurchases
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
     * Set previouslyAvailableDownloads
     *
     * @param integer $previouslyAvailableDownloads
     *
     * @return LibraryPurchases
     */
    public function setPreviouslyAvailableDownloads($previouslyAvailableDownloads)
    {
        $this->previouslyAvailableDownloads = $previouslyAvailableDownloads;

        return $this;
    }

    /**
     * Get previouslyAvailableDownloads
     *
     * @return integer
     */
    public function getPreviouslyAvailableDownloads()
    {
        return $this->previouslyAvailableDownloads;
    }

    /**
     * Set acv
     *
     * @param float $acv
     *
     * @return LibraryPurchases
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
     * @return LibraryPurchases
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
