<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Credentials
 *
 * @ORM\Table(name="credentials")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\CredentialsRepository")
 */
class Credentials
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="credential_id", type="integer")
     */
    private $credentialId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="PartyCravings\ClientAreaBundle\Entity\CredentialsDefault", mappedBy="credentialId")
     */
    private $credentialsDefault;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var bool
     *
     * @ORM\Column(name="private", type="boolean")
     */
    private $private;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_encrypted", type="boolean")
     */
    private $isEncrypted;

    /**
     * @var bool
     *
     * @ORM\Column(name="disable_inbox", type="boolean")
     */
    private $disableInbox;

    /**
     * @var string
     *
     * @ORM\Column(name="model_class", type="string", length=255)
     */
    private $modelClass;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="date_upd", type="string", length=255)
     */
    private $dateUpd;

    /**
     * @var string
     *
     * @ORM\Column(name="auth", type="string", length=255)
     */
    private $auth;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_suspended", type="boolean")
     */
    private $isSuspended;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_deleted", type="boolean")
     */
    private $isDeleted;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set credentialId
     *
     * @param integer $credentialId
     *
     * @return Credentials
     */
    public function setCredentialId($credentialId)
    {
        $this->credentialId = $credentialId;

        return $this;
    }

    /**
     * Get credentialId
     *
     * @return int
     */
    public function getCredentialId()
    {
        return $this->credentialId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Credentials
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Credentials
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set private
     *
     * @param boolean $private
     *
     * @return Credentials
     */
    public function setPrivate($private)
    {
        $this->private = $private;

        return $this;
    }

    /**
     * Get private
     *
     * @return bool
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Set isEncrypted
     *
     * @param boolean $isEncrypted
     *
     * @return Credentials
     */
    public function setIsEncrypted($isEncrypted)
    {
        $this->isEncrypted = $isEncrypted;

        return $this;
    }

    /**
     * Get isEncrypted
     *
     * @return bool
     */
    public function getIsEncrypted()
    {
        return $this->isEncrypted;
    }

    /**
     * Set disableInbox
     *
     * @param boolean $disableInbox
     *
     * @return Credentials
     */
    public function setDisableInbox($disableInbox)
    {
        $this->disableInbox = $disableInbox;

        return $this;
    }

    /**
     * Get disableInbox
     *
     * @return bool
     */
    public function getDisableInbox()
    {
        return $this->disableInbox;
    }

    /**
     * Set modelClass
     *
     * @param string $modelClass
     *
     * @return Credentials
     */
    public function setModelClass($modelClass)
    {
        $this->modelClass = $modelClass;

        return $this;
    }

    /**
     * Get modelClass
     *
     * @return string
     */
    public function getModelClass()
    {
        return $this->modelClass;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Credentials
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param string $dateUpd
     *
     * @return Credentials
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return string
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * Set auth
     *
     * @param string $auth
     *
     * @return Credentials
     */
    public function setAuth($auth)
    {
        $this->auth = $auth;

        return $this;
    }

    /**
     * Get auth
     *
     * @return string
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return Credentials
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Set isSuspended
     *
     * @param boolean $isSuspended
     *
     * @return Credentials
     */
    public function setIsSuspended($isSuspended)
    {
        $this->isSuspended = $isSuspended;

        return $this;
    }

    /**
     * Get isSuspended
     *
     * @return bool
     */
    public function getIsSuspended()
    {
        return $this->isSuspended;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return Credentials
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * @return string
     */
    public function getCredentialsDefault(): string
    {
        return $this->credentialsDefault;
    }

    /**
     * @param string $credentialsDefault
     */
    public function setCredentialsDefault(string $credentialsDefault)
    {
        $this->credentialsDefault = $credentialsDefault;
    }
}

