<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceOptions
 *
 * @ORM\Table(name="service_options")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\serviceOptionsRepository")
 */
class ServiceOptions
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
     * @ORM\OneToOne(targetEntity="ServiceOptionDescriptions", inversedBy="serviceOptionId")
     * @ORM\JoinColumn(name="serviceOptionDescriptions")
    */
    private $serviceOptionDesccriptions;

    /**
     * @var int
     *
     * @ORM\Column(name="attribute_id", type="integer")
     */
    private $attributeId;

    /**
     * @var int
     *
     * @ORM\Column(name="service_id", type="integer")
     */
    private $serviceId;

    /**
     * @var int
     *
     * @ORM\Column(name="group_id", type="integer")
     */
    private $groupId;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer")
     */
    private $sortOrder;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="element_type", type="string", length=255)
     */
    private $elementType;

    /**
     * @var bool
     *
     * @ORM\Column(name="required", type="boolean")
     */
    private $required;

    /**
     * @var string
     *
     * @ORM\Column(name="regexp_pattern", type="string", length=255)
     */
    private $regexpPattern;

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="string", length=255)
     */
    private $settings;


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
     * Set serviceOptionId
     *
     * @param integer $serviceOptionId
     *
     * @return ServiceOptions
     */
    public function setserviceOptionId($serviceOptionId)
    {
        $this->serviceOptionId = $serviceOptionId;

        return $this;
    }

    /**
     * Get serviceOptionId
     *
     * @return int
     */
    public function getserviceOptionId()
    {
        return $this->serviceOptionId;
    }

    /**
     * Set attributeId
     *
     * @param integer $attributeId
     *
     * @return ServiceOptions
     */
    public function setAttributeId($attributeId)
    {
        $this->attributeId = $attributeId;

        return $this;
    }

    /**
     * Get attributeId
     *
     * @return int
     */
    public function getAttributeId()
    {
        return $this->attributeId;
    }

    /**
     * Set serviceId
     *
     * @param integer $serviceId
     *
     * @return ServiceOptions
     */
    public function setserviceId($serviceId)
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * Get serviceId
     *
     * @return int
     */
    public function getserviceId()
    {
        return $this->serviceId;
    }

    /**
     * Set groupId
     *
     * @param integer $groupId
     *
     * @return ServiceOptions
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return ServiceOptions
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return ServiceOptions
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set elementType
     *
     * @param string $elementType
     *
     * @return ServiceOptions
     */
    public function setElementType($elementType)
    {
        $this->elementType = $elementType;

        return $this;
    }

    /**
     * Get elementType
     *
     * @return string
     */
    public function getElementType()
    {
        return $this->elementType;
    }

    /**
     * Set required
     *
     * @param boolean $required
     *
     * @return ServiceOptions
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set regexpPattern
     *
     * @param string $regexpPattern
     *
     * @return ServiceOptions
     */
    public function setRegexpPattern($regexpPattern)
    {
        $this->regexpPattern = $regexpPattern;

        return $this;
    }

    /**
     * Get regexpPattern
     *
     * @return string
     */
    public function getRegexpPattern()
    {
        return $this->regexpPattern;
    }

    /**
     * Set settings
     *
     * @param string $settings
     *
     * @return ServiceOptions
     */
    public function setSettings($settings)
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * Get settings
     *
     * @return string
     */
    public function getSettings()
    {
        return $this->settings;
    }
}
