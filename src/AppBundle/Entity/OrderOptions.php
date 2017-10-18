<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderOptions
 *
 * @ORM\Table(name="order_options")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderOptionsRepository")
 */
class OrderOptions
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
     * @ORM\Column(name="order_id", type="integer")
     */
    private $orderId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_service_id", type="integer")
     */
    private $orderserviceId;

    /**
     * @var int
     *
     * @ORM\Column(name="service_option_value_id", type="integer")
     */
    private $serviceOptionValueId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="sku", type="string", length=255)
     */
    private $sku;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;

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
     * @ORM\Column(name="settings", type="string", length=255)
     */
    private $settings;


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
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return OrderOptions
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set orderserviceId
     *
     * @param integer $orderserviceId
     *
     * @return OrderOptions
     */
    public function setOrderserviceId($orderserviceId)
    {
        $this->orderserviceId = $orderserviceId;

        return $this;
    }

    /**
     * Get orderserviceId
     *
     * @return int
     */
    public function getOrderserviceId()
    {
        return $this->orderserviceId;
    }

    /**
     * Set serviceOptionValueId
     *
     * @param integer $serviceOptionValueId
     *
     * @return OrderOptions
     */
    public function setserviceOptionValueId($serviceOptionValueId)
    {
        $this->serviceOptionValueId = $serviceOptionValueId;

        return $this;
    }

    /**
     * Get serviceOptionValueId
     *
     * @return int
     */
    public function getserviceOptionValueId()
    {
        return $this->serviceOptionValueId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return OrderOptions
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
     * Set sku
     *
     * @param string $sku
     *
     * @return OrderOptions
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
     * Set value
     *
     * @param string $value
     *
     * @return OrderOptions
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return OrderOptions
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
     * @return OrderOptions
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
     * Set settings
     *
     * @param string $settings
     *
     * @return OrderOptions
     */
    public function setSettings($settings)
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * Get settings
     *
     * @return string
     */
    public function getSettings()
    {
        return $this->settings;
    }
}
