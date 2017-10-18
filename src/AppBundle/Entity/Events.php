<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventsRepository")
 */
class Events
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @ORM\OneToOne(targetEntity="EventsData", inversedBy="eventId")
     * @ORM\JoinColumn(name="eventData", referencedColumnName="id")
    */
    private $eventsData;

    /**
     * @var string
     *
     * @ORM\Column(name="subtype", type="string", length=255)
     */
    private $subtype;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="visibility", type="string", length=255)
     */
    private $visibility;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="association_type", type="string", length=255)
     */
    private $associationType;

    /**
     * @var int
     *
     * @ORM\Column(name="association_id", type="integer")
     */
    private $associationId;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime")
     */
    private $timestamp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime")
     */
    private $dateUpd;

    /**
     * @var bool
     *
     * @ORM\Column(name="important", type="boolean")
     */
    private $important;

    /**
     * @var bool
     *
     * @ORM\Column(name="sticky", type="boolean")
     */
    private $sticky;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="font_color", type="string", length=255)
     */
    private $fontColor;

    /**
     * @var string
     *
     * @ORM\Column(name="link_color", type="string", length=255)
     */
    private $linkColor;

    /**
     * @var int
     *
     * @ORM\Column(name="location_id", type="integer")
     */
    private $locationId;

    /**
     * @var string
     *
     * @ORM\Column(name="record_links", type="string", length=255)
     */
    private $recordLinks;


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
     * Set type
     *
     * @param string $type
     *
     * @return Events
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set subtype
     *
     * @param string $subtype
     *
     * @return Events
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;

        return $this;
    }

    /**
     * Get subtype
     *
     * @return string
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Set level
     *
     * @param string $level
     *
     * @return Events
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set visibility
     *
     * @param string $visibility
     *
     * @return Events
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get visibility
     *
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Events
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set associationType
     *
     * @param string $associationType
     *
     * @return Events
     */
    public function setAssociationType($associationType)
    {
        $this->associationType = $associationType;

        return $this;
    }

    /**
     * Get associationType
     *
     * @return string
     */
    public function getAssociationType()
    {
        return $this->associationType;
    }

    /**
     * Set associationId
     *
     * @param integer $associationId
     *
     * @return Events
     */
    public function setAssociationId($associationId)
    {
        $this->associationId = $associationId;

        return $this;
    }

    /**
     * Get associationId
     *
     * @return int
     */
    public function getAssociationId()
    {
        return $this->associationId;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Events
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
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return Events
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
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     *
     * @return Events
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * Set important
     *
     * @param boolean $important
     *
     * @return Events
     */
    public function setImportant($important)
    {
        $this->important = $important;

        return $this;
    }

    /**
     * Get important
     *
     * @return bool
     */
    public function getImportant()
    {
        return $this->important;
    }

    /**
     * Set sticky
     *
     * @param boolean $sticky
     *
     * @return Events
     */
    public function setSticky($sticky)
    {
        $this->sticky = $sticky;

        return $this;
    }

    /**
     * Get sticky
     *
     * @return bool
     */
    public function getSticky()
    {
        return $this->sticky;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Events
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set fontColor
     *
     * @param string $fontColor
     *
     * @return Events
     */
    public function setFontColor($fontColor)
    {
        $this->fontColor = $fontColor;

        return $this;
    }

    /**
     * Get fontColor
     *
     * @return string
     */
    public function getFontColor()
    {
        return $this->fontColor;
    }

    /**
     * Set linkColor
     *
     * @param string $linkColor
     *
     * @return Events
     */
    public function setLinkColor($linkColor)
    {
        $this->linkColor = $linkColor;

        return $this;
    }

    /**
     * Get linkColor
     *
     * @return string
     */
    public function getLinkColor()
    {
        return $this->linkColor;
    }

    /**
     * Set locationId
     *
     * @param integer $locationId
     *
     * @return Events
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * Get locationId
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set recordLinks
     *
     * @param string $recordLinks
     *
     * @return Events
     */
    public function setRecordLinks($recordLinks)
    {
        $this->recordLinks = $recordLinks;

        return $this;
    }

    /**
     * Get recordLinks
     *
     * @return string
     */
    public function getRecordLinks()
    {
        return $this->recordLinks;
    }

    /**
     * @return mixed
     */
    public function getEventsData()
    {
        return $this->eventsData;
    }

    /**
     * @param mixed $eventsData
     */
    public function setEventsData($eventsData)
    {
        $this->eventsData = $eventsData;
    }

    /**
     * @return mixed
     */
    public function getEventMedia()
    {
        return $this->eventMedia;
    }

    /**
     * @param mixed $eventMedia
     */
    public function setEventMedia($eventMedia)
    {
        $this->eventMedia = $eventMedia;
    }
}
