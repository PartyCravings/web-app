<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LinkSettings
 *
 * @ORM\Table(name="link_settings")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LinkSettingsRepository")
 */
class LinkSettings
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
     * @ORM\Column(name="service_link", type="string", length=255)
     */
    private $serviceLink;

    /**
     * @var string
     *
     * @ORM\Column(name="service_name", type="string", length=255, unique=true)
     */
    private $serviceName;

    /**
     * @var string
     *
     * @ORM\Column(name="service_category", type="string", length=255)
     */
    private $serviceCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="service_enabled", type="string", length=5)
     */
    private $serviceEnabled;

    /**
     * @var string
     *
     * @ORM\Column(name="service_edited_by", type="string", length=255)
     */
    private $serviceEditedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="service_last_edited", type="datetime")
     */
    private $serviceLastEdited;


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
     * Set serviceLink
     *
     * @param string $serviceLink
     *
     * @return LinkSettings
     */
    public function setServiceLink($serviceLink)
    {
        $this->serviceLink = $serviceLink;

        return $this;
    }

    /**
     * Get serviceLink
     *
     * @return string
     */
    public function getServiceLink()
    {
        return $this->serviceLink;
    }

    /**
     * Set serviceName
     *
     * @param string $serviceName
     *
     * @return LinkSettings
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    /**
     * Get serviceName
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Set serviceCategory
     *
     * @param string $serviceCategory
     *
     * @return LinkSettings
     */
    public function setServiceCategory($serviceCategory)
    {
        $this->serviceCategory = $serviceCategory;

        return $this;
    }

    /**
     * Get serviceCategory
     *
     * @return string
     */
    public function getServiceCategory()
    {
        return $this->serviceCategory;
    }

    /**
     * Set serviceEnabled
     *
     * @param string $serviceEnabled
     *
     * @return LinkSettings
     */
    public function setServiceEnabled($serviceEnabled)
    {
        $this->serviceEnabled = $serviceEnabled;

        return $this;
    }

    /**
     * Get serviceEnabled
     *
     * @return string
     */
    public function getServiceEnabled()
    {
        return $this->serviceEnabled;
    }

    /**
     * Set serviceEditedBy
     *
     * @param string $serviceEditedBy
     *
     * @return LinkSettings
     */
    public function setServiceEditedBy($serviceEditedBy)
    {
        $this->serviceEditedBy = $serviceEditedBy;

        return $this;
    }

    /**
     * Get serviceEditedBy
     *
     * @return string
     */
    public function getServiceEditedBy()
    {
        return $this->serviceEditedBy;
    }

    /**
     * Set serviceLastEdited
     *
     * @param \DateTime $serviceLastEdited
     *
     * @return LinkSettings
     */
    public function setServiceLastEdited($serviceLastEdited)
    {
        $this->serviceLastEdited = $serviceLastEdited;

        return $this;
    }

    /**
     * Get serviceLastEdited
     *
     * @return \DateTime
     */
    public function getServiceLastEdited()
    {
        return $this->serviceLastEdited;
    }
}
