<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceFilters
 *
 * @ORM\Table(name="services_filters")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\servicesFiltersRepository")
 */
class ServiceFilters
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
     * @ORM\Column(name="filter_id", type="integer")
     */
    private $filterId;

    /**
     * @var string
     *
     * @ORM\Column(name="filter_type", type="string", length=255)
     */
    private $filterType;

    /**
     * @var string
     *
     * @ORM\Column(name="categories_hash", type="string", length=255)
     */
    private $categoriesHash;

    /**
     * @var int
     *
     * @ORM\Column(name="feature_id", type="integer")
     */
    private $featureId;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer")
     */
    private $sortOrder;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;


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
     * Set filterId
     *
     * @param integer $filterId
     *
     * @return ServiceFilters
     */
    public function setFilterId($filterId)
    {
        $this->filterId = $filterId;

        return $this;
    }

    /**
     * Get filterId
     *
     * @return int
     */
    public function getFilterId()
    {
        return $this->filterId;
    }

    /**
     * Set filterType
     *
     * @param string $filterType
     *
     * @return ServiceFilters
     */
    public function setFilterType($filterType)
    {
        $this->filterType = $filterType;

        return $this;
    }

    /**
     * Get filterType
     *
     * @return string
     */
    public function getFilterType()
    {
        return $this->filterType;
    }

    /**
     * Set categoriesHash
     *
     * @param string $categoriesHash
     *
     * @return ServiceFilters
     */
    public function setCategoriesHash($categoriesHash)
    {
        $this->categoriesHash = $categoriesHash;

        return $this;
    }

    /**
     * Get categoriesHash
     *
     * @return string
     */
    public function getCategoriesHash()
    {
        return $this->categoriesHash;
    }

    /**
     * Set featureId
     *
     * @param integer $featureId
     *
     * @return ServiceFilters
     */
    public function setFeatureId($featureId)
    {
        $this->featureId = $featureId;

        return $this;
    }

    /**
     * Get featureId
     *
     * @return int
     */
    public function getFeatureId()
    {
        return $this->featureId;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return ServiceFilters
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return ServiceFilters
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }
}
