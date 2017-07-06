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


}

