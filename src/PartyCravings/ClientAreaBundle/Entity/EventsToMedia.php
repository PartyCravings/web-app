<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventsToMedia
 *
 * @ORM\Table(name="events_to_media")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\EventsToMediaRepository")
 */
class EventsToMedia
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
     * @ORM\Column(name="media_id", type="integer")
     */
    private $mediaId;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="PartyCravings\ClientAreaBundle\Entity\Events", mappedBy="eventMedia")
     */
    private $eventId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_suspended", type="boolean")
     */
    private $isSuspended;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_rated", type="boolean")
     */
    private $isRated;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer")
     */
    private $rating;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_deleted", type="boolean")
     */
    private $isDeleted;

    /**
     * @var bool
     *
     * @ORM\Column(name="image", type="boolean")
     */
    private $image;

    /**
     * @var bool
     *
     * @ORM\Column(name="audio", type="boolean")
     */
    private $audio;

    /**
     * @var bool
     *
     * @ORM\Column(name="video", type="boolean")
     */
    private $video;


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
     * Set mediaId
     *
     * @param integer $mediaId
     *
     * @return EventsToMedia
     */
    public function setMediaId($mediaId)
    {
        $this->mediaId = $mediaId;

        return $this;
    }

    /**
     * Get mediaId
     *
     * @return int
     */
    public function getMediaId()
    {
        return $this->mediaId;
    }

    /**
     * Set eventId
     *
     * @param integer $eventId
     *
     * @return EventsToMedia
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;

        return $this;
    }

    /**
     * Get eventId
     *
     * @return int
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return EventsToMedia
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Set isSuspended
     *
     * @param boolean $isSuspended
     *
     * @return EventsToMedia
     */
    public function setIsSuspended($isSuspended)
    {
        $this->isSuspended = $isSuspended;

        return $this;
    }

    /**
     * Get isSuspended
     *
     * @return bool
     */
    public function getIsSuspended()
    {
        return $this->isSuspended;
    }

    /**
     * Set isRated
     *
     * @param boolean $isRated
     *
     * @return EventsToMedia
     */
    public function setIsRated($isRated)
    {
        $this->isRated = $isRated;

        return $this;
    }

    /**
     * Get isRated
     *
     * @return bool
     */
    public function getIsRated()
    {
        return $this->isRated;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return EventsToMedia
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return EventsToMedia
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Set image
     *
     * @param boolean $image
     *
     * @return EventsToMedia
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return bool
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set audio
     *
     * @param boolean $audio
     *
     * @return EventsToMedia
     */
    public function setAudio($audio)
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * Get audio
     *
     * @return bool
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * Set video
     *
     * @param boolean $video
     *
     * @return EventsToMedia
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return bool
     */
    public function getVideo()
    {
        return $this->video;
    }
}

