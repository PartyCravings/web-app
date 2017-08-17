<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FailedLogins
 *
 * @ORM\Table(name="failed_logins")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FailedLoginsRepository")
 */
class FailedLogins
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
     * @ORM\Column(name="login_id", type="integer")
     */
    private $loginId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;

    /**
     * @var int
     *
     * @ORM\Column(name="attempts", type="integer")
     */
    private $attempts;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_attempt", type="datetime")
     */
    private $lastAttempt;

    /**
     * @var string
     *
     * @ORM\Column(name="device", type="string", length=255)
     */
    private $device;


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
     * Set loginId
     *
     * @param integer $loginId
     *
     * @return FailedLogins
     */
    public function setLoginId($loginId)
    {
        $this->loginId = $loginId;

        return $this;
    }

    /**
     * Get loginId
     *
     * @return int
     */
    public function getLoginId()
    {
        return $this->loginId;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return FailedLogins
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set attempts
     *
     * @param integer $attempts
     *
     * @return FailedLogins
     */
    public function setAttempts($attempts)
    {
        $this->attempts = $attempts;

        return $this;
    }

    /**
     * Get attempts
     *
     * @return int
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * Set lastAttempt
     *
     * @param \DateTime $lastAttempt
     *
     * @return FailedLogins
     */
    public function setLastAttempt($lastAttempt)
    {
        $this->lastAttempt = $lastAttempt;

        return $this;
    }

    /**
     * Get lastAttempt
     *
     * @return \DateTime
     */
    public function getLastAttempt()
    {
        return $this->lastAttempt;
    }

    /**
     * Set device
     *
     * @param string $device
     *
     * @return FailedLogins
     */
    public function setDevice($device)
    {
        $this->device = $device;

        return $this;
    }

    /**
     * Get device
     *
     * @return string
     */
    public function getDevice()
    {
        return $this->device;
    }
}

