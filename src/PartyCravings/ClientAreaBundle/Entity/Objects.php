<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objects
 *
 * @ORM\Table(name="objects")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\ObjectsRepository")
 */
class Objects
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
     * @ORM\ManyToMany(targetEntity="PartyCravings\ClientAreaBundle\Entity\ObjectProperties", inversedBy="objectId")
     * @ORM\JoinColumn(name="objectProperties", referencedColumnName="id")
     */
    private $objectProperties;

    /**
     * @var int
     *
     * @ORM\Column(name="object_type_id", type="integer")
     */
    private $objectTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    /**
     * @var int
     *
     * @ORM\Column(name="created_by_id", type="integer")
     */
    private $createdById;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime")
     */
    private $dateUpd;

    /**
     * @var int
     *
     * @ORM\Column(name="updated_by_id", type="integer")
     */
    private $updatedById;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_del", type="datetime")
     */
    private $dateDel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_archived", type="datetime")
     */
    private $dateArchived;

    /**
     * @var int
     *
     * @ORM\Column(name="archived_by_id", type="integer")
     */
    private $archivedById;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_suspended", type="boolean")
     */
    private $isSuspended;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_deleted", type="boolean")
     */
    private $isDeleted;


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
     * Set objectTypeId
     *
     * @param integer $objectTypeId
     *
     * @return Objects
     */
    public function setObjectTypeId($objectTypeId)
    {
        $this->objectTypeId = $objectTypeId;

        return $this;
    }

    /**
     * Get objectTypeId
     *
     * @return int
     */
    public function getObjectTypeId()
    {
        return $this->objectTypeId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Objects
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
     * @param \DateTime $dateAdd
     *
     * @return Objects
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
     * Set createdById
     *
     * @param integer $createdById
     *
     * @return Objects
     */
    public function setCreatedById($createdById)
    {
        $this->createdById = $createdById;

        return $this;
    }

    /**
     * Get createdById
     *
     * @return int
     */
    public function getCreatedById()
    {
        return $this->createdById;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     *
     * @return Objects
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
     * Set updatedById
     *
     * @param integer $updatedById
     *
     * @return Objects
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

    /**
     * Set dateDel
     *
     * @param \DateTime $dateDel
     *
     * @return Objects
     */
    public function setDateDel($dateDel)
    {
        $this->dateDel = $dateDel;

        return $this;
    }

    /**
     * Get dateDel
     *
     * @return \DateTime
     */
    public function getDateDel()
    {
        return $this->dateDel;
    }

    /**
     * Set dateArchived
     *
     * @param \DateTime $dateArchived
     *
     * @return Objects
     */
    public function setDateArchived($dateArchived)
    {
        $this->dateArchived = $dateArchived;

        return $this;
    }

    /**
     * Get dateArchived
     *
     * @return \DateTime
     */
    public function getDateArchived()
    {
        return $this->dateArchived;
    }

    /**
     * Set archivedById
     *
     * @param integer $archivedById
     *
     * @return Objects
     */
    public function setArchivedById($archivedById)
    {
        $this->archivedById = $archivedById;

        return $this;
    }

    /**
     * Get archivedById
     *
     * @return int
     */
    public function getArchivedById()
    {
        return $this->archivedById;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return Objects
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Set isSuspended
     *
     * @param boolean $isSuspended
     *
     * @return Objects
     */
    public function setIsSuspended($isSuspended)
    {
        $this->isSuspended = $isSuspended;

        return $this;
    }

    /**
     * Get isSuspended
     *
     * @return bool
     */
    public function getIsSuspended()
    {
        return $this->isSuspended;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return Objects
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * @return string
     */
    public function getObjectProperties(): string
    {
        return $this->objectProperties;
    }

    /**
     * @param string $objectProperties
     */
    public function setObjectProperties(string $objectProperties)
    {
        $this->objectProperties = $objectProperties;
    }
}

