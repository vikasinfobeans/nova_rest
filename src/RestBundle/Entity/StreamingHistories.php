<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StreamingHistories
 *
 * @ORM\Table(name="streaming_histories", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"}), @ORM\UniqueConstraint(name="token_id_UNIQUE", columns={"token_id"})}, indexes={@ORM\Index(name="LibraryID_PatronID_History", columns={"library_id", "patron_id"})})
 * @ORM\Entity
 */
class StreamingHistories
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
     * @ORM\Column(name="provider_type", type="string", length=15, nullable=true)
     */
    private $providerType;

    /**
     * @var string
     *
     * @ORM\Column(name="patron_id", type="string", length=225, nullable=true)
     */
    private $patronId;

    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer", nullable=true)
     */
    private $libraryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="consumed_time", type="integer", nullable=true)
     */
    private $consumedTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdOn", type="datetime", nullable=true)
     */
    private $createdon;

    /**
     * @var string
     *
     * @ORM\Column(name="user_agent", type="string", length=250, nullable=true)
     */
    private $userAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=20, nullable=true)
     */
    private $ipAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="token_id", type="string", length=55, nullable=true)
     */
    private $tokenId;

    /**
     * @var string
     *
     * @ORM\Column(name="action_type", type="string", length=20, nullable=true)
     */
    private $actionType;

    /**
     * @var integer
     *
     * @ORM\Column(name="songs_queue_id", type="integer", nullable=true)
     */
    private $songsQueueId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

