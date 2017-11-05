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
     * @Assert\NotBlank(message="service.blank_content")
     * @Assert\Length(min=10, minMessage="service.too_short_content")
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var float
     *
     * @Assert\NotBlank(message="service.blank_price")
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
}
