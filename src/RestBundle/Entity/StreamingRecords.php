<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StreamingRecords
 *
 * @ORM\Table(name="streaming_records", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})}, indexes={@ORM\Index(name="LibraryID_PatronID_Records", columns={"library_id", "patron_id"})})
 * @ORM\Entity
 */
class StreamingRecords
{
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
     * @var \DateTime
     *
     * @ORM\Column(name="updateOn", type="datetime", nullable=true)
     */
    private $updateon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified_date", type="datetime", nullable=false)
     */
    private $modifiedDate = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

