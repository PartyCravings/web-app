<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChangeLog
 *
 * @ORM\Table(name="change_log")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ChangeLogRepository")
 */
class ChangeLog
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
     * @ORM\Column(name="change_id", type="integer")
     */
    private $changeId;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="item_id", type="integer")
     */
    private $itemId;

    /**
     * @var int
     *
     * @ORM\Column(name="event_id", type="integer")
     */
    private $eventId;

    /**
     * @var string
     *
     * @ORM\Column(name="record_name", type="string", length=255)
     */
    private $recordName;

    /**
     * @var string
     *
     * @ORM\Column(name="changed_by", type="string", length=255)
     */
    private $changedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_changed", type="datetime")
     */
    private $dateChanged;

    /**
     * @var string
     *
     * @ORM\Column(name="field_name", type="string", length=255)
     */
    private $fieldName;

    /**
     * @var string
     *
     * @ORM\Column(name="old_value", type="string", length=255)
     */
    private $oldValue;

    /**
     * @var string
     *
     * @ORM\Column(name="new_value", type="string", length=255)
     */
    private $newValue;

    /**
     * @var string
     *
     * @ORM\Column(name="diff", type="string", length=255)
     */
    private $diff;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime")
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;


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
     * Set changeId
     *
     * @param integer $changeId
     *
     * @return ChangeLog
     */
    public function setChangeId($changeId)
    {
        $this->changeId = $changeId;

        return $this;
    }

    /**
     * Get changeId
     *
     * @return int
     */
    public function getChangeId()
    {
        return $this->changeId;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return ChangeLog
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
     * Set itemId
     *
     * @param integer $itemId
     *
     * @return ChangeLog
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * Get itemId
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set eventId
     *
     * @param integer $eventId
     *
     * @return ChangeLog
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
     * Set recordName
     *
     * @param string $recordName
     *
     * @return ChangeLog
     */
    public function setRecordName($recordName)
    {
        $this->recordName = $recordName;

        return $this;
    }

    /**
     * Get recordName
     *
     * @return string
     */
    public function getRecordName()
    {
        return $this->recordName;
    }

    /**
     * Set changedBy
     *
     * @param string $changedBy
     *
     * @return ChangeLog
     */
    public function setChangedBy($changedBy)
    {
        $this->changedBy = $changedBy;

        return $this;
    }

    /**
     * Get changedBy
     *
     * @return string
     */
    public function getChangedBy()
    {
        return $this->changedBy;
    }

    /**
     * Set dateChanged
     *
     * @param \DateTime $dateChanged
     *
     * @return ChangeLog
     */
    public function setDateChanged($dateChanged)
    {
        $this->dateChanged = $dateChanged;

        return $this;
    }

    /**
     * Get dateChanged
     *
     * @return \DateTime
     */
    public function getDateChanged()
    {
        return $this->dateChanged;
    }

    /**
     * Set fieldName
     *
     * @param string $fieldName
     *
     * @return ChangeLog
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * Get fieldName
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Set oldValue
     *
     * @param string $oldValue
     *
     * @return ChangeLog
     */
    public function setOldValue($oldValue)
    {
        $this->oldValue = $oldValue;

        return $this;
    }

    /**
     * Get oldValue
     *
     * @return string
     */
    public function getOldValue()
    {
        return $this->oldValue;
    }

    /**
     * Set newValue
     *
     * @param string $newValue
     *
     * @return ChangeLog
     */
    public function setNewValue($newValue)
    {
        $this->newValue = $newValue;

        return $this;
    }

    /**
     * Get newValue
     *
     * @return string
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * Set diff
     *
     * @param string $diff
     *
     * @return ChangeLog
     */
    public function setDiff($diff)
    {
        $this->diff = $diff;

        return $this;
    }

    /**
     * Get diff
     *
     * @return string
     */
    public function getDiff()
    {
        return $this->diff;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return ChangeLog
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
     * Set status
     *
     * @param string $status
     *
     * @return ChangeLog
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}

