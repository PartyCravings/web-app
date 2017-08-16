<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Share
 *
 * @ORM\Table(name="share")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ShareRepository")
 */
class Share
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
     * @var string
     *
     * @ORM\Column(name="share_type", type="string", length=255)
     */
    private $shareType;

    /**
     * @var int
     *
     * @ORM\Column(name="share_with", type="integer")
     */
    private $shareWith;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="uid_owner", type="string", length=255)
     */
    private $uidOwner;

    /**
     * @var int
     *
     * @ORM\Column(name="uid_initiator", type="integer")
     */
    private $uidInitiator;

    /**
     * @var string
     *
     * @ORM\Column(name="parent", type="string", length=255)
     */
    private $parent;

    /**
     * @var string
     *
     * @ORM\Column(name="item_type", type="string", length=255)
     */
    private $itemType;

    /**
     * @var string
     *
     * @ORM\Column(name="item_source", type="string", length=255)
     */
    private $itemSource;

    /**
     * @var string
     *
     * @ORM\Column(name="item_target", type="string", length=255)
     */
    private $itemTarget;

    /**
     * @var string
     *
     * @ORM\Column(name="file_source", type="string", length=255)
     */
    private $fileSource;

    /**
     * @var string
     *
     * @ORM\Column(name="file_target", type="string", length=255)
     */
    private $fileTarget;

    /**
     * @var string
     *
     * @ORM\Column(name="permissions", type="string", length=255)
     */
    private $permissions;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="stime", type="datetime")
     */
    private $stime;

    /**
     * @var bool
     *
     * @ORM\Column(name="accepted", type="boolean")
     */
    private $accepted;

    /**
     * @var bool
     *
     * @ORM\Column(name="expiration", type="boolean")
     */
    private $expiration;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_send", type="string", length=255)
     */
    private $mailSend;

    /**
     * @var string
     *
     * @ORM\Column(name="share_name", type="string", length=255)
     */
    private $shareName;


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
     * Set shareType
     *
     * @param string $shareType
     *
     * @return Share
     */
    public function setShareType($shareType)
    {
        $this->shareType = $shareType;

        return $this;
    }

    /**
     * Get shareType
     *
     * @return string
     */
    public function getShareType()
    {
        return $this->shareType;
    }

    /**
     * Set shareWith
     *
     * @param integer $shareWith
     *
     * @return Share
     */
    public function setShareWith($shareWith)
    {
        $this->shareWith = $shareWith;

        return $this;
    }

    /**
     * Get shareWith
     *
     * @return int
     */
    public function getShareWith()
    {
        return $this->shareWith;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Share
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
     * Set uidOwner
     *
     * @param string $uidOwner
     *
     * @return Share
     */
    public function setUidOwner($uidOwner)
    {
        $this->uidOwner = $uidOwner;

        return $this;
    }

    /**
     * Get uidOwner
     *
     * @return string
     */
    public function getUidOwner()
    {
        return $this->uidOwner;
    }

    /**
     * Set uidInitiator
     *
     * @param integer $uidInitiator
     *
     * @return Share
     */
    public function setUidInitiator($uidInitiator)
    {
        $this->uidInitiator = $uidInitiator;

        return $this;
    }

    /**
     * Get uidInitiator
     *
     * @return int
     */
    public function getUidInitiator()
    {
        return $this->uidInitiator;
    }

    /**
     * Set parent
     *
     * @param string $parent
     *
     * @return Share
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set itemType
     *
     * @param string $itemType
     *
     * @return Share
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;

        return $this;
    }

    /**
     * Get itemType
     *
     * @return string
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * Set itemSource
     *
     * @param string $itemSource
     *
     * @return Share
     */
    public function setItemSource($itemSource)
    {
        $this->itemSource = $itemSource;

        return $this;
    }

    /**
     * Get itemSource
     *
     * @return string
     */
    public function getItemSource()
    {
        return $this->itemSource;
    }

    /**
     * Set itemTarget
     *
     * @param string $itemTarget
     *
     * @return Share
     */
    public function setItemTarget($itemTarget)
    {
        $this->itemTarget = $itemTarget;

        return $this;
    }

    /**
     * Get itemTarget
     *
     * @return string
     */
    public function getItemTarget()
    {
        return $this->itemTarget;
    }

    /**
     * Set fileSource
     *
     * @param string $fileSource
     *
     * @return Share
     */
    public function setFileSource($fileSource)
    {
        $this->fileSource = $fileSource;

        return $this;
    }

    /**
     * Get fileSource
     *
     * @return string
     */
    public function getFileSource()
    {
        return $this->fileSource;
    }

    /**
     * Set fileTarget
     *
     * @param string $fileTarget
     *
     * @return Share
     */
    public function setFileTarget($fileTarget)
    {
        $this->fileTarget = $fileTarget;

        return $this;
    }

    /**
     * Get fileTarget
     *
     * @return string
     */
    public function getFileTarget()
    {
        return $this->fileTarget;
    }

    /**
     * Set permissions
     *
     * @param string $permissions
     *
     * @return Share
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * Get permissions
     *
     * @return string
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Set stime
     *
     * @param \DateTime $stime
     *
     * @return Share
     */
    public function setStime($stime)
    {
        $this->stime = $stime;

        return $this;
    }

    /**
     * Get stime
     *
     * @return \DateTime
     */
    public function getStime()
    {
        return $this->stime;
    }

    /**
     * Set accepted
     *
     * @param boolean $accepted
     *
     * @return Share
     */
    public function setAccepted($accepted)
    {
        $this->accepted = $accepted;

        return $this;
    }

    /**
     * Get accepted
     *
     * @return bool
     */
    public function getAccepted()
    {
        return $this->accepted;
    }

    /**
     * Set expiration
     *
     * @param boolean $expiration
     *
     * @return Share
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * Get expiration
     *
     * @return bool
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Share
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
     * Set mailSend
     *
     * @param string $mailSend
     *
     * @return Share
     */
    public function setMailSend($mailSend)
    {
        $this->mailSend = $mailSend;

        return $this;
    }

    /**
     * Get mailSend
     *
     * @return string
     */
    public function getMailSend()
    {
        return $this->mailSend;
    }

    /**
     * Set shareName
     *
     * @param string $shareName
     *
     * @return Share
     */
    public function setShareName($shareName)
    {
        $this->shareName = $shareName;

        return $this;
    }

    /**
     * Get shareName
     *
     * @return string
     */
    public function getShareName()
    {
        return $this->shareName;
    }
}

