<?php

namespace FOS\OAuthServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessToken
 *
 * @ORM\Table(name="access_token")
 * @ORM\MappedSuperclass
 */
class AccessToken
{
    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", unique=true)
     */
    private $token;

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

