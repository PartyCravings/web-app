<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceOptionValueDescriptions
 *
 * @ORM\Table(name="service_option_value_descriptions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\serviceOptionValueDescriptionsRepository")
 */
class ServiceOptionValueDescriptions
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
     * @ORM\OneToOne(targetEntity="ServiceOptionValues", mappedBy="serviceOptionValueDescriptions")
     */
    private $serviceOptionValues;

    /**
     * @var int
     *
     * @ORM\Column(name="lang_id", type="integer")
     */
    private $langId;

    /**
     * @var int
     *
     * @ORM\Column(name="service_id", type="integer")
     */
    private $serviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="grouped_attribute_names", type="string", length=255)
     */
    private $groupedAttributeNames;


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
     * Set serviceOptionValueId
     *
     * @param integer $serviceOptionValues
     *
     * @return ServiceOptionValueDescriptions
     */
    public function setServiceOptionValues($serviceOptionValues)
    {
        $this->serviceOptionValues = $serviceOptionValues;

        return $this;
    }

    /**
     * Get serviceOptionValueId
     *
     * @return int
     */
    public function getServiceOptionValues()
    {
        return $this->serviceOptionValues;
    }

    /**
     * Set langId
     *
     * @param integer $langId
     *
     * @return ServiceOptionValueDescriptions
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
     * Set serviceId
     *
     * @param integer $serviceId
     *
     * @return ServiceOptionValueDescriptions
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
     * Set name
     *
     * @param string $name
     *
     * @return ServiceOptionValueDescriptions
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
     * Set groupedAttributeNames
     *
     * @param string $groupedAttributeNames
     *
     * @return ServiceOptionValueDescriptions
     */
    public function setGroupedAttributeNames($groupedAttributeNames)
    {
        $this->groupedAttributeNames = $groupedAttributeNames;

        return $this;
    }

    /**
     * Get groupedAttributeNames
     *
     * @return string
     */
    public function getGroupedAttributeNames()
    {
        return $this->groupedAttributeNames;
    }
}
