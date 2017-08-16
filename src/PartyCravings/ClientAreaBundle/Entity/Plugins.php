<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plugins
 *
 * @ORM\Table(name="plugins")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\PluginsRepository")
 */
class Plugins
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
     * @ORM\Column(name="plugin_id", type="integer")
     */
    private $pluginId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_installed", type="boolean")
     */
    private $isInstalled;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_activated", type="boolean")
     */
    private $isActivated;

    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="integer")
     */
    private $priority;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    /**
     * @var int
     *
     * @ORM\Column(name="activated_by_id", type="integer")
     */
    private $activatedById;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="decimal", precision=2, scale=0)
     */
    private $version;

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
     * Set pluginId
     *
     * @param integer $pluginId
     *
     * @return Plugins
     */
    public function setPluginId($pluginId)
    {
        $this->pluginId = $pluginId;

        return $this;
    }

    /**
     * Get pluginId
     *
     * @return int
     */
    public function getPluginId()
    {
        return $this->pluginId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Plugins
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
     * Set isInstalled
     *
     * @param boolean $isInstalled
     *
     * @return Plugins
     */
    public function setIsInstalled($isInstalled)
    {
        $this->isInstalled = $isInstalled;

        return $this;
    }

    /**
     * Get isInstalled
     *
     * @return bool
     */
    public function getIsInstalled()
    {
        return $this->isInstalled;
    }

    /**
     * Set isActivated
     *
     * @param boolean $isActivated
     *
     * @return Plugins
     */
    public function setIsActivated($isActivated)
    {
        $this->isActivated = $isActivated;

        return $this;
    }

    /**
     * Get isActivated
     *
     * @return bool
     */
    public function getIsActivated()
    {
        return $this->isActivated;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return Plugins
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Plugins
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set activatedById
     *
     * @param integer $activatedById
     *
     * @return Plugins
     */
    public function setActivatedById($activatedById)
    {
        $this->activatedById = $activatedById;

        return $this;
    }

    /**
     * Get activatedById
     *
     * @return int
     */
    public function getActivatedById()
    {
        return $this->activatedById;
    }

    /**
     * Set version
     *
     * @param string $version
     *
     * @return Plugins
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return Plugins
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
     * @return Plugins
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
     * @return Plugins
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

