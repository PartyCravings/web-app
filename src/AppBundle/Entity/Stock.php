<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StockRepository")
 */
class Stock
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
     * @ORM\Column(name="id_warehouse", type="string", length=255)
     */
    private $idWarehouse;

    /**
     * @var string
     *
     * @ORM\Column(name="id_product", type="string", length=255)
     */
    private $idProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="id_product_attribute", type="string", length=255)
     */
    private $idProductAttribute;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="physical_quantity", type="string", length=255)
     */
    private $physicalQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="usable_quantity", type="string", length=255)
     */
    private $usableQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=255)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="available", type="string", length=255)
     */
    private $available;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt", type="string", length=255)
     */
    private $mvt;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_reason", type="string", length=255)
     */
    private $mvtReason;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_reason_lang", type="string", length=255)
     */
    private $mvtReasonLang;


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
     * Set idWarehouse
     *
     * @param string $idWarehouse
     *
     * @return Stock
     */
    public function setIdWarehouse($idWarehouse)
    {
        $this->idWarehouse = $idWarehouse;

        return $this;
    }

    /**
     * Get idWarehouse
     *
     * @return string
     */
    public function getIdWarehouse()
    {
        return $this->idWarehouse;
    }

    /**
     * Set idProduct
     *
     * @param string $idProduct
     *
     * @return Stock
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get idProduct
     *
     * @return string
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set idProductAttribute
     *
     * @param string $idProductAttribute
     *
     * @return Stock
     */
    public function setIdProductAttribute($idProductAttribute)
    {
        $this->idProductAttribute = $idProductAttribute;

        return $this;
    }

    /**
     * Get idProductAttribute
     *
     * @return string
     */
    public function getIdProductAttribute()
    {
        return $this->idProductAttribute;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Stock
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
     * Set physicalQuantity
     *
     * @param string $physicalQuantity
     *
     * @return Stock
     */
    public function setPhysicalQuantity($physicalQuantity)
    {
        $this->physicalQuantity = $physicalQuantity;

        return $this;
    }

    /**
     * Get physicalQuantity
     *
     * @return string
     */
    public function getPhysicalQuantity()
    {
        return $this->physicalQuantity;
    }

    /**
     * Set usableQuantity
     *
     * @param string $usableQuantity
     *
     * @return Stock
     */
    public function setUsableQuantity($usableQuantity)
    {
        $this->usableQuantity = $usableQuantity;

        return $this;
    }

    /**
     * Get usableQuantity
     *
     * @return string
     */
    public function getUsableQuantity()
    {
        return $this->usableQuantity;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Stock
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
     * Set available
     *
     * @param string $available
     *
     * @return Stock
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return string
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set mvt
     *
     * @param string $mvt
     *
     * @return Stock
     */
    public function setMvt($mvt)
    {
        $this->mvt = $mvt;

        return $this;
    }

    /**
     * Get mvt
     *
     * @return string
     */
    public function getMvt()
    {
        return $this->mvt;
    }

    /**
     * Set mvtReason
     *
     * @param string $mvtReason
     *
     * @return Stock
     */
    public function setMvtReason($mvtReason)
    {
        $this->mvtReason = $mvtReason;

        return $this;
    }

    /**
     * Get mvtReason
     *
     * @return string
     */
    public function getMvtReason()
    {
        return $this->mvtReason;
    }

    /**
     * Set mvtReasonLang
     *
     * @param string $mvtReasonLang
     *
     * @return Stock
     */
    public function setMvtReasonLang($mvtReasonLang)
    {
        $this->mvtReasonLang = $mvtReasonLang;

        return $this;
    }

    /**
     * Get mvtReasonLang
     *
     * @return string
     */
    public function getMvtReasonLang()
    {
        return $this->mvtReasonLang;
    }
}

