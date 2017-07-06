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


}

