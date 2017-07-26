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



    /**
     * Set patronId
     *
     * @param string $patronId
     *
     * @return AuthenticationTokens
     */
    public function setPatronId($patronId)
    {
        $this->patronId = $patronId;

        return $this;
    }

    /**
     * Get patronId
     *
     * @return string
     */
    public function getPatronId()
    {
        return $this->patronId;
    }

    /**
     * Set libraryId
     *
     * @param integer $libraryId
     *
     * @return AuthenticationTokens
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
     * Set token
     *
     * @param string $token
     *
     * @return AuthenticationTokens
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set authTime
     *
     * @param integer $authTime
     *
     * @return AuthenticationTokens
     */
    public function setAuthTime($authTime)
    {
        $this->authTime = $authTime;

        return $this;
    }

    /**
     * Get authTime
     *
     * @return integer
     */
    public function getAuthTime()
    {
        return $this->authTime;
    }

    /**
     * Set agent
     *
     * @param string $agent
     *
     * @return AuthenticationTokens
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get agent
     *
     * @return string
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set authMethod
     *
     * @param string $authMethod
     *
     * @return AuthenticationTokens
     */
    public function setAuthMethod($authMethod)
    {
        $this->authMethod = $authMethod;

        return $this;
    }

    /**
     * Get authMethod
     *
     * @return string
     */
    public function getAuthMethod()
    {
        return $this->authMethod;
    }

    /**
     * Set authtype
     *
     * @param string $authtype
     *
     * @return AuthenticationTokens
     */
    public function setAuthtype($authtype)
    {
        $this->authtype = $authtype;

        return $this;
    }

    /**
     * Get authtype
     *
     * @return string
     */
    public function getAuthtype()
    {
        return $this->authtype;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return AuthenticationTokens
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return AuthenticationTokens
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set card
     *
     * @param string $card
     *
     * @return AuthenticationTokens
     */
    public function setCard($card)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get card
     *
     * @return string
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set pin
     *
     * @param string $pin
     *
     * @return AuthenticationTokens
     */
    public function setPin($pin)
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * Get pin
     *
     * @return string
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return AuthenticationTokens
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set downloadcheck
     *
     * @param string $downloadcheck
     *
     * @return AuthenticationTokens
     */
    public function setDownloadcheck($downloadcheck)
    {
        $this->downloadcheck = $downloadcheck;

        return $this;
    }

    /**
     * Get downloadcheck
     *
     * @return string
     */
    public function getDownloadcheck()
    {
        return $this->downloadcheck;
    }

    /**
     * Set patronAge
     *
     * @param string $patronAge
     *
     * @return AuthenticationTokens
     */
    public function setPatronAge($patronAge)
    {
        $this->patronAge = $patronAge;

        return $this;
    }

    /**
     * Get patronAge
     *
     * @return string
     */
    public function getPatronAge()
    {
        return $this->patronAge;
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
