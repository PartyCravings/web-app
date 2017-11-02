<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

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
     * @var Address
     *
     * @ORM\OneToOne(targetEntity="Address")
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\ManyToMany(targetEntity="Accounts")
     */
    private $employees;

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
     * @ORM\Column(name="active", type="string", length=255)
     */
    private $isEnabled;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;


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

    /**
     * Set address
     *
     * @param \AppBundle\Entity\Address $address
     *
     * @return Warehouse
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
     * Constructor
     */
    public function __construct()
    {
        $this->employees = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set isEnabled
     *
     * @param string $isEnabled
     *
     * @return Warehouse
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return string
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
     * @return Warehouse
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
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Warehouse
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
     * Add employee
     *
     * @param \AppBundle\Entity\Accounts $employee
     *
     * @return Warehouse
     */
    public function addEmployee(\AppBundle\Entity\Accounts $employee)
    {
        $this->employees[] = $employee;

        return $this;
    }

    /**
     * Remove employee
     *
     * @param \AppBundle\Entity\Accounts $employee
     */
    public function removeEmployee(\AppBundle\Entity\Accounts $employee)
    {
        $this->employees->removeElement($employee);
    }

    /**
     * Get employees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmployees()
    {
        return $this->employees;
    }
}
