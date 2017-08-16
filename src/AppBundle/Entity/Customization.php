<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customization
 *
 * @ORM\Table(name="customization")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CustomizationRepository")
 */
class Customization
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
     * @ORM\Column(name="id_product_attribute", type="string", length=255)
     */
    private $idProductAttribute;

    /**
     * @var string
     *
     * @ORM\Column(name="id_address_delivery", type="string", length=255)
     */
    private $idAddressDelivery;

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
     * @ORM\Column(name="quantity", type="string", length=255)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_refunded", type="string", length=255)
     */
    private $quantityRefunded;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_returned", type="string", length=255)
     */
    private $quantityReturned;

    /**
     * @var string
     *
     * @ORM\Column(name="in_party_editor", type="string", length=255)
     */
    private $inPartyEditor;


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
     * Set idProductAttribute
     *
     * @param string $idProductAttribute
     *
     * @return Customization
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
     * Set idAddressDelivery
     *
     * @param string $idAddressDelivery
     *
     * @return Customization
     */
    public function setIdAddressDelivery($idAddressDelivery)
    {
        $this->idAddressDelivery = $idAddressDelivery;

        return $this;
    }

    /**
     * Get idAddressDelivery
     *
     * @return string
     */
    public function getIdAddressDelivery()
    {
        return $this->idAddressDelivery;
    }

    /**
     * Set idCart
     *
     * @param string $idCart
     *
     * @return Customization
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
     * @return Customization
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
     * Set quantity
     *
     * @param string $quantity
     *
     * @return Customization
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
     * Set quantityRefunded
     *
     * @param string $quantityRefunded
     *
     * @return Customization
     */
    public function setQuantityRefunded($quantityRefunded)
    {
        $this->quantityRefunded = $quantityRefunded;

        return $this;
    }

    /**
     * Get quantityRefunded
     *
     * @return string
     */
    public function getQuantityRefunded()
    {
        return $this->quantityRefunded;
    }

    /**
     * Set quantityReturned
     *
     * @param string $quantityReturned
     *
     * @return Customization
     */
    public function setQuantityReturned($quantityReturned)
    {
        $this->quantityReturned = $quantityReturned;

        return $this;
    }

    /**
     * Get quantityReturned
     *
     * @return string
     */
    public function getQuantityReturned()
    {
        return $this->quantityReturned;
    }

    /**
     * Set inPartyEditor
     *
     * @param string $inPartyEditor
     *
     * @return Customization
     */
    public function setInPartyEditor($inPartyEditor)
    {
        $this->inPartyEditor = $inPartyEditor;

        return $this;
    }

    /**
     * Get inPartyEditor
     *
     * @return string
     */
    public function getInPartyEditor()
    {
        return $this->inPartyEditor;
    }
}

