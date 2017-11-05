<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ServiceDescriptions
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
     * @ORM\Column(name="hourly_price", type="float")
     */
    private $hourlyPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="hourly_discount", type="float", nullable=true)
     */
    private $hourlyDiscount;

    /**
     * @var Files
     *
     * @ORM\ManyToMany(targetEntity="Files")
     */
    private $uploadedFiles;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->uploadedFiles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->description;
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
     * Set description
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
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set hourlyPrice
     *
     * @param float $hourlyPrice
     *
     * @return ServiceDescriptions
     */
    public function setHourlyPrice($hourlyPrice)
    {
        $this->hourlyPrice = $hourlyPrice;

        return $this;
    }

    /**
     * Get hourlyPrice
     *
     * @return float
     */
    public function getHourlyPrice()
    {
        return $this->hourlyPrice;
    }

    /**
     * Set hourlyDiscount
     *
     * @param float $hourlyDiscount
     *
     * @return ServiceDescriptions
     */
    public function setHourlyDiscount($hourlyDiscount)
    {
        $this->hourlyDiscount = $hourlyDiscount;

        return $this;
    }

    /**
     * Get hourlyDiscount
     *
     * @return float
     */
    public function getHourlyDiscount()
    {
        return $this->hourlyDiscount;
    }

    /**
     * Set updated
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
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Add uploadedFile
     *
     * @param \AppBundle\Entity\Files $uploadedFile
     *
     * @return ServiceDescriptions
     */
    public function addUploadedFile(\AppBundle\Entity\Files $uploadedFile)
    {
        $this->uploadedFiles[] = $uploadedFile;

        return $this;
    }

    /**
     * Remove uploadedFile
     *
     * @param \AppBundle\Entity\Files $uploadedFile
     */
    public function removeUploadedFile(\AppBundle\Entity\Files $uploadedFile)
    {
        $this->uploadedFiles->removeElement($uploadedFile);
    }

    /**
     * Get uploadedFiles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUploadedFiles()
    {
        return $this->uploadedFiles;
    }
}
