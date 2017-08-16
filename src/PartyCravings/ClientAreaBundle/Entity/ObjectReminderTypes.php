<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjectReminderTypes
 *
 * @ORM\Table(name="object_reminder_types")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ObjectReminderTypesRepository")
 */
class ObjectReminderTypes
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
     * @ORM\Column(name="reminder_id", type="integer")
     */
    private $reminderId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * Set reminderId
     *
     * @param integer $reminderId
     *
     * @return ObjectReminderTypes
     */
    public function setReminderId($reminderId)
    {
        $this->reminderId = $reminderId;

        return $this;
    }

    /**
     * Get reminderId
     *
     * @return int
     */
    public function getReminderId()
    {
        return $this->reminderId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ObjectReminderTypes
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

