<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attribute
 *
 * @ORM\Table(name="attribute")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AttributeRepository")
 */
class Attribute
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
     * @ORM\Column(name="attribute_group", type="string", length=255)
     */
    private $attributeGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="_group", type="string", length=255)
     */
    private $group;

    /**
     * @var string
     *
     * @ORM\Column(name="group_language", type="string", length=255)
     */
    private $groupLanguage;

    /**
     * @var string
     *
     * @ORM\Column(name="group_vendor", type="string", length=255)
     */
    private $groupVendor;

    /**
     * @var string
     *
     * @ORM\Column(name="impact", type="string", length=255)
     */
    private $impact;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor", type="string", length=255)
     */
    private $vendor;


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
     * Set attributeGroup
     *
     * @param string $attributeGroup
     *
     * @return Attribute
     */
    public function setAttributeGroup($attributeGroup)
    {
        $this->attributeGroup = $attributeGroup;

        return $this;
    }

    /**
     * Get attributeGroup
     *
     * @return string
     */
    public function getAttributeGroup()
    {
        return $this->attributeGroup;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Attribute
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Attribute
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set group
     *
     * @param string $group
     *
     * @return Attribute
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set groupLanguage
     *
     * @param string $groupLanguage
     *
     * @return Attribute
     */
    public function setGroupLanguage($groupLanguage)
    {
        $this->groupLanguage = $groupLanguage;

        return $this;
    }

    /**
     * Get groupLanguage
     *
     * @return string
     */
    public function getGroupLanguage()
    {
        return $this->groupLanguage;
    }

    /**
     * Set groupVendor
     *
     * @param string $groupVendor
     *
     * @return Attribute
     */
    public function setGroupVendor($groupVendor)
    {
        $this->groupVendor = $groupVendor;

        return $this;
    }

    /**
     * Get groupVendor
     *
     * @return string
     */
    public function getGroupVendor()
    {
        return $this->groupVendor;
    }

    /**
     * Set impact
     *
     * @param string $impact
     *
     * @return Attribute
     */
    public function setImpact($impact)
    {
        $this->impact = $impact;

        return $this;
    }

    /**
     * Get impact
     *
     * @return string
     */
    public function getImpact()
    {
        return $this->impact;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Attribute
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set vendor
     *
     * @param string $vendor
     *
     * @return Attribute
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get vendor
     *
     * @return string
     */
    public function getVendor()
    {
        return $this->vendor;
    }
}

