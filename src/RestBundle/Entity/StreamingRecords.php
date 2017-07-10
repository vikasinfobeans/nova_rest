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



    /**
     * Set patronId
     *
     * @param string $patronId
     *
     * @return StreamingRecords
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
     * @return StreamingRecords
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
     * @return StreamingRecords
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
     * @return StreamingRecords
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
     * Set updateon
     *
     * @param \DateTime $updateon
     *
     * @return StreamingRecords
     */
    public function setUpdateon($updateon)
    {
        $this->updateon = $updateon;

        return $this;
    }

    /**
     * Get updateon
     *
     * @return \DateTime
     */
    public function getUpdateon()
    {
        return $this->updateon;
    }

    /**
     * Set modifiedDate
     *
     * @param \DateTime $modifiedDate
     *
     * @return StreamingRecords
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;

        return $this;
    }

    /**
     * Get modifiedDate
     *
     * @return \DateTime
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
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
