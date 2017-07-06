<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="questions")
 * @ORM\Entity
 */
class Questions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="section_id", type="integer", nullable=false)
     */
    private $sectionId;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="text", length=65535, nullable=true)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="text", length=65535, nullable=true)
     */
    private $answer;

    /**
     * @var integer
     *
     * @ORM\Column(name="sort_id", type="integer", nullable=true)
     */
    private $sortId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=true)
     */
    private $modified;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

