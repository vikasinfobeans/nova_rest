<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemDatas
 *
 * @ORM\Table(name="mem_datas", indexes={@ORM\Index(name="indx_cache_var_name", columns={"cache_variable_name"})})
 * @ORM\Entity
 */
class MemDatas
{
    /**
     * @var string
     *
     * @ORM\Column(name="vari_info", type="blob", nullable=true)
     */
    private $variInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="cache_variable_name", type="string", length=250, nullable=true)
     */
    private $cacheVariableName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false)
     */
    private $modified = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set variInfo
     *
     * @param string $variInfo
     *
     * @return MemDatas
     */
    public function setVariInfo($variInfo)
    {
        $this->variInfo = $variInfo;

        return $this;
    }

    /**
     * Get variInfo
     *
     * @return string
     */
    public function getVariInfo()
    {
        return $this->variInfo;
    }

    /**
     * Set cacheVariableName
     *
     * @param string $cacheVariableName
     *
     * @return MemDatas
     */
    public function setCacheVariableName($cacheVariableName)
    {
        $this->cacheVariableName = $cacheVariableName;

        return $this;
    }

    /**
     * Get cacheVariableName
     *
     * @return string
     */
    public function getCacheVariableName()
    {
        return $this->cacheVariableName;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     *
     * @return MemDatas
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
