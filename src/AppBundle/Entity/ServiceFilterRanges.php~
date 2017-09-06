<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceFilterRanges
 *
 * @ORM\Table(name="service_filter_ranges")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\serviceFilterRangesRepository")
 */
class ServiceFilterRanges
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
     * @ORM\Column(name="range_id", type="integer")
     */
    private $rangeId;

    /**
     * @var int
     *
     * @ORM\Column(name="feature_id", type="integer")
     */
    private $featureId;

    /**
     * @var int
     *
     * @ORM\Column(name="filter_id", type="integer")
     */
    private $filterId;

    /**
     * @var string
     *
     * @ORM\Column(name="form", type="string", length=255)
     */
    private $form;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer")
     */
    private $sortOrder;


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
     * Set rangeId
     *
     * @param integer $rangeId
     *
     * @return ServiceFilterRanges
     */
    public function setRangeId($rangeId)
    {
        $this->rangeId = $rangeId;

        return $this;
    }

    /**
     * Get rangeId
     *
     * @return int
     */
    public function getRangeId()
    {
        return $this->rangeId;
    }

    /**
     * Set featureId
     *
     * @param integer $featureId
     *
     * @return ServiceFilterRanges
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
     * Set filterId
     *
     * @param integer $filterId
     *
     * @return ServiceFilterRanges
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
     * Set form
     *
     * @param string $form
     *
     * @return ServiceFilterRanges
     */
    public function setForm($form)
    {
        $this->form = $form;

        return $this;
    }

    /**
     * Get form
     *
     * @return string
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return ServiceFilterRanges
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
}
