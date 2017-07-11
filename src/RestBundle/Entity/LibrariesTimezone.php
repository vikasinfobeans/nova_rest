<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LibrariesTimezone
 *
 * @ORM\Table(name="libraries_timezone")
 * @ORM\Entity
 */
class LibrariesTimezone
{
    /**
     * @var string
     *
     * @ORM\Column(name="libraries_timezone", type="string", length=256, nullable=true)
     */
    private $librariesTimezone;

    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $libraryId;



    /**
     * Set librariesTimezone
     *
     * @param string $librariesTimezone
     *
     * @return LibrariesTimezone
     */
    public function setLibrariesTimezone($librariesTimezone)
    {
        $this->librariesTimezone = $librariesTimezone;

        return $this;
    }

    /**
     * Get librariesTimezone
     *
     * @return string
     */
    public function getLibrariesTimezone()
    {
        return $this->librariesTimezone;
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
}
