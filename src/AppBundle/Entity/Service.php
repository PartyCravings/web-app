<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServiceRepository")
 */
class Service
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @Gedmo\Slug(fields={"created", "name"})
     * @ORM\Column(length=64, unique=true)
     */
    private $slug;

    /**
     * @var Vendor
     *
     * @ORM\ManyToOne(targetEntity="Vendor", inversedBy="services")
     * @ORM\JoinColumn(name="vendor", referencedColumnName="id")
     */
    private $vendor;

    /**
     * @ORM\OneToOne(targetEntity="ServiceDescriptions")
    */
    private $serviceDescriptions;

    /**
     * @var Campaigns
     *
     * @ORM\ManyToMany(targetEntity="Campaigns", inversedBy="services")
     * @ORM\JoinColumn(name="campaigns", referencedColumnName="id")
     */
    private $campaigns;

    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="services")
     * @ORM\JoinColumn(name="category", referencedColumnName="id")
     **/
    private $category;

    /**
     * @var Location
     *
     * @ORM\ManyToOne(targetEntity="Location")
     */
    private $location;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="Accounts")
     * @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     */
    private $createdBy;


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
     * Set vendor
     *
     * @param Vendor $vendor
     *
     * @return Service
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get vendor
     *
     * @return Vendor
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set name
     *
     * @param string $vendorId
     *
     * @return Service
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
     * Set manufacturerId
     *
     * @param integer $manufacturerId
     *
     * @return Service
     */
    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;

        return $this;
    }

    /**
     * Get manufacturerId
     *
     * @return int
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    /**
     * Set vendorDefaultId
     *
     * @param integer $vendorDefaultId
     *
     * @return Service
     */
    public function setVendorDefaultId($vendorDefaultId)
    {
        $this->vendorDefaultId = $vendorDefaultId;

        return $this;
    }

    /**
     * Get vendorDefaultId
     *
     * @return int
     */
    public function getVendorDefaultId()
    {
        return $this->vendorDefaultId;
    }

    /**
     * Set taxRulesId
     *
     * @param integer $taxRulesId
     *
     * @return Service
     */
    public function setTaxRulesId($taxRulesId)
    {
        $this->taxRulesId = $taxRulesId;

        return $this;
    }

    /**
     * Get taxRulesId
     *
     * @return int
     */
    public function getTaxRulesId()
    {
        return $this->taxRulesId;
    }

    /**
     * @return mixed
     */
    public function getserviceDescriptions()
    {
        return $this->serviceDescriptions;
    }

    /**
     * @param mixed $serviceDescriptions
     */
    public function setserviceDescriptions($serviceDescriptions)
    {
        $this->serviceDescriptions = $serviceDescriptions;
    }

    /**
     * @return Campaigns
     */
    public function getCampaigns()
    {
        return $this->campaigns;
    }

    /**
     * @param Campaigns $campaigns
     */
    public function setCampaigns($campaigns)
    {
        $this->campaigns = $campaigns;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return datetime_immutable
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * @param datetime_immutable $dateAdd
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->campaigns = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add campaign
     *
     * @param \AppBundle\Entity\Campaigns $campaign
     *
     * @return Service
     */
    public function addCampaign(\AppBundle\Entity\Campaigns $campaign)
    {
        $this->campaigns[] = $campaign;

        return $this;
    }

    /**
     * Remove campaign
     *
     * @param \AppBundle\Entity\Campaigns $campaign
     */
    public function removeCampaign(\AppBundle\Entity\Campaigns $campaign)
    {
        $this->campaigns->removeElement($campaign);
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Service
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return Service
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return boolean
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Service
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set location
     *
     * @param \AppBundle\Entity\Location $location
     *
     * @return Service
     */
    public function setLocation(\AppBundle\Entity\Location $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \AppBundle\Entity\Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set createdBy
     *
     * @param \AppBundle\Entity\Accounts $createdBy
     *
     * @return Service
     */
    public function setCreatedBy(\AppBundle\Entity\Accounts $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \AppBundle\Entity\Accounts
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
}
