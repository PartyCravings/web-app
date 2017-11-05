<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServiceRepository")
 */
class Service
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
     * @Assert\NotBlank(message="service.blank_name")
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @Gedmo\Slug(fields={"name", "created"})
     * @ORM\Column(type="string", unique=true)
     */
    private $slug;

    /**
     * @var Vendor
     *
     * @ORM\ManyToOne(targetEntity="Vendor", inversedBy="services")
     */
    private $vendor;

    /**
     * @ORM\OneToOne(targetEntity="ServiceDescriptions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $serviceDescriptions;

    /**
     * @var Campaigns
     *
     * @ORM\ManyToMany(targetEntity="Campaigns", inversedBy="services")
     */
    private $campaigns;

    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="services")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @var Address
     *
     * @ORM\ManyToOne(targetEntity="Address")
     */
    private $address;

    /**
     * @var Reviews
     *
     * @ORM\OneToMany(targetEntity="Reviews", mappedBy="service")
     */
    private $reviews;

    /**
     * @var Feature[]|ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Feature", cascade={"persist"})
     * @ORM\OrderBy({"name": "ASC"})
     * @Assert\Count(max="4", maxMessage="service.too_many_feature")
     */
    private $features;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled = false;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->campaigns = new ArrayCollection();
        $this->reviews = new ArrayCollection();
        $this->features = new ArrayCollection();
    }

    public function getAverageRating()
    {
        try {
            return intdiv(array_sum($this->reviews), count($this->reviews));
        } catch (DivisionByZeroError $e) {
            return 0;
        }
    }

    public function getMinimumRating()
    {
        return min($this->reviews);
    }

    public function getCountRating()
    {
        return count($this->reviews);
    }
}
