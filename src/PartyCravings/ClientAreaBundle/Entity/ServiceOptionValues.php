<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceOptionValues
 *
 * @ORM\Table(name="service_option_values")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\serviceOptionValuesRepository")
 */
class ServiceOptionValues
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
     * @ORM\OneToOne(targetEntity="PartyCravings\ClientAreaBundle\Entity\ServiceOptionValueDescriptions", inversedBy="serviceOptionValues")
     * @ORM\JoinColumn(name="serviceOptionValueDescriptions", referencedColumnName="id")
    */
    private $serviceOptionValueDescriptions;

    /**
     * @var int
     *
     * @ORM\Column(name="service_option_id", type="integer")
     */
    private $serviceOptionId;

    /**
     * @var int
     *
     * @ORM\Column(name="service_id", type="integer")
     */
    private $serviceId;

    /**
     * @var int
     *
     * @ORM\Column(name="group_id", type="integer")
     */
    private $groupId;

    /**
     * @var string
     *
     * @ORM\Column(name="sku", type="string", length=255)
     */
    private $sku;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var bool
     *
     * @ORM\Column(name="subtarct", type="boolean")
     */
    private $subtarct;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=0)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="prefix", type="string", length=255)
     */
    private $prefix;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=10, scale=0)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="weight_type", type="string", length=255)
     */
    private $weightType;

    /**
     * @var int
     *
     * @ORM\Column(name="attribute_value_id", type="integer")
     */
    private $attributeValueId;

    /**
     * @var string
     *
     * @ORM\Column(name="grouped_attribute_data", type="string", length=255)
     */
    private $groupedAttributeData;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer")
     */
    private $sortOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="b", type="string", length=255)
     */
    private $b;


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
     * Set serviceOptionId
     *
     * @param integer $serviceOptionId
     *
     * @return ServiceOptionValues
     */
    public function setserviceOptionId($serviceOptionId)
    {
        $this->serviceOptionId = $serviceOptionId;

        return $this;
    }

    /**
     * Get serviceOptionId
     *
     * @return int
     */
    public function getserviceOptionId()
    {
        return $this->serviceOptionId;
    }

    /**
     * Set serviceId
     *
     * @param integer $serviceId
     *
     * @return ServiceOptionValues
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
     * Set groupId
     *
     * @param integer $groupId
     *
     * @return ServiceOptionValues
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set sku
     *
     * @param string $sku
     *
     * @return ServiceOptionValues
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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return ServiceOptionValues
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
     * Set subtarct
     *
     * @param boolean $subtarct
     *
     * @return ServiceOptionValues
     */
    public function setSubtarct($subtarct)
    {
        $this->subtarct = $subtarct;

        return $this;
    }

    /**
     * Get subtarct
     *
     * @return bool
     */
    public function getSubtarct()
    {
        return $this->subtarct;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return ServiceOptionValues
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
     * Set prefix
     *
     * @param string $prefix
     *
     * @return ServiceOptionValues
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * Get prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Set weight
     *
     * @param string $weight
     *
     * @return ServiceOptionValues
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
     * Set weightType
     *
     * @param string $weightType
     *
     * @return ServiceOptionValues
     */
    public function setWeightType($weightType)
    {
        $this->weightType = $weightType;

        return $this;
    }

    /**
     * Get weightType
     *
     * @return string
     */
    public function getWeightType()
    {
        return $this->weightType;
    }

    /**
     * Set attributeValueId
     *
     * @param integer $attributeValueId
     *
     * @return ServiceOptionValues
     */
    public function setAttributeValueId($attributeValueId)
    {
        $this->attributeValueId = $attributeValueId;

        return $this;
    }

    /**
     * Get attributeValueId
     *
     * @return int
     */
    public function getAttributeValueId()
    {
        return $this->attributeValueId;
    }

    /**
     * Set groupedAttributeData
     *
     * @param string $groupedAttributeData
     *
     * @return ServiceOptionValues
     */
    public function setGroupedAttributeData($groupedAttributeData)
    {
        $this->groupedAttributeData = $groupedAttributeData;

        return $this;
    }

    /**
     * Get groupedAttributeData
     *
     * @return string
     */
    public function getGroupedAttributeData()
    {
        return $this->groupedAttributeData;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return ServiceOptionValues
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
     * Set b
     *
     * @param string $b
     *
     * @return ServiceOptionValues
     */
    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }

    /**
     * Get b
     *
     * @return string
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @return mixed
     */
    public function getServiceOptionValueDescriptions()
    {
        return $this->serviceOptionValueDescriptions;
    }

    /**
     * @param mixed $serviceOptionValueDescriptions
     */
    public function setServiceOptionValueDescriptions($serviceOptionValueDescriptions)
    {
        $this->serviceOptionValueDescriptions = $serviceOptionValueDescriptions;
    }
}

