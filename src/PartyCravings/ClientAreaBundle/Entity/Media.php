<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\MediaRepository")
 */
class Media
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
     * @ORM\Column(name="association_type", type="string", length=255)
     */
    private $associationType;

    /**
     * @var int
     *
     * @ORM\Column(name="association_id", type="integer")
     */
    private $associationId;

    /**
     * @var string
     *
     * @ORM\Column(name="uploaded_by", type="string", length=255)
     */
    private $uploadedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=255)
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="name_id", type="integer")
     */
    private $nameId;

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
     * @var bool
     *
     * @ORM\Column(name="private", type="boolean")
     */
    private $private;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="mimetype", type="string", length=255)
     */
    private $mimetype;

    /**
     * @var string
     *
     * @ORM\Column(name="filesize", type="string", length=255)
     */
    private $filesize;

    /**
     * @var bool
     *
     * @ORM\Column(name="drive", type="boolean")
     */
    private $drive;

    /**
     * @var string
     *
     * @ORM\Column(name="access_key", type="string", length=255)
     */
    private $accessKey;

    /**
     * @var bool
     *
     * @ORM\Column(name="image", type="boolean")
     */
    private $image;

    /**
     * @var bool
     *
     * @ORM\Column(name="audio", type="boolean")
     */
    private $audio;

    /**
     * @var bool
     *
     * @ORM\Column(name="video", type="boolean")
     */
    private $video;

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
     * Set associationType
     *
     * @param string $associationType
     *
     * @return Media
     */
    public function setAssociationType($associationType)
    {
        $this->associationType = $associationType;

        return $this;
    }

    /**
     * Get associationType
     *
     * @return string
     */
    public function getAssociationType()
    {
        return $this->associationType;
    }

    /**
     * Set associationId
     *
     * @param integer $associationId
     *
     * @return Media
     */
    public function setAssociationId($associationId)
    {
        $this->associationId = $associationId;

        return $this;
    }

    /**
     * Get associationId
     *
     * @return int
     */
    public function getAssociationId()
    {
        return $this->associationId;
    }

    /**
     * Set uploadedBy
     *
     * @param string $uploadedBy
     *
     * @return Media
     */
    public function setUploadedBy($uploadedBy)
    {
        $this->uploadedBy = $uploadedBy;

        return $this;
    }

    /**
     * Get uploadedBy
     *
     * @return string
     */
    public function getUploadedBy()
    {
        return $this->uploadedBy;
    }

    /**
     * Set fileName
     *
     * @param string $fileName
     *
     * @return Media
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Media
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
     * Set nameId
     *
     * @param integer $nameId
     *
     * @return Media
     */
    public function setNameId($nameId)
    {
        $this->nameId = $nameId;

        return $this;
    }

    /**
     * Get nameId
     *
     * @return int
     */
    public function getNameId()
    {
        return $this->nameId;
    }

    /**
     * Set dateAdd
     *
     * @param string $dateAdd
     *
     * @return Media
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
     * @return Media
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
     * Set private
     *
     * @param boolean $private
     *
     * @return Media
     */
    public function setPrivate($private)
    {
        $this->private = $private;

        return $this;
    }

    /**
     * Get private
     *
     * @return bool
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Media
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
     * Set mimetype
     *
     * @param string $mimetype
     *
     * @return Media
     */
    public function setMimetype($mimetype)
    {
        $this->mimetype = $mimetype;

        return $this;
    }

    /**
     * Get mimetype
     *
     * @return string
     */
    public function getMimetype()
    {
        return $this->mimetype;
    }

    /**
     * Set filesize
     *
     * @param string $filesize
     *
     * @return Media
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;

        return $this;
    }

    /**
     * Get filesize
     *
     * @return string
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Set drive
     *
     * @param boolean $drive
     *
     * @return Media
     */
    public function setDrive($drive)
    {
        $this->drive = $drive;

        return $this;
    }

    /**
     * Get drive
     *
     * @return bool
     */
    public function getDrive()
    {
        return $this->drive;
    }

    /**
     * Set accessKey
     *
     * @param string $accessKey
     *
     * @return Media
     */
    public function setAccessKey($accessKey)
    {
        $this->accessKey = $accessKey;

        return $this;
    }

    /**
     * Get accessKey
     *
     * @return string
     */
    public function getAccessKey()
    {
        return $this->accessKey;
    }

    /**
     * Set image
     *
     * @param boolean $image
     *
     * @return Media
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return bool
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set audio
     *
     * @param boolean $audio
     *
     * @return Media
     */
    public function setAudio($audio)
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * Get audio
     *
     * @return bool
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * Set video
     *
     * @param boolean $video
     *
     * @return Media
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return bool
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return Media
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
     * @return Media
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
     * @return Media
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
    public function getIsDeleted() : bool
    {
        return $this->isDeleted;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}

