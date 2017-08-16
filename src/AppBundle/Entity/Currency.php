<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Currency
 *
 * @ORM\Table(name="currency")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CurrencyRepository")
 */
class Currency
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
    * @ORM\OneToMany(targetEntity="PartyCravings\ClientAreaBundle\Entity\AsoEbi", mappedBy="currencyId")
    */
    private $asoEbi;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code", type="string", length=255)
     */
    private $isoCode;

    /**
    * @ORM\OneToMany(targetEntity="PartyCravings\ClientAreaBundle\Entity\AffiliatesExtra", mappedBy="currencyId")
    */
    private $affiliatesExtra;

    /**
     * @var string
     *
     * @ORM\Column(name="sign", type="string", length=255)
     */
    private $sign;

    /**
     * @var string
     *
     * @ORM\Column(name="blank", type="string", length=255)
     */
    private $blank;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=255)
     */
    private $format;

    /**
     * @var string
     *
     * @ORM\Column(name="decimals", type="string", length=255)
     */
    private $decimals;

    /**
     * @var string
     *
     * @ORM\Column(name="conversion_rate", type="string", length=255)
     */
    private $conversionRate;

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
     * @ORM\Column(name="vendor", type="string", length=255)
     */
    private $vendor;

    public function __construct()
    {
        $this->affiliatesExtra = new ArrayCollection();
        $this->asoEbi = new ArrayCollection();
    }

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
     * Set isoCode
     *
     * @param string $isoCode
     *
     * @return Currency
     */
    public function setIsoCode($isoCode)
    {
        $this->isoCode = $isoCode;

        return $this;
    }

    /**
     * Get isoCode
     *
     * @return string
     */
    public function getIsoCode()
    {
        return $this->isoCode;
    }

    /**
     * Set sign
     *
     * @param string $sign
     *
     * @return Currency
     */
    public function setSign($sign)
    {
        $this->sign = $sign;

        return $this;
    }

    /**
     * Get sign
     *
     * @return string
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * Set blank
     *
     * @param string $blank
     *
     * @return Currency
     */
    public function setBlank($blank)
    {
        $this->blank = $blank;

        return $this;
    }

    /**
     * Get blank
     *
     * @return string
     */
    public function getBlank()
    {
        return $this->blank;
    }

    /**
     * Set format
     *
     * @param string $format
     *
     * @return Currency
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set decimals
     *
     * @param string $decimals
     *
     * @return Currency
     */
    public function setDecimals($decimals)
    {
        $this->decimals = $decimals;

        return $this;
    }

    /**
     * Get decimals
     *
     * @return string
     */
    public function getDecimals()
    {
        return $this->decimals;
    }

    /**
     * Set conversionRate
     *
     * @param string $conversionRate
     *
     * @return Currency
     */
    public function setConversionRate($conversionRate)
    {
        $this->conversionRate = $conversionRate;

        return $this;
    }

    /**
     * Get conversionRate
     *
     * @return string
     */
    public function getConversionRate()
    {
        return $this->conversionRate;
    }

    /**
     * Set deleted
     *
     * @param string $deleted
     *
     * @return Currency
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
     * @return Currency
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
     * Set vendor
     *
     * @param string $vendor
     *
     * @return Currency
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
