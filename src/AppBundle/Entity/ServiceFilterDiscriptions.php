<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceFilterDiscriptions
 *
 * @ORM\Table(name="service_filter_discriptions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\serviceFilterDiscriptionsRepository")
 */
class ServiceFilterDiscriptions
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
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;

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
     * Set filterId
     *
     * @param integer $filterId
     *
     * @return ServiceFilterDiscriptions
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
     * Set value
     *
     * @param string $value
     *
     * @return ServiceFilterDiscriptions
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set langId
     *
     * @param integer $langId
     *
     * @return ServiceFilterDiscriptions
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

