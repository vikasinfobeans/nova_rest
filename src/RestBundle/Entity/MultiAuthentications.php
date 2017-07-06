<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MultiAuthentications
 *
 * @ORM\Table(name="multi_authentications")
 * @ORM\Entity
 */
class MultiAuthentications
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
     * @ORM\Column(name="library_authentication_method", type="string", length=100, nullable=true)
     */
    private $libraryAuthenticationMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="library_authentication_num", type="text", length=65535, nullable=false)
     */
    private $libraryAuthenticationNum;

    /**
     * @var string
     *
     * @ORM\Column(name="library_authentication_url", type="string", length=255, nullable=false)
     */
    private $libraryAuthenticationUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="library_space_check", type="string", length=100, nullable=false)
     */
    private $librarySpaceCheck = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_auth", type="string", length=255, nullable=true)
     */
    private $mobileAuth;

    /**
     * @var string
     *
     * @ORM\Column(name="library_soap_url", type="string", length=255, nullable=true)
     */
    private $librarySoapUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="library_curl_url", type="string", length=255, nullable=true)
     */
    private $libraryCurlUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="library_curl_db", type="string", length=100, nullable=true)
     */
    private $libraryCurlDb;

    /**
     * @var string
     *
     * @ORM\Column(name="library_authentication_variable", type="string", length=100, nullable=true)
     */
    private $libraryAuthenticationVariable;

    /**
     * @var string
     *
     * @ORM\Column(name="library_authentication_response", type="string", length=100, nullable=true)
     */
    private $libraryAuthenticationResponse;

    /**
     * @var integer
     *
     * @ORM\Column(name="library_port_no", type="integer", nullable=true)
     */
    private $libraryPortNo;

    /**
     * @var string
     *
     * @ORM\Column(name="library_host_name", type="string", length=100, nullable=true)
     */
    private $libraryHostName;

    /**
     * @var string
     *
     * @ORM\Column(name="library_sip_login", type="string", length=100, nullable=true)
     */
    private $librarySipLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="library_sip_password", type="string", length=100, nullable=true)
     */
    private $librarySipPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="library_sip_command", type="string", length=500, nullable=true)
     */
    private $librarySipCommand;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_sip_over_ssh", type="integer", nullable=true)
     */
    private $isSipOverSsh = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="minimum_card_length", type="smallint", nullable=false)
     */
    private $minimumCardLength = '5';

    /**
     * @var string
     *
     * @ORM\Column(name="library_sip_location", type="string", length=100, nullable=false)
     */
    private $librarySipLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="library_sip_terminal_password", type="string", length=100, nullable=true)
     */
    private $librarySipTerminalPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="library_sip_version", type="string", length=100, nullable=true)
     */
    private $librarySipVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="library_sip_institution", type="string", length=100, nullable=true)
     */
    private $librarySipInstitution;

    /**
     * @var string
     *
     * @ORM\Column(name="library_sip_24_check", type="string", length=100, nullable=false)
     */
    private $librarySip24Check = 'yes';

    /**
     * @var string
     *
     * @ORM\Column(name="library_sip_error", type="string", length=100, nullable=false)
     */
    private $librarySipError = 'on';

    /**
     * @var integer
     *
     * @ORM\Column(name="library_sip_64_check_off", type="smallint", nullable=false)
     */
    private $librarySip64CheckOff = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="library_ezproxy_secret", type="string", length=100, nullable=true)
     */
    private $libraryEzproxySecret;

    /**
     * @var string
     *
     * @ORM\Column(name="library_ezproxy_referral", type="string", length=255, nullable=true)
     */
    private $libraryEzproxyReferral;

    /**
     * @var string
     *
     * @ORM\Column(name="library_ezproxy_name", type="string", length=255, nullable=true)
     */
    private $libraryEzproxyName;

    /**
     * @var string
     *
     * @ORM\Column(name="library_ezproxy_logout", type="string", length=255, nullable=true)
     */
    private $libraryEzproxyLogout;

    /**
     * @var string
     *
     * @ORM\Column(name="method_status", type="string", nullable=false)
     */
    private $methodStatus = 'active';

    /**
     * @var integer
     *
     * @ORM\Column(name="crm_auth_id", type="integer", nullable=true)
     */
    private $crmAuthId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

