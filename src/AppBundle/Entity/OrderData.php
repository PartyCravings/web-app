<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderData
 *
 * @ORM\Table(name="order_data")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderDataRepository")
 */
class OrderData
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
     * @var OrderStatuses
     *
     * @ORM\ManyToOne(targetEntity="OrderStatuses")
     */
    private $orderStatus;

    /**
     * @var Service
     *
     * @ORM\ManyToOne(targetEntity="Service")
     */
    private $service;

    /**
     * @var string
     *
     * @ORM\Column(name="start_date", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime")
     */
    private $endDate;
}
