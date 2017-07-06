<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Librariest
 *
 * @ORM\Table(name="librariest")
 * @ORM\Entity
 */
class Librariest
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
     * @ORM\Column(name="mobile_auth", type="string", length=255, nullable=true)
     */
    private $mobileAuth;

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
     * @ORM\Column(name="library_bgcolor", type="string", length=100, nullable=false)
     */
    private $libraryBgcolor = '606060';

    /**
     * @var string
     *
     * @ORM\Column(name="library_content_bgcolor", type="string", length=100, nullable=false)
     */
    private $libraryContentBgcolor = 'FFFFFF';

    /**
     * @var string
     *
     * @ORM\Column(name="library_nav_bgcolor", type="string", length=100, nullable=false)
     */
    private $libraryNavBgcolor = '3F3F3F';

    /**
     * @var string
     *
     * @ORM\Column(name="library_boxheader_bgcolor", type="string", length=100, nullable=false)
     */
    private $libraryBoxheaderBgcolor = 'CCCCCC';

    /**
     * @var string
     *
     * @ORM\Column(name="library_boxheader_text_color", type="string", length=100, nullable=false)
     */
    private $libraryBoxheaderTextColor = '666666';

    /**
     * @var string
     *
     * @ORM\Column(name="library_text_color", type="string", length=100, nullable=false)
     */
    private $libraryTextColor = '666666';

    /**
     * @var string
     *
     * @ORM\Column(name="library_links_color", type="string", length=100, nullable=false)
     */
    private $libraryLinksColor = '666666';

    /**
     * @var string
     *
     * @ORM\Column(name="library_links_hover_color", type="string", length=100, nullable=false)
     */
    private $libraryLinksHoverColor = '000000';

    /**
     * @var string
     *
     * @ORM\Column(name="library_navlinks_color", type="string", length=100, nullable=false)
     */
    private $libraryNavlinksColor = 'FFFFFF';

    /**
     * @var string
     *
     * @ORM\Column(name="library_navlinks_hover_color", type="string", length=100, nullable=false)
     */
    private $libraryNavlinksHoverColor = 'FFFFFF';

    /**
     * @var string
     *
     * @ORM\Column(name="library_box_header_color", type="string", length=100, nullable=true)
     */
    private $libraryBoxHeaderColor;

    /**
     * @var string
     *
     * @ORM\Column(name="library_box_hover_color", type="string", length=100, nullable=true)
     */
    private $libraryBoxHoverColor;

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
     * @ORM\Column(name="library_city", type="string", length=256, nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="facebook_icon", type="string", length=150, nullable=false)
     */
    private $facebookIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="youtube_icon", type="string", length=150, nullable=false)
     */
    private $youtubeIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="twiter_icon", type="string", length=150, nullable=false)
     */
    private $twiterIcon;

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
     * @var boolean
     *
     * @ORM\Column(name="test_library_type", type="boolean", nullable=false)
     */
    private $testLibraryType = '1';

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


}

