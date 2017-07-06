<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationSubscriptions
 *
 * @ORM\Table(name="notification_subscriptions")
 * @ORM\Entity
 */
class NotificationSubscriptions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer", nullable=true)
     */
    private $libraryId;

    /**
     * @var string
     *
     * @ORM\Column(name="patron_id", type="string", length=100, nullable=true)
     */
    private $patronId;

    /**
     * @var string
     *
     * @ORM\Column(name="email_id", type="string", length=255, nullable=true)
     */
    private $emailId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=false)
     */
    private $createdDate = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

