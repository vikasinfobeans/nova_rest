<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IpExceptions
 *
 * @ORM\Table(name="ip_exceptions")
 * @ORM\Entity
 */
class IpExceptions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="lib_id", type="integer", nullable=false)
     */
    private $libId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_addr_from", type="decimal", precision=39, scale=0, nullable=false)
     */
    private $ipAddrFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_addr_to", type="decimal", precision=39, scale=0, nullable=false)
     */
    private $ipAddrTo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set libId
     *
     * @param integer $libId
     *
     * @return IpExceptions
     */
    public function setLibId($libId)
    {
        $this->libId = $libId;

        return $this;
    }

    /**
     * Get libId
     *
     * @return integer
     */
    public function getLibId()
    {
        return $this->libId;
    }

    /**
     * Set ipAddrFrom
     *
     * @param string $ipAddrFrom
     *
     * @return IpExceptions
     */
    public function setIpAddrFrom($ipAddrFrom)
    {
        $this->ipAddrFrom = $ipAddrFrom;

        return $this;
    }

    /**
     * Get ipAddrFrom
     *
     * @return string
     */
    public function getIpAddrFrom()
    {
        return $this->ipAddrFrom;
    }

    /**
     * Set ipAddrTo
     *
     * @param string $ipAddrTo
     *
     * @return IpExceptions
     */
    public function setIpAddrTo($ipAddrTo)
    {
        $this->ipAddrTo = $ipAddrTo;

        return $this;
    }

    /**
     * Get ipAddrTo
     *
     * @return string
     */
    public function getIpAddrTo()
    {
        return $this->ipAddrTo;
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
