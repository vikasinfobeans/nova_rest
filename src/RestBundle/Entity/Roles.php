<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity
 */
class Roles
{
    /**
     * @var string
     *
     * @ORM\Column(name="Role", type="string", length=60, nullable=false)
     */
    private $role;

    /**
     * @var integer
     *
     * @ORM\Column(name="RoleId", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $roleid;


}

