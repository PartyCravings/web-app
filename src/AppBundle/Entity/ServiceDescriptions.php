<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * ServiceDescriptions
 *
 * @ORM\Table(name="service_descriptions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\serviceDescriptionsRepository")
 */
class ServiceDescriptions
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
     * @var string
     *
     * @ORM\Column(name="meta_keywords", type="string", length=255)
     */
    private $metaKeywords;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_description", type="string", length=255)
     */
    private $metaDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="string", length=255)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="minimal_quantiy", type="string", length=255)
     */
    private $minimalQuantiy;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=255)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="wholesale_price", type="string", length=255)
     */
    private $wholesalePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="wholesale_threshold", type="string", length=255)
     */
    private $wholesaleThreshold;

    /**
     * @var string
     *
     * @ORM\Column(name="unit_price_ratio", type="decimal", precision=10, scale=0)
     */
    private $unitPriceRatio;

    /**
     * @var string
     *
     * @ORM\Column(name="additional_shipping_cost", type="string", length=255)
     */
    private $additionalShippingCost;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_discount", type="string", length=255)
     */
    private $quantityDiscount;

    /**
     * @var Files
     *
     * @ORM\ManyToMany(targetEntity="Files")
     */
    private $uploadedFiles;

    /**
     * @var string
     *
     * @ORM\Column(name="text_fields", type="string", length=255)
     */
    private $textFields;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=255)
     */
    private $active;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;

    /**
     * @Gedmo\Blameable(on="update")
     * @ORM\ManyToOne(targetEntity="Accounts")
     * @ORM\JoinColumn(name="updated_by", referencedColumnName="id")
     */
    private $updatedBy;

    /**
     * @var ServiceTags
     *
     * @ORM\ManyToMany(targetEntity="ServiceTags")
     */
    private $tag;

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
     * Set serviceId
     *
     * @param integer $serviceId
     *
     * @return ServiceDescriptions
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
     * Set langId
     *
     * @param integer $langId
     *
     * @return ServiceDescriptions
     */
    public function setLangId($langId)
    {
        $this->langId = $langId;

        return $this;
    }

    /**
     * Get langId
     *
     * @return int
     */
    public function getLangId()
    {
        return $this->langId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ServiceDescriptions
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
     * Set metaKeywords
     *
     * @param string $metaKeywords
     *
     * @return ServiceDescriptions
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * Get metaKeywords
     *
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     *
     * @return ServiceDescriptions
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return ServiceDescriptions
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set blurb
     *
     * @param string $blurb
     *
     * @return ServiceDescriptions
     */
    public function setBlurb($blurb)
    {
        $this->blurb = $blurb;

        return $this;
    }

    /**
     * Get blurb
     *
     * @return string
     */
    public function getBlurb()
    {
        return $this->blurb;
    }


    /**
     * Set onSale
     *
     * @param string $onSale
     *
     * @return Service
     */
    public function setOnSale($onSale)
    {
        $this->onSale = $onSale;

        return $this;
    }

    /**
     * Get onSale
     *
     * @return string
     */
    public function getOnSale()
    {
        return $this->onSale;
    }

    /**
     * Set approved
     *
     * @param string $approved
     *
     * @return Service
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return string
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set deleted
     *
     * @param string $deleted
     *
     * @return Service
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
     * @return Service
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
     * Set quantity
     *
     * @param string $quantity
     *
     * @return Service
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set minimalQuantiy
     *
     * @param string $minimalQuantiy
     *
     * @return Service
     */
    public function setMinimalQuantiy($minimalQuantiy)
    {
        $this->minimalQuantiy = $minimalQuantiy;

        return $this;
    }

    /**
     * Get minimalQuantiy
     *
     * @return string
     */
    public function getMinimalQuantiy()
    {
        return $this->minimalQuantiy;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Service
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
     * Set wholesalePrice
     *
     * @param string $wholesalePrice
     *
     * @return Service
     */
    public function setWholesalePrice($wholesalePrice)
    {
        $this->wholesalePrice = $wholesalePrice;

        return $this;
    }

    /**
     * Get wholesalePrice
     *
     * @return string
     */
    public function getWholesalePrice()
    {
        return $this->wholesalePrice;
    }

    /**
     * Set wholesaleThreshold
     *
     * @param string $wholesaleThreshold
     *
     * @return Service
     */
    public function setWholesaleThreshold($wholesaleThreshold)
    {
        $this->wholesaleThreshold = $wholesaleThreshold;

        return $this;
    }

    /**
     * Get wholesaleThreshold
     *
     * @return string
     */
    public function getWholesaleThreshold()
    {
        return $this->wholesaleThreshold;
    }

    /**
     * Set unitPriceRatio
     *
     * @param string $unitPriceRatio
     *
     * @return Service
     */
    public function setUnitPriceRatio($unitPriceRatio)
    {
        $this->unitPriceRatio = $unitPriceRatio;

        return $this;
    }

    /**
     * Get unitPriceRatio
     *
     * @return string
     */
    public function getUnitPriceRatio()
    {
        return $this->unitPriceRatio;
    }

    /**
     * Set additionalShippingCost
     *
     * @param string $additionalShippingCost
     *
     * @return Service
     */
    public function setAdditionalShippingCost($additionalShippingCost)
    {
        $this->additionalShippingCost = $additionalShippingCost;

        return $this;
    }

    /**
     * Get additionalShippingCost
     *
     * @return string
     */
    public function getAdditionalShippingCost()
    {
        return $this->additionalShippingCost;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Service
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Service
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
     * Set locCoordinates
     *
     * @param string $locCoordinates
     *
     * @return Service
     */
    public function setLocCoordinates($locCoordinates)
    {
        $this->locCoordinates = $locCoordinates;

        return $this;
    }

    /**
     * Get locCoordinates
     *
     * @return string
     */
    public function getLocCoordinates()
    {
        return $this->locCoordinates;
    }

    /**
     * Set width
     *
     * @param string $width
     *
     * @return Service
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
     * @return Service
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
     * Set weight
     *
     * @param string $weight
     *
     * @return Service
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
     * Set lenght
     *
     * @param string $lenght
     *
     * @return Service
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
     * Set outOfStock
     *
     * @param string $outOfStock
     *
     * @return Service
     */
    public function setOutOfStock($outOfStock)
    {
        $this->outOfStock = $outOfStock;

        return $this;
    }

    /**
     * Get outOfStock
     *
     * @return string
     */
    public function getOutOfStock()
    {
        return $this->outOfStock;
    }

    /**
     * Set quantityDiscount
     *
     * @param string $quantityDiscount
     *
     * @return Service
     */
    public function setQuantityDiscount($quantityDiscount)
    {
        $this->quantityDiscount = $quantityDiscount;

        return $this;
    }

    /**
     * Get quantityDiscount
     *
     * @return string
     */
    public function getQuantityDiscount()
    {
        return $this->quantityDiscount;
    }

    /**
     * Set customizable
     *
     * @param string $customizable
     *
     * @return Service
     */
    public function setCustomizable($customizable)
    {
        $this->customizable = $customizable;

        return $this;
    }

    /**
     * Get customizable
     *
     * @return string
     */
    public function getCustomizable()
    {
        return $this->customizable;
    }

    /**
     * Set uploadedFiles
     *
     * @param string $uploadedFiles
     *
     * @return Service
     */
    public function setUploadedFiles($uploadedFiles)
    {
        $this->uploadedFiles = $uploadedFiles;

        return $this;
    }

    /**
     * Get uploadedFiles
     *
     * @return string
     */
    public function getUploadedFiles()
    {
        return $this->uploadedFiles;
    }

    /**
     * Set textFields
     *
     * @param string $textFields
     *
     * @return Service
     */
    public function setTextFields($textFields)
    {
        $this->textFields = $textFields;

        return $this;
    }

    /**
     * Get textFields
     *
     * @return string
     */
    public function getTextFields()
    {
        return $this->textFields;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return Service
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
     * Set redirectType
     *
     * @param string $redirectType
     *
     * @return Service
     */
    public function setRedirectType($redirectType)
    {
        $this->redirectType = $redirectType;

        return $this;
    }

    /**
     * Get redirectType
     *
     * @return string
     */
    public function getRedirectType()
    {
        return $this->redirectType;
    }

    /**
     * Set idProductRedirected
     *
     * @param string $idProductRedirected
     *
     * @return Service
     */
    public function setIdProductRedirected($idProductRedirected)
    {
        $this->idProductRedirected = $idProductRedirected;

        return $this;
    }

    /**
     * Get idProductRedirected
     *
     * @return string
     */
    public function getIdProductRedirected()
    {
        return $this->idProductRedirected;
    }

    /**
     * Set availableForOrder
     *
     * @param string $availableForOrder
     *
     * @return Service
     */
    public function setAvailableForOrder($availableForOrder)
    {
        $this->availableForOrder = $availableForOrder;

        return $this;
    }

    /**
     * Get availableForOrder
     *
     * @return string
     */
    public function getAvailableForOrder()
    {
        return $this->availableForOrder;
    }

    /**
     * Set availableDate
     *
     * @param string $availableDate
     *
     * @return Service
     */
    public function setAvailableDate($availableDate)
    {
        $this->availableDate = $availableDate;

        return $this;
    }

    /**
     * Get availableDate
     *
     * @return string
     */
    public function getAvailableDate()
    {
        return $this->availableDate;
    }

    /**
     * Set serviceCondition
     *
     * @param string $serviceCondition
     *
     * @return Service
     */
    public function setServiceCondition($serviceCondition)
    {
        $this->serviceCondition = $serviceCondition;

        return $this;
    }

    /**
     * Get serviceCondition
     *
     * @return string
     */
    public function getServiceCondition()
    {
        return $this->serviceCondition;
    }

    /**
     * Set showPrice
     *
     * @param string $showPrice
     *
     * @return Service
     */
    public function setShowPrice($showPrice)
    {
        $this->showPrice = $showPrice;

        return $this;
    }

    /**
     * Get showPrice
     *
     * @return string
     */
    public function getShowPrice()
    {
        return $this->showPrice;
    }

    /**
     * Set indexed
     *
     * @param string $indexed
     *
     * @return Service
     */
    public function setIndexed($indexed)
    {
        $this->indexed = $indexed;

        return $this;
    }

    /**
     * Get indexed
     *
     * @return string
     */
    public function getIndexed()
    {
        return $this->indexed;
    }

    /**
     * Set visibility
     *
     * @param string $visibility
     *
     * @return Service
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get visibility
     *
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set dateUpd
     *
     * @param string $dateUpd
     *
     * @return Service
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return string
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * Set advancedStockManagementt
     *
     * @param string $advancedStockManagementt
     *
     * @return Service
     */
    public function setAdvancedStockManagementt($advancedStockManagementt)
    {
        $this->advancedStockManagementt = $advancedStockManagementt;

        return $this;
    }

    /**
     * Get advancedStockManagementt
     *
     * @return string
     */
    public function getAdvancedStockManagementt()
    {
        return $this->advancedStockManagementt;
    }

    /**
     * Set packStockType
     *
     * @param string $packStockType
     *
     * @return Service
     */
    public function setPackStockType($packStockType)
    {
        $this->packStockType = $packStockType;

        return $this;
    }

    /**
     * Get packStockType
     *
     * @return string
     */
    public function getPackStockType()
    {
        return $this->packStockType;
    }

    /**
     * Set attachments
     *
     * @param string $attachments
     *
     * @return Service
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * Get attachments
     *
     * @return string
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Set attribute
     *
     * @param string $attribute
     *
     * @return Service
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * Get attribute
     *
     * @return string
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Set attributeCombination
     *
     * @param string $attributeCombination
     *
     * @return Service
     */
    public function setAttributeCombination($attributeCombination)
    {
        $this->attributeCombination = $attributeCombination;

        return $this;
    }

    /**
     * Get attributeCombination
     *
     * @return string
     */
    public function getAttributeCombination()
    {
        return $this->attributeCombination;
    }

    /**
     * Set attributeImage
     *
     * @param string $attributeImage
     *
     * @return Service
     */
    public function setAttributeImage($attributeImage)
    {
        $this->attributeImage = $attributeImage;

        return $this;
    }

    /**
     * Get attributeImage
     *
     * @return string
     */
    public function getAttributeImage()
    {
        return $this->attributeImage;
    }

    /**
     * Set class
     *
     * @param string $class
     *
     * @return Service
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set attributeVendor
     *
     * @param string $attributeVendor
     *
     * @return Service
     */
    public function setAttributeVendor($attributeVendor)
    {
        $this->attributeVendor = $attributeVendor;

        return $this;
    }

    /**
     * Get attributeVendor
     *
     * @return string
     */
    public function getAttributeVendor()
    {
        return $this->attributeVendor;
    }

    /**
     * Set carrier
     *
     * @param string $carrier
     *
     * @return Service
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * Get carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Set countryTax
     *
     * @param string $countryTax
     *
     * @return Service
     */
    public function setCountryTax($countryTax)
    {
        $this->countryTax = $countryTax;

        return $this;
    }

    /**
     * Get countryTax
     *
     * @return string
     */
    public function getCountryTax()
    {
        return $this->countryTax;
    }

    /**
     * Set download
     *
     * @param string $download
     *
     * @return Service
     */
    public function setDownload($download)
    {
        $this->download = $download;

        return $this;
    }

    /**
     * Get download
     *
     * @return string
     */
    public function getDownload()
    {
        return $this->download;
    }

    /**
     * Set vendorReductionCache
     *
     * @param string $vendorReductionCache
     *
     * @return Service
     */
    public function setVendorReductionCache($vendorReductionCache)
    {
        $this->vendorReductionCache = $vendorReductionCache;

        return $this;
    }

    /**
     * Get vendorReductionCache
     *
     * @return string
     */
    public function getVendorReductionCache()
    {
        return $this->vendorReductionCache;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Service
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
     * Set sale
     *
     * @param string $sale
     *
     * @return Service
     */
    public function setSale($sale)
    {
        $this->sale = $sale;

        return $this;
    }

    /**
     * Get sale
     *
     * @return string
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * Set vendor
     *
     * @param string $vendor
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
     * @return string
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set supplier
     *
     * @param string $supplier
     *
     * @return Service
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return string
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return Service
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set products
     *
     * @param string $products
     *
     * @return Service
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return string
     */
    public function getProducts()
    {
        return $this->products;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->uploadedFiles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tag = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add uploadedFile
     *
     * @param \AppBundle\Entity\Files $uploadedFile
     *
     * @return ServiceDescriptions
     */
    public function addUploadedFile(\AppBundle\Entity\Files $uploadedFile)
    {
        $this->uploadedFiles[] = $uploadedFile;

        return $this;
    }

    /**
     * Remove uploadedFile
     *
     * @param \AppBundle\Entity\Files $uploadedFile
     */
    public function removeUploadedFile(\AppBundle\Entity\Files $uploadedFile)
    {
        $this->uploadedFiles->removeElement($uploadedFile);
    }

    /**
     * Add tag
     *
     * @param \AppBundle\Entity\ServiceTags $tag
     *
     * @return ServiceDescriptions
     */
    public function addTag(\AppBundle\Entity\ServiceTags $tag)
    {
        $this->tag[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \AppBundle\Entity\ServiceTags $tag
     */
    public function removeTag(\AppBundle\Entity\ServiceTags $tag)
    {
        $this->tag->removeElement($tag);
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return ServiceDescriptions
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set updatedBy
     *
     * @param \AppBundle\Entity\Accounts $updatedBy
     *
     * @return ServiceDescriptions
     */
    public function setUpdatedBy(\AppBundle\Entity\Accounts $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \AppBundle\Entity\Accounts
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}
