<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Siteconfigs
 *
 * @ORM\Table(name="siteconfigs")
 * @ORM\Entity
 */
class Siteconfigs
{
    /**
     * @var string
     *
     * @ORM\Column(name="soption", type="string", length=100, nullable=false)
     */
    private $soption;

    /**
     * @var string
     *
     * @ORM\Column(name="svalue", type="string", length=100, nullable=false)
     */
    private $svalue;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set soption
     *
     * @param string $soption
     *
     * @return Siteconfigs
     */
    public function setSoption($soption)
    {
        $this->soption = $soption;

        return $this;
    }

    /**
     * Get soption
     *
     * @return string
     */
    public function getSoption()
    {
        return $this->soption;
    }

    /**
     * Set svalue
     *
     * @param string $svalue
     *
     * @return Siteconfigs
     */
    public function setSvalue($svalue)
    {
        $this->svalue = $svalue;

        return $this;
    }

    /**
     * Get svalue
     *
     * @return string
     */
    public function getSvalue()
    {
        return $this->svalue;
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
