<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consortia
 *
 * @ORM\Table(name="consortia")
 * @ORM\Entity
 */
class Consortia
{
    /**
     * @var string
     *
     * @ORM\Column(name="consortium_name", type="string", length=255, nullable=false)
     */
    private $consortiumName;

    /**
     * @var string
     *
     * @ORM\Column(name="consortium_key", type="text", length=65535, nullable=false)
     */
    private $consortiumKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="crm_consortia_id", type="integer", nullable=true)
     */
    private $crmConsortiaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set consortiumName
     *
     * @param string $consortiumName
     *
     * @return Consortia
     */
    public function setConsortiumName($consortiumName)
    {
        $this->consortiumName = $consortiumName;

        return $this;
    }

    /**
     * Get consortiumName
     *
     * @return string
     */
    public function getConsortiumName()
    {
        return $this->consortiumName;
    }

    /**
     * Set consortiumKey
     *
     * @param string $consortiumKey
     *
     * @return Consortia
     */
    public function setConsortiumKey($consortiumKey)
    {
        $this->consortiumKey = $consortiumKey;

        return $this;
    }

    /**
     * Get consortiumKey
     *
     * @return string
     */
    public function getConsortiumKey()
    {
        return $this->consortiumKey;
    }

    /**
     * Set crmConsortiaId
     *
     * @param integer $crmConsortiaId
     *
     * @return Consortia
     */
    public function setCrmConsortiaId($crmConsortiaId)
    {
        $this->crmConsortiaId = $crmConsortiaId;

        return $this;
    }

    /**
     * Get crmConsortiaId
     *
     * @return integer
     */
    public function getCrmConsortiaId()
    {
        return $this->crmConsortiaId;
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
