<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArosAcos
 *
 * @ORM\Table(name="aros_acos", uniqueConstraints={@ORM\UniqueConstraint(name="ARO_ACO_KEY", columns={"aro_id", "aco_id"})})
 * @ORM\Entity
 */
class ArosAcos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="aro_id", type="integer", nullable=false)
     */
    private $aroId;

    /**
     * @var integer
     *
     * @ORM\Column(name="aco_id", type="integer", nullable=false)
     */
    private $acoId;

    /**
     * @var string
     *
     * @ORM\Column(name="_create", type="string", length=2, nullable=false)
     */
    private $create = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="_read", type="string", length=2, nullable=false)
     */
    private $read = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="_update", type="string", length=2, nullable=false)
     */
    private $update = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="_delete", type="string", length=2, nullable=false)
     */
    private $delete = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

