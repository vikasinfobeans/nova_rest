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


}

