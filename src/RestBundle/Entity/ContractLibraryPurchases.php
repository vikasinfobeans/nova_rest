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



    /**
     * Set libraryContractStartDate
     *
     * @param \DateTime $libraryContractStartDate
     *
     * @return ContractLibraryPurchases
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
     * @return ContractLibraryPurchases
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
     * @return ContractLibraryPurchases
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
     * Set idLibraryPurchases
     *
     * @param integer $idLibraryPurchases
     *
     * @return ContractLibraryPurchases
     */
    public function setIdLibraryPurchases($idLibraryPurchases)
    {
        $this->idLibraryPurchases = $idLibraryPurchases;

        return $this;
    }

    /**
     * Get idLibraryPurchases
     *
     * @return integer
     */
    public function getIdLibraryPurchases()
    {
        return $this->idLibraryPurchases;
    }

    /**
     * Set libraryId
     *
     * @param integer $libraryId
     *
     * @return ContractLibraryPurchases
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
     * Set futureContractFlag
     *
     * @param boolean $futureContractFlag
     *
     * @return ContractLibraryPurchases
     */
    public function setFutureContractFlag($futureContractFlag)
    {
        $this->futureContractFlag = $futureContractFlag;

        return $this;
    }

    /**
     * Get futureContractFlag
     *
     * @return boolean
     */
    public function getFutureContractFlag()
    {
        return $this->futureContractFlag;
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
