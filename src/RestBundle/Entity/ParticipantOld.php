<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipantOld
 *
 * @ORM\Table(name="Participant_old", indexes={@ORM\Index(name="ProdID", columns={"ProdID"})})
 * @ORM\Entity
 */
class ParticipantOld
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
     * @ORM\Column(name="Role", type="string", length=60, nullable=true)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=80, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="RoleId", type="bigint", nullable=true)
     */
    private $roleid;

    /**
     * @var integer
     *
     * @ORM\Column(name="participant_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $participantId;



    /**
     * Set prodid
     *
     * @param integer $prodid
     *
     * @return ParticipantOld
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
     * Set role
     *
     * @param string $role
     *
     * @return ParticipantOld
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ParticipantOld
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set roleid
     *
     * @param integer $roleid
     *
     * @return ParticipantOld
     */
    public function setRoleid($roleid)
    {
        $this->roleid = $roleid;

        return $this;
    }

    /**
     * Get roleid
     *
     * @return integer
     */
    public function getRoleid()
    {
        return $this->roleid;
    }

    /**
     * Get participantId
     *
     * @return integer
     */
    public function getParticipantId()
    {
        return $this->participantId;
    }
}
