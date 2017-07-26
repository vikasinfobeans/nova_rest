<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Libraries
 *
 * @ORM\Table(name="libraries", indexes={@ORM\Index(name="indx_subdomain", columns={"library_subdomain"})})
 * @ORM\Entity
 */
class Libraries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=false)
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="library_name", type="string", length=255, nullable=true)
     */
    private $libraryName;

    /**
     * @var string
     *
     * @ORM\Column(name="library_display_name", type="string", length=255, nullable=true)
     */
    private $libraryDisplayName;

    /**
     * @var string
     *
     * @ORM\Column(name="library_domain_name", type="string", length=512, nullable=true)
     */
    private $libraryDomainName;

    /**
     * @var string
     *
     * @ORM\Column(name="library_home_url", type="string", length=255, nullable=true)
     */
    private $libraryHomeUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="library_authentication_method", type="string", length=100, nullable=true)
     */
    private $libraryAuthenticationMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="library_mobile_authentication", type="string", length=45, nullable=true)
     */
    private $libraryMobileAuthentication;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_auth", type="string", length=255, nullable=true)
     */
    private $mobileAuth;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile_auth_type", type="string", length=100, nullable=true)
     */
    private $mobileAuthType;

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
     * @ORM\Column(name="library_logout_url", type="string", length=255, nullable=true)
     */
    private $libraryLogoutUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="library_apikey", type="string", length=255, nullable=false)
     */
    private $libraryApikey = 'none';

    /**
     * @var string
     *
     * @ORM\Column(name="library_subdomain", type="string", length=100, nullable=true)
     */
    private $librarySubdomain;

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
     * @ORM\Column(name="library_ezproxy_domain", type="string", length=255, nullable=true)
     */
    private $libraryEzproxyDomain;

    /**
     * @var string
     *
     * @ORM\Column(name="library_ezproxy_wskey", type="string", length=255, nullable=true)
     */
    private $libraryEzproxyWskey;

    /**
     * @var string
     *
     * @ORM\Column(name="library_ezproxy_logout", type="string", length=255, nullable=true)
     */
    private $libraryEzproxyLogout;

    /**
     * @var string
     *
     * @ORM\Column(name="library_contact_fname", type="string", length=255, nullable=true)
     */
    private $libraryContactFname;

    /**
     * @var string
     *
     * @ORM\Column(name="library_contact_lname", type="string", length=255, nullable=true)
     */
    private $libraryContactLname;

    /**
     * @var string
     *
     * @ORM\Column(name="library_contact_email", type="string", length=255, nullable=true)
     */
    private $libraryContactEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="library_phone", type="string", length=256, nullable=false)
     */
    private $libraryPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="library_address", type="text", length=65535, nullable=false)
     */
    private $libraryAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="library_address2", type="text", length=65535, nullable=false)
     */
    private $libraryAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="library_city", type="text", length=65535, nullable=false)
     */
    private $libraryCity;

    /**
     * @var string
     *
     * @ORM\Column(name="library_state", type="string", length=256, nullable=false)
     */
    private $libraryState;

    /**
     * @var string
     *
     * @ORM\Column(name="library_zipcode", type="text", length=65535, nullable=false)
     */
    private $libraryZipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="library_country", type="string", length=256, nullable=false)
     */
    private $libraryCountry;

    /**
     * @var integer
     *
     * @ORM\Column(name="library_user_download_limit", type="integer", nullable=false)
     */
    private $libraryUserDownloadLimit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="library_admin_id", type="integer", nullable=false)
     */
    private $libraryAdminId;

    /**
     * @var string
     *
     * @ORM\Column(name="library_download_type", type="string", length=255, nullable=true)
     */
    private $libraryDownloadType;

    /**
     * @var integer
     *
     * @ORM\Column(name="library_download_limit", type="integer", nullable=false)
     */
    private $libraryDownloadLimit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="library_current_downloads", type="integer", nullable=false)
     */
    private $libraryCurrentDownloads = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="library_total_downloads", type="integer", nullable=false)
     */
    private $libraryTotalDownloads = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="library_available_downloads", type="integer", nullable=false)
     */
    private $libraryAvailableDownloads = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="library_status", type="string", nullable=false)
     */
    private $libraryStatus = 'active';

    /**
     * @var string
     *
     * @ORM\Column(name="library_territory", type="string", length=5, nullable=false)
     */
    private $libraryTerritory = 'US';

    /**
     * @var string
     *
     * @ORM\Column(name="library_status_updated_by", type="string", length=50, nullable=false)
     */
    private $libraryStatusUpdatedBy = 'cron';

    /**
     * @var string
     *
     * @ORM\Column(name="library_image_name", type="string", length=255, nullable=true)
     */
    private $libraryImageName;

    /**
     * @var string
     *
     * @ORM\Column(name="library_block_explicit_content", type="string", nullable=false)
     */
    private $libraryBlockExplicitContent = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="library_unlimited", type="string", nullable=false)
     */
    private $libraryUnlimited = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="library_language", type="string", length=5, nullable=false)
     */
    private $libraryLanguage = 'en';

    /**
     * @var string
     *
     * @ORM\Column(name="show_library_name", type="string", nullable=false)
     */
    private $showLibraryName = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="library_contract_start_date", type="date", nullable=false)
     */
    private $libraryContractStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="library_contract_end_date", type="date", nullable=true)
     */
    private $libraryContractEndDate;

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
     * @ORM\Column(name="library_exp_date_format", type="string", length=20, nullable=true)
     */
    private $libraryExpDateFormat;

    /**
     * @var integer
     *
     * @ORM\Column(name="generic_count", type="integer", nullable=true)
     */
    private $genericCount = '0';

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
     * @ORM\Column(name="timezone", type="string", length=255, nullable=true)
     */
    private $timezone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="library_type", type="boolean", nullable=false)
     */
    private $libraryType = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="library_streaming_hours", type="integer", nullable=false)
     */
    private $libraryStreamingHours;

    /**
     * @var boolean
     *
     * @ORM\Column(name="library_announcement", type="boolean", nullable=true)
     */
    private $libraryAnnouncement = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="optout_email_notification", type="string", nullable=true)
     */
    private $optoutEmailNotification = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="show_barcode", type="integer", nullable=false)
     */
    private $showBarcode = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="library_multi_authentication", type="boolean", nullable=true)
     */
    private $libraryMultiAuthentication = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="crm_libid", type="integer", nullable=true)
     */
    private $crmLibid;

    /**
     * @var string
     *
     * @ORM\Column(name="age_block", type="string", nullable=false)
     */
    private $ageBlock = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="status_override", type="string", nullable=false)
     */
    private $statusOverride = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="testing_mode", type="integer", nullable=false)
     */
    private $testingMode = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="optout_ip_lookup", type="string", nullable=false)
     */
    private $optoutIpLookup = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return Libraries
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return integer
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set libraryName
     *
     * @param string $libraryName
     *
     * @return Libraries
     */
    public function setLibraryName($libraryName)
    {
        $this->libraryName = $libraryName;

        return $this;
    }

    /**
     * Get libraryName
     *
     * @return string
     */
    public function getLibraryName()
    {
        return $this->libraryName;
    }

    /**
     * Set libraryDisplayName
     *
     * @param string $libraryDisplayName
     *
     * @return Libraries
     */
    public function setLibraryDisplayName($libraryDisplayName)
    {
        $this->libraryDisplayName = $libraryDisplayName;

        return $this;
    }

    /**
     * Get libraryDisplayName
     *
     * @return string
     */
    public function getLibraryDisplayName()
    {
        return $this->libraryDisplayName;
    }

    /**
     * Set libraryDomainName
     *
     * @param string $libraryDomainName
     *
     * @return Libraries
     */
    public function setLibraryDomainName($libraryDomainName)
    {
        $this->libraryDomainName = $libraryDomainName;

        return $this;
    }

    /**
     * Get libraryDomainName
     *
     * @return string
     */
    public function getLibraryDomainName()
    {
        return $this->libraryDomainName;
    }

    /**
     * Set libraryHomeUrl
     *
     * @param string $libraryHomeUrl
     *
     * @return Libraries
     */
    public function setLibraryHomeUrl($libraryHomeUrl)
    {
        $this->libraryHomeUrl = $libraryHomeUrl;

        return $this;
    }

    /**
     * Get libraryHomeUrl
     *
     * @return string
     */
    public function getLibraryHomeUrl()
    {
        return $this->libraryHomeUrl;
    }

    /**
     * Set libraryAuthenticationMethod
     *
     * @param string $libraryAuthenticationMethod
     *
     * @return Libraries
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
     * Set libraryMobileAuthentication
     *
     * @param string $libraryMobileAuthentication
     *
     * @return Libraries
     */
    public function setLibraryMobileAuthentication($libraryMobileAuthentication)
    {
        $this->libraryMobileAuthentication = $libraryMobileAuthentication;

        return $this;
    }

    /**
     * Get libraryMobileAuthentication
     *
     * @return string
     */
    public function getLibraryMobileAuthentication()
    {
        return $this->libraryMobileAuthentication;
    }

    /**
     * Set mobileAuth
     *
     * @param string $mobileAuth
     *
     * @return Libraries
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
     * Set mobileAuthType
     *
     * @param string $mobileAuthType
     *
     * @return Libraries
     */
    public function setMobileAuthType($mobileAuthType)
    {
        $this->mobileAuthType = $mobileAuthType;

        return $this;
    }

    /**
     * Get mobileAuthType
     *
     * @return string
     */
    public function getMobileAuthType()
    {
        return $this->mobileAuthType;
    }

    /**
     * Set libraryAuthenticationNum
     *
     * @param string $libraryAuthenticationNum
     *
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * Set libraryLogoutUrl
     *
     * @param string $libraryLogoutUrl
     *
     * @return Libraries
     */
    public function setLibraryLogoutUrl($libraryLogoutUrl)
    {
        $this->libraryLogoutUrl = $libraryLogoutUrl;

        return $this;
    }

    /**
     * Get libraryLogoutUrl
     *
     * @return string
     */
    public function getLibraryLogoutUrl()
    {
        return $this->libraryLogoutUrl;
    }

    /**
     * Set libraryApikey
     *
     * @param string $libraryApikey
     *
     * @return Libraries
     */
    public function setLibraryApikey($libraryApikey)
    {
        $this->libraryApikey = $libraryApikey;

        return $this;
    }

    /**
     * Get libraryApikey
     *
     * @return string
     */
    public function getLibraryApikey()
    {
        return $this->libraryApikey;
    }

    /**
     * Set librarySubdomain
     *
     * @param string $librarySubdomain
     *
     * @return Libraries
     */
    public function setLibrarySubdomain($librarySubdomain)
    {
        $this->librarySubdomain = $librarySubdomain;

        return $this;
    }

    /**
     * Get librarySubdomain
     *
     * @return string
     */
    public function getLibrarySubdomain()
    {
        return $this->librarySubdomain;
    }

    /**
     * Set librarySoapUrl
     *
     * @param string $librarySoapUrl
     *
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * Set librarySipLocation
     *
     * @param string $librarySipLocation
     *
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * Set libraryEzproxyDomain
     *
     * @param string $libraryEzproxyDomain
     *
     * @return Libraries
     */
    public function setLibraryEzproxyDomain($libraryEzproxyDomain)
    {
        $this->libraryEzproxyDomain = $libraryEzproxyDomain;

        return $this;
    }

    /**
     * Get libraryEzproxyDomain
     *
     * @return string
     */
    public function getLibraryEzproxyDomain()
    {
        return $this->libraryEzproxyDomain;
    }

    /**
     * Set libraryEzproxyWskey
     *
     * @param string $libraryEzproxyWskey
     *
     * @return Libraries
     */
    public function setLibraryEzproxyWskey($libraryEzproxyWskey)
    {
        $this->libraryEzproxyWskey = $libraryEzproxyWskey;

        return $this;
    }

    /**
     * Get libraryEzproxyWskey
     *
     * @return string
     */
    public function getLibraryEzproxyWskey()
    {
        return $this->libraryEzproxyWskey;
    }

    /**
     * Set libraryEzproxyLogout
     *
     * @param string $libraryEzproxyLogout
     *
     * @return Libraries
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
     * Set libraryContactFname
     *
     * @param string $libraryContactFname
     *
     * @return Libraries
     */
    public function setLibraryContactFname($libraryContactFname)
    {
        $this->libraryContactFname = $libraryContactFname;

        return $this;
    }

    /**
     * Get libraryContactFname
     *
     * @return string
     */
    public function getLibraryContactFname()
    {
        return $this->libraryContactFname;
    }

    /**
     * Set libraryContactLname
     *
     * @param string $libraryContactLname
     *
     * @return Libraries
     */
    public function setLibraryContactLname($libraryContactLname)
    {
        $this->libraryContactLname = $libraryContactLname;

        return $this;
    }

    /**
     * Get libraryContactLname
     *
     * @return string
     */
    public function getLibraryContactLname()
    {
        return $this->libraryContactLname;
    }

    /**
     * Set libraryContactEmail
     *
     * @param string $libraryContactEmail
     *
     * @return Libraries
     */
    public function setLibraryContactEmail($libraryContactEmail)
    {
        $this->libraryContactEmail = $libraryContactEmail;

        return $this;
    }

    /**
     * Get libraryContactEmail
     *
     * @return string
     */
    public function getLibraryContactEmail()
    {
        return $this->libraryContactEmail;
    }

    /**
     * Set libraryPhone
     *
     * @param string $libraryPhone
     *
     * @return Libraries
     */
    public function setLibraryPhone($libraryPhone)
    {
        $this->libraryPhone = $libraryPhone;

        return $this;
    }

    /**
     * Get libraryPhone
     *
     * @return string
     */
    public function getLibraryPhone()
    {
        return $this->libraryPhone;
    }

    /**
     * Set libraryAddress
     *
     * @param string $libraryAddress
     *
     * @return Libraries
     */
    public function setLibraryAddress($libraryAddress)
    {
        $this->libraryAddress = $libraryAddress;

        return $this;
    }

    /**
     * Get libraryAddress
     *
     * @return string
     */
    public function getLibraryAddress()
    {
        return $this->libraryAddress;
    }

    /**
     * Set libraryAddress2
     *
     * @param string $libraryAddress2
     *
     * @return Libraries
     */
    public function setLibraryAddress2($libraryAddress2)
    {
        $this->libraryAddress2 = $libraryAddress2;

        return $this;
    }

    /**
     * Get libraryAddress2
     *
     * @return string
     */
    public function getLibraryAddress2()
    {
        return $this->libraryAddress2;
    }

    /**
     * Set libraryCity
     *
     * @param string $libraryCity
     *
     * @return Libraries
     */
    public function setLibraryCity($libraryCity)
    {
        $this->libraryCity = $libraryCity;

        return $this;
    }

    /**
     * Get libraryCity
     *
     * @return string
     */
    public function getLibraryCity()
    {
        return $this->libraryCity;
    }

    /**
     * Set libraryState
     *
     * @param string $libraryState
     *
     * @return Libraries
     */
    public function setLibraryState($libraryState)
    {
        $this->libraryState = $libraryState;

        return $this;
    }

    /**
     * Get libraryState
     *
     * @return string
     */
    public function getLibraryState()
    {
        return $this->libraryState;
    }

    /**
     * Set libraryZipcode
     *
     * @param string $libraryZipcode
     *
     * @return Libraries
     */
    public function setLibraryZipcode($libraryZipcode)
    {
        $this->libraryZipcode = $libraryZipcode;

        return $this;
    }

    /**
     * Get libraryZipcode
     *
     * @return string
     */
    public function getLibraryZipcode()
    {
        return $this->libraryZipcode;
    }

    /**
     * Set libraryCountry
     *
     * @param string $libraryCountry
     *
     * @return Libraries
     */
    public function setLibraryCountry($libraryCountry)
    {
        $this->libraryCountry = $libraryCountry;

        return $this;
    }

    /**
     * Get libraryCountry
     *
     * @return string
     */
    public function getLibraryCountry()
    {
        return $this->libraryCountry;
    }

    /**
     * Set libraryUserDownloadLimit
     *
     * @param integer $libraryUserDownloadLimit
     *
     * @return Libraries
     */
    public function setLibraryUserDownloadLimit($libraryUserDownloadLimit)
    {
        $this->libraryUserDownloadLimit = $libraryUserDownloadLimit;

        return $this;
    }

    /**
     * Get libraryUserDownloadLimit
     *
     * @return integer
     */
    public function getLibraryUserDownloadLimit()
    {
        return $this->libraryUserDownloadLimit;
    }

    /**
     * Set libraryAdminId
     *
     * @param integer $libraryAdminId
     *
     * @return Libraries
     */
    public function setLibraryAdminId($libraryAdminId)
    {
        $this->libraryAdminId = $libraryAdminId;

        return $this;
    }

    /**
     * Get libraryAdminId
     *
     * @return integer
     */
    public function getLibraryAdminId()
    {
        return $this->libraryAdminId;
    }

    /**
     * Set libraryDownloadType
     *
     * @param string $libraryDownloadType
     *
     * @return Libraries
     */
    public function setLibraryDownloadType($libraryDownloadType)
    {
        $this->libraryDownloadType = $libraryDownloadType;

        return $this;
    }

    /**
     * Get libraryDownloadType
     *
     * @return string
     */
    public function getLibraryDownloadType()
    {
        return $this->libraryDownloadType;
    }

    /**
     * Set libraryDownloadLimit
     *
     * @param integer $libraryDownloadLimit
     *
     * @return Libraries
     */
    public function setLibraryDownloadLimit($libraryDownloadLimit)
    {
        $this->libraryDownloadLimit = $libraryDownloadLimit;

        return $this;
    }

    /**
     * Get libraryDownloadLimit
     *
     * @return integer
     */
    public function getLibraryDownloadLimit()
    {
        return $this->libraryDownloadLimit;
    }

    /**
     * Set libraryCurrentDownloads
     *
     * @param integer $libraryCurrentDownloads
     *
     * @return Libraries
     */
    public function setLibraryCurrentDownloads($libraryCurrentDownloads)
    {
        $this->libraryCurrentDownloads = $libraryCurrentDownloads;

        return $this;
    }

    /**
     * Get libraryCurrentDownloads
     *
     * @return integer
     */
    public function getLibraryCurrentDownloads()
    {
        return $this->libraryCurrentDownloads;
    }

    /**
     * Set libraryTotalDownloads
     *
     * @param integer $libraryTotalDownloads
     *
     * @return Libraries
     */
    public function setLibraryTotalDownloads($libraryTotalDownloads)
    {
        $this->libraryTotalDownloads = $libraryTotalDownloads;

        return $this;
    }

    /**
     * Get libraryTotalDownloads
     *
     * @return integer
     */
    public function getLibraryTotalDownloads()
    {
        return $this->libraryTotalDownloads;
    }

    /**
     * Set libraryAvailableDownloads
     *
     * @param integer $libraryAvailableDownloads
     *
     * @return Libraries
     */
    public function setLibraryAvailableDownloads($libraryAvailableDownloads)
    {
        $this->libraryAvailableDownloads = $libraryAvailableDownloads;

        return $this;
    }

    /**
     * Get libraryAvailableDownloads
     *
     * @return integer
     */
    public function getLibraryAvailableDownloads()
    {
        return $this->libraryAvailableDownloads;
    }

    /**
     * Set libraryStatus
     *
     * @param string $libraryStatus
     *
     * @return Libraries
     */
    public function setLibraryStatus($libraryStatus)
    {
        $this->libraryStatus = $libraryStatus;

        return $this;
    }

    /**
     * Get libraryStatus
     *
     * @return string
     */
    public function getLibraryStatus()
    {
        return $this->libraryStatus;
    }

    /**
     * Set libraryTerritory
     *
     * @param string $libraryTerritory
     *
     * @return Libraries
     */
    public function setLibraryTerritory($libraryTerritory)
    {
        $this->libraryTerritory = $libraryTerritory;

        return $this;
    }

    /**
     * Get libraryTerritory
     *
     * @return string
     */
    public function getLibraryTerritory()
    {
        return $this->libraryTerritory;
    }

    /**
     * Set libraryStatusUpdatedBy
     *
     * @param string $libraryStatusUpdatedBy
     *
     * @return Libraries
     */
    public function setLibraryStatusUpdatedBy($libraryStatusUpdatedBy)
    {
        $this->libraryStatusUpdatedBy = $libraryStatusUpdatedBy;

        return $this;
    }

    /**
     * Get libraryStatusUpdatedBy
     *
     * @return string
     */
    public function getLibraryStatusUpdatedBy()
    {
        return $this->libraryStatusUpdatedBy;
    }

    /**
     * Set libraryImageName
     *
     * @param string $libraryImageName
     *
     * @return Libraries
     */
    public function setLibraryImageName($libraryImageName)
    {
        $this->libraryImageName = $libraryImageName;

        return $this;
    }

    /**
     * Get libraryImageName
     *
     * @return string
     */
    public function getLibraryImageName()
    {
        return $this->libraryImageName;
    }

    /**
     * Set libraryBlockExplicitContent
     *
     * @param string $libraryBlockExplicitContent
     *
     * @return Libraries
     */
    public function setLibraryBlockExplicitContent($libraryBlockExplicitContent)
    {
        $this->libraryBlockExplicitContent = $libraryBlockExplicitContent;

        return $this;
    }

    /**
     * Get libraryBlockExplicitContent
     *
     * @return string
     */
    public function getLibraryBlockExplicitContent()
    {
        return $this->libraryBlockExplicitContent;
    }

    /**
     * Set libraryUnlimited
     *
     * @param string $libraryUnlimited
     *
     * @return Libraries
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
     * Set libraryLanguage
     *
     * @param string $libraryLanguage
     *
     * @return Libraries
     */
    public function setLibraryLanguage($libraryLanguage)
    {
        $this->libraryLanguage = $libraryLanguage;

        return $this;
    }

    /**
     * Get libraryLanguage
     *
     * @return string
     */
    public function getLibraryLanguage()
    {
        return $this->libraryLanguage;
    }

    /**
     * Set showLibraryName
     *
     * @param string $showLibraryName
     *
     * @return Libraries
     */
    public function setShowLibraryName($showLibraryName)
    {
        $this->showLibraryName = $showLibraryName;

        return $this;
    }

    /**
     * Get showLibraryName
     *
     * @return string
     */
    public function getShowLibraryName()
    {
        return $this->showLibraryName;
    }

    /**
     * Set libraryContractStartDate
     *
     * @param \DateTime $libraryContractStartDate
     *
     * @return Libraries
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
     * @return Libraries
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Libraries
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
     * @return Libraries
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
     * Set libraryExpDateFormat
     *
     * @param string $libraryExpDateFormat
     *
     * @return Libraries
     */
    public function setLibraryExpDateFormat($libraryExpDateFormat)
    {
        $this->libraryExpDateFormat = $libraryExpDateFormat;

        return $this;
    }

    /**
     * Get libraryExpDateFormat
     *
     * @return string
     */
    public function getLibraryExpDateFormat()
    {
        return $this->libraryExpDateFormat;
    }

    /**
     * Set genericCount
     *
     * @param integer $genericCount
     *
     * @return Libraries
     */
    public function setGenericCount($genericCount)
    {
        $this->genericCount = $genericCount;

        return $this;
    }

    /**
     * Get genericCount
     *
     * @return integer
     */
    public function getGenericCount()
    {
        return $this->genericCount;
    }

    /**
     * Set librarySipCommand
     *
     * @param string $librarySipCommand
     *
     * @return Libraries
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
     * @return Libraries
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
     * @return Libraries
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
     * Set timezone
     *
     * @param string $timezone
     *
     * @return Libraries
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set libraryType
     *
     * @param boolean $libraryType
     *
     * @return Libraries
     */
    public function setLibraryType($libraryType)
    {
        $this->libraryType = $libraryType;

        return $this;
    }

    /**
     * Get libraryType
     *
     * @return boolean
     */
    public function getLibraryType()
    {
        return $this->libraryType;
    }

    /**
     * Set libraryStreamingHours
     *
     * @param integer $libraryStreamingHours
     *
     * @return Libraries
     */
    public function setLibraryStreamingHours($libraryStreamingHours)
    {
        $this->libraryStreamingHours = $libraryStreamingHours;

        return $this;
    }

    /**
     * Get libraryStreamingHours
     *
     * @return integer
     */
    public function getLibraryStreamingHours()
    {
        return $this->libraryStreamingHours;
    }

    /**
     * Set libraryAnnouncement
     *
     * @param boolean $libraryAnnouncement
     *
     * @return Libraries
     */
    public function setLibraryAnnouncement($libraryAnnouncement)
    {
        $this->libraryAnnouncement = $libraryAnnouncement;

        return $this;
    }

    /**
     * Get libraryAnnouncement
     *
     * @return boolean
     */
    public function getLibraryAnnouncement()
    {
        return $this->libraryAnnouncement;
    }

    /**
     * Set optoutEmailNotification
     *
     * @param string $optoutEmailNotification
     *
     * @return Libraries
     */
    public function setOptoutEmailNotification($optoutEmailNotification)
    {
        $this->optoutEmailNotification = $optoutEmailNotification;

        return $this;
    }

    /**
     * Get optoutEmailNotification
     *
     * @return string
     */
    public function getOptoutEmailNotification()
    {
        return $this->optoutEmailNotification;
    }

    /**
     * Set showBarcode
     *
     * @param integer $showBarcode
     *
     * @return Libraries
     */
    public function setShowBarcode($showBarcode)
    {
        $this->showBarcode = $showBarcode;

        return $this;
    }

    /**
     * Get showBarcode
     *
     * @return integer
     */
    public function getShowBarcode()
    {
        return $this->showBarcode;
    }

    /**
     * Set libraryMultiAuthentication
     *
     * @param boolean $libraryMultiAuthentication
     *
     * @return Libraries
     */
    public function setLibraryMultiAuthentication($libraryMultiAuthentication)
    {
        $this->libraryMultiAuthentication = $libraryMultiAuthentication;

        return $this;
    }

    /**
     * Get libraryMultiAuthentication
     *
     * @return boolean
     */
    public function getLibraryMultiAuthentication()
    {
        return $this->libraryMultiAuthentication;
    }

    /**
     * Set crmLibid
     *
     * @param integer $crmLibid
     *
     * @return Libraries
     */
    public function setCrmLibid($crmLibid)
    {
        $this->crmLibid = $crmLibid;

        return $this;
    }

    /**
     * Get crmLibid
     *
     * @return integer
     */
    public function getCrmLibid()
    {
        return $this->crmLibid;
    }

    /**
     * Set ageBlock
     *
     * @param string $ageBlock
     *
     * @return Libraries
     */
    public function setAgeBlock($ageBlock)
    {
        $this->ageBlock = $ageBlock;

        return $this;
    }

    /**
     * Get ageBlock
     *
     * @return string
     */
    public function getAgeBlock()
    {
        return $this->ageBlock;
    }

    /**
     * Set statusOverride
     *
     * @param string $statusOverride
     *
     * @return Libraries
     */
    public function setStatusOverride($statusOverride)
    {
        $this->statusOverride = $statusOverride;

        return $this;
    }

    /**
     * Get statusOverride
     *
     * @return string
     */
    public function getStatusOverride()
    {
        return $this->statusOverride;
    }

    /**
     * Set testingMode
     *
     * @param integer $testingMode
     *
     * @return Libraries
     */
    public function setTestingMode($testingMode)
    {
        $this->testingMode = $testingMode;

        return $this;
    }

    /**
     * Get testingMode
     *
     * @return integer
     */
    public function getTestingMode()
    {
        return $this->testingMode;
    }

    /**
     * Set optoutIpLookup
     *
     * @param string $optoutIpLookup
     *
     * @return Libraries
     */
    public function setOptoutIpLookup($optoutIpLookup)
    {
        $this->optoutIpLookup = $optoutIpLookup;

        return $this;
    }

    /**
     * Get optoutIpLookup
     *
     * @return string
     */
    public function getOptoutIpLookup()
    {
        return $this->optoutIpLookup;
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
