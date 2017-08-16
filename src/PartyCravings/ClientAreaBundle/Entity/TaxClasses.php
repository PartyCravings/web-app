<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxClasses
 *
 * @ORM\Table(name="tax_classes")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\TaxClassesRepository")
 */
class TaxClasses
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
     * @ORM\OneToOne(targetEntity="PartyCravings\ClientAreaBundle\Entity\TaxClassDescriptions", inversedBy="taxClassId")
     * @ORM\JoinColumn(name="taxClassDescriptions", referencedColumnName="id")
     */
    private $taxClassDescriptions;

    /**
     * @var string
     *
     * @ORM\Column(name="date_add", type="string", length=255)
     */
    private $dateAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="date_upd", type="string", length=255)
     */
    private $dateUpd;


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
     * Set dateAdd
     *
     * @param string $dateAdd
     *
     * @return TaxClasses
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return string
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param string $dateUpd
     *
     * @return TaxClasses
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return string
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * @return int
     */
    public function getTaxClassDescriptions(): int
    {
        return $this->taxClassDescriptions;
    }

    /**
     * @param int $taxClassDescriptions
     */
    public function setTaxClassDescriptions(int $taxClassDescriptions)
    {
        $this->taxClassDescriptions = $taxClassDescriptions;
    }
}

