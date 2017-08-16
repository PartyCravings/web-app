<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendars
 *
 * @ORM\Table(name="calendars")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\CalendarsRepository")
 */
class Calendars
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
     * @ORM\Column(name="principaluri", type="string", length=255)
     */
    private $principaluri;

    /**
     * @var string
     *
     * @ORM\Column(name="displayname", type="string", length=255)
     */
    private $displayname;

    /**
     * @var string
     *
     * @ORM\Column(name="uri", type="string", length=255)
     */
    private $uri;

    /**
     * @var int
     *
     * @ORM\Column(name="synctoken", type="integer")
     */
    private $synctoken;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="calendar_order", type="string", length=255)
     */
    private $calendarOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="calendar_color", type="string", length=255)
     */
    private $calendarColor;

    /**
     * @var string
     *
     * @ORM\ManyToMany(targetEntity="PartyCravings\ClientAreaBundle\Entity\Calendarobjects", inversedBy="calendarId")
     * @ORM\JoinColumn(name="calendarObjects", referencedColumnName="id")
     */
    private $calendarObjects;

    /**
     * @var string
     *
     * @ORM\ManyToMany(targetEntity="PartyCravings\ClientAreaBundle\Entity\Calendarchanges", inversedBy="calendarId")
     * @ORM\JoinColumn(name="calendarChanges", referencedColumnName="id")
     */
    private $calendarChanges;

    /**
     * @var string
     *
     * @ORM\Column(name="timezone", type="string", length=255)
     */
    private $timezone;

    /**
     * @var string
     *
     * @ORM\Column(name="components", type="string", length=255)
     */
    private $components;

    /**
     * @var int
     *
     * @ORM\Column(name="transparent", type="integer")
     */
    private $transparent;


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
     * Set principaluri
     *
     * @param string $principaluri
     *
     * @return Calendars
     */
    public function setPrincipaluri($principaluri)
    {
        $this->principaluri = $principaluri;

        return $this;
    }

    /**
     * Get principaluri
     *
     * @return string
     */
    public function getPrincipaluri()
    {
        return $this->principaluri;
    }

    /**
     * Set displayname
     *
     * @param string $displayname
     *
     * @return Calendars
     */
    public function setDisplayname($displayname)
    {
        $this->displayname = $displayname;

        return $this;
    }

    /**
     * Get displayname
     *
     * @return string
     */
    public function getDisplayname()
    {
        return $this->displayname;
    }

    /**
     * Set uri
     *
     * @param string $uri
     *
     * @return Calendars
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
     * @param integer $synctoken
     *
     * @return Calendars
     */
    public function setSynctoken($synctoken)
    {
        $this->synctoken = $synctoken;

        return $this;
    }

    /**
     * Get synctoken
     *
     * @return int
     */
    public function getSynctoken()
    {
        return $this->synctoken;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Calendars
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set calendarOrder
     *
     * @param string $calendarOrder
     *
     * @return Calendars
     */
    public function setCalendarOrder($calendarOrder)
    {
        $this->calendarOrder = $calendarOrder;

        return $this;
    }

    /**
     * Get calendarOrder
     *
     * @return string
     */
    public function getCalendarOrder()
    {
        return $this->calendarOrder;
    }

    /**
     * Set calendarColor
     *
     * @param string $calendarColor
     *
     * @return Calendars
     */
    public function setCalendarColor($calendarColor)
    {
        $this->calendarColor = $calendarColor;

        return $this;
    }

    /**
     * Get calendarColor
     *
     * @return string
     */
    public function getCalendarColor()
    {
        return $this->calendarColor;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     *
     * @return Calendars
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set components
     *
     * @param string $components
     *
     * @return Calendars
     */
    public function setComponents($components)
    {
        $this->components = $components;

        return $this;
    }

    /**
     * Get components
     *
     * @return string
     */
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Set transparent
     *
     * @param integer $transparent
     *
     * @return Calendars
     */
    public function setTransparent($transparent)
    {
        $this->transparent = $transparent;

        return $this;
    }

    /**
     * Get transparent
     *
     * @return int
     */
    public function getTransparent()
    {
        return $this->transparent;
    }

    /**
     * @return string
     */
    public function getCalendarChanges(): string
    {
        return $this->calendarChanges;
    }

    /**
     * @param string $calendarChanges
     */
    public function setCalendarChanges(string $calendarChanges)
    {
        $this->calendarChanges = $calendarChanges;
    }

    /**
     * @return string
     */
    public function getCalendarObjects(): string
    {
        return $this->calendarObjects;
    }

    /**
     * @param string $calendarObjects
     */
    public function setCalendarObjects(string $calendarObjects)
    {
        $this->calendarObjects = $calendarObjects;
    }
}

