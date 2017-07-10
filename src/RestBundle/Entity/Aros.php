<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aros
 *
 * @ORM\Table(name="aros")
 * @ORM\Entity
 */
class Aros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255, nullable=true)
     */
    private $model;

    /**
     * @var integer
     *
     * @ORM\Column(name="foreign_key", type="integer", nullable=true)
     */
    private $foreignKey;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=255, nullable=true)
     */
    private $alias;

    /**
     * @var integer
     *
     * @ORM\Column(name="lft", type="integer", nullable=true)
     */
    private $lft;

    /**
     * @var integer
     *
     * @ORM\Column(name="rght", type="integer", nullable=true)
     */
    private $rght;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set parentId
     *
     * @param integer $parentId
     *
     * @return Aros
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Aros
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set foreignKey
     *
     * @param integer $foreignKey
     *
     * @return Aros
     */
    public function setForeignKey($foreignKey)
    {
        $this->foreignKey = $foreignKey;

        return $this;
    }

    /**
     * Get foreignKey
     *
     * @return integer
     */
    public function getForeignKey()
    {
        return $this->foreignKey;
    }

    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return Aros
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set lft
     *
     * @param integer $lft
     *
     * @return Aros
     */
    public function setLft($lft)
    {
        $this->lft = $lft;

        return $this;
    }

    /**
     * Get lft
     *
     * @return integer
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set rght
     *
     * @param integer $rght
     *
     * @return Aros
     */
    public function setRght($rght)
    {
        $this->rght = $rght;

        return $this;
    }

    /**
     * Get rght
     *
     * @return integer
     */
    public function getRght()
    {
        return $this->rght;
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
