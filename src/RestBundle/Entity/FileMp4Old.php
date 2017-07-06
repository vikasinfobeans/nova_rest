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


}

