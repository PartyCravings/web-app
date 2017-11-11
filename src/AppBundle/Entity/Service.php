<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServiceRepository")
 */
class Service
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="service.name.blank")
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @Gedmo\Slug(fields={"name", "created"})
     * @ORM\Column(type="string", unique=true)
     */
    private $slug;

    /**
     * @var Vendor
     *
     * @ORM\ManyToOne(targetEntity="Vendor", inversedBy="services")
     */
    private $vendor;

    /**
     * @var ServiceDescriptions
     *
     * @Assert\Valid
     * @ORM\OneToOne(targetEntity="ServiceDescriptions", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $serviceDescriptions;

    /**
     * @var Campaigns
     *
     * @ORM\ManyToMany(targetEntity="Campaigns", inversedBy="services")
     */
    private $campaigns;

    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="services")
     */
    private $category;

    /**
     * @var Address
     *
     * @Assert\Valid
     * @ORM\ManyToOne(targetEntity="Address")
     */
    private $address;

    /**
     * @var Reviews
     *
     * @ORM\OneToMany(targetEntity="Reviews", mappedBy="service")
     */
    private $reviews;

    /**
     * @var Feature[]|ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Feature", cascade={"persist"})
     * @ORM\OrderBy({"name": "ASC"})
     * @Assert\Count(max="4", maxMessage="service.too_many_feature")
     */
    private $features;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled = false;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->campaigns = new ArrayCollection();
        $this->reviews = new ArrayCollection();
        $this->features = new ArrayCollection();
    }

    public function getAverageRating()
    {
        try {
            return intdiv(array_sum($this->reviews), count($this->reviews));
        } catch (DivisionByZeroError $e) {
            return 0;
        }
    }

    public function getMinimumRating()
    {
        return min($this->reviews);
    }

    public function getCountRating()
    {
        return count($this->reviews);
    }

    public function __toString()
    {
        return $this->name;
    }


    /**
     * Get id
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
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
     * Set vendor
     *
     * @param \AppBundle\Entity\Vendor $vendor
     *
     * @return Service
     */
    public function setVendor(\AppBundle\Entity\Vendor $vendor = null)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get vendor
     *
     * @return \AppBundle\Entity\Vendor
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set serviceDescriptions
     *
     * @param \AppBundle\Entity\ServiceDescriptions $serviceDescriptions
     *
     * @return Service
     */
    public function setServiceDescriptions(\AppBundle\Entity\ServiceDescriptions $serviceDescriptions)
    {
        $this->serviceDescriptions = $serviceDescriptions;

        return $this;
    }

    /**
     * Get serviceDescriptions
     *
     * @return \AppBundle\Entity\ServiceDescriptions
     */
    public function getServiceDescriptions()
    {
        return $this->serviceDescriptions;
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
     * Get campaigns
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCampaigns()
    {
        return $this->campaigns;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Service
     */
    public function setCategory(\AppBundle\Entity\Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set address
     *
     * @param \AppBundle\Entity\Address $address
     *
     * @return Service
     */
    public function setAddress(\AppBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \AppBundle\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Add review
     *
     * @param \AppBundle\Entity\Reviews $review
     *
     * @return Service
     */
    public function addReview(\AppBundle\Entity\Reviews $review)
    {
        $this->reviews[] = $review;

        return $this;
    }

    /**
     * Remove review
     *
     * @param \AppBundle\Entity\Reviews $review
     */
    public function removeReview(\AppBundle\Entity\Reviews $review)
    {
        $this->reviews->removeElement($review);
    }

    /**
     * Get reviews
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Add feature
     *
     * @param \AppBundle\Entity\Feature $feature
     *
     * @return Service
     */
    public function addFeature(\AppBundle\Entity\Feature $feature)
    {
        $this->features[] = $feature;

        return $this;
    }

    /**
     * Remove feature
     *
     * @param \AppBundle\Entity\Feature $feature
     */
    public function removeFeature(\AppBundle\Entity\Feature $feature)
    {
        $this->features->removeElement($feature);
    }

    /**
     * Get features
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFeatures()
    {
        return $this->features;
    }
}
