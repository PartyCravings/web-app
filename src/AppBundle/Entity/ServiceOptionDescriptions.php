<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceOptionDescriptions
 *
 * @ORM\Table(name="service_option_descriptions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\serviceOptionDescriptionsRepository")
 */
class ServiceOptionDescriptions
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
     * @ORM\OneToOne(targetEntity="ServiceOptions", mappedBy="serviceOptionDesccriptions")
     */
    private $serviceOptionId;

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
     * @ORM\Column(name="option_placeholder", type="string", length=255)
     */
    private $optionPlaceholder;

    /**
     * @var string
     *
     * @ORM\Column(name="error_text", type="string", length=255)
     */
    private $errorText;


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
     * Set serviceOptionId
     *
     * @param integer $serviceOptionId
     *
     * @return ServiceOptionDescriptions
     */
    public function setserviceOptionId($serviceOptionId)
    {
        $this->serviceOptionId = $serviceOptionId;

        return $this;
    }

    /**
     * Get serviceOptionId
     *
     * @return int
     */
    public function getserviceOptionId()
    {
        return $this->serviceOptionId;
    }

    /**
     * Set langId
     *
     * @param integer $langId
     *
     * @return ServiceOptionDescriptions
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
     * @return ServiceOptionDescriptions
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
     * @return ServiceOptionDescriptions
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
     * Set optionPlaceholder
     *
     * @param string $optionPlaceholder
     *
     * @return ServiceOptionDescriptions
     */
    public function setOptionPlaceholder($optionPlaceholder)
    {
        $this->optionPlaceholder = $optionPlaceholder;

        return $this;
    }

    /**
     * Get optionPlaceholder
     *
     * @return string
     */
    public function getOptionPlaceholder()
    {
        return $this->optionPlaceholder;
    }

    /**
     * Set errorText
     *
     * @param string $errorText
     *
     * @return ServiceOptionDescriptions
     */
    public function setErrorText($errorText)
    {
        $this->errorText = $errorText;

        return $this;
    }

    /**
     * Get errorText
     *
     * @return string
     */
    public function getErrorText()
    {
        return $this->errorText;
    }
}

