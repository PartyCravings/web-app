<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Members
 *
 * @ORM\Table(name="members")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MembersRepository")
 */
class Members
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
     * @ORM\Column(name="dimension_id", type="integer")
     */
    private $dimensionId;

    /**
     * @var int
     *
     * @ORM\Column(name="object_type_id", type="integer")
     */
    private $objectTypeId;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_member_id", type="integer")
     */
    private $parentMemberId;

    /**
     * @var int
     *
     * @ORM\Column(name="depth", type="integer")
     */
    private $depth;

    /**
     * @var string
     *
     * @ORM\Column(name="namee", type="string", length=255)
     */
    private $namee;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="object_id", type="integer")
     */
    private $objectId;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer")
     */
    private $sortOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255)
     */
    private $color;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="archived_on", type="datetime")
     */
    private $archivedOn;

    /**
     * @var int
     *
     * @ORM\Column(name="archived_by_id", type="integer")
     */
    private $archivedById;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_suspended", type="boolean")
     */
    private $isSuspended;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_deleted", type="boolean")
     */
    private $isDeleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
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
     * Set dimensionId
     *
     * @param integer $dimensionId
     *
     * @return Members
     */
    public function setDimensionId($dimensionId)
    {
        $this->dimensionId = $dimensionId;

        return $this;
    }

    /**
     * Get dimensionId
     *
     * @return int
     */
    public function getDimensionId()
    {
        return $this->dimensionId;
    }

    /**
     * Set objectTypeId
     *
     * @param integer $objectTypeId
     *
     * @return Members
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
     * Set parentMemberId
     *
     * @param integer $parentMemberId
     *
     * @return Members
     */
    public function setParentMemberId($parentMemberId)
    {
        $this->parentMemberId = $parentMemberId;

        return $this;
    }

    /**
     * Get parentMemberId
     *
     * @return int
     */
    public function getParentMemberId()
    {
        return $this->parentMemberId;
    }

    /**
     * Set depth
     *
     * @param integer $depth
     *
     * @return Members
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return int
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set namee
     *
     * @param string $namee
     *
     * @return Members
     */
    public function setNamee($namee)
    {
        $this->namee = $namee;

        return $this;
    }

    /**
     * Get namee
     *
     * @return string
     */
    public function getNamee()
    {
        return $this->namee;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Members
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
     * Set objectId
     *
     * @param integer $objectId
     *
     * @return Members
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
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return Members
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Members
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set archivedOn
     *
     * @param \DateTime $archivedOn
     *
     * @return Members
     */
    public function setArchivedOn($archivedOn)
    {
        $this->archivedOn = $archivedOn;

        return $this;
    }

    /**
     * Get archivedOn
     *
     * @return \DateTime
     */
    public function getArchivedOn()
    {
        return $this->archivedOn;
    }

    /**
     * Set archivedById
     *
     * @param integer $archivedById
     *
     * @return Members
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
     * Set isSuspended
     *
     * @param boolean $isSuspended
     *
     * @return Members
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
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return Members
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
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return Members
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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Members
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
     * @param \DateTime $dateUpd
     *
     * @return Members
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
}

