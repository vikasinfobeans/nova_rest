<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FileMp4Old
 *
 * @ORM\Table(name="File_mp4_old", indexes={@ORM\Index(name="idx_savename_cdnpath", columns={"SaveAsName", "CdnPath"}), @ORM\Index(name="idx_cdnpath", columns={"CdnPath"})})
 * @ORM\Entity
 */
class FileMp4Old
{
    /**
     * @var string
     *
     * @ORM\Column(name="SaveAsName", type="string", length=254, nullable=true)
     */
    private $saveasname;

    /**
     * @var string
     *
     * @ORM\Column(name="CdnPath", type="string", length=255, nullable=true)
     */
    private $cdnpath;

    /**
     * @var integer
     *
     * @ORM\Column(name="FileID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fileid;



    /**
     * Set saveasname
     *
     * @param string $saveasname
     *
     * @return FileMp4Old
     */
    public function setSaveasname($saveasname)
    {
        $this->saveasname = $saveasname;

        return $this;
    }

    /**
     * Get saveasname
     *
     * @return string
     */
    public function getSaveasname()
    {
        return $this->saveasname;
    }

    /**
     * Set cdnpath
     *
     * @param string $cdnpath
     *
     * @return FileMp4Old
     */
    public function setCdnpath($cdnpath)
    {
        $this->cdnpath = $cdnpath;

        return $this;
    }

    /**
     * Get cdnpath
     *
     * @return string
     */
    public function getCdnpath()
    {
        return $this->cdnpath;
    }

    /**
     * Get fileid
     *
     * @return integer
     */
    public function getFileid()
    {
        return $this->fileid;
    }
}
