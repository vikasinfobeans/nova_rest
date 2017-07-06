<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QueueDetails
 *
 * @ORM\Table(name="queue_details", indexes={@ORM\Index(name="FK_PlaylistDetails", columns={"queue_id"}), @ORM\Index(name="queue_id", columns={"queue_id"})})
 * @ORM\Entity
 */
class QueueDetails
{
    /**
     * @var integer
     *
     * @ORM\Column(name="song_prodid", type="bigint", nullable=false)
     */
    private $songProdid;

    /**
     * @var string
     *
     * @ORM\Column(name="song_providertype", type="string", length=10, nullable=false)
     */
    private $songProvidertype;

    /**
     * @var integer
     *
     * @ORM\Column(name="album_prodid", type="bigint", nullable=false)
     */
    private $albumProdid;

    /**
     * @var string
     *
     * @ORM\Column(name="album_providertype", type="string", length=10, nullable=false)
     */
    private $albumProvidertype;

    /**
     * @var integer
     *
     * @ORM\Column(name="sortId", type="integer", nullable=true)
     */
    private $sortid;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \RestBundle\Entity\QueueLists
     *
     * @ORM\ManyToOne(targetEntity="RestBundle\Entity\QueueLists")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="queue_id", referencedColumnName="queue_id")
     * })
     */
    private $queue;


}

