<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceSpecials
 *
 * @ORM\Table(name="service_specials")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\serviceSpecialsRepository")
 */
class ServiceSpecials
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
     * @ORM\Column(name="service_special_id", type="integer")
     */
    private $serviceSpecialId;

    /**
     * @var int
     *
     * @ORM\Column(name="service_id", type="integer")
     */
    private $serviceId;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_group_id", type="integer")
     */
    private $customerGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="integer")
     */
    private $priority;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=0)
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="datetime")
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="datetime")
     */
    private $dateEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime")
     */
    private $dateAdded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime")
     */
    private $dateModified;


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
     * Set serviceSpecialId
     *
     * @param integer $serviceSpecialId
     *
     * @return ServiceSpecials
     */
    public function setserviceSpecialId($serviceSpecialId)
    {
        $this->serviceSpecialId = $serviceSpecialId;

        return $this;
    }

    /**
     * Get serviceSpecialId
     *
     * @return int
     */
    public function getserviceSpecialId()
    {
        return $this->serviceSpecialId;
    }

    /**
     * Set serviceId
     *
     * @param integer $serviceId
     *
     * @return ServiceSpecials
     */
    public function setserviceId($serviceId)
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * Get serviceId
     *
     * @return int
     */
    public function getserviceId()
    {
        return $this->serviceId;
    }

    /**
     * Set customerGroupId
     *
     * @param integer $customerGroupId
     *
     * @return ServiceSpecials
     */
    public function setCustomerGroupId($customerGroupId)
    {
        $this->customerGroupId = $customerGroupId;

        return $this;
    }

    /**
     * Get customerGroupId
     *
     * @return int
     */
    public function getCustomerGroupId()
    {
        return $this->customerGroupId;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return ServiceSpecials
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return ServiceSpecials
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return ServiceSpecials
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     *
     * @return ServiceSpecials
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return ServiceSpecials
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return ServiceSpecials
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }
}

