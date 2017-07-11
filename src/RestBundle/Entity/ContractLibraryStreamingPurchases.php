<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContractLibraryStreamingPurchases
 *
 * @ORM\Table(name="contract_library_streaming_purchases", indexes={@ORM\Index(name="library_id", columns={"library_id"})})
 * @ORM\Entity
 */
class ContractLibraryStreamingPurchases
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
     * @ORM\Column(name="id_library_purchases_streaming", type="integer", nullable=false)
     */
    private $idLibraryPurchasesStreaming;

    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer", nullable=true)
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
     * Set libraryContractStartDate
     *
     * @param \DateTime $libraryContractStartDate
     *
     * @return ContractLibraryStreamingPurchases
     */
    public function setLibraryContractStartDate($libraryContractStartDate)
    {
        $this->libraryContractStartDate = $libraryContractStartDate;

        return $this;
    }

    /**
     * Get libraryContractStartDate
     *
     * @return \DateTime
     */
    public function getLibraryContractStartDate()
    {
        return $this->libraryContractStartDate;
    }

    /**
     * Set libraryContractEndDate
     *
     * @param \DateTime $libraryContractEndDate
     *
     * @return ContractLibraryStreamingPurchases
     */
    public function setLibraryContractEndDate($libraryContractEndDate)
    {
        $this->libraryContractEndDate = $libraryContractEndDate;

        return $this;
    }

    /**
     * Get libraryContractEndDate
     *
     * @return \DateTime
     */
    public function getLibraryContractEndDate()
    {
        return $this->libraryContractEndDate;
    }

    /**
     * Set libraryUnlimited
     *
     * @param string $libraryUnlimited
     *
     * @return ContractLibraryStreamingPurchases
     */
    public function setLibraryUnlimited($libraryUnlimited)
    {
        $this->libraryUnlimited = $libraryUnlimited;

        return $this;
    }

    /**
     * Get libraryUnlimited
     *
     * @return string
     */
    public function getLibraryUnlimited()
    {
        return $this->libraryUnlimited;
    }

    /**
     * Set idLibraryPurchasesStreaming
     *
     * @param integer $idLibraryPurchasesStreaming
     *
     * @return ContractLibraryStreamingPurchases
     */
    public function setIdLibraryPurchasesStreaming($idLibraryPurchasesStreaming)
    {
        $this->idLibraryPurchasesStreaming = $idLibraryPurchasesStreaming;

        return $this;
    }

    /**
     * Get idLibraryPurchasesStreaming
     *
     * @return integer
     */
    public function getIdLibraryPurchasesStreaming()
    {
        return $this->idLibraryPurchasesStreaming;
    }

    /**
     * Set libraryId
     *
     * @param integer $libraryId
     *
     * @return ContractLibraryStreamingPurchases
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
