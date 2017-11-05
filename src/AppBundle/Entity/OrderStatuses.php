<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderStatuses
 *
 * @ORM\Table(name="order_statuses")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderStatusesRepository")
 */
class OrderStatuses
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
     * @ORM\Column(name="name", type="string")
     */
    private $name;


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
     * @return OrderStatuses
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
     * Set langId
     *
     * @param integer $langId
     *
     * @return OrderStatuses
     */
    public function setLangId($langId)
    {
        $this->langId = $langId;

        return $this;
    }

    /**
     * Get langId
     *
     * @return int
     */
    public function getLangId()
    {
        return $this->langId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return OrderStatuses
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
