<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Delivery
 *
 * @ORM\Table(name="delivery")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DeliveryRepository")
 */
class Delivery
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
     * @ORM\Column(name="id_carrier", type="string", length=255)
     */
    private $idCarrier;

    /**
     * @var string
     *
     * @ORM\Column(name="id_range_price", type="string", length=255)
     */
    private $idRangePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="id_range_weight", type="string", length=255)
     */
    private $idRangeWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="id_zone", type="string", length=255)
     */
    private $idZone;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=255)
     */
    private $price;


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
     * Set idVendor
     *
     * @param string $idVendor
     *
     * @return Delivery
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
     * @return Delivery
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
     * Set idCarrier
     *
     * @param string $idCarrier
     *
     * @return Delivery
     */
    public function setIdCarrier($idCarrier)
    {
        $this->idCarrier = $idCarrier;

        return $this;
    }

    /**
     * Get idCarrier
     *
     * @return string
     */
    public function getIdCarrier()
    {
        return $this->idCarrier;
    }

    /**
     * Set idRangePrice
     *
     * @param string $idRangePrice
     *
     * @return Delivery
     */
    public function setIdRangePrice($idRangePrice)
    {
        $this->idRangePrice = $idRangePrice;

        return $this;
    }

    /**
     * Get idRangePrice
     *
     * @return string
     */
    public function getIdRangePrice()
    {
        return $this->idRangePrice;
    }

    /**
     * Set idRangeWeight
     *
     * @param string $idRangeWeight
     *
     * @return Delivery
     */
    public function setIdRangeWeight($idRangeWeight)
    {
        $this->idRangeWeight = $idRangeWeight;

        return $this;
    }

    /**
     * Get idRangeWeight
     *
     * @return string
     */
    public function getIdRangeWeight()
    {
        return $this->idRangeWeight;
    }

    /**
     * Set idZone
     *
     * @param string $idZone
     *
     * @return Delivery
     */
    public function setIdZone($idZone)
    {
        $this->idZone = $idZone;

        return $this;
    }

    /**
     * Get idZone
     *
     * @return string
     */
    public function getIdZone()
    {
        return $this->idZone;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Delivery
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
}
