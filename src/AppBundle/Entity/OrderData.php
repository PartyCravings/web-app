<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\NotBlank(message="orderdata.orderstatus.blank")
     * @ORM\ManyToOne(targetEntity="OrderStatuses")
     */
    private $orderStatus;

    /**
     * @var Orders
     *
     * @ORM\ManyToOne(targetEntity="Orders", inversedBy="orderDatas")
     *
     */
    private $order;

    /**
     * @var Service
     *
     * @Assert\NotBlank(message="orderdata.service.blank")
     * @ORM\ManyToOne(targetEntity="Service")
     */
    private $service;

    /**
     * @var string
     *
     * @Assert\DateTime()
     * @ORM\Column(name="start_date", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @Assert\DateTime()
     * @Assert\Expression("value > this.startDate")
     * @ORM\Column(name="end_date", type="datetime")
     */
    private $endDate;

    public function __toString()
    {
        return $this->service;
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
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return OrderData
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return OrderData
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set orderStatus
     *
     * @param \AppBundle\Entity\OrderStatuses $orderStatus
     *
     * @return OrderData
     */
    public function setOrderStatus(\AppBundle\Entity\OrderStatuses $orderStatus = null)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return \AppBundle\Entity\OrderStatuses
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Set service
     *
     * @param \AppBundle\Entity\Service $service
     *
     * @return OrderData
     */
    public function setService(\AppBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \AppBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set order
     *
     * @param \AppBundle\Entity\Orders $order
     *
     * @return OrderData
     */
    public function setOrder(\AppBundle\Entity\Orders $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \AppBundle\Entity\Orders
     */
    public function getOrder()
    {
        return $this->order;
    }
}
