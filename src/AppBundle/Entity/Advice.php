<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Advice
 *
 * @ORM\Table(name="advice")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdviceRepository")
 */
class Advice
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
     * @ORM\Column(name="location", type="text")
     */
    private $content;

    /**
     * @var Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="start_date", type="datetime")
     */
    private $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="end_date", type="datetime")
     */
    private $endDate;
}
