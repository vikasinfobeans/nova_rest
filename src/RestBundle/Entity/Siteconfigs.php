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


}

