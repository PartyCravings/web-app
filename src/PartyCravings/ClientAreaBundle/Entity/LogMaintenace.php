<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogMaintenace
 *
 * @ORM\Table(name="log_maintenace")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\LogMaintenaceRepository")
 */
class LogMaintenace
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
     * @ORM\Column(name="log_maintenance_forecasting_id", type="integer")
     */
    private $logMaintenanceForecastingId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_run", type="datetime")
     */
    private $startRun;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_run", type="datetime")
     */
    private $endRun;

    /**
     * @var string
     *
     * @ORM\Column(name="operation_interval", type="string", length=255)
     */
    private $operationInterval;

    /**
     * @var string
     *
     * @ORM\Column(name="duration", type="string", length=255)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_to", type="string", length=255)
     */
    private $updatedTo;

    /**
     * @var int
     *
     * @ORM\Column(name="log_maintenance_priority_id", type="integer")
     */
    private $logMaintenancePriorityId;

    /**
     * @var int
     *
     * @ORM\Column(name="log_maintenance_statistics_id", type="integer")
     */
    private $logMaintenanceStatisticsId;

    /**
     * @var string
     *
     * @ORM\Column(name="adserver_run_type", type="string", length=255)
     */
    private $adserverRunType;

    /**
     * @var string
     *
     * @ORM\Column(name="search_run_type", type="string", length=255)
     */
    private $searchRunType;

    /**
     * @var string
     *
     * @ORM\Column(name="tracker_run_type", type="string", length=255)
     */
    private $trackerRunType;


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
     * Set logMaintenanceForecastingId
     *
     * @param integer $logMaintenanceForecastingId
     *
     * @return LogMaintenace
     */
    public function setLogMaintenanceForecastingId($logMaintenanceForecastingId)
    {
        $this->logMaintenanceForecastingId = $logMaintenanceForecastingId;

        return $this;
    }

    /**
     * Get logMaintenanceForecastingId
     *
     * @return int
     */
    public function getLogMaintenanceForecastingId()
    {
        return $this->logMaintenanceForecastingId;
    }

    /**
     * Set startRun
     *
     * @param \DateTime $startRun
     *
     * @return LogMaintenace
     */
    public function setStartRun($startRun)
    {
        $this->startRun = $startRun;

        return $this;
    }

    /**
     * Get startRun
     *
     * @return \DateTime
     */
    public function getStartRun()
    {
        return $this->startRun;
    }

    /**
     * Set endRun
     *
     * @param \DateTime $endRun
     *
     * @return LogMaintenace
     */
    public function setEndRun($endRun)
    {
        $this->endRun = $endRun;

        return $this;
    }

    /**
     * Get endRun
     *
     * @return \DateTime
     */
    public function getEndRun()
    {
        return $this->endRun;
    }

    /**
     * Set operationInterval
     *
     * @param string $operationInterval
     *
     * @return LogMaintenace
     */
    public function setOperationInterval($operationInterval)
    {
        $this->operationInterval = $operationInterval;

        return $this;
    }

    /**
     * Get operationInterval
     *
     * @return string
     */
    public function getOperationInterval()
    {
        return $this->operationInterval;
    }

    /**
     * Set duration
     *
     * @param string $duration
     *
     * @return LogMaintenace
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set updatedTo
     *
     * @param string $updatedTo
     *
     * @return LogMaintenace
     */
    public function setUpdatedTo($updatedTo)
    {
        $this->updatedTo = $updatedTo;

        return $this;
    }

    /**
     * Get updatedTo
     *
     * @return string
     */
    public function getUpdatedTo()
    {
        return $this->updatedTo;
    }

    /**
     * Set logMaintenancePriorityId
     *
     * @param integer $logMaintenancePriorityId
     *
     * @return LogMaintenace
     */
    public function setLogMaintenancePriorityId($logMaintenancePriorityId)
    {
        $this->logMaintenancePriorityId = $logMaintenancePriorityId;

        return $this;
    }

    /**
     * Get logMaintenancePriorityId
     *
     * @return int
     */
    public function getLogMaintenancePriorityId()
    {
        return $this->logMaintenancePriorityId;
    }

    /**
     * Set logMaintenanceStatisticsId
     *
     * @param integer $logMaintenanceStatisticsId
     *
     * @return LogMaintenace
     */
    public function setLogMaintenanceStatisticsId($logMaintenanceStatisticsId)
    {
        $this->logMaintenanceStatisticsId = $logMaintenanceStatisticsId;

        return $this;
    }

    /**
     * Get logMaintenanceStatisticsId
     *
     * @return int
     */
    public function getLogMaintenanceStatisticsId()
    {
        return $this->logMaintenanceStatisticsId;
    }

    /**
     * Set adserverRunType
     *
     * @param string $adserverRunType
     *
     * @return LogMaintenace
     */
    public function setAdserverRunType($adserverRunType)
    {
        $this->adserverRunType = $adserverRunType;

        return $this;
    }

    /**
     * Get adserverRunType
     *
     * @return string
     */
    public function getAdserverRunType()
    {
        return $this->adserverRunType;
    }

    /**
     * Set searchRunType
     *
     * @param string $searchRunType
     *
     * @return LogMaintenace
     */
    public function setSearchRunType($searchRunType)
    {
        $this->searchRunType = $searchRunType;

        return $this;
    }

    /**
     * Get searchRunType
     *
     * @return string
     */
    public function getSearchRunType()
    {
        return $this->searchRunType;
    }

    /**
     * Set trackerRunType
     *
     * @param string $trackerRunType
     *
     * @return LogMaintenace
     */
    public function setTrackerRunType($trackerRunType)
    {
        $this->trackerRunType = $trackerRunType;

        return $this;
    }

    /**
     * Get trackerRunType
     *
     * @return string
     */
    public function getTrackerRunType()
    {
        return $this->trackerRunType;
    }
}

