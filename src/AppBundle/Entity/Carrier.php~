<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carrier
 *
 * @ORM\Table(name="carrier")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CarrierRepository")
 */
class Carrier
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
     * @ORM\Column(name="id_reference", type="string", length=255)
     */
    private $idReference;

    /**
     * @var string
     *
     * @ORM\Column(name="id_tax_rules_group", type="string", length=255)
     */
    private $idTaxRulesGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=255)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="deleted", type="string", length=255)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="suspended", type="string", length=255)
     */
    private $suspended;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_handling", type="string", length=255)
     */
    private $shippingHandling;

    /**
     * @var string
     *
     * @ORM\Column(name="range_behavior", type="string", length=255)
     */
    private $rangeBehavior;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_module", type="boolean")
     */
    private $isModule;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_free", type="boolean")
     */
    private $isFree;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_external", type="string", length=255)
     */
    private $shippingExternal;

    /**
     * @var string
     *
     * @ORM\Column(name="need_range", type="string", length=255)
     */
    private $needRange;

    /**
     * @var string
     *
     * @ORM\Column(name="external_module_name", type="string", length=255)
     */
    private $externalModuleName;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_method", type="string", length=255)
     */
    private $shippingMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="max_width", type="string", length=255)
     */
    private $maxWidth;

    /**
     * @var string
     *
     * @ORM\Column(name="max_height", type="string", length=255)
     */
    private $maxHeight;

    /**
     * @var string
     *
     * @ORM\Column(name="max_depth", type="string", length=255)
     */
    private $maxDepth;

    /**
     * @var string
     *
     * @ORM\Column(name="max_weight", type="string", length=255)
     */
    private $maxWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="string", length=255)
     */
    private $grade;

    /**
     * @var string
     *
     * @ORM\Column(name="_group", type="string", length=255)
     */
    private $group;

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
     * @var string
     *
     * @ORM\Column(name="tax_rules_group_vendor", type="string", length=255)
     */
    private $taxRulesGroupVendor;

    /**
     * @var string
     *
     * @ORM\Column(name="zone", type="string", length=255)
     */
    private $zone;


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
     * Set idReference
     *
     * @param string $idReference
     *
     * @return Carrier
     */
    public function setIdReference($idReference)
    {
        $this->idReference = $idReference;

        return $this;
    }

    /**
     * Get idReference
     *
     * @return string
     */
    public function getIdReference()
    {
        return $this->idReference;
    }

    /**
     * Set idTaxRulesGroup
     *
     * @param string $idTaxRulesGroup
     *
     * @return Carrier
     */
    public function setIdTaxRulesGroup($idTaxRulesGroup)
    {
        $this->idTaxRulesGroup = $idTaxRulesGroup;

        return $this;
    }

    /**
     * Get idTaxRulesGroup
     *
     * @return string
     */
    public function getIdTaxRulesGroup()
    {
        return $this->idTaxRulesGroup;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Carrier
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
     * Set url
     *
     * @param string $url
     *
     * @return Carrier
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return Carrier
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set deleted
     *
     * @param string $deleted
     *
     * @return Carrier
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return string
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set suspended
     *
     * @param string $suspended
     *
     * @return Carrier
     */
    public function setSuspended($suspended)
    {
        $this->suspended = $suspended;

        return $this;
    }

    /**
     * Get suspended
     *
     * @return string
     */
    public function getSuspended()
    {
        return $this->suspended;
    }

    /**
     * Set shippingHandling
     *
     * @param string $shippingHandling
     *
     * @return Carrier
     */
    public function setShippingHandling($shippingHandling)
    {
        $this->shippingHandling = $shippingHandling;

        return $this;
    }

    /**
     * Get shippingHandling
     *
     * @return string
     */
    public function getShippingHandling()
    {
        return $this->shippingHandling;
    }

    /**
     * Set rangeBehavior
     *
     * @param string $rangeBehavior
     *
     * @return Carrier
     */
    public function setRangeBehavior($rangeBehavior)
    {
        $this->rangeBehavior = $rangeBehavior;

        return $this;
    }

    /**
     * Get rangeBehavior
     *
     * @return string
     */
    public function getRangeBehavior()
    {
        return $this->rangeBehavior;
    }

    /**
     * Set isModule
     *
     * @param boolean $isModule
     *
     * @return Carrier
     */
    public function setIsModule($isModule)
    {
        $this->isModule = $isModule;

        return $this;
    }

    /**
     * Get isModule
     *
     * @return bool
     */
    public function getIsModule()
    {
        return $this->isModule;
    }

    /**
     * Set isFree
     *
     * @param boolean $isFree
     *
     * @return Carrier
     */
    public function setIsFree($isFree)
    {
        $this->isFree = $isFree;

        return $this;
    }

    /**
     * Get isFree
     *
     * @return bool
     */
    public function getIsFree()
    {
        return $this->isFree;
    }

    /**
     * Set shippingExternal
     *
     * @param string $shippingExternal
     *
     * @return Carrier
     */
    public function setShippingExternal($shippingExternal)
    {
        $this->shippingExternal = $shippingExternal;

        return $this;
    }

    /**
     * Get shippingExternal
     *
     * @return string
     */
    public function getShippingExternal()
    {
        return $this->shippingExternal;
    }

    /**
     * Set needRange
     *
     * @param string $needRange
     *
     * @return Carrier
     */
    public function setNeedRange($needRange)
    {
        $this->needRange = $needRange;

        return $this;
    }

    /**
     * Get needRange
     *
     * @return string
     */
    public function getNeedRange()
    {
        return $this->needRange;
    }

    /**
     * Set externalModuleName
     *
     * @param string $externalModuleName
     *
     * @return Carrier
     */
    public function setExternalModuleName($externalModuleName)
    {
        $this->externalModuleName = $externalModuleName;

        return $this;
    }

    /**
     * Get externalModuleName
     *
     * @return string
     */
    public function getExternalModuleName()
    {
        return $this->externalModuleName;
    }

    /**
     * Set shippingMethod
     *
     * @param string $shippingMethod
     *
     * @return Carrier
     */
    public function setShippingMethod($shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * Get shippingMethod
     *
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Carrier
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
     * Set maxWidth
     *
     * @param string $maxWidth
     *
     * @return Carrier
     */
    public function setMaxWidth($maxWidth)
    {
        $this->maxWidth = $maxWidth;

        return $this;
    }

    /**
     * Get maxWidth
     *
     * @return string
     */
    public function getMaxWidth()
    {
        return $this->maxWidth;
    }

    /**
     * Set maxHeight
     *
     * @param string $maxHeight
     *
     * @return Carrier
     */
    public function setMaxHeight($maxHeight)
    {
        $this->maxHeight = $maxHeight;

        return $this;
    }

    /**
     * Get maxHeight
     *
     * @return string
     */
    public function getMaxHeight()
    {
        return $this->maxHeight;
    }

    /**
     * Set maxDepth
     *
     * @param string $maxDepth
     *
     * @return Carrier
     */
    public function setMaxDepth($maxDepth)
    {
        $this->maxDepth = $maxDepth;

        return $this;
    }

    /**
     * Get maxDepth
     *
     * @return string
     */
    public function getMaxDepth()
    {
        return $this->maxDepth;
    }

    /**
     * Set maxWeight
     *
     * @param string $maxWeight
     *
     * @return Carrier
     */
    public function setMaxWeight($maxWeight)
    {
        $this->maxWeight = $maxWeight;

        return $this;
    }

    /**
     * Get maxWeight
     *
     * @return string
     */
    public function getMaxWeight()
    {
        return $this->maxWeight;
    }

    /**
     * Set grade
     *
     * @param string $grade
     *
     * @return Carrier
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set group
     *
     * @param string $group
     *
     * @return Carrier
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
     * Set language
     *
     * @param string $language
     *
     * @return Carrier
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
     * @return Carrier
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

    /**
     * Set taxRulesGroupVendor
     *
     * @param string $taxRulesGroupVendor
     *
     * @return Carrier
     */
    public function setTaxRulesGroupVendor($taxRulesGroupVendor)
    {
        $this->taxRulesGroupVendor = $taxRulesGroupVendor;

        return $this;
    }

    /**
     * Get taxRulesGroupVendor
     *
     * @return string
     */
    public function getTaxRulesGroupVendor()
    {
        return $this->taxRulesGroupVendor;
    }

    /**
     * Set zone
     *
     * @param string $zone
     *
     * @return Carrier
     */
    public function setZone($zone)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * Get zone
     *
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }
}
