<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QueueLists
 *
 * @ORM\Table(name="queue_lists")
 * @ORM\Entity
 */
class QueueLists
{
    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer", nullable=false)
     */
    private $libraryId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="queue_name", type="string", length=100, nullable=false)
     */
    private $queueName;

    /**
     * @var string
     *
     * @ORM\Column(name="allowed_territories", type="string", length=100, nullable=true)
     */
    private $allowedTerritories;

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
    private $modified = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="patron_id", type="string", length=225, nullable=false)
     */
    private $patronId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="queue_type", type="boolean", nullable=true)
     */
    private $queueType;

    /**
     * @var integer
     *
     * @ORM\Column(name="sortId", type="integer", nullable=true)
     */
    private $sortid;

    /**
     * @var integer
     *
     * @ORM\Column(name="queue_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $queueId;



    /**
     * Set libraryId
     *
     * @param integer $libraryId
     *
     * @return QueueLists
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
     * Set queueName
     *
     * @param string $queueName
     *
     * @return QueueLists
     */
    public function setQueueName($queueName)
    {
        $this->queueName = $queueName;

        return $this;
    }

    /**
     * Get queueName
     *
     * @return string
     */
    public function getQueueName()
    {
        return $this->queueName;
    }

    /**
     * Set allowedTerritories
     *
     * @param string $allowedTerritories
     *
     * @return QueueLists
     */
    public function setAllowedTerritories($allowedTerritories)
    {
        $this->allowedTerritories = $allowedTerritories;

        return $this;
    }

    /**
     * Get allowedTerritories
     *
     * @return string
     */
    public function getAllowedTerritories()
    {
        return $this->allowedTerritories;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return QueueLists
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
     * @return QueueLists
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
     * Set patronId
     *
     * @param string $patronId
     *
     * @return QueueLists
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
     * Set status
     *
     * @param boolean $status
     *
     * @return QueueLists
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return QueueLists
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set queueType
     *
     * @param boolean $queueType
     *
     * @return QueueLists
     */
    public function setQueueType($queueType)
    {
        $this->queueType = $queueType;

        return $this;
    }

    /**
     * Get queueType
     *
     * @return boolean
     */
    public function getQueueType()
    {
        return $this->queueType;
    }

    /**
     * Set sortid
     *
     * @param integer $sortid
     *
     * @return QueueLists
     */
    public function setSortid($sortid)
    {
        $this->sortid = $sortid;

        return $this;
    }

    /**
     * Get sortid
     *
     * @return integer
     */
    public function getSortid()
    {
        return $this->sortid;
    }

    /**
     * Get queueId
     *
     * @return integer
     */
    public function getQueueId()
    {
        return $this->queueId;
    }
}
