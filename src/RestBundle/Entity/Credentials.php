<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Credentials
 *
 * @ORM\Table(name="credentials")
 * @ORM\Entity
 */
class Credentials
{
    /**
     * @var string
     *
     * @ORM\Column(name="card", type="string", length=100, nullable=false)
     */
    private $card;

    /**
     * @var string
     *
     * @ORM\Column(name="pin", type="string", length=100, nullable=false)
     */
    private $pin;

    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer", nullable=false)
     */
    private $libraryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set card
     *
     * @param string $card
     *
     * @return Credentials
     */
    public function setCard($card)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get card
     *
     * @return string
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set pin
     *
     * @param string $pin
     *
     * @return Credentials
     */
    public function setPin($pin)
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * Get pin
     *
     * @return string
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * Set libraryId
     *
     * @param integer $libraryId
     *
     * @return Credentials
     */
    public function setLibraryId($libraryId)
    {
        $this->libraryId = $libraryId;

        return $this;
    }

    /**
     * Get libraryId
     *
     * @return integer
     */
    public function getLibraryId()
    {
        return $this->libraryId;
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
}
