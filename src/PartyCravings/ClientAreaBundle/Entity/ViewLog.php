<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ViewLog
 *
 * @ORM\Table(name="view_log")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ViewLogRepository")
 */
class ViewLog
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
     * @ORM\Column(name="view_log_id", type="integer")
     */
    private $viewLogId;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="record_type", type="string", length=255)
     */
    private $recordType;

    /**
     * @var int
     *
     * @ORM\Column(name="record_id", type="integer")
     */
    private $recordId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime")
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;

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
     * Set viewLogId
     *
     * @param integer $viewLogId
     *
     * @return ViewLog
     */
    public function setViewLogId($viewLogId)
    {
        $this->viewLogId = $viewLogId;

        return $this;
    }

    /**
     * Get viewLogId
     *
     * @return int
     */
    public function getViewLogId()
    {
        return $this->viewLogId;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return ViewLog
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
     * Set recordType
     *
     * @param string $recordType
     *
     * @return ViewLog
     */
    public function setRecordType($recordType)
    {
        $this->recordType = $recordType;

        return $this;
    }

    /**
     * Get recordType
     *
     * @return string
     */
    public function getRecordType()
    {
        return $this->recordType;
    }

    /**
     * Set recordId
     *
     * @param integer $recordId
     *
     * @return ViewLog
     */
    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;

        return $this;
    }

    /**
     * Get recordId
     *
     * @return int
     */
    public function getRecordId()
    {
        return $this->recordId;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return ViewLog
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return ViewLog
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
     * Set device
     *
     * @param string $device
     *
     * @return ViewLog
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

