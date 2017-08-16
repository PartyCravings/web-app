<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Timezone
 *
 * @ORM\Table(name="timezone")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\TimezoneRepository")
 */
class Timezone
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
     * @ORM\Column(name="timezone_name", type="string", length=255)
     */
    private $timezoneName;

    /**
     * @var string
     *
     * @ORM\Column(name="timezone_label", type="string", length=255)
     */
    private $timezoneLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="gmt_diff", type="string", length=255)
     */
    private $gmtDiff;


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
     * Set timezoneName
     *
     * @param string $timezoneName
     *
     * @return Timezone
     */
    public function setTimezoneName($timezoneName)
    {
        $this->timezoneName = $timezoneName;

        return $this;
    }

    /**
     * Get timezoneName
     *
     * @return string
     */
    public function getTimezoneName()
    {
        return $this->timezoneName;
    }

    /**
     * Set timezoneLabel
     *
     * @param string $timezoneLabel
     *
     * @return Timezone
     */
    public function setTimezoneLabel($timezoneLabel)
    {
        $this->timezoneLabel = $timezoneLabel;

        return $this;
    }

    /**
     * Get timezoneLabel
     *
     * @return string
     */
    public function getTimezoneLabel()
    {
        return $this->timezoneLabel;
    }

    /**
     * Set gmtDiff
     *
     * @param string $gmtDiff
     *
     * @return Timezone
     */
    public function setGmtDiff($gmtDiff)
    {
        $this->gmtDiff = $gmtDiff;

        return $this;
    }

    /**
     * Get gmtDiff
     *
     * @return string
     */
    public function getGmtDiff()
    {
        return $this->gmtDiff;
    }
}

