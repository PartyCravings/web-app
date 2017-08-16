<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderStatusIds
 *
 * @ORM\Table(name="order_status_ids")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\OrderStatusIdsRepository")
 */
class OrderStatusIds
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="order_status_id", type="integer")
     */
    private $orderStatusId;

    /**
     * @var string
     *
     * @ORM\Column(name="status_text_id", type="string", length=255)
     */
    private $statusTextId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set orderStatusId
     *
     * @param integer $orderStatusId
     *
     * @return OrderStatusIds
     */
    public function setOrderStatusId($orderStatusId)
    {
        $this->orderStatusId = $orderStatusId;

        return $this;
    }

    /**
     * Get orderStatusId
     *
     * @return int
     */
    public function getOrderStatusId()
    {
        return $this->orderStatusId;
    }

    /**
     * Set statusTextId
     *
     * @param string $statusTextId
     *
     * @return OrderStatusIds
     */
    public function setStatusTextId($statusTextId)
    {
        $this->statusTextId = $statusTextId;

        return $this;
    }

    /**
     * Get statusTextId
     *
     * @return string
     */
    public function getStatusTextId()
    {
        return $this->statusTextId;
    }
}

