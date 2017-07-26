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



    /**
     * Set songProdid
     *
     * @param integer $songProdid
     *
     * @return QueueDetails
     */
    public function setSongProdid($songProdid)
    {
        $this->songProdid = $songProdid;

        return $this;
    }

    /**
     * Get songProdid
     *
     * @return integer
     */
    public function getSongProdid()
    {
        return $this->songProdid;
    }

    /**
     * Set songProvidertype
     *
     * @param string $songProvidertype
     *
     * @return QueueDetails
     */
    public function setSongProvidertype($songProvidertype)
    {
        $this->songProvidertype = $songProvidertype;

        return $this;
    }

    /**
     * Get songProvidertype
     *
     * @return string
     */
    public function getSongProvidertype()
    {
        return $this->songProvidertype;
    }

    /**
     * Set albumProdid
     *
     * @param integer $albumProdid
     *
     * @return QueueDetails
     */
    public function setAlbumProdid($albumProdid)
    {
        $this->albumProdid = $albumProdid;

        return $this;
    }

    /**
     * Get albumProdid
     *
     * @return integer
     */
    public function getAlbumProdid()
    {
        return $this->albumProdid;
    }

    /**
     * Set albumProvidertype
     *
     * @param string $albumProvidertype
     *
     * @return QueueDetails
     */
    public function setAlbumProvidertype($albumProvidertype)
    {
        $this->albumProvidertype = $albumProvidertype;

        return $this;
    }

    /**
     * Get albumProvidertype
     *
     * @return string
     */
    public function getAlbumProvidertype()
    {
        return $this->albumProvidertype;
    }

    /**
     * Set sortid
     *
     * @param integer $sortid
     *
     * @return QueueDetails
     */
    public function setSortid($sortid)
    {
        $this->sortid = $sortid;

        return $this;
    }

    /**
     * Get sortid
     *
     * @return integer
     */
    public function getSortid()
    {
        return $this->sortid;
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

    /**
     * Set queue
     *
     * @param \RestBundle\Entity\QueueLists $queue
     *
     * @return QueueDetails
     */
    public function setQueue(\RestBundle\Entity\QueueLists $queue = null)
    {
        $this->queue = $queue;

        return $this;
    }

    /**
     * Get queue
     *
     * @return \RestBundle\Entity\QueueLists
     */
    public function getQueue()
    {
        return $this->queue;
    }
}
