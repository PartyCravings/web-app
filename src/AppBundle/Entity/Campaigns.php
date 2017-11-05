<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Campaigns
 *
 * @ORM\Table(name="campaigns")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CampaignsRepository")
 */
class Campaigns
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
     * @var Service
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Service", mappedBy="campaigns")
     */
    private $services;

    /**
     * @var Media
     *
     * @ORM\OneToOne(targetEntity="Files")
     * @ORM\JoinColumn(nullable=false)
     */
    private $imageUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime")
     */
    private $endDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime")
     */
    private $startDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled = true;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;

    /**
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="Accounts")
     */
    private $createdBy;

    /**
     * @Gedmo\Blameable(on="update")
     * @ORM\ManyToOne(targetEntity="Accounts")
     */
    private $updatedBy;


    /**
     * Campaigns constructor.
     */
    public function __construct()
    {
        $this->services = new ArrayCollection();
    }
}
