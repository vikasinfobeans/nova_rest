<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Variables
 *
 * @ORM\Table(name="variables")
 * @ORM\Entity
 */
class Variables
{
    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer", nullable=false)
     */
    private $libraryId;

    /**
     * @var string
     *
     * @ORM\Column(name="authentication_variable", type="string", length=100, nullable=false)
     */
    private $authenticationVariable;

    /**
     * @var string
     *
     * @ORM\Column(name="authentication_response", type="text", length=65535, nullable=false)
     */
    private $authenticationResponse;

    /**
     * @var string
     *
     * @ORM\Column(name="comparison_operator", type="string", length=25, nullable=false)
     */
    private $comparisonOperator;

    /**
     * @var string
     *
     * @ORM\Column(name="result_arr", type="string", length=10, nullable=false)
     */
    private $resultArr = 'variable';

    /**
     * @var string
     *
     * @ORM\Column(name="message_no", type="string", length=100, nullable=false)
     */
    private $messageNo = '64';

    /**
     * @var string
     *
     * @ORM\Column(name="error_msg", type="string", length=200, nullable=false)
     */
    private $errorMsg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false)
     */
    private $modified;

    /**
     * @var string
     *
     * @ORM\Column(name="authentication_response_pos", type="string", length=20, nullable=true)
     */
    private $authenticationResponsePos;

    /**
     * @var integer
     *
     * @ORM\Column(name="authentication_variable_index", type="integer", nullable=false)
     */
    private $authenticationVariableIndex = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="variable_index", type="boolean", nullable=true)
     */
    private $variableIndex = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="crm_var_id", type="integer", nullable=true)
     */
    private $crmVarId;

    /**
     * @var integer
     *
     * @ORM\Column(name="multiauth_id", type="integer", nullable=true)
     */
    private $multiauthId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set libraryId
     *
     * @param integer $libraryId
     *
     * @return Variables
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
     * Set authenticationVariable
     *
     * @param string $authenticationVariable
     *
     * @return Variables
     */
    public function setAuthenticationVariable($authenticationVariable)
    {
        $this->authenticationVariable = $authenticationVariable;

        return $this;
    }

    /**
     * Get authenticationVariable
     *
     * @return string
     */
    public function getAuthenticationVariable()
    {
        return $this->authenticationVariable;
    }

    /**
     * Set authenticationResponse
     *
     * @param string $authenticationResponse
     *
     * @return Variables
     */
    public function setAuthenticationResponse($authenticationResponse)
    {
        $this->authenticationResponse = $authenticationResponse;

        return $this;
    }

    /**
     * Get authenticationResponse
     *
     * @return string
     */
    public function getAuthenticationResponse()
    {
        return $this->authenticationResponse;
    }

    /**
     * Set comparisonOperator
     *
     * @param string $comparisonOperator
     *
     * @return Variables
     */
    public function setComparisonOperator($comparisonOperator)
    {
        $this->comparisonOperator = $comparisonOperator;

        return $this;
    }

    /**
     * Get comparisonOperator
     *
     * @return string
     */
    public function getComparisonOperator()
    {
        return $this->comparisonOperator;
    }

    /**
     * Set resultArr
     *
     * @param string $resultArr
     *
     * @return Variables
     */
    public function setResultArr($resultArr)
    {
        $this->resultArr = $resultArr;

        return $this;
    }

    /**
     * Get resultArr
     *
     * @return string
     */
    public function getResultArr()
    {
        return $this->resultArr;
    }

    /**
     * Set messageNo
     *
     * @param string $messageNo
     *
     * @return Variables
     */
    public function setMessageNo($messageNo)
    {
        $this->messageNo = $messageNo;

        return $this;
    }

    /**
     * Get messageNo
     *
     * @return string
     */
    public function getMessageNo()
    {
        return $this->messageNo;
    }

    /**
     * Set errorMsg
     *
     * @param string $errorMsg
     *
     * @return Variables
     */
    public function setErrorMsg($errorMsg)
    {
        $this->errorMsg = $errorMsg;

        return $this;
    }

    /**
     * Get errorMsg
     *
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Variables
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     *
     * @return Variables
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set authenticationResponsePos
     *
     * @param string $authenticationResponsePos
     *
     * @return Variables
     */
    public function setAuthenticationResponsePos($authenticationResponsePos)
    {
        $this->authenticationResponsePos = $authenticationResponsePos;

        return $this;
    }

    /**
     * Get authenticationResponsePos
     *
     * @return string
     */
    public function getAuthenticationResponsePos()
    {
        return $this->authenticationResponsePos;
    }

    /**
     * Set authenticationVariableIndex
     *
     * @param integer $authenticationVariableIndex
     *
     * @return Variables
     */
    public function setAuthenticationVariableIndex($authenticationVariableIndex)
    {
        $this->authenticationVariableIndex = $authenticationVariableIndex;

        return $this;
    }

    /**
     * Get authenticationVariableIndex
     *
     * @return integer
     */
    public function getAuthenticationVariableIndex()
    {
        return $this->authenticationVariableIndex;
    }

    /**
     * Set variableIndex
     *
     * @param boolean $variableIndex
     *
     * @return Variables
     */
    public function setVariableIndex($variableIndex)
    {
        $this->variableIndex = $variableIndex;

        return $this;
    }

    /**
     * Get variableIndex
     *
     * @return boolean
     */
    public function getVariableIndex()
    {
        return $this->variableIndex;
    }

    /**
     * Set crmVarId
     *
     * @param integer $crmVarId
     *
     * @return Variables
     */
    public function setCrmVarId($crmVarId)
    {
        $this->crmVarId = $crmVarId;

        return $this;
    }

    /**
     * Get crmVarId
     *
     * @return integer
     */
    public function getCrmVarId()
    {
        return $this->crmVarId;
    }

    /**
     * Set multiauthId
     *
     * @param integer $multiauthId
     *
     * @return Variables
     */
    public function setMultiauthId($multiauthId)
    {
        $this->multiauthId = $multiauthId;

        return $this;
    }

    /**
     * Get multiauthId
     *
     * @return integer
     */
    public function getMultiauthId()
    {
        return $this->multiauthId;
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
