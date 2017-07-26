<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currentpatrons
 *
 * @ORM\Table(name="currentpatrons", indexes={@ORM\Index(name="CurrentPatronsPatronID", columns={"patronid"}), @ORM\Index(name="CurrentPatronsLibID", columns={"libid"})})
 * @ORM\Entity
 */
class Currentpatrons
{
    /**
     * @var integer
     *
     * @ORM\Column(name="libid", type="integer", nullable=false)
     */
    private $libid;

    /**
     * @var string
     *
     * @ORM\Column(name="patronid", type="string", length=50, nullable=false)
     */
    private $patronid;

    /**
     * @var string
     *
     * @ORM\Column(name="consortium", type="string", length=255, nullable=true)
     */
    private $consortium;

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
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=50, nullable=false)
     */
    private $sessionId;

    /**
     * @var string
     *
     * @ORM\Column(name="is_approved", type="string", nullable=false)
     */
    private $isApproved = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="stream_popup", type="string", nullable=false)
     */
    private $streamPopup = 'no';

    /**
     * @var string
     *
     * @ORM\Column(name="notify_popup", type="string", nullable=false)
     */
    private $notifyPopup = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="branch_name", type="string", length=255, nullable=true)
     */
    private $branchName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set libid
     *
     * @param integer $libid
     *
     * @return Currentpatrons
     */
    public function setLibid($libid)
    {
        $this->libid = $libid;

        return $this;
    }

    /**
     * Get libid
     *
     * @return integer
     */
    public function getLibid()
    {
        return $this->libid;
    }

    /**
     * Set patronid
     *
     * @param string $patronid
     *
     * @return Currentpatrons
     */
    public function setPatronid($patronid)
    {
        $this->patronid = $patronid;

        return $this;
    }

    /**
     * Get patronid
     *
     * @return string
     */
    public function getPatronid()
    {
        return $this->patronid;
    }

    /**
     * Set consortium
     *
     * @param string $consortium
     *
     * @return Currentpatrons
     */
    public function setConsortium($consortium)
    {
        $this->consortium = $consortium;

        return $this;
    }

    /**
     * Get consortium
     *
     * @return string
     */
    public function getConsortium()
    {
        return $this->consortium;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Currentpatrons
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
     * @return Currentpatrons
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
     * Set sessionId
     *
     * @param string $sessionId
     *
     * @return Currentpatrons
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set isApproved
     *
     * @param string $isApproved
     *
     * @return Currentpatrons
     */
    public function setIsApproved($isApproved)
    {
        $this->isApproved = $isApproved;

        return $this;
    }

    /**
     * Get isApproved
     *
     * @return string
     */
    public function getIsApproved()
    {
        return $this->isApproved;
    }

    /**
     * Set streamPopup
     *
     * @param string $streamPopup
     *
     * @return Currentpatrons
     */
    public function setStreamPopup($streamPopup)
    {
        $this->streamPopup = $streamPopup;

        return $this;
    }

    /**
     * Get streamPopup
     *
     * @return string
     */
    public function getStreamPopup()
    {
        return $this->streamPopup;
    }

    /**
     * Set notifyPopup
     *
     * @param string $notifyPopup
     *
     * @return Currentpatrons
     */
    public function setNotifyPopup($notifyPopup)
    {
        $this->notifyPopup = $notifyPopup;

        return $this;
    }

    /**
     * Get notifyPopup
     *
     * @return string
     */
    public function getNotifyPopup()
    {
        return $this->notifyPopup;
    }

    /**
     * Set branchName
     *
     * @param string $branchName
     *
     * @return Currentpatrons
     */
    public function setBranchName($branchName)
    {
        $this->branchName = $branchName;

        return $this;
    }

    /**
     * Get branchName
     *
     * @return string
     */
    public function getBranchName()
    {
        return $this->branchName;
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
