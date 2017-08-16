<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendarsubscriptions
 *
 * @ORM\Table(name="calendarsubscriptions")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\CalendarsubscriptionsRepository")
 */
class Calendarsubscriptions
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
     * @ORM\Column(name="principaluri", type="string", length=255)
     */
    private $principaluri;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="displayname", type="string", length=255)
     */
    private $displayname;

    /**
     * @var string
     *
     * @ORM\Column(name="refreshrate", type="string", length=255)
     */
    private $refreshrate;

    /**
     * @var int
     *
     * @ORM\Column(name="calendar_order", type="integer")
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
     * @ORM\Column(name="striptodos", type="string", length=255)
     */
    private $striptodos;

    /**
     * @var string
     *
     * @ORM\Column(name="strip_alarms", type="string", length=255)
     */
    private $stripAlarms;

    /**
     * @var string
     *
     * @ORM\Column(name="strip_attachments", type="string", length=255)
     */
    private $stripAttachments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_modified", type="datetime")
     */
    private $lastModified;


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
     * @return Calendarsubscriptions
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
     * Set principaluri
     *
     * @param string $principaluri
     *
     * @return Calendarsubscriptions
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
     * Set source
     *
     * @param string $source
     *
     * @return Calendarsubscriptions
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set displayname
     *
     * @param string $displayname
     *
     * @return Calendarsubscriptions
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
     * Set refreshrate
     *
     * @param string $refreshrate
     *
     * @return Calendarsubscriptions
     */
    public function setRefreshrate($refreshrate)
    {
        $this->refreshrate = $refreshrate;

        return $this;
    }

    /**
     * Get refreshrate
     *
     * @return string
     */
    public function getRefreshrate()
    {
        return $this->refreshrate;
    }

    /**
     * Set calendarOrder
     *
     * @param integer $calendarOrder
     *
     * @return Calendarsubscriptions
     */
    public function setCalendarOrder($calendarOrder)
    {
        $this->calendarOrder = $calendarOrder;

        return $this;
    }

    /**
     * Get calendarOrder
     *
     * @return int
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
     * @return Calendarsubscriptions
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
     * Set striptodos
     *
     * @param string $striptodos
     *
     * @return Calendarsubscriptions
     */
    public function setStriptodos($striptodos)
    {
        $this->striptodos = $striptodos;

        return $this;
    }

    /**
     * Get striptodos
     *
     * @return string
     */
    public function getStriptodos()
    {
        return $this->striptodos;
    }

    /**
     * Set stripAlarms
     *
     * @param string $stripAlarms
     *
     * @return Calendarsubscriptions
     */
    public function setStripAlarms($stripAlarms)
    {
        $this->stripAlarms = $stripAlarms;

        return $this;
    }

    /**
     * Get stripAlarms
     *
     * @return string
     */
    public function getStripAlarms()
    {
        return $this->stripAlarms;
    }

    /**
     * Set stripAttachments
     *
     * @param string $stripAttachments
     *
     * @return Calendarsubscriptions
     */
    public function setStripAttachments($stripAttachments)
    {
        $this->stripAttachments = $stripAttachments;

        return $this;
    }

    /**
     * Get stripAttachments
     *
     * @return string
     */
    public function getStripAttachments()
    {
        return $this->stripAttachments;
    }

    /**
     * Set lastModified
     *
     * @param \DateTime $lastModified
     *
     * @return Calendarsubscriptions
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * Get lastModified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }
}

