<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceFilterRangesDescriptions
 *
 * @ORM\Table(name="service_filter_ranges_descriptions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\serviceFilterRangesDescriptionsRepository")
 */
class ServiceFilterRangesDescriptions
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="lang_id", type="integer")
     */
    private $langId;


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
     * @return ServiceFilterRangesDescriptions
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
     * Set name
     *
     * @param string $name
     *
     * @return ServiceFilterRangesDescriptions
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

    /**
     * Set langId
     *
     * @param integer $langId
     *
     * @return ServiceFilterRangesDescriptions
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
}

