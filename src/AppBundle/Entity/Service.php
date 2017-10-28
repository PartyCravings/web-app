<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var Vendor
     *
     * @ORM\ManyToOne(targetEntity="Vendor", inversedBy="services")
     * @ORM\JoinColumn(name="vendor", referencedColumnName="id")
     */
    private $vendor;

    /**
     * @var int
     *
     * @ORM\Column(name="manufacturer_id", type="integer")
     */
    private $manufacturerId;

    /**
     * @var int
     *
     * @ORM\Column(name="vendor_default_id", type="integer")
     */
    private $vendorDefaultId;

    /**
     * @var int
     *
     * @ORM\Column(name="tax_rules_id", type="integer")
     */
    private $taxRulesId;

    /**
     * @ORM\OneToOne(targetEntity="ServiceDescriptions", inversedBy="serviceId")
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
     * @var datetime_immutable
     *
     * @ORM\Column(name="date_add", type="datetimetz_immutable")
     */
    private $dateAdd;


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
}
