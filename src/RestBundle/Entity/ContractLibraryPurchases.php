<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContractLibraryPurchases
 *
 * @ORM\Table(name="contract_library_purchases", indexes={@ORM\Index(name="library_id", columns={"library_id"})})
 * @ORM\Entity
 */
class ContractLibraryPurchases
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="library_contract_start_date", type="date", nullable=true)
     */
    private $libraryContractStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="library_contract_end_date", type="date", nullable=true)
     */
    private $libraryContractEndDate;

    /**
     * @var string
     *
     * @ORM\Column(name="library_unlimited", type="string", nullable=false)
     */
    private $libraryUnlimited = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_library_purchases", type="integer", nullable=false)
     */
    private $idLibraryPurchases;

    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer", nullable=true)
     */
    private $libraryId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="future_contract_flag", type="boolean", nullable=false)
     */
    private $futureContractFlag = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

