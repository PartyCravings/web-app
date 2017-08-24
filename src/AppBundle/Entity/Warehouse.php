<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Warehouse
 *
 * @ORM\Table(name="warehouse")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WarehouseRepository")
 */
class Warehouse
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
     * @ORM\Column(name="id_currency", type="string", length=255)
     */
    private $idCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="id_address", type="string", length=255)
     */
    private $idAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="id_employee", type="string", length=255)
     */
    private $idEmployee;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="management_type", type="string", length=255)
     */
    private $managementType;

    /**
     * @var string
     *
     * @ORM\Column(name="deleted", type="string", length=255)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=255)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="carrier", type="string", length=255)
     */
    private $carrier;

    /**
     * @var string
     *
     * @ORM\Column(name="product_location", type="string", length=255)
     */
    private $productLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor", type="string", length=255)
     */
    private $vendor;


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
     * Set idCurrency
     *
     * @param string $idCurrency
     *
     * @return Warehouse
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
     * Set idAddress
     *
     * @param string $idAddress
     *
     * @return Warehouse
     */
    public function setIdAddress($idAddress)
    {
        $this->idAddress = $idAddress;

        return $this;
    }

    /**
     * Get idAddress
     *
     * @return string
     */
    public function getIdAddress()
    {
        return $this->idAddress;
    }

    /**
     * Set idEmployee
     *
     * @param string $idEmployee
     *
     * @return Warehouse
     */
    public function setIdEmployee($idEmployee)
    {
        $this->idEmployee = $idEmployee;

        return $this;
    }

    /**
     * Get idEmployee
     *
     * @return string
     */
    public function getIdEmployee()
    {
        return $this->idEmployee;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Warehouse
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
     * Set name
     *
     * @param string $name
     *
     * @return Warehouse
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
     * Set managementType
     *
     * @param string $managementType
     *
     * @return Warehouse
     */
    public function setManagementType($managementType)
    {
        $this->managementType = $managementType;

        return $this;
    }

    /**
     * Get managementType
     *
     * @return string
     */
    public function getManagementType()
    {
        return $this->managementType;
    }

    /**
     * Set deleted
     *
     * @param string $deleted
     *
     * @return Warehouse
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
     * Set active
     *
     * @param string $active
     *
     * @return Warehouse
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
     * Set carrier
     *
     * @param string $carrier
     *
     * @return Warehouse
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
     * Set productLocation
     *
     * @param string $productLocation
     *
     * @return Warehouse
     */
    public function setProductLocation($productLocation)
    {
        $this->productLocation = $productLocation;

        return $this;
    }

    /**
     * Get productLocation
     *
     * @return string
     */
    public function getProductLocation()
    {
        return $this->productLocation;
    }

    /**
     * Set vendor
     *
     * @param string $vendor
     *
     * @return Warehouse
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
}
