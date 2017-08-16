<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendarchanges
 *
 * @ORM\Table(name="calendarchanges")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\CalendarchangesRepository")
 */
class Calendarchanges
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
     * @ORM\Column(name="uri", type="string", length=255)
     */
    private $uri;

    /**
     * @var string
     *
     * @ORM\Column(name="synctoken", type="string", length=255)
     */
    private $synctoken;

    /**
     * @var int
     *
     * @ORM\ManyToMany(targetEntity="PartyCravings\ClientAreaBundle\Entity\Calendars", mappedBy="calendarChanges")
     */
    private $calendarId;

    /**
     * @var string
     *
     * @ORM\Column(name="operation", type="string", length=255)
     */
    private $operation;


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
     * Set uri
     *
     * @param string $uri
     *
     * @return Calendarchanges
     */
    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * Get uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set synctoken
     *
     * @param string $synctoken
     *
     * @return Calendarchanges
     */
    public function setSynctoken($synctoken)
    {
        $this->synctoken = $synctoken;

        return $this;
    }

    /**
     * Get synctoken
     *
     * @return string
     */
    public function getSynctoken()
    {
        return $this->synctoken;
    }

    /**
     * Set calendarId
     *
     * @param integer $calendarId
     *
     * @return Calendarchanges
     */
    public function setCalendarId($calendarId)
    {
        $this->calendarId = $calendarId;

        return $this;
    }

    /**
     * Get calendarId
     *
     * @return int
     */
    public function getCalendarId()
    {
        return $this->calendarId;
    }

    /**
     * Set operation
     *
     * @param string $operation
     *
     * @return Calendarchanges
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Get operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }
}

