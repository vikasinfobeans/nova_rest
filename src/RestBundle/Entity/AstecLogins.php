<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AstecLogins
 *
 * @ORM\Table(name="astec_logins")
 * @ORM\Entity
 */
class AstecLogins
{
    /**
     * @var string
     *
     * @ORM\Column(name="tid", type="string", length=255, nullable=true)
     */
    private $tid;

    /**
     * @var integer
     *
     * @ORM\Column(name="state_code", type="integer", nullable=true)
     */
    private $stateCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_state", type="integer", nullable=true)
     */
    private $userState;

    /**
     * @var string
     *
     * @ORM\Column(name="user_handle", type="string", length=255, nullable=true)
     */
    private $userHandle;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_age_restriction", type="integer", nullable=true)
     */
    private $userAgeRestriction;

    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer", nullable=true)
     */
    private $libraryId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set tid
     *
     * @param string $tid
     *
     * @return AstecLogins
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get tid
     *
     * @return string
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set stateCode
     *
     * @param integer $stateCode
     *
     * @return AstecLogins
     */
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;

        return $this;
    }

    /**
     * Get stateCode
     *
     * @return integer
     */
    public function getStateCode()
    {
        return $this->stateCode;
    }

    /**
     * Set userState
     *
     * @param integer $userState
     *
     * @return AstecLogins
     */
    public function setUserState($userState)
    {
        $this->userState = $userState;

        return $this;
    }

    /**
     * Get userState
     *
     * @return integer
     */
    public function getUserState()
    {
        return $this->userState;
    }

    /**
     * Set userHandle
     *
     * @param string $userHandle
     *
     * @return AstecLogins
     */
    public function setUserHandle($userHandle)
    {
        $this->userHandle = $userHandle;

        return $this;
    }

    /**
     * Get userHandle
     *
     * @return string
     */
    public function getUserHandle()
    {
        return $this->userHandle;
    }

    /**
     * Set userAgeRestriction
     *
     * @param integer $userAgeRestriction
     *
     * @return AstecLogins
     */
    public function setUserAgeRestriction($userAgeRestriction)
    {
        $this->userAgeRestriction = $userAgeRestriction;

        return $this;
    }

    /**
     * Get userAgeRestriction
     *
     * @return integer
     */
    public function getUserAgeRestriction()
    {
        return $this->userAgeRestriction;
    }

    /**
     * Set libraryId
     *
     * @param integer $libraryId
     *
     * @return AstecLogins
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return AstecLogins
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
