<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ServiceDescriptions.
 *
 * @ORM\Table(name="service_descriptions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\serviceDescriptionsRepository")
 */
class ServiceDescriptions
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
     * @var string
     *
     * @Assert\NotBlank(message="service.content.blank")
     * @Assert\Length(min=10, minMessage="service.too_short_content")
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var float
     *
     * @Assert\NotBlank(message="service.price.blank")
     * @ORM\Column(name="daily_price", type="float")
     */
    private $dailyPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="daily_discount", type="float", nullable=true)
     */
    private $dailyDiscount;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated;

    public function __toString()
    {
        return $this->description;
    }

    /**
     * Get id.
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return ServiceDescriptions
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dailyPrice.
     *
     * @param float $dailyPrice
     *
     * @return ServiceDescriptions
     */
    public function setDailyPrice($dailyPrice)
    {
        $this->dailyPrice = $dailyPrice;

        return $this;
    }

    /**
     * Get dailyPrice.
     *
     * @return float
     */
    public function getDailyPrice()
    {
        return $this->dailyPrice;
    }

    /**
     * Set dailyDiscount.
     *
     * @param float $dailyDiscount
     *
     * @return ServiceDescriptions
     */
    public function setDailyDiscount($dailyDiscount)
    {
        $this->dailyDiscount = $dailyDiscount;

        return $this;
    }

    /**
     * Get dailyDiscount.
     *
     * @return float
     */
    public function getDailyDiscount()
    {
        return $this->dailyDiscount;
    }

    /**
     * Set updated.
     *
     * @param \DateTime $updated
     *
     * @return ServiceDescriptions
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated.
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
