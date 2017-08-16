<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendarobjects
 *
 * @ORM\Table(name="calendarobjects")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\CalendarobjectsRepository")
 */
class Calendarobjects
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
     * @ORM\Column(name="calendardata", type="string", length=255)
     */
    private $calendardata;

    /**
     * @var string
     *
     * @ORM\Column(name="uri", type="string", length=255)
     */
    private $uri;

    /**
     * @var int
     *
     * @ORM\ManyToMany(targetEntity="PartyCravings\ClientAreaBundle\Entity\Calendars", mappedBy="calendarObjects")
     */
    private $calendarId;

    /**
     * @var string
     *
     * @ORM\ManyToMany(targetEntity="PartyCravings\ClientAreaBundle\Entity\CalendarobjectsProps", inversedBy="objectId")
     * @ORM\JoinColumn(name="ObjectsProps", referencedColumnName="id")
     */
    private $calendarobjectsProps;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastmodified", type="datetime")
     */
    private $lastmodified;

    /**
     * @var string
     *
     * @ORM\Column(name="etag", type="string", length=255)
     */
    private $etag;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=255)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="componenttype", type="string", length=255)
     */
    private $componenttype;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="first_occurence", type="datetime")
     */
    private $firstOccurence;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_occurence", type="datetime")
     */
    private $lastOccurence;

    /**
     * @var string
     *
     * @ORM\Column(name="uid", type="string", length=255)
     */
    private $uid;

    /**
     * @var int
     *
     * @ORM\Column(name="classification", type="integer")
     */
    private $classification;


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
     * Set calendardata
     *
     * @param string $calendardata
     *
     * @return Calendarobjects
     */
    public function setCalendardata($calendardata)
    {
        $this->calendardata = $calendardata;

        return $this;
    }

    /**
     * Get calendardata
     *
     * @return string
     */
    public function getCalendardata()
    {
        return $this->calendardata;
    }

    /**
     * Set uri
     *
     * @param string $uri
     *
     * @return Calendarobjects
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
     * Set calendarId
     *
     * @param integer $calendarId
     *
     * @return Calendarobjects
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
     * Set lastmodified
     *
     * @param \DateTime $lastmodified
     *
     * @return Calendarobjects
     */
    public function setLastmodified($lastmodified)
    {
        $this->lastmodified = $lastmodified;

        return $this;
    }

    /**
     * Get lastmodified
     *
     * @return \DateTime
     */
    public function getLastmodified()
    {
        return $this->lastmodified;
    }

    /**
     * Set etag
     *
     * @param string $etag
     *
     * @return Calendarobjects
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;

        return $this;
    }

    /**
     * Get etag
     *
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Set size
     *
     * @param string $size
     *
     * @return Calendarobjects
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set componenttype
     *
     * @param string $componenttype
     *
     * @return Calendarobjects
     */
    public function setComponenttype($componenttype)
    {
        $this->componenttype = $componenttype;

        return $this;
    }

    /**
     * Get componenttype
     *
     * @return string
     */
    public function getComponenttype()
    {
        return $this->componenttype;
    }

    /**
     * Set firstOccurence
     *
     * @param \DateTime $firstOccurence
     *
     * @return Calendarobjects
     */
    public function setFirstOccurence($firstOccurence)
    {
        $this->firstOccurence = $firstOccurence;

        return $this;
    }

    /**
     * Get firstOccurence
     *
     * @return \DateTime
     */
    public function getFirstOccurence()
    {
        return $this->firstOccurence;
    }

    /**
     * Set lastOccurence
     *
     * @param \DateTime $lastOccurence
     *
     * @return Calendarobjects
     */
    public function setLastOccurence($lastOccurence)
    {
        $this->lastOccurence = $lastOccurence;

        return $this;
    }

    /**
     * Get lastOccurence
     *
     * @return \DateTime
     */
    public function getLastOccurence()
    {
        return $this->lastOccurence;
    }

    /**
     * Set uid
     *
     * @param string $uid
     *
     * @return Calendarobjects
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
     * Set classification
     *
     * @param integer $classification
     *
     * @return Calendarobjects
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;

        return $this;
    }

    /**
     * Get classification
     *
     * @return int
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * @return string
     */
    public function getCalendarObjectsProps(): string
    {
        return $this->calendarObjectsProps;
    }

    /**
     * @param string $calendarObjectsProps
     */
    public function setCalendarObjectsProps(string $calendarObjectsProps)
    {
        $this->calendarObjectsProps = $calendarObjectsProps;
    }
}

