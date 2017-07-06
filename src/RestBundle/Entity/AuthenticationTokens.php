<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthenticationTokens
 *
 * @ORM\Table(name="authentication_tokens", indexes={@ORM\Index(name="TOKEN", columns={"token"})})
 * @ORM\Entity
 */
class AuthenticationTokens
{
    /**
     * @var string
     *
     * @ORM\Column(name="patron_id", type="string", length=200, nullable=true)
     */
    private $patronId;

    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="integer", nullable=true)
     */
    private $libraryId;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=200, nullable=true)
     */
    private $token;

    /**
     * @var integer
     *
     * @ORM\Column(name="auth_time", type="integer", nullable=true)
     */
    private $authTime;

    /**
     * @var string
     *
     * @ORM\Column(name="agent", type="string", length=50, nullable=true)
     */
    private $agent;

    /**
     * @var string
     *
     * @ORM\Column(name="auth_method", type="string", length=50, nullable=true)
     */
    private $authMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="authtype", type="string", length=10, nullable=true)
     */
    private $authtype;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="card", type="string", length=200, nullable=true)
     */
    private $card;

    /**
     * @var string
     *
     * @ORM\Column(name="pin", type="string", length=200, nullable=true)
     */
    private $pin;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=200, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="downloadCheck", type="string", length=200, nullable=true)
     */
    private $downloadcheck;

    /**
     * @var string
     *
     * @ORM\Column(name="patron_age", type="string", length=45, nullable=true)
     */
    private $patronAge;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

