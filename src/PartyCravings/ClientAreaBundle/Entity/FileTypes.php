<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FileTypes
 *
 * @ORM\Table(name="file_types")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\FileTypesRepository")
 */
class FileTypes
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
     * @ORM\Column(name="file_id", type="integer")
     */
    private $fileId;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=255)
     */
    private $extension;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255)
     */
    private $icon;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_searchable", type="boolean")
     */
    private $isSearchable;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_image", type="boolean")
     */
    private $isImage;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_allow", type="boolean")
     */
    private $isAllow;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_deleted", type="boolean")
     */
    private $isDeleted;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_suspended", type="boolean")
     */
    private $isSuspended;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date_del", type="datetime")
     */
    private $dateDel;


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
     * Set fileId
     *
     * @param integer $fileId
     *
     * @return FileTypes
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;

        return $this;
    }

    /**
     * Get fileId
     *
     * @return int
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * Set extension
     *
     * @param string $extension
     *
     * @return FileTypes
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return FileTypes
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set isSearchable
     *
     * @param boolean $isSearchable
     *
     * @return FileTypes
     */
    public function setIsSearchable($isSearchable)
    {
        $this->isSearchable = $isSearchable;

        return $this;
    }

    /**
     * Get isSearchable
     *
     * @return bool
     */
    public function getIsSearchable()
    {
        return $this->isSearchable;
    }

    /**
     * Set isImage
     *
     * @param boolean $isImage
     *
     * @return FileTypes
     */
    public function setIsImage($isImage)
    {
        $this->isImage = $isImage;

        return $this;
    }

    /**
     * Get isImage
     *
     * @return bool
     */
    public function getIsImage()
    {
        return $this->isImage;
    }

    /**
     * Set isAllow
     *
     * @param boolean $isAllow
     *
     * @return FileTypes
     */
    public function setIsAllow($isAllow)
    {
        $this->isAllow = $isAllow;

        return $this;
    }

    /**
     * Get isAllow
     *
     * @return bool
     */
    public function getIsAllow()
    {
        return $this->isAllow;
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     *
     * @return FileTypes
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
     * Set isSuspended
     *
     * @param boolean $isSuspended
     *
     * @return FileTypes
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
     * Set dateAdd
     *
     * @param string $dateAdd
     *
     * @return FileTypes
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
     * @return FileTypes
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
     * Set dateDel
     *
     * @param \DateTime $dateDel
     *
     * @return FileTypes
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
}

