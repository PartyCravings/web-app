<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventInvitations
 *
 * @ORM\Table(name="event_invitations")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\EventInvitationsRepository")
 */
class EventInvitations
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
     * @ORM\Column(name="event_id", type="integer")
     */
    private $eventId;

    /**
     * @var int
     *
     * @ORM\Column(name="contact_id", type="integer")
     */
    private $contactId;

    /**
     * @var bool
     *
     * @ORM\Column(name="synced", type="boolean")
     */
    private $synced;

    /**
     * @var int
     *
     * @ORM\Column(name="special_id", type="integer")
     */
    private $specialId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_deleted", type="boolean")
     */
    private $isDeleted;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_suspended", type="boolean")
     */
    private $isSuspended;


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
     * Set eventId
     *
     * @param integer $eventId
     *
     * @return EventInvitations
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
     * Set contactId
     *
     * @param integer $contactId
     *
     * @return EventInvitations
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Get contactId
     *
     * @return int
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set synced
     *
     * @param boolean $synced
     *
     * @return EventInvitations
     */
    public function setSynced($synced)
    {
        $this->synced = $synced;

        return $this;
    }

    /**
     * Get synced
     *
     * @return bool
     */
    public function getSynced()
    {
        return $this->synced;
    }

    /**
     * Set specialId
     *
     * @param integer $specialId
     *
     * @return EventInvitations
     */
    public function setSpecialId($specialId)
    {
        $this->specialId = $specialId;

        return $this;
    }

    /**
     * Get specialId
     *
     * @return int
     */
    public function getSpecialId()
    {
        return $this->specialId;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return EventInvitations
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
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return EventInvitations
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
     * Set isSuspended
     *
     * @param boolean $isSuspended
     *
     * @return EventInvitations
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
}

