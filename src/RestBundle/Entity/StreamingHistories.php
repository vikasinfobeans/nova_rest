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



    /**
     * Set prodid
     *
     * @param integer $prodid
     *
     * @return StreamingHistories
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
     * @return StreamingHistories
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
     * Set patronId
     *
     * @param string $patronId
     *
     * @return StreamingHistories
     */
    public function setPatronId($patronId)
    {
        $this->patronId = $patronId;

        return $this;
    }

    /**
     * Get patronId
     *
     * @return string
     */
    public function getPatronId()
    {
        return $this->patronId;
    }

    /**
     * Set libraryId
     *
     * @param integer $libraryId
     *
     * @return StreamingHistories
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
     * Set consumedTime
     *
     * @param integer $consumedTime
     *
     * @return StreamingHistories
     */
    public function setConsumedTime($consumedTime)
    {
        $this->consumedTime = $consumedTime;

        return $this;
    }

    /**
     * Get consumedTime
     *
     * @return integer
     */
    public function getConsumedTime()
    {
        return $this->consumedTime;
    }

    /**
     * Set createdon
     *
     * @param \DateTime $createdon
     *
     * @return StreamingHistories
     */
    public function setCreatedon($createdon)
    {
        $this->createdon = $createdon;

        return $this;
    }

    /**
     * Get createdon
     *
     * @return \DateTime
     */
    public function getCreatedon()
    {
        return $this->createdon;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     *
     * @return StreamingHistories
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Get userAgent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return StreamingHistories
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set tokenId
     *
     * @param string $tokenId
     *
     * @return StreamingHistories
     */
    public function setTokenId($tokenId)
    {
        $this->tokenId = $tokenId;

        return $this;
    }

    /**
     * Get tokenId
     *
     * @return string
     */
    public function getTokenId()
    {
        return $this->tokenId;
    }

    /**
     * Set actionType
     *
     * @param string $actionType
     *
     * @return StreamingHistories
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Get actionType
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Set songsQueueId
     *
     * @param integer $songsQueueId
     *
     * @return StreamingHistories
     */
    public function setSongsQueueId($songsQueueId)
    {
        $this->songsQueueId = $songsQueueId;

        return $this;
    }

    /**
     * Get songsQueueId
     *
     * @return integer
     */
    public function getSongsQueueId()
    {
        return $this->songsQueueId;
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
