<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TaxRates
 *
 * @ORM\Table(name="tax_rates")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaxRatesRepository")
 */
class TaxRates
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var float
     *
     * @Assert\NotBlank(message="tax.rate.blank")
     * @Assert\Range(
     *      min = 0,
     *      max = 100,
     *      invalidMessage="taxrate.rate.invalid"
     * )
     * @ORM\Column(name="rate", type="float")
     */
    private $rate;

    /**
     * @var string
     *
     * @ORM\Column(name="rate_prefix", type="string", nullable=true)
     */
    private $ratePrefix;

    public function __toString()
    {
        return $this->rate;
    }



    /**
     * Get id
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rate
     *
     * @param float $rate
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
     * @return float
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
}
