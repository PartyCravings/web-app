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
     * @var Campaigns
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Campaigns", inversedBy="services")
     * @ORM\JoinColumn(name="campaigns", referencedColumnName="id")
     */
    private $campaigns;

    /**
     * @var int
     *
     * @ORM\Column(name="vendor_id", type="integer")
     */
    private $vendorId;

    /**
     * @var int
     *
     * @ORM\Column(name="manufacturer_id", type="integer")
     */
    private $manufacturerId;

    /**
     * @var int
     *
     * @ORM\Column(name="category_default_id", type="integer")
     */
    private $categoryDefaultId;

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
     * @var string
     *
     * @ORM\Column(name="on_sale", type="string", length=255)
     */
    private $onSale;

    /**
     * @var string
     *
     * @ORM\Column(name="approved", type="string", length=255)
     */
    private $approved;

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
     * @ORM\Column(name="loc_coordinates", type="string", length=255)
     */
    private $locCoordinates;

    /**
     * @var string
     *
     * @ORM\Column(name="width", type="string", length=255)
     */
    private $width;

    /**
     * @var string
     *
     * @ORM\Column(name="height", type="string", length=255)
     */
    private $height;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="string", length=255)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="lenght", type="string", length=255)
     */
    private $lenght;

    /**
     * @var string
     *
     * @ORM\Column(name="out_of_stock", type="decimal", precision=10, scale=0)
     */
    private $outOfStock;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_discount", type="string", length=255)
     */
    private $quantityDiscount;

    /**
     * @var string
     *
     * @ORM\Column(name="customizable", type="string", length=255)
     */
    private $customizable;

    /**
     * @var string
     *
     * @ORM\Column(name="uploaded_files", type="string", length=255)
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
     * @var string
     *
     * @ORM\Column(name="redirect_type", type="string", length=255)
     */
    private $redirectType;

    /**
     * @var string
     *
     * @ORM\Column(name="id_product_redirected", type="string", length=255)
     */
    private $idProductRedirected;

    /**
     * @var string
     *
     * @ORM\Column(name="available_for_order", type="string", length=255)
     */
    private $availableForOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="available_date", type="string", length=255)
     */
    private $availableDate;

    /**
     * @var string
     *
     * @ORM\Column(name="service_condition", type="string", length=255)
     */
    private $serviceCondition;

    /**
     * @var string
     *
     * @ORM\Column(name="show_price", type="string", length=255)
     */
    private $showPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="indexed", type="string", length=255)
     */
    private $indexed;

    /**
     * @var string
     *
     * @ORM\Column(name="visibility", type="string", length=255)
     */
    private $visibility;

    /**
     * @var string
     *
     * @ORM\Column(name="date_add", type="string", length=255)
     */
    private $dateAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="date_upd", type="string", length=255)
     */
    private $dateUpd;

    /**
     * @var string
     *
     * @ORM\Column(name="advanced_stock_managementt", type="string", length=255)
     */
    private $advancedStockManagementt;

    /**
     * @var string
     *
     * @ORM\Column(name="pack_stock_type", type="string", length=255)
     */
    private $packStockType;

    /**
     * @var string
     *
     * @ORM\Column(name="attachments", type="string", length=255)
     */
    private $attachments;

    /**
     * @var string
     *
     * @ORM\Column(name="attribute", type="string", length=255)
     */
    private $attribute;

    /**
     * @var string
     *
     * @ORM\Column(name="attribute_combination", type="string", length=255)
     */
    private $attributeCombination;

    /**
     * @var string
     *
     * @ORM\Column(name="attribute_image", type="string", length=255)
     */
    private $attributeImage;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=255)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="attribute_vendor", type="string", length=255)
     */
    private $attributeVendor;

    /**
     * @var string
     *
     * @ORM\Column(name="carrier", type="string", length=255)
     */
    private $carrier;

    /**
     * @var string
     *
     * @ORM\Column(name="country_tax", type="string", length=255)
     */
    private $countryTax;

    /**
     * @var string
     *
     * @ORM\Column(name="download", type="string", length=255)
     */
    private $download;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor_reduction_cache", type="string", length=255)
     */
    private $vendorReductionCache;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="sale", type="string", length=255)
     */
    private $sale;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor", type="string", length=255)
     */
    private $vendor;

    /**
     * @var string
     *
     * @ORM\Column(name="supplier", type="string", length=255)
     */
    private $supplier;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=255)
     */
    private $tag;

    /**
     * @var string
     *
     * @ORM\Column(name="products", type="string", length=255)
     */
    private $products;


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
     * Set vendorId
     *
     * @param integer $vendorId
     *
     * @return Service
     */
    public function setVendorId($vendorId)
    {
        $this->vendorId = $vendorId;

        return $this;
    }

    /**
     * Get vendorId
     *
     * @return int
     */
    public function getVendorId()
    {
        return $this->vendorId;
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
     * Set categoryDefaultId
     *
     * @param integer $categoryDefaultId
     *
     * @return Service
     */
    public function setCategoryDefaultId($categoryDefaultId)
    {
        $this->categoryDefaultId = $categoryDefaultId;

        return $this;
    }

    /**
     * Get categoryDefaultId
     *
     * @return int
     */
    public function getCategoryDefaultId()
    {
        return $this->categoryDefaultId;
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
     * Set dateAdd
     *
     * @param string $dateAdd
     *
     * @return Service
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return string
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
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
     * Set category
     *
     * @param string $category
     *
     * @return Service
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
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
     * @return mixed
     */
    public function getCampaigns()
    {
        return $this->campaigns;
    }

    /**
     * @param mixed $campaigns
     */
    public function setCampaigns($campaigns)
    {
        $this->campaigns = $campaigns;
    }
}
