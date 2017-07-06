<?php

namespace FOS\OAuthServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\MappedSuperclass
 */
class Client
{
    /**
     * @var string
     *
     * @ORM\Column(name="random_id", type="string")
     */
    private $randomId;

    /**
     * @var array
     *
     * @ORM\Column(name="redirect_uris", type="array")
     */
    private $redirectUris;

    /**
     * @var string
     *
     * @ORM\Column(name="secret", type="string")
     */
    private $secret;

    /**
     * @var array
     *
     * @ORM\Column(name="allowed_grant_types", type="array")
     */
    private $allowedGrantTypes;


}

