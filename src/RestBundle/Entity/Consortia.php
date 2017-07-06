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


}

