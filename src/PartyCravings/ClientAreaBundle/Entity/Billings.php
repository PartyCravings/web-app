<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Billings
 *
 * @ORM\Table(name="billings")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\BillingsRepository")
 */
class Billings
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
    * @ORM\ManyToOne(targetEntity="PartyCravings\ClientAreaBundle\Entity\BillingCategories", inversedBy="billingId")
     * @ORM\JoinColumn(name="billingCategory",referencedColumnName="id")
     */
    private $billingCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="object_id", type="integer")
     */
    private $objectId;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;


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
     * Set objectId
     *
     * @param integer $objectId
     *
     * @return Billings
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * Get objectId
     *
     * @return int
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return Billings
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
     * @return mixed
     */
    public function getBillingCategory()
    {
        return $this->billingCategory;
    }

    /**
     * @param mixed $billingCategory
     */
    public function setBillingCategory($billingCategory)
    {
        $this->billingCategory = $billingCategory;
    }
}

