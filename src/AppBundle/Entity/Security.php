<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Security
 *
 * @ORM\Table(name="security")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SecurityRepository")
 */
class Security
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
     * @var int
     *
     * @ORM\Column(name="vendor_id", type="integer")
     */
    private $vendorId;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=255)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="manufacturer_id", type="integer")
     */
    private $manufacturerId;

    /**
     * @var int
     *
     * @ORM\Column(name="vendor_group_id", type="integer")
     */
    private $vendorGroupId;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean")
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=0)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="price_discount_excl_tax", type="decimal", precision=10, scale=0)
     */
    private $priceDiscountExclTax;

    /**
     * @var string
     *
     * @ORM\Column(name="price_discount_incl_tax", type="decimal", precision=10, scale=0)
     */
    private $priceDiscountInclTax;

    /**
     * @var bool
     *
     * @ORM\Column(name="taxable", type="boolean")
     */
    private $taxable;

    /**
     * @var int
     *
     * @ORM\Column(name="currency_id", type="integer")
     */
    private $currencyId;

    /**
     * @var int
     *
     * @ORM\Column(name="country_id", type="integer")
     */
    private $countryId;

    /**
     * @var int
     *
     * @ORM\Column(name="lang_id", type="integer")
     */
    private $langId;

    /**
     * @var string
     *
     * @ORM\Column(name="featured_image", type="string", length=255)
     */
    private $featuredImage;

    /**
     * @var string
     *
     * @ORM\Column(name="featured_video", type="string", length=255)
     */
    private $featuredVideo;

    /**
     * @var string
     *
     * @ORM\Column(name="documentaries", type="string", length=255)
     */
    private $documentaries;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_promoted", type="boolean")
     */
    private $isPromoted;

    /**
     * @var int
     *
     * @ORM\Column(name="promotion_id", type="integer")
     */
    private $promotionId;

    /**
     * @var string
     *
     * @ORM\Column(name="coordinates_long", type="decimal", precision=10, scale=0)
     */
    private $coordinatesLong;

    /**
     * @var string
     *
     * @ORM\Column(name="coordinates_lat", type="decimal", precision=10, scale=0)
     */
    private $coordinatesLat;

    /**
     * @var int
     *
     * @ORM\Column(name="cred_rating", type="integer")
     */
    private $credRating;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_suspended", type="boolean")
     */
    private $isSuspended;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_edited", type="datetime")
     */
    private $dateEdited;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="zone_id", type="integer")
     */
    private $zoneId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_armed", type="boolean")
     */
    private $isArmed;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=255)
     */
    private $tags;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_title", type="string", length=255)
     */
    private $metaTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_description", type="string", length=255)
     */
    private $metaDescription;


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
     * @return Security
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
     * Set class
     *
     * @param string $class
     *
     * @return Security
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
     * Set category
     *
     * @param string $category
     *
     * @return Security
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
     * Set name
     *
     * @param string $name
     *
     * @return Security
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
     * @return Security
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
     * Set vendorGroupId
     *
     * @param integer $vendorGroupId
     *
     * @return Security
     */
    public function setVendorGroupId($vendorGroupId)
    {
        $this->vendorGroupId = $vendorGroupId;

        return $this;
    }

    /**
     * Get vendorGroupId
     *
     * @return int
     */
    public function getVendorGroupId()
    {
        return $this->vendorGroupId;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Security
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return Security
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Security
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
     * Set priceDiscountExclTax
     *
     * @param string $priceDiscountExclTax
     *
     * @return Security
     */
    public function setPriceDiscountExclTax($priceDiscountExclTax)
    {
        $this->priceDiscountExclTax = $priceDiscountExclTax;

        return $this;
    }

    /**
     * Get priceDiscountExclTax
     *
     * @return string
     */
    public function getPriceDiscountExclTax()
    {
        return $this->priceDiscountExclTax;
    }

    /**
     * Set priceDiscountInclTax
     *
     * @param string $priceDiscountInclTax
     *
     * @return Security
     */
    public function setPriceDiscountInclTax($priceDiscountInclTax)
    {
        $this->priceDiscountInclTax = $priceDiscountInclTax;

        return $this;
    }

    /**
     * Get priceDiscountInclTax
     *
     * @return string
     */
    public function getPriceDiscountInclTax()
    {
        return $this->priceDiscountInclTax;
    }

    /**
     * Set taxable
     *
     * @param boolean $taxable
     *
     * @return Security
     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;

        return $this;
    }

    /**
     * Get taxable
     *
     * @return bool
     */
    public function getTaxable()
    {
        return $this->taxable;
    }

    /**
     * Set currencyId
     *
     * @param integer $currencyId
     *
     * @return Security
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId
     *
     * @return int
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     *
     * @return Security
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set langId
     *
     * @param integer $langId
     *
     * @return Security
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
     * Set featuredImage
     *
     * @param string $featuredImage
     *
     * @return Security
     */
    public function setFeaturedImage($featuredImage)
    {
        $this->featuredImage = $featuredImage;

        return $this;
    }

    /**
     * Get featuredImage
     *
     * @return string
     */
    public function getFeaturedImage()
    {
        return $this->featuredImage;
    }

    /**
     * Set featuredVideo
     *
     * @param string $featuredVideo
     *
     * @return Security
     */
    public function setFeaturedVideo($featuredVideo)
    {
        $this->featuredVideo = $featuredVideo;

        return $this;
    }

    /**
     * Get featuredVideo
     *
     * @return string
     */
    public function getFeaturedVideo()
    {
        return $this->featuredVideo;
    }

    /**
     * Set documentaries
     *
     * @param string $documentaries
     *
     * @return Security
     */
    public function setDocumentaries($documentaries)
    {
        $this->documentaries = $documentaries;

        return $this;
    }

    /**
     * Get documentaries
     *
     * @return string
     */
    public function getDocumentaries()
    {
        return $this->documentaries;
    }

    /**
     * Set isPromoted
     *
     * @param boolean $isPromoted
     *
     * @return Security
     */
    public function setIsPromoted($isPromoted)
    {
        $this->isPromoted = $isPromoted;

        return $this;
    }

    /**
     * Get isPromoted
     *
     * @return bool
     */
    public function getIsPromoted()
    {
        return $this->isPromoted;
    }

    /**
     * Set promotionId
     *
     * @param integer $promotionId
     *
     * @return Security
     */
    public function setPromotionId($promotionId)
    {
        $this->promotionId = $promotionId;

        return $this;
    }

    /**
     * Get promotionId
     *
     * @return int
     */
    public function getPromotionId()
    {
        return $this->promotionId;
    }

    /**
     * Set coordinatesLong
     *
     * @param string $coordinatesLong
     *
     * @return Security
     */
    public function setCoordinatesLong($coordinatesLong)
    {
        $this->coordinatesLong = $coordinatesLong;

        return $this;
    }

    /**
     * Get coordinatesLong
     *
     * @return string
     */
    public function getCoordinatesLong()
    {
        return $this->coordinatesLong;
    }

    /**
     * Set coordinatesLat
     *
     * @param string $coordinatesLat
     *
     * @return Security
     */
    public function setCoordinatesLat($coordinatesLat)
    {
        $this->coordinatesLat = $coordinatesLat;

        return $this;
    }

    /**
     * Get coordinatesLat
     *
     * @return string
     */
    public function getCoordinatesLat()
    {
        return $this->coordinatesLat;
    }

    /**
     * Set credRating
     *
     * @param integer $credRating
     *
     * @return Security
     */
    public function setCredRating($credRating)
    {
        $this->credRating = $credRating;

        return $this;
    }

    /**
     * Get credRating
     *
     * @return int
     */
    public function getCredRating()
    {
        return $this->credRating;
    }

    /**
     * Set isSuspended
     *
     * @param boolean $isSuspended
     *
     * @return Security
     */
    public function setIsSuspended($isSuspended)
    {
        $this->isSuspended = $isSuspended;

        return $this;
    }

    /**
     * Get isSuspended
     *
     * @return bool
     */
    public function getIsSuspended()
    {
        return $this->isSuspended;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Security
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateEdited
     *
     * @param \DateTime $dateEdited
     *
     * @return Security
     */
    public function setDateEdited($dateEdited)
    {
        $this->dateEdited = $dateEdited;

        return $this;
    }

    /**
     * Get dateEdited
     *
     * @return \DateTime
     */
    public function getDateEdited()
    {
        return $this->dateEdited;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Security
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
     * Set zoneId
     *
     * @param integer $zoneId
     *
     * @return Security
     */
    public function setZoneId($zoneId)
    {
        $this->zoneId = $zoneId;

        return $this;
    }

    /**
     * Get zoneId
     *
     * @return int
     */
    public function getZoneId()
    {
        return $this->zoneId;
    }

    /**
     * Set isArmed
     *
     * @param boolean $isArmed
     *
     * @return Security
     */
    public function setIsArmed($isArmed)
    {
        $this->isArmed = $isArmed;

        return $this;
    }

    /**
     * Get isArmed
     *
     * @return bool
     */
    public function getIsArmed()
    {
        return $this->isArmed;
    }

    /**
     * Set tags
     *
     * @param string $tags
     *
     * @return Security
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set metaTitle
     *
     * @param string $metaTitle
     *
     * @return Security
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * Get metaTitle
     *
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     *
     * @return Security
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
}

