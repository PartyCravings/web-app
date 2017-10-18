<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AsoEbi
 *
 * @ORM\Table(name="aso_ebi")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AsoEbiRepository")
 */
class AsoEbi
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
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Manufacturers", inversedBy="asoEbi")
     * @ORM\JoinColumn(name="manufacturer_id", referencedColumnName="id")
     */
    private $manufacturerId;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Vendor", inversedBy="asoEbi")
     * @ORM\JoinColumn(name="vendor_id", referencedColumnName="id")
     */
    private $vendorId;

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
     * @ORM\Column(name="price", type="decimal", precision=6, scale=0)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="price_discount_excl_tax", type="decimal", precision=6, scale=0)
     */
    private $priceDiscountExclTax;

    /**
     * @var string
     *
     * @ORM\Column(name="price_discount_incl_tax", type="decimal", precision=6, scale=0)
     */
    private $priceDiscountInclTax;

    /**
     * @var bool
     *
     * @ORM\Column(name="taxable", type="boolean")
     */
    private $taxable;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="featured_image", type="boolean")
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
     * @ORM\Column(name="coordinates_lat", type="decimal", precision=10, scale=0)
     */
    private $coordinatesLat;

    /**
     * @var string
     *
     * @ORM\Column(name="coordinates_long", type="decimal", precision=10, scale=0)
     */
    private $coordinatesLong;

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
     * @var int
     *
     * @ORM\Column(name="views_counts", type="integer")
     */
    private $viewsCounts;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Zone", inversedBy="asoEbi")
     * @ORM\JoinColumn(name="zone_id", referencedColumnName="id")
     */
    private $zoneId;

    /**
     * @var int
     *
     * @ORM\Column(name="warehouse_id", type="integer")
     */
    private $warehouseId;

    /**
     * @var int
     *
     * @ORM\Column(name="warehouse_mode_id", type="integer")
     */
    private $warehouseModeId;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="allow_oversell_percentage", type="integer")
     */
    private $allowOversellPercentage;

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
     * Set name
     *
     * @param string $name
     *
     * @return AsoEbi
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
     * @return AsoEbi
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
     * Set vendorId
     *
     * @param integer $vendorId
     *
     * @return AsoEbi
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
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return AsoEbi
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
     * @return AsoEbi
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
     * @return AsoEbi
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
     * @return AsoEbi
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
     * @return AsoEbi
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
     * @return AsoEbi
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
     * Set featuredImage
     *
     * @param boolean $featuredImage
     *
     * @return AsoEbi
     */
    public function setFeaturedImage($featuredImage)
    {
        $this->featuredImage = $featuredImage;

        return $this;
    }

    /**
     * Get featuredImage
     *
     * @return bool
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
     * @return AsoEbi
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
     * @return AsoEbi
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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return AsoEbi
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
     * @return AsoEbi
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
     * Set isPromoted
     *
     * @param boolean $isPromoted
     *
     * @return AsoEbi
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
     * @return AsoEbi
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
     * Set coordinatesLat
     *
     * @param string $coordinatesLat
     *
     * @return AsoEbi
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
     * Set coordinatesLong
     *
     * @param string $coordinatesLong
     *
     * @return AsoEbi
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
     * Set credRating
     *
     * @param integer $credRating
     *
     * @return AsoEbi
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
     * @return AsoEbi
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
     * Set viewsCounts
     *
     * @param integer $viewsCounts
     *
     * @return AsoEbi
     */
    public function setViewsCounts($viewsCounts)
    {
        $this->viewsCounts = $viewsCounts;

        return $this;
    }

    /**
     * Get viewsCounts
     *
     * @return int
     */
    public function getViewsCounts()
    {
        return $this->viewsCounts;
    }

    /**
     * Set zoneId
     *
     * @param integer $zoneId
     *
     * @return AsoEbi
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
     * Set warehouseId
     *
     * @param integer $warehouseId
     *
     * @return AsoEbi
     */
    public function setWarehouseId($warehouseId)
    {
        $this->warehouseId = $warehouseId;

        return $this;
    }

    /**
     * Get warehouseId
     *
     * @return int
     */
    public function getWarehouseId()
    {
        return $this->warehouseId;
    }

    /**
     * Set warehouseModeId
     *
     * @param integer $warehouseModeId
     *
     * @return AsoEbi
     */
    public function setWarehouseModeId($warehouseModeId)
    {
        $this->warehouseModeId = $warehouseModeId;

        return $this;
    }

    /**
     * Get warehouseModeId
     *
     * @return int
     */
    public function getWarehouseModeId()
    {
        return $this->warehouseModeId;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return AsoEbi
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
     * Set allowOversellPercentage
     *
     * @param integer $allowOversellPercentage
     *
     * @return AsoEbi
     */
    public function setAllowOversellPercentage($allowOversellPercentage)
    {
        $this->allowOversellPercentage = $allowOversellPercentage;

        return $this;
    }

    /**
     * Get allowOversellPercentage
     *
     * @return int
     */
    public function getAllowOversellPercentage()
    {
        return $this->allowOversellPercentage;
    }

    /**
     * Set tags
     *
     * @param string $tags
     *
     * @return AsoEbi
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
     * @return AsoEbi
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
     * @return AsoEbi
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
