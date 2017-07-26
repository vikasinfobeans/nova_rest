<?php

namespace FOS\OAuthServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthCode
 *
 * @ORM\Table(name="auth_code")
 * @ORM\MappedSuperclass
 */
class AuthCode
{
    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", unique=true)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="redirect_uri", type="text")
     */
    private $redirectUri;

    /**
     * @var integer
     *
     * @ORM\Column(name="expires_at", type="integer", nullable=true)
     */
    private $expiresAt;

    /**
     * @var string
     *
     * @ORM\Column(name="scope", type="string", nullable=true)
     */
    private $scope;


}

