<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactSettings
 *
 * @ORM\Table(name="contact_settings")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContactSettingsRepository")
 */
class ContactSettings
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
     * @ORM\Column(name="contact_email", type="string", length=50, unique=true)
     */
    private $contactEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_name", type="string", length=50)
     */
    private $contactName;

    /**
     * @var int
     *
     * @ORM\Column(name="contact_phone", type="integer")
     */
    private $contactPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_address", type="string", length=50)
     */
    private $contactAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_edited_by", type="string", length=50)
     */
    private $contactEditedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="contact_last_edited", type="datetime")
     */
    private $contactLastEdited;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_enabled", type="string", length=5)
     */
    private $contactEnabled;


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
     * Set contactEmail
     *
     * @param string $contactEmail
     *
     * @return ContactSettings
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     *
     * @return ContactSettings
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set contactPhone
     *
     * @param integer $contactPhone
     *
     * @return ContactSettings
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;

        return $this;
    }

    /**
     * Get contactPhone
     *
     * @return int
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Set contactAddress
     *
     * @param string $contactAddress
     *
     * @return ContactSettings
     */
    public function setContactAddress($contactAddress)
    {
        $this->contactAddress = $contactAddress;

        return $this;
    }

    /**
     * Get contactAddress
     *
     * @return string
     */
    public function getContactAddress()
    {
        return $this->contactAddress;
    }

    /**
     * Set contactEditedBy
     *
     * @param string $contactEditedBy
     *
     * @return ContactSettings
     */
    public function setContactEditedBy($contactEditedBy)
    {
        $this->contactEditedBy = $contactEditedBy;

        return $this;
    }

    /**
     * Get contactEditedBy
     *
     * @return string
     */
    public function getContactEditedBy()
    {
        return $this->contactEditedBy;
    }

    /**
     * Set contactLastEdited
     *
     * @param \DateTime $contactLastEdited
     *
     * @return ContactSettings
     */
    public function setContactLastEdited($contactLastEdited)
    {
        $this->contactLastEdited = $contactLastEdited;

        return $this;
    }

    /**
     * Get contactLastEdited
     *
     * @return \DateTime
     */
    public function getContactLastEdited()
    {
        return $this->contactLastEdited;
    }

    /**
     * Set contactEnabled
     *
     * @param string $contactEnabled
     *
     * @return ContactSettings
     */
    public function setContactEnabled($contactEnabled)
    {
        $this->contactEnabled = $contactEnabled;

        return $this;
    }

    /**
     * Get contactEnabled
     *
     * @return string
     */
    public function getContactEnabled()
    {
        return $this->contactEnabled;
    }
}
