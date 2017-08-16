<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjectReminders
 *
 * @ORM\Table(name="object_reminders")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ObjectRemindersRepository")
 */
class ObjectReminders
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
     * @ORM\Column(name="object_reminder_id", type="integer")
     */
    private $objectReminderId;

    /**
     * @var int
     *
     * @ORM\Column(name="object_id", type="integer")
     */
    private $objectId;

    /**
     * @var int
     *
     * @ORM\Column(name="contact_id", type="integer")
     */
    private $contactId;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="string", length=255)
     */
    private $context;

    /**
     * @var string
     *
     * @ORM\Column(name="minutes_before", type="string", length=255)
     */
    private $minutesBefore;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

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
     * Set objectReminderId
     *
     * @param integer $objectReminderId
     *
     * @return ObjectReminders
     */
    public function setObjectReminderId($objectReminderId)
    {
        $this->objectReminderId = $objectReminderId;

        return $this;
    }

    /**
     * Get objectReminderId
     *
     * @return int
     */
    public function getObjectReminderId()
    {
        return $this->objectReminderId;
    }

    /**
     * Set objectId
     *
     * @param integer $objectId
     *
     * @return ObjectReminders
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * Get objectId
     *
     * @return int
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Set contactId
     *
     * @param integer $contactId
     *
     * @return ObjectReminders
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
     * Set type
     *
     * @param string $type
     *
     * @return ObjectReminders
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
     * Set context
     *
     * @param string $context
     *
     * @return ObjectReminders
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set minutesBefore
     *
     * @param string $minutesBefore
     *
     * @return ObjectReminders
     */
    public function setMinutesBefore($minutesBefore)
    {
        $this->minutesBefore = $minutesBefore;

        return $this;
    }

    /**
     * Get minutesBefore
     *
     * @return string
     */
    public function getMinutesBefore()
    {
        return $this->minutesBefore;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return ObjectReminders
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return ObjectReminders
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
     * @return ObjectReminders
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
     * @return ObjectReminders
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

