<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxRateDescriptions
 *
 * @ORM\Table(name="tax_rate_descriptions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaxRateDescriptionsRepository")
 */
class TaxRateDescriptions
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
     * @ORM\OneToOne(targetEntity="TaxRates", mappedBy="taxRateDescriptions")
     */
    private $taxRateId;

    /**
     * @var int
     *
     * @ORM\Column(name="lang_id", type="integer")
     */
    private $langId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


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
     * Set taxRateId
     *
     * @param integer $taxRateId
     *
     * @return TaxRateDescriptions
     */
    public function setTaxRateId($taxRateId)
    {
        $this->taxRateId = $taxRateId;

        return $this;
    }

    /**
     * Get taxRateId
     *
     * @return int
     */
    public function getTaxRateId()
    {
        return $this->taxRateId;
    }

    /**
     * Set langId
     *
     * @param integer $langId
     *
     * @return TaxRateDescriptions
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
     * Set description
     *
     * @param string $description
     *
     * @return TaxRateDescriptions
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
