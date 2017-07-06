<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Territories
 *
 * @ORM\Table(name="territories")
 * @ORM\Entity
 */
class Territories
{
    /**
     * @var string
     *
     * @ORM\Column(name="Territory", type="string", length=3, nullable=false)
     */
    private $territory;

    /**
     * @var integer
     *
     * @ORM\Column(name="TerritoryId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $territoryid;


}

