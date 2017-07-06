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


}

