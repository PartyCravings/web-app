<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maps
 *
 * @ORM\Table(name="maps")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\MapsRepository")
 */
class Maps
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
     * @ORM\Column(name="owner", type="string", length=255)
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="contact_id", type="integer")
     */
    private $contactId;

    /**
     * @var string
     *
     * @ORM\Column(name="params", type="string", length=255)
     */
    private $params;

    /**
     * @var string
     *
     * @ORM\Column(name="center_lat", type="decimal", precision=10, scale=0)
     */
    private $centerLat;

    /**
     * @var string
     *
     * @ORM\Column(name="center_long", type="decimal", precision=10, scale=0)
     */
    private $centerLong;

    /**
     * @var int
     *
     * @ORM\Column(name="zoom", type="integer")
     */
    private $zoom;

    /**
     * @var string
     *
     * @ORM\Column(name="location_type", type="string", length=255)
     */
    private $locationType;

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
     * @ORM\Column(name="is_deleted", type="boolean")
     */
    private $isDeleted;


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
     * Set owner
     *
     * @param string $owner
     *
     * @return Maps
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Maps
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

    /**
     * Set contactId
     *
     * @param integer $contactId
     *
     * @return Maps
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
     * Set params
     *
     * @param string $params
     *
     * @return Maps
     */
    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

    /**
     * Get params
     *
     * @return string
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set centerLat
     *
     * @param string $centerLat
     *
     * @return Maps
     */
    public function setCenterLat($centerLat)
    {
        $this->centerLat = $centerLat;

        return $this;
    }

    /**
     * Get centerLat
     *
     * @return string
     */
    public function getCenterLat()
    {
        return $this->centerLat;
    }

    /**
     * Set centerLong
     *
     * @param string $centerLong
     *
     * @return Maps
     */
    public function setCenterLong($centerLong)
    {
        $this->centerLong = $centerLong;

        return $this;
    }

    /**
     * Get centerLong
     *
     * @return string
     */
    public function getCenterLong()
    {
        return $this->centerLong;
    }

    /**
     * Set zoom
     *
     * @param integer $zoom
     *
     * @return Maps
     */
    public function setZoom($zoom)
    {
        $this->zoom = $zoom;

        return $this;
    }

    /**
     * Get zoom
     *
     * @return int
     */
    public function getZoom()
    {
        return $this->zoom;
    }

    /**
     * Set locationType
     *
     * @param string $locationType
     *
     * @return Maps
     */
    public function setLocationType($locationType)
    {
        $this->locationType = $locationType;

        return $this;
    }

    /**
     * Get locationType
     *
     * @return string
     */
    public function getLocationType()
    {
        return $this->locationType;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return Maps
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
     * @return Maps
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
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return Maps
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
}

