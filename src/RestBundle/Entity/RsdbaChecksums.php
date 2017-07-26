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



    /**
     * Set chunkTime
     *
     * @param float $chunkTime
     *
     * @return RsdbaChecksums
     */
    public function setChunkTime($chunkTime)
    {
        $this->chunkTime = $chunkTime;

        return $this;
    }

    /**
     * Get chunkTime
     *
     * @return float
     */
    public function getChunkTime()
    {
        return $this->chunkTime;
    }

    /**
     * Set chunkIndex
     *
     * @param string $chunkIndex
     *
     * @return RsdbaChecksums
     */
    public function setChunkIndex($chunkIndex)
    {
        $this->chunkIndex = $chunkIndex;

        return $this;
    }

    /**
     * Get chunkIndex
     *
     * @return string
     */
    public function getChunkIndex()
    {
        return $this->chunkIndex;
    }

    /**
     * Set lowerBoundary
     *
     * @param string $lowerBoundary
     *
     * @return RsdbaChecksums
     */
    public function setLowerBoundary($lowerBoundary)
    {
        $this->lowerBoundary = $lowerBoundary;

        return $this;
    }

    /**
     * Get lowerBoundary
     *
     * @return string
     */
    public function getLowerBoundary()
    {
        return $this->lowerBoundary;
    }

    /**
     * Set upperBoundary
     *
     * @param string $upperBoundary
     *
     * @return RsdbaChecksums
     */
    public function setUpperBoundary($upperBoundary)
    {
        $this->upperBoundary = $upperBoundary;

        return $this;
    }

    /**
     * Get upperBoundary
     *
     * @return string
     */
    public function getUpperBoundary()
    {
        return $this->upperBoundary;
    }

    /**
     * Set thisCrc
     *
     * @param string $thisCrc
     *
     * @return RsdbaChecksums
     */
    public function setThisCrc($thisCrc)
    {
        $this->thisCrc = $thisCrc;

        return $this;
    }

    /**
     * Get thisCrc
     *
     * @return string
     */
    public function getThisCrc()
    {
        return $this->thisCrc;
    }

    /**
     * Set thisCnt
     *
     * @param integer $thisCnt
     *
     * @return RsdbaChecksums
     */
    public function setThisCnt($thisCnt)
    {
        $this->thisCnt = $thisCnt;

        return $this;
    }

    /**
     * Get thisCnt
     *
     * @return integer
     */
    public function getThisCnt()
    {
        return $this->thisCnt;
    }

    /**
     * Set masterCrc
     *
     * @param string $masterCrc
     *
     * @return RsdbaChecksums
     */
    public function setMasterCrc($masterCrc)
    {
        $this->masterCrc = $masterCrc;

        return $this;
    }

    /**
     * Get masterCrc
     *
     * @return string
     */
    public function getMasterCrc()
    {
        return $this->masterCrc;
    }

    /**
     * Set masterCnt
     *
     * @param integer $masterCnt
     *
     * @return RsdbaChecksums
     */
    public function setMasterCnt($masterCnt)
    {
        $this->masterCnt = $masterCnt;

        return $this;
    }

    /**
     * Get masterCnt
     *
     * @return integer
     */
    public function getMasterCnt()
    {
        return $this->masterCnt;
    }

    /**
     * Set ts
     *
     * @param \DateTime $ts
     *
     * @return RsdbaChecksums
     */
    public function setTs($ts)
    {
        $this->ts = $ts;

        return $this;
    }

    /**
     * Get ts
     *
     * @return \DateTime
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * Set db
     *
     * @param string $db
     *
     * @return RsdbaChecksums
     */
    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

    /**
     * Get db
     *
     * @return string
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set tbl
     *
     * @param string $tbl
     *
     * @return RsdbaChecksums
     */
    public function setTbl($tbl)
    {
        $this->tbl = $tbl;

        return $this;
    }

    /**
     * Get tbl
     *
     * @return string
     */
    public function getTbl()
    {
        return $this->tbl;
    }

    /**
     * Set chunk
     *
     * @param integer $chunk
     *
     * @return RsdbaChecksums
     */
    public function setChunk($chunk)
    {
        $this->chunk = $chunk;

        return $this;
    }

    /**
     * Get chunk
     *
     * @return integer
     */
    public function getChunk()
    {
        return $this->chunk;
    }
}
