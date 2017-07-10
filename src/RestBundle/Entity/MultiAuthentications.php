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



    /**
     * Set libraryId
     *
     * @param integer $libraryId
     *
     * @return MultiAuthentications
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
     * Set libraryAuthenticationMethod
     *
     * @param string $libraryAuthenticationMethod
     *
     * @return MultiAuthentications
     */
    public function setLibraryAuthenticationMethod($libraryAuthenticationMethod)
    {
        $this->libraryAuthenticationMethod = $libraryAuthenticationMethod;

        return $this;
    }

    /**
     * Get libraryAuthenticationMethod
     *
     * @return string
     */
    public function getLibraryAuthenticationMethod()
    {
        return $this->libraryAuthenticationMethod;
    }

    /**
     * Set libraryAuthenticationNum
     *
     * @param string $libraryAuthenticationNum
     *
     * @return MultiAuthentications
     */
    public function setLibraryAuthenticationNum($libraryAuthenticationNum)
    {
        $this->libraryAuthenticationNum = $libraryAuthenticationNum;

        return $this;
    }

    /**
     * Get libraryAuthenticationNum
     *
     * @return string
     */
    public function getLibraryAuthenticationNum()
    {
        return $this->libraryAuthenticationNum;
    }

    /**
     * Set libraryAuthenticationUrl
     *
     * @param string $libraryAuthenticationUrl
     *
     * @return MultiAuthentications
     */
    public function setLibraryAuthenticationUrl($libraryAuthenticationUrl)
    {
        $this->libraryAuthenticationUrl = $libraryAuthenticationUrl;

        return $this;
    }

    /**
     * Get libraryAuthenticationUrl
     *
     * @return string
     */
    public function getLibraryAuthenticationUrl()
    {
        return $this->libraryAuthenticationUrl;
    }

    /**
     * Set librarySpaceCheck
     *
     * @param string $librarySpaceCheck
     *
     * @return MultiAuthentications
     */
    public function setLibrarySpaceCheck($librarySpaceCheck)
    {
        $this->librarySpaceCheck = $librarySpaceCheck;

        return $this;
    }

    /**
     * Get librarySpaceCheck
     *
     * @return string
     */
    public function getLibrarySpaceCheck()
    {
        return $this->librarySpaceCheck;
    }

    /**
     * Set mobileAuth
     *
     * @param string $mobileAuth
     *
     * @return MultiAuthentications
     */
    public function setMobileAuth($mobileAuth)
    {
        $this->mobileAuth = $mobileAuth;

        return $this;
    }

    /**
     * Get mobileAuth
     *
     * @return string
     */
    public function getMobileAuth()
    {
        return $this->mobileAuth;
    }

    /**
     * Set librarySoapUrl
     *
     * @param string $librarySoapUrl
     *
     * @return MultiAuthentications
     */
    public function setLibrarySoapUrl($librarySoapUrl)
    {
        $this->librarySoapUrl = $librarySoapUrl;

        return $this;
    }

    /**
     * Get librarySoapUrl
     *
     * @return string
     */
    public function getLibrarySoapUrl()
    {
        return $this->librarySoapUrl;
    }

    /**
     * Set libraryCurlUrl
     *
     * @param string $libraryCurlUrl
     *
     * @return MultiAuthentications
     */
    public function setLibraryCurlUrl($libraryCurlUrl)
    {
        $this->libraryCurlUrl = $libraryCurlUrl;

        return $this;
    }

    /**
     * Get libraryCurlUrl
     *
     * @return string
     */
    public function getLibraryCurlUrl()
    {
        return $this->libraryCurlUrl;
    }

    /**
     * Set libraryCurlDb
     *
     * @param string $libraryCurlDb
     *
     * @return MultiAuthentications
     */
    public function setLibraryCurlDb($libraryCurlDb)
    {
        $this->libraryCurlDb = $libraryCurlDb;

        return $this;
    }

    /**
     * Get libraryCurlDb
     *
     * @return string
     */
    public function getLibraryCurlDb()
    {
        return $this->libraryCurlDb;
    }

    /**
     * Set libraryAuthenticationVariable
     *
     * @param string $libraryAuthenticationVariable
     *
     * @return MultiAuthentications
     */
    public function setLibraryAuthenticationVariable($libraryAuthenticationVariable)
    {
        $this->libraryAuthenticationVariable = $libraryAuthenticationVariable;

        return $this;
    }

    /**
     * Get libraryAuthenticationVariable
     *
     * @return string
     */
    public function getLibraryAuthenticationVariable()
    {
        return $this->libraryAuthenticationVariable;
    }

    /**
     * Set libraryAuthenticationResponse
     *
     * @param string $libraryAuthenticationResponse
     *
     * @return MultiAuthentications
     */
    public function setLibraryAuthenticationResponse($libraryAuthenticationResponse)
    {
        $this->libraryAuthenticationResponse = $libraryAuthenticationResponse;

        return $this;
    }

    /**
     * Get libraryAuthenticationResponse
     *
     * @return string
     */
    public function getLibraryAuthenticationResponse()
    {
        return $this->libraryAuthenticationResponse;
    }

    /**
     * Set libraryPortNo
     *
     * @param integer $libraryPortNo
     *
     * @return MultiAuthentications
     */
    public function setLibraryPortNo($libraryPortNo)
    {
        $this->libraryPortNo = $libraryPortNo;

        return $this;
    }

    /**
     * Get libraryPortNo
     *
     * @return integer
     */
    public function getLibraryPortNo()
    {
        return $this->libraryPortNo;
    }

    /**
     * Set libraryHostName
     *
     * @param string $libraryHostName
     *
     * @return MultiAuthentications
     */
    public function setLibraryHostName($libraryHostName)
    {
        $this->libraryHostName = $libraryHostName;

        return $this;
    }

    /**
     * Get libraryHostName
     *
     * @return string
     */
    public function getLibraryHostName()
    {
        return $this->libraryHostName;
    }

    /**
     * Set librarySipLogin
     *
     * @param string $librarySipLogin
     *
     * @return MultiAuthentications
     */
    public function setLibrarySipLogin($librarySipLogin)
    {
        $this->librarySipLogin = $librarySipLogin;

        return $this;
    }

    /**
     * Get librarySipLogin
     *
     * @return string
     */
    public function getLibrarySipLogin()
    {
        return $this->librarySipLogin;
    }

    /**
     * Set librarySipPassword
     *
     * @param string $librarySipPassword
     *
     * @return MultiAuthentications
     */
    public function setLibrarySipPassword($librarySipPassword)
    {
        $this->librarySipPassword = $librarySipPassword;

        return $this;
    }

    /**
     * Get librarySipPassword
     *
     * @return string
     */
    public function getLibrarySipPassword()
    {
        return $this->librarySipPassword;
    }

    /**
     * Set librarySipCommand
     *
     * @param string $librarySipCommand
     *
     * @return MultiAuthentications
     */
    public function setLibrarySipCommand($librarySipCommand)
    {
        $this->librarySipCommand = $librarySipCommand;

        return $this;
    }

    /**
     * Get librarySipCommand
     *
     * @return string
     */
    public function getLibrarySipCommand()
    {
        return $this->librarySipCommand;
    }

    /**
     * Set isSipOverSsh
     *
     * @param integer $isSipOverSsh
     *
     * @return MultiAuthentications
     */
    public function setIsSipOverSsh($isSipOverSsh)
    {
        $this->isSipOverSsh = $isSipOverSsh;

        return $this;
    }

    /**
     * Get isSipOverSsh
     *
     * @return integer
     */
    public function getIsSipOverSsh()
    {
        return $this->isSipOverSsh;
    }

    /**
     * Set minimumCardLength
     *
     * @param integer $minimumCardLength
     *
     * @return MultiAuthentications
     */
    public function setMinimumCardLength($minimumCardLength)
    {
        $this->minimumCardLength = $minimumCardLength;

        return $this;
    }

    /**
     * Get minimumCardLength
     *
     * @return integer
     */
    public function getMinimumCardLength()
    {
        return $this->minimumCardLength;
    }

    /**
     * Set librarySipLocation
     *
     * @param string $librarySipLocation
     *
     * @return MultiAuthentications
     */
    public function setLibrarySipLocation($librarySipLocation)
    {
        $this->librarySipLocation = $librarySipLocation;

        return $this;
    }

    /**
     * Get librarySipLocation
     *
     * @return string
     */
    public function getLibrarySipLocation()
    {
        return $this->librarySipLocation;
    }

    /**
     * Set librarySipTerminalPassword
     *
     * @param string $librarySipTerminalPassword
     *
     * @return MultiAuthentications
     */
    public function setLibrarySipTerminalPassword($librarySipTerminalPassword)
    {
        $this->librarySipTerminalPassword = $librarySipTerminalPassword;

        return $this;
    }

    /**
     * Get librarySipTerminalPassword
     *
     * @return string
     */
    public function getLibrarySipTerminalPassword()
    {
        return $this->librarySipTerminalPassword;
    }

    /**
     * Set librarySipVersion
     *
     * @param string $librarySipVersion
     *
     * @return MultiAuthentications
     */
    public function setLibrarySipVersion($librarySipVersion)
    {
        $this->librarySipVersion = $librarySipVersion;

        return $this;
    }

    /**
     * Get librarySipVersion
     *
     * @return string
     */
    public function getLibrarySipVersion()
    {
        return $this->librarySipVersion;
    }

    /**
     * Set librarySipInstitution
     *
     * @param string $librarySipInstitution
     *
     * @return MultiAuthentications
     */
    public function setLibrarySipInstitution($librarySipInstitution)
    {
        $this->librarySipInstitution = $librarySipInstitution;

        return $this;
    }

    /**
     * Get librarySipInstitution
     *
     * @return string
     */
    public function getLibrarySipInstitution()
    {
        return $this->librarySipInstitution;
    }

    /**
     * Set librarySip24Check
     *
     * @param string $librarySip24Check
     *
     * @return MultiAuthentications
     */
    public function setLibrarySip24Check($librarySip24Check)
    {
        $this->librarySip24Check = $librarySip24Check;

        return $this;
    }

    /**
     * Get librarySip24Check
     *
     * @return string
     */
    public function getLibrarySip24Check()
    {
        return $this->librarySip24Check;
    }

    /**
     * Set librarySipError
     *
     * @param string $librarySipError
     *
     * @return MultiAuthentications
     */
    public function setLibrarySipError($librarySipError)
    {
        $this->librarySipError = $librarySipError;

        return $this;
    }

    /**
     * Get librarySipError
     *
     * @return string
     */
    public function getLibrarySipError()
    {
        return $this->librarySipError;
    }

    /**
     * Set librarySip64CheckOff
     *
     * @param integer $librarySip64CheckOff
     *
     * @return MultiAuthentications
     */
    public function setLibrarySip64CheckOff($librarySip64CheckOff)
    {
        $this->librarySip64CheckOff = $librarySip64CheckOff;

        return $this;
    }

    /**
     * Get librarySip64CheckOff
     *
     * @return integer
     */
    public function getLibrarySip64CheckOff()
    {
        return $this->librarySip64CheckOff;
    }

    /**
     * Set libraryEzproxySecret
     *
     * @param string $libraryEzproxySecret
     *
     * @return MultiAuthentications
     */
    public function setLibraryEzproxySecret($libraryEzproxySecret)
    {
        $this->libraryEzproxySecret = $libraryEzproxySecret;

        return $this;
    }

    /**
     * Get libraryEzproxySecret
     *
     * @return string
     */
    public function getLibraryEzproxySecret()
    {
        return $this->libraryEzproxySecret;
    }

    /**
     * Set libraryEzproxyReferral
     *
     * @param string $libraryEzproxyReferral
     *
     * @return MultiAuthentications
     */
    public function setLibraryEzproxyReferral($libraryEzproxyReferral)
    {
        $this->libraryEzproxyReferral = $libraryEzproxyReferral;

        return $this;
    }

    /**
     * Get libraryEzproxyReferral
     *
     * @return string
     */
    public function getLibraryEzproxyReferral()
    {
        return $this->libraryEzproxyReferral;
    }

    /**
     * Set libraryEzproxyName
     *
     * @param string $libraryEzproxyName
     *
     * @return MultiAuthentications
     */
    public function setLibraryEzproxyName($libraryEzproxyName)
    {
        $this->libraryEzproxyName = $libraryEzproxyName;

        return $this;
    }

    /**
     * Get libraryEzproxyName
     *
     * @return string
     */
    public function getLibraryEzproxyName()
    {
        return $this->libraryEzproxyName;
    }

    /**
     * Set libraryEzproxyLogout
     *
     * @param string $libraryEzproxyLogout
     *
     * @return MultiAuthentications
     */
    public function setLibraryEzproxyLogout($libraryEzproxyLogout)
    {
        $this->libraryEzproxyLogout = $libraryEzproxyLogout;

        return $this;
    }

    /**
     * Get libraryEzproxyLogout
     *
     * @return string
     */
    public function getLibraryEzproxyLogout()
    {
        return $this->libraryEzproxyLogout;
    }

    /**
     * Set methodStatus
     *
     * @param string $methodStatus
     *
     * @return MultiAuthentications
     */
    public function setMethodStatus($methodStatus)
    {
        $this->methodStatus = $methodStatus;

        return $this;
    }

    /**
     * Get methodStatus
     *
     * @return string
     */
    public function getMethodStatus()
    {
        return $this->methodStatus;
    }

    /**
     * Set crmAuthId
     *
     * @param integer $crmAuthId
     *
     * @return MultiAuthentications
     */
    public function setCrmAuthId($crmAuthId)
    {
        $this->crmAuthId = $crmAuthId;

        return $this;
    }

    /**
     * Get crmAuthId
     *
     * @return integer
     */
    public function getCrmAuthId()
    {
        return $this->crmAuthId;
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
