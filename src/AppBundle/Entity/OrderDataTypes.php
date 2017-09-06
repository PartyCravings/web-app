<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderDataTypes
 *
 * @ORM\Table(name="order_data_types")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderDataTypesRepository")
 */
class OrderDataTypes
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
     * @ORM\OneToMany(targetEntity="OrderData", mappedBy="orderDataType")
     */
    private $typeId;

    /**
     * @var int
     *
     * @ORM\Column(name="lang_id", type="integer")
     */
    private $langId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="date_add", type="string", length=255)
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime")
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
     * Set typeId
     *
     * @param integer $typeId
     *
     * @return OrderDataTypes
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Set langId
     *
     * @param integer $langId
     *
     * @return OrderDataTypes
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
     * Set name
     *
     * @param string $name
     *
     * @return OrderDataTypes
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
     * Set dateAdd
     *
     * @param string $dateAdd
     *
     * @return OrderDataTypes
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
     * @param \DateTime $dateUpd
     *
     * @return OrderDataTypes
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->typeId = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add typeId
     *
     * @param \AppBundle\Entity\OrderData $typeId
     *
     * @return OrderDataTypes
     */
    public function addTypeId(\AppBundle\Entity\OrderData $typeId)
    {
        $this->typeId[] = $typeId;

        return $this;
    }

    /**
     * Remove typeId
     *
     * @param \AppBundle\Entity\OrderData $typeId
     */
    public function removeTypeId(\AppBundle\Entity\OrderData $typeId)
    {
        $this->typeId->removeElement($typeId);
    }
}
