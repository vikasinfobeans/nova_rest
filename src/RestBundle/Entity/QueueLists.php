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


}

