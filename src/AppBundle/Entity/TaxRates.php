<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxRates
 *
 * @ORM\Table(name="tax_rates")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaxRatesRepository")
 */
class TaxRates
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
     * @ORM\Column(name="location_id", type="integer")
     */
    private $locationId;

    /**
     * @var int
     *
     * @ORM\Column(name="zone_id", type="integer")
     */
    private $zoneId;

    /**
     * @var int
     *
     * @ORM\Column(name="tax_class_id", type="integer")
     */
    private $taxClassId;

    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="integer")
     */
    private $priority;

    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="decimal", precision=10, scale=0)
     */
    private $rate;

    /**
     * @var string
     *
     * @ORM\Column(name="rate_prefix", type="string", length=255)
     */
    private $ratePrefix;

    /**
     * @var string
     *
     * @ORM\Column(name="threshold_condition", type="string", length=255)
     */
    private $thresholdCondition;

    /**
     * @var string
     *
     * @ORM\Column(name="theshold", type="decimal", precision=10, scale=0)
     */
    private $theshold;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_exempt_groups", type="string", length=255)
     */
    private $taxExemptGroups;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime")
     */
    private $dateUpd;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * Get locationId
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set zoneId
     *
     * @param integer $zoneId
     *
     * @return TaxRates
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
     * Set taxClassId
     *
     * @param integer $taxClassId
     *
     * @return TaxRates
     */
    public function setTaxClassId($taxClassId)
    {
        $this->taxClassId = $taxClassId;

        return $this;
    }

    /**
     * Get taxClassId
     *
     * @return int
     */
    public function getTaxClassId()
    {
        return $this->taxClassId;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return TaxRates
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set rate
     *
     * @param string $rate
     *
     * @return TaxRates
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set ratePrefix
     *
     * @param string $ratePrefix
     *
     * @return TaxRates
     */
    public function setRatePrefix($ratePrefix)
    {
        $this->ratePrefix = $ratePrefix;

        return $this;
    }

    /**
     * Get ratePrefix
     *
     * @return string
     */
    public function getRatePrefix()
    {
        return $this->ratePrefix;
    }

    /**
     * Set thresholdCondition
     *
     * @param string $thresholdCondition
     *
     * @return TaxRates
     */
    public function setThresholdCondition($thresholdCondition)
    {
        $this->thresholdCondition = $thresholdCondition;

        return $this;
    }

    /**
     * Get thresholdCondition
     *
     * @return string
     */
    public function getThresholdCondition()
    {
        return $this->thresholdCondition;
    }

    /**
     * Set theshold
     *
     * @param string $theshold
     *
     * @return TaxRates
     */
    public function setTheshold($theshold)
    {
        $this->theshold = $theshold;

        return $this;
    }

    /**
     * Get theshold
     *
     * @return string
     */
    public function getTheshold()
    {
        return $this->theshold;
    }

    /**
     * Set taxExemptGroups
     *
     * @param string $taxExemptGroups
     *
     * @return TaxRates
     */
    public function setTaxExemptGroups($taxExemptGroups)
    {
        $this->taxExemptGroups = $taxExemptGroups;

        return $this;
    }

    /**
     * Get taxExemptGroups
     *
     * @return string
     */
    public function getTaxExemptGroups()
    {
        return $this->taxExemptGroups;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return TaxRates
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
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     *
     * @return TaxRates
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * @return int
     */
    public function getTaxRateDescriptions(): int
    {
        return $this->taxRateDescriptions;
    }

    /**
     * @param int $taxRateDescriptions
     */
    public function setTaxRateDescriptions(int $taxRateDescriptions)
    {
        $this->taxRateDescriptions = $taxRateDescriptions;
    }
}
