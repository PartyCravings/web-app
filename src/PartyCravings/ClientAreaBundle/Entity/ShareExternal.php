<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShareExternal
 *
 * @ORM\Table(name="share_external")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ShareExternalRepository")
 */
class ShareExternal
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
     * @ORM\Column(name="remote", type="string", length=255)
     */
    private $remote;

    /**
     * @var int
     *
     * @ORM\Column(name="remote_id", type="integer")
     */
    private $remoteId;

    /**
     * @var string
     *
     * @ORM\Column(name="share_token", type="string", length=255)
     */
    private $shareToken;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=255)
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="mountpoint", type="string", length=255)
     */
    private $mountpoint;

    /**
     * @var string
     *
     * @ORM\Column(name="mountpoint_hash", type="string", length=255)
     */
    private $mountpointHash;

    /**
     * @var bool
     *
     * @ORM\Column(name="accepted", type="boolean")
     */
    private $accepted;


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
     * Set remote
     *
     * @param string $remote
     *
     * @return ShareExternal
     */
    public function setRemote($remote)
    {
        $this->remote = $remote;

        return $this;
    }

    /**
     * Get remote
     *
     * @return string
     */
    public function getRemote()
    {
        return $this->remote;
    }

    /**
     * Set remoteId
     *
     * @param integer $remoteId
     *
     * @return ShareExternal
     */
    public function setRemoteId($remoteId)
    {
        $this->remoteId = $remoteId;

        return $this;
    }

    /**
     * Get remoteId
     *
     * @return int
     */
    public function getRemoteId()
    {
        return $this->remoteId;
    }

    /**
     * Set shareToken
     *
     * @param string $shareToken
     *
     * @return ShareExternal
     */
    public function setShareToken($shareToken)
    {
        $this->shareToken = $shareToken;

        return $this;
    }

    /**
     * Get shareToken
     *
     * @return string
     */
    public function getShareToken()
    {
        return $this->shareToken;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return ShareExternal
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
     * Set name
     *
     * @param string $name
     *
     * @return ShareExternal
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
     * Set owner
     *
     * @param string $owner
     *
     * @return ShareExternal
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return ShareExternal
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set mountpoint
     *
     * @param string $mountpoint
     *
     * @return ShareExternal
     */
    public function setMountpoint($mountpoint)
    {
        $this->mountpoint = $mountpoint;

        return $this;
    }

    /**
     * Get mountpoint
     *
     * @return string
     */
    public function getMountpoint()
    {
        return $this->mountpoint;
    }

    /**
     * Set mountpointHash
     *
     * @param string $mountpointHash
     *
     * @return ShareExternal
     */
    public function setMountpointHash($mountpointHash)
    {
        $this->mountpointHash = $mountpointHash;

        return $this;
    }

    /**
     * Get mountpointHash
     *
     * @return string
     */
    public function getMountpointHash()
    {
        return $this->mountpointHash;
    }

    /**
     * Set accepted
     *
     * @param boolean $accepted
     *
     * @return ShareExternal
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
}

