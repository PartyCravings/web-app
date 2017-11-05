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
     * @Assert\NotBlank(message="tax.blank_rate")
     * @ORM\Column(name="rate", type="float")
     */
    private $rate;

    /**
     * @var string
     *
     * @ORM\Column(name="rate_prefix", type="string", nullable=true)
     */
    private $ratePrefix;

}
