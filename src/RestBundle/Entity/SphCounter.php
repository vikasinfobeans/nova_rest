<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SphCounter
 *
 * @ORM\Table(name="sph_counter")
 * @ORM\Entity
 */
class SphCounter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="max_doc_id", type="integer", nullable=false)
     */
    private $maxDocId;

    /**
     * @var integer
     *
     * @ORM\Column(name="counter_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $counterId;


}

