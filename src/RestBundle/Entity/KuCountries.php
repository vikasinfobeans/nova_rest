<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KuCountries
 *
 * @ORM\Table(name="ku_countries", indexes={@ORM\Index(name="ProdID_PT_T", columns={"ProdID", "provider_type", "Territory"}), @ORM\Index(name="SalesDate_index", columns={"SalesDate"})})
 * @ORM\Entity
 */
class KuCountries
{
    /**
     * @var string
     *
     * @ORM\Column(name="Territory", type="string", length=3, nullable=false)
     */
    private $territory;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SalesDate", type="date", nullable=false)
     */
    private $salesdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="TerritoryId", type="integer", nullable=true)
     */
    private $territoryid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DownloadStatus", type="boolean", nullable=false)
     */
    private $downloadstatus = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="StreamingStatus", type="boolean", nullable=false)
     */
    private $streamingstatus = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="StreamingSalesDate", type="date", nullable=false)
     */
    private $streamingsalesdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UpdateOn", type="datetime", nullable=false)
     */
    private $updateon = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="provider_type", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $providerType;

    /**
     * @var integer
     *
     * @ORM\Column(name="ProdID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $prodid;


}

