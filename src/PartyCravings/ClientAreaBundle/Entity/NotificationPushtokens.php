<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationPushtokens
 *
 * @ORM\Table(name="notification_pushtokens")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\NotificationPushtokensRepository")
 */
class NotificationPushtokens
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
     * @ORM\Column(name="uid", type="string", length=255)
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceidentifier", type="string", length=255)
     */
    private $deviceidentifier;

    /**
     * @var string
     *
     * @ORM\Column(name="devicepublickey", type="string", length=255)
     */
    private $devicepublickey;

    /**
     * @var string
     *
     * @ORM\Column(name="devicepublickeyhash", type="string", length=255)
     */
    private $devicepublickeyhash;

    /**
     * @var string
     *
     * @ORM\Column(name="pushtokenhash", type="string", length=255)
     */
    private $pushtokenhash;

    /**
     * @var string
     *
     * @ORM\Column(name="proxyserver", type="string", length=255)
     */
    private $proxyserver;


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
     * Set uid
     *
     * @param string $uid
     *
     * @return NotificationPushtokens
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return NotificationPushtokens
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
     * Set deviceidentifier
     *
     * @param string $deviceidentifier
     *
     * @return NotificationPushtokens
     */
    public function setDeviceidentifier($deviceidentifier)
    {
        $this->deviceidentifier = $deviceidentifier;

        return $this;
    }

    /**
     * Get deviceidentifier
     *
     * @return string
     */
    public function getDeviceidentifier()
    {
        return $this->deviceidentifier;
    }

    /**
     * Set devicepublickey
     *
     * @param string $devicepublickey
     *
     * @return NotificationPushtokens
     */
    public function setDevicepublickey($devicepublickey)
    {
        $this->devicepublickey = $devicepublickey;

        return $this;
    }

    /**
     * Get devicepublickey
     *
     * @return string
     */
    public function getDevicepublickey()
    {
        return $this->devicepublickey;
    }

    /**
     * Set devicepublickeyhash
     *
     * @param string $devicepublickeyhash
     *
     * @return NotificationPushtokens
     */
    public function setDevicepublickeyhash($devicepublickeyhash)
    {
        $this->devicepublickeyhash = $devicepublickeyhash;

        return $this;
    }

    /**
     * Get devicepublickeyhash
     *
     * @return string
     */
    public function getDevicepublickeyhash()
    {
        return $this->devicepublickeyhash;
    }

    /**
     * Set pushtokenhash
     *
     * @param string $pushtokenhash
     *
     * @return NotificationPushtokens
     */
    public function setPushtokenhash($pushtokenhash)
    {
        $this->pushtokenhash = $pushtokenhash;

        return $this;
    }

    /**
     * Get pushtokenhash
     *
     * @return string
     */
    public function getPushtokenhash()
    {
        return $this->pushtokenhash;
    }

    /**
     * Set proxyserver
     *
     * @param string $proxyserver
     *
     * @return NotificationPushtokens
     */
    public function setProxyserver($proxyserver)
    {
        $this->proxyserver = $proxyserver;

        return $this;
    }

    /**
     * Get proxyserver
     *
     * @return string
     */
    public function getProxyserver()
    {
        return $this->proxyserver;
    }
}

