<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Storages
 *
 * @ORM\Table(name="storages")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\StoragesRepository")
 */
class Storages
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
     * @ORM\Column(name="numeric_id", type="integer")
     */
    private $numericId;

    /**
     * @var bool
     *
     * @ORM\Column(name="available", type="boolean")
     */
    private $available;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_checked", type="datetime")
     */
    private $lastChecked;


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
     * Set numericId
     *
     * @param integer $numericId
     *
     * @return Storages
     */
    public function setNumericId($numericId)
    {
        $this->numericId = $numericId;

        return $this;
    }

    /**
     * Get numericId
     *
     * @return int
     */
    public function getNumericId()
    {
        return $this->numericId;
    }

    /**
     * Set available
     *
     * @param boolean $available
     *
     * @return Storages
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return bool
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set lastChecked
     *
     * @param \DateTime $lastChecked
     *
     * @return Storages
     */
    public function setLastChecked($lastChecked)
    {
        $this->lastChecked = $lastChecked;

        return $this;
    }

    /**
     * Get lastChecked
     *
     * @return \DateTime
     */
    public function getLastChecked()
    {
        return $this->lastChecked;
    }
}

