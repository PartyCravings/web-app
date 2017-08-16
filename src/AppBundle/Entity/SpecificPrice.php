<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecificPrice
 *
 * @ORM\Table(name="specific_price")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SpecificPriceRepository")
 */
class SpecificPrice
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
     * @ORM\Column(name="id_specific_price_rule", type="string", length=255)
     */
    private $idSpecificPriceRule;

    /**
     * @var string
     *
     * @ORM\Column(name="id_cart", type="string", length=255)
     */
    private $idCart;

    /**
     * @var string
     *
     * @ORM\Column(name="id_product", type="string", length=255)
     */
    private $idProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="id_vendor", type="string", length=255)
     */
    private $idVendor;

    /**
     * @var string
     *
     * @ORM\Column(name="id_vendor_group", type="string", length=255)
     */
    private $idVendorGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="id_currency", type="string", length=255)
     */
    private $idCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="id_country", type="string", length=255)
     */
    private $idCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="id_group", type="string", length=255)
     */
    private $idGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="id_customer", type="string", length=255)
     */
    private $idCustomer;

    /**
     * @var string
     *
     * @ORM\Column(name="id_product_attribute", type="string", length=255)
     */
    private $idProductAttribute;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=255)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="from_quantity", type="string", length=255)
     */
    private $fromQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="reduction", type="string", length=255)
     */
    private $reduction;

    /**
     * @var string
     *
     * @ORM\Column(name="reduction_tax", type="string", length=255)
     */
    private $reductionTax;

    /**
     * @var string
     *
     * @ORM\Column(name="reduction_type", type="string", length=255)
     */
    private $reductionType;


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
     * Set idSpecificPriceRule
     *
     * @param string $idSpecificPriceRule
     *
     * @return SpecificPrice
     */
    public function setIdSpecificPriceRule($idSpecificPriceRule)
    {
        $this->idSpecificPriceRule = $idSpecificPriceRule;

        return $this;
    }

    /**
     * Get idSpecificPriceRule
     *
     * @return string
     */
    public function getIdSpecificPriceRule()
    {
        return $this->idSpecificPriceRule;
    }

    /**
     * Set idCart
     *
     * @param string $idCart
     *
     * @return SpecificPrice
     */
    public function setIdCart($idCart)
    {
        $this->idCart = $idCart;

        return $this;
    }

    /**
     * Get idCart
     *
     * @return string
     */
    public function getIdCart()
    {
        return $this->idCart;
    }

    /**
     * Set idProduct
     *
     * @param string $idProduct
     *
     * @return SpecificPrice
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
     * Set idVendor
     *
     * @param string $idVendor
     *
     * @return SpecificPrice
     */
    public function setIdVendor($idVendor)
    {
        $this->idVendor = $idVendor;

        return $this;
    }

    /**
     * Get idVendor
     *
     * @return string
     */
    public function getIdVendor()
    {
        return $this->idVendor;
    }

    /**
     * Set idVendorGroup
     *
     * @param string $idVendorGroup
     *
     * @return SpecificPrice
     */
    public function setIdVendorGroup($idVendorGroup)
    {
        $this->idVendorGroup = $idVendorGroup;

        return $this;
    }

    /**
     * Get idVendorGroup
     *
     * @return string
     */
    public function getIdVendorGroup()
    {
        return $this->idVendorGroup;
    }

    /**
     * Set idCurrency
     *
     * @param string $idCurrency
     *
     * @return SpecificPrice
     */
    public function setIdCurrency($idCurrency)
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    /**
     * Get idCurrency
     *
     * @return string
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }

    /**
     * Set idCountry
     *
     * @param string $idCountry
     *
     * @return SpecificPrice
     */
    public function setIdCountry($idCountry)
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    /**
     * Get idCountry
     *
     * @return string
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }

    /**
     * Set idGroup
     *
     * @param string $idGroup
     *
     * @return SpecificPrice
     */
    public function setIdGroup($idGroup)
    {
        $this->idGroup = $idGroup;

        return $this;
    }

    /**
     * Get idGroup
     *
     * @return string
     */
    public function getIdGroup()
    {
        return $this->idGroup;
    }

    /**
     * Set idCustomer
     *
     * @param string $idCustomer
     *
     * @return SpecificPrice
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    /**
     * Get idCustomer
     *
     * @return string
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * Set idProductAttribute
     *
     * @param string $idProductAttribute
     *
     * @return SpecificPrice
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
     * Set price
     *
     * @param string $price
     *
     * @return SpecificPrice
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
     * Set fromQuantity
     *
     * @param string $fromQuantity
     *
     * @return SpecificPrice
     */
    public function setFromQuantity($fromQuantity)
    {
        $this->fromQuantity = $fromQuantity;

        return $this;
    }

    /**
     * Get fromQuantity
     *
     * @return string
     */
    public function getFromQuantity()
    {
        return $this->fromQuantity;
    }

    /**
     * Set reduction
     *
     * @param string $reduction
     *
     * @return SpecificPrice
     */
    public function setReduction($reduction)
    {
        $this->reduction = $reduction;

        return $this;
    }

    /**
     * Get reduction
     *
     * @return string
     */
    public function getReduction()
    {
        return $this->reduction;
    }

    /**
     * Set reductionTax
     *
     * @param string $reductionTax
     *
     * @return SpecificPrice
     */
    public function setReductionTax($reductionTax)
    {
        $this->reductionTax = $reductionTax;

        return $this;
    }

    /**
     * Get reductionTax
     *
     * @return string
     */
    public function getReductionTax()
    {
        return $this->reductionTax;
    }

    /**
     * Set reductionType
     *
     * @param string $reductionType
     *
     * @return SpecificPrice
     */
    public function setReductionType($reductionType)
    {
        $this->reductionType = $reductionType;

        return $this;
    }

    /**
     * Get reductionType
     *
     * @return string
     */
    public function getReductionType()
    {
        return $this->reductionType;
    }
}

