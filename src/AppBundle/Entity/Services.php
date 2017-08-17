<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Services
 *
 * @ORM\Table(name="services")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\servicesRepository")
 */
class Services
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
     * @ORM\OneToOne(targetEntity="ServiceDescriptions", inversedBy="serviceId")
    */
    private $serviceDescriptions;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="sku", type="string", length=255)
     */
    private $sku;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="stock_status_id", type="integer")
     */
    private $stockStatusId;

    /**
     * @var int
     *
     * @ORM\Column(name="manufacturer_id", type="integer")
     */
    private $manufacturerId;

    /**
     * @var bool
     *
     * @ORM\Column(name="shipping", type="boolean")
     */
    private $shipping;

    /**
     * @var bool
     *
     * @ORM\Column(name="ship_individually", type="boolean")
     */
    private $shipIndividually;

    /**
     * @var bool
     *
     * @ORM\Column(name="free_shipping", type="boolean")
     */
    private $freeShipping;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_price", type="decimal", precision=10, scale=0)
     */
    private $shippingPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=0)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="tax_class_id", type="integer")
     */
    private $taxClassId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_available", type="datetime")
     */
    private $dateAvailable;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=10, scale=0)
     */
    private $weight;

    /**
     * @var int
     *
     * @ORM\Column(name="weight_class_id", type="integer")
     */
    private $weightClassId;

    /**
     * @var string
     *
     * @ORM\Column(name="lenght", type="decimal", precision=10, scale=0)
     */
    private $lenght;

    /**
     * @var string
     *
     * @ORM\Column(name="width", type="decimal", precision=10, scale=0)
     */
    private $width;

    /**
     * @var string
     *
     * @ORM\Column(name="height", type="decimal", precision=10, scale=0)
     */
    private $height;

    /**
     * @var int
     *
     * @ORM\Column(name="lenght_class_id", type="integer")
     */
    private $lenghtClassId;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="viewed", type="integer")
     */
    private $viewed;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer")
     */
    private $sortOrder;

    /**
     * @var bool
     *
     * @ORM\Column(name="subtract", type="boolean")
     */
    private $subtract;

    /**
     * @var int
     *
     * @ORM\Column(name="minimum", type="integer")
     */
    private $minimum;

    /**
     * @var int
     *
     * @ORM\Column(name="maximum", type="integer")
     */
    private $maximum;

    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=10, scale=0)
     */
    private $cost;

    /**
     * @var bool
     *
     * @ORM\Column(name="call_to_order", type="boolean")
     */
    private $callToOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="settings", type="string", length=255)
     */
    private $settings;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime")
     */
    private $dateAdded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime")
     */
    private $dateModified;

    /**
     * @var string
     *
     * @ORM\Column(name="services_featured", type="string", length=255)
     */
    private $servicesFeatured;

    /**
     * @var string
     *
     * @ORM\Column(name="services_related", type="string", length=255)
     */
    private $servicesRelated;

    /**
     * @var string
     *
     * @ORM\Column(name="services_to_categories", type="string", length=255)
     */
    private $servicesToCategories;

    /**
     * @var string
     *
     * @ORM\Column(name="services_to_downloads", type="string", length=255)
     */
    private $servicesToDownloads;

    /**
     * @var string
     *
     * @ORM\Column(name="services_to_stores", type="string", length=255)
     */
    private $servicesToStores;


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
     * Set model
     *
     * @param string $model
     *
     * @return Services
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set sku
     *
     * @param string $sku
     *
     * @return Services
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Services
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Services
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set stockStatusId
     *
     * @param integer $stockStatusId
     *
     * @return Services
     */
    public function setStockStatusId($stockStatusId)
    {
        $this->stockStatusId = $stockStatusId;

        return $this;
    }

    /**
     * Get stockStatusId
     *
     * @return int
     */
    public function getStockStatusId()
    {
        return $this->stockStatusId;
    }

    /**
     * Set manufacturerId
     *
     * @param integer $manufacturerId
     *
     * @return Services
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
     * Set shipping
     *
     * @param boolean $shipping
     *
     * @return Services
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get shipping
     *
     * @return bool
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Set shipIndividually
     *
     * @param boolean $shipIndividually
     *
     * @return Services
     */
    public function setShipIndividually($shipIndividually)
    {
        $this->shipIndividually = $shipIndividually;

        return $this;
    }

    /**
     * Get shipIndividually
     *
     * @return bool
     */
    public function getShipIndividually()
    {
        return $this->shipIndividually;
    }

    /**
     * Set freeShipping
     *
     * @param boolean $freeShipping
     *
     * @return Services
     */
    public function setFreeShipping($freeShipping)
    {
        $this->freeShipping = $freeShipping;

        return $this;
    }

    /**
     * Get freeShipping
     *
     * @return bool
     */
    public function getFreeShipping()
    {
        return $this->freeShipping;
    }

    /**
     * Set shippingPrice
     *
     * @param string $shippingPrice
     *
     * @return Services
     */
    public function setShippingPrice($shippingPrice)
    {
        $this->shippingPrice = $shippingPrice;

        return $this;
    }

    /**
     * Get shippingPrice
     *
     * @return string
     */
    public function getShippingPrice()
    {
        return $this->shippingPrice;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Services
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set taxClassId
     *
     * @param integer $taxClassId
     *
     * @return Services
     */
    public function setTaxClassId($taxClassId)
    {
        $this->taxClassId = $taxClassId;

        return $this;
    }

    /**
     * Get taxClassId
     *
     * @return int
     */
    public function getTaxClassId()
    {
        return $this->taxClassId;
    }

    /**
     * Set dateAvailable
     *
     * @param \DateTime $dateAvailable
     *
     * @return Services
     */
    public function setDateAvailable($dateAvailable)
    {
        $this->dateAvailable = $dateAvailable;

        return $this;
    }

    /**
     * Get dateAvailable
     *
     * @return \DateTime
     */
    public function getDateAvailable()
    {
        return $this->dateAvailable;
    }

    /**
     * Set weight
     *
     * @param string $weight
     *
     * @return Services
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set weightClassId
     *
     * @param integer $weightClassId
     *
     * @return Services
     */
    public function setWeightClassId($weightClassId)
    {
        $this->weightClassId = $weightClassId;

        return $this;
    }

    /**
     * Get weightClassId
     *
     * @return int
     */
    public function getWeightClassId()
    {
        return $this->weightClassId;
    }

    /**
     * Set lenght
     *
     * @param string $lenght
     *
     * @return Services
     */
    public function setLenght($lenght)
    {
        $this->lenght = $lenght;

        return $this;
    }

    /**
     * Get lenght
     *
     * @return string
     */
    public function getLenght()
    {
        return $this->lenght;
    }

    /**
     * Set width
     *
     * @param string $width
     *
     * @return Services
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param string $height
     *
     * @return Services
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set lenghtClassId
     *
     * @param integer $lenghtClassId
     *
     * @return Services
     */
    public function setLenghtClassId($lenghtClassId)
    {
        $this->lenghtClassId = $lenghtClassId;

        return $this;
    }

    /**
     * Get lenghtClassId
     *
     * @return int
     */
    public function getLenghtClassId()
    {
        return $this->lenghtClassId;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Services
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
     * Set viewed
     *
     * @param integer $viewed
     *
     * @return Services
     */
    public function setViewed($viewed)
    {
        $this->viewed = $viewed;

        return $this;
    }

    /**
     * Get viewed
     *
     * @return int
     */
    public function getViewed()
    {
        return $this->viewed;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return Services
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
     * Set subtract
     *
     * @param boolean $subtract
     *
     * @return Services
     */
    public function setSubtract($subtract)
    {
        $this->subtract = $subtract;

        return $this;
    }

    /**
     * Get subtract
     *
     * @return bool
     */
    public function getSubtract()
    {
        return $this->subtract;
    }

    /**
     * Set minimum
     *
     * @param integer $minimum
     *
     * @return Services
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;

        return $this;
    }

    /**
     * Get minimum
     *
     * @return int
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * Set maximum
     *
     * @param integer $maximum
     *
     * @return Services
     */
    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;

        return $this;
    }

    /**
     * Get maximum
     *
     * @return int
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * Set cost
     *
     * @param string $cost
     *
     * @return Services
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set callToOrder
     *
     * @param boolean $callToOrder
     *
     * @return Services
     */
    public function setCallToOrder($callToOrder)
    {
        $this->callToOrder = $callToOrder;

        return $this;
    }

    /**
     * Get callToOrder
     *
     * @return bool
     */
    public function getCallToOrder()
    {
        return $this->callToOrder;
    }

    /**
     * Set settings
     *
     * @param string $settings
     *
     * @return Services
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

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return Services
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return Services
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Set servicesFeatured
     *
     * @param string $servicesFeatured
     *
     * @return Services
     */
    public function setservicesFeatured($servicesFeatured)
    {
        $this->servicesFeatured = $servicesFeatured;

        return $this;
    }

    /**
     * Get servicesFeatured
     *
     * @return string
     */
    public function getservicesFeatured()
    {
        return $this->servicesFeatured;
    }

    /**
     * Set servicesRelated
     *
     * @param string $servicesRelated
     *
     * @return Services
     */
    public function setservicesRelated($servicesRelated)
    {
        $this->servicesRelated = $servicesRelated;

        return $this;
    }

    /**
     * Get servicesRelated
     *
     * @return string
     */
    public function getservicesRelated()
    {
        return $this->servicesRelated;
    }

    /**
     * Set servicesToCategories
     *
     * @param string $servicesToCategories
     *
     * @return Services
     */
    public function setservicesToCategories($servicesToCategories)
    {
        $this->servicesToCategories = $servicesToCategories;

        return $this;
    }

    /**
     * Get servicesToCategories
     *
     * @return string
     */
    public function getservicesToCategories()
    {
        return $this->servicesToCategories;
    }

    /**
     * Set servicesToDownloads
     *
     * @param string $servicesToDownloads
     *
     * @return Services
     */
    public function setservicesToDownloads($servicesToDownloads)
    {
        $this->servicesToDownloads = $servicesToDownloads;

        return $this;
    }

    /**
     * Get servicesToDownloads
     *
     * @return string
     */
    public function getservicesToDownloads()
    {
        return $this->servicesToDownloads;
    }

    /**
     * Set servicesToStores
     *
     * @param string $servicesToStores
     *
     * @return Services
     */
    public function setservicesToStores($servicesToStores)
    {
        $this->servicesToStores = $servicesToStores;

        return $this;
    }

    /**
     * Get servicesToStores
     *
     * @return string
     */
    public function getservicesToStores()
    {
        return $this->servicesToStores;
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
}

