<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jobs
 *
 * @ORM\Table(name="jobs")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\JobsRepository")
 */
class Jobs
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
     * @ORM\Column(name="class", type="string", length=255)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="argument", type="string", length=255)
     */
    private $argument;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_run", type="datetime")
     */
    private $lastRun;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_checked", type="datetime")
     */
    private $lastChecked;

    /**
     * @var int
     *
     * @ORM\Column(name="reserved_at", type="integer")
     */
    private $reservedAt;

    /**
     * @var int
     *
     * @ORM\Column(name="execution_duration", type="integer")
     */
    private $executionDuration;


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
     * Set class
     *
     * @param string $class
     *
     * @return Jobs
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set argument
     *
     * @param string $argument
     *
     * @return Jobs
     */
    public function setArgument($argument)
    {
        $this->argument = $argument;

        return $this;
    }

    /**
     * Get argument
     *
     * @return string
     */
    public function getArgument()
    {
        return $this->argument;
    }

    /**
     * Set lastRun
     *
     * @param \DateTime $lastRun
     *
     * @return Jobs
     */
    public function setLastRun($lastRun)
    {
        $this->lastRun = $lastRun;

        return $this;
    }

    /**
     * Get lastRun
     *
     * @return \DateTime
     */
    public function getLastRun()
    {
        return $this->lastRun;
    }

    /**
     * Set lastChecked
     *
     * @param \DateTime $lastChecked
     *
     * @return Jobs
     */
    public function setLastChecked($lastChecked)
    {
        $this->lastChecked = $lastChecked;

        return $this;
    }

    /**
     * Get lastChecked
     *
     * @return \DateTime
     */
    public function getLastChecked()
    {
        return $this->lastChecked;
    }

    /**
     * Set reservedAt
     *
     * @param integer $reservedAt
     *
     * @return Jobs
     */
    public function setReservedAt($reservedAt)
    {
        $this->reservedAt = $reservedAt;

        return $this;
    }

    /**
     * Get reservedAt
     *
     * @return int
     */
    public function getReservedAt()
    {
        return $this->reservedAt;
    }

    /**
     * Set executionDuration
     *
     * @param integer $executionDuration
     *
     * @return Jobs
     */
    public function setExecutionDuration($executionDuration)
    {
        $this->executionDuration = $executionDuration;

        return $this;
    }

    /**
     * Get executionDuration
     *
     * @return int
     */
    public function getExecutionDuration()
    {
        return $this->executionDuration;
    }
}

