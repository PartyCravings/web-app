<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportsSettings
 *
 * @ORM\Table(name="reports_settings")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ReportsSettingsRepository")
 */
class ReportsSettings
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
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="report_interval", type="integer")
     */
    private $reportInterval;

    /**
     * @var bool
     *
     * @ORM\Column(name="email_notification", type="boolean")
     */
    private $emailNotification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_generated", type="datetime")
     */
    private $lastGenerated;


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
     * Set userId
     *
     * @param integer $userId
     *
     * @return ReportsSettings
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
     * Set reportInterval
     *
     * @param integer $reportInterval
     *
     * @return ReportsSettings
     */
    public function setReportInterval($reportInterval)
    {
        $this->reportInterval = $reportInterval;

        return $this;
    }

    /**
     * Get reportInterval
     *
     * @return int
     */
    public function getReportInterval()
    {
        return $this->reportInterval;
    }

    /**
     * Set emailNotification
     *
     * @param boolean $emailNotification
     *
     * @return ReportsSettings
     */
    public function setEmailNotification($emailNotification)
    {
        $this->emailNotification = $emailNotification;

        return $this;
    }

    /**
     * Get emailNotification
     *
     * @return bool
     */
    public function getEmailNotification()
    {
        return $this->emailNotification;
    }

    /**
     * Set lastGenerated
     *
     * @param \DateTime $lastGenerated
     *
     * @return ReportsSettings
     */
    public function setLastGenerated($lastGenerated)
    {
        $this->lastGenerated = $lastGenerated;

        return $this;
    }

    /**
     * Get lastGenerated
     *
     * @return \DateTime
     */
    public function getLastGenerated()
    {
        return $this->lastGenerated;
    }
}

