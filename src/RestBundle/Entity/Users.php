<?php

namespace RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_id", type="integer", nullable=true)
     */
    private $typeId;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=50, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=50, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="library_id", type="bigint", nullable=false)
     */
    private $libraryId;

    /**
     * @var string
     *
     * @ORM\Column(name="consortium", type="string", length=255, nullable=true)
     */
    private $consortium;

    /**
     * @var string
     *
     * @ORM\Column(name="user_status", type="string", nullable=false)
     */
    private $userStatus = 'active';

    /**
     * @var string
     *
     * @ORM\Column(name="sales", type="string", nullable=false)
     */
    private $sales = 'no';

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
     * @var integer
     *
     * @ORM\Column(name="crm_patronid", type="integer", nullable=true)
     */
    private $crmPatronid;

    /**
     * @var integer
     *
     * @ORM\Column(name="crm_multiadmin_id", type="integer", nullable=true)
     */
    private $crmMultiadminId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
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
     * Set typeId
     *
     * @param integer $typeId
     *
     * @return Users
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return integer
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Users
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Users
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
     * Set email
     *
     * @param string $email
     *
     * @return Users
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
     * Set libraryId
     *
     * @param integer $libraryId
     *
     * @return Users
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
     * Set consortium
     *
     * @param string $consortium
     *
     * @return Users
     */
    public function setConsortium($consortium)
    {
        $this->consortium = $consortium;

        return $this;
    }

    /**
     * Get consortium
     *
     * @return string
     */
    public function getConsortium()
    {
        return $this->consortium;
    }

    /**
     * Set userStatus
     *
     * @param string $userStatus
     *
     * @return Users
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * Get userStatus
     *
     * @return string
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * Set sales
     *
     * @param string $sales
     *
     * @return Users
     */
    public function setSales($sales)
    {
        $this->sales = $sales;

        return $this;
    }

    /**
     * Get sales
     *
     * @return string
     */
    public function getSales()
    {
        return $this->sales;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Users
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
     * @return Users
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
     * Set crmPatronid
     *
     * @param integer $crmPatronid
     *
     * @return Users
     */
    public function setCrmPatronid($crmPatronid)
    {
        $this->crmPatronid = $crmPatronid;

        return $this;
    }

    /**
     * Get crmPatronid
     *
     * @return integer
     */
    public function getCrmPatronid()
    {
        return $this->crmPatronid;
    }

    /**
     * Set crmMultiadminId
     *
     * @param integer $crmMultiadminId
     *
     * @return Users
     */
    public function setCrmMultiadminId($crmMultiadminId)
    {
        $this->crmMultiadminId = $crmMultiadminId;

        return $this;
    }

    /**
     * Get crmMultiadminId
     *
     * @return integer
     */
    public function getCrmMultiadminId()
    {
        return $this->crmMultiadminId;
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
