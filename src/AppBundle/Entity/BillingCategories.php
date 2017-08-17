<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * BillingCategories
 *
 * @ORM\Table(name="billing_categories")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BillingCategoriesRepository")
 */
class BillingCategories
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="default_value", type="string", length=255)
     */
    private $defaultValue;

    /**
     * @var string
     *
     * @ORM\Column(name="report_name", type="string", length=255)
     */
    private $reportName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="date_upd", type="string", length=255)
     */
    private $dateUpd;

    /**
     * @var int
     *
     * @ORM\Column(name="updated_by_id", type="integer")
     */
    private $updatedById;

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
     * Set billingId
     *
     * @param integer $billingId
     *
     * @return BillingCategories
     */
    public function setBillingId($billingId)
    {
        $this->billingId = $billingId;

        return $this;
    }

    /**
     * Get billingId
     *
     * @return int
     */
    public function getBillingId()
    {
        return $this->billingId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return BillingCategories
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
     * Set description
     *
     * @param string $description
     *
     * @return BillingCategories
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

    /**
     * Set defaultValue
     *
     * @param string $defaultValue
     *
     * @return BillingCategories
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

    /**
     * Get defaultValue
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Set reportName
     *
     * @param string $reportName
     *
     * @return BillingCategories
     */
    public function setReportName($reportName)
    {
        $this->reportName = $reportName;

        return $this;
    }

    /**
     * Get reportName
     *
     * @return string
     */
    public function getReportName()
    {
        return $this->reportName;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return BillingCategories
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
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
     * @return BillingCategories
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
     * Set updatedById
     *
     * @param integer $updatedById
     *
     * @return BillingCategories
     */
    public function setUpdatedById($updatedById)
    {
        $this->updatedById = $updatedById;

        return $this;
    }

    /**
     * Get updatedById
     *
     * @return int
     */
    public function getUpdatedById()
    {
        return $this->updatedById;
    }
}

