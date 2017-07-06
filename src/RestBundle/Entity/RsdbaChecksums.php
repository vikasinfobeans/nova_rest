<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RsdbaChecksums
 *
 * @ORM\Table(name="rsdba_checksums", indexes={@ORM\Index(name="ts_db_tbl", columns={"ts", "db", "tbl"})})
 * @ORM\Entity
 */
class RsdbaChecksums
{
    /**
     * @var float
     *
     * @ORM\Column(name="chunk_time", type="float", precision=10, scale=0, nullable=true)
     */
    private $chunkTime;

    /**
     * @var string
     *
     * @ORM\Column(name="chunk_index", type="string", length=200, nullable=true)
     */
    private $chunkIndex;

    /**
     * @var string
     *
     * @ORM\Column(name="lower_boundary", type="text", length=65535, nullable=true)
     */
    private $lowerBoundary;

    /**
     * @var string
     *
     * @ORM\Column(name="upper_boundary", type="text", length=65535, nullable=true)
     */
    private $upperBoundary;

    /**
     * @var string
     *
     * @ORM\Column(name="this_crc", type="string", length=40, nullable=false)
     */
    private $thisCrc;

    /**
     * @var integer
     *
     * @ORM\Column(name="this_cnt", type="integer", nullable=false)
     */
    private $thisCnt;

    /**
     * @var string
     *
     * @ORM\Column(name="master_crc", type="string", length=40, nullable=true)
     */
    private $masterCrc;

    /**
     * @var integer
     *
     * @ORM\Column(name="master_cnt", type="integer", nullable=true)
     */
    private $masterCnt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ts", type="datetime", nullable=false)
     */
    private $ts = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="db", type="string", length=64)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $db;

    /**
     * @var string
     *
     * @ORM\Column(name="tbl", type="string", length=64)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tbl;

    /**
     * @var integer
     *
     * @ORM\Column(name="chunk", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $chunk;


}

